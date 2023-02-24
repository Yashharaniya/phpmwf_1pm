<?php 
// incapulation 
trait A 
{
    public function display()
    {
        echo "jax"."<br>";
    }
}

trait B 
{
    public function display1()
    {
        echo "yash"."<br>";
    }
}
class C 
{
         use A;
         use B;
    
}
$obj=new C;
$obj->display();
$obj->display1();
?>