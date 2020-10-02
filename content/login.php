<?php

session_start();


require(__DIR__ . DIRECTORY_SEPARATOR . 'bdd.php');

if (isset($_POST['login'])) {
    if (isset($_POST['mail']) AND isset($_POST['password'])) {
        if (!empty($_POST['mail']) AND !empty($_POST['password'])) {
            $mail = htmlspecialchars($_POST['mail']);
            $password = sha1($_POST['password']);

            $req = $bdd->prepare("SELECT * FROM `user` WHERE `email` = '$mail' AND `password` = '$password'");
            $req->execute(array($mail, $password));

            if ($req->rowCount() == 1) {
                $user = $req->fetch();
                $_SESSION['id'] = $user['id'];
                $_SESSION['connecte'] = true;

                header('Location: accueil.php');
            } else {
                $_SESSION['error'] = "Erreur de connexion.";
                header('Location: ../index.php');
            }
        } else {
            $_SESSION['error'] = "Adresse email ou mot de passe incorect";
            header('Location: ../index.php');
        }
    } else {
        $_SESSION['error'] = "Tous les champs doivent être complétés";
        header('Location: ../index.php');
    }
}

