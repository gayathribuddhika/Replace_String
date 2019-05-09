<?php

$string = "This part don\'t search. This part search.";
$string_new = substr_replace($string,"section",30,4);

echo $string_new;



?>