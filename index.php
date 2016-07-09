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
        <link href="css/carousel.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
                <?php
                    include "common/nextAgenda.php";
                ?>
                <?php
                    include "common/navbar.php";
                ?>

<!-- ================ CENTER PART ================ -->
            <div class="row">

<!-- ================ CAROUSEL ================ -->
				<div class="col-md-1"></div>
                <div class="col-md-10">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <a href="parrainage.php">
                                    <img src="images/carousel/parrainage3.jpg" alt="first slide">
                                    <div class="carousel-caption">
                                        <h1>Le Parrainage</h1>
                                        <p>L'éducation est une priorité. Parrainer un enfant, c’est lui offrir la chance d'aller à l'école, sans que cela ne soit une charge pour sa famille, mais une aide.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="habitat.php">
                                	<!-- <div class="carousel-image"> -->
                                    	<img src="images/carousel/meo-vac1.jpg" alt="second slide">
                                    <!-- </div> -->
                                    <div class="carousel-caption">
                                        <h1>Amélioration de l'habitat</h1>
                                        <p>Compte-tenu des situations très précaires dans lesquelles les familles parrainées habitent, Coup de Pouce finance des travaux pour améliorer leurs conditions sanitaires.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="bourse.php">
                                    <img src="images/carousel/bourseetude.jpg" alt="third slide">
                                    <div class="carousel-caption">
                                        <h1>Bourse d'étude</h1>
                                        <p>En faisant des études, l'enfant s'assure, et assure à ses proches, des conditions sociables plus stables et donc un meilleur avenir.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-9 col-sm-push-3">
	                <p style="font-size:16px"><br><br>Coup de Pouce est une association française loi 1901, composée de bénévoles et reconnue au Vietnam auprès du Paccom (People’s Aid Coordinating Committee) depuis 2000. <br> Elle aide les familles défavorisées de Hanoï, et plus particulièrement les enfants, via plusieurs projets dont le parrainage, l'amélioration de l'habitat et la bourse d'études.</p>
                </div>
                <?php
                include "common/leftColumn.php";
                ?>
            </div>
        </div>

    <script>
        document.getElementById('nav-accueil').className += ' active';
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