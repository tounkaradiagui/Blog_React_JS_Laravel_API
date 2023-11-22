<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- summernote libraries(jQuery link) -->
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}

        <!-- summernote css/js links-->
        {{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> --}}
    </head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper" id="app">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Accueil</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('assets/images/FACE_ID.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Diagui TOUNKARA</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="{{url('/dashboard')}}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        {{-- @hasrole('admin') --}}
                            <li class="nav-item">
                                <a href="#" class="nav-link mt-2">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Gestion d'accéssibilité
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="{{url('users')}}" class="nav-link">
                                            <i class="nav-icon fas fa-user"></i>
                                            <p>
                                                Liste des utilisateurs
                                            </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{url('roles')}}" class="nav-link">
                                            <i class="nav-icon fas fa-tasks"></i>
                                            <p>
                                                Roles
                                            </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{url('permissions')}}" class="nav-link">
                                            <i class="nav-icon fas fa-lock"></i>
                                            <p>
                                                Permissions
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        {{-- @endhasrole --}}

                        <li class="nav-item">
                            <a href="/admin/settings" class="nav-link">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>
                                    Messages
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Publications</li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Gestion de contenu
                                <i class="fas fa-angle-left right"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item {{Request::is('admin/posts') ? 'active' : ''}}">
                                    <a href="{{route('posts.index')}}" class="nav-link">
                                        <i class="nav-icon fas fa-tags"></i>
                                        <p>
                                            Publications
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('categories.index')}}" class="nav-link">
                                    <i class="fa fa-list nav-icon"></i>
                                    <p>Catégories</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('admin/tags')}}" class="nav-link">
                                    <i class="fa fa-tags nav-icon"></i>
                                    <p>Tags</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('admin/likes')}}" class="nav-link">
                                <i class="nav-icon fas fa-heart"></i>
                                <p>
                                    Likes
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('admin/comments')}}" class="nav-link">
                                <i class="nav-icon fas fa-comment"></i>
                                <p>
                                    Commentaires
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('admin/subscribers')}}" class="nav-link">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                    Abonnements
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="admin/settings" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Paramètre
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">Rapports</li>

                        <li class="nav-item">
                            <a href="admin/statistics" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Statistique
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('users.profile')}}" class="nav-link">
                                <i class="nav-icon far fa-user"></i>
                                <p>
                                    Mon Profil
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('logout')}}" class="nav-link"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                Déconnexion
                            </a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper" style="min-height: 399">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Accueil / @yield('title')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">

                    @include('auth.alert')
                   @yield('content')

                </div>
            </section>
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2021-2022 <a href="https://devdiagui.ml">Diagui TOUNKARA</a>.</strong>
                Tous droit reservés.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 2.1.0
            </div>
        </footer>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <script>
        $(document).ready(function() {
            $('#summernoteCategory').summernote();

            $('#summernotePost').summernote({
                placeholder: 'Saisir une description pour la publication',
                tabsize: 2,
                height: 100
            });
        });
    </script>
</body>
</html>
