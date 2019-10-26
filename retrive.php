<?php
    //include 'db_connect.php';
    

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "Form";
    // Create Connection
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    // Check Connection
    
    if (mysqli_connect_error()){
  		echo "Failed to connect to MySQL:".mysqli_connect_error();
    }
    if ($result->num_rows > 0){
        $sql = "SELECT Username, Password FROM form ";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            echo "Username: " . $row["Username"]. " - Password: " . $row["Password"]. "<br>";
        }
    } 
    else {
        echo "0 results";
    }
    $conn->close();
?>