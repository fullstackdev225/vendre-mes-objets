<?php 

require_once('../dbConnect.php');

function getUserInfos(string $username){
    //we connect to database...
    $database = dbConnect();

    //we getting user informations...
    $request = $database->prepare('SELECT user_lastname, user_firstname, user_email FROM users WHERE username = ?');
    $request->execute([$username]);
    $result = $request->fetchAll();

    return $result;
}