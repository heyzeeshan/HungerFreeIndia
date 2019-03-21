<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hungerfree";

$name=$_POST['name'];
$mail=$_POST['mail'];
$mob=$_POST['mob'];
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

$sql = "INSERT INTO volunteer
VALUES('','$name','$mail','$mob')";

if ($conn->query($sql) === TRUE) {

echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: showvol.php");
   exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>