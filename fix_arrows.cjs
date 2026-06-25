const fs = require('fs');
const path = require('path');

function fixArrows() {
  const dir = path.join(__dirname, 'src', 'pages');
  const files = fs.readdirSync(dir);
  let replaced = 0;
  
  files.forEach(f => {
    if (f.endsWith('Content.ts')) {
      const fullPath = path.join(dir, f);
      let content = fs.readFileSync(fullPath, 'utf8');
      if (content.includes('→')) {
        // Wrap the arrow in a span forcing Arial/Helvetica, and vertically nudge it down 1px
        // because sometimes arrows are not vertically aligned with text centers.
        content = content.replace(/→/g, '<span style="font-family: Arial, Helvetica, sans-serif; display: inline-block; transform: translateY(1px);">→</span>');
        fs.writeFileSync(fullPath, content);
        replaced++;
      }
    }
  });
  console.log('Fixed arrows in ' + replaced + ' files');
}

fixArrows();
