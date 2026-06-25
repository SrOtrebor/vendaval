const fs = require('fs');
const html = fs.readFileSync('E:/Vendaval/src/pages/FormacionContent.ts', 'utf8');
const bpIdx = html.indexOf('data-width="1280"');
const logoIdx = html.indexOf('Tienda', bpIdx);
console.log(html.substring(Math.max(0, logoIdx - 1000), logoIdx + 100));
