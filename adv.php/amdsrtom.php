<?php
    function isArmstrong($num) {
        $sum = 0;
        $temp = $num;

        while ($temp != 0) {
            $digit = $temp % 10;
            $sum += pow($digit, strlen((string)$num));
            $temp = (int)($temp / 10);
        }

        return $num == $sum;
    }

    $num1 = 5;
    $num2 = 9;
    $num3 = $num1 * $num2;
    $num4 = $num1 + 1;
    $num5 = $num2 + 1;

    echo $num1 . " " . $num2 . "<br/>";
    for ($i = 1; $i <= $num2; $i++) {
        $output = "";
        for ($j = 1; $j <= $num1; $j++) {
            $output .= $num4 . $num5 . " ";
            $num4++;
            $num5++;
        }
        $output .= "<br/>";
        echo $output;
    }

    if (isArmstrong($num3)) {
        echo "$num3 is an Armstrong number.";
    } else {
        echo "$num3 is not an Armstrong number.";
    }
?>
