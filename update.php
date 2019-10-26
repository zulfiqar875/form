<?php
    //include 'db_connect.php';
   

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "web_engneering";
    // Create Connection
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    // Check Connection
    
    if (mysqli_connect_error()){
  		echo "Failed to connect to MySQL:".mysqli_connect_error();
    }
    
    $sql = " UPDATE form SET Username='Admin' where Username=zulfiqar ";
    if ($conn->query($sql))
    {
        echo "New record is Update successfully";
            
    }
    else
    {
        echo "Error record Updating";
    }
    $conn->close();
    

    
    
    


?>