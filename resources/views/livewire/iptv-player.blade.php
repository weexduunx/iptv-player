<div class="container sidebar-toggler">
    <div class="row">
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-6 cus-z2">
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
                    {{-- <div class="avatar position-relative">
                        <img class="avatar-img max-un" src="assets/images/avatar-1.png" alt="avatar">
                    </div> --}}
                    <div class="text-area">
                        <h6 class="m-0 mb-1"><a href="#">Liste des chaînes par pays</a></h6>
                        {{-- <p class="mdtxt">@maolio</p> --}}
                    </div>
                </div>
                <ul class="profile-link mt-7 mb-7 pb-7">
                    {{-- @foreach ($channels as $channel)
                        <li wire:click="playStream('{{ $channel['url'] }}')" style="cursor: pointer;">
                            <a href="#" class="d-flex gap-4">
                                <i class="mat-icon fs-xxl material-symbols-outlined mat-icon">smart_display</i>
                                <span>{{ $channel['name'] }}</span>
                            </a>
                        </li>
                    @endforeach --}}
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
                {{-- <div class="your-shortcuts">
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
                </div> --}}
            </div>
        </div>
        <div class="col-xxl-9 col-xl-5 col-lg-8 mt-0 mt-lg-10 mt-xl-0 d-flex flex-column gap-7 cus-z">
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
                            {{-- <div class="btn-group cus-dropdown">
                                <button type="button" class="dropdown-btn" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                </button>
                                <ul class="dropdown-menu p-4 pt-2">
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                                            <span>Saved Post</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                            <span>Unfollow</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                            <span>Hide Post</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> lock </i>
                                            <span>Block</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="droplist d-flex align-items-center gap-2" href="#">
                                            <i class="material-symbols-outlined mat-icon"> flag </i>
                                            <span>Report Post</span>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                        {{-- <div class="py-4">
                            <p class="description">My Travel Video</p>
                            <p class="hastag d-flex gap-2">
                                <a href="#">#Viral</a>
                                <a href="#">#travel</a>
                            </p>
                        </div> --}}
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
        </div>
        {{-- <div class="col-xxl-3 col-xl-4 col-lg-4 col-6 mt-5 mt-xl-0">
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
                                <h6 class="d-inline-flex position-relative">
                                    Request
                                    <span class="mdtxt abs-area d-center position-absolute">2</span>
                                </h6>
                            </div>
                            <div class="d-grid gap-6">
                                <div class="single-single">
                                    <div class="profile-pic d-flex gap-3 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="assets/images/avatar-4.png"
                                                alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <a href="public-profile-post.html">
                                                <h6 class="m-0">Lerio Mao</h6>
                                            </a>
                                            <div class="friends-list d-flex gap-3 align-items-center text-center">
                                                <ul class="d-flex align-items-center justify-content-center">
                                                    <li><img src="assets/images/avatar-2.png" alt="image"></li>
                                                    <li><img src="assets/images/avatar-3.png" alt="image"></li>
                                                    <li><img src="assets/images/avatar-4.png" alt="image"></li>
                                                </ul>
                                                <span class="mdtxt d-center">10 mutual friends</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 mt-4">
                                        <button class="cmn-btn">Confirm</button>
                                        <button class="cmn-btn alt">Delete</button>
                                    </div>
                                </div>
                                <div class="single-single">
                                    <div class="profile-pic d-flex gap-3 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="assets/images/avatar-5.png"
                                                alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0"><a href="public-profile-post.html">Marinez</a></h6>
                                            <div class="friends-list d-flex gap-3 align-items-center text-center">
                                                <ul class="d-flex align-items-center justify-content-center">
                                                    <li><img src="assets/images/avatar-2.png" alt="image"></li>
                                                    <li><img src="assets/images/avatar-3.png" alt="image"></li>
                                                    <li><img src="assets/images/avatar-4.png" alt="image"></li>
                                                </ul>
                                                <span class="mdtxt d-center">10 mutual friends</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3 mt-4">
                                        <button class="cmn-btn">Confirm</button>
                                        <button class="cmn-btn alt">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-area p-5">
                            <div class="mb-4">
                                <h6 class="d-inline-flex">
                                    Contact
                                </h6>
                            </div>
                            <div class="d-flex flex-column gap-6">
                                <div
                                    class="profile-area d-center position-relative align-items-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="assets/images/avatar-6.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html"
                                                    class="mdtxt">Piter Maio</a></h6>
                                        </div>
                                    </div>
                                    <span class="mdtxt abs-area d-center position-absolute end-0">5</span>
                                </div>
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="assets/images/avatar-7.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html"
                                                    class="mdtxt">Floyd Miles</a></h6>
                                        </div>
                                    </div>
                                    <div class="btn-group cus-dropdown dropend">
                                        <button type="button" class="dropdown-btn" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                        </button>
                                        <ul class="dropdown-menu p-4 pt-2">
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                    <span>Unfollow</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                    <span>Hide Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="assets/images/avatar-8.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html"
                                                    class="mdtxt">Darrell Steward</a></h6>
                                        </div>
                                    </div>
                                    <div class="btn-group cus-dropdown dropend">
                                        <button type="button" class="dropdown-btn" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                        </button>
                                        <ul class="dropdown-menu p-4 pt-2">
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                    <span>Unfollow</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                    <span>Hide Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="assets/images/avatar-2.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html"
                                                    class="mdtxt">Kristin Watson</a></h6>
                                        </div>
                                    </div>
                                    <div class="btn-group cus-dropdown dropend">
                                        <button type="button" class="dropdown-btn" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                        </button>
                                        <ul class="dropdown-menu p-4 pt-2">
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                    <span>Unfollow</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                    <span>Hide Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="assets/images/avatar-3.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html" class="mdtxt">Jane
                                                    Cooper</a></h6>
                                        </div>
                                    </div>
                                    <div class="btn-group cus-dropdown dropend">
                                        <button type="button" class="dropdown-btn" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                        </button>
                                        <ul class="dropdown-menu p-4 pt-2">
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                    <span>Unfollow</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                    <span>Hide Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="assets/images/avatar-4.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html"
                                                    class="mdtxt">Devon Lane</a></h6>
                                        </div>
                                    </div>
                                    <div class="btn-group cus-dropdown dropend">
                                        <button type="button" class="dropdown-btn" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                        </button>
                                        <ul class="dropdown-menu p-4 pt-2">
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                    <span>Unfollow</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                    <span>Hide Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="assets/images/avatar-9.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html"
                                                    class="mdtxt">Annette Black</a></h6>
                                        </div>
                                    </div>
                                    <div class="btn-group cus-dropdown dropend">
                                        <button type="button" class="dropdown-btn" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                        </button>
                                        <ul class="dropdown-menu p-4 pt-2">
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                    <span>Unfollow</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                    <span>Hide Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="assets/images/avatar-10.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html"
                                                    class="mdtxt">Jerome Bell</a></h6>
                                        </div>
                                    </div>
                                    <div class="btn-group cus-dropdown dropend">
                                        <button type="button" class="dropdown-btn" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                        </button>
                                        <ul class="dropdown-menu p-4 pt-2">
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                    <span>Unfollow</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                    <span>Hide Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="assets/images/avatar-11.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html" class="mdtxt">Guy
                                                    Hawkins</a></h6>
                                        </div>
                                    </div>
                                    <div class="btn-group cus-dropdown dropend">
                                        <button type="button" class="dropdown-btn" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
                                        </button>
                                        <ul class="dropdown-menu p-4 pt-2">
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> person_remove </i>
                                                    <span>Unfollow</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="droplist d-flex align-items-center gap-2" href="#">
                                                    <i class="material-symbols-outlined mat-icon"> hide_source </i>
                                                    <span>Hide Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@push('scripts')
@endpush
