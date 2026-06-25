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
  breakpoints.forEach((bp, bpIdx) => {
    for (let i = 0; i < Math.min(3, bp.children.length); i++) {
      const child = bp.children[i];
      const text = child.textContent || '';
      const hasImg = child.querySelector('img') !== null;
      
      const isNavbar = (text.includes('Nosotras') && hasImg) || (text.includes('Tienda') && hasImg);
      const isEmptySkeleton = text.trim() === '' && child.innerHTML.length < 500;
      
      if ((isNavbar && text.length < 200) || isEmptySkeleton) {
        console.log(`[${f}] Removing child ${i}. Text: ${text.substring(0,20)}...`);
        child.remove();
        removedCount++;
      }
    }
  });
  
  if (removedCount > 0) {
    const newHtmlStr = document.body.innerHTML;
    // Don't save yet, just dry run
    // const newFileContent = fileContent.replace(match[1], newHtmlStr);
    // fs.writeFileSync('E:/Vendaval/src/pages/' + f, newFileContent);
    console.log(`Finished ${f}. Removed ${removedCount} navbars.`);
  }
}
