const fs = require('fs');
const path = require('path');

const cssPath = path.join('C:', 'Users', 'ra_la', 'Local Sites', 'vendaval-prueba', 'app', 'public', 'wp-content', 'themes', 'vendaval-theme', 'style.css');
let css = fs.readFileSync(cssPath, 'utf8');

css = css.replace(/\[data-breakpoint="true"\] \{\s*margin: 0 auto !important;\s*position: relative !important;\s*\}/, `[data-breakpoint="true"][data-width="1280"] {
    max-width: 1280px !important;
    margin: 0 auto !important;
    position: relative !important;
    overflow-x: hidden !important;
}
[data-breakpoint="true"][data-width="800"] {
    max-width: 800px !important;
    margin: 0 auto !important;
    position: relative !important;
    overflow-x: hidden !important;
}
[data-breakpoint="true"][data-width="375"] {
    max-width: 375px !important;
    margin: 0 auto !important;
    position: relative !important;
    overflow-x: hidden !important;
}`);

fs.writeFileSync(cssPath, css);
console.log('Centering fix updated with max-width');
