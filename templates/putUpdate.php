<?php if(isset($_SESSION["username"])) : ?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendreMesObjets - Modifier votre objet</title>
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
                    <li class="nav-item"><a href="home.php" class="nav-link text-light">Accueil</a></li>
                    <li class="nav-item"><a href="postCreate.php" class="nav-link text-light">Vendre un objet</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../../icons/user-session.png" width="32" alt="">
                            <span class="text-light">Bonjour <?php echo $_SESSION["username"]; ?></span>
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
    </header><br><br>
    
    <main>
        <section class="section-form">
             <div class="container">
               <?php update(); ?>
                <?php foreach($articles as $article) : ?>
                    <form method="POST" class="form">
                    <div class="form-section">
                        <div class="col-8">
                            <label for="article-title" class="form-label">Titre</label>
                            <input type="text" name="article-title" value="<?php echo $article["article_title"]; ?>" id="article-title" required placeholder="Donnez un nom à votre article" class="form-control">
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-8">
                            <label for="article-price" class="form-labe">Prix(FCFA)</label>
                            <input type="number" name="article-price" value="<?php echo $article["article_price"]; ?>" id="article-price" required placeholder="0" class="form-control">
                        </div>
                    </div><br>

                    <div class="form-section">
                         <div class="col-8">
                            <label for="article-type" class="form-label">Catégorie</label>
                            <select name="article-type" id="article-type" required class="form-control">
                                <option value="Vêtements et accéssoires">Vêtements et accéssoires</option>
                                <option value="Outils">Outils</option>
                                <option value="Electronique">Electronique</option>
                                <option value="Autres">Autres</option>
                                <option selected value="<?php echo $article["article_type"]; ?>"><?php echo $article["article_type"]; ?></option>
                            </select>
                         </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-8">
                            <label for="article-state" class="form-label">Etat</label>
                            <select name="article-state" id="article-state" required class="form-control">
                                <option value="Neuf">Neuf</option>
                                <option value="Comme neuf">Comme neuf</option>
                                <option value="Bon état">Bon état</option>
                                <option value="Assez bon état">Assez bon état</option>
                                <option selected value="<?php echo $article["article_state"]; ?>"><?php echo $article["article_state"]; ?></option>
                            </select>
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-8">
                            <label for="article-description" class="form-label">Description</label>
                            <textarea name="article-description" id="article-description" placeholder="Détaillez votre article..." required cols="30" rows="10" class="form-control">
                                <?php echo $article["article_description"]; ?>
                            </textarea>
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-8">
                            <label for="article-availability" class="form-label">Disponibilité</label>
                            <select name="article-availability" id="article-availability" value="" required class="form-control">
                                <option value="Unique">Unique</option>
                                <option value="En stock">En stock</option>
                                <option selected value="<?php echo $article["article_availability"]; ?>"><?php echo $article["article_availability"]; ?></option>
                            </select>
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-8">
                            <label for="article-image" class="form-label">URL de l'image</label>
                            <input type="url" name="article-image" id="article-image" value="<?php echo $article["article_image"]; ?>" required placeholder="http://..." class="form-control">
                        </div>
                    </div><br>

                    <div class="form-section">
                        <div class="col-8">
                            <button type="submit" name="btn-update" id="btn-update" class="btn btn-primary">Modifier</button>
                        </div>
                    </div>
                </form>
            <?php endforeach; ?>
             </div>
        </section>
    </main><br><br>

    <?php require_once('../../layouts/footer.php') ?>

    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php endif; ?>