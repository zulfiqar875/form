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
    
    $sql = "DELETE FROM form WHERE Username=Admin";
    if ($conn->query($sql))
    {
        echo "record is Delete successfully";
            
    }
        else
    {
        echo "Error Deleting record";
    }
    $conn->close();
    

    
    
    


?>