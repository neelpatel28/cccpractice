<?php

//GIVEN
$sentence = "The quick brown fox jumps over the lazy dog";

echo("Position of 'fox' : ".strpos($sentence , "fox")."<br>");
echo("Position of 'cat' : ".strpos($sentence , "cat")."<br>");
echo("First 20 characters : ".substr($sentence , 0,20)."<br>");
?>