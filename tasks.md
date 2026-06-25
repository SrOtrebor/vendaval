# Hoja de Ruta: Migración a WordPress (Custom Theme)

Dado el requerimiento de negocio de usar **100% WordPress** para aprovechar soluciones nativas (WooCommerce, LMS, Carritos), la estrategia técnica cambia. No usaremos React en producción, sino que **convertiremos nuestro código limpio en un Tema de WordPress a medida (Custom Theme)**.

El trabajo que hicimos hoy fue el paso más difícil y crítico: transformar los diseños de Figma en HTML y CSS responsivo y limpio. Ahora usaremos ese código como la "piel" de nuestro WordPress.

## FASE 1: Creación del Tema de WordPress (Theme)
- [ ] **Estructura Base:** Crear la estructura de un tema de WordPress (`style.css`, `index.php`, `functions.php`).
- [ ] **Header y Footer Globales:** Tomar nuestro componente `<Navbar />` y nuestro CSS global, y pasarlos a `header.php` y `footer.php` para que WordPress los inyecte en todas las páginas.
- [ ] **Plantillas de Páginas Estáticas:** Convertir el HTML limpio de `HomeContent`, `NosotrasContent`, `ElTallerContent` en plantillas de página (`page-home.php`, `page-nosotras.php`) dentro de WordPress.

## FASE 2: Integración de Tienda (WooCommerce)
- [ ] **Instalación:** Configurar WooCommerce en el servidor de WordPress.
- [ ] **Estilización (Theming):** Sobrescribir los estilos nativos de WooCommerce (botones, grillas de productos, carrito) usando nuestro `index.css` y la tipografía `Instrument Sans` para que el e-commerce luzca exactamente como el diseño de Figma.

## FASE 3: Integración del Campus (E-learning)
- [ ] **Selección de Plugin LMS:** Instalar LearnDash, Tutor LMS o Sensei.
- [ ] **Personalización Visual:** Asegurarnos de que las páginas de los cursos, lecciones y el perfil del alumno hereden el diseño global de la web (Header, Footer, colores, tipografía).

## FASE 4: Funcionalidad y SEO
- [ ] **Formularios de Contacto:** Reemplazar el formulario estático de Figma por un plugin como Contact Form 7 o WPForms, estilizado con nuestro CSS.
- [ ] **Gestión de Menús:** Conectar el `header.php` con el sistema nativo de menús de WordPress (`wp_nav_menu`) para que el cliente pueda cambiar los enlaces desde el panel de administrador.
