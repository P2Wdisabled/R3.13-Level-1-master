let P0, P1, P2;

function setup() {
   createCanvas(windowWidth, windowHeight);
   P0 = createVector(100, 600);
   P1 = createVector(width / 2.0, 100);
   P2 = createVector(400, 800);
   background(200);
   textSize(15);
}

function draw() {
   background(255);

   // Afficher les points de contrôle et la cage
   stroke(255, 0, 0);
   fill(255, 0, 0);
   circle(P0.x, P0.y, 15);
   circle(P1.x, P1.y, 15);
   circle(P2.x, P2.y, 15);
   text("P0", P0.x, P0.y - 20);
   text("P1", P1.x, P1.y - 20);
   text("P2", P2.x, P2.y - 20);

   stroke(0, 0, 0);
   line(P0.x, P0.y, P1.x, P1.y);
   line(P1.x, P1.y, P2.x, P2.y);

   // Tracé de la courbe sans afficher X01 et X12
   beginShape();

   for (let t = 0; t <= 1; t += 0.01) {
       let X01 = p5.Vector.lerp(P0, P1, t);  // Calcul de X01 (non affiché)
       let X12 = p5.Vector.lerp(P1, P2, t);  // Calcul de X12 (non affiché)
       let X = p5.Vector.lerp(X01, X12, t);  // Point de la courbe

       vertex(X.x, X.y);  // Ajout du point X à la courbe
   }

   endShape();  // Fin du tracé continu de la courbe
}
