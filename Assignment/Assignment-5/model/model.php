<?php 
class Model 
{
    public $connection="";
    public function __construct()
    {
        // database connections
        //exception handeling
        try 
        {
        $this->connection=new mysqli("localhost","root","","mvcmyapp");
        // echo "connection successfully";
        }
        catch(Exception $e)
        {
            die(mysqli_error());
        }
    }
}

?>