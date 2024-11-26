let img;

function preload() {
   img = loadImage("pebbles.png");
}

function setup() {
   createCanvas(img.width, img.height);
   img.loadPixels();

   for (let y = 0; y < img.height; y++) {
       for (let x = 0; x < img.width; x++) {
           if (x < img.width / 3) {
               keepRed(img, x, y); // Affiche uniquement la composante rouge
           } else if (x < (2 * img.width) / 3) {
               keepGreen(img, x, y); // Affiche uniquement la composante verte
           } else {
               keepBlue(img, x, y); // Affiche uniquement la composante bleue
           }
       }
   }

   img.updatePixels();
   image(img, 0, 0);
}

// Conserve uniquement la composante rouge
function keepRed(image, x, y) {
   let index = (x + y * image.width) * 4;
   image.pixels[index + 1] = 0; // Vert
   image.pixels[index + 2] = 0; // Bleu
}

// Conserve uniquement la composante verte
function keepGreen(image, x, y) {
   let index = (x + y * image.width) * 4;
   image.pixels[index] = 0; // Rouge
   image.pixels[index + 2] = 0; // Bleu
}

// Conserve uniquement la composante bleue
function keepBlue(image, x, y) {
   let index = (x + y * image.width) * 4;
   image.pixels[index] = 0; // Rouge
   image.pixels[index + 1] = 0; // Vert
}
