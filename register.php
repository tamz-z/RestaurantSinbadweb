<?php
$user = $_post['gebruikersnaam'];
$pass = $_post['wachtwoord'];

$sql = "INSERT INTO users (gebruikersnaam, wachtwoord) values ('$user', )";

$conn->exec($sql);