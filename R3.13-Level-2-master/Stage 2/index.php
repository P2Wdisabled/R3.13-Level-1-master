<?php  // "Front Controller"


require_once("model.php");


// utility function for renderAmiibo function (see below)
function curlyBraces($tag)
{
    return "{{".$tag."}}";
}

/*  function renderAmiibo
    $arrayOfData: an array similar to those inside $data (see model.php)
    returned value: a string which is the template-card.html.inc formated using the values in $arrayOfData
*/
function renderAmiibo($arrayOfData)
{
    $template = file_get_contents("template-card.html.inc");
    $search = array_map( "curlyBraces", array_keys($arrayOfData));
    $replace = array_values($arrayOfData);
    return str_replace( $search, $replace, $template);
}

$content = "";
// complétez votre code ici (aidez-vous de la fonction renderAmiibo ci-dessus)

foreach ($data as $amiibo) {
    $content .= renderAmiibo($amiibo);
}


?>
<!DOCTYPE>
<html lang="fr">

    <head>
        <title>R3.DWeb-DI.13 - POO</title>
        <link href="https://fonts.googleapis.com/css?family=
        Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
        <link href="./style.css" , rel="stylesheet">
    </head>

    <body>
        <section>

            <div class="nine">
                <h1>Zelda - Breath Of The Wild<span>Amiibo</span></h1>
            </div>
        
            <div class="flex-container">
                <?php echo $content; ?>
            </div>

        </section>
    </body>

</html>