const fs = require('fs');
const path = require('path');

function fixLayout(dir) {
  const files = fs.readdirSync(dir);
  for (const f of files) {
    const fullPath = path.join(dir, f);
    if (fs.statSync(fullPath).isDirectory()) {
      fixLayout(fullPath);
    } else if (fullPath.endsWith('.css')) {
      let content = fs.readFileSync(fullPath, 'utf8');
      
      // 1. Fix large fixed heights on containers (convert to min-height)
      // Matches height: 200px, height: 1200px, etc.
      // But only if it's 3 digits or more (>= 100px) AND we don't accidentally match line-height
      // The regex uses (?<!-) to ensure it's not line-height or max-height
      content = content.replace(/(?<!-)\bheight:\s*([2-9]\d{2}|\d{4,})px/g, 'min-height: $1px');
      
      // 2. Fix aspect-ratio constrained containers so they can expand vertically
      // Find all classes that define aspect-ratio
      const aspectRatioClasses = [];
      const regex = /\.css-[a-zA-Z0-9_]+\s*\{[^}]*aspect-ratio:[^}]*\}/g;
      let match;
      while ((match = regex.exec(content)) !== null) {
         // Insert min-height: max-content; into the rule
         const rule = match[0];
         const newRule = rule.replace('aspect-ratio:', 'min-height: max-content; aspect-ratio:');
         content = content.replace(rule, newRule);
      }

      fs.writeFileSync(fullPath, content);
      console.log(`Fixed layout in ${fullPath}`);
    }
  }
}

fixLayout(path.join(__dirname, 'src'));
console.log("Layout fixed!");
