<?php
require "Validator.php";
require "Db.php";
$config = require("config.php");




if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $db = new Db($config);
    $errors = [];
    if(!Validator::email($_POST["email"])){
        $errors["email"] = "Invalid email format";
    }
    if(!Validator::string($_POST["password"],min:6)){
        $errors["password"] = "Password must be atleast 6 characters";
    }
    $query = "SELECT * FROM users WHERE email = :email;";
    $params = [":email" => $_POST["email"]];
    $result = $db->execute($query,$params)->fetch();
    if($result){
        $errors["email"] = "Account with this email already exists";
    }
    if(empty($errors)){
    $params = [];

    $query = "INSERT INTO users (email, password) VALUES (:email, :password);";
    $params = [":email" => $_POST["email"],
                ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT)];
    $db->execute($query,$params);
    header("Location: /login");
    die();
    }
    
}



$title = "Register";
require "views/auth/register.view.php";