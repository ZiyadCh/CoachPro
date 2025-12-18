<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$host = 'localhost';
$username = 'ziadphp';
$password = 'Z3r0_123!';
$database = 'coachpro';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connexion impossible : " . mysqli_connect_error());
}

if ($_POST) {

    $prenom   = $conn->real_escape_string($_POST['prenom']);
    $nom      = $conn->real_escape_string($_POST['nom']);
    $email    = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO user (prenom, nom, email, role, password_hash) 
        VALUES ('$prenom', '$nom', '$email', 'sportif', '$hash')";

    $conn->query($sql);

    $user_id = $conn->insert_id;

    $_SESSION['user_id'] = $user_id;
    $_SESSION['prenom']  = $_POST['prenom'];
    $_SESSION['nom']     = $_POST['nom'];
    $_SESSION['role']    = 'sportif';

    header("Location: /main/sportif.dashboard.php");
    exit();
}
?>