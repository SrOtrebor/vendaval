const fs = require('fs');

const cssPath = 'E:/Vendaval/src/pages/Nosotras.css';
let css = fs.readFileSync(cssPath, 'utf8');

if (!css.includes('max-width: 182.5px') && css.includes('.css-ffzfxq {min-height: max-content; aspect-ratio: 182.5/182.5;}')) {
  css = css.replace('.css-ffzfxq {min-height: max-content; aspect-ratio: 182.5/182.5;}', '.css-ffzfxq {min-height: max-content; aspect-ratio: 182.5/182.5; width: 100%; max-width: 182.5px;}');
  fs.writeFileSync(cssPath, css);
}
console.log('Fixed additional layout issues');
