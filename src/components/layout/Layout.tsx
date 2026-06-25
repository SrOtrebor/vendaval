import React from 'react';
import { Outlet, Link } from 'react-router-dom';

export default function Layout() {
  return (
    <div className="app-layout">
      <header className="header">
        <div className="logo">
          <Link to="/">VENDAVAL</Link>
        </div>
        <nav className="nav">
          <Link to="/nosotras">Nosotras</Link>
          <Link to="/formacion">Formación</Link>
          <Link to="/el-taller">El taller</Link>
          <Link to="/proyectos">Proyectos</Link>
          <Link to="/tienda">Tienda</Link>
          <Link to="/contacto">Contacto</Link>
          <Link to="/academia" className="campus-link">Campus!</Link>
        </nav>
      </header>
      
      <main className="main-content">
        <Outlet />
      </main>
      
      <footer className="footer">
        <div className="footer-top">
          <h2>Conectá con nosotras y exploremos tu proyecto!</h2>
          <Link to="/contacto">conocenos! &rarr;</Link>
        </div>
        
        <div className="footer-grid">
          <div className="footer-column">
            <img src="/logo.png" alt="Vendaval Logo" style={{ height: '100px', objectFit: 'contain' }} />
          </div>
          <div className="footer-column">
            <h4>Visitanos!</h4>
            <p>Ruiz Huidobro 2705,<br/>C1429 Cdad.<br/>Autónoma de Buenos Aires</p>
            <br/>
            <Link to="/como-enviar">CÓMO ENVIAR TU DISEÑO</Link>
            <br/><br/>
            <h4>Contactanos</h4>
            <a href="mailto:hola@tallervendaval.com">hola@tallervendaval.com</a>
          </div>
          <div className="footer-column">
            <h4>Seguinos!</h4>
            <a href="#">Instagram</a>
            <a href="#">Behance</a>
            <a href="#">Spotify</a>
            <a href="#">Facebook</a>
          </div>
        </div>
        
        <div className="footer-huge-text">
          Taller Vendaval
        </div>
      </footer>
    </div>
  );
}
