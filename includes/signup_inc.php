<?php

if (isset($_POST["submit"])) {

    $name = $_POST["voornaam"];
    $email = $_POST["e-mail"];
    $username = $_POST["gebruikersnaam"];
    $pwd = $_POST["wachtwoord"];
    $pwdrepeat = $_POST["herhaal wachtwoord"];

    require_once 'db_inc.php';
    require_once 'functions_inc.php';


    if (emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
}else{
    header("location: ../signup.php");
    exit();
}