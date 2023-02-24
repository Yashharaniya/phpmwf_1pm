<?php

//over loding
class A 
{
    public function test($a,$b)
    {

        echo $a+$b;

    }

} 
class B extends A
{

    public function test($a,$b,$c)
    {
        echo $a*$b*$c;
    }
}

$obj=new B;
$obj->test(10,20,30);
// method overloading  show always error
?>
<?php 
//overading
class A 
{
    public function test($a,$b,$c)
    {

        echo $a+$b+$c;

    }

} 
class B extends A
{

    public function test($a,$b,$c)
    {
        echo $a*$b*$c;
    }
}

$obj=new B;
$obj->test(10,20,30);

?>
?>