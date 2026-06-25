const fs = require('fs');
const path = require('path');

function fixArrowsWithSVG() {
  const dir = path.join(__dirname, 'src', 'pages');
  const files = fs.readdirSync(dir);
  let replaced = 0;
  
  // The exact string we inserted previously
  const oldArrowStr = '<span style="font-family: Arial, Helvetica, sans-serif; display: inline-block; transform: translateY(1px);">→</span>';
  
  // The new SVG arrow, beautifully centered and crisp
  const svgArrow = `<svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: inline-block; transform: translateY(0.15em); margin-left: 2px;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>`;

  files.forEach(f => {
    if (f.endsWith('Content.ts')) {
      const fullPath = path.join(dir, f);
      let content = fs.readFileSync(fullPath, 'utf8');
      
      // Replace our previous attempt
      if (content.includes(oldArrowStr)) {
        // We use split/join for global replacement of a literal string without regex escaping issues
        content = content.split(oldArrowStr).join(svgArrow);
        fs.writeFileSync(fullPath, content);
        replaced++;
      } else if (content.includes('→')) {
         // Also replace any remaining raw arrows just in case
         content = content.replace(/→/g, svgArrow);
         fs.writeFileSync(fullPath, content);
         replaced++;
      }
    }
  });
  console.log('Fixed arrows with SVG in ' + replaced + ' files');
}

fixArrowsWithSVG();
