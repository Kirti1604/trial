<?php
$servername = "localhost";

$username = "root";

$password = "";

$dbname = "employee";

$conn = new mysqli($servername, $username, $password, $dbname);
//$conn->autocommit(false);
if ($conn == TRUE) {
    echo "db connected";
} else {
    echo "not ok";
}