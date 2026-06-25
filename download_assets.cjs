const fs = require('fs');
const https = require('https');
const path = require('path');

const html = fs.readFileSync('E:/Vendaval/site.html', 'utf8');
const assets = html.match(/_assets\/v11\/[^\s\"'\)\?]+/gi);
const unique = assets ? [...new Set(assets)].filter(u => u.endsWith('.png') || u.endsWith('.jpg') || u.endsWith('.svg') || u.endsWith('.gif')) : [];

const dir = 'E:/Vendaval/public/figma_assets';
if (!fs.existsSync(dir)){
    fs.mkdirSync(dir, { recursive: true });
}

console.log(`Downloading ${unique.length} assets...`);

unique.forEach(asset => {
    const filename = path.basename(asset);
    const url = `https://check-shelf-45268805.figma.site/${asset}`;
    const dest = path.join(dir, filename);
    
    https.get(url, (response) => {
        if (response.statusCode === 200) {
            const file = fs.createWriteStream(dest);
            response.pipe(file);
            file.on('finish', () => {
                file.close();
            });
        }
    }).on('error', (err) => {
        console.error(`Error downloading ${url}:`, err.message);
    });
});

console.log("Downloads started. Images will be saved in public/figma_assets/");
