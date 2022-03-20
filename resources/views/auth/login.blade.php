<!DOCTYPE html>
<html>
<head>
	<title>GrapCar/Login</title>
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/log.svg">
		</div>
		<div class="login-content">
			<form action="/check" method = "post" >
                @csrf
                <div class="results">
                    @if (Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                </div>
				<img src="img/avatar.svg">
				<h2 class="title">Bonjour</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                                <h6>User Name</h6>
                                <input type="text" class="input" name="username" >
                                <span class="text-danger">@error('username'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="input-div pass">
                    <div class="i">
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                            <h6>Mots de passe</h6>
                            <input type="password" class="input" name="password">
                            <span class="text-danger">@error('password'){{$message}}@enderror</span>
                    </div>
                    </div>
            <button class="btn btn-success mt-3" value="Login">s'incrire</button>
                <a href="/welcome">s'identifier</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
