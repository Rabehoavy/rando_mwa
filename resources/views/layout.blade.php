<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Rando MWA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cards.css') }}" rel="stylesheet">

        <script type="text/javascript" src="{{ asset('js/todolist.js') }}"></script>

        <!--Liens CDN Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!--Lien Font Awesome (Icônes)-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!--Polices-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    </head>

    <body>
        <!--Header-->
    <header>

    </header>

            @yield ('contenu')



    <footer>
    <div class="container text-center">
    
    <div class="">
    <h5 class="text-center text-white m-3">Nous contacter</h2>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <h6 class="m-3">Nous écrire</h6><br><br>
                                    </div>
                                    <div class="flip-box-back">
                                        <p class="m-3">rando@mwa.com</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>

                        <div class="col-md-3">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <h6 class="m-3">Nous appeler</h6><br><br>

                                    </div>
                                    <div class="flip-box-back">
                                        <p class="m-3">0262 92 10 72</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <h6 class="m-3">Nous trouver</h6>
                                    </div>
                                    <div class="flip-box-back">
                                        <p>14 rue Henri Cornu, Technopole,<br>97490 Sainte-Clotilde </p>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>   

    <div class="row socialmedia justify-content-center">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
       </div>
         
    <div class="text-center">
    <?php
        $mentions = ["2019 ©","Mentions légales", "Politique de confidentialité", "Conditions d'utilisation"];
            for ($i = 0; $i < count($mentions); ++$i) {
                echo '<a href="#" class="text-white">'.$mentions[$i].'</a><br>';
            }
            echo '<br><br>';
    ?>
    </div>
    
    
    
        </div>
    </footer>
    </body>
</html>