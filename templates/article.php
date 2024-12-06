<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendreMesObjets - Mes articles</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../icons/vendre-mes-objets.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($articles as $article) : ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="<?php echo $article["article_image"]; ?>" alt="" height="200" class="img-card-top">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $article["article_title"]; ?></h4>
                            <p class="card-text"><?php echo $article["article_price"]; ?> FCFA</p>
                            <p class="card-text"><?php echo $article["article_availability"]; ?></p>
                            <a href="putUpdate.php?article-id=<?php echo $article["article_id"]; ?>" class="btn btn-primary">Modifier</a>
                            <a href="delete.php?article-id=<?php echo $article["article_id"]; ?>" class="btn btn-danger">Supprimer</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>