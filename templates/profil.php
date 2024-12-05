<?php if(isset($_SESSION["username"])) : ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VendreMesObjets - Mon profile</title>
        <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="shortcut icon" href="../../icons/vendre-mes-objets.png" type="image/x-icon">
    </head>
    <body>
         <div class="container text-center">
             <img src="../../icons/profile.png" width="300" alt="">
             <h1><?php echo $_SESSION["username"]; ?></h1><br><br>

             <?php foreach($infos as $info) : ?>
                <p><span class="fw-bold">Nom :</span> <?php echo $info["user_lastname"]; ?></p>
                <p><span class="fw-bold">Prénom :</span> <?php echo $info["user_firstname"]; ?></p>
                <p><span class="fw-bold">Adresse e-mail :</span> <?php echo $info["user_email"]; ?></p>
            <?php endforeach; ?>
         </div>
    </body>
    </html>
<?php endif; ?>