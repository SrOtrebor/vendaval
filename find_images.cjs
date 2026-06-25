const fs = require('fs');
const html = fs.readFileSync('E:/Vendaval/site.html', 'utf8');
const assets = html.match(/_assets\/[^\s\"'\)]+/gi);
const unique = assets ? [...new Set(assets)] : [];
console.log(unique.join('\n'));
