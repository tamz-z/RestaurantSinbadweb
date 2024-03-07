<?php
include 'Connection.php';
$user = $_POST['gebruikersnaam'];

$stmt = $conn->prepare(
    query: "SELECT gebruikersnaam, wachtwoord FROM users WHERE gebruikersnaam='$user'");
$stmt-> execute();

$result = $stmt->fetch();

if(isset($result)){
    echo 'klopt';
}
else{
    echo 'niet';
}
?>

.   