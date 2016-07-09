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
                        <h3 align="center">
                            <a href="http://www.hscv.org/" target="blank"><img class="assoc-img" src="images/hscv.jpg"></a>
                        </h3>
                        <div class="contenu">
                            <p>HSCV est une organisation non-gouvernementale américaine, bien implantée localement et enregistrée au PACCOM, qui prend en charge des jeunes filles victimes de maltraitance ou dont l’environnent familial n’est pas sain. Les jeunes filles sont hébergées dans un centre d’accueil. <br>Actuellement, les pensionnaires sont au nombre de 15. Elles sont toutes scolarisées, encadrées par une responsable du centre et des travailleuses sociales L’endroit est très propre et organisé. Des activités sont également organisées le week-end, telles que des cours d’anglais, des activités artistiques ou des sorties en groupe. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script>
        document.getElementById('nav-projets').className += ' active';
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