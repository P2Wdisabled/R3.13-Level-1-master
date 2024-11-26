// variables globales pour les sliders de chaque composante de couleur
let sliderR, sliderG, sliderB;

function setup() {
  createCanvas(windowWidth, windowHeight);
  
  // initialisation du slider pour la composante Rouge
  sliderR = createSlider(0, 255, 127);
  sliderR.position(100, 100);
  
  // initialisation du slider pour la composante Vert
  sliderG = createSlider(0, 255, 127);
  sliderG.position(100, 150);
  
  // initialisation du slider pour la composante Bleu
  sliderB = createSlider(0, 255, 127);
  sliderB.position(100, 200);
  
  // taille de texte par défaut pour l'affichage des valeurs
  textSize(20);
}

function draw() {
  // récupération des valeurs des sliders
  let r = sliderR.value();
  let g = sliderG.value();
  let b = sliderB.value();
  
  // définition de la couleur de fond avec les valeurs des sliders
  background(r, g, b);
  
  // affichage des valeurs actuelles de chaque composante près des sliders
  fill(0); // couleur du texte en noir
  text("Rouge: " + r, sliderR.x + sliderR.width + 10, sliderR.y + 15);
  text("Vert: " + g, sliderG.x + sliderG.width + 10, sliderG.y + 15);
  text("Bleu: " + b, sliderB.x + sliderB.width + 10, sliderB.y + 15);
}
