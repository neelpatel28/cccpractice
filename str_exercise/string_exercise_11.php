<?php

function bubble_sort($arr) {
    $n = count($arr);

    // Traverse through all array elements
    for ($i = 0; $i < $n - 1; $i++) {
        // Last $i elements are already sorted, so we don't need to check them
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Swap if the element found is greater than the next element
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

$myArray = [64, 34, 25, 12, 22, 11, 90];
$sortedArray = bubble_sort($myArray);

echo "Sorted array: " . implode(", ", $sortedArray);



?>