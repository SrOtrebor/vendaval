const fs = require('fs');
const jsdom = require('jsdom');
const path = require('path');

const directoryPath = 'E:/Vendaval/src/pages';
const files = fs.readdirSync(directoryPath).filter(file => file.endsWith('Content.ts'));

files.forEach(file => {
  const filePath = path.join(directoryPath, file);
  const content = fs.readFileSync(filePath, 'utf8');
  
  const match = content.match(/export const html = `([^`]*)`/);
  if (!match) return;
  
  const htmlContent = match[1];
  const dom = new jsdom.JSDOM(htmlContent);
  const document = dom.window.document;
  
  const breakpoints = document.querySelectorAll('[data-breakpoint]');
  let removedCount = 0;
  
  breakpoints.forEach(bp => {
    // Convert to array to allow safe removal during iteration
    const children = Array.from(bp.children);
    children.forEach(child => {
      if (child.innerHTML.includes('Campus!')) {
        bp.removeChild(child);
        removedCount++;
      }
    });
  });
  
  if (removedCount > 0) {
    const newHtml = document.body.innerHTML;
    const newContent = content.replace(/export const html = `[^`]*`/, `export const html = \`${newHtml}\``);
    fs.writeFileSync(filePath, newContent);
    console.log(`Saved ${file}. Removed ${removedCount} navbars.`);
  } else {
    console.log(`No navbars found in ${file}.`);
  }
});
