@extends('layouts.admin')
@section('title', 'La liste de Permissions')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Liste de Permissions</h3>

                <div class="card-tools">
                    <div class="input-group float-end">
                        <a href="{{route('permissions.create')}}" class="btn btn-primary float-end"><i class="fa fa-plus-circle mr-2"></i>Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Date de Création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($permissions as $permission )
                            <tr>
                                <td>{{$permission->name}}</td>
                                <td>{{$permission->created_at}}</td>
                                <td>
                                    <a href="{{route('permissions.edit', $permission->id)}}" class="btn btn-success" title="Modifier"><i class="fa fa-edit"></i></a>
                                </td>
                                <td>
                                    <a href="{{url('permissions/'.$permission->id. '/delete')}}" onclick=" return confirm('Voulez-vous vraiment supprimer cette permission ?')" class="btn btn-danger" title="Supprimer"><i class="fa fa-trash"></i></a>
                                </td>

                                <td>
                                    {{-- <a href="{{route('permissions.show', $permission->id)}}" class="btn btn-primary" title="Voir"><i class="fa fa-eye"></i></a> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td><i class="fa fa-folder-open"></i>Aucune Permission ajoutée</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
