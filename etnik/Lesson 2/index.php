<?php
phpinfo();

$y = "hello world";
print_r($y);

$z = 10.3;
echo gettype($z);

function displayPhpVersion(){
    echo "PHP version: " . phpversion();
}
displayPhpVersion();


function sum(){
    $value = 120 + 20;
    echo $value;
}
sum();

function maximum($x, $y){
    if($x > $y){
      return $x;
    }else{
        return $y;
    }
}

$a = 20;
$b = 10;

$test = maximum($a, $b);
echo "The maximum value is: " . $test . "<br>" . "<br>" . "<br>";


function num($x){
    if(($x % 2) == 0){
        echo "$x eshte numër çift";
}else{
        echo "$x eshte numër tek";
    }
}
print_r(num(10));
print_r(num(15));
print_r(num(30));
print_r(num(54));


$s = 5;
function localVariable(){
    $x = 10;
    echo $x;
}
localVariable();
echo "$s <br>";

$v = 5;
$v2 = 10;

function shuma(){
    global $v, $v2;
    $v2 = $v + $v2;

}

shuma();
echo $v2;



$sport1 = "football";
$sport2 = "football2";
$sport3 = "football3";

$sport = array("football", "football2", "football3");

$sport = ["football", "basketball", "tennis"];

echo $sport[2];
echo end($sport);
echo count($sport);


$len = count($sport);

for($i=0; $i < $len; $i++){
    echo $sport[$i] . "<br>";
}

array_push($sport, "volleyball");
array_pop($sport);
array_unshift($sport, "baseball");
array_shift($sport);
array_slice($sport, 1, 1);

$myvalues = array(10, 20, 30, 40, 50);
echo array_sum($myvalues) . "<br>";


$temp = array(25, 30, 25, 26, 20, 28, 25);
$mesatarja_temp = array_sum($temp)/7;
echo $mesatarja_temp . "<br>";


$vargu = [4, 7, 10, 3, 8, 11, 6];

function numraqift($vargu){
for($i=0; $i < count($vargu); $i++){
    if($vargu[$i] % 2 == 0){
        echo $vargu[$i] . "<br>";
    }
}

}
numraqift($vargu);




?>



