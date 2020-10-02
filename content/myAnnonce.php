<?php

session_start();

if (!isset($_SESSION['connecte'])) {
    header('Location: ../index.php');
}

require(__DIR__ . DIRECTORY_SEPARATOR . 'bdd.php');

$query = $bdd->prepare('SELECT * FROM annonce WHERE id_user = ' . $_SESSION[id] . ' ');
$query->execute();
$annonces = $query->fetchAll(PDO::FETCH_ASSOC);

include 'nav.php';

echo '<section class="padd-tb-60 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <!-- categories -->
                <div class="padd-tb-20">
                    <h4>Actions</h4>
                    <div class="separator"></div>
                    <ul class="list-block">
                        <li><a href="createAnnonceLinkTemplate.php">Publier une annonce</a></li>
                    </ul>
                </div>
                <!-- ./categories -->
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="row">
';

foreach ($annonces as $annonce) {
    include 'myAnnonceLinkTemplate.php';
}
echo '</div>
     </div><!-- ./row -->
    </div><!-- ./container -->
</section>
';


include 'footer.php';



