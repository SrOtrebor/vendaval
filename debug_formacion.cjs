const fs = require('fs');
const html = fs.readFileSync('E:/Vendaval/src/pages/FormacionContent.ts', 'utf8');
const bpIdx = html.indexOf('data-width="800"');
console.log(html.substring(Math.max(0, bpIdx), bpIdx + 400));
