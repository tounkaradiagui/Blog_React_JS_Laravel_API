@extends('layouts.admin')
@section('title', 'Ajouter une Permission')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ajoute <small>d'une Permission</small>
            </h3>
            <div class="card-tools">
                <div class="input-group float-end">
                    <a href="{{route('permissions.index')}}" class="btn btn-danger"><i class="fa fa-arrow-left mr-2"></i>Liste de Permissions</a>
                </div>
            </div>
        </div>
        
        <form id="quickForm" action="{{route('permissions.store')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPermission">Nom</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPermission" placeholder="Saisir le nom de la Permission">
                </div>
            </div>
                
            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-save mr-2"></i>Ajouter</button>
            </div>
        </form>
    </div>
           
@endsection