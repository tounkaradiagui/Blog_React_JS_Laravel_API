@extends('layouts.admin')
@section('title', 'Liste de publications')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Liste de publications</h3>

                <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item mr-1">
                            <a href="" class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#ajouterPostModal"><i class="fa fa-plus-circle mr-2"></i></a>
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
                            <th>Titre</th>
                            <th>Slug</th>
                            <th>Créer par</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->slug}}</td>
                                <td>{{$post->user_id == 1 ? 'Admin' : 'Editor'}}</td>
                                <td>{{$post->created_at->format('d/m/Y | H:i:s')}}</td>
                                <td>{{$post->status == 1 ? "Actif" : "Inactif"}}</td>
                                <td>
                                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-success" title="Modifier"><i class="fa fa-edit"></i></a>
                                </td>
                                <td>
                                    <a href="{{url('admin/posts/'. $post->id.'/delete')}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer cette catégorie ?')" title="Supprimer"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


{{-- Début Modal pour ajouter une publication --}}
<div class="modal fade" id="ajouterPostModal" tabindex="-1" aria-labelledby="ajouterPostModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg scroll">
        <div class="modal-content">
            <div class="modal-header  bg-primary">
                <h4 class="modal-title fs-5" id="ajouterPostModalLabel">Ajouter un post</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{route('posts.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Titre</label>
                                <input type="text" name="title" class="form-control" placeholder="Saisir le titre de post" required>
                                @error('name') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" name="slug" class="form-control" placeholder="Saisir le slug du post" required>
                                @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea type="text" id="summernotePost" name="description" class="form-control" required cols="30" rows="10"></textarea>
                                @error('description') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-12"><h4><strong>Tag de référencement (SEO)</strong> </h4></div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" placeholder="Saisir un titre court" required>
                                @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Mots clés</label>
                                <input type="text" name="meta_keywords" class="form-control" placeholder="Saisir les mots clés" required>
                                @error('meta_keywords') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Meta Description</label>
                                <input type="text" name="meta_description" class="form-control" placeholder="Saisir une courte description" required>
                                @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Lien de Vidéo</label>
                                <input type="text" name="iframe" class="form-control" placeholder="Coller le lien de la vidéo ici" required>
                                @error('iframe') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-8">
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
                                <label for="">Statut</label>
                                <input type="checkbox" name="status" class="form-control">
                                @error('status') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Fin Modal pour ajouter une publication --}}

@endsection
