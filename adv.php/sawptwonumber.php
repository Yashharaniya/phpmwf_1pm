<?php
if(isset($_POST["su"]))
{
    $a=$_POST["f"];
    $b=$_POST["s"];
    $temp;

    $a=$b;//10+20=30
    $temp=$b;//30-10=10
    $b=$temp;//30-10=20
    echo "sawp number is".$a."<br>".$b;
}

?>
 <form method="post">
        
        <h3>enter fust number</h3>
        <input type="text" name="f" required><br><br>
        <h3>enter second number</h3>
       <input type="text" name="s" required><br><br>
      
        <input type="submit" name="su" value="submit"> 
        </form>