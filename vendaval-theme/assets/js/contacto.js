/**
 * Vendaval - Custom file input for Contact Form 7
 * Externalizado desde page-contacto.php por seguridad (evitar JS inline).
 */
document.addEventListener('DOMContentLoaded', function() {
    var fileInputs = document.querySelectorAll('.wpcf7-form input[type="file"]');
    fileInputs.forEach(function(input) {
        var wrapper = document.createElement('div');
        wrapper.className = 'custom-file-wrapper';
        
        var btn = document.createElement('div');
        btn.className = 'custom-file-btn';
        btn.textContent = 'Adjuntar archivo';
        
        var fileName = document.createElement('span');
        fileName.className = 'custom-file-name';
        fileName.textContent = 'Ningún archivo seleccionado';
        
        wrapper.appendChild(btn);
        wrapper.appendChild(fileName);
        
        input.parentNode.insertBefore(wrapper, input);
        wrapper.appendChild(input);
        
        // Estilos
        input.style.opacity = '0';
        input.style.position = 'absolute';
        input.style.top = '0';
        input.style.left = '0';
        input.style.width = '100%';
        input.style.height = '100%';
        input.style.cursor = 'pointer';
        
        input.addEventListener('change', function(e) {
            if (e.target.files.length > 0) {
                // Sanitizar nombre de archivo para prevenir XSS
                var safeName = e.target.files[0].name.replace(/[<>&"']/g, '');
                fileName.textContent = safeName;
            } else {
                fileName.textContent = 'Ningún archivo seleccionado';
            }
        });
    });
});
