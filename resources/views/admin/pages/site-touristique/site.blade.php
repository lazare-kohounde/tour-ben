<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Tour-Ben Admin - Sites touristiques</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
</head>
<body>
    @include('admin.layout.header')

    <div class="wrapper">
        <div class="container-fluid">

            <div class="row mt-3 mb-2">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h4 class="page-title mb-0">Sites touristiques</h4>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                        Ajouter un site
                    </button>
                </div>
            </div>

            {{-- Messages --}}
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="header-title pb-3 mt-0">Liste des sites touristiques</h5>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Libellé</th>
                                    <th>Images</th>
                                    <th>Prix</th>
                                    <th>Disponibilité</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($sites as $site)
                                    <tr>
                                        <td>{{ $site->nomSit }}</td>
                                        <td>
                                            @if($site->image)
                                                @foreach(json_decode($site->image, true) as $img)
                                                    <img src="{{ asset('storage/'.$img) }}" class="rounded mb-1" width="50" height="50" style="object-fit:cover;" alt="Image site" />
                                                @endforeach
                                            @else
                                                <span class="text-muted">Aucune</span>
                                            @endif
                                        </td>
                                        <td>{{ number_format($site->prix, 0, ',', ' ') }} XOF</td>
                                        <td>
                                            @if($site->disponibilite)
                                                <span class="badge badge-success">Disponible</span>
                                            @else
                                                <span class="badge badge-danger">Indisponible</span>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Bouton d'édition -->
                                            <button type="button" class="btn btn-sm btn-success"
                                                data-toggle="modal"
                                                data-target="#editModal{{ $site->id }}">
                                                <i class="fas fa-edit"></i>
                                            </button>

                                            <!-- Formulaire de suppression -->
                                            <form action="{{ route('sites.destroy', $site->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce site touristique ?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- MODAL EDITION POUR CE SITE -->
                                    <div class="modal fade" id="editModal{{ $site->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <form action="{{ route('sites.update', $site->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modifier le site</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Libellé</label>
                                                            <input type="text" name="nomSit" class="form-control" value="{{ $site->nomSit }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Prix</label>
                                                            <input type="number" name="prix" class="form-control" value="{{ $site->prix }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea name="description" class="form-control" rows="3" required>{{ $site->description }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Disponibilité</label>
                                                            <select name="disponibilite" class="form-control" required>
                                                                <option value="1" {{ $site->disponibilite ? 'selected' : '' }}>Disponible</option>
                                                                <option value="0" {{ !$site->disponibilite ? 'selected' : '' }}>Indisponible</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Images actuelles</label><br>
                                                            @if($site->image)
                                                                @foreach(json_decode($site->image, true) as $img)
                                                                    <img src="{{ asset('storage/'.$img) }}" width="60" height="60" class="rounded mb-1" style="object-fit:cover;" alt="Image actuelle" />
                                                                @endforeach
                                                            @else
                                                                <span class="text-muted">Aucune</span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Ajouter de nouvelles images (celles-ci s'ajouteront aux anciennes)</label>
                                                            <input type="file" name="images[]" class="form-control-file" multiple>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FIN MODAL EDITION -->
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Aucun site trouvé.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- MODAL AJOUT -->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form action="{{ route('sites.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Ajouter un site touristique</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Libellé</label>
                                    <input type="text" name="nomSit" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Prix</label>
                                    <input type="number" name="prix" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Disponibilité</label>
                                    <select name="disponibilite" class="form-control" required>
                                        <option value="1">Disponible</option>
                                        <option value="0">Indisponible</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Images</label>
                                    <input type="file" name="images[]" class="form-control-file" multiple>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- FIN MODAL AJOUT -->

        </div>
    </div>

    @include('admin.layout.footer')

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
