import React, { useEffect } from 'react';
import { Layout } from './components/Layout';
import { BrowserRouter, Routes, Route, useNavigate, useLocation } from 'react-router-dom';

import Home from './pages/Home';
import Paks from './pages/Paks';
import Formacion from './pages/Formacion';
import FormacionInterna from './pages/FormacionInterna';
import TiendaInterna from './pages/TiendaInterna';
import Tienda from './pages/Tienda';
import ProjectsInterna2 from './pages/ProjectsInterna2';
import ProjectsInterna from './pages/ProjectsInterna';
import Nosotras from './pages/Nosotras';
import ContactoDesplegable from './pages/ContactoDesplegable';
import Contacto from './pages/Contacto';
import ElTaller from './pages/ElTaller';

// Este componente aplica alturas dinámicas (corrige el colapso de Formación y los assets invisibles)
function FigmaRuntimeFixer() {
  const location = useLocation();

  useEffect(() => {
    // 1. Restaurar las alturas que originalmente aplicaba el JS de Figma
    const fixHeights = () => {
      const elements = document.querySelectorAll('[data-height]');
      elements.forEach(el => {
        const height = el.getAttribute('data-height');
        if (height) {
          (el as HTMLElement).style.minHeight = height + 'px';
        }
      });
      // Restaurar el scroll a la parte superior al cambiar de página
      window.scrollTo(0, 0);
    };

    // Darle un pequeñísimo delay para que el HTML se inyecte primero
    setTimeout(fixHeights, 50);
  }, [location.pathname]);

  return null;
}

// Este componente intercepta clics globales e inyecta la navegación inteligente
function GlobalNavInterceptor() {
  const navigate = useNavigate();

  useEffect(() => {
    const handleClick = (e: MouseEvent) => {
      const target = e.target as HTMLElement;
      
      const closestAnchor = target.closest('a');
      if (closestAnchor) {
        const href = closestAnchor.getAttribute('href');
        if (href && href.startsWith('/')) {
          e.preventDefault();
          navigate(href);
          return;
        }
      }

      const text = (target.textContent || '').trim().toLowerCase();
      if (!text) return;

      if (text === 'work' || text === 'producción') {
        navigate('/projectsinterna');
      } else if (text === 'about' || text.includes('conocenos') || text.includes('conocé más') || text.includes('quiero saber más') || text === 'nosotras') {
        navigate('/nosotras');
      } else if (text === 'contact' || text === 'contactanos') {
        navigate('/contacto');
      } else if (text === 'formación') {
        navigate('/formacion');
      } else if (text === 'tienda') {
        navigate('/tienda');
      } else if (text === 'taller vendaval' || text === 't a l l e r v e n d a v a l h e c h o a m a n o') {
        navigate('/');
      } else if (text === 'el taller') {
        navigate('/el-taller');
      }
    };

    document.addEventListener('click', handleClick);
    return () => document.removeEventListener('click', handleClick);
  }, [navigate]);

  return null;
}

function App() {
  return (
    <BrowserRouter>
      <GlobalNavInterceptor />
      <FigmaRuntimeFixer />
      <Routes>
        <Route path="/" element={<Layout><Home /></Layout>} />
        <Route path="/paks" element={<Layout><Paks /></Layout>} />
        <Route path="/formacion" element={<Layout><Formacion /></Layout>} />
        <Route path="/formacion-pagina-interna" element={<Layout><FormacionInterna /></Layout>} />
        <Route path="/tienda-pagina-interna" element={<Layout><TiendaInterna /></Layout>} />
        <Route path="/tienda" element={<Layout><Tienda /></Layout>} />
        <Route path="/projectsinterna-2" element={<Layout><ProjectsInterna2 /></Layout>} />
        <Route path="/projectsinterna" element={<Layout><ProjectsInterna /></Layout>} />
        <Route path="/nosotras" element={<Layout><Nosotras /></Layout>} />
        <Route path="/contacto-desplegable" element={<Layout><ContactoDesplegable /></Layout>} />
        <Route path="/contacto" element={<Layout><Contacto /></Layout>} />
        <Route path="/el-taller" element={<Layout><ElTaller /></Layout>} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;
