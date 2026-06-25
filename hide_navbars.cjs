const fs = require('fs');
let css = fs.readFileSync('E:/Vendaval/src/index.css', 'utf8');

const fix = `
/* HIDE DUPLICATE NAVBARS EXPORTED BY FIGMA */
.css-xqk95b:not(#global-navbar) {
  display: none !important;
}
`;

if (!css.includes('HIDE DUPLICATE NAVBARS EXPORTED BY FIGMA')) {
  fs.appendFileSync('E:/Vendaval/src/index.css', fix);
}
console.log('Hidden duplicate navbars');
