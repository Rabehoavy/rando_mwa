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

    

<!--Dans le nav bar on retrouve le logo, le nom du site, les boutons d'inscription et de connexion qui sont en modal-->
 <nav class= "navbar navbar-expand-lg navbar-dark fixed-top bg-transparent">  
<img class="mb-3" src="images/logo.png">  
<a class="navbar-brand" href="#">  
    <h2 style="color: #0da0b2">RANDO<span style="color: #00cc66">MWA</span></h2>  
</a>  
 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup  "
    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">  
    <span class="navbar-toggler-icon"></span>  
</button>  
<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">  
    <div class="navbar-nav">  
        <button id="bouton_inscription" data-toggle="modal" data-target="#formulaire" type="button" class="btn btn-primary btn-sm ml-4">INSCRIPTION</button>
         
    </div>  
    <div data-backdrop="false" class="modal fade" id="formulaire">   <!--ajout data-backdrop comme "false" car
        les formulaires ne pouvais pas être saisies, ils étaient recouvert d'un filtre noir-->
        <div class="modal-dialog">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h4 class="modal-title">Inscription :</h4>  
                    <button id="bouton_inscription" type="button" class="close" data-dismiss="modal">  
                        <span>×</span>  
                    </button>  
                </div>  
                <div class="modal-body row">  
                    <form class="col" action="test.php">  
                        <div class="form-group">  
                            <label for="nom" class="form-control-label">Nom</label>  
                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom">
                             
                        </div>  
                        <div class="form-group">  
                            <label for="nom" class="form-control-label">Prénom</label>  
                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre prénom">
                             
                        </div>  
                        <div class="form-group">  
                            <label for="nom" class="form-control-label">Numéro de téléphone</label>  
                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre numéro de téléphone">
                             
                        </div>  
                         
                        <div class="form-group">  
                            <label for="email" class="form-control-label">Email</label>  
                            <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email">
                             
                        </div>  
                        <div class="form-group">  
                            <label for="password" class="form-control-label">Mot de passe</label>  
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Votre mot de passe">  
                        </div>  
                        <div class="form-group">  
                            <label for="nom" class="form-control-label">Nom</label>  
                            <input type="password  " class="form-control  " name="password_confirmation  " id="password_confirmation  "
                                placeholder="Confirmez votre mot de passe  ">  
                        </div>  
                        <button type="submit  " class="btn btn-primary pull-right  ">Envoyer</button>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
    <div id="html">  
        <button id="bouton_inscription" data-toggle="modal" data-target="#connexion" type="button" class="btn btn-primary btn-sm ml-4">CONNEXION</button>
         
    </div>  
    <div data-backdrop="false" class="modal fade" id="connexion">  <!--ajout data-backdrop comme "false" car
        les formulaires ne pouvais pas être saisies, ils étaient recouvert d'un filtre noir-->
        <div class="modal-dialog">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h4 class="modal-title">Connexion :</h4>  
                    <button id="bouton_inscription" type="button" class="close" data-dismiss="modal">  
                        <span>×</span>  
                    </button>  
                </div>  
                <div class="modal-body row">  
                    <form class="col" action="test.php">} 
                        <div class="form-group">  
                            <label for="email" class="form-control-label">Email</label>  
                            <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email">
                             
                        </div>  
                        <div class="form-group">  
                            <label for="password" class="form-control-label">Mot de passe</label>  
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Votre mot de passe">  
                        </div>  
                        <button type="submit" class="btn btn-primary pull-right">Connexion</button>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</nav>  



<!-- HOME pour le header, le background-->
<header class="home" id="home">  
    <div class="container" style="z-index: -1">  
        <section>  
            <article>  
                <div class="row">  
                    <div class="offset-md-3 col-md-6">  
                         
                    </div>  
                </div>  
            </article>  
        </section>  
    </div>  
</header>  
 


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