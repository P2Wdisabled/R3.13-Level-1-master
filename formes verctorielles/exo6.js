let heightMax;
let flames = [];
let flameChangeRate = 20; // changements par seconde
let flameChangeInterval;
let lastFlameUpdateTime = 0;

function setup() {
    createCanvas(windowWidth, windowHeight);
    heightMax = 150;
    stroke(50);
    strokeWeight(2);
    fill(200);
    flameChangeInterval = 1000 / flameChangeRate;

    // Initialiser les flammes
    for (let y = height / 100; y <= height; y += 25) {
        let flame = {
            yPosition: y,
            flameOffsets: [],
            flameColors: []
        };
        // Initialiser flameOffsets et flameColors pour chaque flamme
        for (let x = 25; x < width - 25; x += 25) {
            flame.flameOffsets.push(0);
            flame.flameColors.push(color(200));
        }
        flames.push(flame);
    }
}

function draw() {
    background(200);
    clear();

    let currentTime = millis();
    let shouldUpdateFlames = false;
    if (currentTime - lastFlameUpdateTime >= flameChangeInterval) {
        lastFlameUpdateTime = currentTime;
        shouldUpdateFlames = true;
    }

    // Trier les flammes par yPosition croissante
    flames.sort(function(a, b) {
        return a.yPosition - b.yPosition;
    });

    // Mettre à jour flameOffsets et flameColors si nécessaire
    if (shouldUpdateFlames) {
        for (let k = 0; k < flames.length; k++) {
            let flame = flames[k];
            for (let i = 0; i < flame.flameOffsets.length; i++) {
                let xPos = (i * 25) + 25;
                let r = 0;
                let flameColor = color(255, random(100, 200), 0);

                if (xPos > width / 3 && xPos < (2 * width) / 3) {
                    r = random(3, heightMax);
                }
                flame.flameOffsets[i] = r;
                flame.flameColors[i] = flameColor;
            }
        }
    }

    // Mettre à jour et dessiner les flammes
    for (let i = 0; i < flames.length; i++) {
        let flame = flames[i];
        drawRandomWave(flame);
        // Déplacer la flamme vers le bas
        flame.yPosition += 5;
        // Réinitialiser la flamme si elle sort de l'écran
        if (flame.yPosition > height) {
            flame.yPosition = height / 100;
        }
    }
}

function drawRandomWave(flame) {
    beginShape();
    for (let i = 0; i < flame.flameOffsets.length; i++) {
        let x = (i * 25) + 25;
        let r = flame.flameOffsets[i];
        let flameColor = flame.flameColors[i];
        fill(flameColor);
        stroke(flameColor);
        curveVertex(x, flame.yPosition - r);
    }
    endShape();
}
