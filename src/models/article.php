<?php 

require_once('../dbConnect.php');

function addArticle(string $title, int $price, string $type, string $state, string $description, string $availability, string $image, int $userId){
    //we connect to database...
    $database = dbConnect();

    //we insert article data...
    $request = $database->prepare('INSERT INTO articles(article_title, article_price, article_type, article_state, article_description, article_availability, article_image, user_id)
                                   VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
    $request->execute([$title, $price, $type, $state, $description, $availability, $image, $userId]);
    
}

function getAllArticle(){
    //we connect to database...
    $database = dbConnect();

    //we getting article data...
    $request = $database->prepare('SELECT article_title, article_price, article_image FROM articles');
    $request->execute();
    $result = $request->fetchAll();

    return $result;
}

function getArticle(int $userId){
    //we connect to database...
    $database = dbConnect();

    //we getting article data...
    $request = $database->prepare('SELECT article_id, article_title, article_price, article_availability, article_image FROM articles WHERE user_id = ?');
    $request->execute([$userId]);
    $result = $request->fetchAll();

    return $result;
}

function getArticles(int $articleId){
    //we connect to database...
    $database = dbConnect();

    //we getting article data...
    $request = $database->prepare('SELECT article_title, article_price, article_type, article_state, article_description, article_availability, article_image FROM articles WHERE article_id = ?');
    $request->execute([$articleId]);
    $result = $request->fetchAll();

    return $result;
}

function updateArticle(string $title, int $price, string $type, string $state, string $description, string $availability, string $image, int $articleId){
     //we connect to database...
     $database = dbConnect();

     //we modify article...
     $request = $database->prepare('UPDATE articles SET article_title = ?, article_price = ?, article_type = ?, article_state = ?, article_description = ?, article_availability = ?, article_image = ? WHERE article_id = ?');
     $request->execute([$title, $price, $type, $state, $description, $availability, $image, $articleId]);
}

function deleteArticle(int $articleId){
    //we connect to database...
    $database = dbConnect();

    //we delete article...
    $request = $database->prepare('DELETE FROM articles WHERE article_id = ?');
    $request->execute([$articleId]);
    
}