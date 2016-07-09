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
        <link href="css/sponsors.css" rel="stylesheet">
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
                    CDPVN remercie chaleureusement ses nombreux partenaires, amis et sponsors, qui grâce à leur aide, leur soutien et leur générosité contribuent à la réalisation des projets.<br>
                    Et en particulier à :
                    <ul>
                    <li>Amica Travel</li>
                    <li>Le Cercle des Francophones de Hanoi</li>
                    <li>Français Solidaires</li>
                    <li>La Chambre de Commerce et d’Industrie Franco-Vietnamienne</li>
                    <li>Les sponsors calendriers 2016 : INVIVO, AMICA TRAVEL, l’AFD, ALSTOM, PRIME BUSINESS, EXPERTISE FRANCE, GEROC, et K+</li>
                    <li>Les photographes Jean-Yves Le Garzic et Alisher Sharip</li>
                    <li>CHULA</li>
                    <li>UBIK</li>
                    <li>Le Lycée Français Alexandre Yersin de Hanoi</li>
                    <li>Le Millenium</li>
                    <li>Saint-Honore</li>
                    <li>Asvelis</li>
                    <li>L’Atelier</li>
                    <li>L’Ambassade de France</li>
                    <li>La Bicicleta</li>
                    <li>Société Wieser</li>
                    <li>Sofitel Plaza</li>
                    <li>Les interprètes qui participent aux activités de CDPVN</li>
                    <li>L’ensemble des membres CDPVN, nouveaux et anciens, pour leur soutien fidèle !</li>
                </div>
            </div>
        </div>

    <script>
        document.getElementById('nav-ressouces').className += ' active';
    </script>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/format-google-calendar.min.js"></script>
    <script src="common/nextAgenda.js"></script>
    </body>
</html>