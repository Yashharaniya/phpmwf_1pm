<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcom to my web side </title>
</head>
<body>
<?php
     if(isset($_POST["og"]))
{
    $p=$_POST["ab"];
    $t=$_POST["yb"];
    $r=$_POST["ib"];
    $ci;
    
    $ci=$p*pow((1+$r/100),$t)-$p;
    
    echo "your interesh is".$ci;
}

?>
<form method="post">
<h3>enter ammount</h3>
<input type="text" name="ab" required><br><br>
<h3>enter years</h3>
<input type="text" name="yb" required><br><br>
<h3>enter interest</h3>
<input type="text" name="ib" required><br><br>
<input type="submit" name="og" value="submit"> 
</form>
    
</body>
</html>