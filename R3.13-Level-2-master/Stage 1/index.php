<?php  // "Front Controller"


require_once("model.php");


$template = file_get_contents("template-card.html.inc");

$content = "";
$search = ["{{title}}", "{{subtitle}}", "{{description}}", "{{price}}", "{{image}}"];

$replace = [$archer_title, $archer_compatibility, $archer_description, $archer_price, $archer_image];
$content = $content . str_replace( $search, $replace, $template);

$replace = [$zelda_title, $zelda_compatibility, $zelda_description, $zelda_price, $zelda_image];
$content = $content . str_replace( $search, $replace, $template);

$replace = [$rider_title, $rider_compatibility, $rider_description, $rider_price, $rider_image];
$content = $content . str_replace( $search, $replace, $template);


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