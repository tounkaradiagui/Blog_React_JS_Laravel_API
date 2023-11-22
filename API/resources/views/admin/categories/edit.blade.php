@extends('layouts.admin')
@section('title', 'Modifier la catégorie')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Modifier la catégorie</h3>

                <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item mr-1">
                            <a href="{{route('categories.index')}}" class="btn btn-danger float-right btn-sm"><i class="fa fa-arrow-circle-left mr-2"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <form action="{{route('categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nom</label>
                                    <input type="text" name="name" id="name" value="{{$category->name}}" class="form-control" placeholder="Saisir le nom de catégorie" required>
                                    @error('name') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Slug</label>
                                    <input type="text" name="slug" id="slug" value="{{$category->slug}}" class="form-control" placeholder="Saisir le slug de la catégorie" required>
                                    @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea type="text" id="summernote" name="description" class="form-control" placeholder="Saisir une description pour la catégorie" required cols="30" rows="10"></textarea>
                                    @error('description') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-12"><h5><strong>Tag de référencement (SEO)</strong> </h5></div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Meta Title</label>
                                    <input type="text" name="meta_title" value="{{$category->meta_title}}" class="form-control" placeholder="Saisir un titre court pour la catégorie" required>
                                    @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Mots clés</label>
                                    <input type="text" name="meta_keywords" value="{{$category->meta_keywords}}" class="form-control" placeholder="Saisir les mots clés pour la catégorie" required>
                                    @error('meta_keywords') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Meta Description</label>
                                    <input type="text" name="meta_description" value="{{$category->meta_description}}" class="form-control" placeholder="Saisir une courte description pour la catégorie" required>
                                    @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control" alt="Image de la catégorie" required>
                                    <img src="{{url('uploads/category/images/'. $category->image)}}" style='width:70px; height:70px;' alt="" class="form-control">
                                    @error('image') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class=" ml-4">Statut</label>
                                    <input type="checkbox" {{$category->status ? 'checked' : ''}} name="status" class="form-control">
                                    @error('status') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Statut de Navigation</label>
                                    <input type="checkbox" {{$category->navbar_status ? "checked" : ""}} name="navbar_status" class="form-control">
                                    @error('navbar_status') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection



