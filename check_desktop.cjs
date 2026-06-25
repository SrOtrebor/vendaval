const fs = require('fs');
const html = fs.readFileSync('E:/Vendaval/src/pages/NosotrasContent.ts', 'utf8');
const start = html.indexOf('data-width="1280"');
console.log(html.substring(start, start + 2000));
