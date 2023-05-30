<?php
class a
{
    public $connection="";
    public function __construct()
    {
       try
       {
            $this->connection=new mysqli("localhost","root","","mvccrud");
            // echo "successfully ";

       } 
       catch(Exception $e) 
       {
            die(mysqli_error($this->connection));
       }
    }
    // insert all Data
    public function insertalldata($data,$table)
    {

       $col=array_keys($data);
       $col1=implode(",",$col);

       $value=array_values($data);
       $value1=implode("','" ,$value);

       $insert="insert into $table($col1) value('$value1')";
       $exe=mysqli_query($this->connection,$insert);
       return $exe;

              
    }
    //fetch all data
    public function showdata($table)
    {
     $sel="select * from $table";
     $exe=mysqli_query($this->connection,$sel);
     while ($fetch=mysqli_fetch_array($exe))
     {
         $arr[]=$fetch;

     }
     return $arr;
    }
     //join the table
      
     public function joindata($table,$table1,$where)
     {
       $select="select * from $table join $table1 on $where"; 
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        { 
            $arr[]=$fetch;
        }
        return $arr;
     }

}
?>