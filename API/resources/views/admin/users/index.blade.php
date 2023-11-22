@extends('layouts.admin')
@section('title', 'La liste des utilisateurs')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Liste des utilisateurs</h3>

                <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item mr-1">
                            <button type="button" href="" class="btn btn-primary float-end btn-sm" data-bs-toggle="modal" data-bs-target="#addUserModal"><i class="fa fa-plus-circle mr-2"></i>Ajouter</button>
                        </li>
                        <div class="nav-item">
                            <div class="input-group mt-0 input-group-sm" style="width:350px">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Rechercher par email">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"> <i class="fas fa-search"></i> </button>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Adresse</th>
                            <th>Rôle</th>
                            <th>Date de Création</th>
                            <th>Statut</th>
                            <th colspan="5" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user )
                            <tr>
                                <td>{{ $user->nom }}</td>
                                <td>{{ $user->prenom }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone ? $user->phone : 'Non défini'}}</td>
                                <td>{{ $user->adresse ? $user->adresse : 'Non défini'}}</td>
                                <td>
                                    <span class="badge badge-success">
                                        {{ $user->roles ? $user->roles->pluck('name')->first() : 'Non défini' }}
                                    </span>
                                </td>
                                <td>{{$user->created_at->format('d/m/Y | H:i:s')}}</td>
                                <td>
                                    @if ($user->status == 0)
                                        <span class="badge badge-danger">Inactif</span>
                                    @elseif ($user->status == 1)
                                        <span class="badge badge-success">Actif</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('users.edit', $user->id)}}" type="button" class="btn btn-success" title="Modifier"><i class="fa fa-edit"></i></a>
                                </td>

                                <td>
                                    @if($user->status == 1)
                                        <a href="{{route('users.status', ['user_id' => $user->id, 'status_code' => 0 ])}}" class="btn btn-danger" title="Desactiver cet utilisateur">
                                            <i class="fa fa-ban" ></i>
                                        </a>
                                    @else
                                        <a href="{{route('users.status', ['user_id' => $user->id, 'status_code' => 1 ])}}" class="btn btn-success" title="Activer cet utilisateur">
                                            <i class="fa fa-check-circle" ></i>
                                        </a>
                                    @endif
                                </td>
                                {{-- <td>
                                    <a href="{{route('users.show', $user->id)}}" class="btn btn-warning" title="Envoyer un message"><i class="fa fa-envelope"></i></a>
                                </td> --}}
                                <td>
                                    <a href="{{route('users.show', $user->id)}}" class="btn btn-primary" title="Voir"><i class="fa fa-eye"></i></a>
                                </td>
                                <td>
                                    {{-- <form  method="post" action="{{route('users.destroy', $user->id)}}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" title="Supprimer"><i class="fa fa-trash"></i></button>
                                    </form> --}}

                                    <a href="{{url('users/'. $user->id. '/delete')}}" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')" class="btn btn-danger" title="Supprimer"><i class="fa fa-trash"></i></a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


{{-- Modal section --}}

{{-- Modal Ajout d'un utilisateur --}}
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-5" id="addUserModalModalLabel">Ajouter un nouvel utilisateur</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{route('users.store')}}" method="post">
            @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" >
                                @error('nom')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror">
                                    @error('prenom')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror">
                                    @error('phone')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>Adresse</label>
                                <input type="text" name="adresse" class="form-control @error('adresse') is-invalid @enderror">
                                    @error('adresse')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mot de Passe</label>
                                <input type="text" name="password" class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirmer le Mot de Passe</label>
                                <input type="text" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                                    @error('password_confirmation')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <select class="form-control form-control-user @error('role_id') is-invalid @enderror" name="role">
                                    <option selected disabled>Choisir un Rôle</option>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 mt-3">
                            <div class="form-group">
                                <label for="">Assigner une Permission</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <div class="form-check form-check">
                                        @foreach ($permissions as $permission)
                                        <label class="form-check-label mr-4 mb-2" for="inlineCheckbox2">
                                            <span class="p-1 lg"> <strong>{{$permission->name}}</strong> </span>
                                        </label>
                                            <input class="form-check-input" name="permissions" type="checkbox" id="inlineCheckbox2" value="{{$permission->id}}">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Fin du Modal d'ajout d'un utilisateur --}}



{{-- Modal de suppression d'un utilisateur --}}
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title fs-5" id="deleteUserModalModalLabel">Suppression </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{route('users.destroy', $user->id)}}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">

                    Etes-vous sûr de vouloir supprimer {{$user->id}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-danger">Confirmer</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Fin du Modal de suppression d'un utilisateur --}}

{{-- End Modal section --}}

@endsection
