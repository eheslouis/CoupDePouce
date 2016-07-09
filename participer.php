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
                <div class="col-md-9 col-md-push-3">
                    <a name="adherer"></a>
                    <div class="row">
                        <div class="col-md-9">
                            <h3>
                                Adhérer
                            </h3>
                            <div class="contenu">
                                Pour devenir membre de l'Association Coup de Pouce Vietnam, il suffit d'adhérer.<br>La cotisation annuelle est de 250 000 VND (au Vietnam) ou 10 Euros (hors Vietnam). Chaque membre est invité s'il le souhaite et s'il le peut à voter pour les projets de l'Association à chaque réunion mensuelle.<br><a href="documents/Adhesion-Formulaire.pdf" target="blank">Ci-joint le formulaire d'adhésion</a>.<br>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- <img src="images/SOB.jpg"> -->
                        </div>
                    </div>
                    <a name="parrainer"></a>
                    <div class="row">
                        <div class="col-md-9">
                            <h3>
                                Parrainer un enfant
                            </h3>
                            <div class="contenu">
                            Les personnes souhaitant parrainer un enfant peuvent envoyer un email de demande à l'adresse suivante : <a href="mailto:cdpvn.parrainages@hotmail.fr">cdpvn.parrainages@hotmail.fr</a><br><a href="parrainage.php">En savoir plus...</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- <img src="images/SOB.jpg"> -->
                        </div>
                    </div>
                    <a name="rejoindre"></a>
                    <div class="row">
                        <div class="col-md-9">
                            <h3>
                                Nous Rejoindre
                            </h3>
                            <div class="contenu">
                                Les membres désirant participer à une action, s’investir dans un projet, doivent entrer en contact avec la ou le responsable de l’activité ou du projet, s’informer des tâches à accomplir et proposer leurs compétences et leur disponibilité.<br>Vous pouvez envoyer un mail à:<a href="mailto:coupdepoucevietnam@gmail.com"> coupdepoucevietnam@gmail.com</a><br>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- <img src="images/SOB.jpg"> -->
                        </div>
                    </div>
                    <a name="don"></a>
                    <div class="row">
                        <div class="col-md-9">
                            <h3>
                                Faire un Don
                            </h3>
                            <div class="contenu">
                                Même minime votre aide ajoutée aux autres nous permettra de réaliser ou de finaliser un projet pour les plus démunis. Vous pouvez nous adresser un don par chèque ou virement bancaire en France ou au Vietnam.<br>Vous pouvez télécharger notre <a href="documents\Don-Formulaire.pdf" target="blank">formulaire de don</a>.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- <img src="images/SOB.jpg"> -->
                        </div>
                    </div>
                    <a name="projet"></a>
                    <div class="row">
                        <div class="col-md-9">
                            <h3>
                                Proposer une action ou un projet
                            </h3>
                            <div class="contenu">
                            Les personnes désirant proposer une action ou un projet peuvent le faire verbalement au cours d’une réunion mensuelle ou informer le bureau de Coup de Pouce Vietnam par mail: <a href="mailto:coupdepoucevietnam@gmail.com"> coupdepoucevietnam@gmail.com</a>.<br>Ensuite, il faut présenter un projet écrit, détaillé et chiffré au bureau (bénéficiaires, lieu, date, durée, description de l’action, mise en œuvre…). Ce projet doit se situer dans la région de Hanoi.<br>Enfin, c’est l’assemblée réunie chaque mois qui vote le projet, s’il correspond aux domaines d’activité de Coup de Pouce Vietnam (l'association ne finance pas de projets concernant des soins médicaux).<br>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- <img src="images/SOB.jpg"> -->
                        </div>
                    </div>
                </div>
                <?php
                    include "common/leftColumn.php";
                ?>
            </div>
        </div>

    <script>
        document.getElementById('nav-soutenir').className += ' active';
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