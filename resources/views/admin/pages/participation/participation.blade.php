<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Tour-Ben Admin</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!--calendar css-->
    <link href="{{ asset('assets/plugins/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

</head>


<body>

    <!-- Navigation Bar-->
    @include('admin.layout.header')

    <!-- End Navigation Bar-->


    <div class="wrapper">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title mb-0">Participations </h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->

            {{-- Contenue proprement dit --}}
            <div class="mt-2">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title pb-3 mt-0">Listes des participations</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="align-self-center">
                                                <th>Auteur</th>
                                                <th>Statut</th>
                                                <th>Date de participation</th>
                                                <th>Motif</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($participations as $participation)
                                            <tr>
                                                <td>{{ $participation->touriste->name ?? 'N/A' }}</td>
                                                <td>
                                                    @if(strtolower($participation->statutPart) === 'confirmee')
                                                    <span class="badge badge-boxed badge-soft-success">Confirmée</span>
                                                    @elseif(strtolower($participation->statutPart) === 'en_attente')
                                                    <span class="badge badge-boxed badge-soft-warning">En attente</span>
                                                    @else
                                                    <span class="badge badge-boxed badge-soft-secondary">{{ ucfirst($participation->statutPart) }}</span>
                                                    @endif
                                                </td>
                                                <td>{{ $participation->datePart }}</td>
                                                <td>{{ $participation->motif ?? '-' }}</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Aucune participation trouvée.</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div><!--end table-responsive-->
                                <div class="pt-3 border-top text-right">
                                    <a href="#" class="text-primary">Voir tout <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->

        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        @include('admin.layout.footer')
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

        <!-- KNOB JS -->
        <script src="{{ asset('assets/plugins/jquery-knob/excanvas.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
        <script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
        <script src="{{ asset('assets/pages/dashboard.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>