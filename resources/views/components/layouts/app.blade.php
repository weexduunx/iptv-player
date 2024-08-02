<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'IPTV Player' }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/6.6.3/video.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hls.js/0.5.14/hls.js"
        integrity="sha512-Uxb1LSW1XkMpEWsi4HguYGAHbXnNP5h0On1bBlSOZmEe42ajm2TCVy6khtfr5jFfjlToaG/mrN6R5zslmOCnAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    </style>
</head>

<body>
    {{ $slot }}
    @stack('scripts')
</body>

</html>
