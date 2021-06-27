<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BSE DeFi Token</title>

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
    {{-- <link rel="stylesheet" href="{{asset('css/custom.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/bse.css')}}">
    <link rel="stylesheet" href="{{asset('css/flickity.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
</head>
<body class="font-sans" style="background: #f2f2f2">
  <img src="/images/bg-staking.png" class="img-fluid bg-staking" alt="">
  <img src="/images/bg-staking2.png" class="img-fluid bg-staking-2" alt="">
    {{-- <nav class="navbar navbar-expand-sm navbar-light">
        <a class="navbar-brand" href=" {{route('home')}} ">
            <img src="/images/bs-blue.png" width="100" height="100" alt="">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav font-bold lg:text-gray-800">
                <li class="nav-item">
                  <a class="nav-link sm:text-gray-800 transition ease-in-out duration-150 hover:text-gray-400" href="#">Exchanges</a>
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
                  <a class="nav-link sm:text-teal-800 transition ease-in-out duration-150 hover:text-gray-400" href="#" style="color: rgb(247 179 98); font-weight: 500!important; ">BSE Token </a>
                </li>
              </ul>
        </div>
    </nav> --}}
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src=" {{ asset('/images/bs-logo-circle.png') }} " class="" width="50" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="navbar-nav font-bold lg:text-gray-800">
            <li class="nav-item">
              <a class="nav-link sm:text-gray-800 transition ease-in-out duration-150 hover:text-gray-400" href="#">Exchanges</a>
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
          </ul>
      </div>
  </nav>
    <div class="container-fluid" id="app">
        <div class="container px-10 py-10 mt-20">
          <div class="row">
            <div class="col-12 col-md-8">
              <div class="staking__header--container">
                <h1 class="text-5xl font-bold text-blue-800 uppercase">Reliable BSE Staking</h1>
                <p class="text-2xl">
                  Our pooled staking gives you an indefinite and endless opportunity to earn 75% share from our liquidity fees.
                </p>
              </div>
            </div>
            <div class="col-12 col-md-4"></div>
          </div>
        </div>
    </div>

    <div class="container mt-48 px-10 py-10">
      <div class="bse__staking--information ml-auto mr-auto px-4 py-4" style="width: 60%">
        <div class="text-center">
          <img src="https://img.icons8.com/cute-clipart/64/000000/trophy.png" class="img-fluid ml-auto mr-auto"/>
          Buy-Sell gives you an opportunity to stake and earn reward on over 20 crypto assets by staking BSE against smart contracts you think are secure and receives rewards.
           When you stake BSE, some portion of burned tokens are distributed in proportion to the amount of BSE tokens you have staked.
        </div>
      </div>
    </div>

    <div class="container mb-4">
      <div class="row">
        <div class="col-md-6">
          <h1 class="text-2xl text-blue-800 text-center font-bold mt-24">How the staking and Governance portal looks like</h1>
          <div class="mt-2">
            <p class="text-center">
              <a href=" {{ route('staking.dashboard') }} " class="btn btn-primary ml-auto mr-auto text-center px-6 py-2 rounded-lg" style="font-size: 1.25rem; border-radius:50px!important; background: rgb(247,178,95);
              background: linear-gradient(45deg, rgba(247,178,95,1) 0%, rgba(55,93,141,1) 0%, rgba(86,100,119,1) 0%, rgba(55,93,141,1) 1%, rgba(255,136,0,1) 77%, rgba(255,136,0,1) 100%, rgba(247,179,98,1) 100%)!important; border:none!important" data-toggle="tooltip" data-placement="top" title="Coming Soon">
                View Prototype
              </a>
            </p>
            {{-- <div class="px-6 px-4 bg-teal-600 text-white rounded-lg shadow cursor-pointer">Start Staking</div> --}}
          </div>
        </div>
        <div class="col-md-6">
          <img src="/images/stake-prototype.png" class="img-fluid shadow-2xl" alt="">
        </div>
      </div>
    </div>


    <div class="container mt-10 px-10 py-10">
      <div class="bse__staking--information ml-auto mr-auto px-4 py-4" style="width: 60%">
        <div class="text-center">
          <h1 class="text-center text-blue-800 font-bold font-bold">Governance</h1>
          Thanks to Govblocks, holding BSE tokens gives you the power to participate in the decision making and voting of updates and features on 
          Buy-Sell and in return get rewarded with BSE token as the voting ends.
        </div>
      </div>
    </div>
    <footer class="py-4 px-4 bg-blue-800 text-white">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                      <ul class="nav justify-content-center text-2xl">
                        <li class="nav-item">
                          <a class="nav-link py-2 px-2 hover:text-blue-300" href="https://medium.com/@BuySell_Network" target="_blank"><i class="fab fa-medium social__icons--footer"></i></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link py-2 px-2 hover:text-blue-300" href=" https://t.me/buysell_network" target="_blank"><i class="fab fa-telegram social__icons--footer"></i></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link py-2 px-2 hover:text-blue-300" href="https://twitter.com/BuySell_Network" target="_blank"><i class="fab fa-twitter-square social__icons--footer"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="text-center">
                            <img src="/images/bs-logo-circle.png" class="img-fluid ml-auto mr-auto" style="width: 12%" />
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="text-center">
                            <h1>© Buy-Sell – 2020 Buy-Sell</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
</body>
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script type="text/javascript">

    // $(function () {
    //       $('[data-toggle="tooltip"]').tooltip()
    //   });
</script>
</html>
