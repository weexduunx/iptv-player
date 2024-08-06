<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Seetanal">
    <meta name="description" content="Télévision en ligne">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seetanal</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
                        <img src="assets/images/logo.png" class="logo" alt="logo">
                    </a>
                    <button class="button search-active d-block d-md-none">
                        <i class="d-center material-symbols-outlined fs-xxl mat-icon"> search </i>
                    </button>
                    <div class="search-form">
                        <form action="#" class="input-area d-flex align-items-center">
                            <i class="material-symbols-outlined mat-icon">search</i>
                            <input type="text" placeholder="Search Circlehubtio" autocomplete="off">
                        </form>
                    </div>
                    <ul
                        class="navbar-nav feed flex-row gap-xl-20 gap-lg-10 gap-sm-7 gap-1 py-4 py-lg-0 m-lg-auto ms-auto ms-aut align-self-center">
                        <li>
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
                        </li>
                    </ul>
                    <div class="right-area position-relative d-flex gap-3 gap-xxl-6 align-items-center">
                        <div class="single-item d-none d-lg-block messages-area">
                            <div class="messages-btn cmn-head">
                                <div class="icon-area d-center position-relative">
                                    <i class="material-symbols-outlined mat-icon">mail</i>
                                    <span class="abs-area position-absolute d-center mdtxt">4</span>
                                </div>
                            </div>
                            <div class="main-area p-5 messages-content">
                                <h5 class="mb-8">Messages</h5>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="assets/images/avatar-7.png"
                                                alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <div class="title-area position-relative d-inline-flex align-items-center">
                                                <h6 class="m-0 d-inline-flex">Piter Maio</h6>
                                                <span class="abs-area position-absolute d-center mdtxt">3</span>
                                            </div>
                                            <p class="mdtxt sms">Amet minim mollit non....</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="assets/images/avatar-1.png"
                                                alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">Annette Black</h6>
                                            <p class="mdtxt">You: consequat sunt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="assets/images/avatar-2.png"
                                                alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">Ralph Edwards</h6>
                                            <p class="mdtxt sms">Amet minim mollit non....</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="assets/images/avatar-3.png"
                                                alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">Darrell Steward</h6>
                                            <p class="mdtxt">You: consequat sunt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="assets/images/avatar-4.png"
                                                alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">Wade Warren</h6>
                                            <p class="mdtxt">You: consequat sunt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="assets/images/avatar-5.png"
                                                alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">Kathryn Murphy</h6>
                                            <p class="mdtxt">You: consequat sunt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                                        <div class="avatar">
                                            <img class="avatar-img max-un" src="assets/images/avatar-6.png"
                                                alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">Jacob Jones</h6>
                                            <p class="mdtxt">You: consequat sunt</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="btn-area">
                                    <a href="profile-chat.html">See all inbox</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-item d-none d-lg-block messages-area notification-area">
                            <div class="notification-btn cmn-head position-relative">
                                <div class="icon-area d-center position-relative">
                                    <i class="material-symbols-outlined mat-icon">notifications</i>
                                    <span class="abs-area position-absolute d-center mdtxt">3</span>
                                </div>
                            </div>
                            <div class="main-area p-5 notification-content">
                                <h5 class="mb-8">Notification</h5>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-notification.html"
                                        class="d-flex justify-content-between align-items-center">
                                        <div class="left-item position-relative d-inline-flex gap-3">
                                            <div class="avatar position-relative d-inline-flex">
                                                <img class="avatar-img max-un" src="assets/images/avatar-1.png"
                                                    alt="avatar">
                                                <img class="abs-item position-absolute max-un"
                                                    src="assets/images/icon/speech-bubble.png" alt="icon">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1">Piter Maio</h6>
                                                <p class="mdtxt">Comment on your post</p>
                                            </div>
                                        </div>
                                        <div class="time-remaining">
                                            <p class="mdtxt">Just now</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-notification.html"
                                        class="d-flex justify-content-between align-items-center">
                                        <div class="left-item position-relative d-inline-flex gap-3">
                                            <div class="avatar position-relative d-inline-flex">
                                                <img class="avatar-img max-un" src="assets/images/avatar-2.png"
                                                    alt="avatar">
                                                <img class="abs-item position-absolute max-un"
                                                    src="assets/images/icon/emoji-love.png" alt="icon">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1">Kathryn Murphy</h6>
                                                <p class="mdtxt">Like your photo</p>
                                            </div>
                                        </div>
                                        <div class="time-remaining">
                                            <p class="mdtxt">2min</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-notification.html"
                                        class="d-flex justify-content-between align-items-center">
                                        <div class="left-item position-relative d-inline-flex gap-3">
                                            <div class="avatar position-relative d-inline-flex">
                                                <img class="avatar-img max-un" src="assets/images/avatar-3.png"
                                                    alt="avatar">
                                                <img class="abs-item position-absolute max-un"
                                                    src="assets/images/icon/emoji-love.png" alt="icon">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1">Jacob Jones</h6>
                                                <p class="mdtxt">Sent you a request</p>
                                            </div>
                                        </div>
                                        <div class="time-remaining">
                                            <p class="mdtxt">1hr</p>
                                        </div>
                                    </a>
                                    <div class="d-flex gap-3 mt-4">
                                        <button class="cmn-btn">Accept</button>
                                        <button class="cmn-btn alt">Delete</button>
                                    </div>
                                </div>
                                <div class="single-box p-0 mb-7">
                                    <a href="profile-notification.html"
                                        class="d-flex justify-content-between align-items-center">
                                        <div class="left-item position-relative d-inline-flex gap-3">
                                            <div class="avatar position-relative d-inline-flex">
                                                <img class="avatar-img max-un" src="assets/images/avatar-4.png"
                                                    alt="avatar">
                                                <img class="abs-item position-absolute max-un"
                                                    src="assets/images/icon/emoji-love.png" alt="icon">
                                            </div>
                                            <div class="text-area">
                                                <h6 class="m-0 mb-1">Kathryn Murphy</h6>
                                                <p class="mdtxt">officia consequat duis enim...</p>
                                            </div>
                                        </div>
                                        <div class="time-remaining">
                                            <p class="mdtxt">2hr</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="btn-area">
                                    <a href="profile-notification.html">See all notification</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-item d-none d-lg-block profile-area position-relative">
                            <div class="profile-pic d-flex align-items-center">
                                <span class="avatar cmn-head active-status">
                                    <img class="avatar-img max-un" src="assets/images/avatar-1.png" alt="avatar">
                                </span>
                            </div>
                            <div class="main-area p-5 profile-content">
                                <div class="head-area">
                                    <div class="d-flex gap-3 align-items-center">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="assets/images/avatar-1.png"
                                                alt="avatar">
                                        </div>
                                        <div class="text-area">
                                            <h6 class="m-0 mb-1">Lori Ferguson</h6>
                                            <p class="mdtxt">Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-profile my-2">
                                    <a href="profile-post.html" class="mdtxt w-100 text-center py-2">View profile</a>
                                </div>
                                <ul>
                                    <li>
                                        <a href="profile-edit.html" class="mdtxt">
                                            <i class="material-symbols-outlined mat-icon"> settings </i>
                                            Settings & Privacy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="mdtxt">
                                            <i class="material-symbols-outlined mat-icon"> power_settings_new </i>
                                            Sign Out
                                        </a>
                                    </li>
                                </ul>
                                <div class="switch-wrapper mt-4 d-flex gap-1 align-items-center">
                                    <i class="mat-icon material-symbols-outlined sun icon"> light_mode </i>
                                    <label class="switch">
                                        <input type="checkbox" class="checkbox">
                                        <span class="slider"></span>
                                    </label>
                                    <i class="mat-icon material-symbols-outlined moon icon"> dark_mode </i>
                                    <span class="mdtxt ms-2">Dark mode</span>
                                </div>
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
            <div class="single-item messages-area">
                <div class="messages-btn cmn-head">
                    <div class="icon-area d-center position-relative">
                        <i class="material-symbols-outlined mat-icon">mail</i>
                        <span class="abs-area position-absolute d-center mdtxt">4</span>
                    </div>
                </div>
                <div class="main-area p-5 messages-content">
                    <h5 class="mb-8">Messages</h5>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="assets/images/avatar-7.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <div class="title-area position-relative d-inline-flex align-items-center">
                                    <h6 class="m-0 d-inline-flex">Piter Maio</h6>
                                    <span class="abs-area position-absolute d-center mdtxt">3</span>
                                </div>
                                <p class="mdtxt sms">Amet minim mollit non....</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="assets/images/avatar-1.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">Annette Black</h6>
                                <p class="mdtxt">You: consequat sunt</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="assets/images/avatar-2.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">Ralph Edwards</h6>
                                <p class="mdtxt sms">Amet minim mollit non....</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="assets/images/avatar-3.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">Darrell Steward</h6>
                                <p class="mdtxt">You: consequat sunt</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="assets/images/avatar-4.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">Wade Warren</h6>
                                <p class="mdtxt">You: consequat sunt</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="assets/images/avatar-5.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">Kathryn Murphy</h6>
                                <p class="mdtxt">You: consequat sunt</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-chat.html" class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="avatar-img max-un" src="assets/images/avatar-6.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">Jacob Jones</h6>
                                <p class="mdtxt">You: consequat sunt</p>
                            </div>
                        </a>
                    </div>
                    <div class="btn-area">
                        <a href="profile-chat.html">See all inbox</a>
                    </div>
                </div>
            </div>
            <div class="single-item messages-area notification-area">
                <div class="notification-btn cmn-head position-relative">
                    <div class="icon-area d-center position-relative">
                        <i class="material-symbols-outlined mat-icon">notifications</i>
                        <span class="abs-area position-absolute d-center mdtxt">3</span>
                    </div>
                </div>
                <div class="main-area p-5 notification-content">
                    <h5 class="mb-8">Notification</h5>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-notification.html" class="d-flex justify-content-between align-items-center">
                            <div class="left-item position-relative d-inline-flex gap-3">
                                <div class="avatar position-relative d-inline-flex">
                                    <img class="avatar-img max-un" src="assets/images/avatar-1.png" alt="avatar">
                                    <img class="abs-item position-absolute max-un"
                                        src="assets/images/icon/speech-bubble.png" alt="icon">
                                </div>
                                <div class="text-area">
                                    <h6 class="m-0 mb-1">Piter Maio</h6>
                                    <p class="mdtxt">Comment on your post</p>
                                </div>
                            </div>
                            <div class="time-remaining">
                                <p class="mdtxt">Just now</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-notification.html" class="d-flex justify-content-between align-items-center">
                            <div class="left-item position-relative d-inline-flex gap-3">
                                <div class="avatar position-relative d-inline-flex">
                                    <img class="avatar-img max-un" src="assets/images/avatar-2.png" alt="avatar">
                                    <img class="abs-item position-absolute max-un"
                                        src="assets/images/icon/emoji-love.png" alt="icon">
                                </div>
                                <div class="text-area">
                                    <h6 class="m-0 mb-1">Kathryn Murphy</h6>
                                    <p class="mdtxt">Like your photo</p>
                                </div>
                            </div>
                            <div class="time-remaining">
                                <p class="mdtxt">2min</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-notification.html" class="d-flex justify-content-between align-items-center">
                            <div class="left-item position-relative d-inline-flex gap-3">
                                <div class="avatar position-relative d-inline-flex">
                                    <img class="avatar-img max-un" src="assets/images/avatar-3.png" alt="avatar">
                                    <img class="abs-item position-absolute max-un"
                                        src="assets/images/icon/emoji-love.png" alt="icon">
                                </div>
                                <div class="text-area">
                                    <h6 class="m-0 mb-1">Jacob Jones</h6>
                                    <p class="mdtxt">Sent you a request</p>
                                </div>
                            </div>
                            <div class="time-remaining">
                                <p class="mdtxt">1hr</p>
                            </div>
                        </a>
                        <div class="d-flex gap-3 mt-4">
                            <button class="cmn-btn">Accept</button>
                            <button class="cmn-btn alt">Delete</button>
                        </div>
                    </div>
                    <div class="single-box p-0 mb-7">
                        <a href="profile-notification.html" class="d-flex justify-content-between align-items-center">
                            <div class="left-item position-relative d-inline-flex gap-3">
                                <div class="avatar position-relative d-inline-flex">
                                    <img class="avatar-img max-un" src="assets/images/avatar-4.png" alt="avatar">
                                    <img class="abs-item position-absolute max-un"
                                        src="assets/images/icon/emoji-love.png" alt="icon">
                                </div>
                                <div class="text-area">
                                    <h6 class="m-0 mb-1">Kathryn Murphy</h6>
                                    <p class="mdtxt">officia consequat duis enim...</p>
                                </div>
                            </div>
                            <div class="time-remaining">
                                <p class="mdtxt">2hr</p>
                            </div>
                        </a>
                    </div>
                    <div class="btn-area">
                        <a href="profile-notification.html">See all notification</a>
                    </div>
                </div>
            </div>
            <div class="single-item profile-area position-relative">
                <div class="profile-pic d-flex align-items-center">
                    <span class="avatar cmn-head active-status">
                        <img class="avatar-img max-un" src="assets/images/avatar-1.png" alt="avatar">
                    </span>
                </div>
                <div class="main-area p-5 profile-content">
                    <div class="head-area">
                        <div class="d-flex gap-3 align-items-center">
                            <div class="avatar-item">
                                <img class="avatar-img max-un" src="assets/images/avatar-1.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1">Lori Ferguson</h6>
                                <p class="mdtxt">Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="view-profile my-2">
                        <a href="profile-post.html" class="mdtxt w-100 text-center py-2">View profile</a>
                    </div>
                    <ul>
                        <li>
                            <a href="profile-edit.html" class="mdtxt">
                                <i class="material-symbols-outlined mat-icon"> settings </i>
                                Settings & Privacy
                            </a>
                        </li>
                        <li>
                            <a href="#" class="mdtxt">
                                <i class="material-symbols-outlined mat-icon"> power_settings_new </i>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                    <div class="switch-wrapper mt-4 d-flex gap-1 align-items-center">
                        <i class="mat-icon material-symbols-outlined sun icon"> light_mode </i>
                        <label class="switch">
                            <input type="checkbox" class="checkbox">
                            <span class="slider"></span>
                        </label>
                        <i class="mat-icon material-symbols-outlined moon icon"> dark_mode </i>
                        <span class="mdtxt ms-2">Dark mode</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Menu end -->

    <!-- Main Content start -->
    <main class="main-content">
        {{-- <div class="container sidebar-toggler">
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
                            <div class="avatar position-relative">
                                <img class="avatar-img max-un" src="assets/images/avatar-1.png" alt="avatar">
                            </div>
                            <div class="text-area">
                                <h6 class="m-0 mb-1"><a href="profile-post.html">Lerio Mao</a></h6>
                                <p class="mdtxt">@maolio</p>
                            </div>
                        </div>
                        <ul class="profile-link mt-7 mb-7 pb-7">
                            <li>
                                <a href="index.html" class="d-flex gap-4 active">
                                    <i class="material-symbols-outlined mat-icon"> home </i>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="friend-request.html" class="d-flex gap-4">
                                    <i class="material-symbols-outlined mat-icon"> person </i>
                                    <span>People</span>
                                </a>
                            </li>
                            <li>
                                <a href="event.html" class="d-flex gap-4">
                                    <i class="material-symbols-outlined mat-icon"> workspace_premium </i>
                                    <span>Event</span>
                                </a>
                            </li>
                            <li>
                                <a href="pages.html" class="d-flex gap-4">
                                    <i class="material-symbols-outlined mat-icon"> perm_media </i>
                                    <span>Pages</span>
                                </a>
                            </li>
                            <li>
                                <a href="group.html" class="d-flex gap-4">
                                    <i class="material-symbols-outlined mat-icon"> workspaces </i>
                                    <span>Group</span>
                                </a>
                            </li>
                            <li>
                                <a href="marketplace.html" class="d-flex gap-4">
                                    <i class="material-symbols-outlined mat-icon"> store </i>
                                    <span>Marketplace</span>
                                </a>
                            </li>
                            <li>
                                <a href="saved-post.html" class="d-flex gap-4">
                                    <i class="material-symbols-outlined mat-icon"> sync_saved_locally </i>
                                    <span>Saved</span>
                                </a>
                            </li>
                            <li>
                                <a href="favorites.html" class="d-flex gap-4">
                                    <i class="material-symbols-outlined mat-icon"> bookmark_add </i>
                                    <span>Favorites</span>
                                </a>
                            </li>
                            <li>
                                <a href="setting.html" class="d-flex gap-4">
                                    <i class="material-symbols-outlined mat-icon"> settings </i>
                                    <span>Settings</span>
                                </a>
                            </li>
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
                <div class="col-xxl-6 col-xl-5 col-lg-8 mt-0 mt-lg-10 mt-xl-0 d-flex flex-column gap-7 cus-z">
                    <div class="story-carousel">
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
                                    <a href="public-profile-post.html"
                                        class="abs-area p-3 position-absolute bottom-0">
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
                                    <a href="public-profile-post.html"
                                        class="abs-area p-3 position-absolute bottom-0">
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
                                    <a href="public-profile-post.html"
                                        class="abs-area p-3 position-absolute bottom-0">
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
                                    <a href="public-profile-post.html"
                                        class="abs-area p-3 position-absolute bottom-0">
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
                                    <a href="public-profile-post.html"
                                        class="abs-area p-3 position-absolute bottom-0">
                                        <img src="assets/images/avatar-5.png" alt="image">
                                        <span class="mdtxt">Jacob Jones</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="share-post d-flex gap-3 gap-sm-5 p-3 p-sm-5">
                        <div class="profile-box">
                            <a href="#"><img src="assets/images/add-post-avatar.png" class="max-un"
                                    alt="icon"></a>
                        </div>
                        <form action="#" class="w-100 position-relative">
                            <textarea cols="10" rows="2" placeholder="Write something to Lerio.."></textarea>
                            <div class="abs-area position-absolute d-none d-sm-block">
                                <i class="material-symbols-outlined mat-icon xxltxt"> sentiment_satisfied </i>
                            </div>
                            <ul class="d-flex justify-content-between flex-wrap mt-3 gap-3">
                                <li class="d-flex align-items-center gap-2" data-bs-toggle="modal"
                                    data-bs-target="#goLiveMod">
                                    <img src="assets/images/icon/live-video.png" class="max-un" alt="icon">
                                    <span>Live</span>
                                </li>
                                <li class="d-flex align-items-center gap-2" data-bs-toggle="modal"
                                    data-bs-target="#photoVideoMod">
                                    <img src="assets/images/icon/vgallery.png" class="max-un" alt="icon">
                                    <span>Photo/Video</span>
                                </li>
                                <li class="d-flex align-items-center gap-2" data-bs-toggle="modal"
                                    data-bs-target="#activityMod">
                                    <img src="assets/images/icon/emoji-laughing.png" class="max-un" alt="icon">
                                    <span>Fallings/Activity</span>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="post-item d-flex flex-column gap-5 gap-md-7" id="news-feed">
                        <div class="post-single-box p-3 p-sm-5">
                            <div class="top-area pb-5">
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar position-relative">
                                            <img class="avatar-img max-un" src="assets/images/avatar-1.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html">Lori Cortez</a></h6>
                                            <span class="mdtxt status">Active</span>
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
                                <div class="py-4">
                                    <p class="description">I created Roughly plugin to sketch crafted hand-drawn
                                        elements which can be used to any usage (diagrams/flows/decoration/etc)</p>
                                </div>
                                <div class="post-img">
                                    <img src="assets/images/post-img-1.png" class="w-100" alt="image">
                                </div>
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
                                <div class="react-list d-flex flex-wrap gap-6 align-items-center text-center">
                                    <button class="mdtxt">4 Comments</button>
                                    <button class="mdtxt">1 Shares</button>
                                </div>
                            </div>
                            <div
                                class="like-comment-share py-5 d-center flex-wrap gap-3 gap-md-0 justify-content-between">
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
                                                        <span class="material-symbols-outlined mat-icon m-0 xxltxt">
                                                            gif_box </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="file-upload">
                                                <label class="file">
                                                    <input type="file">
                                                    <span class="file-custom border-0 d-grid text-center">
                                                        <span class="material-symbols-outlined mat-icon m-0 xxltxt">
                                                            perm_media </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <span class="mood-area">
                                                <span class="material-symbols-outlined mat-icon m-0 xxltxt"> mood
                                                </span>
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
                        <div class="post-single-box p-3 p-sm-5">
                            <div class="top-area pb-5">
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar position-relative">
                                            <img class="avatar-img max-un" src="assets/images/avatar-1.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html">Lori Cortez</a></h6>
                                            <span class="mdtxt status">Active</span>
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
                                <div class="py-4">
                                    <p class="description">I created Roughly plugin to sketch crafted hand-drawn
                                        elements which can be used to any usage (diagrams/flows/decoration/etc)</p>
                                </div>
                                <div class="post-img  d-flex justify-content-between flex-wrap gap-2 gap-lg-3">
                                    <div class="single">
                                        <img src="assets/images/post-img-2.png" alt="image">
                                    </div>
                                    <div class="single d-grid gap-3">
                                        <img src="assets/images/post-img-3.png" alt="image">
                                        <img src="assets/images/post-img-4.png" alt="image">
                                    </div>
                                </div>
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
                                <div class="react-list d-flex flex-wrap gap-6 align-items-center text-center">
                                    <button class="mdtxt">4 Comments</button>
                                    <button class="mdtxt">1 Shares</button>
                                </div>
                            </div>
                            <div
                                class="like-comment-share py-5 d-center flex-wrap gap-3 gap-md-0 justify-content-between">
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
                                                        <span class="material-symbols-outlined mat-icon m-0 xxltxt">
                                                            gif_box </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="file-upload">
                                                <label class="file">
                                                    <input type="file">
                                                    <span class="file-custom border-0 d-grid text-center">
                                                        <span class="material-symbols-outlined mat-icon m-0 xxltxt">
                                                            perm_media </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <span class="mood-area">
                                                <span class="material-symbols-outlined mat-icon m-0 xxltxt"> mood
                                                </span>
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
                            <div class="comments-area mt-5">
                                <div class="single-comment-area ms-1 ms-xxl-15">
                                    <div class="parent-comment d-flex gap-2 gap-sm-4">
                                        <div class="avatar-item d-center align-items-baseline">
                                            <img class="avatar-img max-un" src="assets/images/avatar-3.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-item">
                                            <div
                                                class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                                <div class="title-area">
                                                    <h6 class="m-0 mb-3"><a href="public-profile-post.html">Lori
                                                            Cortez</a></h6>
                                                    <p class="mdtxt">The only way to solve the problem is to code for
                                                        the hardware directly</p>
                                                </div>
                                                <div class="btn-group dropend cus-dropdown">
                                                    <button type="button" class="dropdown-btn"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz
                                                        </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2"
                                                                href="#">
                                                                <i class="material-symbols-outlined mat-icon">
                                                                    hide_source </i>
                                                                <span>Hide Comments</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2"
                                                                href="#">
                                                                <i class="material-symbols-outlined mat-icon"> flag
                                                                </i>
                                                                <span>Report Comments</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="like-share d-flex gap-6 mt-2">
                                                <li class="d-center">
                                                    <button class="mdtxt">Like</button>
                                                </li>
                                                <li class="d-center flex-column">
                                                    <button class="mdtxt reply-btn">Reply</button>
                                                </li>
                                                <li class="d-center">
                                                    <button class="mdtxt">Share</button>
                                                </li>
                                            </ul>
                                            <form action="#" class="comment-form">
                                                <div class="d-flex gap-3">
                                                    <input placeholder="Write a comment.." class="py-3">
                                                    <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl">
                                                            near_me </i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="single-comment-area comment-item-nested mt-4 mt-sm-7 ms-13 ms-sm-15">
                                        <div class="d-flex gap-2 gap-sm-4 align-items-baseline">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="assets/images/avatar-4.png"
                                                    alt="avatar">
                                            </div>
                                            <div class="info-item">
                                                <div
                                                    class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                                    <div class="title-area">
                                                        <h6 class="m-0 mb-3"><a
                                                                href="public-profile-post.html">Alex</a></h6>
                                                        <p class="mdtxt">The only way to solve the</p>
                                                    </div>
                                                    <div class="btn-group dropend cus-dropdown">
                                                        <button type="button" class="dropdown-btn"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="material-symbols-outlined fs-xxl m-0"> more_horiz
                                                            </i>
                                                        </button>
                                                        <ul class="dropdown-menu p-4 pt-2">
                                                            <li>
                                                                <a class="droplist d-flex align-items-center gap-2"
                                                                    href="#">
                                                                    <i class="material-symbols-outlined mat-icon">
                                                                        hide_source </i>
                                                                    <span>Hide Comments</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="droplist d-flex align-items-center gap-2"
                                                                    href="#">
                                                                    <i class="material-symbols-outlined mat-icon"> flag
                                                                    </i>
                                                                    <span>Report Comments</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <ul class="like-share d-flex gap-6 mt-2">
                                                    <li class="d-center">
                                                        <button class="mdtxt">Like</button>
                                                    </li>
                                                    <li class="d-center flex-column">
                                                        <button class="mdtxt reply-btn">Reply</button>
                                                    </li>
                                                    <li class="d-center">
                                                        <button class="mdtxt">Share</button>
                                                    </li>
                                                </ul>
                                                <form action="#" class="comment-form">
                                                    <div class="d-flex gap-3">
                                                        <input placeholder="Write a comment.." class="py-3">
                                                        <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                                            <i class="material-symbols-outlined mat-icon m-0 fs-xxl">
                                                                near_me </i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-single-box p-3 p-sm-5">
                            <div class="top-area pb-5">
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar-item">
                                            <img class="avatar-img max-un" src="assets/images/avatar-5.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html">Loprayos</a></h6>
                                            <span class="mdtxt status">20m Ago</span>
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
                                <div class="py-4">
                                    <p class="description">Nam ornare a nibh id sagittis. Vestibulum nec molestie urna,
                                        eget convallis mi. Vestibulum rhoncus ligula eget sem sollicitudin interdum.
                                        Aliquam massa lectus, fringilla non diam ut, laoreet convallis risus. Curabitur
                                        at metus imperdiet, pellentesque ligula vel,</p>
                                </div>
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
                                <div class="react-list d-flex flex-wrap gap-6 align-items-center text-center">
                                    <button class="mdtxt">4 Comments</button>
                                    <button class="mdtxt">1 Shares</button>
                                </div>
                            </div>
                            <div
                                class="like-comment-share py-5 d-center flex-wrap gap-3 gap-md-0 justify-content-between">
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
                                                        <span class="material-symbols-outlined mat-icon m-0 xxltxt">
                                                            gif_box </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="file-upload">
                                                <label class="file">
                                                    <input type="file">
                                                    <span class="file-custom border-0 d-grid text-center">
                                                        <span class="material-symbols-outlined mat-icon m-0 xxltxt">
                                                            perm_media </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <span class="mood-area">
                                                <span class="material-symbols-outlined mat-icon m-0 xxltxt"> mood
                                                </span>
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
                            <div class="comments-area mt-5">
                                <div class="single-comment-area ms-1 ms-xxl-15">
                                    <div class="parent-comment d-flex gap-2 gap-sm-4">
                                        <div class="avatar-item d-center align-items-baseline">
                                            <img class="avatar-img max-un" src="assets/images/avatar-3.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-item active">
                                            <div
                                                class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                                <div class="title-area">
                                                    <h6 class="m-0 mb-3"><a href="public-profile-post.html">Lori
                                                            Cortez</a></h6>
                                                    <p class="mdtxt">The only way to solve the problem is to code for
                                                        the hardware directly</p>
                                                </div>
                                                <div class="btn-group dropend cus-dropdown">
                                                    <button type="button" class="dropdown-btn"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz
                                                        </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2"
                                                                href="#">
                                                                <i class="material-symbols-outlined mat-icon">
                                                                    hide_source </i>
                                                                <span>Hide Comments</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2"
                                                                href="#">
                                                                <i class="material-symbols-outlined mat-icon"> flag
                                                                </i>
                                                                <span>Report Comments</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="like-share d-flex gap-6 mt-2">
                                                <li class="d-center">
                                                    <button class="mdtxt">Like</button>
                                                </li>
                                                <li class="d-center flex-column">
                                                    <button class="mdtxt reply-btn">Reply</button>
                                                </li>
                                                <li class="d-center">
                                                    <button class="mdtxt">Share</button>
                                                </li>
                                            </ul>
                                            <form action="#" class="comment-form">
                                                <div class="d-flex gap-3">
                                                    <input placeholder="Write a comment.." class="py-3">
                                                    <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl">
                                                            near_me </i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div
                                        class="sibling-comment comment-item-nested single-comment-area mt-7 ms-13 ms-sm-15">
                                        <div class="d-flex gap-2 gap-sm-4 align-items-baseline">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="assets/images/avatar-4.png"
                                                    alt="avatar">
                                            </div>
                                            <div class="info-item">
                                                <div
                                                    class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                                    <div class="title-area">
                                                        <h6 class="m-0 mb-3"><a
                                                                href="public-profile-post.html">Alexa</a></h6>
                                                        <p class="mdtxt">The only way to solve the</p>
                                                    </div>
                                                    <div class="btn-group dropend cus-dropdown">
                                                        <button type="button" class="dropdown-btn"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="material-symbols-outlined fs-xxl m-0">
                                                                more_horiz </i>
                                                        </button>
                                                        <ul class="dropdown-menu p-4 pt-2">
                                                            <li>
                                                                <a class="droplist d-flex align-items-center gap-2"
                                                                    href="#">
                                                                    <i class="material-symbols-outlined mat-icon">
                                                                        hide_source </i>
                                                                    <span>Hide Comments</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="droplist d-flex align-items-center gap-2"
                                                                    href="#">
                                                                    <i class="material-symbols-outlined mat-icon">
                                                                        flag </i>
                                                                    <span>Report Comments</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <ul class="like-share d-flex gap-6 mt-2">
                                                    <li class="d-center">
                                                        <button class="mdtxt">Like</button>
                                                    </li>
                                                    <li class="d-center flex-column">
                                                        <button class="mdtxt reply-btn">Reply</button>
                                                    </li>
                                                    <li class="d-center">
                                                        <button class="mdtxt">Share</button>
                                                    </li>
                                                </ul>
                                                <form action="#" class="comment-form">
                                                    <div class="d-flex gap-3">
                                                        <input placeholder="Write a comment.." class="py-3">
                                                        <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                                            <i class="material-symbols-outlined mat-icon m-0 fs-xxl">
                                                                near_me </i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-comment-area comment-item-nested mt-7 ms-13 ms-sm-15">
                                        <div class="d-flex gap-2 gap-sm-4 align-items-baseline">
                                            <div class="avatar-item">
                                                <img class="avatar-img max-un" src="assets/images/avatar-7.png"
                                                    alt="avatar">
                                            </div>
                                            <div class="info-item">
                                                <div
                                                    class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                                    <div class="title-area">
                                                        <h6 class="m-0 mb-3"><a
                                                                href="public-profile-post.html">Haplika</a></h6>
                                                        <p class="mdtxt">The only way to solve the</p>
                                                    </div>
                                                    <div class="btn-group dropend cus-dropdown">
                                                        <button type="button" class="dropdown-btn"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="material-symbols-outlined fs-xxl m-0">
                                                                more_horiz </i>
                                                        </button>
                                                        <ul class="dropdown-menu p-4 pt-2">
                                                            <li>
                                                                <a class="droplist d-flex align-items-center gap-2"
                                                                    href="#">
                                                                    <i class="material-symbols-outlined mat-icon">
                                                                        hide_source </i>
                                                                    <span>Hide Comments</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="droplist d-flex align-items-center gap-2"
                                                                    href="#">
                                                                    <i class="material-symbols-outlined mat-icon">
                                                                        flag </i>
                                                                    <span>Report Comments</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <ul class="like-share d-flex gap-6 mt-2">
                                                    <li class="d-center">
                                                        <button class="mdtxt">Like</button>
                                                    </li>
                                                    <li class="d-center flex-column">
                                                        <button class="mdtxt reply-btn">Reply</button>
                                                    </li>
                                                    <li class="d-center">
                                                        <button class="mdtxt">Share</button>
                                                    </li>
                                                </ul>
                                                <form action="#" class="comment-form">
                                                    <div class="d-flex gap-3">
                                                        <input placeholder="Write a comment.." class="py-3">
                                                        <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                                            <i class="material-symbols-outlined mat-icon m-0 fs-xxl">
                                                                near_me </i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-area mt-5">
                                <div class="single-comment-area ms-1 ms-xxl-15">
                                    <div class="d-flex gap-4">
                                        <div class="avatar-item d-center align-items-baseline">
                                            <img class="avatar-img max-un" src="assets/images/avatar-3.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-item w-100">
                                            <div
                                                class="top-area px-4 py-3 d-flex gap-3 align-items-start justify-content-between">
                                                <div class="title-area">
                                                    <h6 class="m-0 mb-3"><a
                                                            href="public-profile-post.html">Marlio</a></h6>
                                                    <div class="post-img">
                                                        <img src="assets/images/icon/emoji-love-2.png"
                                                            alt="icon">
                                                    </div>
                                                </div>
                                                <div class="btn-group dropend cus-dropdown">
                                                    <button type="button" class="dropdown-btn"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-symbols-outlined fs-xxl m-0"> more_horiz
                                                        </i>
                                                    </button>
                                                    <ul class="dropdown-menu p-4 pt-2">
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2"
                                                                href="#">
                                                                <i class="material-symbols-outlined mat-icon">
                                                                    hide_source </i>
                                                                <span>Hide Comments</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="droplist d-flex align-items-center gap-2"
                                                                href="#">
                                                                <i class="material-symbols-outlined mat-icon"> flag
                                                                </i>
                                                                <span>Report Comments</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="like-share d-flex gap-6 mt-2">
                                                <li class="d-center">
                                                    <button class="mdtxt">Like</button>
                                                </li>
                                                <li class="d-center flex-column">
                                                    <button class="mdtxt reply-btn">Reply</button>
                                                </li>
                                                <li class="d-center">
                                                    <button class="mdtxt">Share</button>
                                                </li>
                                            </ul>
                                            <form action="#" class="comment-form">
                                                <div class="d-flex gap-3">
                                                    <input placeholder="Write a comment.." class="py-3">
                                                    <button class="cmn-btn px-2 px-sm-5 px-lg-6">
                                                        <i class="material-symbols-outlined mat-icon m-0 fs-xxl">
                                                            near_me </i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-single-box p-3 p-sm-5">
                            <div class="top-area pb-5">
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar position-relative">
                                            <img class="avatar-img max-un" src="assets/images/avatar-1.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html">Lori Cortez</a>
                                            </h6>
                                            <span class="mdtxt status">Active</span>
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
                                <div class="py-4">
                                    <p class="description">My Travel Video</p>
                                    <p class="hastag d-flex gap-2">
                                        <a href="#">#Viral</a>
                                        <a href="#">#travel</a>
                                    </p>
                                </div>
                                <div class="post-img video-item">
                                    <div class="plyr__video-embed player">
                                        <iframe src="https://www.youtube.com/embed/LXb3EKWsInQ"></iframe>
                                    </div>
                                </div>
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
                                <div class="react-list d-flex flex-wrap gap-6 align-items-center text-center">
                                    <button class="mdtxt">4 Comments</button>
                                    <button class="mdtxt">1 Shares</button>
                                </div>
                            </div>
                            <div
                                class="like-comment-share py-5 d-center flex-wrap gap-3 gap-md-0 justify-content-between">
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
                                        <a href="#"><img src="assets/images/add-post-avatar.png"
                                                class="max-un" alt="icon"></a>
                                    </div>
                                    <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100">
                                        <input placeholder="Write a comment..">
                                        <div class="file-input d-flex gap-1 gap-md-2">
                                            <div class="file-upload">
                                                <label class="file">
                                                    <input type="file">
                                                    <span class="file-custom border-0 d-grid text-center">
                                                        <span class="material-symbols-outlined mat-icon m-0 xxltxt">
                                                            gif_box </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="file-upload">
                                                <label class="file">
                                                    <input type="file">
                                                    <span class="file-custom border-0 d-grid text-center">
                                                        <span class="material-symbols-outlined mat-icon m-0 xxltxt">
                                                            perm_media </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <span class="mood-area">
                                                <span class="material-symbols-outlined mat-icon m-0 xxltxt"> mood
                                                </span>
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
                        <div class="post-single-box p-3 p-sm-5">
                            <div class="top-area pb-5">
                                <div class="profile-area d-center justify-content-between">
                                    <div class="avatar-item d-flex gap-3 align-items-center">
                                        <div class="avatar position-relative">
                                            <img class="avatar-img max-un" src="assets/images/avatar-1.png"
                                                alt="avatar">
                                        </div>
                                        <div class="info-area">
                                            <h6 class="m-0"><a href="public-profile-post.html">Lori Cortez</a>
                                            </h6>
                                            <span class="mdtxt status">Active</span>
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
                                <div class="py-4">
                                    <p class="description">I created Roughly plugin to sketch crafted hand-drawn
                                        elements which can be used to any usage (diagrams/flows/decoration/etc)</p>
                                </div>
                                <div class="post-img">
                                    <img src="assets/images/post-img-1.png" class="w-100" alt="image">
                                </div>
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
                                <div class="react-list d-flex flex-wrap gap-6 align-items-center text-center">
                                    <button class="mdtxt">4 Comments</button>
                                    <button class="mdtxt">1 Shares</button>
                                </div>
                            </div>
                            <div
                                class="like-comment-share py-5 d-center flex-wrap gap-3 gap-md-0 justify-content-between">
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
                                        <a href="#"><img src="assets/images/add-post-avatar.png"
                                                class="max-un" alt="icon"></a>
                                    </div>
                                    <div class="form-content input-area py-1 d-flex gap-2 align-items-center w-100">
                                        <input placeholder="Write a comment..">
                                        <div class="file-input d-flex gap-1 gap-md-2">
                                            <div class="file-upload">
                                                <label class="file">
                                                    <input type="file">
                                                    <span class="file-custom border-0 d-grid text-center">
                                                        <span class="material-symbols-outlined mat-icon m-0 xxltxt">
                                                            gif_box </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="file-upload">
                                                <label class="file">
                                                    <input type="file">
                                                    <span class="file-custom border-0 d-grid text-center">
                                                        <span class="material-symbols-outlined mat-icon m-0 xxltxt">
                                                            perm_media </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <span class="mood-area">
                                                <span class="material-symbols-outlined mat-icon m-0 xxltxt"> mood
                                                </span>
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
                                                    <div
                                                        class="friends-list d-flex gap-3 align-items-center text-center">
                                                        <ul class="d-flex align-items-center justify-content-center">
                                                            <li><img src="assets/images/avatar-2.png"
                                                                    alt="image"></li>
                                                            <li><img src="assets/images/avatar-3.png"
                                                                    alt="image"></li>
                                                            <li><img src="assets/images/avatar-4.png"
                                                                    alt="image"></li>
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
                                                    <h6 class="m-0"><a
                                                            href="public-profile-post.html">Marinez</a></h6>
                                                    <div
                                                        class="friends-list d-flex gap-3 align-items-center text-center">
                                                        <ul class="d-flex align-items-center justify-content-center">
                                                            <li><img src="assets/images/avatar-2.png"
                                                                    alt="image"></li>
                                                            <li><img src="assets/images/avatar-3.png"
                                                                    alt="image"></li>
                                                            <li><img src="assets/images/avatar-4.png"
                                                                    alt="image"></li>
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
                                                <button type="button" class="dropdown-btn"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
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
                                                            <i class="material-symbols-outlined mat-icon"> hide_source
                                                            </i>
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
                                                <button type="button" class="dropdown-btn"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
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
                                                            <i class="material-symbols-outlined mat-icon"> hide_source
                                                            </i>
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
                                                <button type="button" class="dropdown-btn"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
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
                                                            <i class="material-symbols-outlined mat-icon"> hide_source
                                                            </i>
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
                                                    <h6 class="m-0"><a href="public-profile-post.html"
                                                            class="mdtxt">Jane Cooper</a></h6>
                                                </div>
                                            </div>
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
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
                                                            <i class="material-symbols-outlined mat-icon"> hide_source
                                                            </i>
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
                                                <button type="button" class="dropdown-btn"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
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
                                                            <i class="material-symbols-outlined mat-icon"> hide_source
                                                            </i>
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
                                                <button type="button" class="dropdown-btn"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
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
                                                            <i class="material-symbols-outlined mat-icon"> hide_source
                                                            </i>
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
                                                <button type="button" class="dropdown-btn"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
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
                                                            <i class="material-symbols-outlined mat-icon"> hide_source
                                                            </i>
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
                                                    <h6 class="m-0"><a href="public-profile-post.html"
                                                            class="mdtxt">Guy Hawkins</a></h6>
                                                </div>
                                            </div>
                                            <div class="btn-group cus-dropdown dropend">
                                                <button type="button" class="dropdown-btn"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="material-symbols-outlined fs-xxl m-0"> more_horiz </i>
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
                                                            <i class="material-symbols-outlined mat-icon"> hide_source
                                                            </i>
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
                </div>
            </div>
        </div> --}}
    </main>
    <!-- Main Content end -->

    <!-- Go Live Popup start -->
    <div class="go-live-popup">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="modal fade" id="goLiveMod">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content p-5">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <i class="material-symbols-outlined mat-icon xxltxt"> close </i>
                                    </button>
                                </div>
                                <div class="top-content pb-5">
                                    <h5>Go Live</h5>
                                </div>
                                <div class="mid-area">
                                    <div class="d-flex mb-5 gap-3">
                                        <div class="profile-box">
                                            <a href="#"><img src="assets/images/add-post-avatar.png"
                                                    class="max-un" alt="icon"></a>
                                        </div>
                                        <textarea cols="10" rows="2" placeholder="Write something to Lerio.."></textarea>
                                    </div>
                                    <div class="file-upload">
                                        <label>Upload attachment</label>
                                        <label class="file mt-1">
                                            <input type="file">
                                            <span class="file-custom pt-8 pb-8 d-grid text-center">
                                                <i class="material-symbols-outlined mat-icon"> perm_media </i>
                                                <span>Drag here or click to upload photo.</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="footer-area pt-5">
                                    <div class="btn-area d-flex justify-content-end gap-2">
                                        <button type="button" class="cmn-btn alt" data-bs-dismiss="modal"
                                            aria-label="Close">Cancel</button>
                                        <button class="cmn-btn">Go Live</button>
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

    <!-- video popup start -->
    <div class="go-live-popup video-popup">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="modal cmn-modal fade" id="photoVideoMod">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content p-5">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <i class="material-symbols-outlined mat-icon xxltxt"> close </i>
                                    </button>
                                </div>
                                <div class="top-content pb-5">
                                    <h5>Add post photo/video</h5>
                                </div>
                                <div class="mid-area">
                                    <div class="d-flex mb-5 gap-3">
                                        <div class="profile-box">
                                            <a href="#"><img src="assets/images/add-post-avatar.png"
                                                    class="max-un" alt="icon"></a>
                                        </div>
                                        <textarea cols="10" rows="2" placeholder="Write something to Lerio.."></textarea>
                                    </div>
                                    <div class="file-upload">
                                        <label>Upload attachment</label>
                                        <label class="file mt-1">
                                            <input type="file">
                                            <span class="file-custom pt-8 pb-8 d-grid text-center">
                                                <i class="material-symbols-outlined mat-icon"> perm_media </i>
                                                <span>Drag here or click to upload photo.</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="footer-area pt-5">
                                    <div class="btn-area d-flex justify-content-end gap-2">
                                        <button type="button" class="cmn-btn alt" data-bs-dismiss="modal"
                                            aria-label="Close">Cancel</button>
                                        <button class="cmn-btn">Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video popup end -->

    <!-- Go Live Popup start -->
    <div class="go-live-popup">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="modal cmn-modal fade" id="activityMod">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content p-5">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <i class="material-symbols-outlined mat-icon xxltxt"> close </i>
                                    </button>
                                </div>
                                <div class="top-content pb-5">
                                    <h5>Create post</h5>
                                </div>
                                <div class="mid-area">
                                    <div class="d-flex mb-5 gap-3">
                                        <div class="profile-box">
                                            <a href="#"><img src="assets/images/add-post-avatar.png"
                                                    class="max-un" alt="icon"></a>
                                        </div>
                                        <textarea cols="10" rows="2" placeholder="Write something to Lerio.."></textarea>
                                    </div>
                                    <div class="file-upload">
                                        <label>Upload attachment</label>
                                        <label class="file mt-1">
                                            <input type="file">
                                            <span class="file-custom pt-8 pb-8 d-grid text-center">
                                                <i class="material-symbols-outlined mat-icon"> perm_media </i>
                                                <span>Drag here or click to upload photo.</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="tooltips-area d-flex mt-3 gap-2">
                                        <button type="button" class="btn d-center" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Fallings/Activity">
                                            <i class="material-symbols-outlined mat-icon"> mood </i>
                                        </button>
                                        <button type="button" class="btn d-center" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Video">
                                            <i class="material-symbols-outlined mat-icon"> movie </i>
                                        </button>
                                        <button type="button" class="btn d-center" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Maps">
                                            <i class="material-symbols-outlined mat-icon"> location_on </i>
                                        </button>
                                        <button type="button" class="btn d-center" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Tag">
                                            <i class="material-symbols-outlined mat-icon"> sell </i>
                                        </button>
                                    </div>
                                </div>
                                <div class="footer-area d-flex justify-content-between pt-5">
                                    <div class="left-area">
                                        <select>
                                            <option value="1">Public</option>
                                            <option value="2">Only Me</option>
                                            <option value="3">Friends</option>
                                            <option value="4">Custom</option>
                                        </select>
                                    </div>
                                    <div class="btn-area d-flex justify-content-end gap-2">
                                        <button type="button" class="cmn-btn alt" data-bs-dismiss="modal"
                                            aria-label="Close">Cancel</button>
                                        <button class="cmn-btn">Post</button>
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

    <!--==================================================================-->
    <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/plyr.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/plugin.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
