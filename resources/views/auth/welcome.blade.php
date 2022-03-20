<!DOCTYPE html>
<html>
<head>
	<title>Grapcar/sign up</title>
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action = "/create" method = "post">
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
                                <input type="text" class="input" name="username">
                                <span class="text-danger">@error('username'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="input-div one">
                        <div class="i">
                                <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                                <h6>Nom complet</h6>
                                <input type="text" class="input" name="fullName">
                                <span class="text-danger">@error('fullName'){{$message}}@enderror</span>
                            </div>
                    </div>
                    <div class="input-div one">
                        <div class="i">
                                <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                                <h6>Telephone</h6>
                                <input type="text" class="input" name="phone">
                                <span class="text-danger">@error('phone'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="input-div one">
                            <div class="i">
                                    <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                    <h6>Adrrsse</h6>
                                    <input type="text" class="input" name="address">
                                    <span class="text-danger">@error('address'){{$message}}@enderror</span>
                            </div>
                    </div>
                    <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h6>E-Mail</h6>
                            <input type="text" class="input" name="email">
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
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
        <button class="btn btn-success mt-3" value="Sing Up">s'identifier</button>
        <a href="/login">s'incrire</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="/js/main.js"></script>
</body>
</html>
