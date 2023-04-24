<?php

$bilangan = array(11,6, 31, 201, 99, 861, 1, 7, 14, 79);
echo "Mencari bilangan terbesar dari array  : " .  json_encode($bilangan);
$max = 0;
foreach ($bilangan as $key => $value) {
    if ($value > $max) {
        $max = $value;
    }
}
echo "\nBilangan terbesarnya adalah $max \n";
?>