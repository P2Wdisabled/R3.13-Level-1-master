// Exercice 3 - Animations

let angle = 0; // Angle pour la rotation
let rotationSpeed = 0.01; // Vitesse de rotation
let oscillationSpeed = 0.05; // Vitesse d'oscillation de la taille

function setup() {
  createCanvas(windowWidth, windowHeight);
  rectMode(CENTER); // Centre des rectangles
  ellipseMode(CENTER); // Centre des ellipses
  textAlign(CENTER, CENTER); // Alignement du texte
  textSize(12);
}

let backgroundColor = 0;
let backgroundReverse = false;
function draw() {
  if(backgroundReverse){
    background(backgroundColor*100); // Efface le canvas à chaque frame
    backgroundColor -= .0039;
    if(backgroundColor<=0.2){
      backgroundReverse = false;
    }
  }else{
  background(backgroundColor%1*100); // Efface le canvas à chaque frame
  backgroundColor += .0039; // Changement de couleur de fond graduellement
  if(backgroundColor>=0.8){
    backgroundReverse = true;
  }
  }
/*
  // Partie 1 : Ellipse Rotative au Centre
  push();
  translate(width / 2, height / 2);
  rotate(angle);
  fill(255, 0, 0, 150); // Rouge avec transparence
  ellipse(0, 0, 160, 20);
  pop();
*/
  // Incrémente l'angle pour la rotation
  angle += rotationSpeed;
/*
  // Partie 2 : Ellipse Suivant la Souris avec Rotation et Oscillation de Taille
  push();
  translate(mouseX, mouseY); // Suivi de la souris
  rotate(angle * 2); // Rotation plus rapide
  let size = 50 + 30 * sin(angle * 3); // Oscillation de la taille
  fill(0, 0, 255, 150); // Bleu avec transparence
  ellipse(0, 0, size, size / 2);
  pop();
*/
  // Partie 3 : Système Solaire Simplifié *(Optionnel)*
  // Uncomment and complete cette section si vous souhaitez ajouter le système solaire
  push();
  translate(width / 2, height / 2); // Position du Soleil au centre
  fill(255, 255, 0); // Jaune pour le Soleil
  ellipse(0, 0, 50, 50); // Soleil

  // Terre
  push();
  rotate(angle * 0.5); // Rotation lente autour du Soleil
  translate(100, 0); // Distance du Soleil
  fill(0, 0, 255); // Bleu pour la Terre
  ellipse(0, 0, 30, 30);

  // Lune
  push();
  rotate(angle * 2); // Rotation plus rapide autour de la Terre
  translate(40, 0); // Distance de la Terre
  fill(200); // Gris pour la Lune
  ellipse(0, 0, 15, 15);
  pop();

  pop();
  pop();
}
