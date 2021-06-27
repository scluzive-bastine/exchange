<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <title>Buy-Sell Defi and Non-custodial Exchange</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/png" href=" {{ asset('/images/buysell-logo.png') }} ">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- fontawesome --}}
    <link rel="stylesheet" href="{{ asset('fortawesome/fontawesome-free/css/all.min.css') }}">


    {{-- Tailwind Css --}}
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    {{-- Flickity --}}
    <script src="{{ asset('js/flickity.js') }}"></script>


    {{-- Glide Css --}}
    <link rel="stylesheet" href="{{ asset('css/glide.core.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glide.theme.min.css') }}">
    {{-- ./ Glide Css --}}

    {{--  Pixel Css --}}
    <link rel="stylesheet" href="{{ asset('css/pixel.css') }}">
    {{-- ./ Pixel Css --}}

    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> 
    {{-- <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> --}}
    <script src="{{ asset('js/particles.min.js') }}"></script>

    {{-- AOS --}}
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <script src="{{asset('js/aos.js')}}"></script>
    {{-- AOS --}}
    <script src="{{asset('js/app.js')}}"></script>


    <link rel="stylesheet" href="{{ asset('css/update.css') }}">

    {{-- Transack --}}
    <script src="https://global.transak.com/sdk/v1.1/widget.js" async></script>
</head>

<style>
    .bs-link{
        color: #fff;
    }
    .bs-link:hover {
        color: #cccccc;
    }
    .carousel-cell {
        width: 100%;
        /* height: 160px; */
        margin-right: 10px;
    }
    .main-carousel:focus{
        outline: none!important;
    }
    .carousel-cell:focus {
        outline: none!important;
    }
    .flickity-viewport:focus {
        border: none!important;
        outline: none!important;
    }
    .flickity-enabled:focus .flickity-viewport {
        outline: none;
    }
    .flickity-page-dots {
        bottom: 0px;
        display: flex;
        justify-content: center;
    }
    /* white circles */
    .flickity-page-dots .dot {
        width: 12px;
        height: 12px;
        opacity: 1;
        background: transparent;
        border: 2px solid #242e4c;
        border-radius: 50%;
        margin-right: .9px;
    }
    /* fill-in selected dot */
    .flickity-page-dots .dot.is-selected {
        background:#242e4c;
    }
    .navbar-main.scrolled {
        background: #242e4c!important;
    }
</style>

<body>

    <header class="header-global">
        <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-theme-primary navbar-expand-lg headroom @@classes transition ease-in-out duration-150">
            <div class="container position-relative">
                <a class="navbar-brand mr-lg-5" href="{{ route('new.index') }}">
                    {{-- <img class="navbar-brand-dark" src="@@path/assets/img/brand/light.svg" alt="Logo light">
                    <img class="navbar-brand-light" src="@@path/assets/img/brand/dark.svg" alt="Logo dark"> --}}
                    <img src=" {{ asset('/images/buysell-logo.png') }} " class="navbar-brand-light" >
                </a>
                <div class="navbar-collapse collapse mr-auto" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="">
                                    <img src="{{ asset('/images/bs-logoG.png') }}" alt="BS logo" style="width: 37px; height: 37px;">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                        <li class="nav-item">
                            <a href="{{ route('new.exchange') }}" class="nav-link bs-link">Swap & Exchange</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link bs-link dropdown-toggle" data-toggle="dropdown" id="supportDropdown" aria-expanded="false">
                                Stake
                                <span class="fas fa-angle-down nav-link-arrow ml-1"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="supportDropdown">
                                <div class="col-auto px-0">
                                    <div class="list-group list-group-flush">
                                        <a href="{{ route('new.classic') }}" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                            <div class="ml-4">
                                                <span class="d-block font-small font-weight-bold mb-0">Classic Staking</span>
                                            </div>
                                        </a>
                                        <a href="{{ route('new.assets') }}" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                            <div class="ml-4">
                                                <span class="d-block font-small font-weight-bold mb-0">Asset Staking</span>
                                            </div>
                                        </a>
                                        <a href="{{ route('new.pooled') }}" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                            <div class="ml-4">
                                                <span class="d-block font-small font-weight-bold mb-0">Pooled Staking</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('new.farming') }}" class="nav-link bs-link">xBSE Farming</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('new.governance') }}" class="nav-link bs-link">Governance</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('new.earn') }}" class="nav-link bs-link">Earn</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('new.nft') }}" class="nav-link bs-link">NFT</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('new.borrow') }}" class="nav-link bs-link">Borrow</a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link bs-link dropdown-toggle" data-toggle="dropdown" id="supportDropdown" aria-expanded="false">
                                Learn more
                                <span class="fas fa-angle-down nav-link-arrow ml-1"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="supportDropdown">
                                <div class="col-auto px-0">
                                    <div class="list-group list-group-flush">
                                        <a href="{{ route('new.blog') }}" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                            <span class="icon icon-sm"><span class="fas fa-file-alt"></span></span>
                                            <div class="ml-4">
                                                <span class="d-block font-small font-weight-bold mb-0">Blog</span>
                                                <span class="small">News and Upcoming Events</span>
                                            </div>
                                        </a>
                                        {{-- <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                            <span class="icon icon-sm"><span class="fa fa-phone"></span></span>
                                            <div class="ml-4">
                                                <span class="d-block font-small font-weight-bold mb-0">Contact</span>
                                                <span class="small">Reach out to us</span>
                                            </div>
                                        </a> --}}
                                        <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                            <span class="icon icon-sm"><span class="fas fa-address-card"></span></span>
                                            <div class="ml-4">
                                                <span class="d-block font-small font-weight-bold mb-0">About</span>
                                                <span class="small">Get to know us</span>
                                            </div>
                                        </a>
                                        {{-- <a href="#" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                            <span class="icon icon-sm"><span class="fa fa-hashtag"></span></span>
                                            <div class="ml-4">
                                                <span class="d-block font-small font-weight-bold mb-0">Media</span>
                                                <span class="small">Follow us</span>
                                            </div>
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <a href="https://app.uniswap.org/#/swap?inputCurrency=0xa30189d8255322a2f8b2a77906b000aeb005570c&outputCurrency=ETH" target="_blank" class="btn btn-outline-soft d-none d-lg-inline mr-md-3 animate-up-2">Buy BSE</a>
                    <a href="{{ route('staking.dashboard') }}" class="btn btn-tertiary animate-up-2"><span class="fas fa-th-large mr-2"></span> Lauch App</a>
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <main id="app">
        {{-- @include('preloader') --}}
        @yield('content')
    </main>


    <footer class="footer py-5 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="navbar-brand-dark mb-4" src="{{ asset('/images/buysell-logo.png') }}" alt="Logo light" style="width: 37px; height: 37px;">
                    <p><strong>Buy-Sell DeFi Ecosystem</strong> </p>
                    <ul class="social-buttons mb-5 mb-lg-0">
                        <li>
                            <a href="#" aria-label="twitter social link" class="icon-white mr-2">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon-white mr-2" aria-label="facebook social link">
                                <span class="fab fa-facebook"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="github social link" class="icon-white mr-2">
                                <span class="fab fa-github"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="github social link" class="icon-white mr-2">
                                <span class="fab fa-telegram-plane" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 mb-5 mb-lg-0">
                    <span class="h5">Know More</span>
                    <ul class="footer-links mt-2">
                        <li><a target="_blank" href="#">Blog</a></li>
                        <li><a target="_blank" href="#">Contact</a></li>
                        <li><a target="_blank" href="#">About Us</a></li>
                        <li><a target="_blank" href="#">Media</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 mb-5 mb-lg-0">
                    <span class="h5">Main</span>
                    <ul class="footer-links mt-2">
                        <li><a href="#" target="_blank">Stake
                                <span class="badge badge-sm bg-tertiary ml-2">v1.0</span></a></li>
                        <li><a href="#" target="_blank">Swap</a></li>
                        <li><a target="_blank" href="#">BSE Token</a>
                        </li>
                        <li><a target="_blank" href="#">Governance</a></li>
                        <li><a target="_blank" href="#">Earn</a></li>
                        <li><a target="_blank" href="#">Borrow</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 mb-5 mb-lg-0">
                    <span class="h5">Subscribe</span>
                    <p class="text-muted font-small mt-2">Join our mailing list. We write rarely, but only the best content.</p>
                    <form action="#">
                        <div class="form-row mb-2">
                            <div class="col-12">
                                <label class="h6 font-weight-normal text-muted" for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control mb-2" placeholder="example@company.com" name="email" aria-label="Subscribe form" id="exampleInputEmail3" required="">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-tertiary shadow-soft btn-block" data-loading-text="Sending">
                                    <span>Subscribe</span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="text-muted font-small m-0">We’ll never share your details. See our <a class="text-white" href="#">Privacy Policy</a></p>
                </div>
            </div>
            <hr class="bg-secondary my-2">
            <div class="row">
                <div class="col mb-md-0">
                    <a href="https://themesberg.com" target="_blank" class="d-flex justify-content-center">
                        <img src="{{ asset('/images/buysell-logo.png') }}" class="mb-3" alt="Themesberg Logo" style="width: 37px; height: 37px;">
                    </a>
                <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                    <p class="font-weight-normal font-small mb-0">Copyright © Buy-Sell<span class="current-year">2020</span>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


{{-- Core --}}
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/headroom.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
{{-- ./ Core --}}

{{-- JS --}}
{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

<script src="{{ asset('js/on-screen.umd.min.js') }}"></script>
<script src="{{ asset('js/nouislider.min.js') }}"></script>
<script src="{{ asset('js/jarallax.min.js') }}"></script>
<script src="{{ asset('js/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('js/prism.js') }}"></script>
<script src="{{ asset('js/vivus.min.js') }}"></script>
<script src="{{ asset('js/chartist.min.js') }}"></script>
<script src="{{ asset('js/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('js/glide.min.js') }}"></script>
<script src="{{ asset('js/countUp.umd.js') }}"></script>
<script src="{{ asset('js/datepicker.min.js') }}"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{ asset('js/datepicker.min.js') }}"></script>

{{-- Pixel Js --}}
<script src="{{ asset('js/pixel.js') }}"></script>

{{-- ./ JS --}}

@stack('scripts')
<script>
    $(document).ready(function() {
        $(window).scroll(function(){
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
        });

        // AOS Animation
        AOS.init({
            duration: 200,
            once: true,
        });
    });
</script>


</body>
</html>