<?php

//GIVEN
$text = "Hello, World! How are you doing?";

echo("length of the string : ".strlen($text)."<br>");
echo("Lower case : ".strtolower($text)."<br>");
echo("Upper case : ".strtoupper($text)."<br>");
echo("Replacemnt : ".str_replace("How are you doing?", "Fine, thank you!", $text)."<br>");
echo("First 10 char : ".substr($text, 1, 10)."<br>");
echo("Substring from 8th to end : ".substr($text, 8, strlen($text))."<br>");

?>