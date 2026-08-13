const fs = require('fs');
const path = require('path');

const pageHomePath = path.join('C:', 'Users', 'ra_la', 'Local Sites', 'vendaval-prueba', 'app', 'public', 'wp-content', 'themes', 'vendaval-theme', 'page-home.php');
let html = fs.readFileSync(pageHomePath, 'utf8');

const carouselHTML = `
<!-- HERO CAROUSEL START -->
<div class="hero-carousel-wrapper" style="width: 100vw; height: 100%; position: absolute; left: 50%; transform: translateX(-50%); overflow: hidden;">
    <div class="hero-carousel-track" style="display: flex; height: 100%; width: 500%; transition: transform 0.5s ease-in-out;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/figma_assets/714e22ff2308b5d816b2c4a1ba40292a9c3f54b2.png" style="width: 20%; height: 100%; object-fit: cover; flex-shrink: 0;" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/figma_assets/02eb4d7dab5cff95517a1f1dcc5dd1756d615416.png" style="width: 20%; height: 100%; object-fit: cover; flex-shrink: 0;" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/figma_assets/9518e0be43ad32e108d216e519a03c50e82f3afb.png" style="width: 20%; height: 100%; object-fit: cover; flex-shrink: 0;" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/figma_assets/d850dfca1d2311fb9c4f5c89c854d7e186294531.png" style="width: 20%; height: 100%; object-fit: cover; flex-shrink: 0;" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/figma_assets/048ade7790b93d7a62292bf93c320459ce6fd8aa.png" style="width: 20%; height: 100%; object-fit: cover; flex-shrink: 0;" />
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tracks = document.querySelectorAll('.hero-carousel-track');
        tracks.forEach(track => {
            let index = 0;
            setInterval(() => {
                index = (index + 1) % 5;
                track.style.transform = \`translateX(-\${index * 20}%)\`;
            }, 3000);
        });
    });
</script>
<!-- HERO CAROUSEL END -->
`;

// First, remove the old injected carousels from the gray box
html = html.replace(/<div class="css-mrzb66 css-skrg0u css-7ccwbh">[\s\S]*?<!-- CUSTOM CAROUSEL END -->\n<\/div>/g, '<div class="css-mrzb66 css-skrg0u css-7ccwbh"><div class="css-5knerd css-v27th6" style="opacity:1;transform:none"></div></div>');

// Now, replace the hero images with the carousel
// In Desktop breakpoint, the image is 9518e0be43ad32e108d216e519a03c50e82f3afb.png
html = html.replace(/<img[^>]*9518e0be43ad32e108d216e519a03c50e82f3afb\.png[^>]*>/, carouselHTML);

// In Mobile and Tablet, the image is 48fb5fe66a9ebf4eee5782944c51dc5282c08d13.png
// I need to replace both occurrences
html = html.replace(/<img[^>]*48fb5fe66a9ebf4eee5782944c51dc5282c08d13\.png[^>]*>/g, carouselHTML);

fs.writeFileSync(pageHomePath, html);
console.log('Hero Carousel injected!');
