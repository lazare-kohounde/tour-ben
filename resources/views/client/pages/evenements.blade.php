<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Evenements</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('client.layouts.topbar')
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('client.layouts.navbar')
    </div>
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Nos evenement culturels </h1>

        </div>
    </div>
    <!-- Header End -->

    <!-- Packages Start -->
    <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Evenement culturels</h5>
                <h1 class="mb-0">Rejoins Nous </h1>
            </div>
            <div class="row">
                @forelse($evenements as $evenement)
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card w-100 h-100">
                        @if($evenement->image)
                        <img src="{{ asset('storage/' . $evenement->image) }}"
                            class="card-img-top"
                            alt="Image de {{ $evenement->nomEve }}"
                            style="height:200px; object-fit:cover;">
                        @else
                        <img src="/img/evenement/default.jpg"
                            class="card-img-top"
                            alt="Image par défaut"
                            style="height:200px; object-fit:cover;">
                        @endif
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $evenement->nomEve }}</h5>
                            <p class="">
                                <strong>Prix :</strong>
                                {{ $evenement->prix > 0 ? number_format($evenement->prix, 0, ',', ' ') . ' FCFA' : 'Gratuit' }}
                            </p>
                            <p class="mb-2 badge {{ $evenement->disponibilite ? 'badge-success' : 'badge-danger' }}" style="color: black;">
                                {{ $evenement->disponibilite ? 'Disponible' : 'Indisponible' }}
                            </p>
                            <a href="{{ route('detailevenement', ['id' => $evenement->id]) }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">
                                Participer
                            </a>


                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalEvenement{{ $evenement->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $evenement->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel{{ $evenement->id }}">{{ $evenement->nomEve }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ $evenement->image ? asset('storage/' . $evenement->image) : '/img/evenement/default.jpg' }}" alt="Image" style="width:100%;height:200px;object-fit:cover;">
                                <p><strong>Description :</strong> {{ $evenement->description }}</p>
                                <p><strong>Prix :</strong> {{ $evenement->prix > 0 ? number_format($evenement->prix, 0, ',', ' ') . ' FCFA' : 'Gratuit' }}</p>
                                <p><strong>Disponibilité :</strong> {{ $evenement->disponibilite ? 'Disponible' : 'Indisponible' }}</p>
                                <p><strong>Date d'ajout :</strong> {{ \Carbon\Carbon::parse($evenement->created_at)->format('d/m/Y à H:i') }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <button
                                    class="btn btn-success pay-btn"
                                    data-id="{{ $evenement->id }}"
                                    data-montant="{{ $evenement->prix }}"
                                    data-titre="{{ $evenement->nomEve }}"
                                    id="pay-btn-{{ $evenement->id }}">
                                    Payer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                @empty
                <div class="col-12 text-center">
                    <p>Aucun événement trouvé.</p>
                </div>
                @endforelse
            </div>


        </div>
    </div>
    <!-- Packages End -->

    

    

    <!-- Footer Start -->
    @include('client.layouts.footer')
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.pay-btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var id = this.getAttribute('data-id');
                    var montant = this.getAttribute('data-montant');
                    var titre = this.getAttribute('data-titre');
                    FedaPay.init('#' + this.id, {
                        public_key: 'pk_sandbox_1l6bRH8oSU0oei0VTTB0MvxE', // Remplacez par votre clé publique Fedapay
                        transaction: {
                            amount: montant,
                            description: 'Participation à ' + titre,
                            custom_metadata: {
                                id: id,
                                montant: montant,
                                titre: titre
                            }
                        },
                        // Vous pouvez ajouter ici les infos du client si besoin
                        onComplete: function(transaction) {
                            // Redirection ou traitement après paiement réussi
                            window.location.reload();
                        }
                    });
                });
            });
        });
    </script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>