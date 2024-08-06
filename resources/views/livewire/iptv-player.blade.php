<div class="container">
    <div class="row">
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-6 mt-5 mt-xl-0">
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
                            <div class=" mb-4">
                                <h5 class="d-inline-flex position-relative">
                                    Spot
                                    <span class="mdtxt abs-area d-center position-absolute">2</span>
                                </h5>
                            </div>
                            <div class="d-grid gap-6">
                                <h6>votre pub ici</h6>
                            </div>
                        </div>
                        <div class="sidebar-area p-5">
                            <div class="mb-4">
                                <h5 class="d-inline-flex">
                                    Spot
                                </h5>
                            </div>
                            <div class="d-flex flex-column gap-6">
                                <h6>Votre pub ici</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-9 col-xl-9 col-lg-8 col-6 mt-xl-0">
            <div class="head-area mb-5">
                <h5>Catégories de chaîne</h5>
            </div>
            <div class="popular-area mb-5 d-center flex-wrap gap-3 justify-content-between">
                <ul class="nav flex-wrap gap-2 tab-area" role="tablist">
                    @foreach ($channelsByGroup as $group => $channels)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-center @if ($activeGroup === $group) active @endif"
                                wire:click="setActiveGroup('{{ $group }}')" type="button" role="tab">
                                {{ $group }}
                            </button>
                        </li>
                    @endforeach
                </ul>
                {{-- <div class="btn-item">
                    <a href="#" class="cmn-btn gap-1">
                        <i class="material-symbols-outlined mat-icon"> add </i>
                        Create Group
                    </a>
                </div> --}}
            </div>
            <div class="tab-content">
                @foreach ($channelsByGroup as $group => $channels)
                    <div class="tab-pane fade @if ($activeGroup === $group) show active @endif" role="tabpanel">
                        <div class="row cus-mar friend-request">
                            @foreach ($channels as $channel)
                                <div class="col-xl-4 col-sm-6 col-8">
                                    <div class="single-box p-5">
                                        <div class="avatar-box position-relative">
                                            @php
                                                $logoUrl = $channel['logoUrl'] ?? asset('assets/images/retrotv.png');
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
                                        <h6 class="m-0 mb-2 mt-3">{{ $channel['name'] }}</h6>
                                        <div class="d-center btn-border pt-5 gap-2 mt-4">

                                            <button class="cmn-btn fourth"
                                                wire:click="playStream('{{ $channel['url'] }}', '{{ $channel['logoUrl'] ?? $channel['iconUrl'] }}', '{{ $channel['name'] }}', '{{ $group }}')"
                                                style="cursor: pointer;">
                                                <img src="{{ asset('assets/images/icon/live-video.png') }}"
                                                    class="max-un" alt="icon">
                                                <span>Regarder</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- <div class="col-xxl-3 col-xl-3 col-lg-4 col-6 cus-z2">
            <div class="d-inline-block d-lg-none">
                <button class="button profile-active mb-4 mb-lg-0 d-flex align-items-center gap-2">
                    <i class="material-symbols-outlined mat-icon"> tune </i>
                    <span>My profile</span>
                </button>
            </div>
            <div class="profile-sidebar cus-scrollbar p-5">
                <div class="d-block d-lg-none position-absolute end-0 top-0">
                    <button class="button profile-close">
                        <i class="material-symbols-outlined mat-icon fs-xl"> close </i>
                    </button>
                </div>
                <div class="profile-pic d-flex gap-2 align-items-center">
                  
                    <div class="text-area">
                        <h6 class="m-0 mb-1"><a href="#">Liste des chaînes par pays</a></h6>
                    </div>
                </div>
                <ul class="profile-link mt-7 mb-7 pb-7">
        
                    @foreach ($channelsByGroup as $group => $channels)
                        <div class="dropdown">
                            <a href="#"
                                class="d-flex gap-4 dropdown-btn {{ $selectedGroup === $group ? 'active' : '' }}"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mat-icon fs-xxl material-symbols-outlined mat-icon">flag</i>
                                <span>{{ $group }}</span>
                                <span class="mat-icon fs-xxl material-symbols-outlined mat-icon arrow-icon">
                                    {{ $selectedGroup === $group ? 'arrow_drop_down_circle' : 'arrow_drop_up' }}
                                </span>
                            </a>
                            <ul class="dropdown-menu p-4 pt-2 {{ $selectedGroup === $group ? 'show' : '' }}">
                                @foreach ($channels as $channel)
                                    <li wire:click="playStream('{{ $channel['url'] }}', '{{ $channel['logoUrl'] ?? $channel['iconUrl'] }}', '{{ $channel['name'] }}', '{{ $group }}')"
                                        style="cursor: pointer;" class="">
                                        <a href="#"
                                            class="d-flex gap-4 {{ $currentStream === $channel['url'] ? 'active' : '' }}">
                                            <i
                                                class="mat-icon fs-xxl material-symbols-outlined mat-icon">smart_display</i>
                                            <span>{{ $channel['name'] }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </ul>

            </div>
        </div> --}}
        {{-- <div class="col-xxl-9 col-xl-5 col-lg-8 mt-0 mt-lg-10 mt-xl-0 d-flex flex-column gap-7 cus-z">
            <div class="post-item d-flex flex-column gap-5 gap-md-7" id="news-feed">
                <div class="post-single-box p-3 p-sm-5">
                    <div class="top-area pb-5">
                        <div class="profile-area d-center justify-content-between">
                            <div class="avatar-item d-flex gap-3 align-items-center">
                                @if ($currentStream)
                                    <div class="avatar position-relative">
                                        @if (!empty($currentChannelLogo))
                                            <img class="avatar-img max-un" src="{{ $currentChannelLogo }}"
                                                width="50" height="50">
                                        @else
                                            <img class="avatar-img max-un" src="{{ asset('assets/images/tv.png') }}"
                                                width="50" height="50">
                                        @endif
                                    </div>
                                    <div class="info-area">
                                        <h6 class="m-0"><a href="#">{{ $currentChannelName }}</a></h6>
                                        <span class="mdtxt status">Live</span>
                                    </div>
                                @endif
                            </div>
                      
                        </div>
        
                        <div class="embed-responsive video-item embed-responsive-16by9">
                            <video wire:ignore.self id="player" class="video-js vjs-default-skin" width="600"
                                height="300" controls></video>
                        </div>
                        <div id="error-message" class="text-danger mt-2"></div>
                    </div>
                    <div class="total-react-share pb-4 d-center gap-2 flex-wrap justify-content-between">
                        <div class="friends-list d-flex gap-3 align-items-center text-center">
                            <ul class="d-flex align-items-center justify-content-center">
                                <li><img src="assets/images/avatar-2.png" alt="image"></li>
                                <li><img src="assets/images/avatar-3.png" alt="image"></li>
                                <li><img src="assets/images/avatar-4.png" alt="image"></li>
                                <li><span class="mdtxt d-center">8+</span></li>
                            </ul>
                        </div>
                        <div id="error-message" class="text-danger mt-2"></div>
                        <div class="react-list d-flex flex-wrap gap-6 align-items-center text-center">
                            <button class="mdtxt">4 Comments</button>
                            <button class="mdtxt">1 Shares</button>
                        </div>
                    </div>
                    <div class="like-comment-share py-5 d-center flex-wrap gap-3 gap-md-0 justify-content-between">
                        <button class="d-center gap-1 gap-sm-2 mdtxt">
                            <i class="material-symbols-outlined mat-icon"> favorite </i>
                            Like
                        </button>
                        <button class="d-center gap-1 gap-sm-2 mdtxt">
                            <i class="material-symbols-outlined mat-icon"> chat </i>
                            Comment
                        </button>
                        <button class="d-center gap-1 gap-sm-2 mdtxt">
                            <i class="material-symbols-outlined mat-icon"> share </i>
                            Share
                        </button>
                    </div>
                    <form action="#">
                        <div class="d-flex mt-5 gap-3">
                            <div class="profile-box d-none d-xxl-block">
                                <a href="#"><img src="assets/images/add-post-avatar.png" class="max-un"
                                        alt="icon"></a>
                            </div>
                            <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100">
                                <input placeholder="Write a comment..">
                                <div class="file-input d-flex gap-1 gap-md-2">
                                    <div class="file-upload">
                                        <label class="file">
                                            <input type="file">
                                            <span class="file-custom border-0 d-grid text-center">
                                                <span class="material-symbols-outlined mat-icon m-0 xxltxt"> gif_box
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="file-upload">
                                        <label class="file">
                                            <input type="file">
                                            <span class="file-custom border-0 d-grid text-center">
                                                <span class="material-symbols-outlined mat-icon m-0 xxltxt"> perm_media
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <span class="mood-area">
                                        <span class="material-symbols-outlined mat-icon m-0 xxltxt"> mood </span>
                                    </span>
                                </div>
                            </div>
                            <div class="btn-area d-flex">
                                <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                    <i class="material-symbols-outlined mat-icon m-0 fs-xxl"> near_me </i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}

    </div>
    <!-- Go Live Popup start -->
    <div class="go-live-popup">
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
                                                                        src="{{ $currentChannelLogo }}" width="50"
                                                                        height="50">
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

                                                <div class="embed-responsive video-item embed-responsive-16by9">
                                                    <video wire:ignore.self id="player"
                                                        class="video-js vjs-default-skin" width="600"
                                                        height="300" controls></video>
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
            let hls = null;

            Livewire.on('playStream', url => {
                $('#goLiveMod').modal('show');
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
