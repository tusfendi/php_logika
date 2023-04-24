<?php

$n = 12;
$array = [];
$index = 1;
for ($i=1; $i <= $n; $i++) { 
    if ($index <= 4) {
        $array[$index][] = $i;
        $index++;
    } else {
        $index = 1; 
        $array[$index][] = $i;
        $index++;
    }
}

foreach ($array as $values) {
    foreach ($values as $value) {
        echo $value . ' ';
    }
    echo "\n";
}

?>