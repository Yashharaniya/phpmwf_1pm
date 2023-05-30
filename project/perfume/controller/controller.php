<?php 
require_once("model/model.php");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Controller extends Model
{   
    public function __construct()
    {
   
        parent:: __construct();
        //maling
        if(isset($_POST["s"]))
{
    require_once("PHPMailer/PHPMailer.php");
    require_once("PHPMailer/SMTP.php");
require_once("PHPMailer/Exception.php");


$fn=$_POST["first"];
$ln=$_POST["l"];
$bod=$_POST["b"];
$gm=$_POST["g"];
$pa=$_POST["p"];
    

    $mail = new PHPMailer(true);


try {
    //Server settings
    $mail->SMTPDebug =false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'yashmanstar@gmail.com';                     //SMTP username
    $mail->Password   = 'mdhyfmnjkpqszora';                               //SMTP password
    $mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST["g"],'mail sending');
    $mail->addAddress('yashmanstar@gmail.com', 'contanct us mail sending');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'contact with us email sending data';
    $mail->Body    =  "<p> first name is</p>" .$fn."<br>". "<p> last name is</p>" .$ln."<br>". "<p> bod is</p>" .$bod."<br>". "<p> costmer gmail is</p>" .$gm."<br>"."<p> password is</p>" .$pa;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>  alert('Thanks for contect with us our one of admin will contect with contact with you soon!') window.location='mailsending.php';
    </script>";
}

catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    
}
}


        // register user
        
        if(isset($_POST["sss"]))
        {
            $fname=$_POST["fl"];
            $lname=$_POST["user"];
            $email=$_POST["email"];
            $phone=$_POST["p"];
            $pass=$_POST["cp"];

            $data=array("full_name"=>$fname,"Username"=>$lname,"email"=>$email,"Phone_Number"=>$phone,"password"=>$pass,);
            $chk=$this->insertalldata('loginuser',$data);
            if($chk)
            {
                echo "<script>
                alert('Thanks for register ')
                window.location='';
                </script>";
            }
        }


        //logic for login page
        if(isset($_POST["log"]))
        { 
            
                $em=$_POST["email"];
                $pass=$_POST["pass"];
                $chk=$this->loginuser('loginuser', $em, $pass);
                if($chk)
                {
                 
                    $_SESSION["email"]=$_POST["email"];
        echo "<script>
        alert('You are logged in Successfully')
        window.location='prodect';
        </script>";
                //   echo "<h3 align='center' style='color:green'>You are logged in successfully</h3>";
                //   header('refresh:2,'/'');
                 
                }
                else
                {
                  echo "<script>
                  alert('Your email and password are incorect try again')
                  window.location='login';
                  </script>";


                  
                }  
              
        }
    }
}
      
        if (isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("fotter.php");
                    break;

                    case '/login':                     
                        require_once("log.php");
                        break;
                    
                    case '/register':                     
                        require_once("Register.php");
                        break;

                    case '/forgot':                     
                        require_once("forgot.php");
                        break;
                    case '/contact':
                        require_once("navbar.php");
                        require_once("con.php");
                        require_once("fotter.php");
                        break;
                    case '/prodect':
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("product.php");
                        require_once("fotter.php");
                        break;
                    case '/about':
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("about.php");
                        require_once("fotter.php");
                        break;
                    case '/home':
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("slider.php");
                        require_once("content.php");
                        require_once("fotter.php");
                        break;
                                

                    default :
                    
                    require_once("index.php");
                    require_once("navbar.php");
                    // require_once("404.php");
                    require_once("fotter.php");    
            }
        }
         
    
    


$obj=new Controller;
?>