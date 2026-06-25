# Vendaval Web Project

Bienvenido al repositorio oficial del proyecto web de **Taller Vendaval**. 

## Objetivo Global
El objetivo principal de este proyecto es transformar los diseños estáticos y visualmente complejos generados en **Figma** en una aplicación web **React (Vite)** completamente funcional, robusta y escalable. 

Queremos mantener una fidelidad del 100% (pixel-perfect) respecto al diseño original aprobado por el equipo, garantizando al mismo tiempo que el código subyacente cumpla con las mejores prácticas de desarrollo web, SEO y responsividad.

## Lo que queremos lograr
- **Fidelidad Visual Absoluta:** Que el sitio luzca exactamente como fue diseñado en Figma, respetando tipografías, colores, espacios y componentes en todos sus breakpoints (Escritorio, Tablet, Celular).
- **Código Escalable y Limpio:** Extraer los elementos repetitivos (como las barras de navegación) en componentes globales reutilizables de React para facilitar el mantenimiento futuro.
- **Responsividad Robusta:** Evitar que los anchos fijos exportados por herramientas de diseño rompan la pantalla o generen scrolls horizontales en dispositivos reales.
- **Experiencia de Usuario Fluida:** Un enrutamiento ágil entre secciones (Nosotras, Formación, El Taller, Tienda, Proyectos, Contacto) sin recargas de página molestas ni errores (404).

## Lo que hicimos hasta ahora (Progreso)
1. **Configuración del Entorno:** Se configuró un proyecto base con React, TypeScript y Vite.
2. **Integración de Diseños:** Se importaron todas las páginas desde Figma a archivos React (`*Content.ts`), manteniendo la estructura del DOM diseñada.
3. **Corrección de Enrutamiento (Router):** 
   - Se solucionaron errores graves de navegación (pantallas en blanco y errores 404) causados por URLs con tildes (ej. `/formación`).
   - Se estandarizaron todas las rutas a minúsculas y sin caracteres especiales (`/formacion`, `/el-taller`, `/nosotras`, `/tienda`, `/contacto`, `/projectsinterna`).
4. **Refactorización de la Barra de Navegación (Navbar):**
   - Se detectó que Figma había exportado la Navbar repetida cientos de veces (múltiples breakpoints por cada página).
   - Se construyó un componente `<Navbar />` global en React, responsivo de forma nativa mediante Flexbox, y se aplicó globalmente en el `Layout.tsx`.
   - Se desarrolló y ejecutó un script en Node.js que barrió y eliminó con éxito las 16+ copias de botoneras residuales incrustadas en el código HTML de Figma.
5. **Optimización de Responsividad Global:**
   - Se inyectaron reglas CSS protectoras globales en `index.css` (`max-width: 100vw`, `overflow-x: hidden`, `width: 100%`) para forzar que los contenedores estrictos de Figma se adapten a cualquier pantalla sin romper el layout interno ni generar scrolls horizontales.
   - Se agregó responsividad automática para que las imágenes nunca desborden sus marcos.

---
*Documentación generada automáticamente al finalizar la sesión.*
