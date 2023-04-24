<?php

$array = array(10,4,6,7,8,9,12,17,18,13);
echo "Array yang diurutkan : ". json_encode($array);
$n = sizeof($array);
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($array[$j] > $array[$j+1]) {
            $index = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $index;
        }
    }
}
echo "\nHasil : " . json_encode($array) . "\n";
?>