<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Payments</title>
    <link href="{{ asset('/css/payment.css') }}" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>
<body>
	<div class="wrapper">
		<h2>Payment Formulaire</h2>
		<form  action="/payer" method="post" >
        @csrf
		<h4>Informations</h4>
		<div class="input-group">
			<div class="input-box">
				<input type="text" name="nameCl" placeholder="Nom" required class="name">
				<i class="fa fa-user icon"></i>
			</div>
			<div class="input-box">
				<input type="text" name="phoneCl" placeholder="Telephone" required class="name">
				<i class="fa fa-phone icon"></i>
			</div>
		</div>
		<div class="input-group">
			<div class="input-box">
				<input type="text" name="emailCl" placeholder="Email" required class="name">
				<i class="fa fa-envelope icon"></i>
			</div>
		</div>
		<div class="input-group">
			<div class="input-box">
				<input type="text" name="addressCl" placeholder="Adresse" required class="name">
				<i class="fa fa-map-marker icon"></i>
			</div>
		</div>
		<div class="input-group">
			<div class="input-box">
				<h4>Reservation</h4>
				<input type="datetime-local" name="dateCommande" required class="name">

			</div>
		</div>
		<div class="input-group">
			<div class="input-box" >
				<input id="nbjours" name="nbjours" type="text" placeholder="Nombre de jours" required class="dob">
			</div>
		</div>
		<div class="input-group">
			<div class="input-box">
				<h4>Commande Details</h4>
			</div>
		</div>
        @foreach ($voiture as $voi)
		<div class="input-group">
			<div class="input-box">
				<input  type="text" name="categorieVoi" value="{{$voi->categorie}}"  required class="name" >
			</div>
			<div class="input-box">
				<input type="text" name="typeVoi" value="{{$voi->type}}"   required class="name" >

			</div>
		</div>
		<div class="input-group">
			<div class="input-box">
				<input type="text" name="colorVoi" value="{{$voi->color}}"   required class="name" >
			</div>
			<div class="input-box">
				<input type="text" name="prixTotal" id="prix" value="{{$voi->prix}}"  required class="name" >
			</div>
		</div>

		<h4>Payment Details</h4>
		<div class="input-group">
			<div class="input-box">
				<input type="radio"  checked class="radio">
				<label><span><i class="fa fa-cc-visa"><i class="fa fa-cc-mastercard"></i></i>Credit Card</span></label>
			</div>
		</div>
		<div class="input-group">
			<div class="input-box">
				<input type="text"  name="numCard" placeholder="Card Number" required class="name">
				<i class="fa fa-credit-card icon"></i>
			</div>
		</div>
		<div class="input-group">
			<div class="input-box">
				<input  type="tel"  name="cvcCard" placeholder="Card CVC" required class="name">
				<i class="fa fa-user icon"></i>
			</div>
			<div class="input-box">
				<input type="text"  name="dd" placeholder="DD" required class="dob">
				<input type="text" name="yy"  placeholder="YY" required class="dob">
			</div>
		</div>
        <div class="input-group">
			<div class="input-box">
				<input type="tel"  name="prixTotal" id="prixtotal"  required class="dob" disabled>
				<i class="fa fa-money icon" ></i>
			</div>
		</div>
        @endforeach
		<div class="input-group">
			<div class="input-box">
				<button  type="submit" class="button" value="Payer">Pay Now</button>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#nbjours,#prix").keyup(function(){
    $("#prixtotal").val($("#nbjours").val() * $("#prix").val());
    });

});
</script>
</body>
</html>
