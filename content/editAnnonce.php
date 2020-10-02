<?php

session_start();

if (!isset($_SESSION['connecte'])) {
    header('Location: ../index.php');
}

require(__DIR__ . DIRECTORY_SEPARATOR . 'bdd.php');

$query = $bdd->prepare('SELECT * FROM annonce WHERE id = ' . $_GET[id] . ' ');
$query->execute();
$annonces = $query->fetchAll(PDO::FETCH_ASSOC);

include 'nav.php';

echo '<section class="padd-tb-60">
    <div class="container">
        <div class="row">
           ';

foreach ($annonces as $annonce) {

    include 'editAnnonceLinkTemplate.php';
}
echo '         
        </div>
    </div>
</section>';

include 'footer.php';

if(isset($_POST['updateAnnonce'])) {

    if ($_POST['title'] != "") {
        $nom = htmlspecialchars($_POST['title']);
        $id = $annonce['id'];

        $req = $bdd->prepare("UPDATE `annonce` SET `titre`= '$nom' WHERE `id` = '$id' ");
        $req->execute(array($title, $id));

        $message = "Le changement a bien été appliqué";
    } else {
        $message= "Un erreur s'est produite";
    }

    if ($_POST['price'] != ""){
        $price = htmlspecialchars($_POST['price']);
        $id = $annonce['id'];

        $req = $bdd->prepare("UPDATE `annonce` SET `prix`= '$price' WHERE `id` = '$id' ");
        $req->execute(array($price, $id));

        $message = "Le changement a bien été appliqué";
    }
    else {
        $message = "Une erreur s'est produite";
    }

    if ($_POST['description'] != "") {
        $description = htmlspecialchars($_POST['description']);
        $id = $annonce['id'];

        $req = $bdd->prepare("UPDATE `annonce` SET `descriptionProduit`= '$description' WHERE `id` = '$id' ");
        $req->execute(array($description, $id));

        $message = "Le changement a bien été appliqué";
    } else {
        $message= "Une erreur s'est produite";
    }
}

if(isset($_POST['deleteAnnonce'])) {
    $suppression = $bdd->prepare("DELETE FROM annonce WHERE id=".$annonce['id']." ");
    $suppression->execute();

    header('Location: myAnnonce.php');
} else{
    echo $error = 'erreur';
}

