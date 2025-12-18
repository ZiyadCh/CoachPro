<?php 
session_start();
$host     = 'localhost';
$username = 'ziadphp';
$password = 'Z3r0_123!';          
$database = 'coachpro';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Erreur" . mysqli_connect_error());
} 
?>