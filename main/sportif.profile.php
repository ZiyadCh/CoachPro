<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();


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
    <div class="profile-header">
        <div class="container">
            <img src="https://via.placeholder.com/400x400?text=Photo+Coach" class="rounded-circle coach-photo mb-4" alt="Photo du coach">
            <h1 class="display-4 fw-bold"><?php echo $_SESSION['nom'] . " " . $_SESSION['prenom'] ?>  </h1>
            </div>
        </div>
    </div>

    <div class="container my-5">


        <div class="row">

                </div>
            </div>
        </div>

        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>