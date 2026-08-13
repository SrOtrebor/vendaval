# Proyecto Vendaval - Custom WordPress Theme

Este repositorio contiene el código fuente del **Custom Theme de WordPress** para Taller Vendaval. 
> **⚠️ IMPORTANTE PARA AGENTES (LLMs):** Leé este documento por completo antes de proponer cambios, ya que define la arquitectura, el flujo de trabajo y el estado actual del proyecto.

## 🚀 Flujo de Trabajo (Deployment Automático)

Hemos configurado un flujo de integración y despliegue continuo (CI/CD) utilizando **WP Pusher**:
1. **Desarrollo Local:** Los cambios se hacen en esta carpeta (`vendaval-theme`), que debe sincronizarse con el entorno local de WordPress (LocalWP).
2. **Repositorio:** Todos los cambios se commitean y se pushean a la rama `main` de este repositorio en GitHub (`SrOtrebor/vendaval`).
3. **Producción (DonWeb):** El sitio en vivo (tallervendaval.com) tiene instalado el plugin WP Pusher. Está configurado para escuchar cambios en este repositorio (específicamente en el subdirectorio `vendaval-theme`) y **se actualiza automáticamente** cada vez que hay un nuevo push en `main`.

## 🎨 Decisiones de Diseño y Arquitectura

- **No Frameworks:** Se descartó el código exportado de Figma. El sitio utiliza **HTML limpio y CSS nativo** (`style.css`), evitando Tailwind o Bootstrap para mantener el código ligero y tener control total.
- **Estética Minimalista:** El diseño prioriza el uso de fondos claros (`--bg-light`), tipografía **Instrument Sans**, bordes finos, y botones negros/oscuros. Todo debe sentirse "premium" y respirar aire.
- **Galerías Dinámicas:** Los shortcodes nativos de galería de WordPress `[gallery]` son interceptados por **Swiper.js** (inyectado en `single-proyectos.php`) para convertirlos en sliders interactivos táctiles, sin abrir las imágenes en pantalla completa.
- **Tutor LMS (Campus):** Los estilos predeterminados de Tutor LMS fueron sobreescritos al final del archivo `style.css` para unificarlos con el minimalismo del sitio. 
- **Optimización de Medios:** Las portadas y fotos pesadas (Home, Taller, Contacto, Cursos) ya fueron optimizadas (redimensionadas y comprimidas a .webp/.jpg) y se cargan desde `assets/images/`.

## 📌 Estado Actual y Próximos Pasos (Pendientes)

El sitio está estructurado y el campus está integrado. Las tareas que **faltan completar** son:

1. **Tienda (WooCommerce):** 
   - Falta estilizar por completo el frontend del e-commerce. Hay que sobreescribir las clases de WooCommerce en `style.css` para que los productos, el carrito y el checkout sigan la identidad visual de Vendaval (Instrument Sans, sin sombras excesivas, botones minimalistas).
2. **Formularios Dinámicos:**
   - Actualmente, las páginas como Contacto tienen formularios en HTML estático que no procesan correos.
   - **Tarea:** Instalar un plugin (como WPForms Lite o Contact Form 7) y reemplazar el HTML estático por los shortcodes, asegurando que el diseño original (campos de texto de línea inferior, sin bordes de caja completos) se mantenga mediante CSS.

---
*Fin del Handoff. Si sos un agente retomando este proyecto en otra PC, arrancá consultando al usuario por cuál de los pasos pendientes desea empezar.*
