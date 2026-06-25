const fs = require('fs');
const path = require('path');

const htmlPath = path.join(__dirname, 'src', 'pages', 'NosotrasContent.ts');
const html = fs.readFileSync(htmlPath, 'utf8');
const srcs = html.match(/src="(\/figma_assets\/[^"]+)"/g);
console.log('Images found:', srcs ? srcs.length : 0);

if (srcs) {
  let missing = 0;
  srcs.forEach(srcAttr => {
    const src = srcAttr.split('"')[1]; // get the path inside quotes
    const filePath = path.join(__dirname, 'public', src);
    if (!fs.existsSync(filePath)) {
      missing++;
      console.log('Missing:', src);
    }
  });
  console.log('Total missing:', missing);
}
