// Fonction setup() : exécutée une seule fois au démarrage du programme
function setup() {
    // Crée un canevas de 400 pixels de largeur et 400 pixels de hauteur
    createCanvas(windowWidth, windowHeight);
    //
    background(240);
   stroke(0);
   strokeWeight(1);
   fill(255);
   rect(80, 70, 38, 80);
   circle(100, 70, 60);
   ellipse(119, 70, 16, 32);
    ellipse(81, 70, 16, 32);
    line(81, 150, 70, 180);
    line(118, 150, 128, 180);
}

function drawGrid(delta) {
    noFill();
    stroke(100, 100, 100);
    textSize(10);
    for (let x = 0; x <= width; x += delta) {
        for (let y = 0; y <= height; y += delta) {
            line(x, 0, x, height);
            line(0, y, width, y);
            if (y == 0) text(x, x + 1, y + 10);
            if (x == 0) text(y, x + 1, y - 1);
        }
    }
 }
 