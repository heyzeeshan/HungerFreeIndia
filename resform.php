<html>
<head>
    <title>Registration form</title>
    <style>
        .pass1{
            height: 50px;
            width: 200px;
            border-radius: 4px;
            border:2px solid grey; 
        }
        #b1{
            width: 80px;
            height: 40px;
            border: 0px;
            color: white;
            background-color: cornflowerblue;
        }
        #b1:hover{
            background-color: black;
            color: white;
        }
        .bg{
            background: linear-gradient(grey,white)
        }
    </style>
    <script type="text/javascript">
      function register()								 
{
	var name = document.forms["RegForm"]["Name"];			 
	var email = document.forms["RegForm"]["Email"]; 
	var phone = document.forms["RegForm"]["Telephone"]; 
	var what = document.forms["RegForm"]["Subject"]; 
	var password = document.forms["RegForm"]["Password"]; 
	var address = document.forms["RegForm"]["Address"]; 

	if (name.value == "")								 
	{
		alert("Please enter your name.");
		return false;
	}

	if (address.value == "")							 
	{
		alert("Please enter your address.");
		return false;
	}
	
	if (email.value == "")								 
	{
		alert("Please enter a valid e-mail address.");
		return false;
	}


	if (email.value.indexOf(".", 0) < 0)			 
	{
		alert("Please enter a valid e-mail address.");
        return false;
	}

	

	if (password.value == "")					 
	{
		alert("Please enter your password");
		return false;
	}

	if (what.selectedIndex < 0)				 
	{
		alert("Please Select your course.");
		return false;
	}
    else{
        alert("Thanks For Registration!!, Successfull");
        window.open("homepage.php");
    }
	return true;
}


    </script>
</head>
    <body class="bg">
<div style="width: 38%; height: 700px; box-shadow: 5px 10px 12px grey; font-family: cursive; border: 1px solid black; margin-left: 340px; background-color: white; margin-top: 50px;">
            <div style="height: 50px; background-color: cornflowerblue; color: white; font-size: 30px; text-align: center; font-family: cursive;">
              Indiviual Registration Form
            </div>
            
             <form name="RegForm" action="foodstore.php" style="text-align: left; padding-left: 90px;"  onsubmit="return register()" method="post"> 
	

	<p>Food Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="type" placeholder="ENTER" style="text-align: center; height: 40px;"> </p> 
	<p>Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Quantity" placeholder="ENTER" style="text-align: center; height: 40px;"> </p>
	
	<p><input id="b1" type="submit" value="Submit" name="Submit">	 
		<input id="b1" type="reset" value="Reset" name="Reset"> 
	</p>
</form>
      </div>
    </body>
</html>