<?php
require_once("modal.php/modal.php");
class b extends a
{
    public function __construct()
    {
        parent :: __construct();
        if(isset($_POST["btn"]))
        {
            $fname=$_POST["fnm"];
            $lname=$_POST["lnm"];
            $email=$_POST["email"];
            $phone=$_POST["phone"];
            $course=$_POST["cnm"];

            $data=array("first_name"=>$fname,"last_name"=>$lname,"email"=>$email,"phone_number"=>$phone,"course_id"=>$course,);
            $chk=$this->insertalldata($data,'data_tbl');
            if($chk)
            {
                echo "<script>
                alert('Thanks for adding students data')
                window.location='./';
                </script>";
            }



        }
        $shw=$this->showdata('data_tbl');
        $jax=$this->showdata('course_tbl');

         //    join and show all students list in show students data
            $join=$this->joindata('data_tbl','course_tbl','course_id');




        if(isset($_SERVER["PATH_INFO"]))
        {
            switch ($_SERVER["PATH_INFO"])
            {
                case '/' :
            require_once("index.php");
            require_once("navbar.php");
        

        break ;
        
        
        default:


       
        
        require_once("index.php");
        
        break;
        
        
            }
            
            }
    }

    



}

$obj= new b;

?>
