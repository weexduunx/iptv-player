<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Seetanal">
    <meta name="description" content="Télévision en ligne">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title ?? 'Seetanal' }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hls.js/0.5.52/hls.js"
        integrity="sha512-RXoyP2bZR8375NSpobokNjhyfqpNuAY7SRy+dwwNdjANTRxgYBnsFV61lXv+6aC8zhLM+RrHPMZY3J0rZyBaFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/6.6.3/video.js"></script>
    <style>
        .video-container {
            position: sticky;
            top: 20px;
            /* Position sticky à partir du haut */
            right: 0;
            width: 650px;
            /* Largeur du lecteur vidéo */
            height: 380px;
            /* Hauteur du lecteur vidéo */
            z-index: 1000;
            /* Assurez-vous que le lecteur vidéo est au-dessus des autres éléments */
            border: 2px solid #ccc;
            /* Optionnel : bordure pour mieux voir le lecteur vidéo */
            /* background: #000; */
            /* Optionnel : arrière-plan pour le lecteur vidéo */
            color: whitesmoke;
        }

        /* .arrow-open {
            transform: rotate(90deg);
        } */
    </style>

</head>

<body>

    <!-- start preloader -->
    <div class="preloader align-items-center justify-content-center">
        <span class="loader"></span>
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-lg-block"><i class="mat-icon fas fa-angle-double-up"></i></button>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section header-menu">
        <nav class="navbar navbar-expand-lg p-0">
            <div class="container">
                <nav class="navbar w-100 navbar-expand-lg justify-content-betweenm">
                    <a href="/" class="navbar-brand">
                        {{-- <img src="assets/images/logo.png" class="logo" alt="logo"> --}}
                        <h5 style="color: #0085FF">Kaay Seetan</h5>
                    </a>
                    <button class="button search-active d-block d-md-none">
                        <i class="d-center material-symbols-outlined fs-xxl mat-icon"> search </i>
                    </button>
                    <div class="search-form">
                        <form action="#" class="input-area d-flex align-items-center">
                            <i class="material-symbols-outlined mat-icon">search</i>
                            <input type="text" placeholder="Rechercher une chaîne" autocomplete="off">
                        </form>
                    </div>
                    <ul
                        class="navbar-nav feed flex-row gap-xl-20 gap-lg-10 gap-sm-7 gap-1 py-4 py-lg-0 m-lg-auto ms-auto ms-aut align-self-center">
                        {{-- <li>
                            <a href="/" class="nav-icon home active"><i
                                    class="mat-icon fs-xxl material-symbols-outlined mat-icon">home</i></a>
                        </li>
                        <li>
                            <a href="#news-feed" class="nav-icon feed"><i
                                    class="mat-icon fs-xxl material-symbols-outlined mat-icon">feed</i></a>
                        </li>
                        <li>
                            <a href="group.html" class="nav-icon"><i
                                    class="mat-icon fs-xxl material-symbols-outlined mat-icon">group</i></a>
                        </li>
                        <li>
                            <a href="/iptv" class="nav-icon"><i
                                    class="mat-icon fs-xxl material-symbols-outlined mat-icon">smart_display</i></a>
                        </li> --}}
                    </ul>
                    <div class="right-area position-relative d-flex gap-3 gap-xxl-6 align-items-center">
                        <div class="single-item d-none d-lg-block  position-relative">
                            <div class="switch-wrapper mt-4 d-flex gap-1 align-items-center">
                                <i class="mat-icon material-symbols-outlined sun icon"> light_mode </i>
                                <label class="switch">
                                    <input type="checkbox" class="checkbox">
                                    <span class="slider"></span>
                                </label>
                                <i class="mat-icon material-symbols-outlined moon icon"> dark_mode </i>
                                {{-- <span class="mdtxt ms-2">Dark mode</span> --}}
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </nav>
    </header>
    <!-- header-section end -->


    <!-- Main Content start -->
    <main class="main-content">
        {{ $slot }}
    </main>
    <!-- Main Content end -->

    <!--==================================================================-->
    <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/plugins/plyr.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/plugin.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')

</body>

</html>
