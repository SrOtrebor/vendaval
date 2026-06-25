const fs = require('fs');

fetch('https://api.figma.com/v1/files/8b3bYdJe57RniTnPEFeZLv', {
    headers: {
        'X-Figma-Token': 'AQUI_IBA_MI_TOKEN_OCULTO_POR_SEGURIDAD'
    }
})
.then(res => {
    if (!res.ok) {
        throw new Error(`HTTP error! status: ${res.status}`);
    }
    return res.json();
})
.then(data => {
    fs.writeFileSync('figma_data.json', JSON.stringify(data, null, 2));
    console.log('Successfully fetched Figma data.');
})
.catch(err => {
    console.error('Error fetching Figma data:', err);
});
