
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<title>Crud Operation in Php Using OOP</title>

</head>
<body>
    <div class="wrapper">


    <div class="row">
            <div class="col-md-4 col-md-offset-6">
                <div class="login-content">
                    <form action="{{route('update')}}" method="POST" >
                        @csrf
                        @foreach ($voiture as $voi)
                        {{-- <fieldset disabled>
                    <div class="div">
                        <input type="text" name="idVoiture" value="{{$voi->idVoiture}}" class="form-control input-lg mb-3" >
                    </div>
                </fieldset> --}}
                <input type="hidden" name="idVoiture" value="{{$voi->idVoiture}}" class="form-control input-lg mb-3" >
                    <div class="div">
                        <input type="text" name="matricule" value="{{$voi->matricule}}" class="form-control mb-3" >
                    </div>
                    <div class="div">
                        <select style="padding: 8px 142px;" name="categorie" >
                            <option value="{{$voi->categorie}}">{{$voi->categorie}}</option>
                            <option value="inconnu">Selectioner une categorie :</option>
                            <option value="Citadine">Citadine </option>
                            <option value="Berline/Routiére">Berline/Routiére</option>
                            <option value="Familiale">Familiale</option>
                            <option value="Tout Terrain ">Tout Terrain </option>
                            <option value="Lux">LuX </option>
                        </select>
                    </div>
                        <br>
                        <div class="div">
                        <input type="text" name="type"  value="{{$voi->type}}" class="form-control mb-3" >
                    </div>
                    <div class="div">
                        <input type="text" name="color" value="{{$voi->color}}" class="form-control mb-3" >
                    </div>
                    <div class="div">
                        <input type="text" name="prix" value="{{$voi->prix}}" class="form-control mb-3" >
                    </div>
                    <div class="div">
                        <input type="text" name="stock" value="{{$voi->stock}}" class="form-control mb-3" >
                    </div>
                    <div class="div">
                        <div class="custom-file">
                        <input type="file" name="image"  value="{{$voi->image}}"  class="form-control mb-3" >
                        </div>
                    </div>
                    @endforeach
                    <button type="submit" class="btn  mt-4" value="update">Update</button>
                    <a href={{ url()->previous() }} type="submit" class="btn  mt-4">Retour</a>
            </form>
        </div>
    </div>
</div>
</div>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
