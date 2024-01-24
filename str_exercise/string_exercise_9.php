<?php
//   string_exercise_9.php
// Fibonacci Sequence

function fib($num)
{
    $a = 0;
    $b = 0;
    $c = 1;
    $n = 1;
echo "Fibonacci series' first $num numbers are : ";
    while ($n<=$num)
    {
        echo "$a"." ";
        $a = $b + $c;
        $c = $b;
        $b = $a;
        $n++;
    }
    echo "<br>"."<br>";
}

fib(10);
fib(12);
fib(15);
?>