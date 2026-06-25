const fs = require('fs');
const files = fs.readdirSync('E:/Vendaval/src/pages').filter(f => f.endsWith('Content.ts'));
const classes = new Set();
for(let f of files) {
  const html = fs.readFileSync('E:/Vendaval/src/pages/' + f, 'utf8');
  const bpRegex = /<div data-breakpoint-id=\"[^\"]+\" data-breakpoint=\"true\"[^>]*>([\s\S]*?)Tienda/g;
  let match;
  while((match = bpRegex.exec(html)) !== null) {
     const str = match[1];
     // the top level wrapper inside the breakpoint is the first div
     const firstDivMatch = str.match(/^<div class=\"([^\"]+)\"/);
     if (firstDivMatch) classes.add(firstDivMatch[1].split(' ')[0]);
     
     // also get the second div if it exists at top level
     const secondDivMatch = str.match(/<\/div><div class=\"([^\"]+)\"/);
     if (secondDivMatch) classes.add(secondDivMatch[1].split(' ')[0]);
  }
}
console.log('Top level classes before Tienda:', Array.from(classes));
