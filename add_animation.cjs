const fs = require('fs');
let css = fs.readFileSync('E:/Vendaval/src/pages/Nosotras.css', 'utf8');

const fix = `
/* PORTRAIT ANIMATION FIX */
@keyframes fadeInSlide {
  from { opacity: 0; transform: translateX(-50px); }
  to { opacity: 1; transform: translateX(0); }
}
.css-nu4vz0 {
  animation: fadeInSlide 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
  opacity: 0; /* Starts hidden */
}
/* Delay the second portrait slightly */
.css-nu4vz0:nth-child(2) {
  animation-delay: 0.2s;
}
`;

if (!css.includes('PORTRAIT ANIMATION FIX')) {
  fs.appendFileSync('E:/Vendaval/src/pages/Nosotras.css', fix);
}
console.log('Added CSS animation');
