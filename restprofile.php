<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `ngolist` WHERE CONCAT(`id`, `NGOs`, `Phone Number`,Email, `Address`,`status`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `ngolist`";
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
        <title>Restaurant Profile</title>
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
        <div style="width:100%; height: 350px; background-image: url(restbanner.jpg); color: white; font-size: 50px; font-family: cursive">
        </div>
         <div style="width: 100%; height: 750px;">
        <div class="navbar" id="up1" style="font-size: 50px; padding-left: 50px; background-color: #9933cc; color: white; font-family: cursive; position: static;">
        <a style="color: white; text-decoration: none; font-size: 20px; float: right; position: absolute; top: 380px; left: 446px;" href="ngoprofile.php">Home</a>
        
        <a style="color: white; text-decoration: none; font-size: 20px; float: right; position: absolute; top: 380px; left: 520px " href="showngo.php">Requested NGO</a>
       
    </div>
        
			<hr>
			<div class="col-4" style="border: 1px solid black; margin-left:450px">
			<form method="post" action="volunteer.php">
			 <span style="font-size: 30px; font-family: cursive; color:black;">	
			Restaurant Profile</span>
			<div class="col-5">
		<h3>Name:</h3>Sitara Restaurant<br/>
		<h3>Address:</h3>102/A wing,Chandresh OAsis, Geeta Nagar Phase-1, Titwala<br/>
		<h3>Email:</h3>sitara@restaurant.com<br/>
		<h3>Mobile:</h3>8169121346<br/>
		<h3>PinCode:</h3>401107<br/>
		</div>
			</form>
			</div>
        </div>
		<hr>
			<h1 align="center"class="main">List of NGOs</h1><table>
			
       <form action="final.php" method="post">
            <input style="height:44px; width:500px; margin-left:300px;" type="text" name="valueToSearch" placeholder="Value To Search">
            &nbsp;&nbsp;&nbsp;<input id="b3" type="submit" name="search" value="Filter"><br><br>
            
            <table style="margin-left:100px;" border="1" cellspacing="0" cellpadding="10">
                <tr style="background-color: #9933cc; color:white;">
                     <th>id</th>
                    <th>NGOs Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>status</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['NGOs'];?></td>
                    <td><?php echo $row['Phone Number'];?></td>
                    <td><?php echo $row['Email'];?></td>
                    <td><?php echo $row['Address'];?></td>
                    <td><a href="food.php"><?php echo $row['status'];?></a></td>
                </tr>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
         </form>
        </div>
 </div>
</div>
</body>
</html>

		