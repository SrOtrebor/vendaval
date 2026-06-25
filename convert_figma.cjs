const fs = require('fs');

const html = fs.readFileSync('E:/Vendaval/site.html', 'utf8');

// 1. Extract styles
const styleMatches = html.match(/<style[^>]*>([\s\S]*?)<\/style>/g);
let allStyles = '';
if (styleMatches) {
    styleMatches.forEach(tag => {
        const content = tag.replace(/<style[^>]*>/, '').replace(/<\/style>/, '');
        allStyles += content + '\n';
    });
}
fs.writeFileSync('E:/Vendaval/src/figma.css', allStyles);

// 2. Extract body content
let bodyMatch = html.match(/<div id="container"[^>]*>([\s\S]*?)<\/div>\s*<script/);
let bodyContent = '';
if (bodyMatch) {
    bodyContent = `<div id="container" class="figma-container">` + bodyMatch[1] + `</div>`;
} else {
    const bodyInner = html.match(/<body[^>]*>([\s\S]*?)<\/body>/);
    if (bodyInner) {
        bodyContent = bodyInner[1];
    }
}

// Remove any inline scripts
bodyContent = bodyContent.replace(/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi, '');

// Fix asset paths (replace /_assets/v11/ or _assets/v11/ properly)
bodyContent = bodyContent.replace(/\/?_assets\/v11\//g, '/figma_assets/');

// Escape for JS template literal
bodyContent = bodyContent.replace(/`/g, '\\`').replace(/\$\{/g, '\\${');

// 3. Write FigmaContent.ts
const tsContent = `export const figmaHtml = \`${bodyContent}\`;\n`;
fs.writeFileSync('E:/Vendaval/src/FigmaContent.ts', tsContent);

console.log('Fixed FigmaContent generation');
