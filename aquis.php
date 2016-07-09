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
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 align="center">
                                <a href="https://www.a-qui-s.fr" target="blank"><img class="assoc-logo" src="images/aquis.jpg"></a>
                            </h3>
                        </div>
                        <div class="col-md-12" align="center">
                            <img class="sponsor-img" src="images/aquisImg.jpg">
                        </div>
                        <div class="col-md-12">
                            <div class="contenu">
                                    CDPVN a un partenariat avec <a href="https://www.a-qui-s.fr" target="blank">A-Qui-S</a> qui fabrique des ETIQUETTES ET AUTOCOLLANTS PERSONNALISES pour marquer les vêtements, chaussures et toutes les fournitures (école, sport, loisirs…).<br>
                                    Votre achat peut contribuer à aider financièrement CDPVN! <br>
                                    Il suffit d'aller sur le site <a href="https://www.a-qui-s.fr" target="blank">www.a-qui-s.fr</a> et de compléter le code CAL0145 comme association référencée.<br>
                                    Vous bénéficierez de 5% de réduction immédiate et CDPVN recevra 15% du montant de la commande.<br>
                                    Pour cet été et pour la rentrée, n'hésitez pas!<br>
                                    A-qui-S livre tous ses produits en France et à l'étranger gratuitement.
                            </div>
                        </div>
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