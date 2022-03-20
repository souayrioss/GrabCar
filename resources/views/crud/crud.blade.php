
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script><link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<title>Crud Operation in Php Using OOP</title>

</head>
<body>

<img class="wave" src="img/wave.png">
<div class="container">
    <div class="img">
        <img src="img/durc.svg">
    </div>
    <div class="login-content">
        <form action="/insert" method="post" >
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
            <img src="img/azt.svg">
        <div class="div">
            <input type="text" name="matricule" placeholder=" Entrer matricule" class="form-control mb-3" >
            <span class="text-danger">@error('matricule'){{$message}}@enderror</span>
        </div>
        <div class="div">
            <select style="padding: 8px 142px;" name="categorie">
                <option value="inconnu">Selectioner une categorie :</option>
                <option value="Citadine">Citadine </option>
                <option value="Berline/Routiére">Berline/Routiére</option>
                <option value="Familiale">Familiale</option>
                <option value="Tout Terrain ">Tout Terrain </option>
                <option value="LuX">LuX </option>
                </select>
                <span class="text-danger">@error('categorie'){{$message}}@enderror</span>
            </div>
            <br>
            <div class="div">
            <input type="text" name="type" placeholder=" Entrer type" class="form-control mb-3" >
            <span class="text-danger">@error('type'){{$message}}@enderror</span>
        </div>
        <div class="div">
            <input type="text" name="color" placeholder=" Entrer color" class="form-control mb-3" >
            <span class="text-danger">@error('color'){{$message}}@enderror</span>
        </div>
        <div class="div">
            <input type="text" name="prix" placeholder=" Entrer prix" class="form-control mb-3" >
            <span class="text-danger">@error('prix'){{$message}}@enderror</span>
        </div>
        <div class="div">
            <input type="text" name="stock" placeholder=" Entrer stock" class="form-control mb-3" >
            <span class="text-danger">@error('stock'){{$message}}@enderror</span>
        </div>

        <div class="div">
            <div class="custom-file">
            <input type="file" name="image" placeholder=" Entrer URL " class="form-control mb-3" >
            <span class="text-danger">@error('image'){{$message}}@enderror</span>
            </div>
        </div>
            <button type="submit" class="btn  mt-4" value="Save">Save</button>
        <a href="/view" class="btn ">Les voitures</a>
        <a href="{{ url()->previous() }}" class="btn ">Retour</a>
        </form>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
