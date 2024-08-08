<div class="row">
    <div class="col-xxl-3 col-xl-3 col-lg-3 col-6 cus-z2">
        <div class="d-inline-block d-lg-none">
            <button class="button profile-active mb-4 mb-lg-0 d-flex align-items-center gap-2">
                <i class="material-symbols-outlined mat-icon"> tune </i>
                <span>Categories</span>
            </button>
        </div>
        <div class="profile-sidebar cus-scrollbar p-5">
            <div class="d-block d-lg-none position-absolute end-0 top-0">
                <button class="button profile-close">
                    <i class="material-symbols-outlined mat-icon fs-xl"> close </i>
                </button>
            </div>
            <h6>Cégories de chaînes</h6>

            <ul class="profile-link mt-7 mb-7 pb-7">
                {{-- @foreach ($channelsByGroup as $group => $channels) --}}
                 @foreach(\App\Models\Channel::select('group')->distinct()->get() as $group)
                    <li>
                        <a href="#{{ $group->group }}"
                            class="d-flex gap-4 @if ($activeGroup === $group->group) active @endif"
                            wire:click="setActiveGroup('{{ $group->group }}')" type="button" role="tab">
                            <i class="material-symbols-outlined mat-icon">workspaces</i>
                            <span> {{ $group->group }}</span>
                            <div class="d-flex justify-content-center">
                                <div class="spinner-border spinner-border-sm text-primary" role="status" wire:loading
                                    wire:target="setActiveGroup('{{ $group->group }}')">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </a>

                    </li>
                @endforeach
            </ul>
            <div class="your-shortcuts">
                <h6>Your shortcuts</h6>
                <ul>
                    <li>
                        <a href="public-profile-post.html" class="d-flex align-items-center gap-3">
                            <img src="assets/images/shortcuts-1.png" alt="icon">
                            <span>Game Community</span>
                        </a>
                    </li>
                    <li>
                        <a href="public-profile-post.html" class="d-flex align-items-center gap-3">
                            <img src="assets/images/shortcuts-2.png" alt="icon">
                            <span>Pixel Think (Member)</span>
                        </a>
                    </li>
                    <li>
                        <a href="public-profile-post.html" class="d-flex align-items-center gap-3">
                            <img src="assets/images/shortcuts-3.png" alt="icon">
                            <span>8 Ball Pool</span>
                        </a>
                    </li>
                    <li>
                        <a href="public-profile-post.html" class="d-flex align-items-center gap-3">
                            <img src="assets/images/shortcuts-4.png" alt="icon">
                            <span>Gembio</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-xl-5 col-lg-9 mt-0 mt-lg-10 mt-xl-0 d-flex flex-column gap-7 cus-z">
        <div class="story-carousel" wire:ignore>
            <div class="single-item">
                <div class="single-slide">
                    <a href="#" class="position-relative d-center">
                        <img class="bg-img" src="assets/images/story-slider-owner.png" alt="icon">
                        <div class="abs-area d-grid p-3 position-absolute bottom-0">
                            <div class="icon-box m-auto d-center mb-3">
                                <i class="material-symbols-outlined text-center mat-icon"> add </i>
                            </div>
                            <span class="mdtxt">Add Story</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="single-item">
                <div class="single-slide">
                    <div class="position-relative d-flex">
                        <img class="bg-img" src="assets/images/story-slider-1.png" alt="image">
                        <a href="public-profile-post.html" class="abs-area p-3 position-absolute bottom-0">
                            <img src="assets/images/avatar-1.png" alt="image">
                            <span class="mdtxt">Alen Lio</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-slide">
                    <div class="position-relative d-flex">
                        <img class="bg-img" src="assets/images/story-slider-2.png" alt="image">
                        <a href="public-profile-post.html" class="abs-area p-3 position-absolute bottom-0">
                            <img src="assets/images/avatar-2.png" alt="image">
                            <span class="mdtxt">Josep</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-slide">
                    <div class="position-relative d-flex">
                        <img class="bg-img" src="assets/images/story-slider-3.png" alt="image">
                        <a href="public-profile-post.html" class="abs-area p-3 position-absolute bottom-0">
                            <img src="assets/images/avatar-3.png" alt="image">
                            <span class="mdtxt">Jessica</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-slide">
                    <div class="position-relative d-flex">
                        <img class="bg-img" src="assets/images/story-slider-4.png" alt="image">
                        <a href="public-profile-post.html" class="abs-area p-3 position-absolute bottom-0">
                            <img src="assets/images/avatar-4.png" alt="image">
                            <span class="mdtxt">Alen</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="single-slide">
                    <div class="position-relative d-flex">
                        <img class="bg-img" src="assets/images/story-slider-4.png" alt="image">
                        <a href="public-profile-post.html" class="abs-area p-3 position-absolute bottom-0">
                            <img src="assets/images/avatar-5.png" alt="image">
                            <span class="mdtxt">Jacob Jones</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @if ($activeGroup === null)
            <div class="post-item d-flex flex-column gap-5 gap-md-7" id="news-feed">
                <div class="post-single-box p-3 p-sm-5">
                    <div class="top-area">
                        <div class="profile-area d-center justify-content-between">
                            <div class="avatar-item d-flex gap-3 align-items-center">
                                <div class="position-relative">
                                    {{-- <i class="material-symbols-outlined mat-icon">workspaces</i> --}}
                                    <span class="material-symbols-outlined">
                                        arrow_back
                                    </span>
                                </div>
                                <div class="info-area ">
                                    <h6 class="m-0"><a href="#">Catégorie</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="post-item d-flex flex-column gap-5 gap-md-7" id="news-feed">
                <div class="post-single-box p-3 p-sm-5">
                    <div class="top-area">
                        <div class="profile-area d-center justify-content-between">
                            <div class="avatar-item d-flex gap-3 align-items-center">
                                <div class="position-relative">
                                    <i class="material-symbols-outlined mat-icon">workspaces</i>
                                </div>
                                <div class="info-area ">
                                    <h6 class="m-0"><a href="#">{{ $activeGroup }}</a></h6>
                                    {{-- <span class="mdtxt status">Active</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr>
        <div class="tab-content">
            @if ($activeGroup === null)
                <div class="d-inline-block">
                    <button class="button profile-active mb-4 mb-lg-0 d-flex align-items-center gap-2">
                        <i class="material-symbols-outlined mat-icon"> smart_display </i>
                        <span>Liste des chaînes</span>
                    </button>
                    <span class="mdtxt status">Sélectionner une catégorie pour afficher les chaînes</span>
                </div>
            @else
                {{-- @foreach ($channelsByGroup as $group => $channels) --}}
                @foreach(\App\Models\Channel::select('group')->distinct()->get() as $group)

                    <div class="tab-pane fade @if ($activeGroup === $group->group) show active @endif" role="tabpanel">
                        <div class="row cus-mar friend-request">
                            @foreach ($chaines as $channel)
                                <div class="col-xl-4 col-sm-6 col-8">
                                    <div class="single-box p-5" wire:key='{{ $channel->xmlTvId}}'>
                                        <div class="avatar-box position-relative">
                                            @php
                                                $logoUrl = $channel->logoUrl ?? asset('assets/images/retrotv.png');
                                                $logoUrlBg = asset('assets/images/iptv2.jpg');
                                            @endphp
                                            <img class="avatar-img w-100" src="{{ $logoUrlBg }}" alt="avatar"
                                                style="width: 296px; height: 122px"
                                                onerror="this.onerror=null; this.src='{{ asset('assets/images/iptv2.jpg') }}';">
                                            <div
                                                class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                                <div class="btn-group cus-dropdown dropend">
                                                    <button type="button" class="dropdown-btn d-center px-2"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz
                                                        </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2"
                                                                href="#">
                                                                <i class="material-symbols-outlined mat-icon">
                                                                    person_remove </i>
                                                                <span>Unfollow</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2"
                                                                href="#">
                                                                <i class="material-symbols-outlined mat-icon">
                                                                    hide_source </i>
                                                                <span>Hide</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="abs-avatar-item">
                                            <img class="avatar-img max-un" src="{{ $logoUrl }}" alt="avatar"
                                                style="width: 80px; height: 80px"
                                                onerror="this.onerror=null; this.src='{{ asset('assets/images/retrotv.png') }}';">
                                        </div>
                                        <h6 class="m-0 mb-2 mt-3">{{ $channel->name }}</h6>
                                        <div class="d-center btn-border pt-5 gap-2 mt-4">

                                            <button class="cmn-btn fourth"
                                                wire:click="opModal('{{ $channel->url }}', '{{ $channel->logoUrl ?? $channel->iconUrl }}', '{{ $channel->name }}', '{{ $group->group }}')"
                                                style="cursor: pointer;">
                                                {{-- <img src="{{ asset('assets/images/icon/live-video.png') }}"
                                                    class="max-un" alt="icon"> --}}
                                                <span class="material-symbols-outlined max-un">
                                                    smart_display
                                                </span>
                                                <span>Regarder</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-6 mt-5 mt-xl-0">
        <div class="cus-overflow cus-scrollbar sidebar-head">
            <div class="d-flex justify-content-end">
                <div class="d-block d-xl-none me-4">
                    <button class="button toggler-btn mb-4 mb-lg-0 d-flex align-items-center gap-2">
                        <span>My List</span>
                        <i class="material-symbols-outlined mat-icon"> tune </i>
                    </button>
                </div>
            </div>
            <div class="cus-scrollbar side-wrapper">
                <div class="sidebar-wrapper d-flex flex-column gap-6">
                    <div class="sidebar-area p-5">
                        <div class="mb-4">
                            <h6 class="d-inline-flex">
                                Catégorie
                            </h6>
                        </div>
                        <div class="d-flex flex-column gap-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Go Live Popup start -->
    <div class="go-live-popup ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="modal fade" id="goLiveMod">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content p-5">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="mid-area">
                                    <div class="post-item d-flex flex-column gap-5 gap-md-7" id="news-feed">
                                        <div class="post-single-box p-3 p-sm-5">
                                            <div class="top-area pb-5">
                                                <div class="profile-area d-center justify-content-between">
                                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                                        @if ($currentStream)
                                                            <div class="avatar position-relative">
                                                                @if (!empty($currentChannelLogo))
                                                                    <img class="avatar-img max-un"
                                                                        src="{{ $currentChannelLogo }}"
                                                                        width="50" height="50">
                                                                @else
                                                                    <img class="avatar-img max-un"
                                                                        src="{{ asset('assets/images/tv.png') }}"
                                                                        width="50" height="50">
                                                                @endif
                                                            </div>
                                                            <div class="info-area">
                                                                <h6 class="m-0"><a
                                                                        href="#">{{ $currentChannelName }}</a>
                                                                </h6>
                                                                <span class="mdtxt status">Live</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="embed-responsive video-item embed-responsive-16by9 ">
                                                    <video wire:ignore.self id="player"
                                                        class="video-js vjs-default-skin"
                                                        style="width: 1080px;height:450px" controls></video>
                                                </div>
                                                <div id="error-message" class="text-danger mt-2"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="footer-area pt-5">
                                    <div class="btn-area d-flex justify-content-end gap-2">
                                        <button type="button" class="cmn-btn alt" data-bs-dismiss="modal"
                                            aria-label="Close">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Go Live Popup end -->
</div>

@push('scripts')
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
@endpush
