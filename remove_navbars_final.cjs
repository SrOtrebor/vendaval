const fs = require('fs');
const { JSDOM } = require('jsdom');
const files = fs.readdirSync('E:/Vendaval/src/pages').filter(f => f.endsWith('Content.ts'));

for (let f of files) {
  const fileContent = fs.readFileSync('E:/Vendaval/src/pages/' + f, 'utf8');
  const match = fileContent.match(/export const html = `([\s\S]*?)`;/);
  if (!match) continue;
  
  const htmlStr = match[1];
  const dom = new JSDOM(htmlStr);
  const document = dom.window.document;
  
  const breakpoints = document.querySelectorAll('div[data-breakpoint="true"]');
  let removedCount = 0;
  breakpoints.forEach((bp) => {
    // Collect children to remove first to avoid index shifting issues during iteration
    const toRemove = [];
    for (let i = 0; i < Math.min(3, bp.children.length); i++) {
      const child = bp.children[i];
      const text = child.textContent || '';
      const hasImg = child.querySelector('img') !== null;
      
      const isNavbar = (text.includes('Nosotras') && hasImg) || (text.includes('Tienda') && hasImg);
      const isEmptySkeleton = text.trim() === '' && child.innerHTML.length < 500;
      
      if ((isNavbar && text.length < 200) || isEmptySkeleton) {
        toRemove.push(child);
      }
    }
    toRemove.forEach(child => {
      child.remove();
      removedCount++;
    });
  });
  
  if (removedCount > 0) {
    const newHtmlStr = document.body.innerHTML;
    // Figma exports have specific escaping. jsdom might escape ` and $. 
    // We don't need to worry much as long as it's standard HTML.
    const newFileContent = fileContent.replace(match[1], newHtmlStr);
    fs.writeFileSync('E:/Vendaval/src/pages/' + f, newFileContent);
    console.log(`Saved ${f}. Removed ${removedCount} navbars.`);
  }
}
