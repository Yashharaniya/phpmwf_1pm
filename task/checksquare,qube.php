<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check square, qube</title>
</head>
<body>
    <?php
    if(isset($_POST["svs"]))
    {
        $numb=$_POST["num"];
        $square;
        $cube;
        
        $square=$numb*$numb;
        $cube=$numb*$numb*$numb;
        
        echo "Square of :".$square."<br>";
        echo "cube of :".$cube."<br>";
    }
    ?>

<form method="post">
    <h3>enter the number</h3> <br>
    <input type="text" name="num" required>
    <br> <br>
    <input type="submit" name="svs" value="submit"> 

    </form>
</body>
</html>