# Tareas Pendientes (Backlog)

## 1. Arquitectura Backend (WordPress)
- [ ] **Definición de Arquitectura:** Decidir si la Tienda y el Campus vivirán en subdominios (ej. `tienda.vendaval.com`) con una plantilla de WordPress, o si se construirá una integración **Headless** (React consumiendo la API de WooCommerce y el LMS).
- [ ] **E-learning (Campus):** Investigar e instalar un plugin LMS en WordPress (ej. LearnDash, TutorLMS o Sensei) para gestionar cursos y alumnos.
- [ ] **E-commerce (WooCommerce):** Configurar WooCommerce para la venta de productos físicos y suscripciones/accesos a los cursos del Campus.

## 2. Revisión Visual y Pruebas
- [ ] **Cross-Browser Testing:** Verificar que el sitio se vea idéntico en Chrome, Firefox, Safari y Edge.
- [ ] **Pruebas en Dispositivos Reales:** Probar la web navegando desde un celular y tablet para validar los breakpoints.
- [ ] **Verificación de Enlaces:** Chequear que todos los enlaces internos funcionen.

## 3. Refactorización
- [ ] **Extraer el Footer:** Crear un `<Footer />` global para evitar tener el HTML repetido al final de cada página.
- [ ] **Componentización:** Convertir grillas de productos o banners recurrentes en componentes de React.

## 4. SEO y Rendimiento
- [ ] **Etiquetas Meta y SEO:** Agregar títulos dinámicos y descripciones para cada ruta.
- [ ] **Optimización de Imágenes:** Convertir imágenes pesadas exportadas por Figma a formatos web modernos (`WebP`/`AVIF`).
