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

        <form id="quickForm" action="{{url('roles/'.$roles->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPermission">Nom</label>
                    <input type="text" name="name" value="{{$roles->name}}" class="form-control" id="exampleInputPermission">
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
                                        @foreach ($roles->permissions as $user_permission)
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
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-save mr-2"></i>Valider</button>
            </div>
        </form>
    </div>

@endsection
