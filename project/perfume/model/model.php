<?php
class Model
{
    
    public $connection = "";
    public function __construct()
    {
        // database connections
        //exception handeling
        // session_start();
        try
        { 
            $this->connection = new mysqli("localhost", "root", "", "perfume");
            // echo "connection successfully";
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->connection));
        }
    }
    
    //login fanthion
    public function loginuser($table,$em,$pass)
    {
        $select = "select * from $table where email='$em' and password='$pass'";
        $exe = mysqli_query($this->connection, $select);
        $fetch = mysqli_fetch_array($exe);
        $num_row = mysqli_num_rows($exe);
        if ($num_row==1) 
        
        {
            $_SESSION["login_id"]=$fetch["login_id"];
            $_SESSION["email"]=$fetch["email"];
            return true;
        } else {
            return false;
        }
    }
    // create a member function for select count total of added in cart by customer
    public function selectcount($table,$column,$column1,$id)
    {
        $select="select count($column) as total from $table where $column1='$id'";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    //insert all

// insert all Data
public function insertalldata($table,$data)
{

   $col=array_keys($data);
   $col1=implode(",",$col);

   $value=array_values($data);
   $value1=implode("','" ,$value);

  $insert="insert into $table($col1) value('$value1')";
   $exe=mysqli_query($this->connection,$insert);
   return $exe;

          
}
//logout

}

?>
