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
            href="{{ asset("dashboard/vendor/fontawesome-free/css/all.min.css") }}"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"
        />

        <!-- Custom styles for this template-->
        <link
            href="{{ asset("dashboard/css/sb-admin-2.min.css") }}"
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
                    <a class="nav-link" href="{{ route("administration") }}">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Accueil</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route("produits.create") }}">
                        <i class="fas fa-fw fa-plus"></i>
                        <span>Ajouter produit</span>
                    </a>
                </li>

                <!-- Nav Item - Liste des produits -->
                <li class="nav-item">
                    <a
                        class="nav-link active-link"
                        href="{{ route("produits.index") }}"
                    >
                        <i class="fas fa-fw fa-list"></i>
                        <span>Liste des produits</span>
                    </a>
                </li>

                <!-- Ajouter catégories -->
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="{{ route("categories.create") }}"
                    >
                        <i class="fas fa-fw fa-folder-plus"></i>
                        <span>Ajouter catégories</span>
                    </a>
                </li>

                <!-- Liste catégories -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("categories.index") }}">
                        <i class="fas fa-fw fa-folder-open"></i>
                        <span>Liste catégories</span>
                    </a>
                </li>

                <!-- Nav Item - Messages contacts -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("messages.index") }}">
                        <i class="fas fa-fw fa-envelope"></i>
                        <span>Messages contacts</span>
                    </a>
                </li>

                <!-- Nav Item - Profil -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("profil.show") }}">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Profil</span>
                    </a>
                </li>

                <!-- Nav Item - Déconnexion -->
                <li class="nav-item">
                    <form method="POST" action="{{ route("logout") }}">
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



            </nav>

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
                            <div class="row overflow-auto">
                                <div class="col-12">
                                    <div class="card shadow-sm border-0 mb-4">
                                        <div
                                            class="card-header bg-white d-flex justify-content-between align-items-center"
                                        >
                                            <h5 class="mb-0 text-success">
                                                📦 Liste complète des produits
                                            </h5>
                                            <a
                                                href="{{ route("produits.create") }}"
                                                class="btn btn-success btn-sm"
                                            >
                                                + Ajouter un produit
                                            </a>
                                        </div>

                                        <div class="card-body">
                                            @if (session("success"))
                                                <div
                                                    class="alert alert-success"
                                                >
                                                    {{ session("success") }}
                                                </div>
                                            @endif

                                            <!-- Table responsive -->
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-bordered align-middle text-nowrap"
                                                >
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Image</th>
                                                            <th>Nom</th>
                                                            <th>Catégorie</th>
                                                            <th>Marque</th>
                                                            <th>Modèle</th>
                                                            <th>Quantité</th>
                                                            <th>Prix (FCFA)</th>
                                                            <th>État</th>
                                                            <th>
                                                                Lieu d'achat
                                                            </th>
                                                            <th>
                                                                Date d'achat
                                                            </th>
                                                            <th>Fournisseur</th>
                                                            <th>Description</th>
                                                            <th
                                                                class="text-center"
                                                            >
                                                                Actions
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($produits as $produit)
                                                            <tr>
                                                                <td>
                                                                    {{ $loop->iteration }}
                                                                </td>

                                                                <!-- Photo -->
                                                                <td
                                                                    style="
                                                                        width: 60px;
                                                                    "
                                                                >
                                                                    @if ($produit->photo && file_exists(public_path("storage/" . $produit->photo)))
                                                                        <img
                                                                            src="{{ asset("storage/" . $produit->photo) }}"
                                                                            alt="Photo"
                                                                            class="img-thumbnail"
                                                                            style="
                                                                                width: 50px;
                                                                                height: 50px;
                                                                                object-fit: cover;
                                                                            "
                                                                        />
                                                                    @else
                                                                        <div
                                                                            class="text-muted small"
                                                                        >
                                                                            Aucune
                                                                        </div>
                                                                    @endif
                                                                </td>

                                                                <td>
                                                                    {{ $produit->nom }}
                                                                </td>
                                                                <td>
                                                                    {{ $produit->categorie->nom ?? 'Aucune catégorie' }}
                                                                </td>
                                                                <td>
                                                                    {{ $produit->marque ?? "-" }}
                                                                </td>
                                                                <td>
                                                                    {{ $produit->modele ?? "-" }}
                                                                </td>
                                                                <td>
                                                                    {{ $produit->quantite ?? 0 }}
                                                                </td>
                                                                <td>
                                                                    {{ number_format($produit->prix, 0, ",", " ") }}
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="badge @if ($produit->etat == "neuf")
                                                                            bg-success
                                                                        @elseif ($produit->etat == "occasion")
                                                                            bg-warning
                                                                            text-dark
                                                                        @elseif ($produit->etat == "reconditionné")
                                                                            bg-info
                                                                            text-dark
                                                                        @else
                                                                            bg-secondary
                                                                        @endif"
                                                                    >
                                                                        {{ ucfirst($produit->etat) ?? "N/A" }}
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    {{ $produit->lieu_achat ?? "-" }}
                                                                </td>
                                                                <td>
                                                                    {{ $produit->date_achat ? \Carbon\Carbon::parse($produit->date_achat)->format("d/m/Y") : "-" }}
                                                                </td>
                                                                <td>
                                                                    {{ $produit->fournisseur ?? "-" }}
                                                                </td>

                                                                <!-- Description limitée -->
                                                                <td
                                                                    style="
                                                                        max-width: 200px;
                                                                        white-space: nowrap;
                                                                        overflow: hidden;
                                                                        text-overflow: ellipsis;
                                                                    "
                                                                >
                                                                    {{ $produit->description }}
                                                                </td>

                                                                <!-- Actions -->
                                                                <td
                                                                    class="text-center"
                                                                    style="
                                                                        min-width: 160px;
                                                                    "
                                                                >
                                                                    <div
                                                                        class="d-flex justify-content-center gap-1"
                                                                    >
                                                                        <!-- Bouton Modifier -->
                                                                        <a
                                                                            href="{{ route("produits.edit", $produit->id) }}"
                                                                            class="btn btn-sm btn-primary"
                                                                            title="Modifier"
                                                                        >
                                                                            Modifier
                                                                        </a>

                                                                        <!-- Formulaire Supprimer -->
                                                                        <form
                                                                            action="{{ route("produits.destroy", $produit->id) }}"
                                                                            method="POST"

                                                                        >
                                                                            @csrf
                                                                            @method("DELETE")
                                                                            <button
                                                                            type="button"
                                                                            class="btn btn-sm btn-danger btn-delete"
                                                                            data-url="{{ route('produits.destroy', $produit->id) }}"
                                                                            >
                                                                            Supprimer
                                                                            </button>


                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td
                                                                    colspan="14"
                                                                    class="text-center text-muted py-4"
                                                                >
                                                                    <i
                                                                        class="bi bi-box-seam fs-4"
                                                                    ></i>
                                                                    <br />
                                                                    Aucun
                                                                    produit
                                                                    trouvé.
                                                                </td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Row -->

                        <div class="row">

                            <!-- Modal de confirmation -->
                            <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">

                                    <div class="modal-header">
                                      <h5 class="modal-title text-danger" id="confirmDeleteModalLabel">Confirmer la suppression</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                    </div>

                                    <div class="modal-body">
                                      Êtes-vous sûr de vouloir supprimer ce produit ?
                                    </div>

                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                      <button type="button" class="btn btn-danger" id="btnConfirmDelete">Supprimer</button>
                                    </div>

                                  </div>
                                </div>
                              </div>


                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <div class="col-lg-12 mb-4"></div>
                        </div>
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

                        <form method="POST" action="{{ route("logout") }}">
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
        <script src="{{ asset("dashboard/vendor/jquery/jquery.min.js") }}"></script>
        <script src="{{ asset("dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset("dashboard/vendor/jquery-easing/jquery.easing.min.js") }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset("dashboard/js/sb-admin-2.min.js") }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset("dashboard/vendor/chart.js/Chart.min.js") }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset("dashboard/js/demo/chart-area-demo.js") }}"></script>
        <script src="{{ asset("dashboard/js/demo/chart-pie-demo.js") }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Récupérer le modal Bootstrap
                const modalElement = document.getElementById('confirmDeleteModal');
                const modal = new bootstrap.Modal(modalElement);
                let deleteUrl = null;

                // Bouton confirmer dans le modal
                const confirmBtn = document.getElementById('btnConfirmDelete');

                // Quand on clique sur un bouton supprimer dans le tableau
                document.querySelectorAll('.btn-delete').forEach(button => {
                    button.addEventListener('click', function () {
                        deleteUrl = this.getAttribute('data-url');
                        modal.show();
                    });
                });

                // Quand on confirme la suppression
                confirmBtn.addEventListener('click', function () {
                    if (!deleteUrl) return;

                    // Créer un formulaire dynamique pour envoyer la requête DELETE avec token CSRF
                    const form = document.createElement('form');
                    form.action = deleteUrl;
                    form.method = 'POST';

                    // Token CSRF
                    const csrfInput = document.createElement('input');
                    csrfInput.type = 'hidden';
                    csrfInput.name = '_token';
                    csrfInput.value = '{{ csrf_token() }}';

                    // Méthode DELETE
                    const methodInput = document.createElement('input');
                    methodInput.type = 'hidden';
                    methodInput.name = '_method';
                    methodInput.value = 'DELETE';

                    form.appendChild(csrfInput);
                    form.appendChild(methodInput);

                    document.body.appendChild(form);
                    form.submit();
                });
            });
            </script>

    </body>
</html>
