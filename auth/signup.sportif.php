<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription Sportif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f0f0; padding: 50px; }
        .box { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px gray; max-width: 500px; margin: auto; }
    </style>
</head>
<body>
    <div class="box">
        <h2 class="text-center text-success">Inscription Sportif</h2>

        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo '<div class="alert alert-danger text-center">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }
        ?>

        <form action="/auth/signup.sportif.process.php" method="POST">
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

            <button type="submit" class="btn btn-success w-100">S'inscrire comme Sportif</button>
        </form>

        <div class="text-center mt-3">
            <a href="login.php">Déjà un compte ? Se connecter</a><br>
            <a href="signup.php">← Retour au choix du rôle</a>
        </div>
    </div>
</body>
</html>