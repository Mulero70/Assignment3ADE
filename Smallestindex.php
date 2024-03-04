<?php
function smallest_index($arr, $size) {
    $smallest = $arr[0];
    $index = 0;
    
    for($i = 1; $i < $size; $i++) {
        if($arr[$i] < $smallest) {
            $smallest = $arr[$i];
            $index = $i;
        }
    }
    
    return $index;
}

$my_array = array(7, 5, 8, 1, 9);
$size = sizeof($my_array);

$small_index = smallest_index($my_array, $size);
echo "The smallest element is at index: " . $small_index;
?>