function adjustBrightness(image, p) {
   image.loadPixels();
   for (let y = 0; y < image.height; y++) {
       for (let x = 0; x < image.width; x++) {
           let index = (x + y * image.width) * 4;

           // Modifier chaque composante R, G, B
           image.pixels[index] = image.pixels[index] * p;       // Rouge
           image.pixels[index + 1] = image.pixels[index + 1] * p; // Vert
           image.pixels[index + 2] = image.pixels[index + 2] * p; // Bleu
       }
   }
   image.updatePixels();
}


function adjustContrast(image, p) {
   image.loadPixels();
   for (let y = 0; y < image.height; y++) {
       for (let x = 0; x < image.width; x++) {
           let index = (x + y * image.width) * 4;

           // Modifier chaque composante R, G, B
           image.pixels[index] = image.pixels[index] + p * (image.pixels[index] - 128);       // Rouge
           image.pixels[index + 1] = image.pixels[index + 1] + p * (image.pixels[index + 1] - 128); // Vert
           image.pixels[index + 2] = image.pixels[index + 2] + p * (image.pixels[index + 2] - 128); // Bleu
       }
   }
   image.updatePixels();
}


function toGrayscale(image) {
   image.loadPixels();
   for (let y = 0; y < image.height; y++) {
       for (let x = 0; x < image.width; x++) {
           let index = (x + y * image.width) * 4;

           // Calculer la valeur en niveaux de gris
           let gray = 0.299 * image.pixels[index] + 0.587 * image.pixels[index + 1] + 0.114 * image.pixels[index + 2];

           // Appliquer la valeur à R, G, B
           image.pixels[index] = gray;       // Rouge
           image.pixels[index + 1] = gray;   // Vert
           image.pixels[index + 2] = gray;   // Bleu
       }
   }
   image.updatePixels();
}


function toSepia(image) {
   image.loadPixels();
   for (let y = 0; y < image.height; y++) {
       for (let x = 0; x < image.width; x++) {
           let index = (x + y * image.width) * 4;

           // Sauvegarder temporairement les valeurs originales
           let r = image.pixels[index];
           let g = image.pixels[index + 1];
           let b = image.pixels[index + 2];

           // Appliquer les formules de sépia
           image.pixels[index] = r * 0.393 + g * 0.769 + b * 0.189;       // Rouge
           image.pixels[index + 1] = r * 0.349 + g * 0.686 + b * 0.168;   // Vert
           image.pixels[index + 2] = r * 0.272 + g * 0.534 + b * 0.131;   // Bleu
       }
   }
   image.updatePixels();
}


let img, imgModif;

function preload() {
    img = loadImage("pebbles.png");
}

function setup() {
    imgModif = createImage(img.width, img.height);
    createCanvas(img.width, img.height);
    img.loadPixels();
}

function draw() {
    // Copier l'image originale non modifiée
    imgModif.copy(img, 0, 0, img.width, img.height, 0, 0, img.width, img.height);

    // Calculer les valeurs de p pour la luminosité et le contraste
    let pBrightness = map(mouseX, 0, width, 0, 2); // p entre 0 et 2
    let pContrast = map(mouseY, 0, height, 0, 1);  // p entre 0 et 1

    // Appliquer les transformations
    adjustBrightness(imgModif, pBrightness);
    adjustContrast(imgModif, pContrast);
    toGrayscale(imgModif);

    // Afficher l'image modifiée
    image(imgModif, 0, 0);
}
