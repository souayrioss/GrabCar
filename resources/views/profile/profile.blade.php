<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{ asset('/css/profile.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="main-body">
            <!-- Breadcrumb -->
            <!-- /Breadcrumb -->
            <div class="row gutters-sm">
                @foreach ($users as $user)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                        <div class=" align-items-center text-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTU6PVHjZZThHX3rIQ01AJ2SU1LSctcRoeunITKtIKU8KXI6_iz28whUp8dNDFAnnvxoK8&usqp=CAU" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{$user->username}}</h4>
                                <p class="text-secondary mb-1">{{$user->fullName}}</p>
                                <p class="text-muted font-size-sm">{{$user->email}}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">User Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$user->username}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$user->fullName}}
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$user->email}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$user->phone}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$user->address}}
                                </div>
                            </div>
                            <hr>
                            <div class="row text-center">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-between">
                                    <a href={{ url()->previous() }} type="button" class="btn btn-outline-secondary">Retour</a>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end" >
                                        <a href={{"modif/".$user->id}} type="button" class="btn btn-outline-info" >Modifier</a>
                                        <a href={{"supprimer/".$user->id}} type="button" class="btn btn-outline-danger" >Supprimer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
