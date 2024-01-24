<?php

$name = " John";

$str1 = str_pad($name, 10, "_", STR_PAD_LEFT);
$str2 = str_pad($name, 8, "*", STR_PAD_RIGHT);

echo($str1."<br>");
echo($str2);

?>