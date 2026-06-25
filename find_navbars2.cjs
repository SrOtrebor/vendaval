const fs = require('fs');
const files = fs.readdirSync('E:/Vendaval/src/pages').filter(f => f.endsWith('Content.ts'));
const classes = new Set();
for(let f of files) {
  const html = fs.readFileSync('E:/Vendaval/src/pages/' + f, 'utf8');
  let match;
  const regex = /<div class=\"(css-[a-z0-9]+) css-paq0kv css-j9f0op\"><div class=\"css-qoo0en css-5knerd\">/g;
  while ((match = regex.exec(html)) !== null) {
    classes.add(match[1]);
  }
}
console.log('Navbar wrapper classes found:', Array.from(classes).join(', '));
