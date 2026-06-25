const fs = require('fs');
const html = fs.readFileSync('E:/Vendaval/src/pages/NosotrasContent.ts', 'utf8');

const bpts = ['64.56', '192', '375', '800', '1280'];

for (let i = 0; i < bpts.length; i++) {
  const start = html.indexOf(`data-width="${bpts[i]}"`);
  if (start === -1) continue;
  
  let end = html.length;
  if (i < bpts.length - 1) {
    end = html.indexOf(`data-width="${bpts[i+1]}"`);
  }
  
  const section = html.substring(start, end);
  const images = section.match(/<img[^>]*>/g);
  console.log(`Breakpoint ${bpts[i]}: ${images ? images.length : 0} images`);
}
