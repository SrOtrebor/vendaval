const https = require('https');
const fs = require('fs');
const path = require('path');

const baseUrl = 'https://check-shelf-45268805.figma.site';
const pagesDir = path.join(__dirname, 'src', 'pages');
const assetsDir = path.join(__dirname, 'public', 'figma_assets');

if (!fs.existsSync(pagesDir)) fs.mkdirSync(pagesDir, { recursive: true });
if (!fs.existsSync(assetsDir)) fs.mkdirSync(assetsDir, { recursive: true });

const pages = [
  { path: '/', name: 'Home' },
  { path: '/paks', name: 'Paks' },
  { path: '/formación', name: 'Formacion' },
  { path: '/formación-página-interna', name: 'FormacionInterna' },
  { path: '/tienda-página-interna', name: 'TiendaInterna' },
  { path: '/tienda', name: 'Tienda' },
  { path: '/projectsinterna-2', name: 'ProjectsInterna2' },
  { path: '/projectsinterna', name: 'ProjectsInterna' },
  { path: '/nosotras', name: 'Nosotras' },
  { path: '/contacto-desplegable', name: 'ContactoDesplegable' },
  { path: '/contacto', name: 'Contacto' },
  { path: '/el-taller', name: 'ElTaller' }
];

function fetchHtml(urlPath) {
  return new Promise((resolve, reject) => {
    const encodedPath = encodeURI(urlPath);
    https.get(baseUrl + encodedPath, (res) => {
      if (res.statusCode !== 200) {
        return reject(new Error(`Failed to fetch ${urlPath}, status: ${res.statusCode}`));
      }
      let data = '';
      res.on('data', chunk => data += chunk);
      res.on('end', () => resolve(data));
    }).on('error', reject);
  });
}

function downloadImage(url, filepath) {
  return new Promise((resolve, reject) => {
    https.get(url, (res) => {
      if (res.statusCode !== 200) {
        console.warn(`Failed to download ${url}`);
        return resolve();
      }
      const stream = fs.createWriteStream(filepath);
      res.pipe(stream);
      stream.on('finish', () => { stream.close(); resolve(); });
    }).on('error', reject);
  });
}

async function processPage(page) {
  console.log(`Processing ${page.name}...`);
  try {
    const html = await fetchHtml(page.path);
    
    // 1. Extract CSS
    const styleMatches = html.match(/<style[^>]*>([\s\S]*?)<\/style>/g);
    let allStyles = '';
    if (styleMatches) {
        styleMatches.forEach(tag => {
            const content = tag.replace(/<style[^>]*>/, '').replace(/<\/style>/, '');
            allStyles += content + '\n';
        });
    }
    allStyles = allStyles.replace(/#container\s*{\s*display:\s*none;?\s*}/g, '#container { display: block !important; }');
    fs.writeFileSync(path.join(pagesDir, `${page.name}.css`), allStyles);

    // 2. Extract Body
    let bodyContent = '';
    const bodyMatch = html.match(/<div id="container"[^>]*>([\s\S]*?)<\/div>\s*<script/);
    if (bodyMatch) {
        bodyContent = `<div id="container" class="figma-container">` + bodyMatch[1] + `</div>`;
    } else {
        const bodyInner = html.match(/<body[^>]*>([\s\S]*?)<\/body>/);
        if (bodyInner) bodyContent = bodyInner[1];
    }

    // Strip scripts
    bodyContent = bodyContent.replace(/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi, '');

    // Replace assets
    bodyContent = bodyContent.replace(/\/?_assets\/v11\//g, '/figma_assets/');

    // Find new assets
    const assetRegex = /_assets\/v11\/([a-zA-Z0-9]+\.[a-z]+)/g;
    let match;
    const downloadPromises = [];
    while ((match = assetRegex.exec(html)) !== null) {
      const filename = match[1];
      const localPath = path.join(assetsDir, filename);
      if (!fs.existsSync(localPath)) {
        console.log(`Downloading new asset: ${filename}`);
        const assetUrl = `${baseUrl}/_assets/v11/${filename}`;
        downloadPromises.push(downloadImage(assetUrl, localPath));
      }
    }
    await Promise.all(downloadPromises);

    // Escape for TS
    bodyContent = bodyContent.replace(/`/g, '\\`').replace(/\$\{/g, '\\${');
    fs.writeFileSync(path.join(pagesDir, `${page.name}Content.ts`), `export const html = \`${bodyContent}\`;\n`);

    // 3. Write React Component
    const componentCode = `import React from 'react';\nimport './${page.name}.css';\nimport { html } from './${page.name}Content';\n\nexport default function ${page.name}() {\n  return (\n    <div className="figma-root-wrapper" dangerouslySetInnerHTML={{ __html: html }} />\n  );\n}\n`;
    fs.writeFileSync(path.join(pagesDir, `${page.name}.tsx`), componentCode);
    
    console.log(`Finished ${page.name}`);
  } catch (err) {
    console.error(`Error processing ${page.name}:`, err.message);
  }
}

async function main() {
  for (const page of pages) {
    await processPage(page);
  }
  console.log('All pages processed!');
}

main();
