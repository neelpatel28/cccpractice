<?php
//Factorial
//   string_exercise_10.php
function fact($num){
    if ($num == 0 or $num == 1) {
        return 1;
    } else {
        return $num * fact($num - 1);
    }
}

$num = 1; 
echo "Factorial of $num is ".fact($num)."<br>"."<br>";
$num = 5; 
echo "Factorial of $num is ".fact($num)."<br>"."<br>";
$num = 8; 
echo "Factorial of $num is ".fact($num)."<br>"."<br>";
$num = 10; 
echo "Factorial of $num is ".fact($num)."<br>"."<br>";
$num = 12; 
echo "Factorial of $num is ".fact($num)."<br>"."<br>";

?>