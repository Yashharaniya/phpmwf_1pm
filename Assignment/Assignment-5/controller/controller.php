<?php 
require_once("model/model.php");
class Controller extends Model
{
    public function __construct()
    {
        //logic : WAP to print your name take input from users
        parent:: __construct();
        // set buttons
        // if(isset($_POST["sub"]))
        // {
        //     $nm=$_POST["nm"];
        //     echo "<h3 align='center' style='color:green'>Your name is : $nm</h3>";
        // }

        // load templates routing 

        if($_SERVER["PATH_INFO"])
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    require_once("login.php");
                    require_once("register.php");
                    break;

                default :
                  
                require_once("index.php");
                require_once("header.php");
                require_once("404.php");
                require_once("footer.php");    
            }
        }
         

    }
}
$obj=new Controller;

?>