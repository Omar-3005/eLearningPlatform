<?php 
$servername = "localhost";
$db_user = "root";
$db_pass = "Instellar2021";
$db_name = "website";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);