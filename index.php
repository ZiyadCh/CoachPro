<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Coach - Plateforme Sportive</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome pour icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            min-height: 100vh;
            background-color: #1a3c34;
        }

        .sidebar .nav-link {
            color: #fff;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: #2d5f56;
        }

        .stat-card {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
        }

        .table-actions btn {
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar p-3">
                <h4 class="text-white text-center mb-4">Coach Dashboard</h4>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="#" class="nav-link active"><i class="fas fa-home me-2"></i>Dashboard</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-calendar-check me-2"></i>Réservations</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-user me-2"></i>Mon Profil</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-clock me-2"></i>Disponibilités</a></li>
                    <li class="nav-item mt-5"><a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt me-2"></i>Déconnexion</a></li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 p-4">
                <h2 class="mb-4">Bienvenue, Coach [] !</h2>

                <!-- Statistiques simples -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card stat-card shadow">
                            <div class="card-body text-center">
                                <h5>Demande en attente</h5>
                                <h3>5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card shadow">
                            <div class="card-body text-center">
                                <h5>Séances aujourd'hui</h5>
                                <h3>3</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card shadow">
                            <div class="card-body text-center">
                                <h5>Séances demain</h5>
                                <h3>4</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card shadow">
                            <div class="card-body text-center">
                                <h5>Prochaine séance</h5>
                                <p>Aujourd'hui 14:00<br>Jean Dupont - Tennis</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table des réservations -->
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Gestion des Réservations</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-success">
                                    <tr>
                                        <th>ID</th>
                                        <th>Sportif</th>
                                        <th>Discipline</th>
                                        <th>Date & Heure</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Exemple de lignes - Remplacez par boucle PHP -->
                                    <tr>
                                        <td>101</td>
                                        <td>Marie Laurent</td>
                                        <td>Natation</td>
                                        <td>16/12/2025 - 10:00</td>
                                        <td><span class="badge bg-warning">En attente</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-success me-1" title="Accepter"><i class="fas fa-check"></i></button>
                                            <button class="btn btn-sm btn-danger me-1" title="Refuser"><i class="fas fa-times"></i></button>
                                            <button class="btn btn-sm btn-info" title="Détails"><i class="fas fa-eye"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>102</td>
                                        <td>Paul Martin</td>
                                        <td>Football</td>
                                        <td>15/12/2025 - 18:00</td>
                                        <td><span class="badge bg-success">Validée</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-info" title="Détails"><i class="fas fa-eye"></i></button>
                                        </td>
                                    </tr>
                                    <!-- Ajoutez plus de lignes dynamiquement avec PHP -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>