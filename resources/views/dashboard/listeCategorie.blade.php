<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>AMES - ADMINISTRATION</title>

        <!-- Custom fonts for this template-->
        <link
            href="{{ asset('dashboard/vendor/fontawesome-free/css/all.min.css') }}"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"
        />

        <!-- Custom styles for this template-->
        <link
            href="{{ asset('dashboard/css/sb-admin-2.min.css') }}"
            rel="stylesheet"
        />
        <style>
            /* Effet au survol */
            .nav-link:hover {
                background-color: #4e73df !important;
                color: white !important;
            }

            /* Classe à appliquer manuellement pour la page active */
            .nav-link.active-link {
                background-color: #4e73df !important;
                color: white !important;
            }
        </style>
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul
                class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
                id="accordionSidebar"
            >
                <!-- Sidebar - Brand -->
                <a
                    class="sidebar-brand d-flex align-items-center justify-content-center"
                    href="index.html"
                >
                    <div class="sidebar-brand-text mx-3">Administration</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0" />

                <!-- Divider -->
                <hr class="sidebar-divider" />

                <!-- Nav Item - Ajouter Produit -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('administration') }}">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Accueil</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produits.create') }}">
                        <i class="fas fa-fw fa-plus"></i>
                        <span>Ajouter produit</span>
                    </a>
                </li>

                <!-- Nav Item - Liste des produits -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produits.index') }}">
                        <i class="fas fa-fw fa-list"></i>
                        <span>Liste des produits</span>
                    </a>
                </li>

                <!-- Ajouter catégories -->
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="{{ route('categories.create') }}"
                    >
                        <i class="fas fa-fw fa-folder-plus"></i>
                        <span>Ajouter catégories</span>
                    </a>
                </li>

                <!-- Liste catégories -->
                <li class="nav-item">
                    <a
                        class="nav-link active-link"
                        href="{{ route('categories.index') }}"
                    >
                        <i class="fas fa-fw fa-folder-open"></i>
                        <span>Liste catégories</span>
                    </a>
                </li>

                <!-- Nav Item - Messages contacts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('messages.index') }}">
                        <i class="fas fa-fw fa-envelope"></i>
                        <span>Messages contacts</span>
                    </a>
                </li>

                <!-- Nav Item - Profil -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profil.show') }}">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Profil</span>
                    </a>
                </li>

                <!-- Nav Item - Déconnexion -->
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button
                            type="submit"
                            class="nav-link btn btn-link"
                            style="padding-left: 1.5rem; background-color: red"
                        >
                            <i class="fas fa-fw fa-sign-out-alt"></i>
                            <span>Déconnexion</span>
                        </button>
                    </form>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block" />

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button
                        class="rounded-circle border-0"
                        id="sidebarToggle"
                    ></button>
                </div>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav
                        class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
                    >


                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div
                            class="d-sm-flex align-items-center justify-content-between mb-4"
                        >
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <div class="container mt-4">
                                <h2 class="mb-4">Liste des catégories</h2>

                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                                    </div>
                                @endif

                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered align-middle">
                                        <thead class="table-primary text-center">
                                            <tr>
                                                <th>#</th>
                                                <th>Nom de la catégorie</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($categories as $categorie)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $categorie->nom }}</td>
                                                    <td class="text-center" style="min-width: 150px;">
                                                        <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-sm btn-outline-primary me-1">
                                                            <i class="bi bi-pencil"></i> Modifier
                                                        </a>

                                                        <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cette catégorie ?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                                <i class="bi bi-trash"></i> Supprimer
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="text-center text-muted">Aucune catégorie trouvée.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->

                        <div class="row"></div>


                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; AMES 2025</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div
            class="modal fade"
            id="logoutModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Ready to Leave?
                        </h5>
                        <button
                            class="close"
                            type="button"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Sélectionnez « Déconnexion » ci-dessous si vous êtes
                        prêt à terminer votre session actuelle.
                    </div>
                    <div class="modal-footer">
                        <button
                            class="btn btn-secondary"
                            type="button"
                            data-dismiss="modal"
                        >
                            Annuler
                        </button>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                Déconnexion
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('dashboard/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('dashboard/js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('dashboard/vendor/chart.js/Chart.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('dashboard/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('dashboard/js/demo/chart-pie-demo.js') }}"></script>
    </body>
</html>
