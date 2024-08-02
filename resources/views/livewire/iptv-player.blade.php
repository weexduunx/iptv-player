<div class="container mt-4">
    <h1 class="mb-4 text-center">Lecteur IPTV</h1>
    <div class="row">
        <!-- Colonne pour la liste des chaînes -->
        <div class="col-md-4">
            <h2 class="h5">Liste des chaînes</h2>
            <ul class="list-group">
                @foreach ($channels as $channel)
                    <li class="list-group-item list-group-item-action" wire:click="playStream('{{ $channel['url'] }}')"
                        style="cursor: pointer;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <strong>{{ $channel['name'] }}</strong>
                                <br>
                                <small>{{ $channel['tvg_name'] }}</small>
                            </div>
                            @if ($channel['iconUrl'])
                                <img src="{{ $channel['iconUrl'] }}" alt="{{ $channel['name'] }}" class="img-fluid"
                                    style="max-width: 50px;">
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Colonne pour l'affichage de la vidéo -->
        <div class="col-md-8">
            <div class="video-container">
                <div class="embed-responsive embed-responsive-16by9 ">
                    {{-- <video id="player" controls></video> --}}
                    <video wire:ignore.self id="player" class="video-js vjs-default-skin" width="650"
                        height="350" controls></video>
                </div>
                <div id="error-message" class="text-danger mt-2"></div>
            </div>

        </div>
    </div>
</div>
@push('scripts')
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('playStream', url => {
                var video = document.getElementById('player');
                var errorMessage = document.getElementById('error-message');

                if (!video) {
                    console.error("Video element not found.");
                    return;
                }

                if (!url) {
                    console.error("Stream URL is not defined.");
                    return;
                }

                // const proxyUrl = `/proxy?url=${url}`;
                // console.log("Proxy URL:", proxyUrl);

                if (Hls.isSupported()) {
                    var hls = new Hls({
                        debug: true,
                        enableWorker: true,
                        lowLatencyMode: true,
                        backBufferLength: 90
                    });

                    hls.loadSource(url);
                    hls.attachMedia(video);

                    hls.on(Hls.Events.MANIFEST_PARSED, function() {
                        console.log("Manifest parsed. Starting playback.");
                        video.play().catch(error => {
                            console.error("Playback error:", error);
                            errorMessage.textContent = "Playback error: " + error.message;
                        });
                    });

                    hls.on(Hls.Events.ERROR, function(event, data) {
                        if (data.fatal) {
                            switch (data.fatal) {
                                case Hls.ErrorTypes.NETWORK_ERROR:
                                    console.error("Network error:", data.details);
                                    errorMessage.textContent =
                                        "Network error encountered. Please check the stream URL.";
                                    break;
                                case Hls.ErrorTypes.MEDIA_ERROR:
                                    console.error("Media error:", data.details);
                                    errorMessage.textContent =
                                        "Media error encountered. The stream might be corrupted.";
                                    break;
                                case Hls.ErrorTypes.OTHER_ERROR:
                                    console.error("Other error:", data.details);
                                    errorMessage.textContent = "An unknown error occurred.";
                                    break;
                                default:
                                    console.error("Fatal error:", data.details);
                                    errorMessage.textContent =
                                        "A fatal error occurred while loading the stream.";
                                    break;
                            }
                        }
                    });
                } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
                    video.src = url;
                    video.addEventListener('canplay', function() {
                        video.play().catch(error => {
                            console.error("Playback error:", error);
                            errorMessage.textContent = "Playback error: " + error.message;
                        });
                    });
                } else {
                    console.error("HLS is not supported by your browser.");
                    errorMessage.textContent = "HLS is not supported by your browser.";
                }
            });
        });
    </script>
@endpush
