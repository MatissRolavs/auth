<?php
guest();
require "Db.php";
$config = require("config.php");



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $db = new Db($config);
    $query = "SELECT * FROM users WHERE email = :email;";
    $params = [":email" => $_POST["email"]];
    $errors = [];
    $result = $db->execute($query,$params)->fetch();
    if(!$result || !password_verify($_POST["password"], $result["password"])){
        $errors["user"] = "Incorrect password or email";
    }
    if(empty($errors)){
        $_SESSION["user"] = true;
        $_SESSION["email"] = $_POST["email"];
        header("Location: /");
        die();
    }

}



$title = "Login";
require "views/auth/login.view.php";
unset($_SESSION["flash_message"]);