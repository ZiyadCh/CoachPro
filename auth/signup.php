<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body, html { height: 100%; }
        body {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://via.placeholder.com/1920x1080?text=Fond+Sportif') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .signup-card {
            background: rgba(255,255,255,0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            padding: 40px;
            max-width: 480px;
            width: 100%;
        }
        .btn-sportif { background: linear-gradient(135deg, #28a745, #20c997); border: none; }
        .btn-coach   { background: linear-gradient(135deg, #0d6efd, #6610f2); border: none; }
        .role-btn { height: 120px; font-size: 1.2rem; }
        .text-sport { color: #28a745; }
        .text-coach { color: #0d6efd; }
    </style>
</head>
<body>

<div class="container">
    <!-- Étape 1 : Choix du rôle -->
    <div class="signup-card mx-auto text-center" id="roleChoice">
        <i class="fas fa-dumbbell fa-3x text-success mb-4"></i>
        <h3 class="fw-bold mb-4">Rejoignez <span class="text-sport">CoachPro</span></h3>
        <p class="mb-5">Choisissez votre rôle pour continuer</p>

        <div class="row g-4">
            <div class="col-6">
                <a href="./signup.sportif.php" class="btn btn-sportif text-white w-100 role-btn" >
                    <i class="fas fa-running fa-2x mb-2"></i><br>
                    Je suis <strong>Sportif</strong><br>
                    <small>Je cherche un coach</small>
    </a>
            </div>
            <div class="col-6">
                <a href="./signup.coach.php" class="btn btn-coach text-white w-100 role-btn" >
                    <i class="fas fa-chalkboard-teacher fa-2x mb-2"></i><br>
                    Je suis <strong>Coach</strong><br>
                    <small>Je propose mes services</small>
    </a>
            </div>
        </div>

        <div class="mt-4">
            <p>Déjà inscrit ? <a href="login.php" class="fw-bold text-sport">Se connecter</a></p>
        </div>
    </div>

    <!-- Étape 2 : Formulaire Sportif -->

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function showForm(role) {
        document.getElementById('roleChoice').style.display = 'none';
        document.getElementById('form'+role.charAt(0).toUpperCase()+role.slice(1)).style.display = 'block';
    }
    function backToRole() {
        document.querySelectorAll('#formSportif, #formCoach').forEach(f => f.style.display = 'none');
        document.getElementById('roleChoice').style.display = 'block';
    }

</script>
</body>
</html>