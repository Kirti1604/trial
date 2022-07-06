<?php
session_start();
include "dbconn.php";
if(isset($_POST['login'])){
  echo "1";
              $useremail = $_POST['email'];
              $password = $_POST['password'];
              $sql    = "select * from emp where umail='$useremail 'and upassword='$password'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                echo "ok";
                $_SESSION['uid'] =$row['uid'];;
                header("Location: home.php");
                echo "ok";
              }
}

echo "3";
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" type="text/css">
  <title>Login</title>  <style>
    .container {
      width: 50%;
      padding: 50px;
      background-color: #0FB09F;
    }

    form {
      margin-left: 100px;
      width: 150%;
    }

    button {
      padding: 15px;
      margin: 10px 0px;
      width: 20%;
      margin-left: 100px;
    }
  </style>
</head>

<body>
    <div class="topnav">
        <a class="nav-link" href="https://sankeysolutions.com/#/innovation-lab"><b><u>Sankey Solutions</b></u> <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="register.php">Registration</a>
      </div>
        <br><br><br>
  <div class="container my-4">
    <h1 class="text-center">LOG IN</h1>
    <form method="post">
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
      </div>
      <div class="form-group col-md-6">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
      </div>
      <button type="submit" name="login" class="btn btn-primary">
      <a href="login.php? loginid='.$userid.'" class ="text-light">Login</a>  
      </button>
    </form>
  </div>


</body>

</html>