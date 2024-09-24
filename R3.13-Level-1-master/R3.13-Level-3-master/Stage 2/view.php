<?php
// utility function for renderAmiibo function (see below)
function curlyBraces($tag)
{
    return "{{".$tag."}}";
}

/*  function renderAmiibo
    $amiibo: an Amiibo object (see model.php)
    returned value: a string which is the template-card-amiibo.html.inc formated using $amiibo
*/
function renderProduct(Product $product){
    $class = get_class($product);
    $template = file_get_contents("./templates/template-card-".$class.".html.inc");
    $tags = [];
    preg_match_all("/{{(.*?)}}/", $template, $tags);
    $tags = $tags[0];
    foreach($tags as $tag){
        $getter = str_replace("{{", "", $tag);
        $getter = str_replace("}}", "", $getter);
        $getter = "get" . ucfirst($getter);
        $template = str_replace($tag, $product->$getter(), $template);
    }
    return $template;
}
