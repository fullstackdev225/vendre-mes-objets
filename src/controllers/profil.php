<?php

error_reporting(E_ERROR | E_PARSE);

session_start();

require_once('../models/login.php');
require_once('../models/user.php');

    if(isset($_POST["btn-login"])){
        $username = $_POST["username"];
        $userPassword = $_POST["user-password"];

        authSession($username, $userPassword);
    }

    //user profile...
    $infos = getUserInfos($_SESSION["username"]);

require_once('../../templates/profil.php');