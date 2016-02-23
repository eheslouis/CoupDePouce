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
        <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
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

<!-- ================ CENTER PART ================ -->
            <div class="row">
<!-- ================ Form ================ -->
                <div class="col-md-9 col-md-push-3">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <!-- Begin MailChimp Signup Form -->
                            <div id="mc_embed_signup">
                                <form action="//coupdepoucevn.us11.list-manage.com/subscribe/post?u=79f404bebc60ee16dbe676ab2&amp;id=3f2b68ac82" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <h1 class="text-center">S'incrire à la newsletter</h1>
                                        <div class="indicates-required">
                                            * champs obligatoires
                                        </div>
                                        <div class="mc-field-group">
                                            <label for="mce-EMAIL" class="col-sm-2 control-label">Email*</label>
                                            <!-- <label for="mce-EMAIL">Email  <span class="asterisk">*</span></label> -->
                                            <!-- <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"> -->

                                            <div class="col-sm-10">
                                                <input type="email" class="required email" id="mce-EMAIL" name="EMAIL" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                            </div>
                                        </div>
                                        <div class="mc-field-group">
                                            <label for="mce-FNAME" class="col-sm-2 control-label">Prénom </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="mce-FNAME" name="FNAME" placeholder="Prénom" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                                <?php echo "<p class='text-danger'>$errName</p>";?>
                                            </div>
                                            <!-- <label for="mce-FNAME">Prénom </label>
                                            <input type="text" value="" name="FNAME" class="" id="mce-FNAME"> -->
                                        </div>
                                        <div class="mc-field-group">
<!--                                             <label for="mce-LNAME">Nom </label>
                                            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
 -->
                                            <label for="mce-LNAME" class="col-sm-2 control-label">Nom </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="mce-LNAME" name="LNAME" placeholder="Nom" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                                <?php echo "<p class='text-danger'>$errName</p>";?>
                                            </div>
                                        </div>
                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_79f404bebc60ee16dbe676ab2_3f2b68ac82" tabindex="-1" value=""></div>
                                        <div class="col-sm-10" align="center">
                                            <div class="clear"><input type="submit" value="S'inscrire" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                            <!--End mc_embed_signup-->
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