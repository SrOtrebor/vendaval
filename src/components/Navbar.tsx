import React from 'react';

export const Navbar = () => (
  <nav style={{
    display: 'flex',
    justifyContent: 'space-between',
    alignItems: 'center',
    padding: '20px 40px',
    borderBottom: '1px solid #000',
    backgroundColor: '#fff',
    flexWrap: 'wrap',
    gap: '20px'
  }}>
    <div style={{ flexShrink: 0 }}>
      <img 
        src="/figma_assets/0b3f914635915a25e1b55b7e0652e6e48d294a75.svg" 
        alt="Vendaval" 
        style={{ height: '40px', display: 'block' }} 
      />
    </div>
    
    <div style={{
      display: 'flex',
      gap: '30px',
      flexWrap: 'wrap',
      justifyContent: 'center',
      fontFamily: "'Instrument Sans', sans-serif",
      fontSize: '20px',
      color: '#000'
    }}>
      <a href="/nosotras" style={{textDecoration:'none', color:'#000'}}>Nosotras</a>
      <a href="/formacion" style={{textDecoration:'none', color:'#000'}}>Formación</a>
      <a href="/el-taller" style={{textDecoration:'none', color:'#000'}}>El taller</a>
      <a href="/projectsinterna" style={{textDecoration:'none', color:'#000'}}>Proyectos</a>
      <a href="/tienda" style={{textDecoration:'none', color:'#000'}}>Tienda</a>
      <a href="/contacto" style={{textDecoration:'none', color:'#000'}}>Contacto</a>
      <a href="https://campus.vendaval.com" target="_blank" rel="noreferrer" style={{textDecoration:'none', color:'#000'}}>Campus!</a>
    </div>
  </nav>
);
