// Fonction setup() : exécutée une seule fois au démarrage du programme
function setup() {
    // Crée un canevas de 400 pixels de largeur et 400 pixels de hauteur
    createCanvas(400, 400);
    
    // Définit la couleur de fond du canevas en bleue
    background('blue');
    
    // Calcule les coordonnées du centre du canevas
    let centreX = width / 2;    // Coordonnée X du centre
    let centreY = height / 2;   // Coordonnée Y du centre
    
    // Définit la couleur de remplissage du cercle en blanc
    fill('white');
    
    // Dessine un cercle avec un diamètre de 100 pixels au centre du canevas
    circle(centreX, centreY, 100);
}

function draw() {
    // Génère une taille aléatoire pour le cercle entre 10 et 50 pixels
    let taille = random(10, 50);
    
    // Dessine un cercle avec la taille aléatoire aux coordonnées actuelles de la souris
    circle(mouseX, mouseY, taille);
}
