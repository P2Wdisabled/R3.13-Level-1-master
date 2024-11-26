// Exercice 2 - Rotation et Mise à l’Échelle

function setup() {
  createCanvas(windowWidth, windowHeight);
  background(100);
  rectMode(CENTER); // Centre des rectangles
}

function draw() {
  background(100); // Efface le canvas à chaque frame

  // Premier Rectangle : Rotation de PI/3
  push(); // Sauvegarde de l'état actuel du système de coordonnées
  translate(width / 4, height / 2); // Translation vers la position souhaitée
  rotate(PI / 3); // Rotation de 60 degrés
  fill(255, 0, 0, 150); // Rouge avec transparence
  rect(0, 0, 160, 20); // Dessin du rectangle
  pop(); // Restauration de l'état précédent

  // Deuxième Rectangle : Rotation de HALF_PI (90 degrés)
  push();
  translate(width / 2, height / 2);
  rotate(HALF_PI); // Rotation de 90 degrés
  fill(0, 255, 0, 150); // Vert avec transparence
  rect(0, 0, 160, 20);
  pop();

  // Troisième Rectangle : Mise à l’échelle par 2
  push();
  translate((3 * width) / 4, height / 2);
  scale(2); // Mise à l’échelle (zoom x2)
  fill(0, 0, 255, 150); // Bleu avec transparence
  rect(0, 0, 80, 40); // Taille originale réduite pour compenser la mise à l’échelle
  pop();
}
