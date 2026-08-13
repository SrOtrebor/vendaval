const fs = require('fs');
const path = require('path');

const cssPath = path.join('C:', 'Users', 'ra_la', 'Local Sites', 'vendaval-prueba', 'app', 'public', 'wp-content', 'themes', 'vendaval-theme', 'style.css');
let css = fs.readFileSync(cssPath, 'utf8');

// First, remove the old [data-breakpoint="true"] block we just added
css = css.replace(/\[data-breakpoint="true"\]\[data-width="1280"\] \{[\s\S]*?overflow-x: hidden !important;\s*\}/g, '');
css = css.replace(/\[data-breakpoint="true"\]\[data-width="800"\] \{[\s\S]*?overflow-x: hidden !important;\s*\}/g, '');
css = css.replace(/\[data-breakpoint="true"\]\[data-width="375"\] \{[\s\S]*?overflow-x: hidden !important;\s*\}/g, '');
css = css.replace(/\[data-breakpoint="true"\] \{[\s\S]*?position: relative !important;\s*\}/g, ''); // In case the first one is still there

// Now append the correct media query logic
css += `
/* ========================================================================= */
/* FIX BREAKPOINTS Y CENTRADO DE FIGMA                                       */
/* ========================================================================= */

#container {
    width: 100%;
    position: relative;
    display: flex;
    justify-content: center;
    background-color: #fffaf2; /* Color de fondo general */
}

/* Ocultar todos por defecto y quitar el absolute */
[data-breakpoint="true"] {
    display: none !important;
    position: relative !important;
    margin: 0 auto !important;
    left: 0 !important;
    transform: none !important;
}

/* Mobile: up to 799px */
@media (max-width: 799px) {
    [data-breakpoint="true"][data-width="375"] {
        display: block !important;
        width: 100% !important;
        max-width: 375px !important;
        min-width: 0 !important;
        overflow-x: hidden !important;
    }
}

/* Tablet: 800px to 1279px */
@media (min-width: 800px) and (max-width: 1279px) {
    [data-breakpoint="true"][data-width="800"] {
        display: block !important;
        width: 100% !important;
        max-width: 800px !important;
        min-width: 0 !important;
        overflow-x: hidden !important;
    }
}

/* Desktop: 1280px and up */
@media (min-width: 1280px) {
    [data-breakpoint="true"][data-width="1280"] {
        display: block !important;
        width: 100% !important;
        max-width: 1280px !important;
        min-width: 0 !important;
        overflow-x: hidden !important;
    }
}
`;

fs.writeFileSync(cssPath, css);
console.log('Centering fix with media queries applied');
