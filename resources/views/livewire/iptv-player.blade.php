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
            @if ($currentStream)
                <div class="embed-responsive embed-responsive-16by9">
                    <video id="iptv-player" class="embed-responsive-item" controls preload="metadata">
                        <source src="{{ $currentStream }}" type="application/x-mpegURL">
                        <track label="English" kind="captions" srclang="en" src="resources/myvideo-en.vtt" default>

                        Votre navigateur ne supporte pas le lecteur de vidéos.
                    </video>
                </div>
            @else
                <p class="text-center">Sélectionnez une chaîne pour commencer la lecture.</p>
            @endif
        </div>
    </div>
</div>
@push('scripts')
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('streamUpdated', () => {
                var player = document.getElementById('iptv-player');
                if (player) {
                    player.load();
                    player.play();
                }
            });
        });
    </script>
@endpush
