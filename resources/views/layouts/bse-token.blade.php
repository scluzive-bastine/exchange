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
    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<style>
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
background-image: url(/images/waves.svg);
background-repeat: no-repeat;
background-size: 100%;
}

h1 {
  font-weight: normal;
}

li {
  display: inline-block;
  font-size: 1em;
  list-style-type: none;
}

.timer li {
    background: #022858;
    padding: 1rem;
    text-align: center;
    width: 150px;
    height: 150px;
    border-radius: 50%;

}

.timer li span {
    display: block;
    font-size: 3rem;
    font-weight: 700;
}

.countdown-item::before {
    position: absolute;
    content: ' ';
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background-color: #fff;
    left: 0;
    top: 0;
    opacity: .1;
}
</style>
<body class="font-sans">
    <div>
        {{-- <img src="/images/bse-bgdots.png" class="first__screen--bg" alt=""> --}}
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-transparent">
            <a class="navbar-brand" href=" {{route('home')}} ">
                <img src="/images/bs-1.png" width="100" height="100" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              </ul>
              <ul class="navbar-nav font-bold">
                <li class="nav-item">
                  <a class="nav-link sm:text-white lg:text-white transition ease-in-out duration-150 hover:text-gray-200" href="{{ route('custodial.exchange') }}">Exchanges</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link sm:text-white lg:text-white transition ease-in-out duration-150 hover:text-gray-200" href=" {{ route('defi.exchange') }}">DeFi Exchange </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link sm:text-white lg:text-white transition ease-in-out duration-150 hover:text-gray-200" href="{{ route('defi.staking') }}">Staking</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link sm:text-white lg:text-white transition ease-in-out duration-150 hover:text-gray-200" href=" {{ route('user.markets') }} ">Markets</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link sm:text-white lg:text-white transition ease-in-out duration-150 hover:text-gray-200" href=" {{ route('posts.index') }} ">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link sm:text-white transition ease-in-out duration-150 hover:text-gray-200" href="#" style="color: rgb(247 179 98); font-weight: 500!important; ">BSE Token </a>
                </li>
            </ul>
            </div>
        </nav>
    </div>
    <div>
        {{-- <img src="/images/bse-bg2.png" class="bg-3 sm:hidden lg:block" alt=""> --}}
    </div>
    {{-- style="    background: #021733e0;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;" --}}

    <div class="container-fluid" id="app">
        {{-- style="background: url('/images/bse-bg2.png')" --}}
        <div class="token__container--header py-6 px-4">
            <div class="container mt-32 lg:px-10 sm:px-2">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-right" data-aos-delay="500" data-aos-duration="2000">
                        <div class="bse__header--container">
                            <h1 class="text-3xl font-black text-white uppercase">The noncustodial, DeFi ecosystem for your crypto assets</h1>
                            <p class="text-white">
                                As we constantly dive into new realms, we have built an unstoppable products such as a decentralized non-custodial exchange for over 200 
                                cryptocurrencies and over 5000 erc20 pairs through aggregated decentralized exchange and staking rewards.
                            </p>
                            {{-- <p class="mt-4">
                                <a href=" https://buy-sell.io/staking-dashboard " class="btn btn-primary ml-auto mr-auto text-center px-6 py-2 rounded-lg" style="font-size: 1.25rem; border-radius: 50px !important; background: linear-gradient(45deg, rgb(247, 178, 95) 0%, rgb(55, 93, 141) 0%, rgb(86, 100, 119) 0%, rgb(55, 93, 141) 1%, rgb(255, 136, 0) 77%, rgb(255, 136, 0) 100%, rgb(247, 179, 98) 100%) !important; border: none !important;">
                                View Prototype
                                </a>
                            </p> --}}
                            <div class="flex mt-4 w-100 text-center">
                                <a href="{{ route('staking.dashboard') }}" class="btn btn-primary text-center px-6 py-2 rounded-lg" style="font-size: 1rem; border-radius: 50px !important; background: linear-gradient(45deg, rgb(247, 178, 95) 0%, rgb(55, 93, 141) 0%, rgb(86, 100, 119) 0%, rgb(55, 93, 141) 1%, rgb(255, 136, 0) 77%, rgb(255, 136, 0) 100%, rgb(247, 179, 98) 100%) !important; border: none !important;">
                                    View Prototype
                                </a>
                                <a href="https://sale.lid.sh/buysell" class="btn btn-primary ml-4 text-center px-6 py-2 rounded-lg" style="font-size: 1rem; border-radius: 50px !important; background: #061931!important; border: none !important;">
                                    Join Presale 
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <img src="/images/laptop-demo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-32 mb-4 sm:px-1 lg:px-10">
        <div class="row">
            <div class="col-md-6" >
                <div class="sec__two--container py-4 px-4 rounded" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="2000">
                    <div class="content">
                        The BSE Token is a token issued by a non-custodial and decentralized crypto asset.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sec__two--container py-4 px-4 rounded"  data-aos="zoom-in" data-aos-delay="600" data-aos-duration="2000">
                    <div class="content">
                        BSE will serve as an internal cryptocurrency for Buy-Sell users. 
                        As Buy-Sell grows extremely fast, the tokens will be ingrate demand.
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- timer --}}
    <div class="container px-10 mt-16">
        <div class="container text-white" style="  margin: 0 auto;">
            <h1 class="font-bold text-2xl uppercase text-blue-800 mb-4 text-center">Private Sale Starts in</h1>
            <ul class="timer text-center">
              <li><span id="days"></span>days</li>
              <li><span id="hours"></span>Hours</li>
              <li><span id="minutes"></span>Minutes</li>
              <li><span id="seconds"></span>Seconds</li>
            </ul>
        </div>
    </div>
    {{-- ./ timer --}}
    <div   class="container mt-20 mb-4 px-10" data-aos="fade-up" data-aos-delay="600" data-aos-duration="2000">
        <div class="bse__utility--value">
            <h1 class="text-blue-800 uppercase font-bold mb-4">BSE token holders will get benefits</h1>
            <div class="row">
                <div class="col-md-3">
                    <div class="utility__value--container px-4 py-4 rounded">
                        <img src="https://img.icons8.com/color/48/000000/safe-ok.png" class="ml-auto mr-auto img-fluid"/>
                        <span class="text-2xl">Staking</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="utility__value--container px-4 py-4 rounded">
                        <img src="https://img.icons8.com/color/48/000000/prize.png" class="ml-auto mr-auto img-fluid"/>
                        <span class="text-2xl">Rewards</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="utility__value--container px-4 py-4 rounded">
                        <img src="https://img.icons8.com/clouds/48/000000/christmas-gift.png" class="ml-auto mr-auto img-fluid"/>
                        <span class="text-2xl">Airdrops</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="utility__value--container px-4 py-4 rounded">
                        <img src="https://img.icons8.com/bubbles/48/000000/group.png" class="ml-auto mr-auto img-fluid"/>
                        <span class="text-2xl">Affiliate</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="erc20-token">
        <div class="container">
            <div class="mt-5 mb-5 text-center">
                <p class="text-blue-800 text-2xl">
                    BSE Token is created on Ethereum <br>
                    (ERC20 Standard) Chain and are exchangeable. 
                </p>
            </div>
        </div>
    </div>

    {{-- Tokenomics --}}
    <div class="container mt-5">
        <div class="bse__tokenomics--container">
            {{-- <h1 class="text-center text-2xl font-bold mb-2 text-blue-800">BSE Tokenomics</h1> --}}
            <div class="row">
                <div class="col-md-3">
                    <div class="bse__staking--information py-3 px-3">
                        <h1 class="font-medium text-2xl text-blue-800">Token Distribution</h1>
                        <div class="mt-3">
                            <p class="mt-2">Total Token Supply: 100,000,000 BSE</p>
                            <p class="mt-2">Presale: 40%</p>
                            <p class="mt-2">Liquidity Pool: 20% (Locked Permanently)</p>
                            <p class="mt-2">Marketing/Development 10% (Locked for 12 months)</p>
                            <p class="mt-2">Team Allocation: 10% (Locked for 12 months)</p>
                            <p class="mt-2">Strategic Sale Allocation: 5% (Locked for 12 months)</p>
                            <p class="mt-2">Staking Reward: 15% (Locked for 24 months)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <img src="/images/bse-tokenomics3.png" class="img-fluid ml-auto mr-auto tokenomics__img" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container mt-3 mb-5">
        <div class="bse__airdrops--container rounded py-4 px-4 ">
            <h1 class="text-center text-2xl text-blue-800 font-medium">Airdrops Steps</h1>
            <div class="row justify-content-center mt-3">
                <div class="col-12 col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="flex">
                                <span class="mr-2 text-2xl font-bold text-blue-700">1.</span>
                                <span class="mt-2">Register for the BSE Airdrop, by creating an account</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="flex">
                                <span class="mr-2 text-2xl font-bold text-blue-700">2.</span>
                                <span class="mt-2">Join BuySell on Telegram</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="flex">
                                <span class="mr-2 text-2xl font-bold text-blue-700">3.</span>
                                <span class="mt-2">Follow BuySell on Twitter</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="flex">
                                <span class="mr-2 text-2xl font-bold text-blue-700">4.</span>
                                <span class="mt-2">Retweet this tweet, tag 3 friends & comment discussing #BSEToken</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="flex">
                                <span class="mr-2 text-2xl font-bold text-blue-700">5.</span>
                                <span class="mt-2">Submit your ETH wallet address and other details to the Buy-Sell Airdrop page.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="flex">
                                <span class="mr-2 text-2xl font-bold text-blue-700">6.</span>
                                <span class="mt-2"> Refer someone who buys BSE Token and get 15% of the any amount purchased through you.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- Road Map --}}
    <h1 class="text-center mt-5 text-2xl font-bold mb-2 text-blue-800">BSE RoadMap</h1>
    <div class="container rounded bg-blue-800 mb-5">
        <div class="road__map--timeline px-4 py-4" style="height: 300px;">
            <div class="main-carousel">
                <div class="carousel-cell">
                    <div class="road--map mb-3 px-4 py-4 rounded">
                        <h1 class="text-white text-left font-bold">August 2020 <span class="mr-2"> <i class="fa fa-check-circle text-green-600" aria-hidden="true"></i> </span> </h1>
                        <p>
                            Launch of non custodial exchange v 1.0
                        </p>
                    </div>
                </div>
                <div class="carousel-cell rm" style="margin-top: 9rem;">
                    <div class="rm__inverted mb-3 px-4 py-4 rounded">
                        <h1 class="text-white text-left font-bold">August 2020 <span class="mr-2"> <i class="fa fa-check-circle text-green-600" aria-hidden="true"></i> </span> </h1>
                        <p>
                            Launch of DeFi exchange v 1.0
                        </p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="road--map mb-3 px-4 py-4 rounded">
                        <h1 class="text-white text-left font-bold">August 2020 <span class="mr-2"> <i class="fa fa-check-circle text-green-600" aria-hidden="true"></i> </span> </h1>
                        <p>
                            Marketing, partnerships discussions, smart contract development
                        </p>
                    </div>
                </div>
                <div class="carousel-cell rm" style="margin-top: 9rem;">
                    <div class="rm__inverted mb-3 px-4 py-4 rounded">
                        <h1 class="text-white text-left font-bold">September 2020 </h1>
                        <p>
                            Token Sale/Airdrop and token distribution
                        </p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="road--map mb-3 px-4 py-4 rounded">
                        <h1 class="text-white text-left font-bold">September 2020 </h1>
                        <p>
                            Uniswap listing, liquidity locked and more exchange listings for BSE
                        </p>
                    </div>
                </div>
                <div class="carousel-cell rm" style="margin-top: 9rem;">
                    <div class="rm__inverted mb-3 px-4 py-4 rounded">
                        <h1 class="text-white text-left font-bold">October 2020 </h1>
                        <p>
                            Massive marketing
                        </p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="road--map mb-3 px-4 py-4 rounded">
                        <h1 class="text-white text-left font-bold">October/November 2020 </h1>
                        <p>
                            Staking/partnership reward for BSE holders
                        </p>
                    </div>
                </div>
                <div class="carousel-cell rm" style="margin-top: 9rem;">
                    <div class="rm__inverted mb-3 px-4 py-4 rounded">
                        <h1 class="text-white text-left font-bold">November 2020 </h1>
                        <p>
                            Launch of DeFi exchange web app v 2.0
                        </p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="road--map mb-3 px-4 py-4 rounded">
                        <h1 class="text-white text-left font-bold">December 2020 </h1>
                        <p>
                            Desktop and mobile app version with Exchange, DeFi exchange, Staking launch
                        </p>
                    </div>
                </div>
                <div class="carousel-cell rm" style="margin-top: 9rem;">
                    <div class="rm__inverted mb-3 px-4 py-4 rounded">
                        <h1 class="text-white text-left font-bold">December 2020 </h1>
                        <p>
                            More partnership
                        </p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="road--map mb-3 px-4 py-4 rounded">
                        <h1 class="text-white text-left font-bold">December 2020 </h1>
                        <p>
                            Decentralized Mobile credit & data refill covering over 185 countries covering over 280 Telecommunications.
                        </p>
                    </div>
                </div>
                <div class="carousel-cell rm" style="margin-top: 9rem;">
                    <div class="rm__inverted mb-3 px-4 py-4 rounded">
                        <h1 class="text-white text-left font-bold">January 2021 </h1>
                        <p>
                            Non-custodial exchange web app v 2.0
                            Lend and borrow web app without any third party
                        </p>
                    </div>
                </div>
            </div>
            <span class="timeline--horizontal"></span>
        </div>
    </div>
    {{-- Road Map --}}

    <div class="container mb-5 px-10">
        <div class="bse__utility--value">
            <h1 class="text-blue-800 uppercase font-bold mb-4 text-center text-2xl">At Buy-Sell we believe in</h1>
            <div class="row">
                <div class="col-md-3">
                    <div class="utility__value--container px-4 py-4 rounded">
                        <img src="https://img.icons8.com/cute-clipart/48/000000/equal-sign.png" class="ml-auto mr-auto img-fluid"/>
                        <span class="text-2xl">Fairness</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="utility__value--container px-4 py-4 rounded">
                        <img src="https://img.icons8.com/fluent/48/000000/landlord.png" class="ml-auto mr-auto img-fluid"/>
                        <span class="text-2xl">Self-sovereignty</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="utility__value--container px-4 py-4 rounded">
                        <img src="https://img.icons8.com/cotton/48/000000/call-to-action.png" class="ml-auto mr-auto img-fluid"/>
                        <span class="text-2xl">Ease-of-use</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="utility__value--container px-4 py-4 rounded">
                        <img src="https://img.icons8.com/cotton/48/000000/globe.png" class="ml-auto mr-auto img-fluid"/>
                        <span class="text-2xl">Transparent & Global</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-10 mt-5 mb-5">
        <div class="text-center text-blue-800 text-2xl">
            You can become part of the first global ecosystem that will 
            <br>
            democratize financial markets through radical decentralization.
        </div>
    </div>

    <div class="container mt-5 mb-5 faq--container">
        <h1 class="text-center text-2xl font-bold text-blue-800">Faq</h1>
        <div class="accordion ml-auto mr-auto mt-4 shadow" id="accordionExample" >
            <div class="card">
              <div class="card-header bg-white" id="headingOne">
                <h2 class="mb-0">
                  <div class="flex px-4 py-2" type="button" data-toggle="collapse" data-target="#faqOne" aria-expanded="true" aria-controls="collapseOne">
                    <span class="ml-1 text-md uppercase text-blue-700 faq__header font-bold"> What is buysell?</span>
                    <span class="ml-auto text-lg">  <i class="fas fa-chevron-down text-blue-800 transition-all duration-150"></i></span>
                    {{-- <i class="fas fa-angle-down"></i> --}}
                  </div>
                </h2>
              </div>
          
              <div id="faqOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Simply put, BuySell is All-in-1 blockchain ecosystem which includes non-custodial exchange, DeFi exchange, staking.
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header bg-white" id="headingOne">
                  <h2 class="mb-0">
                    <div class="flex px-4 py-2" type="button" data-toggle="collapse" data-target="#faqTwo" aria-expanded="true" aria-controls="collapseOne">
                      <span class="ml-1 text-md uppercase text-blue-700 faq__header font-bold"> What BSE token used for?</span>
                      <span class="ml-auto text-lg">  <i class="fas fa-chevron-down text-blue-800 transition-all duration-150"></i></span>
                      {{-- <i class="fas fa-angle-down"></i> --}}
                    </div>
                  </h2>
                </div>
            
                <div id="faqTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    BSE will serve as an internal currency for Buy-Sell products such as Non-custodial Exchange, DeFi Exchange, staking, lend & borrow, and more on the way features. As Buy-Sell grows extremely fast, the tokens will be in great demand.
                  </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-white" id="headingOne">
                  <h2 class="mb-0">
                    <div class="flex px-4 py-2" type="button" data-toggle="collapse" data-target="#faqThree" aria-expanded="true" aria-controls="collapseOne">
                      <span class="ml-1 text-md uppercase text-blue-700 faq__header font-bold"> Which Exchange supports BSE?</span>
                      <span class="ml-auto text-lg">  <i class="fas fa-chevron-down text-blue-800 transition-all duration-150"></i></span>
                      {{-- <i class="fas fa-angle-down"></i> --}}
                    </div>
                  </h2>
                </div>
            
                <div id="faqThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    BuySell will be available on uniswap, soon more CEX will follow as outlined in our roadmap.
                  </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-white" id="headingOne">
                  <h2 class="mb-0">
                    <div class="flex px-4 py-2" type="button" data-toggle="collapse" data-target="#faqFour" aria-expanded="true" aria-controls="collapseOne">
                      <span class="ml-1 text-md uppercase text-blue-700 faq__header font-bold"> What is the minimum BSE I can buy?</span>
                      <span class="ml-auto text-lg">  <i class="fas fa-chevron-down text-blue-800 transition-all duration-150"></i></span>
                      {{-- <i class="fas fa-angle-down"></i> --}}
                    </div>
                  </h2>
                </div>
            
                <div id="faqFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    The minimum BSE any user can buy during presale is 0.1ETH and the maximum is 30ETH, this is to allow equal opportunity to everyone who wants to take part.
                  </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-white" id="headingOne">
                  <h2 class="mb-0">
                    <div class="flex px-4 py-2" type="button" data-toggle="collapse" data-target="#faqFive" aria-expanded="true" aria-controls="collapseOne">
                      <span class="ml-1 text-md uppercase text-blue-700 faq__header font-bold"> Are my information protected?</span>
                      <span class="ml-auto text-lg">  <i class="fas fa-chevron-down text-blue-800 transition-all duration-150"></i></span>
                      {{-- <i class="fas fa-angle-down"></i> --}}
                    </div>
                  </h2>
                </div>
            
                <div id="faqFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Yes, users privacy are 100% assured. As you can see all our products are designed to give everyone that privacy required. We do not request any sensitive information the anyone.                  </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-white" id="headingOne">
                  <h2 class="mb-0">
                    <div class="flex px-4 py-2" type="button" data-toggle="collapse" data-target="#faqSix" aria-expanded="true" aria-controls="collapseOne">
                      <span class="ml-1 text-md uppercase text-blue-700 faq__header font-bold"> Can I swap BSE directly from the exchange?</span>
                      <span class="ml-auto text-lg">  <i class="fas fa-chevron-down text-blue-800 transition-all duration-150"></i></span>
                      {{-- <i class="fas fa-angle-down"></i> --}}
                    </div>
                  </h2>
                </div>
            
                <div id="faqSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    This feature will be readily available very soon, as it is part of our integral feature when staking, lending and borrow kicks off.                
                  </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-white" id="headingOne">
                  <h2 class="mb-0">
                    <div class="flex px-4 py-2" type="button" data-toggle="collapse" data-target="#faqSeven" aria-expanded="true" aria-controls="collapseOne">
                      <span class="ml-1 text-md uppercase text-blue-700 faq__header font-bold"> What more ways can I earn BSE?</span>
                      <span class="ml-auto text-lg">  <i class="fas fa-chevron-down text-blue-800 transition-all duration-150"></i></span>
                      {{-- <i class="fas fa-angle-down"></i> --}}
                    </div>
                  </h2>
                </div>
            
                <div id="faqSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    In BuySell, there are lots of interesting ways to earn BSE. Depending on the amount of BSE you hold, you can earn BSE by using our non-custodial exchange, DeFi exchange v2.0, pooled staking, lend and borrow.      
                    <p class="mt-1 font-medium">
                        - Special rates for all exchanges and any exchange amounts
                    </p>
                    <p class="mt-1 font-medium">
                        - Accelerated support
                    </p>
                    <p class="mt-1 font-medium">
                        - Better affiliate conditions such as higher revenue shares and lower payout limitations
                    </p>
                    <p class="mt-1 font-medium">
                        - Listing and featuring of new coins and tokens for exchanges
                    </p>
                        and much more!            
                  </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-white" id="headingOne">
                  <h2 class="mb-0">
                    <div class="flex px-4 py-2" type="button" data-toggle="collapse" data-target="#faqEight" aria-expanded="true" aria-controls="collapseOne">
                      <span class="ml-1 text-md uppercase text-blue-700 faq__header font-bold"> How do I get Airdrop?</span>
                      <span class="ml-auto text-lg">  <i class="fas fa-chevron-down text-blue-800 transition-all duration-150"></i></span>
                      {{-- <i class="fas fa-angle-down"></i> --}}
                    </div>
                  </h2>
                </div>
            
                <div id="faqEight" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    We periodically airdrop BSE token to LID holders and BSE token holders. Also, through referral promotion.
                  </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 mb-5 text-blue-800 ml-auto mr-auto rounded px-3 py-4 shadow bg-white disclaimer" >
        <h1 class="mb-2 font-bold text-center uppercase">Legal Disclaimer</h1>
        <p class="mt-2">
          The information provided on Buy-Sell website does not constitute investment advice, financial advice, trading advice, or any other sort of advice and you should not treat any of the website’s content as such.
          The Buy-Sell team does not recommend that any cryptocurrency should be bought, sold, or held by you. Do conduct your own due diligence.
          By purchasing BSE token, you agree that you are not purchasing a security or investment and you agree to hold the team harmless and not liable for any losses or taxes you may incur.
          You also agree that the Buy-Sell  team is presenting the BSE token “as is” and is not legally required to provide any support or services. You should have no expectation of any form from Buy-Sell  and its team.
          Always make sure that you are in compliance with your local laws and regulations before you make any purchase.
        </p>
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
    $(document).ready(function() {
        AOS.init({
            duration: 200,
            once: true,
        });

    var elem = document.querySelector('.main-carousel');
    var flkty = new Flickity( elem, {
        //   initialIndex: 3,
        freeScroll: false,
        pageDots: false,
        wrapAround: false,
        cellAlign: 'left',
        contain: true,
        draggable: true,
        prevNextButtons: true,
        
        // any options from Flickity can be used
    });
    const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('Sep 26, 2020 17:00:00').getTime(),
    x = setInterval(function() {    

      let now = new Date().getTime(),
          distance = countDown - now;

        document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

      //do something later when date is reached
      if (distance < 0) {
       clearInterval(x);
        document.getElementById('days').innerText = 0,
        document.getElementById('hours').innerText = 0,
        document.getElementById('minutes').innerText = 0,
        document.getElementById('seconds').innerText = 0;
      }

    }, second);
    });
</script>
</html>
