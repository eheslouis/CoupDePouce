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
        <link href="css/CA.css" rel="stylesheet">
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
                <div class="col-md-9 col-md-push-3">
                    <div>
                        Un nouveau Conseil d'Administration (CA) a été élu pour une durée d'un an le mardi 24 mars 2015 au cours de notre Assemblée Générale.<br><br>En voici sa composition :
                    </div>
                    <div class="row">
                        <div class="col-md-4 tableCA">
                            <div class="nom">
                                Anne Rozo
                            </div>
                            <div class="job">
                                Présidente
                            </div>
                            <div class="photo">
                                <img src="images/CA/presidente.jpg">
                            </div>
                        </div>
                        <div class="col-md-4 tableCA">
                            <div class="nom">
                                Nathalie Populus
                            </div>
                            <div class="job">
                                Vice Présidente
                            </div>
                            <div class="photo">
                                <img src="images/CA/vicepresidente.jpg">
                            </div>
                        </div>
                        <div class="col-md-4 tableCA">
                            <div class="nom">
                                Anne-Claire Bremard
                            </div>
                            <div class="job">
                                Trésorière
                            </div>
                            <div class="photo">
                                <img src="images/CA/tresoriere.jpg">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 tableCA">
                            <div class="nom">
                                Margot Biaggi
                            </div>
                            <div class="job">
                                Secrétaire
                            </div>
                            <div class="photo">
                                <img src="images/CA/secretaire.jpg">
                            </div>
                        </div>
                        <div class="col-md-4 tableCA">
                            <div class="nom">
                                Annie Bocquet
                            </div>
                            <div class="job">
                                Responsable «Parrainages»
                            </div>
                            <div class="photo">
                                <img src="images/CA/parrainage1.jpg">
                            </div>
                        </div>
                        <div class="col-md-4 tableCA">
                            <div class="nom">
                                Laure Berardi
                            </div>
                            <div class="job">
                                Responsable «Parrainages»
                            </div>
                            <div class="photo">
                                <img src="images/CA/parrainage2.jpg">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 tableCA">
                            <div class="nom">
                                Catherine Rossi
                            </div>
                            <div class="job">
                                Relations avec l'Ambassade
                            </div>
                            <div class="photo">
                                <img src="images/CA/relationAmbassade.jpg">
                            </div>
                        </div>
                        <div class="col-md-4 tableCA">
                            <div class="nom">
                                Elodie Heslouis
                            </div>
                            <div class="job">
                                Responsable Communication
                            </div>
                            <div class="photo">
                                <img src="images/CA/communication.jpg">
                            </div>
                        </div>
                        <div class="col-md-4 tableCA">
                            <div class="nom">
                                Marie Champion
                            </div>
                            <div class="job">
                                Responsable Marketing
                            </div>
                            <div class="photo">
                                <img src="images/CA/marketing.jpg">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 tableCA">
                            <div class="nom">
                                Marité Sauthier
                            </div>
                            <div class="job">
                                Représentante «France»
                            </div>
                            <div class="photo">
                                <img src="images/CA/representanteFrance.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    include "common/leftColumn.php";
                ?>
            </div>
            <?php
                include "common/footer.php";
            ?>
        </div>

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