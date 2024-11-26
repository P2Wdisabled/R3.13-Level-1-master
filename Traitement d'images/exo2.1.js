let img;

function preload() {
   img = loadImage("pebbles.png");
}

function setup() {
   createCanvas(img.width, img.height);
   img.loadPixels();

   for (let y = 0; y < img.height; y++) {
       for (let x = 0; x < img.width; x++) {
           keepRed(img, x, y);
       }
   }

   img.updatePixels();
   image(img, 0, 0);
}

// Conserve uniquement la composante rouge d'un pixel, les autres (vert et bleu) sont mises à 0.
function keepRed(image, x, y) {
   let index = (x + y * image.width) * 4;
   image.pixels[index + 1] = 0; // Vert
   image.pixels[index + 2] = 0; // Bleu
}
