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
    $prenom      = $conn->real_escape_string($_POST['prenom']);
    $nom         = $conn->real_escape_string($_POST['nom']);
    $email       = $conn->real_escape_string($_POST['email']);
    $password    = $_POST['password'];
    $biographie  = $conn->real_escape_string($_POST['biographie']);
    $pfp         = $conn->real_escape_string($_POST['photo']);
    $discipline  = $conn->real_escape_string($_POST['discipline_id']);
    $certif      = $conn->real_escape_string($_POST['certification']);

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user 
            (prenom, nom, email, password_hash, role, biographie, photo, discipline_sportif, certification)
            VALUES 
            ('$prenom', '$nom', '$email', '$hash', 'coach', '$biographie', '$pfp', '$discipline', '$certif')";

    if ($conn->query($sql) === TRUE) {
        $user_id = $conn->insert_id;

        $_SESSION['user_id'] = $user_id;
        $_SESSION['prenom']  = $_POST['prenom'];  
        $_SESSION['nom']     = $_POST['nom'];
        $_SESSION['role']    = 'coach';

        header("Location: /main/coach.dashboard.php");
        exit();
    } else {
        echo "Erreur : " . $conn->error;
    }
}
?>
