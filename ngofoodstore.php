<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hungerfree";

$name=$_POST['Name'];
$preference=$_POST['pref'];
$count=$_POST['count'];
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

$sql = "INSERT INTO foodngo
VALUES('','$name','$preference','$count')";

if ($conn->query($sql) === TRUE) {

echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: ngoprofile.php");
   exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>