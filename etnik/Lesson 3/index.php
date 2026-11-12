<?php 

function displayPhpVersion() {
    echo "this is my php version " . phpversion();
}

displayPhpVersion();

function sum(){
    $value = 120 + 20;
    echo $value;
}

sum();

function maximum($x, $y){
    if($x > $y) {
        return $x;
    } else {
        return $y;
    }
     
}

$a = 20;
$b = 30;

$test = maximum($a, $b);

echo "Maximumi i $a dhe $b eshte : $test";




function Baba($x){
    if(($x % 2) == 0) {
        return "$x eshte i plotpjestueshem me 2";
    }else {
        return "$x nuk eshte i plotpjestueshem me 2";
    } 

}   



print_r(Baba(17). "<br>");
print_r(Baba(44). "<br>");
print_r(Baba(13). "<br>");
print_r(Baba(100). "<br>");


$s = 5;

function localVariable(){
    $w = 10;
    echo $w;
}
localVariable();
echo $s;

$v = 5;
$v2 = 10;

function shuma(){
    global $v, $v2;

    $v2 = $v + $v2;
}

shuma();
echo $v2;

$sport1 = "football";

$sport2 = "football1";

$sport3 = "football2";

$sports = array('football', 'football1', 'football2');
 
$sports = ['football', 'basketball', 'handball', 'volleyball'];

echo $sports[2];
echo end($sports);
echo count($sports);

$len = count($sports);

for($i=0; $i < $len; $i++) {
    echo $sports[$i], "<br>";
}

array_push($sports, 'tennis');
array_pop($sports);
array_unshift($sports, 'tennis');
array_shift($sports);
array_slice($sports, 2);

$myvalues = array(10, 20, 30, 40, 50);
echo array_sum($myvalues), "<br>";


$temp = array(25, 30, 25, 26, 20, 28, 25);
$mesatarja_temp = array_sum($temp) / 7;
echo $mesatarja_temp, "<br>";



$vargu = [4, 7, 10, 3, 8, 11, 6];


function evenNumbers($vargu){
    for($a=0; $a < count($vargu); $a++) {
        if($vargu[$a] %2 == 0){
            echo $vargu[$a], "<br>";
        }
    }
}
evenNumbers($vargu);


?>