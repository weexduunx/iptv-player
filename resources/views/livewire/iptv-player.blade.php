<div>
    <!-- start preloader -->
    {{-- <div class="preloader align-items-center justify-content-center">
        <span class="loader"></span>
    </div> --}}
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
                        <form wire:submit.prevent="search" class="input-area d-flex align-items-center">
                            <button type="submit"><i class="material-symbols-outlined mat-icon">search</i></button>
                            <input type="text" placeholder="Rechercher une chaîne" autocomplete="on"
                                wire:model.debounce.300ms="query">
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
    <!-- Bottom Menu start -->
    <div class="header-menu py-3 header-menu d-block d-lg-none position-fixed bottom-0 w-100 cus-z">
        <div class="right-area position-relative d-flex justify-content-around gap-3 gap-xxl-6 align-items-center">
            <div class="single-item profile-area position-relative">
                <div class="switch-wrapper mt-4 d-flex gap-1 align-items-center">
                    <i class="mat-icon material-symbols-outlined sun icon active"> light_mode </i>
                    <label class="switch">
                        <input type="checkbox" class="checkbox">
                        <span class="slider"></span>
                    </label>
                    <i class="mat-icon material-symbols-outlined moon icon"> dark_mode </i>
                    {{-- <span class="mdtxt ms-2">Dark mode</span> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Menu end -->
    <!-- Main Content start -->
    <main class="main-content">
        <div class="container-fluid sidebar-toggler">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-6 cus-z2">
                    <div class="d-inline-block d-lg-none">
                        <button class="button profile-active mb-4 mb-lg-0 d-flex align-items-center gap-2">
                            <i class="material-symbols-outlined mat-icon"> tune </i>
                            <span>Catégories</span>
                        </button>
                    </div>
                    <div class="profile-sidebar cus-scrollbar p-5">
                        <div class="d-block d-lg-none position-absolute end-0 top-0">
                            <button class="button profile-close">
                                <i class="material-symbols-outlined mat-icon fs-xl"> close </i>
                            </button>
                        </div>
                        <h6>Chaînes par pays</h6>

                        <ul class="profile-link mt-7 mb-7 pb-7">
                            {{-- @foreach ($channelsByGroup as $group => $channels) --}}
                            @foreach (\App\Models\Channel::select('group')->distinct()->get() as $group)
                                <li>
                                    <a href="#{{ $group->group }}"
                                        class="d-flex gap-4 @if ($activeGroup === $group->group) active @endif"
                                        wire:click="setActiveGroup('{{ $group->group }}')" type="button"
                                        role="tab">
                                        <span class="material-symbols-outlined">
                                            flag
                                        </span>
                                        <span> {{ $group->group }}</span>
                                        <div class="d-flex justify-content-center">
                                            <div class="spinner-border spinner-border-sm text-primary" role="status"
                                                wire:loading wire:target="setActiveGroup('{{ $group->group }}')">
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
                <div class="col-xxl-7 col-xl-7 col-lg-7 mt-0 mt-lg-10 mt-xl-0 d-flex flex-column  cus-z">
                    @if ($activeGroup === null)
                        <div class="post-item d-flex flex-column gap-5 gap-md-7" id="news-feed">
                            <div class="post-single-box p-3 p-sm-5">
                                <div class="top-area">
                                    <div class="profile-area d-center justify-content-between">
                                        <div class="avatar-item d-flex gap-3 align-items-center">
                                            <div class="position-relative">
                                                {{-- <i class="material-symbols-outlined mat-icon">workspaces</i> --}}
                                                <span class="material-symbols-outlined mat-icon fs-xxl">
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
                                                {{-- <i class="material-symbols-outlined  xxl">flag</i> --}}
                                                <span class="material-symbols-outlined mat-icon fs-xxl">
                                                    flag
                                                </span>
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
                            @foreach (\App\Models\Channel::select('group')->distinct()->get() as $group)
                                <div class="tab-pane fade @if ($activeGroup === $group->group) show active @endif"
                                    role="tabpanel">
                                    <div class="row cus-mar friend-request">
                                        @foreach ($chaines as $channel)
                                            <div class="col-xl-4 col-sm-6 col-8">
                                                <div class="single-box p-5" wire:key='{{ $channel->xmlTvId }}'>
                                                    <div class="avatar-box position-relative">

                                                        <img class="avatar-img w-100" src="{{ $logoUrlBg }}"
                                                            alt="avatar" style="width: 296px; height: 122px"
                                                            onerror="this.onerror=null; this.src='{{ $logoUrlBg }}';">
                                                        <div
                                                            class="abs-area w-100 position-absolute top-0 p-3 d-center justify-content-end">
                                                            <div class="btn-group cus-dropdown dropend">
                                                                <button type="button"
                                                                    class="dropdown-btn d-center px-2"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="material-symbols-outlined fs-xxl m-0">
                                                                        more_horiz
                                                                    </i>
                                                                </button>
                                                                <ul class="dropdown-menu p-4 pt-2">
                                                                    <li>
                                                                        <a class="droplist d-flex align-items-center gap-2"
                                                                            href="#">
                                                                            <i
                                                                                class="material-symbols-outlined mat-icon">
                                                                                person_remove </i>
                                                                            <span>Unfollow</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="droplist d-flex align-items-center gap-2"
                                                                            href="#">
                                                                            <i
                                                                                class="material-symbols-outlined mat-icon">
                                                                                hide_source </i>
                                                                            <span>Hide</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="abs-avatar-item">
                                                        <img class="avatar-img max-un"
                                                            src="{{ $channel->logoUrl ?: $logoUrl }}"
                                                            alt="avatar" style="width: 80px; height: 80px">

                                                        {{-- <img class="avatar-img max-un" src="{{ $channel->logoUrl }}"
                                                            alt="avatar" style="width: 80px; height: 80px"
                                                            onerror="this.onerror=null; this.src='{{ $logoUrl }}';"> --}}
                                                    </div>
                                                    <h6 class="m-0 mb-2 mt-3">{{ $channel->name }}</h6>
                                                    <div class="d-center btn-border pt-5 gap-2 mt-4">

                                                        <button class="cmn-btn fourth"
                                                            wire:click="opModal('{{ $channel->url }}', '{{ $channel->logoUrl }}', '{{ $channel->name }}', '{{ $group->group }}')"
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
                                    <div class=" mt-4">
                                        {{ $chaines->links() }}
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-6 mt-5 mt-xl-0">
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
            </div>
        </div>
    </main>
    <!-- Main Content end -->
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

                                                <video wire:ignore.self id="player"
                                                    class="video-js vjs-theme-city object-fit-fill border rounded"
                                                    controls></video>
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
