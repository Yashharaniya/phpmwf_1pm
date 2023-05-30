<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Claymorphism Login Form </title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #2f363e;
    }

    .container {
      position: relative;
      width: 350px;
      min-height: 500px;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #7c06b3;
      box-shadow: 25px 25px 75px rgba(0, 0, 0, 0.25),
        10px 10px 70px rgba(0, 0, 0, 0.25),
        inset 5px 5px 10px rgba(0, 0, 0, 0.5),
        inset 5px 5px 20px rgba(255, 255, 255, 0.2),
        inset -5px -5px 15px rgba(0, 0, 0, 0.75);
      border-radius: 10px;
      padding: 50px;
    }

    .container:hover {
      border: 2px solid #FF5f00;
    }

    form {
      position: relative;
      width: 100%;
    }

    .container h3 {
      color: #fff;
      font-weight: 600;
      font-size: 2em;
      width: 100%;
      text-align: center;
      margin-bottom: 30px;
      letter-spacing: 2px;
      /* text-transform: uppercase; */
    }

    .inputBox {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .inputBox span {
      display: inline-block;
      color: #fff;
      margin-bottom: 10px;
      /* text-transform: uppercase; */
      letter-spacing: 1px;
      font-size: 0.75em;
      border-left: 4px solid #fff;
      padding-left: 4px;
      line-height: 1em;
    }

    .inputBox .box {
      display: flex;
    }

    .inputBox .box .icon {
      position: relative;
      min-width: 40px;
      height: 40px;
      background: #FF5f00;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      margin-right: 10px;
      color: #fff;
      font-size: 1.15em;
      box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.25),
        inset 2px 2px 5px rgba(255, 255, 255, 0.25),
        inset -3px -3px 5px rgba(0, 0, 0, 0.5);
    }

    .inputBox .box input {
      position: relative;
      width: 100%;
      border: none;
      outline: none;
      padding: 10px 20px;
      border-radius: 10px;
      /* text-transform: uppercase; */
      letter-spacing: 1px;
      font-size: 0.85em;
      box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.25),
        inset 2px 2px 5px rgba(0, 0, 0, 0.35),
        inset -3px -3px 5px rgba(0, 0, 0, 0.5);
    }

    .inputBox .box input[type='submit'] {
      background: #FF5f00;
      box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.25),
        inset 2px 2px 5px rgba(255, 255, 255, 0.25),
        inset -3px -3px 5px rgba(0, 0, 0, 0.5);
      color: #fff;
      cursor: pointer;
      /* text-transform: uppercase; */
      letter-spacing: 2px;
      font-weight: 600;
      margin-top: 10px;
    }

    .inputBox .box input[type='submit']:hover {
      filter: brightness(1.1);
    }

    label {
      color: #fff;
      /* text-transform: uppercase; */
      letter-spacing: 1px;
      font-size: 0.85em;
      display: flex;
      align-items: center;
    }

    label input {
      margin-right: 5px;
    }

    .forgot {
      color: #fff;
      /* text-transform: uppercase; */
      letter-spacing: 1px;
      font-size: 0.85em;
      text-decoration: none;
    }

    .reg {
      color: #FF5f00;

      text-decoration: none;
    }

    h5 {
      color: #fff;

    }
  </style>
  <div class="container">
    <form method="post">
      <h3>Log in</h3>
      <div class="inputBox">
        <span>Username</span>
        <div class="box">
          <div class="icon"><ion-icon name="person"></ion-icon></div>
          <input type="text" name="email" required>
        </div>
      </div>
      <div class="inputBox">
        <span>Password</span>
        <div class="box">
          <div class="icon"><ion-icon name="lock-closed"></ion-icon></div>
          <input type="password" name="pass" required>
        </div>
      </div>
      <label>
        <input type="checkbox"> Remember me
      </label>
      <div class="inputBox">
        <div class="box">
          <input type="submit" value="Login" name="log">
        </div>
      </div>
      <a href="<?php $mainurl; ?>forgot" class="forgot">Forgot password?</a>
      <br><br>
      <h5>Don't have an a ccount? &nbsp;&nbsp;<a href="<?php $mainurl; ?>register" class="reg">Register</a></h5>

    </form>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>