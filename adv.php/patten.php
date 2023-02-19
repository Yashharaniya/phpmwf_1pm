<!-- whar a program to find star patten -->

<?php

for($i=1;$i<=5;$i++)//col
{
    for($k=5;$k>=$i;$k--)
    {
        echo " ";
    }
    for($j=1;$j<=$i;$j++)//row
    {
        echo "* ";
    }
echo "<br>";
}


?>
