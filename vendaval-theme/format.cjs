const fs = require('fs');
const html = fs.readFileSync('page-home.php', 'utf8');

// A very simple basic HTML formatter to insert line breaks before tags
let formatted = html.replace(/></g, '>\n<');

fs.writeFileSync('page-home.php', formatted);
console.log('Formatted page-home.php');
