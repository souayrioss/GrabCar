<!DOCTYPE html>
<html
>
<head>
	<title>GrapCar</title>
	<meta charset="utf-8">
	<meta name="Viewport"content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link href="{{ asset('/css/stylea.css') }}" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-band" href="#"><img src="img/logolocation.png"alt="Logo"width="150" height="50"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
                    <li style="padding: 0px 300px;">
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
					<li class="nav-item active" >
						<a class="nav-link" href="/accueil">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/nosVehicule">Nos véhicules</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/contactez">Contactez Nous</a>
                    </li>
				</ul>
			</div>
		</div>
	</nav>

<!--- Image  -->
		<div class="carpic">
        <img src="img/carpic.jpg" alt="Voiture" style="width: 100%; height: 600px;" >
		<div class="text">
			<h1><b>Trouvez une voiture en location</b></h1>
			<h2 class="lead" > Location de voitures au Maroc  avec meilleur prix!</h2>
			</div>
		</div>

<div class="aaaaa">
<div class="row">
	<div class="col-xs-12 col-sm-8 col-md-4">
		<div class="metrage">
		<img src="img/metrage.png"width="70"heigth="70" >
		<h3>Kilométrage illimité</h3>
		<p>Profitez de nos véhicules sans aucunes limites!</p>
		</div>
	</div>

	<div class="col-xs-12 col-sm-8 col-md-4">
		<div class="www">
		<img src="img/www.png"width="70"heigth="70" >
		<h3>Véhicules Neufs</h3>
		<p>Profitez de nos véhicules sans aucunes limites!</p>
		</div>
	</div>
	<div class="col-xs-12 col-sm-8 col-md-4">
		<div class="contact">
		<img src="img/contact.png"width="70"heigth="70" >
		<h3>24/7 Support et aide</h3>
		<p>Profitez de nos véhicules sans aucunes limites!</p>
	</div>
	</div>
</div>
</div>

<!--- Type Voiture -->
<div class="container-fluid padding">
	<h1>Les catégorie</h1><br>
<div class="row text-center padding">
    <div class="col-xs-12 col-sm-6 col-md-4">
		<div class="type1">
		<div class="routiere">
		<img src="img/cit.svg" style="width: 150px;">
		</div><br>
		<a href="#"style="color:black;"><h4><b>Citadine</b></h4></a>
	</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
	<div class="type1">
		<div class="routiere">
            <img src="img/ber.svg" style="width: 150px;">
		</div><br>
		<a href="#" style="color:black;"><h4><b>Routiére</b></h4></a>
		</div>
		</div>

	<div class="col-xs-12 col-sm-6 col-md-4">
	<div class="type1">
		<div class="routiere">
		<img src="img/fami.svg" style="width: 150px;">
		</div><br>
		<a href="#"style="color:black;"><h4><b>Familial</b></h4></a>
	</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="type1" style="padding: 0px 380px;">
		<div class="routiere">
		<img src="img/tou.svg" style="width: 150px;">
		</div><br>
		<a href="#"style="color:black;"><h4><b>Tout terrain</b></h4></a>
	</div>
	</div>
    <div class="col-xs-12 col-sm-6 col-md-4">
		<div class="type1" style="padding: 0px 400px;">
		<div class="routiere">
		<img src="img/lux.svg" style="width: 150px;">
		</div><br>
		<a href="#"style="color:black;"><h4><b>Lux</b></h4></a>
	</div>
	</div>

</div>
</div>
<!--- Marque Voiture -->
<div class="aaaaa">
    <div class="container-fluid ">
        <br>
        <h1 style="text-align: center;">Les Marques</h1>
        <br><br>
        <div class="row text-center ">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="type1">
                <div class="routiere">
                <img src="img/marque/laudi.svg" style="width: 150px;height: 150px;">
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="type1">
                <div class="routiere">
                    <img src="img/marque/lbmw.svg" style="width: 150px;height: 150px;">
                </div>
                </div>
                </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="type1">
                <div class="routiere">
                <img src="img/marque/lfiat.svg" style="width: 150px;height: 150px;">
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="type1">
                <div class="routiere">
                <img src="img/marque/ljeep.svg" style="width: 150px;height: 150px;">
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="type1">
                <div class="routiere">
                <img src="img/marque/lmerc.svg" style="width: 150px;height: 150px;">
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="type1">
                <div class="routiere">
                <img src="img/marque/lskoda.svg" style="width: 150px;height: 150px;">
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="type1">
                <div class="routiere">
                    <img src="img/marque/lmits.svg" style="width: 150px;height: 150px;">
                </div>
                </div>
                </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="type1">
                <div class="routiere">
                <img src="img/marque/lbentley.svg" style="width: 150px; height: 150px;">
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="type1">
                <div class="routiere">
                <img src="img/marque/lciter.svg" style="width: 150px;height: 150px;">
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="type1">
                <div class="routiere">
                <img src="img/marque/ldacia.svg" style="width: 150px;height: 150px;">
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="type1">
                <div class="routiere">
                <img src="img/marque/lpeug.svg" style="width: 150px; height: 150px;">
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="type1">
                <div class="routiere">
                    <img src="img/marque/lford.svg" style="width: 150px; height: 150px;">
                </div>
                </div>
                </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="type1">
                <div class="routiere">
                <img src="img/marque/lhyund.svg" style="width: 150px; height: 150px;">
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="type1">
                <div class="routiere">
                <img src="img/marque/lrenau.svg" style="width: 150px; height: 150px;">
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="type1">
                <div class="routiere">
                <img src="img/marque/lvolvo.svg" style="width: 150px; height: 150px;">
                </div>
            </div>
            </div>

        </div>
    </div>
</div>
<!--- comment ca marche -->

<div class="comment" style="width: 1519px; height: 500px;">
	<img src="img/marche.png" width="1519" height="500" >
	<div class="titre">
		<h1>Comment ça marche</h1>
	</div>
    <div class="text1">
        <h3><b>Choisissez votre véhicule<b></h3>
        <pre><b>Cherchez la véhicule de votre
    choix en quelque clics</b></pre>
    </div>
    <div class="text2">
        <h3><b>Réservez en quelques clics</b></h3>
        <pre><b>Réserverz la véhicule de votre
    choix en quelque clics</b></pre>
    </div>
    <div class="text3">
        <h3><b>Prenez le volant and GO !!<b></h3>
        <pre><b>Prenez Le volant du véhicule de votre
    choix  and Go!<b></pre>
    </div>
</div>
<!--- Cards -->


<!--- Two Column Section -->


<!--- Connect -->


<!--- Footer -->
	<div class="info">
		<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
        <div class="deff"><br><br>
					<h4><b>GrabCar</b></h4>
				<p><br>
					GrabCar Maroc met à votre disposition des <br>
					véhicules neufs à la location. Louer une <br>
					voiture au  Maroc  avec meilleur prix <br>
					n’a jamais été aussi simple.Louez<br>
				un voiture chez GrabCar et <br>
					évitez ainsi les intermédiaires, <br>
					vous profiterez alors des meilleurs prix
				</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="cont">
				<br><br>
					<h4><b>Contactez</b></h4>

				<p><br>
					GrabCar<br>
					Email: grabcar@contact.com<br>
					Tel: +212(0) 0602079183.<br>
					12 rue sabri boujemaa casablanca, Maroc.<br>
				</p>
			</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="local"><br><br>
				<h4><b>Top Destinations</b></h4>
				<p><br>
					MAROC:<br>
					Marrakech<br>
					Agadir<br>
					Dakhla<br>
					Tanger<br>
					Casablanca<br>
					Safi<br>

				</p>
			</div>
			</div>
		</div>
    </div>
    <hr>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


</body>

</html>




