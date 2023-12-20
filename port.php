<?php
if(isset($_POST["submit"])) {
    $fname = $_POST["name"];
    $email = $_POST["email"];
    $umessage = $_POST["message"];
    $msubject = $_POST["subject"];

    $serverName = "localhost";
    $userName = "rootone";
    $password = "kareem";
    $dbName = "Clients";
    // connection
    $conn = new mysqli($serverName, $userName, $password, $dbName);
    //check connection
    if ($conn->connect_error) {
        echo "failed connection";
    } else {
        echo "successful connection" . "<br>";
    }
    //excute sql 
    
    $sql = "INSERT INTO messa (fname , email , umessage , msubject )
    VALUES('$fname' , '$email', '$umessage' , '$msubject')";
    
    
    if ($conn->query($sql) === true) {
        echo "Record Inserted successfully";
    } else {
        echo "Record is not Inserted successfully";
    }
    $conn->close();


    }

?>