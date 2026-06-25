# Tareas Pendientes (Backlog)

## 1. Revisión Visual y Pruebas
- [ ] **Cross-Browser Testing:** Verificar que el sitio se vea idéntico en Chrome, Firefox, Safari y Edge.
- [ ] **Pruebas en Dispositivos Reales:** Probar la web navegando desde un celular (iPhone, Android) y desde una tablet para validar que los breakpoints de Figma se activan correctamente.
- [ ] **Verificación de Enlaces:** Chequear que todos los enlaces internos (tanto en la botonera como dentro del contenido de las páginas) funcionen y lleven a las páginas correctas.

## 2. Refactorización (Opcional pero Recomendado)
- [ ] **Extraer el Footer:** Mismo procedimiento que con el Navbar. Crear un `<Footer />` global para evitar tener el HTML del "SEGUINOS!" repetido al final de cada página.
- [ ] **Extracción de Componentes Repetitivos:** Identificar si hay otras secciones (como grillas de productos, banners) que se repiten en varias páginas y convertirlas en componentes de React.

## 3. SEO y Metadatos
- [ ] **Etiquetas Meta:** Agregar títulos dinámicos y descripciones (SEO) para cada una de las rutas usando `react-helmet` o manipulando el `document.title` al montar cada vista.
- [ ] **Atributos Alt en Imágenes:** Asegurarse de que todas las imágenes críticas (especialmente en la Tienda y en Proyectos) tengan su texto alternativo (`alt="..."`) descriptivo.

## 4. Rendimiento (Performance)
- [ ] **Optimización de Imágenes:** Figma suele exportar las imágenes en formatos pesados (PNG/JPG). Se recomienda correr un script de optimización para convertirlas a `WebP` o `AVIF` y actualizar las referencias en el código.
- [ ] **Code Splitting (Lazy Loading):** Implementar carga diferida en las rutas del `App.tsx` usando `React.lazy()` para que el usuario no descargue todo el código de la página al entrar por primera vez.

## 5. Funcionalidad de E-commerce (Tienda)
- [ ] **Lógica del Carrito:** Si la Tienda va a tener funcionalidad real, comenzar a diagramar el estado global (Context API o Redux) para el carrito de compras.
- [ ] **Integración con Pasarela de Pago:** Preparar el terreno para MercadoPago o similar si se realizarán ventas directas desde la web.
