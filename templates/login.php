<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendreMesObjets - Connexion</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../icons/vendre-mes-objets.png" type="image/x-icon">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <img src="../../icons/vendre-mes-objets.png" width="250" alt="app's icon">
                </div>

                <h1 class="text-center">Connexion</h1>
                <p class="text-secondary text-center">Connectez-vous à votre compte</p><br>

                <form method="POST" class="row gy-4">
                    <div class="col-12">
                        <label for="username" class="form-label">Nom d'utilisateur</label>
                        <input type="text" name="username" id="username" required class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="user-password" class="form-label">Mot de passe</label>
                        <input type="password" name="user-password" id="user-password" required class="form-control">
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" name="btn-login" id="btn-login" class="btn btn-info text-light">Connexion</button>
                        <div class="form-text">Pas encore inscrit? <a href="signup.php">Inscrivez-vous</a></div>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <img src="../../images/img-login.jpg" alt="" class="img-fluid ms-3">
            </div>
        </div>
    </div>
</body>
</html>