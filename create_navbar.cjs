const fs = require('fs');

const html = `
<div className="css-xqk95b css-paq0kv css-j9f0op">
  <div className="css-qoo0en css-5knerd">
    <div className="css-ld0hsi css-j9f0op"></div>
  </div>
  <div className="css-bfkhr css-1cqu5k css-2o94b6">
    <div className="css-xp2299 css-1cqu5k css-2o94b6">
      <div className="css-7y6cel css-7hylni">
        <div aria-hidden="true" className="css-2rl2s8 css-ggwoeh css-5eam1e"></div>
        <div className="css-881fyl css-j9f0op">
          <div className="css-ys8fj7 css-paq0kv css-j9f0op">
            <div data-isimage="true" className="css-81snhu css-wc1msa">
              <img src="/figma_assets/0b3f914635915a25e1b55b7e0652e6e48d294a75.svg" alt="" className="css-tzn6qh css-ez8men css-7kv4dh"/>
            </div>
          </div>
        </div>
      </div>
      <div className="css-47ec2u css-b67try css-2o94b6">
        <div className="css-7y6cel css-7hylni css-g1kd3r">
          <div aria-hidden="true" className="css-2rl2s8 css-ggwoeh css-5eam1e"></div>
          <div className="css-i47vzl css-j9f0op">
            <div className="css-s4tvbx css-paq0kv css-j9f0op">
              <a href="/nosotras" className="css-sowbf3 css-hf9sha" style={{textDecoration:'none'}}><p className="css-nf5ac4 css-5unt1t css-xp3q20 adjustLetterSpacing textContents">Nosotras</p></a>
              <a href="/formacion" className="css-sowbf3 css-hf9sha" style={{textDecoration:'none'}}><p className="css-nf5ac4 css-5unt1t css-xp3q20 adjustLetterSpacing textContents">Formación</p></a>
              <a href="/taller" className="css-sowbf3 css-hf9sha" style={{textDecoration:'none'}}><p className="css-nf5ac4 css-5unt1t css-xp3q20 adjustLetterSpacing textContents">El taller</p></a>
              <a href="/proyectos" className="css-sowbf3 css-hf9sha" style={{textDecoration:'none'}}><p className="css-nf5ac4 css-5unt1t css-xp3q20 adjustLetterSpacing textContents">Proyectos</p></a>
              <a href="/tienda" className="css-sowbf3 css-hf9sha" style={{textDecoration:'none'}}><p className="css-nf5ac4 css-5unt1t css-xp3q20 adjustLetterSpacing textContents">Tienda</p></a>
              <a href="/contacto" className="css-sowbf3 css-hf9sha" style={{textDecoration:'none'}}><p className="css-nf5ac4 css-85cdts css-xp3q20 adjustLetterSpacing textContents">Contacto</p></a>
              <a href="https://campus.vendaval.com" target="_blank" className="css-3az1nx css-hf9sha" style={{textDecoration:'none'}}><p className="css-nf5ac4 css-ctsixb css-mdxci6 adjustLetterSpacing textContents">Campus!</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
`;

const reactComponent = `import React from 'react';\n\nexport const Navbar = () => (\n  ${html}\n);\n`;

fs.writeFileSync('E:/Vendaval/src/components/Navbar.tsx', reactComponent);
console.log('Navbar component created successfully.');
