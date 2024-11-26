/* Rappel : La fonction setup est exécutée
  une seule fois au lancement du programme */
  function setup() {
    createCanvas(windowWidth, windowHeight);
    background(100);
 }
 
 
 /* Rappel : La fonction draw est exécutée en boucle
   tout le temps de l'exécution du programme*/
 function draw() {
    push();
    translate(windowWidth / 2-25, windowHeight / 2);
    rect(0, 0, 50, 150);
    translate(0, 150);
    rotate(35)
    line(0, 0, 0, -75);
    translate(-45, 22);
    rotate(-70);
    line(0, 0, 0, -75);
    pop();
    translate(windowWidth / 2, windowHeight / 2);
    ellipse(0, 0, 100, 100);
    translate(25, 0);
    ellipse(0, 0, 25, 60);
    translate(-45, 0);
    ellipse(0, 0, 25, 60);
 }
 