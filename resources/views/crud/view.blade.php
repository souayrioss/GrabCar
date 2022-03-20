
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
<img class="wave" src="img/wave.svg">
<div class="container">
    <div class="img">
        <img src="img/view.svg" style="width: 500px;">
    </div>
    <div class="login-content">
        <table class="table table-bordered">
            <tr>
                <td > ID Voiture </td>
                <td > Matricule </td>
                <td > Categorie </td>
                <td > Type </td>
                <td > Couleur </td>
                <td > Prix </td>
                <td > En stock </td>
                <td > Image </td>
                <td colspan="2">Operations</td>
            </tr>
            @foreach ($voiture as $voi)
            <tr>
                <td > {{$voi['idVoiture']}} </td>
                <td > {{$voi['matricule']}} </td>
                <td > {{$voi['categorie']}} </td>
                <td > {{$voi['type']}} </td>
                <td > {{$voi['color']}} </td>
                <td > {{$voi['prix']}} </td>
                <td > {{$voi['stock']}} </td>
                <td > {{$voi['image']}} </td>
                <td><a href={{"edit/".$voi['idVoiture']}} style="color: rgb(0, 204, 255); text-align: center;" ><b>Edit</b></a></td>
                <td><a href={{"del/".$voi['idVoiture']}} style="color: rgb(255, 0, 0); text-align: center;" ><b>Del</b></a></td>

            </tr>
            @endforeach

        </table>

    </div>

</div>
<a href={{ url()->previous() }} type="button" class="btn btn-outline-secondary"><b>Retour</b></a>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
