<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>average marks</title>
</head>
<body>
    
<?php
    if(isset($_POST["ob"]))
    {
        $math=$_POST["m"];
        $che=$_POST["c"];
        $com=$_POST["co"];
        $total;
        $avag;
        

        $total=$math+$che+$com;
        $avag=$total/300*100; 
        
        if(0<$avag || 100>$avag)
        {
            echo "aveage :".$avag;
        }
        else
        {
            echo "enter valid number";
    }

    }


?>

<form method="post">
<h3>enter the math mark</h3>
<input type="text" name="m" required><br><br>
<h3>enter the checmistry mark</h3>
<input type="text" name="c" required><br><br>
<h3>enter the computer mark</h3>
<input type="text" name="co" required><br><br>
<input type="submit" name="ob" value="submit"> 
</form>
</body>

</html>