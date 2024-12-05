<?php 

require_once('../dbConnect.php');

function ifEmailExists(string $email): bool{
    //we connect to database...
    $database = dbConnect();

    //we getting emails...
    $request = $database->prepare('SELECT user_email FROM users WHERE user_email = :email');
    $request->execute([
        ':email' => $email
    ]);
    $result = $request->fetch();

    $emails = array($result["user_email"]);

    //we verify if email exists...
    if(in_array($email, $emails)){
        return true;
    }

    return false;
    
}

function ifUsernameExists(string $username): bool{
    //we connect to database...
    $database = dbConnect();

    //we getting usernames...
    $request = $database->prepare('SELECT username FROM users WHERE username = :username');
    $request->execute([
        ':username' => $username
    ]);
    $result = $request->fetch();

    $users = array($result["username"]);

    //we verify if username exists...
    if(in_array($username, $users)){
        return true;
    }

    return false;
}


function inserData(string $lastName, string $firstName, string $email, string $username, string $password){
    //we connect to database...
    $database = dbConnect();

    //we insert user informations...
    $request = $database->prepare('INSERT INTO users(user_lastname, user_firstname, user_email, username, user_password)
                                   VALUES(?, ?, ?, ?, ?)');
    $request->execute([$lastName, $firstName, $email, $username, $password]);
}