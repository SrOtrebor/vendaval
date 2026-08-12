# Taller Vendaval - Custom WordPress Theme

Este es un tema de WordPress 100% a medida construido exclusivamente para **Taller Vendaval**, basado en el diseño original de Figma.

## 🛠 Qué hicimos en este proyecto

El proyecto comenzó como un exportado automático de Figma a código, el cual descartamos por generar problemas de visualización en pantallas móviles (posicionamiento absoluto y falta de responsividad). A partir de allí, tomamos la decisión de **construir la estructura del sitio desde cero** como un tema nativo de WordPress.

### 1. Sistema de Diseño y Maquetación (CSS Moderno)
- **Estructura Responsiva:** Recreamos cada sección (Hero, Navbar, Carruseles, Grillas) utilizando `Flexbox` y `CSS Grid`, garantizando que la web se vea impecable tanto en monitores gigantes de 1920px como en celulares pequeños.
- **Variables Globales:** Establecimos todas las tipografías, colores y espaciados originales del Figma en `style.css` (ej. `--bg-light`, `--text-primary`, `--header-height`) para asegurar consistencia en todo el sitio.
- **Menú de Navegación Dinámico:** Un cabezal (`header.php`) programado para leer el menú creado en el panel de WordPress, con lógica responsiva que adapta los enlaces en pantallas medianas para evitar superposiciones con el logo.

### 2. Proyectos (Custom Post Type)
- Creamos un apartado especial en el menú de WordPress llamado **Proyectos**.
- **Página Principal (Grilla):** La plantilla `archive-proyectos.php` aloja de forma estática el diseño estrella de "Escuela Dorrego" en la parte superior, y de forma dinámica dibuja los proyectos cargados en una grilla perfecta de 3 columnas debajo ("Otros Proyectos"). Rellena con imágenes placeholder de Figma si hay huecos disponibles.
- **Detalle de Proyecto:** La plantilla `single-proyectos.php` se encarga de mostrar la información de cada proyecto cargado de forma individual, utilizando campos personalizados de ACF para las distintas filas de imágenes de la galería (Hero, Fila 1 Mitades, Fila 2 Entera, etc).

### 3. Tienda Online (WooCommerce)
- Integramos la pasarela de **WooCommerce** adaptando por completo su diseño visual para que parezca nativo al diseño de Vendaval (le quitamos su estilo genérico).
- **Campos Personalizados para Precios:** En lugar de usar complejos cálculos matemáticos con plugins que suelen fallar, construimos bloques de "Detalles Adicionales del Producto" (ACF). Esto le permite a la clienta escribir manualmente a su gusto los textos de *"Precio por transferencia"* y *"Precio en Cuotas"* para cada producto.
- Modificamos las plantillas `archive-product.php` (La vitrina principal de la tienda) y `single-product.php` (El detalle del producto al hacer clic).

### 4. Campus y Formación (Tutor LMS)
- Para la sección educativa, implementamos el motor de e-learning **Tutor LMS**.
- Al igual que en WooCommerce, sobrescribimos los diseños (ej. `tutor/loop/course.php`) para reemplazar las tarjetas genéricas por las elegantes tarjetas de "Formación" diseñadas en Figma.
- Se agregaron también los campos personalizados de pago (Transferencia y Cuotas) específicos para los cursos.

## 🚀 Plugins Requeridos
Para que este tema funcione al 100% en el servidor definitivo, necesita los siguientes plugins instalados y activos:
1. **Advanced Custom Fields (ACF):** Vital para los campos de imágenes de los proyectos y los textos de precios manuales.
2. **WooCommerce:** El motor de la Tienda.
3. **Tutor LMS:** El motor del Campus (Formación).

## 📂 Archivos Principales del Tema
- `style.css`: Motor visual de todo el sitio. Contiene el sistema de diseño.
- `header.php` y `footer.php`: Cabecera (menú de navegación) y pie de página globales.
- `functions.php`: El "cerebro" del tema. Registra los menúes, soporte de WooCommerce, Tutor LMS y tamaños de imágenes.
- `archive-proyectos.php` / `single-proyectos.php`: Plantillas para los Proyectos.
- `/woocommerce/`: Contiene los rediseños visuales de la tienda.
- `/tutor/`: Contiene los rediseños visuales del campus.

---
*Construido a medida con paciencia, flexibilidad y mucho código limpio.*
