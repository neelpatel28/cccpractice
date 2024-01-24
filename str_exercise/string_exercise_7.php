<?php

function number_game($start,$end){
    for ($i=$start;$i<=$end;$i++){
        if ($i%3==0 and $i%5==0){
            echo "FizzBuzz"."<br>";
        }
        elseif ($i%3==0){
            echo "Fizz"."<br>";
        }
        elseif ($i%5==0){
            echo "Buzz"."<br>";
        }
        else {
            echo "$i"."<br>";
        }
    }
}

number_game(1,100);
?>