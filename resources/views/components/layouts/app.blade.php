<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Seetanal">
    <meta name="description" content="Télévision en ligne">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title ?? 'Seetanal' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hls.js/0.5.52/hls.js"
        integrity="sha512-RXoyP2bZR8375NSpobokNjhyfqpNuAY7SRy+dwwNdjANTRxgYBnsFV61lXv+6aC8zhLM+RrHPMZY3J0rZyBaFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://vjs.zencdn.net/6.6.3/video.js"></script>
    <link href="https://unpkg.com/video.js@7/dist/video-js.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet" />
    <style>
        .video-container {
            position: sticky;
            top: 20px;
            /* Position sticky à partir du haut */
            right: 0;
            /* width: 650px; */
            /* Largeur du lecteur vidéo */
            /* height: 380px; */
            /* Hauteur du lecteur vidéo */
            z-index: 1000;
            /* Assurez-vous que le lecteur vidéo est au-dessus des autres éléments */
            /* border: 2px solid #ccc; */
            /* Optionnel : bordure pour mieux voir le lecteur vidéo */
            /* background: #000; */
            /* Optionnel : arrière-plan pour le lecteur vidéo */
            /* color: whitesmoke; */
        }

        /* .video-js {
            width: 100% !important;
            height: auto !important;
        } */
        /* .arrow-open {
            transform: rotate(90deg);
        } */
    </style>

</head>

<body>

    {{ $slot }}

    <!--==================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/plyr.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/plugin.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('opModal', (url) => {
                $('#goLiveMod').modal('show');
            });
        });
    </script>
    <script>
        document.addEventListener('livewire:init', () => {
            let hls = null;

            Livewire.on('playStream', url => {

                const video = document.getElementById('player');
                const errorMessage = document.getElementById('error-message');

                if (!video) {
                    console.error("Video element not found.");
                    return;
                }

                if (!url) {
                    console.error("Stream URL is not defined.");
                    return;
                }

                // Clear previous error message
                errorMessage.textContent = '';

                // Destroy the previous instance of Hls.js if it exists
                if (hls) {
                    hls.destroy();
                    hls = null;
                }

                if (Hls.isSupported()) {
                    hls = new Hls();
                    hls.loadSource(url);
                    hls.attachMedia(video);
                    hls.on(Hls.Events.MANIFEST_PARSED, function() {
                        video.play().catch(error => {
                            console.error("Playback error:", error);
                            Swal.fire({
                                icon: 'error',
                                title: 'Playback error',
                                text: error.message
                            });
                        });
                    });

                    hls.on(Hls.Events.ERROR, function(event, data) {
                        console.error("Hls.js error:", data);

                        if (data.fatal) {
                            switch (data.type) {
                                case Hls.ErrorTypes.NETWORK_ERROR:
                                    console.error("Network error:", data.details);
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Network error',
                                        text: 'Network error encountered. Please check the stream URL.'
                                    });
                                    break;
                                case Hls.ErrorTypes.MEDIA_ERROR:
                                    console.error("Media error:", data.details);
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Media error',
                                        text: 'Media error encountered. Attempting to recover...'
                                    });
                                    hls.recoverMediaError();
                                    break;
                                default:
                                    console.error("Fatal error:", data.details);
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Fatal error',
                                        text: 'A fatal error occurred while loading the stream.'
                                    });
                                    hls.destroy();
                                    break;
                            }
                        } else {
                            console.warn("Non-fatal error occurred:", data.details);

                            if (data.details === Hls.ErrorDetails.BUFFER_STALLED_ERROR) {
                                console.warn("Buffer stalled error, attempting to recover...");
                                hls.startLoad(); // Restart the load process
                                video.play().catch(error => {
                                    console.error("Playback error while recovering:",
                                        error);
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Playback error',
                                        text: error.message
                                    });
                                });
                            } else if (data.details === Hls.ErrorDetails.FRAG_LOAD_ERROR || data
                                .details === Hls.ErrorDetails.FRAG_LOAD_TIMEOUT) {
                                console.warn("Fragment load error, retrying...");
                                hls.startLoad();
                            }
                        }
                    });
                } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
                    video.src = url;
                    video.addEventListener('canplay', function() {
                        video.play().catch(error => {
                            console.error("Playback error:", error);
                            Swal.fire({
                                icon: 'error',
                                title: 'Playback error',
                                text: error.message
                            });
                        });
                    });
                } else {
                    console.error("HLS is not supported by your browser.");
                    Swal.fire({
                        icon: 'error',
                        title: 'HLS not supported',
                        text: 'HLS is not supported by your browser.'
                    });
                }
            });

        });
    </script>
    @stack('scripts')

</body>

</html>
