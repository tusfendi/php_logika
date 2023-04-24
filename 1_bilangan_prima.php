<?php

echo "====Mencari bilangan Prima ====<\n";
$number = readline('Masukan angka : ');

$prima = true;
for ($i = 2; $i < $number ; $i++) {
    if ($number % $i == 0) {
        $prima = false;
    }
}
echo 'Angka : '.$number;
echo $prima ? " termasuk bilangan prima \n" : " bukan bilangan prima \n";

?>