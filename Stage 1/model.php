<?php

/*  Q1

    Observez et testez et comprenez le code déjà donné.
    Puis, de manière analogue à l'existant, complétez ce code pour obtenir
    le même visuel que ./asset/objectif.png

    Note : Les fichiers model.php et index.php ont besoin d'être complété.
           Et seulement ces deux fichiers.
    */


/* Data for Link [Archer] Amiibo */
$archer_title = "Link [Archer]";
$archer_compatibility = "Switch and Switch Lite";
$archer_description = "Cette flèche archéonique vous emmènera loin !
Découvrez vite les avantages de cet amiibo compatible avec de multiples jeux";
$archer_price = 58.25;
$archer_image = "./asset/amiibo-link-archer_2x.png";

/* Data for Zelda Amiibo */
$zelda_title = "Zelda";
$zelda_compatibility = "Switch, Wii U, Nintendo DS";
$zelda_description = "Ne sous-estimez pas la princesse Zelda ! Découvrez
vite les avantages de cet amiibo compatible avec de multiples jeux";
$zelda_price = 62.41;
$zelda_image = "./asset/amiibo-zelda_2x.png";

/* Data for Link [Rider] Amiibo */
// ??


/*  BILAN (à lire une fois l'exerice terminé)

    Cette représentation des données est-elle souhaitable ?
    Evidemment non.

    On a 3 entités à représenter dans notre code. Mais ici chacune correspond à un
    "lot" de 5 variables. Et ces "lots" n'existent que dans notre esprit. Le nommage des
    variables nous aide à ne pas tout mélanger. Mais du point de vue de la machine, il y
    a juste 15 variables distinctes.
    Peux-t-on imaginer gérer beaucoup d'amiibos de la sorte ? Non, ce n'est pas possible.

    En outre, on ne récupèrera jamais de données dans ce "non format" (comprenez "en vrac").
    Dans un cas réel, les données seraient issues d'une base de données ou bien récupérer au
    format JSON. 

*/

