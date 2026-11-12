<?php
$produktet = array(
    array(
        "produkti" => "PS5",
        "qmimi" => 500,
    ),

    array(
        "produkti" => "Pc",
        "qmimi" => 750,

    ),

    array(
        "produkti" => "Iphone",
        "qmimi" => 300,

    ),


);

echo "Qfar produkti eshte: " . $produktet[0]["produkti"] . "<br>";
echo "Qmimi i produktit eshte : " . $produktet[0]["qmimi"] . "<br>";

echo "Qfar produkti eshte: " . $produktet[1]["produkti"] . "<br>";
echo "Qmimi i produktit eshte : " . $produktet[1]["qmimi"] . "<br>";

echo "Qfar produkti eshte: " . $produktet[2]["produkti"] . "<br>";
echo "Qmimi i produktit eshte : " . $produktet[2]["qmimi"] . "<br>";

$totali = 0;

for ($i=0; $i < count($produktet); $i++) {

$totali = $totali += $produktet[$i]["qmimi"];
};

echo $totali;
?>