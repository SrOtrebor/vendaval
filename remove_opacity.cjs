const fs = require('fs');
let html = fs.readFileSync('E:/Vendaval/src/pages/NosotrasContent.ts', 'utf8');
html = html.replace(/style="[^"]*opacity:\s*0[^"]*"/g, '');
fs.writeFileSync('E:/Vendaval/src/pages/NosotrasContent.ts', html);
console.log('Removed inline opacity styles');
