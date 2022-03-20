<!DOCTYPE html>
<html>
<head>
	<title>Nos Véhicule</title>
		<meta charset="utf-8">
	<meta name="Viewport"content="width=device-width, initial-scale=1">
	<title>GrapCar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="{{ asset('/css/vehicule.css') }}" rel="stylesheet">
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
                <li class="nav-item " >
                    <a class="nav-link" href="/accueil">Accueil</a>
                </li>
                <li class="nav-item  active">
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

		<div class="nosvehicule">
            <img src="img/nosvehicule.jpg" alt="Voiture" style="width: 100%; height: 800px;" >
            <div class="text">
                <h1>Nos véhicules</h1>
            </div>
		</div>


<!-- Portfolio Gallery Grid --><!-- Portfolio Gallery Grid --><!-- Portfolio Gallery Grid --><!-- Portfolio Gallery Grid -->
<div class="Filter">

<div class="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Voir tous</button>
    <button class="btn" onclick="filterSelection('Citadine')">Citadine</button>
    <button class="btn" onclick="filterSelection('Routiére')"> Berline/Routiére</button>
    <button class="btn" onclick="filterSelection('Familiale')"> Familiale</button>
    <button class="btn" onclick="filterSelection('Tout_Terrain')"> Tout Terrain</button>
    <button class="btn" onclick="filterSelection('LuX')"> LuX</button>
</div>
</div>
<!-- Portfolio Gallery Grid -->
<div class="row">
    @foreach ($voiture as $voi)
    <div class="column {{$voi->categorie}}">
        <div class="content">
            <img src="img/voiture/{{$voi->image}}" alt="Voiture" style="width:100%; height: 350px;"><br><br>
            <h4 style="text-align: center;"><b>{{$voi->type}}</b></h4>
            <h5 style="text-align: center;"><b>Color:</b>{{$voi->color}} // <b>Prix:</b>{{$voi->prix}}.00 DH // <b>En Stock:</b>{{$voi->stock}} </h5>
            <div class="myBtnContainer"> <br>
            <a  class="button btn-primary"  href={{"payment/".$voi->idVoiture}} ><b>Resever</b></a>
        </div>
        </div>
    </div>
    @endforeach
</div>
<script>
filterSelection("all")
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
    arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    });
}
</script>
</body>
</html>
