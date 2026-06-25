const fs = require('fs');
const html = fs.readFileSync('E:/Vendaval/src/pages/NosotrasContent.ts', 'utf8');
const regex = /data-width="[0-9.]+" data-height="[0-9.]+"/g;
let match;
while ((match = regex.exec(html)) !== null) {
  console.log(match[0]);
}
