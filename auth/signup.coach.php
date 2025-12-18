<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription Coach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
            padding: 50px;
        }

        .box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="box">
        <h2 class="text-center">Inscription Coach</h2>

        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo '<div class="alert alert-danger text-center">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }
        ?>

        <form action="signup.coach.process.php" method="POST">
            <div class="mb-3">
                <label>Prénom</label>
                <input type="text" name="prenom" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nom</label>
                <input type="text" name="nom" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Mot de passe</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Confirmer le mot de passe</label>
                <input type="password" name="password_confirm" class="form-control" required>
            </div>

            <h4 class="mt-4">Profil Coach</h4>
            <div class="mb-3">
                <label>Biographie (présentez-vous)</label>
                <textarea name="biographie" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label>Photo</label>
                <input type="text" name="photo" class="form-control" placeholder="https://..." required>
            </div>
            <div class="mb-3">
                <label>Discipline</label>
                <select name="discipline_id" class="form-control" required>
                    <option value="Football">Football</option>
                    <option value="Tennis">Tennis</option>
                    <option value="Boxe">Boxe</option>
                    <option value="Musculation">Musculation</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Certification</label>
                <input type="text" name="certification" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">S'inscrire comme Coach</button>
        </form>

        <div class="text-center mt-3">
            <a href="login.php">Déjà un compte ? Se connecter</a>
        </div>
    </div>
</body>

</html>