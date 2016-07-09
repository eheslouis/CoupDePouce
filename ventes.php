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
                    <h1 align="center">
                        Ventes de Livres
                    </h1>
                    <div class="contenu">
                        <p>La vente de livres se déroule un samedi s tous les deux mois chez Annie, généreuse membre de Coup de Pouce qui nous accueille chaleureusement chez elle!<br>Ouvert de 10h à 12h30, nous avons accueillons de nombreux amateurs de livres. Petits et grands profitent d'un moment agréable autour d'un café et ont l’occasion de discuter avec les membres de Coup de Pouce.<br>Ces ventes ne sont possibles que grâce aux généreux donateurs de livres, magazines, et DVD.<br>Tous les benefices des ventes sont entièrement consacres aux projets soutenus par Coup de Pouce!</p>
                    </div>
                    <div class="row">
                        <?php
                        include "galerieGeneric.php";
                        ?>
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
    <script src="galerieVentes.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/format-google-calendar.min.js"></script>
    <script src="common/nextAgenda.js"></script>
    </body>
</html>