<!DOCTYPE html>
<html>
    <head>
        <title>GrapCar</title>
        <meta charset="utf-8">
        <meta name="Viewport"content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link href="{{ asset('/css/Vehicule.css') }}" rel="stylesheet">
    </head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-band" href="#"><img src="img/logolocation.png"alt="Logo"width="150" height="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li style="padding: 0px 250px;">
                    <div class="dropdown">
                        <a class="nav-link" href="#"><img src="img/profil.svg"alt="Logo"width="35" height="30"></a>
                        <div class="dropdown-content">
                                <a>Admin</a>
                                <a class="nav-link">{{session('username')}}</a>
                                <a class="nav-link" href={{"profile/".session('username')}}>Profil</a>
                                <a class="nav-link" href="/login">deconectee</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item " >
                    <a class="nav-link" href="/accadmin">Accueil</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="/vehadmin">Nos véhicules</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/commande">Les commandes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/crud">Crud</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper">
<div class="container center_div">

@foreach ($commande as $com)
<div class="row">

        <div class="content">
            <h4 style="text-align: center;"><b>la Commande Nummero {{$com->id}}</b></h4>
            <h5 style="text-align: center;"><b>Informations </b>nom:{{$com->nameCl}}, phone:{{$com->phoneCl}}, email:{{$com->emailCl}}, Adresse:{{$com->addressCl}} </h5>
            <h5 style="text-align: center;"><b>Reservation </b>Date:{{$com->dateCommande}}, nombre de jours:{{$com->nbJours}} </h5>
            <h5 style="text-align: center;"><b>Commande Details </b>Categorie:{{$com->categorieVoi}}, type:{{$com->typeVoi}}, color:{{$com->colorVoi}}, Prix:{{$com->prixtotal}} </h5>
        </div>

</div>
@endforeach
<br>
</div>

</div>

</body>
</html>
