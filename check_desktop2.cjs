const fs = require('fs');
const html = fs.readFileSync('E:/Vendaval/src/pages/NosotrasContent.ts', 'utf8');
const start = html.indexOf('data-width="1280"');
const section = html.substring(start);
const imgs = section.match(/<img[^>]*>/g);
console.log(imgs);
