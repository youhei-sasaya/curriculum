<?php

function getprice($unitprice, $quantity) {
    $price =  $unitprice * $quantity ;
    print "は".$price."円です。";
}

$fruits = ["300" => "りんご", "150" => "みかん", "3000" => "もも"];

foreach ($fruits as $key => $value) {

    echo $value;
    echo getprice($key,2);

    echo '<br>';
    
}

?>