@extends('layouts.admin')
@section('title', 'Ajouter un Rôle')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ajoute <small>d'un Rôle</small>
            </h3>
            <div class="card-tools">
                <div class="input-group float-end">
                    <a href="{{route('roles.index')}}" class="btn btn-danger"><i class="fa fa-arrow-left mr-2"></i>Liste de roles</a>
                </div>
            </div>
        </div>
        
        <form id="quickForm" action="{{route('roles.store')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPermission">Nom</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPermission" placeholder="Saisir le nom du rôle">
                </div>
                
                <div class="form-group">
                    <div class="form-group mt-4">
                        <label for="exampleInputRole">Assigner une Permission</label>
                    </div>
                    <div class="form-check form-check-inline">
                        @foreach ($permissions as $permission)
                            <input class="form-check-input ml-2" name="permissions" type="checkbox" id="inlineCheckbox2" value="{{$permission->id}}">
                            <label class="form-check-label" for="inlineCheckbox2">
                                <span class="p-1 lg"> <strong>{{$permission->name}}</strong> </span>
                            </label>
                        @endforeach
                    </div>                      
                </div>
            </div>
                
            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-save mr-2"></i>Ajouter</button>
            </div>
        </form>
    </div>
           
@endsection
