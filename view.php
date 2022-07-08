
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  >
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Data</title>
    
  </head>
  <body>
  <div class="topnav">
        <a class="nav-link" href="https://sankeysolutions.com/#/innovation-lab"><b><u>Sankey Solutions</b></u> <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="view.php">Veiw details</a>
        <a class="nav-link" href="logout.php">Logout</a>
      </div>
      <br><br><br>

      <h2> Employee Data </h2>
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">User Type</th>
                </tr>
            </thead>
            <tbody>
            <?php           
                session_start();
                include "dbconn.php";
                 $sql = "SELECT * FROM `emp`";
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) {

                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['uid'];
                        $name = $row['uname'];
                        $email = $row['umail'];
                        $password = $row['upassword'];
                        $type = $row['utype'];
        
                        echo'<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$password.'</td>
                        <td>'.$type.'</td>   
                        <td>
                          <button class="btn btn-danger">
                            <a href="delete.php? deleteid='.$id.'" class ="text-light">Delete</a>
                          </button>
                        </td>      
                        </tr>';
                    }
                  }
              
              ?>
               
              
            </tbody>
        </table>
    </div>
  </body>
</html>
