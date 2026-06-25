const fs = require('fs');
const html = fs.readFileSync('E:/Vendaval/src/pages/FormacionContent.ts', 'utf8');
const match = html.match(/class=\"[^\"]*css-puxi6v[^\"]*\"/g);
console.log(match ? match.length : 0);
