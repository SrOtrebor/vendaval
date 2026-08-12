# 🤖 HANDOFF PARA AGENTES (LEER PRIMERO)

¡Hola, agente! Si estás leyendo esto, es porque vas a continuar con el desarrollo del sitio web de **Taller Vendaval**. A continuación te detallo de dónde venimos, qué logramos y qué falta por hacer.

## 📍 De Dónde Empezamos
1. El proyecto inició con unos diseños muy detallados y complejos en **Figma**.
2. El código original exportado de Figma era absoluto, pesado y muy poco mantenible.
3. El primer objetivo fue "limpiar" todo ese código autogenerado y pasarlo a un HTML semántico y un CSS moderno (Flexbox, Grid), logrando un diseño 100% fiel al Figma (pixel-perfect).
4. Luego, dado que el cliente necesitaba una tienda online y venta de cursos (e-learning), se tomó la **decisión técnica crítica** de descartar usar React en producción y en su lugar se convirtió todo el maquetado limpio a un **Custom Theme de WordPress** (`vendaval-theme`).

## 🛠️ Lo Que Hicimos Hasta Ahora (Estado Actual)
- **Custom Theme Creado:** Hemos construido desde cero el tema `vendaval-theme`. 
  - Todo el CSS principal está consolidado (normalmente en `style.css` / `index.css`).
  - Separamos la estructura en `header.php`, `footer.php`, `index.php`, `functions.php` y varias plantillas de página (`page-home.php`, `page-nosotras.php`, `page-tienda.php`, etc.).
- **Menú y Navegación:**
  - Enlazamos el menú al sistema nativo de WP (`wp_nav_menu`).
  - **Fix Crítico:** Construimos el menú móvil con un toggle en **JavaScript nativo** (ver `header.php`). **NO uses CSS puro (`:checked`)** para el botón hamburguesa porque genera fallos de z-index con las secciones principales (ej. `.hero`).
- **Puesto en Producción (DonWeb):**
  - El sitio está hosteado en `tallervendaval.com` a través de DonWeb.
  - Sorteamos límites de PHP inyectando backups por fragmentos usando el plugin *WPvivid Backup*.
- **Modo Mantenimiento (Caché):** 
  - El sitio público está oculto mediante el plugin **SeedProd** (Landing Page de "Próximamente"). 
  - **Importante sobre DonWeb:** Tienen una caché inversa muy agresiva (Nginx). Si los cambios no se ven en vivo, agrega un query string a la URL (ej. `?hola=1`) o asegúrate de estar logueado como administrador en WP.

## 🚀 Hasta Dónde Tenemos Que Llegar (Próximos Pasos)
Tu objetivo principal ahora es **dar vida a las funcionalidades dinámicas (Tienda, Cursos, Formularios)** respetando estrictamente el diseño de la web y el framework del Custom Theme que dejamos preparado:

1. **Tienda (WooCommerce):**
   - El plugin ya está. Falta estilizar el frontend (catálogo, producto individual, carrito, checkout).
   - Debes sobrescribir o limpiar las clases/diseño por defecto de WooCommerce usando el CSS del proyecto y la fuente *Instrument Sans*. La meta es que se vea integrado al diseño pixel-perfect.
2. **Campus / E-Learning (Tutor LMS):**
   - El plugin Tutor LMS está instalado.
   - Debes configurarlo y asegurarte de que las plantillas de cursos (`archive-course.php`, `single-course.php`) hereden el diseño global de Vendaval (colores, tipografía, menú, footer).
3. **Formularios de Contacto:**
   - Actualmente hay HTML estático. Reemplázalo por integraciones de plugins dinámicos (WPForms o Contact Form 7), asegurándote de inyectar las clases CSS para que visualmente no se rompa nada.

## 📂 Recursos y Ubicaciones Clave
- **Ruta del tema:** `C:\Users\ra_la\Local Sites\vendaval-prueba\app\public\wp-content\themes\vendaval-theme`
- **Imágenes y recursos:** Todo lo exportado del Figma está en `vendaval-theme/assets/figma_assets/`.
- **Regla de Oro:** El usuario prefiere respuestas en español, directas (sin disculpas), e instrucciones detalladas (asume la responsabilidad técnica).

¡Mucho éxito en la fase de integración dinámica!
