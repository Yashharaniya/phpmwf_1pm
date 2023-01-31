<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area of circle</title>
</head>
<body>
    <?php
    if(isset($_POST["sum"]))
    {
        $a=$_POST["are"];
        $r;
        $r=3.14*pow($a,2);
        echo "area of circle is=".$r;

    }


    ?>
    <form method="post">
    <h3>enter area of circle</h3>
<input type="text" name="are" required><br><br>
<input type="submit" name="sum" value="submit"> 
</form>
</body>
</html>
