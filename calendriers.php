<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="description" content="Coup de Pouce">
        <meta name="author" content="Elodie Heslouis">
        <!-- <link rel="icon" href="../../favicon.ico"> -->
        <title>Coup de Pouce</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/ie-emulation-modes-warning.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
        <!-- Custom styles for this template -->
        <link href="css/main.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
        <link href="css/leftColumn.css" rel="stylesheet">
        <link href="css/parrainage.css" rel="stylesheet">
        <link href="css/assoc.css" rel="stylesheet">
        <link href="css/galerie.css" rel="stylesheet">
        <script src="galerieGeneric.js"></script>
    </head>
    </head>

    <body>
        <div class="leftImage"></div>
        <div class="rightImage"></div>
        <div class="container">
            <?php
                include "common/nextAgenda.php";
            ?>
            <?php
                include "common/navbar.php";
            ?>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1>
                        Les Calendriers
                    </h1>
                    <div class="contenu">
                        <p>Créés à partir d’une sélection d’images de concours photos annuels jusqu’en 2014, CDP présente depuis deux ans, le travail de photographes professionnels qui font généreusement don de leurs photos sur le Vietnam à l’association.<br>2 formats de calendriers sont disponibles à la vente dès la mi-novembre au prix de 150 000 VND (6 €):
                        <ul><li>Calendriers muraux</li>
                        <li>Calendriers chevalets</li></ul>
                        Pour ses sponsors et partenaires, CDP réalise des calendriers chevalets personnalisés pour une commande minimale de 100 exemplaires (support personnalisé  avec logo, coordonnées, présentation…) au prix unitaire de 85 000 VND (3,40€)<br>La part des calendriers dans les bénéfices nets de CDP s’élève à plus de 70 %. Leur vente est donc notre première ressource.<br>Voici quelques-uns des projets réalisés grâce à ces ventes :
                        <ul><li>la création de bourses d’études attribuées à de jeunes bacheliers pour qu’ils poursuivent leurs études dans de bonnes conditions</li>
                        <li>la distribution de colis supplémentaires (hygiène et protéines) pour les familles parrainées </li>
                        <li>la fête du Têt : repas, colis alimentaire spécial têt et spectacle de théâtre offerts aux familles parrainées</li>
                        <li>la rénovation du centre pour enfants handicapés de Phuc Tuê</li></ul>
                        Liste des points de vente en ligne dès novembre.<br>En achetant un calendrier Coup De Pouce, vous contribuez à l’amélioration des conditions de vie des enfants parrainés.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                include "galerieGeneric.php";
                ?>
            </div>
        </div>

    <script>
        document.getElementById('nav-ressouces').className += ' active';
    </script>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="galerieCalendriers.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/format-google-calendar.min.js"></script>
    <script src="common/nextAgenda.js"></script>
    </body>
</html>