const fs = require('fs');

const cssPath = 'E:/Vendaval/src/pages/Nosotras.css';
let css = fs.readFileSync(cssPath, 'utf8');

// The portrait container is .css-sdszae. It needs a max-width so it doesn't blow up if we give it 100% width
if (!css.includes('max-width: 305px') && css.includes('.css-sdszae {min-height: max-content; aspect-ratio: 305/301;}')) {
  css = css.replace('.css-sdszae {min-height: max-content; aspect-ratio: 305/301;}', '.css-sdszae {min-height: max-content; aspect-ratio: 305/301; width: 100%; max-width: 305px;}');
}

// The flex column .css-93wn7k is collapsing to 0 width. Give it 100% width
if (!css.includes('.css-93wn7k {position: relative; flex-shrink: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 17px; width: 100%;}')) {
  css = css.replace('.css-93wn7k {position: relative; flex-shrink: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 17px;}', '.css-93wn7k {position: relative; flex-shrink: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 17px; width: 100%;}');
}

fs.writeFileSync(cssPath, css);
console.log('Fixed Nosotras layout issues');
