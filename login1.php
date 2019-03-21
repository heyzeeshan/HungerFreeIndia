<?php
if ($conn = mysqli_connect('localhost','root','','hungerfree'))
{
		echo "zee";
		// print_r($conn);
		// exit(); 

	if (isset($_POST['submit'])) 
	{
		echo".....";
		// echo "<pre>";
		// print_r("hii");
		// exit();
		echo "......";
		$email = $_POST['Email'];
		$password = $_POST['Pass'];
	echo "dddd";

		echo $email;
		echo $password;
		$query = "SELECT * FROM ngo WHERE email ='$email' and password='$password'";
		echo $query;

		$result = mysqli_query($conn,$query);
		if (mysqli_num_rows($result) > 0 )
		{
			//while ($row = mysqli_fetch_assoc($result)) {
			// echo "Email: " .$row['$email']. " Password " .$row['$password']. "<br>";
			//	echo "hello panda";
			header("Location: finalngo.html");
   			exit;
		}

	}
	else
	{
		//echo "user id or password is incorrect";
		echo "invalid";
   		exit;
	}
	mysqli_close($conn);

}
else
{
	echo "not connected";
}
?>
