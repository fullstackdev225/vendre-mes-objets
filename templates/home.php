<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VendreMesObjets - Accueil</title>
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="shortcut icon" href="../../icons/vendre-mes-objets.png" type="image/x-icon">
    </head>

    <body>
        <?php require_once('../../layouts/header.php') ?>

        <main>
            <section>
                <div class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../images/img-homepage.jpg" style="height: 500px;" alt="" class="w-100 d-block">
                            <div class="carousel-caption text-info fw-bold" style="font-size: 6em; text-shadow: 2px 2px 2px skyblue;">Le meilleur endroit pour vendre vos objets</div>
                        </div>
                    </div>
                </div>
            </section><br><br>

            
            <section>
                 <div class="container">
                    <div class="row gy-4">
                        <div class="col-md-3 border bg-white border-white shadow p-5" style="min-width: 300px; min-height: 500px;">
                            <h3 class="text-center">Filter</h3><br>
                            <button class="btn btn-primary" id="btn-sort1">Prix croissant</button><br><br>
                            <button class="btn btn-primary" id="btn-sort2">Prix décroissant</button>
                        </div>
                        <div class="col-md-9">
                            
                        </div>
                    </div>
                 </div>
            </section>
        </main>

        <script src="../../sass/vendors/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>