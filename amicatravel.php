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
        <link href="css/assoc.css" rel="stylesheet">
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
                <div class = "col-md-1"></div>
                <div class = "col-md-10">
                    <h3 align="center">
                        <a href="https://www.amica-travel.com/" target="blank"><img class="assoc-img" src="images/amicatravel.jpg"></a>
                    </h3>
                    <div class="contenu">
                        <p>Amica Travel est une agence de voyage francophone. Elle est spécialiste des voyages sur mesure et authentique au Vietnam, au Laos et au Cambodge. <br>
                        Dès sa fondation, Amica Travel s’est orientée vers le voyage en individuel, sur mesure et solidaire dont le montage implique la participation du voyageur. La création d’Amica Travel part, en outré, de l’idée que voyager, c’est surtout aller à la découverte de l’autre, vivre avec l’autre et partager avec l’autre. <br>
                        Amica Travel préconise ainsi un tourisme d’immersion qui se traduit non seulement par les circuits originaux mais encore par leur mode d’organisation impliquant la participation des locaux et par la richesse d’information que Amica s’engage à mettre à disposition des voyageurs. <br>
                        En effet, Amica a à cœur, depuis sa création, de pratiquer un tourisme à visage humain plus riche en contenus, porteur de valeurs, un tourisme qui encourage la préservation et la valorisation du patrimoine et de la culture tout en apportant un bénéfice économique aux populations locales : Le développement du concept de « 24h de vie authentique », le développement dans les régions des minorités ethniques des circuits hors des sentiers battus pour la réalisation des quels Amica Travel a recours à la main d’œuvre locale, la mise en place des actions d’aide aux communautés locales et l’assistance bénévole aux actions des associations humanitaires œuvrant au Vietnam, au Laos et au Cambodge.<br>
                        Partageant un même esprit solidaire, Amica Travel est devenu partenaire durable de Coup de Pouce, en le soutenant à réaliser ses activités humanitaires : aide d’interprètes, financement des événements (fête du Têt pour les filleuls, concours de photos pour mobiliser des fonds), etc. En décembre 2015, la première édition du tournoi de football COUP de FOOT, organisé par Amica Travel et la Chambre de Commerce Française au Vietnam,  s’est déroulé. Au cours de ce tournoi, 13 équipes aux couleurs de différentes entreprises de Hanoi, s'affronteront dans un esprit convivial mais surtout solidaire car les profits seront reversés à Coup de Pouce et destinés au programme des Bourses d'études.<p>
                        <p>Website : <a href="www.amica-travel.com">www.amica-travel.com</a><br>
                        Contact : <a href="mailto:info@amicatravel.com">info@amicatravel.com</a><br>
                        Tel : (0084) 4 6273 4455<br>
                        Adresse : Building NIKKO, 3ème étage, 27 Rue Nguyen Truong To, Ba Dinh, Hanoi, Vietnam</p>
                    </div>
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