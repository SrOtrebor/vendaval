const fs = require('fs');
const html = fs.readFileSync('E:/Vendaval/src/pages/HomeContent.ts', 'utf8');

const start = html.indexOf('data-width="1280"');
const navStart = html.indexOf('<div class="css-xqk95b', start);

// A heuristic way to grab the navbar (it ends right before the main content div starts)
// The main content of home starts after the navbar.
const navEnd = html.indexOf('<div class="css-t7t290', navStart); 

const navbarHtml = html.substring(navStart, navEnd);
fs.writeFileSync('E:/Vendaval/src/components/Navbar.tsx', `import React from 'react';\n\nexport const Navbar = () => (\n  ${navbarHtml}\n);\n`);
console.log('Navbar extracted');
