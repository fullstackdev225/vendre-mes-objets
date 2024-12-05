<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendreMesObjets - Accueil</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../icons/vendre-mes-objets.png" type="image/x-icon">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md bg-dark" role="navigation">
            <div class="container">
                <a href="home.php" class="navbar-brand">
                    <img src="../../icons/vendre-mes-objets.png" width="110" alt="app's icon">
                </a>

                <ul class="navbar-nav">
                    <li class="nav-item"><a href="home.php" class="nav-link text-light link-active" aria-current="page">Accueil</a></li>
                    <li class="nav-item"><a href="postCreate.php" class="nav-link text-light">Vendre un objet</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../../icons/user-session.png" width="32" alt="">
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="profil.php" class="dropdown-item">Mon profile</a></li>
                            <li><a href="article.php" class="dropdown-item">Mes articles</a></li>
                            <li><a href="#" class="dropdown-item">Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="img-background">
             <div class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../images/img-background.jpg" height="500" alt="" class="w-100 d-block">
                        <div class="carousel-caption text-primary">Le meilleur endroit pour vendre vos objets</div>
                    </div>
                </div>
             </div>
        </section><br><br>

        <section class="articles">
              <div class="container">
                  <div class="row">
                     <div class="col-md-3 filter">
                         <h3 class="text-center">Filtrer</h3><br>
                         <button class="btn btn-primary" id="btn-sort1">Prix croissant</button><br><br>
                         <button class="btn btn-primary" id="btn-sort2">Prix Décroissant</button><br><br><br>

                         <button class="btn btn-primary" id="btn-filter1">Vêtements et accéssoires</button><br><br>
                         <button class="btn btn-primary" id="btn-filter2">Outils</button><br><br>
                         <button class="btn btn-primary" id="btn-filter3">Electronique</button><br><br>
                         <button class="btn btn-primary" id="btn-filter4">Autres</button><br><br>
                     </div>

                     <div class="col-md-9 articles-lists">
                        
                     </div>
                  </div> 
              </div>
        </section>
    </main><br><br>

    <?php require_once('../../layouts/footer.php') ?>

    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>