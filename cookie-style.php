<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>
body{
            background-color: <?php print($_COOKIE['back-col']);?>;
            color: <?php print($_COOKIE['color']);?>;    
            font-family: <?php print($_COOKIE['font-fam']);?>    
}