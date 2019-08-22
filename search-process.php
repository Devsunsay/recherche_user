<?php

    if (empty($_POST)) {
        //Le exit permet de stopper la mise en oeuvre du formulaire.
        //exit("Merci de remplir le formulaire de contact.");
        header('Location: index.php');
        exit();
    }

    //var_dump($_POST);
    require_once 'data/users-data.php';

    $email = $_POST['user_mail'];
    $key = array_search($email, array_column($users, 'email'));

    if ($key === false){
        exit('Cet utilisateur n\'existe pas;');
    }

    $user = $users[$key];
    require_once 'single-user.php';   
