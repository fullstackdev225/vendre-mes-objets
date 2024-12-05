<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendreMesObjets - Inscription</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../icons/vendre-mes-objets.png" type="image/x-icon">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="text-center">
                    <img src="../../icons/vendre-mes-objets.png" width="250" alt="app's icon">
                </div>

                <h1 class="text-center">Inscription</h1>
                <p class="text-secondary text-center">Inscrivez-vous dès maintenant</p><br>

                <?php userSignup(); ?>

                <form method="POST" class="row gy-4">
                    <div class="col-md-6">
                        <label for="user-lastname" class="form-label">Nom</label>
                        <input type="text" name="user-lastname" id="user-lastname" required class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label for="user-firstname" class="form-label">Prénom</label>
                        <input type="text" name="user-firstname" id="user-firstname" required class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="user-email" class="form-label">Adresse e-mail</label>
                        <input type="email" name="user-email" id="user-email" required class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="username" class="form-label">Nom d'utilisateur</label>
                        <input type="text" name="username" id="username" required class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="user-password" class="form-label">Créer un mot de passe</label>
                        <input type="password" name="user-password" id="user-password" required minlength="8" placeholder="8 caractères minimum..." class="form-control">
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" name="btn-signup" id="btn-signup" class="btn btn-primary">Inscription</button>
                        <div class="form-text">Déja inscrit? <a href="login.php">Connectez-vous</a></div>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <img src="../../images/img-signup.jpg" alt="" class="img-fluid ms-3">
            </div>
        </div>
    </div>

    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>