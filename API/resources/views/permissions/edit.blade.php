@extends('layouts.admin')
@section('title', 'Modification une Permission')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Modification d'une Permission
            </h3>
            <div class="card-tools">
                <div class="input-group float-end">
                    <a href="{{route('permissions.index')}}" class="btn btn-danger"><i class="fa fa-arrow-left mr-2"></i>Liste de Permissions</a>
                </div>
            </div>
        </div>

        <form id="quickForm" action="{{url('permissions/'.$permission->id)}}" method="post">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPermission">Nom</label>
                    <input type="text" name="name" class="form-control" value="{{$permission->name}}" id="exampleInputPermission" placeholder="Saisir le nom de la Permission">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-save mr-2"></i>Valider</button>
            </div>
        </form>
    </div>

@endsection
