const fs = require('fs');
const css = fs.readFileSync('E:/Vendaval/src/pages/Nosotras.css', 'utf8');
const html = fs.readFileSync('E:/Vendaval/src/pages/NosotrasContent.ts', 'utf8');

const matches = html.match(/class="([^"]+)"><img[^>]+4e6c09[^>]+>/);
if (matches) {
  const classes = matches[1].split(' ');
  classes.forEach(c => {
    const reg = new RegExp('\\.' + c + '\\s*\\{[^}]+\\}', 'g');
    console.log(css.match(reg));
  });
}

const matches2 = html.match(/class="([^"]+)"><img[^>]+3febcebe[^>]+>/);
if (matches2) {
  const classes = matches2[1].split(' ');
  classes.forEach(c => {
    const reg = new RegExp('\\.' + c + '\\s*\\{[^}]+\\}', 'g');
    console.log(css.match(reg));
  });
}
