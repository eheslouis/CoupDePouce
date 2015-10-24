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
        <!-- Custom styles for this template -->
        <link href="css/main.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <?php
                include "common/nextAgenda.php";
                echo "<div>".$thedifferentpart."</div>";
            ?>
            <?php
                include "common/navbar.php";
                echo "<div>".$thedifferentpart."</div>";
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