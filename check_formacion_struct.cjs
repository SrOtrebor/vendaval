const fs = require('fs');
const html = fs.readFileSync('E:/Vendaval/src/pages/FormacionContent.ts', 'utf8');
const bpIdx = html.indexOf('data-width="1280"');
const bpStr = html.substring(bpIdx, bpIdx + 3000);
// Count how many top level divs before "De la primera estampa"
const heroIdx = bpStr.indexOf('De la primera estampa');
console.log('Top level structure before hero:', bpStr.substring(0, heroIdx));
