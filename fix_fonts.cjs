const fs = require('fs');
const path = require('path');

function processDir(dir) {
  const files = fs.readdirSync(dir);
  for (const f of files) {
    const fullPath = path.join(dir, f);
    if (fs.statSync(fullPath).isDirectory()) {
      processDir(fullPath);
    } else if (fullPath.endsWith('.css') || fullPath.endsWith('.ts')) {
      let content = fs.readFileSync(fullPath, 'utf8');
      
      let newContent = content
        .replace(/"Instrument Sans[^"]*"/g, "'Instrument Sans'")
        .replace(/"Josefin Sans[^"]*"/g, "'Josefin Sans'")
        .replace(/"Figtree[^"]*"/g, "'Figtree'");

      if (content !== newContent) {
        fs.writeFileSync(fullPath, newContent);
        console.log(`Updated fonts in ${fullPath}`);
      }
    }
  }
}

processDir(path.join(__dirname, 'src'));
console.log("Fonts fixed to use Google Fonts equivalents!");
