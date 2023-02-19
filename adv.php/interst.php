<?php



if(isset($_POST["su"]))
{
    class a  
    {
        public function display()
        {

            $p=$_POST["m"];
            $t=$_POST["y"];
            $r=$_POST["i"];
            
            $a=($p*$t*$r)/100;
            echo "your interest is=".$a."<br>" ;
        }

    }

    class b extends a  
    {
        public function flex()
        {
            $p=$_POST["ab"];
            $t=$_POST["yb"];
            $r=$_POST["ib"];
            
            
            $ci=$p*pow((1+$r/100),$t)-$p;
            
            echo "your interest is=".$ci;
        }
    }


    $obj=new b;
$obj->display();
$obj->flex();

}


?>


<form method="post">
    <h3>find  compound interest</h3>
    <h3>enter ammount</h3>
    <input type="text" name="ab" required><br><br>
    <h3>enter years</h3>
    <input type="text" name="yb" required><br><br>
    <h3>enter interest</h3>
    <input type="text" name="ib" required><br><br>


    <h3>find  simpal interest</h3>

   
        <h3>enter ammount</h3>
        <input type="text" name="m" required><br><br>
        <h3>enter years</h3>
        <input type="text" name="y" required><br><br>
        <h3>enter interest</h3>
        <input type="text" name="i" required><br><br>
        <input type="submit" name="su" value="submit"> 
    </form>