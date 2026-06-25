const https = require('https');
const fs = require('fs');
const path = require('path');

const baseUrl = 'https://check-shelf-45268805.figma.site';
const publicDir = path.join(__dirname, 'public');

function downloadFile(urlPath) {
  return new Promise((resolve, reject) => {
    // Determine local path
    const localPath = path.join(publicDir, urlPath);
    const dir = path.dirname(localPath);
    
    if (!fs.existsSync(dir)) {
      fs.mkdirSync(dir, { recursive: true });
    }

    if (fs.existsSync(localPath)) {
      return resolve();
    }

    console.log(`Downloading ${urlPath}...`);
    https.get(baseUrl + urlPath, (res) => {
      if (res.statusCode !== 200) {
        console.warn(`Failed to download ${urlPath}`);
        return resolve();
      }
      const stream = fs.createWriteStream(localPath);
      res.pipe(stream);
      stream.on('finish', () => { stream.close(); resolve(); });
    }).on('error', reject);
  });
}

async function main() {
  const html = fs.readFileSync(path.join(__dirname, 'site.html'), 'utf8');
  const woffMatches = html.match(/\/_woff\/[a-zA-Z0-9_\-\/]+\.woff2/g);
  
  if (!woffMatches) {
    console.log('No fonts found');
    return;
  }
  
  // Unique
  const fonts = [...new Set(woffMatches)];
  console.log(`Found ${fonts.length} fonts to download`);
  
  const promises = [];
  for (const f of fonts) {
    promises.push(downloadFile(f));
  }
  
  await Promise.all(promises);
  console.log('Done downloading fonts!');
}

main();
