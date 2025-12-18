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
    die("Erreur de connexion : " . mysqli_connect_error());
}
if ($_POST) {

    $prenom      = $_POST['prenom'];
    $nom         = $_POST['nom'];
    $email       = $_POST['email'];
    $password    = $_POST['password'];
    $biographie  = $_POST['biographie'];
    $pfp         = $_POST['photo'];
    $discipline  = $_POST['discipline_id'];
    $certif      = $_POST['certification'];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (prenom, nom, email, role, password_hash) 
        VALUES ('$prenom', '$nom', '$email', 'coach', '$hash')";
    $conn->query($sql);

    $user_id = $conn->insert_id;
    $sql2 = "INSERT INTO coach (id, biographie, photo, discipline_sportif, certification) VALUES ($user_id, '$biographie', '$pfp', $discipline, '$certif')";

    $conn->query($sql2);

    $_SESSION['user_id'] = $user_id;
    $_SESSION['prenom']  = $prenom;
    $_SESSION['nom']     = $nom;
    $_SESSION['role']    = 'coach';

    header("Location: /main/coach.dashboard.php");
    exit();
}
