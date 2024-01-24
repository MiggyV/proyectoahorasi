<?php
$error;

if (!empty($_POST['email']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "miguelvalera555@gmail.com" && $password == "123") {
       $error = "ok";
       header("Location: index.html");

    } else {
        $error = "incorrecto";
        header("Location: index.php?error=$error");
    }

} else { 
    $error = "vacio";
    header("Location: index.php?error=$error");

}
