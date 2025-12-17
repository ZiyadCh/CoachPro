
    <div class="signup-card mx-auto" id="formSportif" style="display:none;">
        <h4 class="text-center mb-4"><i class="fas fa-running text-sport"></i> Inscription Sportif</h4>
        <form id="signupSportifForm" action="process_signup.php" method="POST">
            <input type="hidden" name="role" value="sportif">
            <!-- CSRF token ici si vous l'utilisez -->

            <div class="row g-3">
                <div class="col-md-6"><input type="text" name="prenom" class="form-control" placeholder="Prénom" required></div>
                <div class="col-md-6"><input type="text" name="nom" class="form-control" placeholder="Nom" required></div>
                <div class="col-12"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
                <div class="col-12"><input type="tel" name="telephone" class="form-control" placeholder="Téléphone (ex: 06...)" required></div>
                <div class="col-12"><input type="password" name="password" class="form-control" placeholder="Mot de passe (8+ caractères)" required></div>
                <div class="col-12"><input type="password" name="password_confirm" class="form-control" placeholder="Confirmer le mot de passe" required></div>
            </div>

            <button type="submit" class="btn btn-sportif w-100 mt-4 fw-bold">Créer mon compte Sportif</button>
        </form>
        <div class="text-center mt-3"><a href="#" onclick="backToRole()">← Changer de rôle</a></div>
    </div>