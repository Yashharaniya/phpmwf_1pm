<?php 
// incapulation is  1 pareant so many child 
class A 
{
    public function display()
    {
        echo "jax"."<br>";
    }
}

class B extends A
{
    public function display1()
    {
        echo "yash"."<br>";
    }
}
class C extends B
{
    public function display3()
    {
        echo "yug"."<br>";
    }
    
}
$obj=new C;
$obj->display();
$obj->display1();
$obj->display3();


?>