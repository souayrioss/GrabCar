<!DOCTYPE html>
<html>
    <head>
    <title>GrapCar</title>
    <meta charset="utf-8">
    <meta name="Viewport"content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/fontAwesome.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/hero-slider.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/templatemo-main.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/owl-carousel.css') }}" rel="stylesheet">
    </head>
<!--
Vanilla Template
https://templatemo.com/tm-526-vanilla
-->
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-band" href="#"><img src="img/logolocation.png"alt="Logo"width="150" height="50"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li style="padding: 0px 400px;">
                        <div class="dropdown">
                            <a class="nav-link" href="#"><img src="img/profil.svg"alt="Logo"width="35" height="30"></a>
                            <div class="dropdown-content">
                                    <a>Client</a>
                                    <a class="nav-link">{{session('username')}}</a>
                                    <a class="nav-link" href={{"profile/".session('username')}}>Profil</a>
                                    <a class="nav-link" href="/login">deconectee</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item " >
                        <a class="nav-link" href="/accueil">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nosVehicule">Nos véhicules</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/contactez">Contactez Nous</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="first-content">
                <h1>CONTACTEZ_NOUS</h1>
            </div>
        </div>
    </div>


    <div class="service-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left-text">
                        <h4>Plus d'info </h4>
                        <div class="line-dec"></div>
                        <p style="font-size: 16px;">GrabCar Maroc met à votre disposition des
                    véhicules neufs à la location. Louer une
                    voiture au  Maroc  avec meilleur prix
                    n’a jamais été aussi simple.Louez
                un voiture chez GrabCar et
                    évitez ainsi les intermédiaires,
                    vous profiterez alors des meilleurs prix</p>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Telephone</h4>
                                <div class="line-dec"></div>
                                <p>+2126 02079183</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>E-mail</h4>
                                <div class="line-dec"></div>
                                <p>grabcar@contact.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Adresse</h4>
                                <div class="line-dec"></div>
                                <p>12 rue sabri boujemaa casablanca, Maroc.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Social media</h4>
                                <div class="line-dec"></div>
                                <p>FaceBook/Instagram/Twitter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-snapchat"></i></a></li>
                    </ul>
                    <p>Grab Car © 2021 </p>
                </div>
            </div>
        </div>
    </footer>



</body>
</html>
