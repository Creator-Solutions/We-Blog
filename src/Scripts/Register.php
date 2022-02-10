<?php

    //include database connection file
    include 'DB.php';
    //connection reference to function
    $conn = get_connection();

    //reference Security file to generate userID
    include 'Security.php';

    //Require post data from ajax request
    $userID = UUID(15);
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $alias = $_POST["alias"];
    $password = md5($_POST["pass"]);

    //query with prepared statement
    $SQL = "INSERT INTO users (userID, Full_Name, Alias, Email, Password) VALUES (?,?,?,?,?)";

    $stmt = $conn->prepare($SQL);
    $stmt->bind_param("sssss", $userID, $fullName, $alias,  $email,$password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result == 1){
        $message = "Registered";
    }else {
        $message = "Could not register at this time";
    }

