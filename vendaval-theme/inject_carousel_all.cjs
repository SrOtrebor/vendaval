const fs = require('fs');
const path = require('path');

const pageHomePath = path.join('C:', 'Users', 'ra_la', 'Local Sites', 'vendaval-prueba', 'app', 'public', 'wp-content', 'themes', 'vendaval-theme', 'page-home.php');
let html = fs.readFileSync(pageHomePath, 'utf8');

const carouselHTML = `
<!-- CUSTOM CAROUSEL START -->
<div class="custom-carousel-wrapper" style="width: 100%; height: 100%; min-height: 500px; position: relative; overflow: hidden; border-radius: 10px;">
    <div class="custom-carousel-track" style="display: flex; height: 100%; width: 500%; transition: transform 0.5s ease-in-out;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/figma_assets/714e22ff2308b5d816b2c4a1ba40292a9c3f54b2.png" style="width: 20%; height: 100%; object-fit: cover; flex-shrink: 0;" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/figma_assets/02eb4d7dab5cff95517a1f1dcc5dd1756d615416.png" style="width: 20%; height: 100%; object-fit: cover; flex-shrink: 0;" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/figma_assets/9518e0be43ad32e108d216e519a03c50e82f3afb.png" style="width: 20%; height: 100%; object-fit: cover; flex-shrink: 0;" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/figma_assets/d850dfca1d2311fb9c4f5c89c854d7e186294531.png" style="width: 20%; height: 100%; object-fit: cover; flex-shrink: 0;" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/figma_assets/048ade7790b93d7a62292bf93c320459ce6fd8aa.png" style="width: 20%; height: 100%; object-fit: cover; flex-shrink: 0;" />
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tracks = document.querySelectorAll('.custom-carousel-track');
        tracks.forEach(track => {
            let index = 0;
            setInterval(() => {
                index = (index + 1) % 5;
                track.style.transform = \`translateX(-\${index * 20}%)\`;
            }, 3000);
        });
    });
</script>
<!-- CUSTOM CAROUSEL END -->
`;

// Replace all remaining empty boxes
html = html.split('<div class="css-mrzb66 css-skrg0u css-7ccwbh"><div class="css-5knerd css-v27th6" style="opacity:1;transform:none"></div></div>').join(`<div class="css-mrzb66 css-skrg0u css-7ccwbh">${carouselHTML}</div>`);

fs.writeFileSync(pageHomePath, html);
console.log('Carousel injected into ALL breakpoints of page-home.php');
