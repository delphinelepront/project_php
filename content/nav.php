<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Petites annonces</title>
    <!-- Mobile Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Font Awesome CSS -->
    <link href="../include/css/font-awesome/font-awesome.min.css" rel="stylesheet">

    <!-- Simple Line Icons -->
    <link href="../include/css/simple-line-icons/simple-line-icons.css" rel="stylesheet">

    <!-- Bootstrap main CSS -->
    <link href="../include/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Web Fonts  -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!-- yamm3 -->
    <link href="../include/css/yamm.css" rel="stylesheet">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="../include/plugins/rs-plugin/css/settings.css" media="screen"/>

    <!-- Animate -->
    <link href="../include/css/animate/animate.min.css" rel="stylesheet">

    <!-- owl-carousel -->
    <link href="../include/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="../include/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <!-- magnific-popup -->
    <link href="../include/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- flexslider -->
    <link href="../include/plugins/flexslider/flexslider.css" rel="stylesheet">

    <!-- morris -->
    <link href="../include/plugins/morris/morris.css" rel="stylesheet">

    <!-- Hover -->
    <link href="../include/css/hover/hover.min.css" rel="stylesheet">


    <!-- style -->
    <link href="../include/css/style.css" rel="stylesheet">

    <!-- switcher -->
    <link href="../include/switcher/switcher.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../include/css/colors/green.css" id="colors">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="wide">

<!-- wrapper -->
<div class="wrapper">

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- //Preloader -->

    <!-- scrollToTop -->
    <a href="#" class="scrollToTop">
        <i class="fa fa-angle-up fa-2x"></i>
    </a>
    <!-- ./scrollToTop -->

    <!-- header -->
    <header id="header">
        <!-- navbar -->
        <div class="navbar navbar-v1 stay-top padd-tb-30 yamm" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="#"><img src="../include/img/logo.png" alt="Clarity"></a>-->
                    -<a class="navbar-brand" href="#"><span>P</span>etites annonces</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="accueil.php">Accueil</a></li>
                        <li><a href="profil.php">Mon Profil</a></li>
                        <li><a href="myAnnonce.php">Mes annonces</a></li>
                        <?php
                        if (!isset($_SESSION['connecte'])) {
                            ?>
                            <li><a href="login.php">Se connecter</a></li>
                            <?php
                        } else {
                        ?>
                        <li><a href="logout.php">Déconnexion</a></li>
                        <?php } ?>
                    </ul>
                </div><!--/.nav-collapse -->

            </div><!-- ./container -->
        </div>
        <!-- //navbar -->


    </header>
    <!-- /header -->


    <!-- page-title -->
    <section class="page-title image-v2 text-center padd-tb-60">
        <div class="img-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h3>Nos petites annonces</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- ./page-title -->