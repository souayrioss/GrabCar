
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<title>Crud Operation in Php Using OOP</title>
<style>

body{
    font-family: Source Serif Variable;
    font-size: 15px;
    line-height: 1.5;
    box-sizing: border-box;
    background-image: linear-gradient(to right, rgb(0, 255, 255) , #03d1c0,#dbdbdb);
}
    </style>
</head>
<body>
    <div class="wrapper">
    <div class="row">
        .<br>
                <div class="login-content">
                    <form action="{{route('modifier')}}" method="post" >
                        @csrf
                        @foreach ($users as $user)
                        <input type="hidden" name="id" value="{{$user->id}}" class="form-control input-lg mb-3" >
                            <input type="hidden" name="username" value="{{$user->username}}" class="form-control input-lg mb-3">
                        <div class="div">
                            <input type="text" name="fullName" value="{{$user->fullName}}" class="form-control mb-3" >
                        </div>
                            <div class="div">
                            <input type="text" name="phone"  value="{{$user->phone}}" class="form-control mb-3" >
                        </div>
                        <div class="div">
                            <input type="text" name="address" value="{{$user->address}}" class="form-control mb-3" >
                        </div>
                        <div class="div">
                            <input type="text" name="email"  value="{{$user->email}}"  class="form-control mb-3" >
                        </div>
                        <input type="hidden" name="password"  value="{{$user->password}}"  class="form-control mb-3" >
                        <button type="submit" class="btn  mt-4" value="update">Update</button>
                        <a href={{ url()->previous() }} type="submit" class="btn  mt-4">Retour</a>
            @endforeach
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
