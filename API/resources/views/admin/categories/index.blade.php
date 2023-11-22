@extends('layouts.admin')
@section('title', 'Liste de catégories')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Liste de catégories</h3>

                <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item mr-1">
                            <a href="" class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#ajouterCategoryModal"><i class="fa fa-plus-circle mr-2"></i></a>
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
                            <th>Slug</th>
                            <th>Photo</th>
                            <th>Créer par</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td class="justify-content-center">
                                    <img src="{{url('uploads/category/images/'.$category->image)}}" style='width:70px; height:70px;' alt="Image">
                                </td>
                                <td>{{$category->created_by == 1 ? 'Admin' : 'Editor'}}</td>
                                <td>{{$category->created_at->format('d/m/Y | H:i:s')}}</td>
                                <td>{{$category->status == 1 ? "Actif" : "Inactif"}}</td>
                                <td>
                                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-success" title="Modifier"><i class="fa fa-edit"></i></a>
                                </td>
                                <td>
                                    <a href="{{url('admin/categories/'. $category->id.'/delete')}}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer cette catégorie ?')" title="Supprimer"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Début Modal pour ajouter une catégorie --}}
<div class="modal fade" id="ajouterCategoryModal" tabindex="-1" aria-labelledby="ajouterCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg scroll">
        <div class="modal-content">
            <div class="modal-header  bg-primary">
                <h4 class="modal-title fs-5" id="ajouterCategoryModalLabel">Ajouter une Catégorie</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input type="text" name="name" class="form-control" placeholder="Saisir le nom de catégorie" required>
                                @error('name') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" name="slug" class="form-control" placeholder="Saisir le slug de la catégorie" required>
                                @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea type="text" id="summernoteCategory" name="description" class="form-control" placeholder="Saisir une description pour la catégorie" required cols="30" rows="10"></textarea>
                                @error('description') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-12"><h4><strong>Tag de référencement (SEO)</strong> </h4></div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" placeholder="Saisir un titre court pour la catégorie" required>
                                @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Mots clés</label>
                                <input type="text" name="meta_keywords" class="form-control" placeholder="Saisir les mots clés pour la catégorie" required>
                                @error('meta_keywords') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Meta Description</label>
                                <input type="text" name="meta_description" class="form-control" placeholder="Saisir une courte description pour la catégorie" required>
                                @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" alt="Image de la catégorie" required>
                                @error('image') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class=" ml-4">Statut</label>
                                <input type="checkbox" name="status" class="form-control">
                                @error('status') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Statut de Navigation</label>
                                <input type="checkbox" name="navbar_status" class="form-control">
                                @error('navbar_status') <small class="text-danger">{{$message}}</small> @enderror
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
{{-- Fin Modal pour ajouter une catégorie --}}

@endsection
