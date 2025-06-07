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

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Chargement...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('client.layouts.topbar')
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">

        @include('client.layouts.navbar')
        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explorez
                                    le paysage</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Ensemble, construisons le Bénin !
                                </h1>
                                <p class="mb-5 fs-5">Découvrez Tour-Ben, votre passerelle vers les richesses
                                    touristiques et culturelles du Bénin. En un clic, réservez des expériences
                                    authentiques qui font rayonner notre patrimoine.
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                        href="#">Découvrez maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explorer
                                    nos activités</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Trouvez votre circuit idéal chez
                                    Tour-Ben
                                </h1>
                                <p class="mb-5 fs-5">Découvrez une sélection de circuits sur-mesure pour tous les goûts
                                    : patrimoine historique, escapades nature ou festivals culturels. Avec Tour-Ben,
                                    planifiez simplement votre aventure et vivez des expériences inoubliables au cœur du
                                    Bénin.
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                        href="#">Découvrez maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-3.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explorer
                                    le monde</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4">Tu aimes y aller ?</h1>
                                <p class="mb-5 fs-5">Vous aimez l’aventure ? Avec Tour-Ben, laissez-vous guider vers des
                                    expériences qui vous correspondent et partagez votre passion pour le Bénin.
                                    N’attendez plus, embarquez !
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5"
                                        href="#">Découvrez maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
    </div>
    <div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
        <div class="container">
            <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: rgba(19, 53, 123, 0.8);">
                <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                    placeholder="Recherche...">
                <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2"
                    style="top: 50%; right: 46px; transform: translateY(-50%);">Recherche</button>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Destination Start -->
    <div class="container-fluid destination ">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Destination</h5>
                <h1 class="mb-0">Site touristique</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active"
                       href="{{Route('site_touristique')}}">
                            <span class="text-dark" style="width: 150px;">Tous voir</span>
                        </a>
                    </li>
                </ul>

                {{-- Images des sites --}}
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-xl-8">
                                <div class="row g-4">
                                    {{-- Ouidah --}}
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100"
                                                src="/img/sites/porte_du_non_retour.jpg"
                                                alt="La porte du non retour de Ouidah"
                                                style="height: 250px; object-fit: cover;">

                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Ouidah</h4>
                                                <a href="{{Route('site.detail')}}" class="btn-hover text-white">Reserver <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/destination-1.jpg" data-lightbox="destination-1"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Ouidah --}}
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="/img/sites/memoire.png"alt=""
                                                style="height: 250px; object-fit: cover";>
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Ouidah</h4>
                                                <a href="{{Route('site.detail')}}" class="btn-hover text-white">Reserver<i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/destination-2.jpg" data-lightbox="destination-2"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Abomey --}}
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100"
                                                src="/img/sites/palais_royal_abomey.jpg" alt="Palais royal d'Abomey"
                                                style="height: 250px; object-fit: cover";>
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Abomey</h4>
                                                <a href="{{Route('site.detail')}}" class="btn-hover text-white">Reserver <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/destination-7.jpg" data-lightbox="destination-7"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Natitingou --}}
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="/img/sites/tata_somba.jpg"
                                                alt="Tata Somba" style="height: 250px; object-fit: cover";>
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Natitingou</h4>
                                                <a href="{{Route('site.detail')}}" class="btn-hover text-white">Reserver <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/destination-8.jpg" data-lightbox="destination-8"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Cotonou --}}
                            <div class="col-xl-4">
                                <div class="destination-img h-100">
                                    <img class="img-fluid rounded w-100 h-100" src="/img/sites/monument_amazone.jpg"
                                        aria-label="La place Amazone" style="height: 250px; object-fit: cover";
                                        alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                            Photos</a>
                                        <h4 class="text-white mb-2 mt-3">Cotonou</h4>
                                        <a href="{{Route('site.detail')}}" class="btn-hover text-white">reserver <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="img/destination-9.jpg" data-lightbox="destination-4"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination End -->

    <!-- Evènement Start -->
    <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Evenement culturels</h5>
                <h1 class="mb-0">Rejoins Nous </h1>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4 d-flex">
                    <div class="packages-item d-flex flex-column h-120 w-100">
                        <div class="packages-img position-relative">
                            <img src="/img/evenement/event2.jpg" class="img-fluid w-100 rounded-top object-fit-cover"
                                alt="Image" style="height:250px;">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Cotonou</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>10/05/2025</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2000
                                    Personnes</small>
                            </div>
                            <div class="packages-price py-2 px-4">25000 FCFA</div>
                        </div>
                        <div class="packages-content bg-light flex-grow-1 d-flex flex-column">
                            <div class="p-4 pb-0">
                                <h5 class="mb-2">Ouidah</h5>
                                <p class="mb-4">Le Festival Couleurs d’Afrique est un événement culturel béninois qui
                                    célèbre l’art et la diversité africaine à travers des expositions, spectacles et
                                    créations artistiques.</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0 mt-auto">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">voir plus</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Participer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex">
                    <div class="packages-item d-flex flex-column h-120 w-100">
                        <div class="packages-img position-relative">
                            <img src="/img/evenement/vodoun5.jpg" class="img-fluid w-100 rounded-top object-fit-cover"
                                alt="Image" style="height:250px;">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Ouidah</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>10/01/2026</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Nombre
                                    illimité</small>
                            </div>
                            <div class="packages-price py-2 px-4">Gratuit</div>
                        </div>
                        <div class="packages-content bg-light flex-grow-1 d-flex flex-column">
                            <div class="p-4 pb-0">
                                <h5 class="mb-2">Discover Bénin</h5>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt
                                    nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0 mt-auto">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">voir plus</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Participer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex">
                    <div class="packages-item d-flex flex-column h-120 w-100">
                        <div class="packages-img position-relative">
                            <img src="img/evenement/vodoun6.jpg" class="img-fluid w-100 rounded-top object-fit-cover"
                                alt="Image" style="height:250px;">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Porto-Novo</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>1000
                                    personnes ou plus</small>
                            </div>
                            <div class="packages-price py-2 px-4">3000 FCFA</div>
                        </div>
                        <div class="packages-content bg-light flex-grow-1 d-flex flex-column">
                            <div class="p-4 pb-0">
                                <h5 class="mb-2">Adjara party</h5>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt
                                    nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0 mt-auto">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">voir plus</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Participer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Evènement End -->

    <!-- Tour Booking Start -->
    <div class="container-fluid booking py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h5 class="section-booking-title pe-3">Réservation en ligne</h5>
                    <h1 class="text-white mb-4">Réservation en ligne</h1>
                    <p class="text-white mb-4">Réservez facilement votre place pour les évènements culturels et les
                        visites de sites touristiques les plus populaires. Concerts, festivals, musées, monuments...
                        tout est ici.</p>
                    <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Voir plus</a>
                </div>
                <div class="col-lg-6">
                    <h1 class="text-white mb-3">Réservez un évènement ou un site touristique</h1>
                    <p class="text-white mb-4"> <span class="text-warning"></span>Première réservation ? Obtenez
                        jusqu’à 50% de réduction sur les évènements et sites touristiques !</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-0" id="name"
                                        placeholder="Nom complet">
                                    <label for="name">Nom complet</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-white border-0" id="email"
                                        placeholder="Adresse e-mail">
                                    <label for="email">Adresse e-mail</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control bg-white border-0" id="datetime"
                                        placeholder="Date & Time" data-target="#date3"
                                        data-toggle="datetimepicker" />
                                    <label for="datetime"> Date de l’évènement</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="select1">
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 2</option>
                                        <option value="3">Destination 3</option>
                                    </select>
                                    <label for="select1">Lieu ou site</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="SelectPerson">
                                        <option value="1">Personne 1</option>
                                        <option value="2">Personne 2</option>
                                        <option value="3">Personne 3</option>
                                        <option value="4">Personne 4</option>
                                        <option value="5">Personne 5</option>
                                    </select>
                                    <label for="SelectPerson">Nombre de personnes</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="CategoriesSelect">
                                        <option value="1">Kids</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <label for="CategoriesSelect">Type d’évènement</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-white border-0" placeholder="Message ou besoin spécifique" id="message"
                                        style="height: 100px"></textarea>
                                    <label for="message">Message ou besoin spécifique</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary text-white w-100 py-3" type="submit">Réserver
                                    maintenant</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Tour Booking End -->
    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="h-150"
                        style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                        <img src="img/about-img.jpg" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
                <div class="col-lg-7"
                    style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                    <h5 class="section-about-title pe-3">A propos de nous</h5>
                    <h1 class="mb-4">Bienvenue sur <span class="text-primary">TourBen, </span></h1>
                    <p class="mb-4">votre nouvelle passerelle vers la découverte et la culture. Nous avons
                        imaginé
                        et développé une solution intuitive qui simplifie la réservation de visites de sites
                        touristiques et l’inscription à des événements culturels, pour que chaque expérience
                        devienne un
                        souvenir inoubliable. </p>
                    <h2 class="text-primary">Notre mission</h2>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Accessibilité :
                                offrir une interface claire et conviviale, accessible à tous les voyageurs, qu’ils
                                soient novices ou passionnés d’aventure.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Diversité :
                                proposer
                                un large éventail de destinations — monuments historiques, parcs naturels, musées,
                                ainsi
                                que festivals, expositions et spectacles vivants.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Personnalisation
                                :
                                permettre à chacun de composer son parcours selon ses envies (visites guidées,
                                visites
                                libres, ateliers thématiques…) et de recevoir des recommandations sur mesure
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Nous mettons un
                                point
                                d'honneur à rendre notre plateforme accessible 24h/24 et 7j/7, afin que vous
                                puissiez
                                planifier vos visites et événements à tout moment, où que vous soyez
                            </p>
                        </div>
                    </div>
                    <h2 class="text-primary">Pourquoi nous choisir ?</h2>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Fiabilité : des
                                partenariats exclusifs avec des acteurs locaux pour garantir des informations à jour
                                et
                                des prestations de qualité.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Sécurité :
                                paiement
                                en ligne sécurisé et support client à l’écoute avant, pendant et après votre
                                expérience..</p>
                        </div>
                    </div>

                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Visiter les sites
                        touristiques et évènements</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Travel Guide Start -->
    <div class="container-fluid guide py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Travel Guide</h5>
                <h1 class="mb-0">Meet Our Guide</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="img/guide-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="img/guide-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="img/guide-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="img/guide-4.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Travel Guide End -->



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
