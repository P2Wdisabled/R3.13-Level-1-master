function setup() {
    // ?
    createCanvas(windowWidth, windowHeight);
    // ?
    background(100);
    //créer un étoile sur le meme principe
    //10 sommets
    //fill(255, 0, 0);
    //stroke(0, 0, 255);
    //beginShape();
    //vertex(50, 20); // Pointe supérieure
    //vertex(58, 35); // Premier point intérieur
    //vertex(75, 38); // Première pointe droite
    //vertex(63, 50); // Deuxième point intérieur
    //vertex(68, 70); // Pointe inférieure droite
    //vertex(50, 59); // Troisième point intérieur
    //vertex(32, 70); // Pointe inférieure gauche
    //vertex(37, 50); // Quatrième point intérieur
    //vertex(25, 38); // Deuxième pointe gauche
    //vertex(42, 35); // Cinquième point intérieur
    //endShape(CLOSE);
 }
 
 
 function draw() {
    background(230);
    stroke(0); noFill();
    beginShape();
    let precision = map(mouseX, 0, width, 10, 100);
    let y = map(mouseY, 0, height, 0, height);
    for (let x = 0; x <= width + precision; x += precision) {
        y = height - y;
        vertex(x, y);
    }
    endShape(); // Attention à ne pas utiliser CLOSE ici
 }
 