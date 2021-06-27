<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exchange of Cyptocurrencies</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/flickity.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/png" href=" {{ asset('/images/buysell-logo.png') }} ">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/flickity.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://global.transak.com/sdk/v1.1/widget.js" async></script>
    {{-- AOS --}}
    {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}
    {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <script src="{{asset('js/aos.js')}}"></script>

</head>
<body class="font-sans bg-gray-200 overflow-x-hidden h-100 flex-column flex">
    <div><img src="/images/waves.svg" class="bg" alt="background"></div>
    <div class="container-fluid" id="app">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('new.index') }}">
              <img src=" {{ asset('/images/bs-l.png') }} " class="" width="100" height="100">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              </ul>
              {{-- <ul class="navbar-nav font-bold lg:text-gray-800">
                  <li class="nav-item">
                    <a class="nav-link sm:text-gray-800 transition ease-in-out duration-150 hover:text-gray-400" href="{{ route('new.index') }}">Exchange</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link sm:text-gray-800 transition ease-in-out duration-150 hover:text-gray-400" href=" {{ route('defi.exchange') }}">DeFi Exchange </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link sm:text-gray-800 transition ease-in-out duration-150 hover:text-gray-400" href=" {{ route('defi.staking') }} ">Staking</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link sm:text-gray-800 transition ease-in-out duration-150 hover:text-gray-400" href=" {{ route('user.markets') }} ">Markets</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link sm:text-gray-800 transition ease-in-out duration-150 hover:text-gray-400" href=" {{ route('posts.index') }} ">News</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link sm:text-teal-800 transition ease-in-out duration-150 hover:text-gray-400" href=" {{ route('defi.token') }}" style="color: rgb(247 179 98); font-weight: 500!important; ">BSE Token </a>
                  </li>
              </ul>  --}}
            </div>
        </nav>
    </div>
    @yield('content')
    <footer class="footer mt-auto py-0" style="padding-top: 10rem!important">
        <div class="container">
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-2 mt-4">
                <div class="mt-4">
                    <a class="navbar-brand" href="{{ route('new.index') }}">
                      <img src=" {{ asset('/images/bs-l.png') }} " class="" width="100" height="100">
                    </a>
                    <h6>© Buy-Sell – 2020 Buy-Sell Exchange</h6>
                </div>
                <div class="mt-1">
                    <h4 class="text-white uppercase font-semibold ml-3">Popular Links</h4>
                    {{-- <ul class="font-bold">
                        <li class="nav-item f-li">
                            <a class="nav-link lg:text-gray-200 hover:text-gray-400 font-light" href=" {{ route('user.faq') }} ">FAQ</a>
                        </li>
                        <li class="nav-item f-li">
                            <a class="nav-link lg:text-gray-200 hover:text-gray-400 font-light" href="{{ route('user.about') }}">About Us</a>
                        </li>
                        <li class="nav-item f-li">
                            <a class="nav-link lg:text-gray-200 hover:text-gray-400 font-light" href="{{ route('user.markets') }}">Markets</a>
                        </li>
                        <li class="nav-item f-li">
                            <a class="nav-link lg:text-gray-200 hover:text-gray-400 font-light" href="">Exchange</a>
                        </li>
                    </ul> --}}
                </div>
                {{-- <div class="mt-1">
                    <h4 class="text-white uppercase font-semibold ml-3">Exchange Pairs</h4>
                    <ul class="font-bold">
                        <li class="nav-item">
                            <a class="nav-link lg:text-gray-200 hover:text-gray-400 font-light" href=""> Exchange <span class="font-bold">ETH</span> to <span class="font-bold">BTC</span> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lg:text-gray-200 hover:text-gray-400 font-light" href=""> Exchange <span class="font-bold">ETH</span> to <span class="font-bold">BTC</span> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lg:text-gray-200 hover:text-gray-400 font-light" href=""> Exchange <span class="font-bold">ETH</span> to <span class="font-bold">BTC</span> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lg:text-gray-200 hover:text-gray-400 font-light" href=""> Exchange <span class="font-bold">ETH</span> to <span class="font-bold">BTC</span> </a>
                        </li>
                    </ul>
                </div> --}}
                <div class="mt-1">
                  <h4 class="text-white uppercase font-semibold ml-3">Company Policy & Terms</h4>
                  <ul class="font-bold">
                      <li class="nav-item f-li">
                          <a class="nav-link lg:text-gray-200 sm:text-white hover:text-gray-400 font-normal" href=""> Terms of Use </a>
                      </li>
                      <li class="nav-item f-li">
                          <a class="nav-link lg:text-gray-200 sm:text-white hover:text-gray-400 font-normal" href=""> Privacy and Policy </a>
                      </li>
                  </ul>
              </div>
              {{-- <div class="mt-2">
                <h4 class="text-white uppercase font-semibold ml-3">Legal Disclaimer</h4>
              </div> --}}
            </div>
        </div>
        <div class="container-fluid bg-blue-800 text-white py-4 px-4 mt-4">
            <h6 class="text-center"> Social Media Links </h6>
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link py-2 px-2 text-white hover:text-blue-300" href="https://medium.com/@BuySell_Network" target="_blank"><i class="fab fa-medium social__icons--footer"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-2 px-2 text-white hover:text-blue-300" href=" https://t.me/buysell_network" target="_blank"><i class="fab fa-telegram social__icons--footer"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-2 px-2 text-white hover:text-blue-300" href="https://twitter.com/BuySell_Network" target="_blank"><i class="fab fa-twitter-square social__icons--footer"></i></a>
              </li>
            </ul>
        </div>
    {{-- <div><img src="/images/waves.svg" class="footer-bg" alt="background"></div> --}}

    </footer>
</body>
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
@stack('scripts')
<script>
   AOS.init({
      duration: 200,
    });
</script>
</html>