let N = 200;   // nombre de bugs
let bugs = []; // tableau des bugs
let speedIncrement = 0.02// augmentation de la vitesse

/* Fonction createOneBug
  Fabrique et retourne un objet "bug"
*/
let createOneBug = function () {
   // déclaration d'un objet bug
   let bug = {
       // PROPRIETES
       x: random(windowWidth), // abscisse
       y: random(windowHeight), // ordonnée
       diameter: random(10, 30), // diamètre aléatoire entre 10 et 30
       speed: 1, // vitesse initiale
       isStatic: false, // dynamique par défaut

       // METHODES

       // méthode move : déplace aléatoirement les coordonnées du bug
       move: function () {
           if (!this.isStatic) {
               // Modification aléatoire de l'abscisse et ordonnée en fonction de la vitesse
               this.x += random(-this.speed, this.speed);
               this.y += random(-this.speed, this.speed);

               // Vérification des limites de l'écran
               if (this.x < 0) this.x = 0;
               if (this.x > width) this.x = width;
               if (this.y < 0) this.y = 0;
               if (this.y > height) this.y = height;

               // Augmentation de la vitesse
               this.speed += speedIncrement;

               // Vérification des collisions avec les particules statiques
               for (let i = 0; i < bugs.length; i++) {
                   let other = bugs[i];
                   if (other.isStatic) {
                       let distance = dist(this.x, this.y, other.x, other.y);
                       let sumRadii = (this.diameter / 2) + (other.diameter / 2);
                       if (distance < sumRadii) {
                           this.isStatic = true;
                           this.speed = 0; // Arrêter le mouvement
                           break; // Sortir de la boucle une fois qu'une collision est détectée
                       }
                   }
               }
           }
       },

       // méthode display : affiche un bug
       display: function () {
           if (this.isStatic) {
               fill(255, 0, 0); // Rouge pour statique
           } else {
               fill(0, 0, 255); // Bleu pour dynamique
           }
           noStroke();
           circle(this.x, this.y, this.diameter);
       }
   }; // fin de la déclaration d'un objet bug

   return bug; // la fonction renvoie l’objet bug créé
}

function setup() {
   createCanvas(windowWidth, windowHeight);
   background(100);

   // Créations des objets (les bugs dynamiques)
   for (let i = 0; i < N; i++) {
       let bug = createOneBug();
       bugs.push(bug);
   }

   // Création de la première particule statique au centre
   let first = createOneBug();
   first.x = windowWidth / 2;
   first.y = windowHeight / 2;
   first.isStatic = true;
   bugs.push(first);
}

function draw() {
   background(100);
   
   for (let i = 0; i < bugs.length; i++) {
       let iemeBug = bugs[i];
       iemeBug.move(); // modification de la position si dynamique
       iemeBug.display(); // affichage
   }

   // Vérifier si toutes les particules sont statiques
   let allStatic = true;
   for (let i = 0; i < bugs.length; i++) {
       if (!bugs[i].isStatic) {
           allStatic = false;
           break;
       }
   }

   // Si toutes les particules sont statiques, arrêter l'animation
   if (allStatic) {
       noLoop();
   }
}

// Ajuster le canvas si la fenêtre est redimensionnée
function windowResized() {
   resizeCanvas(windowWidth, windowHeight);
}
