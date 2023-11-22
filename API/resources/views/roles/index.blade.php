@extends('layouts.admin')
@section('title', 'La liste de Rôles')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Liste de Rôles</h3>

                <div class="card-tools">
                    <div class="input-group float-end">
                        <a href="{{route('roles.create')}}" class="btn btn-primary float-end"><i class="fa fa-plus-circle mr-2"></i>Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Nom du rôle</th>
                            <th>Date de Création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $role )
                            <tr>
                                <td>{{$role->name}}</td>
                                <td>{{$role->created_at->format('d/m/Y | H:i:s')}}</td>
                                <td>
                                    <a href="{{route('roles.edit', $role->id)}}" class="btn btn-success" title="Modifier"><i class="fa fa-edit"></i></a>
                                </td>
                                <td>
                                    <a href="{{url('roles/'.$role->id.'/delete')}}" onclick="return confirm('Voule-vous vraiment supprimé ce rôle ?')" class="btn btn-danger" title="Supprimer"><i class="fa fa-trash"></i></a>
                                </td>

                                <td>
                                    {{-- <a href="{{route('roles.show', $role->id)}}" class="btn btn-primary" title="Voir"><i class="fa fa-eye"></i></a> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td><i class="fa fa-folder-open mr-2"></i>Aucun Rôle ajouté</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
