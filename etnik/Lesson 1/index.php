<?php

$x = 20;
$y = 5;
$emri = "Filan";
$mbiemri = "Fisteku";

$shkolla = "Shkolla Digjitale \n";
echo"Hello World! $shkolla \n";  

echo $x + $y;
echo $x - $y;

echo $emri;

echo strlen ($emri);
echo str_word_count ($emri);
echo str_replace ("Fisteku", "Fisteku", $mbiemri);
echo strrev ($emri);

$num = 22;

if($num > 0){
    echo "$num eshte ma i madh se 0";
}

if($num > 5 && $num < 25){
    echo "$num eshte ma i madh se 5 dhe më pak se 25";
}

$a = 50;
$b = 20;

if($a == $b){
    echo "$a eshte i barabart me $b";
}else{
    echo "$a nuk eshte i barabart me $b";
}
?>