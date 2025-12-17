<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <div class="signup-card mx-auto" id="formCoach" style="">
        <h4 class="text-center mb-4"><i class="fas fa-chalkboard-teacher text-coach"></i> Inscription Coach</h4>
        <form id="signupCoachForm" action="process_signup.php" method="POST">
            <input type="" name="role" value="coach">
            
            <div class="row g-3">
                <div class="col-md-6"><input type="text" name="prenom" class="form-control" placeholder="Prénom" required></div>
                <div class="col-md-6"><input type="text" name="nom" class="form-control" placeholder="Nom" required></div>
                <div class="col-12"><input type="email" name="email" class="form-control" placeholder="Email professionnel" required></div>
                <div class="col-12"><input type="tel" name="telephone" class="form-control" placeholder="Téléphone" required></div>
                <div class="col-12"><input type="password" name="password" class="form-control" placeholder="Mot de passe (8+ caractères)" required></div>
                <div class="col-12"><input type="password" name="password_confirm" class="form-control" placeholder="Confirmer le mot de passe" required></div>
                <div class="col-12"><textarea name="biographie" class="form-control" rows="3" placeholder="Petite biographie / spécialités (affichée sur votre profil)" required></textarea></div>
            </div>

            <button type="submit" class="btn btn-coach w-100 mt-4 fw-bold">Devenir Coach</button>
        </form>
        <div class="text-center mt-3"><a href="#" onclick="backToRole()">← Changer de rôle</a></div>
    </div>
</body>
</html>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>