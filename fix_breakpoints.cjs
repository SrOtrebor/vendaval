const fs = require('fs');
let css = fs.readFileSync('E:/Vendaval/src/index.css', 'utf8');

const fix = `
/* GLOBAL BREAKPOINT VISIBILITY FIX */
[data-breakpoint="true"] { display: none !important; }
@media (min-width: 1280px) { 
  [data-breakpoint="true"][data-width^="1280"], 
  [data-breakpoint="true"][data-width^="1440"] { display: block !important; } 
}
@media (min-width: 800px) and (max-width: 1279px) { 
  [data-breakpoint="true"][data-width^="800"], 
  [data-breakpoint="true"][data-width^="768"], 
  [data-breakpoint="true"][data-width^="1024"] { display: block !important; } 
}
@media (max-width: 799px) { 
  [data-breakpoint="true"][data-width^="375"], 
  [data-breakpoint="true"][data-width^="390"], 
  [data-breakpoint="true"][data-width^="360"] { display: block !important; } 
}
`;

if (!css.includes('GLOBAL BREAKPOINT VISIBILITY FIX')) {
  fs.appendFileSync('E:/Vendaval/src/index.css', fix);
}
console.log('Fixed breakpoints');
