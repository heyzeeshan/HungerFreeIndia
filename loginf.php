<?php
include("utilitis/config.php");

if(isset($_POST['submit'])){
    
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    // Check connection
    //echo $username;
    //echo $password;

    $query = "select * from user where username = '$username' and password = '$password'";
    
    $result = mysqli_query($conn,$query);
    $result1 = mysqli_fetch_assoc($result);

    if($result1){

        
        $_SESSION["user_id"] = $result1["user_id"];
        $_SESSION["user_role"] = $result1["role"];

         print_r($_SESSION["user_id"]);
        // print_r($_SESSION["user_role"]);
        // die;
        if($_SESSION["user_role"] == "user" ){
        	header("Location: index.php");
        }
        else{
        	header("Location:adminpanel.php");
        }


        // if($_SESSION["user_role"] == "admin" || $_SESSION["user_role"] ="superadmin"){
        // 	print_r("Inside the user and superadmin------------");
        // 	print_r($_SESSION["user_id"]);
        //     print_r($_SESSION["user_role"]);
        // die;
        // 	header("Location:adminpanel.php");
        // }
        // else if($_SESSION["user_role"] == "user" ){
        // 	header("Location: index.php");
        // }


    }
    else{
			$message = "Username and/or Password incorrect.\\nTry again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
		  
        //header("Location:login.php");
        
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form class="form-2" name="myform" action = "" method = "POST">
	<h1><center><span class="log-in"><a href="login.php" >Log in</a></span> or <span class="sign-up"><a href="signup.php" >sign up</a></span></center></h1>
					<p class="float">
						<label for="login"><i class="icon-user"></i>Username</label>
						<input type="text" placeholder="Username or email" name="username" id="emailadd" required>
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>Password</label>
						<input type="password" name="password" placeholder="Your Password" id="password" class="showpassword" required>
					</p>
				</form>
</body>
</html>
