import fs from 'fs';

// Genereer een versie gebaseerd op de huidige datum en tijd
const version = new Date().toISOString().replace(/[\D]/g, '');

// Schrijf de versie naar een bestand
fs.writeFileSync('./version.txt', version);

console.log('Version updated:', version);
