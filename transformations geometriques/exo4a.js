let largeurs = [];
let ecart = 10; // Distance entre les barres en pixels
let maxVariation; // Variation maximale en pixels
let centerX; // Position centrale sur l'axe X

function setup() {
    createCanvas(windowWidth, windowHeight);
    rectMode(CORNER); // Assurez-vous que le mode est CORNER
    centerX = width / 2; // Calcul de la position centrale sur l'axe X
    maxVariation = width / 2; // 50% de la largeur de la fenêtre

    // Initialisation des largeurs des barres entre -maxVariation et +maxVariation
    for (let i = 0; i < height; i += ecart) {
        let lw = random(-maxVariation, maxVariation);
        largeurs.push(lw);
    }
}

function draw() {
    background(100);

    // Boucle pour dessiner chaque barre
    for (let i = 0; i < largeurs.length; i++) {
        // Calcul de la position Y
        let y = i * ecart;

        // Mise à jour de la largeur avec variation aléatoire
        largeurs[i] += random(-ecart, ecart);

        // Limiter la largeur entre -maxVariation et +maxVariation
        largeurs[i] = constrain(largeurs[i], -maxVariation, maxVariation);

        // Détermination de la position X et de la largeur absolue
        let lw = largeurs[i];
        let x;
        let rectWidth = abs(lw);

        if (lw >= 0) {
            x = centerX; // Barres s'étendent vers la droite
            fill(0, 0, 255); // Bleu pour les barres à droite du centre
        } else {
            x = centerX - rectWidth; // Barres s'étendent vers la gauche
            fill(255, 0, 0); // Rouge pour les barres à gauche du centre
        }

        noStroke();
        rect(x, y, rectWidth, ecart - 2);
    }
}

// Fonction pour ajuster la toile lors du redimensionnement de la fenêtre
function windowResized() {
    resizeCanvas(windowWidth, windowHeight);
    centerX = width / 2; // Recalculer la position centrale sur l'axe X
    maxVariation = width / 2; // Recalculer la variation maximale

    // Réinitialiser les largeurs des barres
    largeurs = [];
    for (let i = 0; i < height; i += ecart) {
        let lw = random(-maxVariation, maxVariation);
        largeurs.push(lw);
    }
}
