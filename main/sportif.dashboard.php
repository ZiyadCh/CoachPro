<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Sportif - CoachPro</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(135deg, #28a745, #20c997);
        }

        .coach-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .coach-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .coach-img {
            height: 200px;
            object-fit: cover;
        }

        .badge-discipline {
            background: #28a745;
            color: white;
        }

        .sidebar {
            background-color: #1a3c34;
            min-height: 100vh;
        }

        .sidebar .nav-link {
            color: #fff;
            padding: 12px 20px;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: #2d5f56;
        }

        .text-sport {
            color: #28a745;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar p-3">
                <ul class="nav flex-column mt-4">
                    <li class="nav-item"><a href="#" class="nav-link active"><i class="fas fa-home me-2"></i>Accueil</a></li>
                    <li class="nav-item"><a href="/main/sportif.profile.php" class="nav-link"><i class="fas fa-user me-2"></i>Mon Profil</a></li>
                    <li class="nav-item mt-5"><a href="/auth/logout.php" class="nav-link"><i class="fas fa-sign-out-alt me-2"></i>Déconnexion</a></li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 p-4">
                <h2 class="mb-4">Découvrir les Coachs</h2>



                <div class="row g-4">
                    <?php

                    $host     = 'localhost';
                    $username = 'ziadphp';
                    $password = 'Z3r0_123!';
                    $database = 'coachpro';

                    $conn = mysqli_connect($host, $username, $password, $database);

                    if (!$conn) {
                        die("Erreur" . mysqli_connect_error());
                    }

                    $res = $conn->query("SELECT * FROM user where role='coach'");
                    while ($coach = $res->fetch_assoc()) {

                        echo   "<div class='col-md-6 col-lg-4'>
                        <div class='card coach-card shadow-sm'>
                            <img src='" . $coach['photo'] . "' class='card-img-top coach-img' alt='Photo coach'>
                            <form action='coach.profile.php' method='POST' class='card-body'>
                                <input type='hidden' name='id' value=" . $coach['id'] . ">
                                <h5 name='prenom' class='card-title'> " . $coach['prenom']  . " " . $coach['nom'] . " </h5>
                                <div class='mb-3'>
                                    <span class='badge badge-discipline me-1'>" . $coach['discipline_sportif'] . "</span>
                                </div>
                                <p class='card-text'> " . $coach['biographie'] . " </p>
                     <button type='submit' class='btn btn-success w-100'>Profile </button>
                            </form>
                        </div>
                    </div>";
                    }

                    ?>
                </div>

                <h3 class="mt-5 mb-4">Réservations</h3>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-success">
                            <tr></tr>
                        </thead>
                        <tbody>
                            <tr></tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>