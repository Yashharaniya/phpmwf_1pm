<?php


class a
{
    public $num = "yash";

    public function display()
    {
        
        echo "hii i am ".$this->num."<br>";
    }
}

class b extends a
{
    public function fex()
    {
        echo "hey milen"."<br>".$this->num;
    }
}
$obj =new b;
$obj->display();
$obj->fex();
?>