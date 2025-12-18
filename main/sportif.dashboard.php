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
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-search me-2"></i>Découvrir les Coachs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-calendar-check me-2"></i>Mes Réservations</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-user me-2"></i>Mon Profil</a></li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 p-4">
                <h2 class="mb-4">Découvrir les Coachs</h2>

                <div class="mb-4">
                    <select class="form-select w-25" id="filterDiscipline">
                        <option value="">Toutes les disciplines</option>
                        <option>Football</option>
                        <option>Tennis</option>
                        <option>Natation</option>
                        <option>Boxe</option>
                    </select>
                </div>

                <div class="row g-4">
                    <?php
                    echo   "<div class='col-md-6 col-lg-4'>
                        <div class='card coach-card shadow-sm'>
                            <img src='https://via.placeholder.com/400x200?text=Photo+Coach' class='card-img-top coach-img' alt='Photo coach'>
                            <div class='card-body'>
                                <h5 class='card-title'> " . $_SESSION['prenom']  . " " . $_SESSION['nom'] . " </h5>
                                <p class='text-muted'>Coach certifiée - 12 ans d'expérience</p>
                                <div class='mb-3'>
                                    <span class='badge badge-discipline me-1'>Tennis</span>
                                    <span class='badge badge-discipline me-1'>Préparation physique</span>
                                </div>
                                <p class='card-text'>Spécialiste en technique et endurance. Séances personnalisées sur Paris.</p>
                     <a href='coach.profile.php?id=1' class='btn btn-success w-100'>Voir le profil & Réserver</a>
                            </div>
                        </div>
                    </div>";
                    ?>
                </div>

                <h3 class="mt-5 mb-4">Réservations</h3>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-success">
                            <tr>
                                <th>Coach</th>
                                <th>Discipline</th>
                                <th>Date & Heure</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Marie Laurent</td>
                                <td>Tennis</td>
                                <td>18/12/2025 - 14:00</td>
                                <td><span class="badge bg-success">Validée</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info">Détails</a>
                                    <a href="#" class="btn btn-sm btn-warning">Modifier</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Ahmed Benali</td>
                                <td>Football</td>
                                <td>20/12/2025 - 10:00</td>
                                <td><span class="badge bg-warning">En attente</span></td>
                                <td><a href="#" class="btn btn-sm btn-secondary">Annuler</a></td>
                            </tr>
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