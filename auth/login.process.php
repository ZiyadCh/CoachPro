<?php
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

    $email    = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT id, prenom, nom, role, password_hash FROM user WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password_hash'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['prenom']  = $user['prenom'];
            $_SESSION['nom']     = $user['nom'];
            $_SESSION['role']    = $user['role'];

            if ($user['role'] == 'coach') {
                header("Location: coach.dashboard.php");
            } else if($user['role'] == 'sportif') {
                header("Location: sportif.dashboard.php");
            }
            exit();

        } else {
            $_SESSION['error'] = "Mot de passe incorrect";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Email n'exist pas";
        header("Location: login.php");
        exit();
    }
}
?>