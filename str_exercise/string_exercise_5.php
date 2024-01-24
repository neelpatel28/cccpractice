<?php

//string_exercise_5.php
$quote = "In three words I can sum up everything I've learned about life: it goes on.";

echo("Total number of words are : ".str_word_count($quote)."<br>");
echo("Lower Case : ".strtolower($quote)."<br>");
echo("Initial letter capital of every word : ".ucwords($quote)."<br>");


?>