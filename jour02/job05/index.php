<?php
for ($i = 2; $i <= 1000; $i++) {
    $isPrime = true; 
    
    
    for ($j = 2; $j <= $i / 2; $j++) {
        if ($i % $j == 0) {
            $isPrime = false; 
            break; 
        }
    }
    
    
    if ($isPrime) {
        echo $i . "<br>";
    }
}
?>

