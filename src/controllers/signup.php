<?php

error_reporting(E_ERROR | E_PARSE);

require_once('../models/signup.php');

function userSignup(){
    if(isset($_POST["btn-signup"])){
        $userLastName = $_POST["user-lastname"];
        $userFirstName = $_POST["user-firstname"];
        $userEmail = $_POST["user-email"];
        $username = $_POST["username"];
        $userPassword = $_POST["user-password"];

        //we verify email validation...
        if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
            //we verify if user email exists in the database...
            if(ifEmailExists($userEmail)){
                echo '<div class="alert alert-danger alert-dismissible">
                        Cet email existe déja
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                    </div>';
            }
             else{
                //we verify if username exists in the database...
                if(ifUsernameExists($username)){
                    echo '<div class="alert alert-danger alert-dismissible">
                            Ce nom d\'utilisateur existe déja
                            <button class="btn-close" data-bs-dismiss="alert"></button>
                        </div>';
                }
                 else{
                    //we hash user password...
                    $passhash = password_hash($userPassword, PASSWORD_DEFAULT);

                    //we save user informations in the database...
                    inserData($userLastName, $userFirstName, $userEmail, $username, $passhash);
                    header('Location: login.php');
                 }
             }
        }
         else{
            echo '<div class="alert alert-danger alert-dismissible">
                      Email invalid
                      <button class="btn-close" data-bs-dismiss="alert"></button>
                 </div>';
         }
    }
}

require_once('../../templates/signup.php');