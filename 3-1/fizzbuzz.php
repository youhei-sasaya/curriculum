<?php

$num = 1;
while($num <= 100) {
    if (($num % 3) == 0 and ($num % 5) == 0){ 
        echo 'fizzBizz!!';
    } else {
        if (($num % 3) == 0){ 
            echo 'fizz!';
        } else {
            if (($num % 5) == 0){ 
                echo 'Bizz!';
            } else {
            echo $num;    
            }    
        }
    }
    echo '<br>';
    $num++;
}

?>