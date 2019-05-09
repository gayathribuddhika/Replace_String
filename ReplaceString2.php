<?php

$string = "This is a string, and is an example.";

$string_new = str_replace("is","",$string);

echo $string_new;

?>

<br><br>

<?php

$find = array("is","string","example");
$replace = array ("IS","STRING","");

$string = "This is a string, and is an example.";

$string_new = str_replace($find,$replace,$string);

echo $string_new;

?>