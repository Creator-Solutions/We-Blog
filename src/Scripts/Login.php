<?php

include '../Scripts/DB.php';
$message = "";
$conn = get_connection();
$mail = $_POST["email"];
$password = md5($_POST["password"]);

$SQL = "SELECT * FROM users WHERE Email=? AND Password=?";

$stmt = $conn->prepare($SQL);
$stmt->bind_param("ss", $mail, $password);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!empty($user)){
    $message = "Auth";
}else{
    $message = "Not_Auth";
}

echo $message;
