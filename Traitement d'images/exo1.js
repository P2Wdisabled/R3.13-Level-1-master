// Cette fonction permet d'écrire une couleur spécifique à un pixel de l'image en utilisant ses coordonnées (x, y).
// Les composantes de la couleur (rouge, vert, bleu) sont spécifiées par les paramètres `red`, `green` et `blue`.
// Le pixel est rendu totalement opaque avec une valeur alpha de 255.
function writeColor(image, x, y, red, green, blue) {
  let index = (x + y * image.width) * 4;
  image.pixels[index] = red;
  image.pixels[index + 1] = green;
  image.pixels[index + 2] = blue;
  image.pixels[index + 3] = 255;
}



function setup() {
  let img = createImage(100, 100);
  // Que fait cette fonction ?
  img.loadPixels(); // Charge les données de l'image dans le tableau `pixels` pour permettre des modifications directes.
  createCanvas(100, 100);


  for (var y = 0; y < img.height; y++) {
    for (var x = 0; x < img.width; x++) {
        if (y < img.height / 3) {
            writeColor(img, x, y, 255, 0, 0); // Rouge
        }
        else if (y < (2 * img.height) / 3) {
            writeColor(img, x, y, 255, 255, 255); // Blanc
        }
        else {
            writeColor(img, x, y, 0, 0, 255); // Bleu
        }
    }
}

  // Que fait cette fonction ?
  img.updatePixels(); // Applique les modifications faites dans le tableau `pixels` à l'image affichée.
  // Affiche l'image modifiée sur le canvas à la position (0, 0).
  image(img, 0, 0);
}
