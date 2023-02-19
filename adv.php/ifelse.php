<?php
 if(isset($_POST["sub"]))
{ 
class a

   
    {
        public function display()
        { 
        $num=$_POST["n1"];

        if($num==0 %2)
        {
            echo "number is odd".$num."<br>";
        }
        else
        {
            echo "number is even".$num."<br>";
        }
    }

    }
}
$obj= new a;
$obj->display();

?>


<form method="post">
    
    <h3>chack your number obb and even</h3>   
     <br><br>
    Enter number:
    <input type="text" name="n1" placeholder="N1 *" required>
    <br><br>
   
     <input type="submit" name="sub" value="Submit">
</form>


