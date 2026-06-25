const fs = require('fs');
const html = fs.readFileSync('E:/Vendaval/src/pages/FormacionContent.ts', 'utf8');
const links = html.match(/href=\"[^\"]*campus[^\"]*\"/g);
console.log('Campus links:', links ? links.length : 0);
