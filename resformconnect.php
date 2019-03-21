<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hungerfree";

$type=$_POST['type'];
$Quantity=$_POST['Quantity'];
$PHPtext = "Your PHP alert!";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO resform
VALUES('$type','$Quantity')";

if ($conn->query($sql) === TRUE) {
	
     header("Location: final.php");
   exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>


</body>
</html>