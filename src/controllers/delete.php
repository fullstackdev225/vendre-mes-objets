<?php 

require_once('../models/article.php');

if(isset($_GET["article-id"])){
    $articleId = $_GET["article-id"];

    deleteArticle($articleId);
    header('Location: home.php');
}