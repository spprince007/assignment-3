<?php



function modify($text){

    $makeLowerCase= strtolower($text);
    // echo $makeLowerCase;
    $replaceText = str_replace('brown','red', $makeLowerCase);
     echo $replaceText;
}

$text = "The quick brown fox jumps over the lazy dog";

modify($text);
?>