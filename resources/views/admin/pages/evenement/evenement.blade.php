<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Tour-Ben Admin</title>
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
                    <h4 class="page-title mb-0">Événements</h4>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                        Ajouter un événement
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
                    <h5 class="header-title pb-3 mt-0">Liste des événements</h5>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Libellé</th>
                                    <th>Image</th>
                                    <th>Prix</th>
                                    <th>Disponibilité</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($evenements as $evenement)
                                    <tr>
                                        <td>{{ $evenement->nomEve }}</td>
                                        <td>
                                            @if($evenement->image)
                                                <img src="{{ asset('storage/'.$evenement->image) }}" class="rounded" width="60" alt="Image événement" />
                                            @else
                                                <span class="text-muted">Aucune</span>
                                            @endif
                                        </td>
                                        <td>{{ number_format($evenement->prix, 0, ',', ' ') }} FCFA</td>
                                        <td>
                                            @if($evenement->disponibilite)
                                                <span class="badge badge-success">Disponible</span>
                                            @else
                                                <span class="badge badge-danger">Indisponible</span>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Bouton d'édition -->
                                            <button type="button" class="btn btn-sm btn-success"
                                                data-toggle="modal"
                                                data-target="#editModal{{ $evenement->id }}">
                                                <i class="fas fa-edit"></i>
                                            </button>

                                            <!-- Formulaire de suppression -->
                                            <form action="{{ route('evenements.destroy', $evenement->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- MODAL EDITION POUR CET ÉVÉNEMENT -->
                                    <div class="modal fade" id="editModal{{ $evenement->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <form action="{{ route('evenements.update', $evenement->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modifier l'événement</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Libellé</label>
                                                            <input type="text" name="nomEve" class="form-control" value="{{ $evenement->nomEve }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Prix</label>
                                                            <input type="number" name="prix" class="form-control" value="{{ $evenement->prix }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea name="description" class="form-control" rows="3" required>{{ $evenement->description }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Disponibilité</label>
                                                            <select name="disponibilite" class="form-control" required>
                                                                <option value="1" {{ $evenement->disponibilite ? 'selected' : '' }}>Disponible</option>
                                                                <option value="0" {{ !$evenement->disponibilite ? 'selected' : '' }}>Indisponible</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image actuelle</label><br>
                                                            @if($evenement->image)
                                                                <img src="{{ asset('storage/'.$evenement->image) }}" width="80" alt="Image actuelle" />
                                                            @else
                                                                <span class="text-muted">Aucune</span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nouvelle image (laisser vide pour conserver l'image actuelle)</label>
                                                            <input type="file" name="image" class="form-control-file">
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
                                        <td colspan="5" class="text-center">Aucun événement trouvé.</td>
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
                        <form action="{{ route('evenements.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Ajouter un événement</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Libellé</label>
                                    <input type="text" name="nomEve" class="form-control" required>
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
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control-file">
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
