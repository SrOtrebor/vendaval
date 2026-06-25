const fs = require('fs');
const html = fs.readFileSync('E:/Vendaval/src/components/Navbar.tsx', 'utf8');
const links = html.match(/<a href="[^"]+"/g);
console.log('Links in Navbar.tsx:', links);
