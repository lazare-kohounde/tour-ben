<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Détail</title>
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
            <h3 class="text-white display-3 mb-4">Détail du site touristique</h1>

        </div>
    </div>
    <!-- Header End -->

    <!-- Detail Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <!-- En-tête -->
            <div class="text-center mb-5">
                <h5 class="text-uppercase text-primary fw-semibold">Mémorial du Jubilé 2000</h5>
                <h1 class="display-6 fw-bold">Découvrez le site Tata Somba</h1>
            </div>

            <!-- Row image & formulaire -->
            <div class="row g-4">
                <!-- Carte Image -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm text-white">
                        <img src="/img/sites/tata_somba.jpg" class="card-img" alt="Tata Somba"
                            style="height: 450px; object-fit: cover;">
                    </div>
                </div>

                <!-- Carte Formulaire -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body d-flex flex-column h-100">
                            <h3 class="fw-semibold mb-4">Réservez Votre Expérience</h3>
                            <form method="POST" action="#" class="row g-3 flex-grow-1">
                                @csrf
                                <div class="col-12 form-floating">
                                    <input type="date" class="form-control" id="date" name="date" required
                                        min="{{ date('Y-m-d') }}">
                                    <label for="date">Date</label>
                                </div>
                                <div class="col-md-6 form-floating">
                                    <input type="time" class="form-control" id="heure" name="heure" required>
                                    <label for="heure">Heure</label>
                                </div>
                                <div class="col-md-6 form-floating">
                                    <input type="number" class="form-control" id="nombre_personnes"
                                        name="nombre_personnes" min="1" required value="1">
                                    <label for="nombre_personnes">Personnes</label>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-secondary w-100 py-3">
                                        <i class="bi bi-calendar2-check-fill me-2"></i> Confirmer
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description pleine largeur -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="p-4 bg-white shadow-sm rounded">
                        <h2 class="h5 fw-semibold">Description du site</h2>
                        <p class="mt-3 text-muted">
                            Le site historique des Tata Somba offre un panorama unique sur l’architecture traditionnelle
                            et la vie communautaire. Joignez-vous à une visite immersive guidée par des experts locaux
                            pour comprendre les techniques de construction ancestrales et les légendes du peuple Somba.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Detail End -->

    <!-- Subscribe Start -->
    <div class="container-fluid subscribe py-5">
        <div class="container text-center py-5">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <h5 class="subscribe-title px-3">Subscribe</h5>
                <h1 class="text-white mb-4">Our Newsletter</h1>
                <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore
                    nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita
                    laudantium fugiat corrupti eum cum repellat a laborum quasi.
                </p>
                <div class="position-relative mx-auto">
                    <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->

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


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
