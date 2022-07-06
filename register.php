<?php
include "dbconn.php";
if(isset($_POST['register'])){
  $username = $_POST['name'];
  $useremail = $_POST['mail'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $type = $_POST['type'];


  $sql = "SELECT * FROM `emp` WHERE `umail`='$useremail'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // while ($row = mysqli_fetch_assoc($result)) {
    //   $mail = $row['umail'];
    echo '<script>alert("email already exist")</script>';
  }elseif ($password == $cpassword) {
    $sql = "INSERT INTO `emp` (`uname`,`umail`, `upassword`, `utype`)
    VALUES ('$username', '$useremail', '$password', '$type')";
    $result = mysqli_query ($conn, $sql);
    if ($result==true) {
      echo "<script>
                        alert('Registred Successfully..!');
                        window.location.href='login.php';
                        </script>";
    }
  } else {
     echo '<script>alert("password does not match")</script>';
  }
}
?>





<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Registration</title>
    <style>
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
      <h1 class="text-center">Registration</h1>
      <form method="post">
      <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
          </div>
        <div class="form-group col-md-6">
            <label for="mail">Email</label>
            <input type="text" class="form-control" id="mail" name="mail" placeholder="Enter your email">
          </div>
        <div class="form-group col-md-6">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
        </div>
        <div class="form-group col-md-6">
          <label for="cpassword">Confirm Password</label>
          <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Make sure to enter same password" required>
        </div>
        <div class="form-group col-md-6">
          <label for="type"> Select Employee Type </label>
          <select class="form-control" id="type" name="type">
            <option>HR</option>
            <option>Team Lead</option>
            <option>Employee</option>
          </select>
        </div>
        
        <button type="submit" name="register" class="btn btn-primary">Signup
        </button>
      </form>
    </div>
  </body>
</html>