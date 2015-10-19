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
        <!-- Custom styles for this template -->
        <link href="css/main.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <?php
                include "common/nextAgenda.php";
            ?>
            <?php
                include "common/navbar.php";
            ?>

<!-- ================ CAROUSEL ================ -->
            <div class="row">
                <div class="col-md-12">
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
                                <img src="images/test1.jpg" alt="first slide">
                                <div class="carousel-caption">
                                    <h1>example1</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita sapiente officiis beatae, ut consequuntur. Quos minus neque eius, nemo sunt excepturi eveniet amet veritatis voluptatibus corporis ea, blanditiis porro ad!</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/test2.jpg" alt="second slide">
                                <div class="carousel-caption">
                                    <h1>example2</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita sapiente officiis beatae, ut consequuntur. Quos minus neque eius, nemo sunt excepturi eveniet amet veritatis voluptatibus corporis ea, blanditiis porro ad!</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/test3.jpg" alt="third slide">
                                <div class="carousel-caption">
                                    <h1>example3</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita sapiente officiis beatae, ut consequuntur. Quos minus neque eius, nemo sunt excepturi eveniet amet veritatis voluptatibus corporis ea, blanditiis porro ad!</p>
                                </div>
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

<!-- ================ PARTENAIRES ================ -->
            <div class="row">
                <div class="col-md-12 col-centered">
                    <div class="partenaires">
                        <a href="http://www.ambafrance-vn.org/"><img src="http://www.ambafrance-vn.org/plugins-dist/mae/img/skin/logo-mae.png"></a>
                        <a href="http://www.axa.com/"><img src="https://www.axa.fr/etc/designs/axa/axa-fr-desktop/clientlib_publish/img/logo/logo-axa.png"></a>
                        <a href="http://www.amicaledesfrancophonesauvietnam.org/"><img src="http://www.amicaledesfrancophonesauvietnam.org/_/rsrc/1371887105023/config/petit%20logo%20new%20%282%29.jpg"></a>
                        <a href="https://www.amica-travel.com/"><img src="https://www.amica-travel.com/assets/img/logo.png"></a>
                        <a href="http://www.hanoiaccueil.org/"><img src="http://www.hanoiaccueil.org/img/logo_index_v2.png"></a>
                        <a href="http://www.cirad.fr/"><img src="http://www.cirad.fr/extension/cirad_fr/design/cirad_fr/images/logo_cirad.gif"></a>
                        <a href="http://www.group8asia.com/"><img src="http://www.group8asia.com/wp-content/themes/wordplus/images/group8asia_logo.png"></a>
                        <a href="http://hanoi-iwc.com/"><img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xft1/v/t1.0-1/c2.0.160.160/p160x160/10489884_250257995168322_8193770665747669533_n.jpg?oh=e556e02347163370f28fec47b5c60e98&oe=5605A458&__gda__=1442951989_61eb803c2fb91e0a5a652ab76ac79730"></a>
                        <a href="http://www.infocom-group.fr/"><img src="http://www.infocom-group.fr/wp-content/uploads/2014/04/Entete-1.jpg"></a>
                        <a href="http://www.ifhanoi-lespace.com/"><img src="http://www.ifhanoi-lespace.com/image-ccf/fr/institut-francais-hanoi.png"></a>
                        <a href="http://www.lfay.com.vn/"><img src="http://www.lfay.com.vn/local/cache-vignettes/L74xH90/siteon0-55027.jpg"></a>
                        <a href="http://www.sofitel.com/fr/hotel-3553-sofitel-plaza-hanoi/index.shtml"><img src="http://www.sofitel.com/imagerie/common/logo-sofitel.png"></a>
                        <a href="http://www.talents-partage.org/"><img src="http://www.talents-partage.org/templates/default/images/logo-talents-partage.png"></a>
                        <a href="http://www.total.com/"><img src="http://www.total.com/sites/default/files/styles/logo/public/total_brand_block_rgb_0.png?itok=ANWCDZP_"></a>
                        <a href="http://vietnam.marcovasco.fr/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPQAAAAjCAMAAACUytdbAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NEI5NTkzQ0YyMDk1MTFFNEEwMTBDNTkzQjYyRDMwQzYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NEI5NTkzRDAyMDk1MTFFNEEwMTBDNTkzQjYyRDMwQzYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo0Qjk1OTNDRDIwOTUxMUU0QTAxMEM1OTNCNjJEMzBDNiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo0Qjk1OTNDRTIwOTUxMUU0QTAxMEM1OTNCNjJEMzBDNiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PuemDT0AAAHIUExURQAAAP///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////7V0HAQAAACXdFJOUwAAAQIDBAUGBwgKDA0ODxARFBUXGBkaHB0eICEiIyYoKSssMDM1ODk6Ozw9QkNERkdIS0xPUlRVV1hZXGBiZGVmaGpsbW5vcHR3eXt+gIOGiIuMjY6Qk5eYmZyen6ChoqOlqKqrra+0tri7vb/AwcLDxcbIy8zO0dPW2Nrc3d7g4uPk5ujp6uvt7u/w8fL09vf5+vv8/f5K5YN7AAAFgElEQVRo3uWZ+78WQxzHPxPplGQjIktiq4OsDrJK8URh5PJEZNzCKgzpchq5TUXEHJHS8fl3/bCz93lOr/L89Jif9vZ8Zt8z3+s+EKjG0t1H5shzx/c9thyTO4QQqKAX7zzDclw+9vKG6ycfetG2H9ge595+cMKh188yMI5vmmDoG9+aZ3i8e9OkQm88zZHj29Wd3yjakJQkx/deCVX/Uj5W6HUXgriHPvyHJL9f2YWm7CtFHCc0DKPOlZzJWKE/CTJfnMLzJMmjizvQzvWVhnTjhM66CxtRj9W8V1wMQn8HLCmO9nSgZX+rYxo1TmhY113UbKzQT4SdeS+AYjku3tmGhnVRz9HT8UJLDlrnzo43kL0ehr4HuNUf7u9ADzjsRhmN8UJHzjRPB501+M/QX3i0w7seeXjwvvNnnwLY6o/PT7WhYRi3dDSTEjpRxpG0WsbV45HUrojHkdSOtFrWppIqQ9KotGvPad/au+JAogxJm9fGnylDupZeewohBMSpwoafLB6YeuZHkry0DsDn5a4/2oHO2iklZQ4PPST1UEqpDAsvVETqaHI19HeVlMrQ+bCQGLp8KIe5o0naUUI349owKI4hXT6UUlnqYhlTS9vR604hhIAoHHd3NcOyN+bJ5wCsq0z91Q40dGurNWN/XVKVe5gYJgAUE1de09XdJC/SbupsuUeZdemoHKUZBcVrP0sLd8hoS5GBLWylN4UQAoIkeXYJgPt2TC8CgA0nXgGADyrog13otFkqFPuuCKDpiQmHRS0jq19mnUgVO13beaRdHC5QfGHSF7em4fUpkLKpZ1wUmqKGPgBg+zx5crp64v7LFfThLjR0Yx8KD1cEklYy82uhw2WWsYBupYHI6XCBUmx6QLyhGHMImJZeQhmaQggBMUeSLwL4lSTnd5UPHKsj+WwPOqldztuYIhClUbOeUK3tVe0qK079djWDVxIqUHxhEhC3jUSWxkg7BUQah6YQQkB8SZIvAPA7+6yXPVVDf9aDhqqiq8/azZQVxXGcag9dvqo1/WScdDKfDBUoncKkIT6gyeLReuEphBAQu8uqy5Akj9zt7y9/r4JWfeiYppSVTQsYmjLp5bWrFwbZ6xh6qb3tAL5AiarCpCeOQZHBlMyikF5wCiEExMpL3qcfsHQHZxoPbD7pp9gZkPHrH5WVuGKVVAZZmsSVT18ztC9QquKsLw4gk0pbksyjq4HGIZJnr2vdunfPDQCwaPVdd+wluTYg4zegeiVFYMA86gUyXKt5+wKltPKAeB0gMkUbXYV5YwvJtttM/8ajt/vjVeQ3wbWTHDRtT7GIyCOhVbuMk4wXDmS+QMnKhwLi7cZskHb0rB4ZyDB1nuRPq+o7T10g+cu24mRN27prisi5ZpBR7Fhw0oFufwaInLlCyvK5SpeRsC/etl0qmFamzzgYmbKAd0jy9EZ/4+YD3pNP7LgNUw8d5tmlYS+RlFU4K6633lp3oKGa1pszBZJO5ZD0v6DU2b0vnjXtM+YQCU2tFzuD0BQeetonpqfXr1k7s2+u229tGRUarMvrtkARUHUzlBnrOtDImfudSHSxAFmrRuy3zJp1FRQQ1/VPIs0YyFjpSVdse2+K8sPgLBcYH42MhwM2ugJFINK0uZRSacc8MibN2iYoSaOkVJbl245sOEoLrWcIiEe6aDik0iwq98QWetpRxws0HABmFmA2y0YnAdOIPMX1LLdV75c62o7f+dYyH+BKrWVpTM0OsycOpMo40tl8EDX1nFHJgq0lmk1kb5y8ZWI/9q+ZG8H81YoJ/odj5u8g8/4lE/1f1vYA8u9bJ/u/LOClHvPB1Zh0aLzWRv56MzD50Nj+R0X818ebgP8FNFbK2T85//ORNx9fBkwy9L+J3pTHYqU6DwAAAABJRU5ErkJggg=="></a>
                    </div>
                </div>
            </div>



        </div>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    </body>
</html>