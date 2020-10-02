<?php

session_start();

if (!isset($_SESSION['connecte'])) {
    header('Location: ../index.php');
}

require(__DIR__ . DIRECTORY_SEPARATOR . 'bdd.php');

$query = $bdd->prepare('SELECT * FROM annonce INNER JOIN user on annonce.id_user = user.id WHERE annonce.id = ' . $_GET[id] . ' ');
$query->execute();
$annonces = $query->fetchAll(PDO::FETCH_ASSOC);

include 'nav.php';

echo '<section class="padd-tb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">';

foreach ($annonces as $annonce) {
    include 'detailsAnnonceLinkTemplate.php';
}
echo '          </div>
        </div>
    </div>
</section>';

include 'footer.php';