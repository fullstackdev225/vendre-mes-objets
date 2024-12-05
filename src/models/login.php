<?php 

require_once('../dbConnect.php');

function authLogin(string $username, string $password){
    //we connect to database...
    $database = dbConnect();

    //we getting user password...
    $request = $database->prepare('SELECT user_password FROM users WHERE username = ?');
    $request->execute([$username]);
    $result = $request->fetch();

    //we verify password...
    $passwordCorrect = password_verify($password, $result["user_password"]);

    if(!$result){
         echo '<div class="alert alert-danger alert-dismissible">
                      Identifiants incorrect
                      <button class="btn-close" data-bs-dismiss="alert"></button>
                 </div>';
    }
     else{
        if($passwordCorrect){
            $_SESSION["username"] = $username;
            header('Location: home.php');
        }
         else{
            echo '<div class="alert alert-danger alert-dismissible">
                      Identifiants incorrect
                      <button class="btn-close" data-bs-dismiss="alert"></button>
                 </div>';
         }
     }
}


function authSession(string $username, string $password){
        //we connect to database...
    $database = dbConnect();

    //we getting user password...
    $request = $database->prepare('SELECT user_password FROM users WHERE username = ?');
    $request->execute([$username]);
    $result = $request->fetch();

    //we verify password...
    $passwordCorrect = password_verify($password, $result["user_password"]);

    if(!$result){
        header('Location: login.php');
    }
     else{
        if($passwordCorrect){
            $_SESSION["username"] = $username;
        }
         else{
            header('Location: login.php');
         }
     }
}