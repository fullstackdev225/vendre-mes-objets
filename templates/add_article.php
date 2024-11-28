<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendreMesObjets - Ajoutez des articles</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../icons/vendre-mes-objets.png" type="image/x-icon">
</head>
<body>
    <?php require_once('../../layouts/header.php') ?>
     <br><br>

    <main>
        <section class="section-form">
             <div class="container">
                <h1 class="text-center">Ajouter un article</h1>
                  <form method="POST" class="form">
                      <div class="form__section">
                        <div class="col-7">
                            <label for="article-title" class="form-label">Titre</label>
                            <input type="text" name="article-title" id="article-title" required placeholder="Donnez un nom à votre article" class="form-control">
                        </div>
                      </div><br>

                      <div class="form__section">
                          <div class="col-7">
                              <label for="article-price" class="form-label">Prix(FCFA)</label>
                              <input type="number" name="article-price" id="article-price" required placeholder="0" class="form-control">
                          </div>
                      </div><br>

                      <div class="form__section">
                         <div class="col-7">
                            <label for="article-type" class="form-label">Catégorie</label>
                            <select name="article-type" id="article-type" required class="form-select">
                                 <optgroup label="Maison et jardin">
                                      <option value="tools">Outils</option>
                                      <option value="meuble">Meubles</option>
                                      <option value="jardin">Jardin</option>
                                      <option value="electromenager">Électroménager</option>
                                 </optgroup>
                                 <optgroup label="Divertissement">
                                      <option value="video-game">Jeux vidéos</option>
                                      <option value="streaming">Livres, musiques et films</option>
                                 </optgroup>
                                 <optgroup label="Électronique">
                                     <option value="phone">Téléphones mobiles</option>
                                     <option value="computer">Ordinateur et électronique</option>
                                 </optgroup>
                                 <optgroup label="Vêtements et accéssoires">
                                      <option value="clothes">Vêtements</option>
                                      <option value="shoes">Chaussures</option>
                                      <option value="accessories">Accéssoires</option>
                                 </optgroup>
                            </select>
                         </div>
                      </div><br>

                      <div class="form__section">
                           <div class="col-7">
                                <label for="article-description" class="form-label">Description</label>
                                <textarea name="article-description" id="article-description" placeholder="Décrivez brièvement votre objet" minlength="10" required cols="30" rows="10" class="form-control"></textarea>
                           </div>
                      </div><br>

                      <div class="form__section">
                          <div class="col-7">
                              <label for="article-availability" class="form-label">Disponibilité</label>
                              <select name="article-availability" id="article-availability" required class="form-select">
                                  <option value="unique">Unique</option>
                                  <option value="stock">En stock</option>
                              </select>
                          </div>
                      </div><br>

                      <div class="form__section">
                           <div class="col-7">
                              <button type="submit" name="btn-add" id="btn-add" class="btn btn-info text-light">Publier</button>
                           </div>
                      </div>
                  </form> 
             </div>
        </section>
    </main>

    <script src="../../sass/vendors/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>