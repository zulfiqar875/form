<?php
    //include 'db_connect.php';
    $username = $_POST['username'];
    $password  = $_POST['password'];

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "form";
    // Create Connection
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    // Check Connection
    
    if (mysqli_connect_error()){
  		echo "Failed to connect to MySQL:".mysqli_connect_error();
    }
    else{
        $sql = "INSERT INTO Account (Username, Password)
        VALUES ('$username','$password')";
        if ($conn->query($sql))
        {
            echo "New record is inserted successfully";
            
        }
        else
        {
            echo "Error Inserting record Witch";
        }
        $conn->close();
    }
?>