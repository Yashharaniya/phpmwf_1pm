
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swap two numbers</title>
</head>
<body>
    <?php
    if(isset($_POST["yug"]))
    {
      $a=$_POST["1"];
      $b=$_POST["2"];

      echo "Before swap"."<br>a is &nbsp" .$a." &nbspb is ".$b."<br>";
      
      $a=$a+$b;//10+20=30
      $b=$a-$b;//30-20=10
      $a=$a-$b;//30-10=20

      echo "after swep"."<br>a is &nbsp" .$a." &nbspb is ".$b."<br>";
    }    

    ?>
<form method="post">
<h3>1 number</h3>
<input type="text" name="1" required><br><br>
<h3>2 number</h3>
<input type="text" name="2" required><br><br>
<input type="submit" name="yug" value="submit">    
</form>

</body>
</html>
