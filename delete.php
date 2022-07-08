<?php
include "dbconn.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql    = "delete from emp where uid='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>
                        alert('Record Deleted Successfully..!');
                        window.location.href='view.php';
                        </script>";

    }
    else{
        die(mysqli_error($conn));
    }
}

?>