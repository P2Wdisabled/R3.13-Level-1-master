// Variables globales (les points de contrôle)
let P0, P1, P2;

function setup() {
   createCanvas(windowWidth, windowHeight);
   // Création des points de contrôle avec createVector
   P0 = createVector(100, 600);
   P1 = createVector(width / 2.0, 100);
   P2 = createVector(400, 800);
   background(200);
   textSize(15);
}

// fonction qui dessine les points de contrôle P0, P1, P2
function drawControlPoints() {
   stroke(255, 0, 0);
   fill(255, 0, 0);
   circle(P0.x, P0.y, 15);
   circle(P1.x, P1.y, 15);
   circle(P2.x, P2.y, 15);
   text("P0", P0.x, P0.y - 20);
   text("P1", P1.x, P1.y - 20);
   text("P2", P2.x, P2.y - 20);
}

// fonction qui dessine les segments [P0P1] et [P1P2]
function drawControlCage() {
   stroke(0, 0, 0);
   line(P0.x, P0.y, P1.x, P1.y);
   line(P1.x, P1.y, P2.x, P2.y);
}

function draw() {
   background(255);
   drawControlCage();
   drawControlPoints();
   
   let t = 0.3; // variable pourcentage [0, 1]
   
   // Interpolation des points sur les segments [P0P1] et [P1P2]
   let X01 = p5.Vector.lerp(P0, P1, t);
   let X12 = p5.Vector.lerp(P1, P2, t);
   
   // Dessin des points X01 et X12
   stroke(12, 43, 223);
   fill(12, 43, 223);
   circle(X01.x, X01.y, 5);
   circle(X12.x, X12.y, 5);
   
   // Ajout d'une ligne reliant X01 et X12
   stroke(12, 43, 223); // couleur de la ligne
   line(X01.x, X01.y, X12.x, X12.y);
}
