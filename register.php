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
        <a class="nav-link" href=""><b><u>Sankey Solutions</b></u> <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="register.php">Registration</a>
      </div>
        <br><br><br>
    <div class="container my-4">
      <h1 class="text-center">Registration</h1>
      <form method="post">
        <div class="form-group col-md-6">
            <label for="umail">Email</label>
            <input type="text" class="form-control" id="umail" name="umail" placeholder="Enter your email">
          </div>
        <div class="form-group col-md-6">
          <label for="upassword">Password</label>
          <input type="password" class="form-control" id="upassword" name="upassword" placeholder="Enter Password" required>
        </div>
        <div class="form-group col-md-6">
          <label for="ucpassword">Confirm Password</label>
          <input type="password" class="form-control" id="ucpassword" name="ucpassword" placeholder="Make sure to enter same password" required>
        </div>
        <div class="form-group col-md-6">
          <label for="utype"> Select Employee Type </label>
          <select class="form-control" id="utype" name="utype">
            <option>HR</option>
            <option>Team Lead</option>
            <option>Employee</option>
          </select>
        </div>
        
        <button type="submit" name="techsignup" class="btn btn-primary">Signup</button>
      </form>
    </div>
  </body>
</html>