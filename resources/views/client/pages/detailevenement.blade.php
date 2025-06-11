<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Paiement</title>
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
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
    <div class=" bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Paiement</h1>

        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container p-5">
        <div>
            <div class="container my-4">
                <img src="{{ $evenement->image ? asset('storage/' . $evenement->image) : '/img/evenement/default.jpg' }}" alt="Image" class="img-fluid mb-3" style="max-height: 300px; object-fit: cover;">
                <h2>{{ $evenement->nomEve }}</h2>
                <p><strong>Prix :</strong> {{ $evenement->prix > 0 ? number_format($evenement->prix, 0, ',', ' ') . ' FCFA' : 'Gratuit' }}</p>
                <p><strong>Disponibilité :</strong> {{ $evenement->disponibilite ? 'Disponible' : 'Indisponible' }}</p>
                <p><strong>Description :</strong> {{ $evenement->description }}</p>

                <hr>

                <h4>Formulaire de participation</h4>

                <form id="payment-form">
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" id="prenom" name="prenom" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="telephone" class="form-label">Numéro de téléphone</label>
                        <input type="tel" id="telephone" name="telephone" class="form-control" required pattern="^\+?\d{9,15}$" placeholder="+229xxxxxxxxx">
                        <div class="form-text">Entrez un numéro valide avec indicatif pays</div>
                    </div>

                    <button type="submit" id="fedapay-btn" class="btn btn-success">Payer</button>
                </form>

            </div>
        </div>
    </div>
    <!-- Contact End -->



    <!-- Footer Start -->
    @include('client.layouts.footer')
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
    <script>
        document.getElementById('payment-form').addEventListener('submit', function(event) {
            event.preventDefault();

            // Récupérer les infos du formulaire
            var nom = document.getElementById('nom').value.trim();
            var prenom = document.getElementById('prenom').value.trim();
            var telephone = document.getElementById('telephone').value.trim();

            // Validation simple
            if (!nom || !prenom || !telephone) {
                alert('Veuillez remplir tous les champs.');
                return;
            }

            // Initialiser Fedapay
            FedaPay.init('#fedapay-btn', {
                public_key: "pk_sandbox_1l6bRH8oSU0oei0VTTB0MvxE", // Remplace par ta clé publique sandbox
                transaction: {
                    amount: parseFloat("{{ $evenement->prix }}"), // Montant à payer
                    currency: {
                        iso: "XOF" // Franc CFA
                    },
                    description: "Participation à {{ $evenement->nomEve }}",
                },
                customer: {
                    firstname: prenom,
                    lastname: nom,
                    phone_number: {
                        number: telephone,
                        country: "BJ" // Adapté pour Bénin, modifie si besoin
                    }
                },
                
                onError: function(error) {
                    alert('Une erreur est survenue lors du paiement. Veuillez réessayer.');
                }
            });
        });
    </script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>