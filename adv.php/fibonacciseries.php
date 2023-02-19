<?php
    $n = 10; // number of terms in the series
    $num1 = 0; // first number in the series
    $num2 = 1; // second number in the series

    echo "Fibonacci series for $n terms: ";

    // loop to generate the series
    for ($i = 1; $i <= $n; $i++) {
        echo $num1 . " ";
        $sum = $num1 + $num2;
        $num1 = $num2;
        $num2 = $sum;
    }
?>
