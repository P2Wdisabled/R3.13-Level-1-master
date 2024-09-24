<?php

/*  Q1

    L'objectif est le même que le précédent exercice. Testez quand même le code pour voir
    d'où vous partez.

    Cette fois vous devez utiliser les données telles qu'elles vous sont données ci-après.

    Note : Il n'y a rien à modifier dans model.php, seul index.php doit être complété
*/


/*  $data is an indexed array of associative arrays.
    Each associative array uses the same keys to describe an amiibo properties

    If the data was retrieved from a database server, you may get them in this format (array of arrays).
    Each associative array would be related to a single row of a table stored in the database.
*/
$data = [
    [
        "title" => "Link [Archer]",
        "subtitle" => "Switch and Switch Lite",
        "description" => "Cette flèche archéonique vous emmènera loin ! Découvrez
        vite les avantages de cet amiibo compatible avec de multiples jeux",
        "price" => 58.25,
        "image" => "./asset/amiibo-link-archer_2x.png"
    ],
    [
        "title" => "Zelda",
        "subtitle" => "Switch, Wii U, Nintendo DS",
        "description" => "Ne sous-estimez pas la princesse Zelda ! Découvrez
        vite les avantages de cet amiibo compatible avec de multiples jeux",
        "price" => 62.41,
        "image" => "./asset/amiibo-zelda_2x.png"
    ],
    [
        "title" => "Link [Rider]",
        "subtitle" => "Wii U, Switch, Switch Lite",
        "description" => "Il y a des chevaux et puis il y a Epona ! Découvrez vite
        les avantages de cet amiibo compatible avec de multiples jeux",
        "price" => 54.08,
        "image" => "./asset/amiibo-link-rider_2x.png"
    ]
];


/*  BILAN (à lire une fois l'exercice terminé)

    Note : Comme indiqué précédemment, notez que $data possède le même format (tableau de tableaux)
    que l'un de ce utilisable par un serveur de base de données pour retourner une réponse à une requête SQL.
    C'est donc un format que vous rencontrerez très certainement encore.
    Dans notre exemple, cela correspondrait à une table avec 5 colonnes nommées "title", "subtitle",
    "description", "price", "image". Et chacun des 3 tableaux correspondraient à une ligne dans cette
    table. Fin de la note.

    Cette version de notre code présente déjà quelques améliorations comparée à la précédente :

        . Les 3 entités/amiibos ont une existence propre dans notre code. Chacune correspond à
          l'un des 3 tableaux associatifs contenu dans $data.

        . Les propriétés des amiboos ont à présent un nommage commun.
          Par exemple 'price' au lieu de 'archer_price', 'zelda_price' et 'rider_price'

    C'est une première étape vers un concept fondamental de la Programmation Orientée Objets : l'encapsulation.
    Il s'agit de regrouper les données(et plus tard les fonctions) qui caractérisent une même entité.
    Ce que l'on a fait ici en regroupant les données cohérentes dans des tableaux distincts.

    L'encapsulation est aussi une façon de masquer la complexité/les détails d'une entité. Il
    est en effet plus simple de penser en terme de tableau (en sachant qu'il y a tout ce qu'il faut dedans)
    que de penser en terme de "lot" de variables. Grâce à cela, la fonction renderAmiibo n'a besoin que d'un seul
    paramètre : un tableau qui contient les données d'un amiibo. La même fonction mais pour un "lot" de 5 variables
    nécessiterait 5 paramètres. De plus, si jamais on devait ajouter une 6ème caractéristique il faudrait ajouter
    un 6ème paramètre ! Alors qu'avec un tableau, on ne change rien, c'est juste qu'il y aura une valeur de plus
    dans le tableau.

    Alors tout cela n'est pas encore parfait. Notamment nos amiibos sont des tableaux. Du point de vue code, rien
    ne les distingue de n'importe quel tableau. Tous les langages de programmation disposent d'un type tableau
    natif. C'est une structure de données de base et générique. Idéalement on préférerait avoir un type "amiibo".

    Et puis vous aurez sans doute remarqué que l'on s'est simplifié la vie en faisant en sorte que les tags dans
    le template template-card.html.inc soient cohérents avec les clés de nos tableaux associatifs (ou inversement).
    Sachant que dans "la vraie vie", le template et la définition des données ne seront pas réalisées par les mêmes
    personnes voire les mêmes entreprises, il y a très peu de chances que l'on puisse compter la-dessus. Il faudra
    au contraire trouver une façon de procéder qui soit indépendante du nommage des tags et/ou des données. Et de
    toute façon, pouvoir modifier les tags sans devoir modifier le nom des données (et inversement), ça semble
    plutôt une bonne idée.
*/