<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="description" content="Coup de Pouce">
        <meta name="author" content="Elodie Heslouis">
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
                    <div class="row">
                        <div class="col-md-12">
                            <h1 align="center">La Fête du Têt</h1>
                            <p>
                                Le Têt est la fête du Nouvel An vietnamien, littéralement  « fête du premier jour de l'année ».  C'est la fête la plus importante de l’année et  a lieu le jour de la première nouvelle lune, au milieu de la période séparant le solstice d'hiver de l'équinoxe de printemps ; entre le 21 janvier et le 20 février. C'est l'occasion pour les familles d'aller à la pagode ou de visiter leurs parents et amis.
                            </p>
                            <h3>Comment ne pas fêter cet événement incontournable au Vietnam ?</h3>
                            <p>
                                A cette occasion, Coup de Pouce organise un grand déjeuner, avec un beau spectacle, et offre bien sûr, un panier du Têt, où les familles retrouvent les produits spécifiques de cette fête comme le Banh Chung, le thé, les bambous séchés, les fruits confits, etc…<br>Les enfants ne sont pas oubliés et reçoivent avec fierté leurs étrennes ! <br>Cette fête est entièrement financée par Coup de Pouce, aidée de généreux donateurs privés et d'entreprises.<br>
                            </p>
                            <h3>Fête du Tết 2016 des enfants parrainés</h3>
                            <p>
                                Dimanche 24 Janvier 2016<br>Chuc Mung Nam Moi ! <br>C'est ainsi que les familles parrainées ont été accueillies au restaurant Sum Villa pour la traditionnelle Fête du Têt organisée par Coup de Pouce. Nouveauté cette année, les enfants du programme de Bourse étaient aussi de la fête. Après les discours officiels, place au spectacle avec des matchs d'improvisation organisés avec les lycéens du lycée Hanoi-Amsterdam et l'Atelier Théâtre de Hanoi. Les enfants ont même pu participer, ce qui a déclenché de nombreux fous-rires dans le public des parents.<br>Après un déjeuner copieux, chaque enfant a reçu des étrennes et le panier du Têt, contenant les spécialités vietnamiennes de cette grande fête.<br>Merci à AMICA Travel, aux donateurs privés et au bénévoles d'avoir largement contribué au succès de cette journée : les sourires des enfants en sont la plus belle illustration !
                            </p>
                        </div>
                        <div class="row">
                            <?php
                            include "galerieGeneric.php";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script>
        document.getElementById('nav-parrainage').className += ' active';
    </script>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="galerieParrainage.js"></script>
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/format-google-calendar.min.js"></script>
    <script src="common/nextAgenda.js"></script>
    </body>
</html>