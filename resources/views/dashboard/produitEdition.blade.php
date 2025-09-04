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
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card shadow-sm">
                                    <div class="card-header bg-success text-white">
                                        <h5 class="mb-0">Modifier le produit : <strong>{{ $produit->nom }}</strong></h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('produits.update', $produit->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group mb-3">
                                                <label for="nom" class="fw-bold">Nom du produit / équipement <span class="text-danger">*</span></label>
                                                <input type="text" name="nom" id="nom" value="{{ old('nom', $produit->nom) }}" required class="form-control" placeholder="Entrez le nom complet">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="categorie_id" class="fw-bold">Catégorie <span class="text-danger">*</span></label>
                                                <select name="categorie_id" id="categorie_id" class="form-control" required>
                                                    <option value="" disabled {{ old('categorie_id', $produit->categorie_id) ? '' : 'selected' }}>
                                                        Choisir une catégorie
                                                    </option>
                                                    @foreach($categories as $categorie)
                                                        <option value="{{ $categorie->id }}"
                                                            {{ old('categorie_id', $produit->categorie_id) == $categorie->id ? 'selected' : '' }}>
                                                            {{ ucfirst($categorie->nom) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="form-group mb-3">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="description" class="form-control" rows="3" placeholder="Description détaillée">{{ old('description', $produit->description) }}</textarea>
                                            </div>

                                            <div class="form-row mb-3">
                                                <div class="col-md-6">
                                                    <label for="marque">Marque</label>
                                                    <input type="text" name="marque" id="marque" class="form-control" value="{{ old('marque', $produit->marque) }}" placeholder="Ex : Cromatest, TERUMO...">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="modele">Modèle</label>
                                                    <input type="text" name="modele" id="modele" class="form-control" value="{{ old('modele', $produit->modele) }}" placeholder="Numéro ou nom du modèle">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="etat">État du produit</label>
                                                <select name="etat" id="etat" class="form-control">
                                                    <option value="" disabled {{ old('etat', $produit->etat) ? '' : 'selected' }}>Choisir l'état</option>
                                                    <option value="neuf" {{ old('etat', $produit->etat) === 'neuf' ? 'selected' : '' }}>Neuf</option>
                                                    <option value="occasion" {{ old('etat', $produit->etat) === 'occasion' ? 'selected' : '' }}>Occasion</option>
                                                    <option value="reconditionné" {{ old('etat', $produit->etat) === 'reconditionné' ? 'selected' : '' }}>Reconditionné</option>
                                                </select>
                                            </div>

                                            <div class="form-row mb-3">
                                                <div class="col-md-4">
                                                    <label for="quantite">Quantité en stock</label>
                                                    <input type="number" name="quantite" id="quantite" min="0" class="form-control" value="{{ old('quantite', $produit->quantite) }}" placeholder="0">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="prix">Prix unitaire (en FCFA)</label>
                                                    <input type="number" step="0.01" name="prix" id="prix" min="0" class="form-control" value="{{ old('prix', $produit->prix) }}" placeholder="0.00">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="lieu_achat">Lieu d'achat</label>
                                                    <input type="text" name="lieu_achat" id="lieu_achat" class="form-control" value="{{ old('lieu_achat', $produit->lieu_achat) }}" placeholder="Ex : Cotonou, Paris...">
                                                </div>
                                            </div>

                                            <div class="form-row mb-3">
                                                <div class="col-md-6">
                                                    <label for="date_achat">Date d'achat</label>
                                                    <input type="date" name="date_achat" id="date_achat" class="form-control" value="{{ old('date_achat', $produit->date_achat ? $produit->date_achat->format('Y-m-d') : '') }}">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="fournisseur">Fournisseur</label>
                                                    <input type="text" name="fournisseur" id="fournisseur" class="form-control" value="{{ old('fournisseur', $produit->fournisseur) }}" placeholder="Nom du fournisseur">
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <label for="photo">Image du produit</label>
                                                @if ($produit->photo)
                                                    <div class="mb-2">
                                                        <img src="{{ asset('storage/' . $produit->photo) }}" alt="Photo {{ $produit->nom }}" class="img-thumbnail" style="max-height: 150px;">
                                                    </div>
                                                @endif
                                                <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
                                            </div>

                                            <button type="submit" class="btn btn-success w-100">Mettre à jour</button>
                                        </form>
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
