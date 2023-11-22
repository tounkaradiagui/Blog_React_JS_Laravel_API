@extends('layouts.admin')
@section('title', 'Modifier la publication')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Modifier la publication</h3>

                <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item mr-1">
                            <a href="{{route('posts.index')}}" class="btn btn-danger float-right btn-sm"><i class="fa fa-arrow-circle-left mr-2"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <form action="{{route('posts.update', $post->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Titre</label>
                                    <input type="text" name="title" id="title" value="{{$post->title}}" class="form-control" placeholder="Saisir le nom de catégorie" required>
                                    @error('title') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Slug</label>
                                    <input type="text" name="slug" id="slug" value="{{$post->slug}}" class="form-control" placeholder="Saisir le slug de la catégorie" required>
                                    @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea type="text" id="summernote" name="description" class="form-control" placeholder="Saisir une description pour la catégorie" required cols="30" rows="10">{{$post->description}}</textarea>
                                    @error('description') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-12"><h5><strong>Tag de référencement (SEO)</strong> </h5></div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Meta Title</label>
                                    <input type="text" name="meta_title" value="{{$post->meta_title}}" class="form-control" placeholder="Saisir un titre court pour la catégorie" required>
                                    @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Mots clés</label>
                                    <input type="text" name="meta_keywords" value="{{$post->meta_keywords}}" class="form-control" placeholder="Saisir les mots clés pour la catégorie" required>
                                    @error('meta_keywords') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Meta Description</label>
                                    <input type="text" name="meta_description" value="{{$post->meta_description}}" class="form-control" placeholder="Saisir une courte description pour la catégorie" required>
                                    @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Lien de la vidéo</label>
                                    <input type="text" value="{{$post->iframe}}" name="iframe" class="form-control" required>
                                    @error('iframe') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Selection une Catégorie</label>
                                    <select name="category_id" id="" class="form-control">
                                        <option>Selectionner une catégorie</option>
                                        @foreach($categories as $categorie)
                                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('status') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class=" ml-4">Statut</label>
                                    <input type="checkbox" {{$post->status ? 'checked' : ''}} name="status" class="form-control">
                                    @error('status') <small class="text-danger">{{$message}}</small> @enderror
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
