@extends('layouts.admin')
@section('title', "Modifier l'utilisateur")

@section('content')

<div class="container">
    <div class="row">
		<div class="col-md-12">
            <div class="card card-shadow">
                <div class="card-header bg-primary">
                    <h3 class="card-title">Modifier l'utilisateur
                    </h3>
                    <a href="{{ route('users.index') }}" class="btn btn-danger float-right">
                        <i class="fa fa-arrow-left"></i> Retour
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" name="nom" id="nom" class="form-control
                                    @error('nom') is-invalid @enderror" value="{{ $user->nom }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="prenom">Prénom</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control
                                    @error('prenom') is-invalid @enderror" value="{{ $user->prenom }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control
                                    @error('email') is-invalid @enderror" value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Téléphone</label>
                                    <input type="phone" name="phone" id="phone" class="form-control
                                    @error('phone') is-invalid @enderror" value="{{ $user->phone}} ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="adresse">Adresse</label>
                                    <input type="adresse" name="adresse" id="adresse" class="form-control
                                    @error('adresse') is-invalid @enderror" value="{{ $user->adresse}} ">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="role">Rôle</label>
                                    <select name="role" id="role" class="form-control
                                        @error('role') is-invalid @enderror">
                                        <option value="" selected disabled>Choisir un rôle</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}"
                                                @if ($user->roles->first()->id == $role->id)
                                                    selected
                                                @endif>{{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="permissions">Assigner une Permission</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        @foreach ($permissions as $permission)
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="permissions" class="form-check-label">{{ $permission->name }}</
                                                </label>
                                            </div><br>
                                            <div class="col-md-5">
                                                <input type="checkbox" name="permissions[]" id="permissions" class="form-check
                                                @error('permissions') is-invalid @enderror" value="{{ $permission->id }}"
                                                @foreach ($user->permissions as $user_permission)
                                                    @if ($user_permission->id == $permission->id)
                                                    checked
                                                    @endif
                                                @endforeach style="width:20px; height:20px;">
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Valider les informations</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
