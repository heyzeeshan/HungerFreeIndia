<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hungerfree";

$name=$_POST['Name'];
$type=$_POST['type'];
$quantity=$_POST['quantity'];
$message = "wrong answer";
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO food
VALUES('','$name','$type','$quantity')";

if ($conn->query($sql) === TRUE) {


   header("Location: ngoprofile.php");
   exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>