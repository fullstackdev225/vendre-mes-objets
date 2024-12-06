<?php

error_reporting(E_ERROR | E_PARSE);

session_start();

require_once('../models/login.php');
require_once('../models/article.php');

    if(isset($_POST["btn-login"])){
        $username = $_POST["username"];
        $userPassword = $_POST["user-password"];

        authSession($username, $userPassword);
    }

    //we display article data in the form...
    if(isset($_GET["article-id"])){
        $articleId = $_GET["article-id"];
        $articles = getArticles($articleId);
    }

    //updating article...
    function update(){
        if(isset($_POST["btn-update"])){
            $articleTitle = $_POST["article-title"];
            $articlePrice = $_POST["article-price"];
            $articleType = $_POST["article-type"];
            $articleState = $_POST["article-state"];
            $articleDescription = $_POST["article-description"];
            $articleAvailability = $_POST["article-availability"];
            $articleImage = $_POST["article-image"];
            $articleId = $_GET["article-id"];

            updateArticle($articleTitle, $articlePrice, $articleType, $articleState, $articleDescription, $articleAvailability, $articleImage, $articleId);
             echo '<div class="alert alert-success alert-dismissible">
                      Votre article a été modifiée avec succès !
                      <button class="btn-close" data-bs-dismiss="alert"></button>
                 </div>';
        }
    }

require_once('../../templates/putUpdate.php');