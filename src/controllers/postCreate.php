<?php

error_reporting(E_ERROR | E_PARSE);

session_start();

require_once('../models/login.php');
require_once('../models/article.php');
require_once('../models/user.php');

    if(isset($_POST["btn-login"])){
        $username = $_POST["username"];
        $userPassword = $_POST["user-password"];

        authSession($username, $userPassword);
    }

    //we add article data in the database...
    function add(){
       if(isset($_POST["btn-add"])){
           $articleTitle = $_POST["article-title"];
           $articlePrice = $_POST["article-price"];
           $articleType = $_POST["article-type"];
           $articleState = $_POST["article-state"];
           $articleDescription = $_POST["article-description"];
           $articleAvailability = $_POST["article-availability"];
           $articleImage = $_POST["article-image"];
           $userId = getUserId($_SESSION["username"]);

           addArticle($articleTitle, $articlePrice, $articleType, $articleState, $articleDescription, $articleAvailability, $articleImage, $userId);
           echo '<div class="alert alert-success alert-dismissible">
                      Votre article a été ajoutée avec succès !
                      <button class="btn-close" data-bs-dismiss="alert"></button>
                 </div>';
       }
    }


require_once('../../templates/postCreate.php');