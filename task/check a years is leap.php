<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check a years is leap yes or not</title>
</head>
<body>
    <?php

    if(isset($_POST["y"]))
    {
        $year=$_POST["year"];
        
            if($year % 4 == 0)
            {
                echo "year is leap".$year;
            }
            else
            {
                echo "year is not leap".$year;
            }
    }
    ?>

<form method="post">
<h3>year</h3>
<input type="text" name="year" required><br><br>
<input type="submit" name="y" value="submit"> 
</form>

</body>
</html>