<html>
<head>
    <title>form</title>
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
	
	if (name.value == "")								 
	{
		alert("Please enter your name.");
		return false;
	}

	else{
        alert("Thanks For Helping us :-)");
        window.open("ngoprofile.php");
    }
	return true;
}


    </script>
</head>
    <body class="bg">
<div style="width: 38%; height: 600px; box-shadow: 5px 10px 12px grey; font-family: cursive; border: 1px solid black; margin-left: 340px; background-color: white; margin-top: 50px;">
            <div style="height: 50px; background-color: #9933cc; color: white; font-size: 30px; text-align: center; font-family: cursive;">
               Food form
            </div>
            
             <form name="RegForm" action="foodstore.php" style="text-align: left; padding-left: 90px;"  onsubmit="return register()" method="post"> 
	

	<br><p>Restaurant Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Name" placeholder="ENTER" style="text-align: center; height: 40px;"> </p> 
	
	<br>What type of food?&nbsp;&nbsp;&nbsp;&nbsp;<select name="type" style="height: 40px; width: 173px;">
			<option>Veg</option>
			<option>Non veg</option>
			<option>Both</option>
		</select></br>
		<br><p>Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="quantity" placeholder="00" style="text-align: center; height: 40px;"></p>
	<br><br><p><input id="b1" type="submit" value="Submit" name="Submit">	 
		<input id="b1" type="reset" value="Reset" name="Reset"> 
	</p>
</form>
      </div>
    </body>
</html>