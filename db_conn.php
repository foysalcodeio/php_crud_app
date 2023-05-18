<?php   
    $host = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "crudApp";

    //Create a database connection
    $conn = mysqli_connect($host, $username, $pass, $dbname);

    // if(!conn){
    //     die("Connection failed : " . mysqli_connect_error());
    // }

    
    // Check the connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    //echo "Connected successfully";

?>