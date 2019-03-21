<?php

//for data connetivity
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hungerfree";

echo "dsd";
// Create connection
$conn = new mysqli_connect($servername, $username, $password,$dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql = "select email,password from ngo where email='$email' and password='$pass'";  
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["email"] ;
    }
} else {
    echo "incorrect userid or password Please Try Again";
}
$conn->close();
?>

