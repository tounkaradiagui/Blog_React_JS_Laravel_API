@extends('layouts.admin')
@section('title', 'Mon Profile')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#infos" data-toggle="tab">Informations Personnelles</a></li>
                                <li class="nav-item"><a class="nav-link" href="#password" data-toggle="tab">Changer le mot de Passe</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="infos">
                                    <form method="post" action="{{route('update.profile')}}">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nom" value="{{auth()->user()->nom}}" placeholder="Votre nom">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Prénom</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="prenom" value="{{auth()->user()->prenom}}" placeholder="Votre Prénom">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" name="email" value="{{auth()->user()->email}}" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputTelephone" class="col-sm-2 col-form-label">Téléphone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="phone" value="{{auth()->user()->phone}}" placeholder="Numéro de Téléphone">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Adresse</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="adresse" value="{{auth()->user()->adresse}}" placeholder="Votre adresse">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10 mt-4 ml-2">
                                                <button type="submit" class="btn btn-success"><i class="fa fa-user-edit"></i> Valider</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="tab-pane" id="password">
                                    <form method="post" action="{{route('update.password')}}">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Mot de Passe Actuel</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="current_password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nouveau Mot de Passe</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Confirmer le Nouveau Mot de Passe</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="password_confirmation">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10 mt-4 ml-2">
                                                <button type="submit" class="btn btn-success"><i class="fa fa-user-edit"></i> Valider</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{asset('assets/images/FACE_ID.jpg')}}"
                                    alt="User profile picture" style="width: 200px;">
                            </div>

                            <h3 class="profile-username text-center">{{auth()->user()->nom}} {{auth()->user()->prenom}}</h3>

                            {{-- <p class="text-muted text-center">Role: {{auth()->user()->role}}</p> --}}
                            <p class="text-muted text-center"> {{auth()->user()->email}}</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection