<?php

echo "==== Piramida angka ====<\n";
$number = readline('Masukan angka max : ');

for ($i=1; $i <= $number ; $i++) { 
    for ($start=1; $start <= $i ; $start++) { 
        echo $start . " ";
    }
    echo "\n";
}


?>