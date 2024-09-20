<?php

/*  Q1

    Toujours le même objectif (./asset/objectif.png) avec une représentation des
    données encore différentes. Mais pas tant que ça.

    Testez le code et complétez le pour retrouver votre visuel.
*/

$archer = new stdClass();
$archer->title = "Link [Archer]";
$archer->subtitle = "Switch and Switch Lite";
$archer->description = "Cette flèche archéonique vous emmènera loin ! Découvrez
        vite les avantages de cet amiibo compatible avec de multiples jeux";
$archer->price = 58.25;
$archer->image = "./asset/amiibo-link-archer_2x.png";

// OoOoh, $zelda is missing !
$zelda=new stdClass();
$zelda->title = "Zelda";
$zelda->subtitle = "Switch, Wii U, Nintendo DS";
$zelda->description = "Ne sous-estimez pas la princesse Zelda! Découvrez
        vite les avantages de cet amiibo compatible avec de multiples jeux";
$zelda->price = 62.41;
$zelda->image = "./asset/amiibo-zelda_2x.png"; 

$rider = new stdClass();
$rider->title = "Link [Rider]";
$rider->subtitle = "Wii U, Switch, Switch Lite";
$rider->description = "Il y a des chevaux et puis il y a Epona ! Découvrez vite
        les avantages de cet amiibo compatible avec de multiples jeux";
$rider->price = 54.08;
$rider->image = "./asset/amiibo-link-rider_2x.png";

/*  $data is an array of standard object.
    If the data was retrieved from a database, this is another format that may be used by the database server.
    In such a case, each object is related to one row of a table stored in the database.
    A standard object may be compared to {} in Javascript (a rough comparison...)
    A standard object is quite similar to an associative array, keys becomes properties in a standard object.
    It is possible ton convert a standard object in an associtive array (and vice versa). Have a look to the renderAmiibo function.
*/
$data = [$archer, $zelda, $rider];
/*  BILAN (à lire une fois l'exercice terminé)
    
    Note : $data et son contenu correspond à un autre des formats sous lequel un serveur de base de données peut
    retourner une réponse à une requête SQL. D'ailleurs c'était le format que vous avez utilisé au semestre 2.

    Cette troisième version de notre code n'est pas très différente de la précédente. Comme vous l'avez constaté,
    il est simple de passer d'un objet standard à un tableau associatif. Et si vous ne l'avez pas constaté,
    regardez de plus près le code de la fonction renderAmiibo dans index.php voir ce qui diffère de la précédente
    version.

    Les avantages sont les mêmes : les données sont encapsulés dans 3 objets, chacun correspondant à nos 3 amiibos
    que l'on peut donc manipuler plus simplement.

    On peut trouver plus "juste" qu'un amiibo corresponde à un objet dans le code plutôt qu'à un tableau s'agissant
    d'une structure de données générique. Mais ces objets sont des objets standards. Leur type est stdClass. Ils
    ne sont pas différenciables de n'importe quel autre objet standard représentant n'importe quoi d'autre...

    Donc la question demeure : comment créer des objets de type Amiibo ? Histoire que les choses soient bien claires...

*/
