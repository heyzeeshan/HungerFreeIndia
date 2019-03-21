
<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `reslist` WHERE CONCAT(`id`, `resname`, `Phone Number`,Email, `Address`,`status`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `reslist`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "hungerfree");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!Doctype html>
    <head>
	
<link rel="stylesheet" href="css/style.css">
        <title>NGO Profile</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
    
            .navbar{
             overflow: hidden;
            display: block;
                height: 70px;
                margin-top: 10px;
        }
        a:active{
            color: black;
        }
        a:visited{
            color:black;
        }
        a:link{
            color: black;
        }
        a{
            text-align: center;
            padding: 10px 10px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: black;
        }
         .container {
            position: relative;
            width: 150px;
            margin-left: 120px;
            border-radius: 15px;
             margin-top: 20px;
        }

        .image {
            display: block;
            width: 150px;
            height: auto;
            border-radius: 15px;
        }

        .overlay {
            position: absolute;
            bottom: 100%;
            left: 0;
            right: 0;
            background-color: #5C6BC0;
            overflow: hidden;
            width: 100%;
            height:0;
            transition: .5s ease;
            border-radius: 15px;
        }

        .container:hover .overlay {
            bottom: 0;
            height: 100%;
            border-radius: 15px;
        }

        .text {
            white-space: nowrap; 
            color: white;
            font-size: 20px;
            position: absolute;
            overflow: hidden;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }    
        </style>
    </head>
    <body>
        <div style="width:100%; height: 350px; background-image: url(ngo.jpg); color: black; font-size: 50px; font-family: cursive">
        </div>
         <div style="width: 100%; height: 750px;">
        <div class="navbar" id="up1" style="font-size: 50px; padding-left: 50px; background-color: #9933cc; color: white; font-family: cursive; position: static;">
        <a style="color: white; text-decoration: none; font-size: 20px; float: right; position: absolute; top: 380px; left: 446px;" href="ngoprofile.php">Home</a>        
        <a style="color: white; text-decoration: none; font-size: 20px; float: right; position: absolute; top: 380px; left: 520px " href="showvol.php">Volunteer</a>    
        <a style="color: white; text-decoration: none; font-size: 20px; float: right; position: absolute; top: 380px; left: 635px;" href="ngoprofile.php">NGO</a>    
    </div>
        <div class="col-5" style="float:right;">
		<h2>NGO PROFILE</h2>
		<h3>Name:</h3>Seva Foundation<br/>
		<h3>Address:</h3>102/A wing,Chandresh OAsis, Geeta Nagar Phase-1, Titwala<br/>
		<h3>Email:</h3>seva@foundation.com<br/>
		<h3>Mobile:</h3>8169121346<br/>
		<h3>PinCode:</h3>401107<br/>
		</div>
			<div class="col-5" style="border: 1px solid black;">
			<form method="post" action="volunteer.php">
			 <span style="font-size: 30px; font-family: cursive; color:black;">
		
			<h1 align="center">Add Volunteer</h1><br/>
			   Enter Name : &nbsp;&nbsp;<input type="text" name="name"><br><br/>
			   Email :      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="mail"><br><br/>
			   Mob No :     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="tel" name="mob"><br><br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="b1"  onclick="volunteer.php"><br/>
			</span>
			</form>
			</div>
        </div>
		
		<hr>
		<div>
			<h1 align="center"class="main">List of Restaurants</h1><table>
			        
        <form action="ngolist.php" method="post">
            <input  style="height:44px; width:500px; margin-left:330px;" type="text" name="valueToSearch" placeholder="Value To Search">
            &nbsp;&nbsp;&nbsp;<input id="b3" type="submit" name="search" value="Filter"><br><br>
            <div class="col-4">
            <table style="margin-left:200px;" border="1" cellspacing="0" cellpadding="10">
                <tr style="background-color: #9933cc; color:white;">
                    <th>id</th>
                    <th>restuarant Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>status</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['resname'];?></td>
                    <td><?php echo $row['Phone Number'];?></td>
                    <td><?php echo $row['Email'];?></td>
                    <td><?php echo $row['Address'];?></td>
                    <td><a href="ngofood.php"><?php echo $row['status'];?></a></td>
                </tr>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
		
</div>
</body>
</html>

		