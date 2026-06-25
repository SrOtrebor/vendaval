const jsdom = require('jsdom');
const fs = require('fs');
const content = fs.readFileSync('E:/Vendaval/src/pages/HomeContent.ts', 'utf8');
const match = content.match(/export const html = `([^`]*)`/);
const dom = new jsdom.JSDOM(match[1]);
const bps = dom.window.document.querySelectorAll('[data-breakpoint]');
bps.forEach(bp => {
  const width = bp.getAttribute('data-width');
  const textLength = bp.textContent.length;
  const numElements = bp.querySelectorAll('*').length;
  const numImages = bp.querySelectorAll('img').length;
  console.log(`Breakpoint ${width}px: ${numElements} elements, ${textLength} chars of text, ${numImages} images`);
});
