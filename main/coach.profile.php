<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$id = $_POST['id'];
                    $host     = 'localhost';
                    $username = 'ziadphp';
                    $password = 'Z3r0_123!';
                    $database = 'coachpro';

                    $conn = mysqli_connect($host, $username, $password, $database);
                    $res = $conn->query("SELECT * FROM user where id='$id'");

                    if (!$conn) {
                        die("Erreur" . mysqli_connect_error());
                    }
$coach = $res->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Coach - CoachPro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .profile-header {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            padding: 80px 0 60px;
            text-align: center;
        }

        .coach-photo {
            width: 220px;
            height: 220px;
            object-fit: cover;
            border: 8px solid white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .badge-discipline {
            background: #28a745;
            font-size: 1.1rem;
            padding: 10px 20px;
            border-radius: 50px;
        }

        .info-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        .btn-edit {
            background: #ffc107;
            border: none;
            font-weight: bold;
        }

        .btn-edit:hover {
            background: #e0a800;
        }

        .icon {
            color: #0d6efd;
            font-size: 1.4rem;
            margin-right: 10px;
        }
    </style>
</head>

<body>

<?php
echo "    <div class='profile-header'>
        <div class='container'>
            <img src='".$coach['photo']."' class='rounded-circle coach-photo mb-4' alt='Photo du coach'>
            <h1 class='display-4 fw-bold'>". $coach['nom'] . " " . $coach['prenom'] ."</h1>
            <div class='mt-3'>
                <span class='badge badge-discipline'>".$coach['discipline_sportif']."</span>
            </div>
        </div>
    </div>

    <div class='container my-5'>


        <div class='row'>
            <!-- Biographie -->
            <div class='col-lg-8'>
                <div class='info-card'>
                    <h3><i class='fas fa-user icon'></i> Biographie</h3>
                    <p class='lead'></p>
                    <p>
                        " . $coach['biographie'] ."
                    </p>
                </div>
            </div>

            <!-- infos rapides -->
            <div class='col-lg-4'>
                <div class='info-card'>
                    <h4><i class='fas fa-certificate icon'></i> Certification</h4>
                    <p class='fs-5 fw-bold'>". $coach['certification']."</p>

                    <hr>

                    <h4><i class='fas fa-envelope icon'></i> Contact</h4>
                    <p>".$coach['email']."</p>

                </div>
            </div>
        </div>

";
?>
        <div class="text-center my-5">
            <a href="/main/reservation.php" class="btn btn-success btn-lg px-5 py-3">
                <i class="fas fa-calendar-check me-2"></i>
                Faire reservatiion
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>