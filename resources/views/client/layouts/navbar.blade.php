<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
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

<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('accueilClient') }}" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Tour-Ben</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('accueilClient') }}" @class([
                'nav-item',
                'nav-link',
                'active' => request()->routeIs('accueilClient'),
            ])>
                Accueil
            </a>
            <a href="{{ route('site_touristique') }}" @class([
                'nav-item',
                'nav-link',
                'active' => request()->routeIs('site_touristique'),
            ])>
                Site touristique
            </a>
            <a href="{{ route('evenements') }}" @class([
                'nav-item',
                'nav-link',
                'active' => request()->routeIs('evenements'),
            ])>
                Evènements
            </a>

            <a href="{{ route('historique') }}" @class([
                'nav-item',
                'nav-link',
                'active' => request()->routeIs('historique'),
            ])>
                Historique
            </a>

            <a href="{{ route('contact') }}" @class([
                'nav-item',
                'nav-link',
                'active' => request()->routeIs('contact'),
            ])>
                Contact
            </a>
        </div>
        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Reserver maintenant</a>
    </div>
</nav>
