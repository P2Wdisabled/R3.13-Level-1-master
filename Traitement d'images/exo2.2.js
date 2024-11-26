let img;

function preload() {
   img = loadImage("pebbles.png");
}

function setup() {
   createCanvas(img.width, img.height);
   img.loadPixels();

   for (let y = 0; y < img.height; y++) {
       for (let x = 0; x < img.width; x++) {
           permuteColors(img, x, y);
       }
   }

   img.updatePixels();
   image(img, 0, 0);
}

// Permute les composantes couleurs RGB en GBR
function permuteColors(image, x, y) {
   let index = (x + y * image.width) * 4;

   // Sauvegarder temporairement les composantes
   let red = image.pixels[index];
   let green = image.pixels[index + 1];
   let blue = image.pixels[index + 2];

   // Réassigner dans l'ordre GBR
   image.pixels[index] = green;
   image.pixels[index + 1] = blue;
   image.pixels[index + 2] = red;
}
