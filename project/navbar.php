<?php  
$mainurl="http://localhost/php/practies/pufum/";
$baseurl="http://localhost/php/practies/pufum/assets/";

?>

<!DOCTYPE html>
<html>

<head>
  <title>Perfume Website</title>
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Add Bootstrap JS -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    /* Add custom CSS here */
    body {
      font-family: sans-serif;
      background-color: #F5F5F5;
      display: block;
      overflow-x: hidden;
    }

    .jumbotron {
      background-image: url('https://cdn.shopify.com/s/files/1/1036/0119/files/Top-of-the-World_1_1000x.jpg?v=1664565184');
      height: 600px;
      background-position: center;
      background-size: cover;
      text-align: center;
      color: white;
      padding: 200px 0;
    }

    h1 {
      font-size: 60px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    p {
      font-size: 24px;
      margin-bottom: 30px;
    }

    .container-fluid {
      height: 80px;
      position: sticky !important;
    }

    span {
      margin: 3px;
      position: sticky !important;
    }

    .navbar-brand {
      margin-right: 80%;



    }

    .icom {
      color: #F5F5F5;
    }

    .collapse i {
      color: #F5F5F5;
    }

    .add {
      background-color: red;
    }

    .navbar {
      position: sticky !important;
      top: 0;


    }

    .card {

      z-index: -5 !important;
    }

   /* sh */
   *{
    margin: 0;
    padding: 0;
}

.searchBox {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    display: flex;
    justify-content: center;
    align-items: center;
}

.searchBox input{
    background-color: rgb(48,168,220);
    border: none;
    outline: none;
    width: 0;
    padding: 0; 
    opacity: 0;
    border-radius: 40px;
    line-height: 40px;
    font-size: 18px;
    color: #fff;
    transition: all 1s;
    margin-left: 540px;
}

.searchBox input::placeholder {
    color: rgba(255,255,255,.5);
    font-weight: 400;
}

.searchBox i {
    /* background-color: rgb(48,168,220); */
    width: 40px;
    height: 40px;
    
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    font-size: 20px;
    cursor: pointer;
    transition: all .5s;
    margin-left: 800px;
    position: fixed;
}

.searchBox:hover input{
    width: 240px;
    opacity: 1;
    padding: 10px 20px;
}

.searchBox:hover i{
    color: #fff;
}


    .icoo {
      display: grid;
      place-items: center;
      width: 25px;
      height: 25px;
      background: none;
      color: #f9f9f9;
      border-radius: inherit;
      font-size: 20px;
      pointer-events: none;
    }

    .hoo {
      background: none;
      color: #f9f9f9;
      font-size: 20px;
      width: 25px;
      height: 25px;

    }

    .loogo {
      margin: 0%;
      padding: 0%;
      height: 100px;
      width: 100px;
    }

    .navbar-toggler {
    color: #F5F5F5;

    
    
    
}




  </style>
</head>

<body>
  <!-- top -->

  <nav class="navbar navbar-expand-lg bg-dark navbar-dark nave topnav" id="myTopnav">
    <div class="container-fluid top navebar">
      <img src="img/per-removebg-preview.png" class="loogo" alt="1">&nbsp;
      <a class="navbar-brand" href="#"> Yash Perfume</a>

    </div>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
      <div class="wrapper">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<div class="searchBox">
        <input type="search" placeholder="Search">
        <i class="fa fa-search" style="margin-right: 08%;"></i>
    </div>
</div>
<?php
if(!isset($_SESSION["login_id"]))
{
  ?>
<a href="<?php echo $mainurl;?>login" class="nav-link" style="margin-left: 8%;"> <i class="bi bi-person"></i></a>

   <?php
}
else
{ 
  ?>
  <a href="<?php echo $mainurl;?>?lgout" class="hoo"><i class="bi bi-power"></i></a>

        
  <?php
}
?>
<a href="<?php echo $mainurl;?>cart" class="nav-link" style="margin-left: -04%;"><i class="bi bi-bag"></i></a>&nbsp;
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php $mainurl;?>home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php $mainurl;?>prodect">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php $mainurl;?>about">About</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php $mainurl;?>contact">Contact</a>
          </li>


          

       
       
    </div>
  </nav>
</body>

</html>