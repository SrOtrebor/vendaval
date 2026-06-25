const fs = require('fs');
let app = fs.readFileSync('E:/Vendaval/src/App.tsx', 'utf8');

if (!app.includes("import { Layout } from './components/Layout'")) {
  app = app.replace("import React from 'react';", "import React from 'react';\nimport { Layout } from './components/Layout';");
  
  // Replace <Route path="..." element={<Component />} /> with <Route path="..." element={<Layout><Component /></Layout>} />
  app = app.replace(/element=\{<([A-Z][a-zA-Z0-9]+)\s*\/>\}/g, "element={<Layout><$1 /></Layout>}");
  
  fs.writeFileSync('E:/Vendaval/src/App.tsx', app);
  console.log('App.tsx updated with Layout');
}
