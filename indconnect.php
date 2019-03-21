<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hungerfree";

$name=$_POST['Name'];
$address=$_POST['Address'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$phoneno=$_POST['Telephone'];
$adhaar=$_POST['adharcard'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO indiviual
VALUES('','$name','$address','$email','$pass',$phoneno,$adhaar,'$city',$pincode)";

if ($conn->query($sql) === TRUE) {
     header("Location: finalindiviual.html");
   exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>