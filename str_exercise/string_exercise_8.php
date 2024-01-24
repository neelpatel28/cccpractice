<?php
//   string_exercise_8.php

function primeno($num){
    for ($i=2;$i<=$num;$i++){
        if ($num==2){
            echo "2 is a Prime Number"."<br>";
            break;
        }
        elseif ($num%$i==0){
            echo "$num is not a Prime Number."."<br>";
            break;
        }
        else {
            echo "$num is a Prime Number."."<br>";
            break;
        }
    }
}

primeno(2);
primeno(11);
primeno(88);
primeno(67);
?>