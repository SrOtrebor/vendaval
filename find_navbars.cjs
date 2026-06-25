const fs = require('fs');
const files = fs.readdirSync('E:/Vendaval/src/pages').filter(f => f.endsWith('Content.ts'));
for(let f of files) {
  const html = fs.readFileSync('E:/Vendaval/src/pages/' + f, 'utf8');
  const match = html.match(/<div class=\"([^\"]+)\"><div class=\"([^\"]+)\"><div class=\"([^\"]+)\"><div class=\"([^\"]+)\"><div class=\"css-ld0hsi/);
  if(match) {
    console.log(f, ':', match[1]);
  }
}
