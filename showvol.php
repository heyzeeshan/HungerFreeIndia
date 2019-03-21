<!Doctype html>
    <head>
        <title>volunteer</title>
		<link rel="stylesheet" href="css/style.css">

        <style>
            .navbar{
             overflow: hidden;
            display: block;
                height: 70px;
                margin-top: 10px;
				background-color:#9933cc;
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
        <div style="width:100%; height: 350px; background-image: url(ngo.jpg); color: white; font-size: 50px; font-family: cursive">
        </div>
         <div style="width: 100%; height: 2500px;">
        <div class="navbar" id="up1" style="font-size: 50px; padding-left: 50px; background-color: #9933cc; color: white; font-family: cursive; position: static;">
        <a style="color: white; text-decoration: none; font-size: 20px; float: right; position: absolute; top: 380px; left: 446px;" href="ngoprofile.php">Home</a>
        
        <a style="color: white; text-decoration: none; font-size: 20px; float: right; position: absolute; top: 380px; left: 520px " href="volunteer.html">Volunteer</a>
    
        <a style="color: white; text-decoration: none; font-size: 20px; float: right; position: absolute; top: 380px; left: 635px;" href="ngoprofile.php">NGO</a>    
    </div>
        <div>
			<h1 align="center" class="main">List of Volunteers</h1>
			
<?php 
$username = "root"; 
$password = ""; 
$database = "hungerfree"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM volunteer";
 
 
echo '<table style="margin-left:400px;" border="1" cellspacing="0" cellpadding="10"> 
      <tr style="background-color: #9933cc; color:white;"> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Mob</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $name1 = $row["name"];
        $mail1 = $row["mail"];
        $mob1 = $row["mob"]; 
 
        echo '<tr> 
                  <td>'.$name1.'</td> 
                  <td>'.$mail1.'</td> 
                  <td>'.$mob1.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
        </div>
		
    </body>
</html>