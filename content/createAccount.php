<?php

session_start();

require(__DIR__ . DIRECTORY_SEPARATOR . 'bdd.php');
$mailpattern = '#[A-z]*@[A-z]*\.[A-z]{2}[A-z]?$#';
$usernamepattern = '#[A-z]#';
$phonepattern = '#^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$#';
if (isset($_POST['createAccount'])) {
    if (isset($_POST['login']) AND isset($_POST['mail']) AND isset($_POST['password']) AND isset($_POST['verif']) AND isset($_POST['phonenumber']) AND isset($_POST['description'])) {
        if (!empty($_POST['login']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['verif'])) {
            $login = trim(htmlspecialchars($_POST['login']));
            $mail = trim(htmlspecialchars($_POST['mail']));
            $password = sha1($_POST['password']);
            $phonenumber = trim(htmlspecialchars($_POST['phonenumber']));
            $verif = sha1($_POST['verif']);
            $description = trim(htmlspecialchars($_POST['description']));
            //$date = new DateTime();
            //$date->format('Y-m-d ');

            if (preg_match($usernamepattern, $login) === 1) {
                if (preg_match($mailpattern, $mail) === 1) {
                    if (preg_match($phonepattern, $phonenumber) === 1) {
                        if ($password == $verif) {
                            $req = $bdd->prepare("INSERT INTO `user`(login, password, email, phonenumber, descriptionUser, date_inscription) VALUES ('$login', '$password', '$mail', '$phonenumber', '$description', 'CURDATE()' )");
                            var_dump($req);
                            die();
                            $req->execute(array($login, $password, $mail, $phonenumber, $description, $date));


                        } else {
                            echo $error = "Les mots de passes ne correspondent pas.";
                        }
                    }  else {
                        echo $error = "Le numéro de téléphone n'est pas correct.";
                    }
                } else {
                    echo $error = "Adresse email invalide";
                }
            } else {
                echo $error = "votre nom ne doit contenir ni chiffres, ni caractères spéciaux";
            }
        } else {
            echo $error = "Un ou plusieurs champs n'ont pas été remplis.";
        }
    }
}