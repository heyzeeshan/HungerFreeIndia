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

<!DOCTYPE html>
<html>
    <head>
	   <link rel="stylesheet" href="css/style.css">
            <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="final.php" method="post">
            <input style="height:44px; width:500px; margin-left:300px;"type="text" name="valueToSearch" placeholder="Value To Search">
            &nbsp;&nbsp;&nbsp;<input id="b1" type="submit" name="search" value="Filter"><br><br>
            
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
                    <td><a style="color:black;" href="food.php"><?php echo $row['status'];?></a></td>
                </tr>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>