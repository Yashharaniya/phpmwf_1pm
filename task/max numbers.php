<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>max numbers</title>
</head>
<body>

<?php 
if(isset($_POST["tot"]))
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];

if ($a > $b && $a > $c)
{ 
echo "Biggest number is ". $a;
}
if ($b > $a && $b > $c){ 
echo "Biggest number is ". $b;
}
if ($c > $a && $c > $b){ 
    echo "Biggest number is ". $c;
}




?>
<form method="post">
<h3>1 number</h3>
<input type="number" name="a" required><br><br>
<h3>2 number</h3>
<input type="number" name="b" required><br><br>
<h3>3 number</h3>
<input type="number" name="c" required><br><br>
<input type="submit" name="tot" value="submit"> 
</form>
</body>
</html>