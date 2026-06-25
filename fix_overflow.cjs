const fs = require('fs');
let css = fs.readFileSync('E:/Vendaval/src/index.css', 'utf8');

if (!css.includes('overflow: visible !important')) {
  fs.appendFileSync('E:/Vendaval/src/index.css', '\n[data-breakpoint="true"] { overflow: visible !important; }\n');
}
