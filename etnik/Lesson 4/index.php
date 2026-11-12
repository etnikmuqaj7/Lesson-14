<?php

$my_file = fopen("ds.txt", "w"); //mbishkrimet
// // $my_file = fopen("ds.txt", "r"); //veq me lexu
// // $my_file = fopen("ds.txt", "a"); //veq me shkrupor shtohet ne fun te file
// // $my_file = fopen("ds.txt", "w+"); //veq me shkru,lexu fshihen te dhenat paraprake nr file
// // $my_file = fopen("ds.txt", "x"); //krijohet file i ri per veq me shk)

// // $myfile = fread("myfile", filesize("myfile"));

$teksti = "Digjital school";

fwrite($my_file , $teksti);

fclose($my_file);


$tekxt = fopen("file.txt", "w");

fclose($tekxt);


file_put_contents("new.txt", $teksti);

echo file_get_contents("new.txt");


$lista = ['laptop', 'conputer', 'telefon', 'lodra'];

file_put_contents("new1.txt", $lista);
file_get_contents("new1,txt");

for($i=0; $i<count($lista); $i++){
    fwrite($fajlli,$lista[$i] . "<br>");
}
fclose($fajlli);

echo file_get_contents("lista.txt");

?>