@extends('layouts.admin')
@section('title', "Détails de l'utilisateur")

@section('content')
<section style="background-color: #eee;">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title">
                            <i class="fa fa-user"></i> Détails de l'utilisateur
                        </h4>
                        <a href="{{route('users.index')}}" class="btn btn-danger float-right btn-sm">
                            <i class="fa fa-arrow-left"></i> Retour
                        </a>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        {{-- <img src="{{ asset('uploads/images/'.$user->profile_image) }}" alt="Image de profil"> --}}

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px;">
                                  
                        <h5 class="my-3">{{$user->nom}} {{$user->prenom}}</h5>
                        <p class="text-muted mb-0">{{ $user->roles ? $user->roles->pluck('name')->first() : 'Non défini' }}</p>
                        
                        <p class="text-muted mb-4">{{$user->adresse ? $user->adresse : 'Adresse non défini'}}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                            <p class="mb-0">Nom</p>
                            </div>
                            <div class="col-sm-9">
                            <p class="text-muted mb-0">{{$user->nom}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <p class="mb-0">Prénom</p>
                            </div>
                            <div class="col-sm-9">
                            <p class="text-muted mb-0">{{$user->prenom}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->email}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Téléphone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->phone ? $user->prenom : 'Numéro non défini'}}</p>
                            </div>
                        </div>
                        <hr>
                       
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Adresse</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->adresse ? $user->adresse : 'Adresse non défini'}}</p>
                            </div>
                        </div>
                        <hr>

                        {{-- <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Permissions</p>
                            </div>
                            <div class="col-sm-9">
                                @foreach ($permissions as $permission)
                                    <p class="text-muted mb-2">

                                        <span class="badge badge-primary">
                                            <input type="text" name="permissions[]" class="form-control
                                            @error('permissions') is-invalid @enderror" value="{{ $permission->name }}"
                                            @foreach ($user->permissions as $user_permission)
                                                @if ($user_permission->name == $permission->name)
                                                checked
                                                @endif
                                            @endforeach @readonly(true) ><br>
                                        </span>
                                        
                                    </p>
                                @endforeach
                                <p>


                                </p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection