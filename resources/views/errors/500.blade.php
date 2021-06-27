<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <title>Buy-Sell Defi-Project</title>

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

    <link rel="stylesheet" href="{{ asset('css/update.css') }}">
</head>

<body class="bg-white">


    <main>
        <section class="min-vh-100 d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-dark d-flex align-items-center justify-content-center">
                        <div>
                            <a href="{{ route('new.index') }}">
                                <img class="img-fluid w-50 ml-auto mr-auto" src="/images/505.svg" alt="Error 404">
                            </a>
                            <h1 class="mt-4">500 Page <span class="font-weight-bolder text-primary">Internal Server Error</span></h1>
                            <p class="lead my-4 px-lg-11">Something Went Wrong</p>
                            <a class="btn btn-primary animate-hover" href="{{ route('new.index') }}"><span class="fas fa-chevron-left mr-3 pl-2 animate-left-3"></span>Go back home</a></div>
                    </div>
                </div>
            </div>
        </section>
    </main>


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


</body>
</html>