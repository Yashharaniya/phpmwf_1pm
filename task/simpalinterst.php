<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simpal intrest</title>
</head>
<body>
    <?php
    if(isset($_POST["su"]))
    { 
    $p=$_POST["m"];
    $t=$_POST["y"];
    $r=$_POST["i"];
    $a;
    $a=($p*$t*$r)/100;

    echo "your interest is=".$a;
    }

    ?>
    <form method="post">
<h3>enter ammount</h3>
<input type="text" name="m" required><br><br>
<h3>enter years</h3>
<input type="text" name="y" required><br><br>
<h3>enter interest</h3>
<input type="text" name="i" required><br><br>
<input type="submit" name="su" value="submit"> 
</form>
    
    
</body>
</html>