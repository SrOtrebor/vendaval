const fs = require('fs');
let html = fs.readFileSync('E:/Vendaval/src/pages/NosotrasContent.ts', 'utf8');
html = html.split('loading="lazy"').join('');
fs.writeFileSync('E:/Vendaval/src/pages/NosotrasContent.ts', html);
console.log('Removed lazy loading');
