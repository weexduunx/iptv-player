{{-- <div class="container mt-4">
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
                    <video wire:ignore.self id="player" class="video-js vjs-default-skin" width="650"
                        height="350" controls></video>
                </div>
                <div id="error-message" class="text-danger mt-2"></div>
            </div>

        </div>
    </div>
</div> --}}
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
                        <h6 class="m-0 mb-1"><a href="#">Liste des chaînes</a></h6>
                        {{-- <p class="mdtxt">@maolio</p> --}}
                    </div>
                </div>
                <ul class="profile-link mt-7 mb-7 pb-7">
                    @foreach ($channels as $channel)
                        <li wire:click="playStream('{{ $channel['url'] }}')" style="cursor: pointer;">
                            <a href="#" class="d-flex gap-4">
                                {{-- <i class="material-symbols-outlined mat-icon"> home </i> --}}

                                {{-- @if ($channel['logoUrl'])
                                    <img src="{{ $channel['logoUrl'] }}" class="img-fluid" style="max-width: 30px;">
                                @elseif($channel['iconUrl'])
                                    <img src="{{ $channel['iconUrl'] }}" alt="{{ $channel['name'] }}" class="img-fluid"
                                        style="max-width: 30px;">
                                @endif --}}
                                <span>{{ $channel['name'] }}</span>
                                {{-- <small>{{ $channel['tvg_name'] }}</small> --}}
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
        <div class="col-xxl-9 col-xl-5 col-lg-8 mt-0 mt-lg-10 mt-xl-0 d-flex flex-column gap-7 cus-z">
            <div class="post-item d-flex flex-column gap-5 gap-md-7" id="news-feed">
                <div class="post-single-box p-3 p-sm-5">
                    <div class="top-area pb-5">
                        <div class="profile-area d-center justify-content-between">
                            <div class="avatar-item d-flex gap-3 align-items-center">
                                {{-- <div class="avatar position-relative">
                                    <img class="avatar-img max-un" src="assets/images/avatar-1.png" alt="avatar">
                                </div> --}}
                                <div class="info-area">
                                    <h6 class="m-0"><a href="#">Lecteur IPTV</a></h6>
                                    <span class="mdtxt status">Live</span>
                                </div>
                            </div>
                            <div class="btn-group cus-dropdown">
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
                            </div>
                        </div>
                        {{-- <div class="py-4">
                            <p class="description">My Travel Video</p>
                            <p class="hastag d-flex gap-2">
                                <a href="#">#Viral</a>
                                <a href="#">#travel</a>
                            </p>
                        </div> --}}
                        {{-- <div class="post-img video-item video-container">
                            <div class="plyr__video-embed player">
                                <video wire:ignore.self id="player" class="video-js vjs-default-skin" width="650"
                                    height="350" controls></video>
                            </div>
                        </div> --}}
                        {{-- <div class="video-container"> --}}
                        <div class="embed-responsive video-item embed-responsive-16by9 plyr__video-embed player">
                            <video wire:ignore.self id="player" class="video-js vjs-default-skin" width="600"
                                height="300" controls></video>
                        </div>
                        <div id="error-message" class="text-danger mt-2"></div>
                        {{-- </div> --}}
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
    {{-- <script>
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
    </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hls.js/0.5.14/hls.js"
        integrity="sha512-Uxb1LSW1XkMpEWsi4HguYGAHbXnNP5h0On1bBlSOZmEe42ajm2TCVy6khtfr5jFfjlToaG/mrN6R5zslmOCnAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="{{ asset('assets/js/hls.js') }}"></script> --}}
    {{-- <script>
        document.addEventListener('livewire:initialized', () => {
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

                if (Hls.isSupported()) {
                    var hls = new Hls();

                    // hls.loadSource(url);
                    hls.attachMedia(video);
                    hls.on(Hls.Events.MEDIA_ATTACHED, () => {
                        hls.loadSource(url);
                    });
                    hls.on(Hls.Events.MANIFEST_PARSED, function() {
                        console.log("Manifest parsed. Starting playback.");
                        video.play().catch(error => {
                            console.error("Playback error:", error);
                            errorMessage.textContent = "Playback error: " + error.message;
                        });
                    });

                    hls.on(Hls.Events.ERROR, function(event, data) {
                        console.error("Hls.js error:", data);

                        if (data.fatal) {
                            switch (data.type) {
                                case Hls.ErrorTypes.NETWORK_ERROR:
                                    console.error("Network error:", data.details);
                                    errorMessage.textContent =
                                        "Network error encountered. Please check the stream URL.";
                                    break;
                                case Hls.ErrorTypes.MEDIA_ERROR:
                                    console.error("Media error:", data.details);
                                    errorMessage.textContent =
                                        "Media error encountered. Attempting to recover...";
                                    hls.recoverMediaError();
                                    break;
                                default:
                                    console.error("Fatal error:", data.details);
                                    errorMessage.textContent =
                                        "A fatal error occurred while loading the stream.";
                                    break;
                            }
                        } else {
                            console.warn("Non-fatal error occurred:", data.details);

                            if (data.details === Hls.ErrorDetails.BUFFER_STALLED_ERROR) {
                                console.warn("Buffer stalled error, attempting to recover...");
                                video.play().catch(error => {
                                    console.error("Playback error while recovering:",
                                        error);
                                });
                            } else if (data.details === Hls.ErrorDetails.FRAG_LOAD_ERROR || data
                                .details === Hls.ErrorDetails.FRAG_LOAD_TIMEOUT) {
                                console.warn("Fragment load error, retrying...");
                                // hls.loadSource(url);
                                // hls.attachMedia(video);
                                hls.attachMedia(video);
                                hls.on(Hls.Events.MEDIA_ATTACHED, () => {
                                    hls.loadSource(url);
                                });
                            }
                        }
                    });

                    hls.on(Hls.Events.FRAG_LOADED, function(event, data) {
                        console.log("Fragment loaded:", data);
                    });

                    hls.on(Hls.Events.FRAG_PARSING_INIT_SEGMENT, function(event, data) {
                        console.log("Init segment parsed:", data);
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
    </script> --}}
    
    <script>
        document.addEventListener('livewire:initialized', () => {
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
    
                if (Hls.isSupported()) {
                    var hls = new Hls();
    
                    hls.attachMedia(video);
                    hls.on(Hls.Events.MEDIA_ATTACHED, () => {
                        hls.loadSource(url);
                    });
    
                    hls.on(Hls.Events.MANIFEST_PARSED, function() {
                        console.log("Manifest parsed. Starting playback.");
                        video.play().catch(error => {
                            console.error("Playback error:", error);
                            errorMessage.textContent = "Playback error: " + error.message;
                        });
                    });
    
                    hls.on(Hls.Events.ERROR, function(event, data) {
                        console.error("Hls.js error:", data);
    
                        if (data.fatal) {
                            switch (data.type) {
                                case Hls.ErrorTypes.NETWORK_ERROR:
                                    console.error("Network error:", data.details);
                                    errorMessage.textContent =
                                        "Network error encountered. Please check the stream URL.";
                                    break;
                                case Hls.ErrorTypes.MEDIA_ERROR:
                                    console.error("Media error:", data.details);
                                    errorMessage.textContent =
                                        "Media error encountered. Attempting to recover...";
                                    hls.recoverMediaError();
                                    break;
                                default:
                                    console.error("Fatal error:", data.details);
                                    errorMessage.textContent =
                                        "A fatal error occurred while loading the stream.";
                                    break;
                            }
                        } else {
                            console.warn("Non-fatal error occurred:", data.details);
    
                            if (data.details === Hls.ErrorDetails.BUFFER_STALLED_ERROR) {
                                console.warn("Buffer stalled error, attempting to recover...");
                                video.play().catch(error => {
                                    console.error("Playback error while recovering:", error);
                                });
                            } else if (data.details === Hls.ErrorDetails.FRAG_LOAD_ERROR || 
                                       data.details === Hls.ErrorDetails.FRAG_LOAD_TIMEOUT) {
                                console.warn("Fragment load error, retrying...");
                                hls.attachMedia(video);
                                hls.on(Hls.Events.MEDIA_ATTACHED, () => {
                                    hls.loadSource(url);
                                });
                            }
                        }
                    });
    
                    // Additional event listeners to handle buffer and track updates
                    hls.on(Hls.Events.BUFFER_CREATED, function(eventName, data) {
                        console.log("Buffer created:", data);
                    });
    
                    hls.on(Hls.Events.BUFFER_RESET, function() {
                        console.log("Buffer reset");
                    });
    
                    hls.on(Hls.Events.LEVELS_UPDATED, function(eventName, data) {
                        console.log("Levels updated:", data);
                    });
    
                    hls.on(Hls.Events.LEVEL_SWITCHED, function(eventName, data) {
                        console.log("Level switched:", data);
                    });
    
                    hls.on(Hls.Events.LEVEL_LOADING, function() {
                        console.log("Level loading");
                    });
    
                    hls.on(Hls.Events.LEVEL_UPDATED, function(eventName, data) {
                        console.log("Level updated:", data);
                    });
    
                    hls.on(Hls.Events.AUDIO_TRACKS_UPDATED, function(eventName, data) {
                        console.log("Audio tracks updated:", data);
                    });
    
                    hls.on(Hls.Events.SUBTITLE_TRACKS_UPDATED, function(eventName, data) {
                        console.log("Subtitle tracks updated:", data);
                    });
    
                    hls.on(Hls.Events.AUDIO_TRACK_SWITCHED, function(eventName) {
                        console.log("Audio track switched");
                    });
    
                    hls.on(Hls.Events.SUBTITLE_TRACK_SWITCH, function(eventName) {
                        console.log("Subtitle track switched");
                    });
    
                    hls.on(Hls.Events.AUDIO_TRACK_LOADED, function(eventName, data) {
                        console.log("Audio track loaded:", data);
                    });
    
                    hls.on(Hls.Events.SUBTITLE_TRACK_LOADED, function(eventName, data) {
                        console.log("Subtitle track loaded:", data);
                    });
    
                    hls.on(Hls.Events.LEVEL_PTS_UPDATED, function(eventName, data) {
                        console.log("Level PTS updated:", data);
                    });
    
                    hls.on(Hls.Events.FRAG_LOADED, function(eventName, data) {
                        console.log("Fragment loaded:", data);
                    });
    
                    hls.on(Hls.Events.FRAG_PARSING_INIT_SEGMENT, function(eventName, data) {
                        console.log("Init segment parsed:", data);
                    });
    
                    hls.on(Hls.Events.FRAG_CHANGED, function(eventName, data) {
                        console.log("Fragment changed:", data);
                    });
    
                    hls.on(Hls.Events.BUFFER_APPENDING, function(eventName, data) {
                        console.log("Buffer appending:", data);
                    });
    
                    hls.on(Hls.Events.BUFFER_APPENDED, function(eventName, data) {
                        console.log("Buffer appended:", data);
                    });
    
                    hls.on(Hls.Events.BUFFER_FLUSHED, function(eventName, data) {
                        console.log("Buffer flushed:", data);
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
