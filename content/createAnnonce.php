<?php

session_start();

if (!isset($_SESSION['connecte'])) {
    header('Location: ../index.php');
}

require(__DIR__ . DIRECTORY_SEPARATOR . 'bdd.php');

if(isset($_POST['createAnnonce'])) {
    if (isset($_POST['title']) AND isset($_POST['price']) AND isset($_POST['date_fin']) AND isset($_POST['description']) ){
        if (!empty($_POST['title']) AND !empty($_POST['price']) AND !empty($_POST['date_fin']) AND !empty($_POST['description'])){
            $title = trim(htmlspecialchars($_POST['title']));
            $price = trim(htmlspecialchars($_POST['price']));
            $date = $_POST['date_fin'];
            $dateFin = date('Y-m-d H:i:s', strtotime($date));
            $dateDebut = date('Y-m-d H:i:s');
            $description = trim(htmlspecialchars($_POST['description']));
            $user = $_SESSION[id];

            $req = $bdd->prepare("INSERT INTO annonce(`titre`, `descriptionProduit`, `prix`, `date_debut`, `date_fin`, `id_user`) VALUES ('$title', '$description','$price','$dateDebut','$dateFin','$user')");
            $req->execute(array($title, $description, $price, $dateDebut, $dateFin, $user));

            header('Location: myArticle.php');
        } else {
            echo 'Un champ n\'est pas rempli';
        }
    }
}
