@extends('layouts.main')

@section('content')
@include('messages')
    <div class="container-fluid">
        <!-- Background images on Home Page -->
        <div class=""><img src="/images/bg-2.png" class="bg-2 sm:hidden md:hidden lg:block" alt=""></div>
        <div class=""><img src="/images/bg-3.png" class="bg-3 sm:hidden lg:block" alt=""></div>
        <!--  -->
        <div class="container">
            {{-- <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 mt-12"> --}}
            <div class="row">
                <div class="col-md-6 mt-10 order-sm-2 order-md-2 order-lg-1">
                    <h2 class="mb-2 lg:text-white font-bold lg:text-5xl sm:text-blue-700 text-2xl md:text-white">Exchange Cryptocurrencies</h2>
                    <p class="lg:text-gray-300 sm:text-gray-800 text-2xl">Buy, Sell and Exchange Cryptocurrencies
                        <br>
                        Fast and Easy
                    </p>
                    {{-- Wallets --}}
                    <div class="download__wallets--container mt-4">
                        <h4 class="mt-2 mb-2 font-semibold sm:text-blue-700 lg:text-white md:text-white">Don't have a wallet? Create one with these</h4>
                        <div class="flex">
                            <span class="ml-3">
                                <a href="https://guarda.com/" target="_blank">
                                    <img src="/images/guarda-wallet.svg" style="width: 3em" alt="">
                                </a>
                            </span>
                            <span class="ml-3">
                                <a href="https://magnumwallet.co/" target="_blank">
                                    <img src="/images/magnum-wallet.svg" class="w-20" style="margin-top: .8rem" alt="">
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-10 order-1 order-sm-0 order-md-1 order-lg-2">
                    {{-- <button class="btn btn-sm btn-primary testSuccess">test success</button> --}}
                    
                    <form id="exchange_form" action="{{route('exchange.confirm_details')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="exchange__coins--container bg-white px-3 py-3 shadow-lg rounded relative">
                            <div class="tabs flex">
                                <button type="button" class="btn btn-primary btn-sm btn-custom">Classic Rate</button>
                                <button type="button" class="btn btn-primary ml-2 btn-custom btn-sm" onclick="launchTransak()">Buy Crypto</button>
                            </div>
                            {{-- Available coins send --}}
                            <ul class="nav flex-column coins__list--dropdown coins__send--list bg-gray-400 rounded py-2 mr-2">
                                <div class="coins__list--header text-gray-600 font-medium uppercase px-2 mb-3" style="font-size: .8rem">Popular Currencies</div>
                                @php
                                    $coinArr = array($availableCurriences); 
                                @endphp
                                @foreach ($availableCurriences as $currency)
                                    <li class="nav-item mb-2 px-2 py-2 transition ease-in-out duration-150 ticker--send">
                                        <div class="flex">
                                            <span class="coin__item--ticker ml-2 font-bold uppercase"> {{ $currency['ticker'] }} </span>
                                            <span class="coin__item--name ml-1 text-gray-600" style="font-size: .75rem"> {{ $currency['name'] }}  </span>
                                            <img src="{{$currency['image']}}" class="ml-auto" width="16" height="16" alt="">
                                        </div>
                                    </li>
                                    
                                @endforeach
                            </ul>
                            {{-- ./ Available coins send--}}
    
                            <div class="exchange__input--calculator flex mt-3 rounded px-3">
                                <div class="bs--input rounded-tl-md rounded-bl-md">
                                    <label class="input__amount--label mb-0" for="amount">You Send</label>
                                    <input class="form-control bs__input--amount mt-1" value="" id="sendAmount" name="sendAmount" type="text" autocomplete="off">
                                </div>  
                                <div class="select__coin-option send__coin--option flex px-1 justify-content-center rounded-tr-md rounded-br-md" id="showCoin">
                                    {{-- <button class="btn btn-primary">BTC <i class="fa fa-dropbox    "></i> </button> --}}
                                    <div class="flex coin__symbol--icon justify-content-center">
                                        <img src="" class="img-fluid coin__send--icon send--icon" style="width: 15px; height: 15px;" alt="">
                                        <span class="coin__send--symbol send--symbol"></span>
                                        <small class="coin__send--name ml-1" style="font-size: .6rem"></small>
                                        <input type="hidden" id="sendCoin" name="sendCoin" value="">
                                        <input type="hidden" id="sendCoinImage" name="sendCoinImage" value="">
                                    </div>
                                    <div class="ml-auto mr-2" style="padding-top: 1.2rem">
                                        <span>
                                            <i class="fas fa-caret-down"></i>
                                        </span>
                                    </div>
                                </div>  
                            </div>
                            {{-- price informations --}}
                            <div class="exchange__calculator--fields flex mt-3 px-4">
                                <ul class="nav flex-column">
                                    <li class="nav-item font-bold text-red text-sm" id="minimumExchange"></li>
                                    <li class="nav-item miniAmount" style="display: none;"></li>
                                    <div class="sendMin"></div>
                                    <li class="nav-item"> <div class="spinner-border" style="display: none; width: 1rem; height: 1rem; color:#38b2ac!important" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div> <span class="calcSend"></span> <span class="font-bold uppercase sendCoin"></span> ~ <span class="expectedAmount"></span> <span class="font-bold uppercase recCoin"></span> 
                                    </li>
                                    <li class="nav-item font-bold">No extra fees</li>
                                </ul>
                                <div class="ml-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="30" height="30"
                                        viewBox="0 0 172 172"
                                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#375d8d"><path d="M154.08333,118.25l-32.25,35.83333l-32.25,-35.83333h21.51075v-57.33333h21.5v57.33333zM132.61558,17.91667h-21.5v14.33333h21.5zM132.58333,39.41667h-21.5v14.33333h21.5zM17.91667,53.75h21.51075v57.33333h21.5v-57.33333h21.48925l-32.25,-35.83333zM39.44892,154.08333h21.5v-14.33333h-21.5zM60.91667,118.25h-21.5v14.33333h21.5z"></path></g></g>
                                    </svg>
                                </div>
                            </div>

                            {{-- ./ price informations --}}
                            <ul class="nav flex-column coins__list--dropdown coins__recieve--list bg-gray-400 rounded py-2 mr-2" style="top: 200px;">
                                <div class="coins__list--header text-gray-600 font-medium uppercase px-2 mb-3" style="font-size: .8rem">Popular Currencies</div>
                                @php
                                    $coinArr = array($availableCurriences); 
                                @endphp
                                @foreach ($availableCurriences as $currency)
                                    <li class="nav-item mb-2 px-2 py-2 transition ease-in-out duration-150 ticker--recieve">
                                        <div class="flex">
                                            <span class="coin__item--ticker ml-2 font-bold uppercase"> {{ $currency['ticker'] }} </span>
                                            <span class="coin__item--name ml-1 text-gray-600" style="font-size: .75rem"> {{ $currency['name'] }}  </span>
                                            <img src="{{$currency['image']}}" class="ml-auto" width="16" height="16" alt="">
                                        </div>
                                    </li>
                                    
                                @endforeach
                            </ul>
                            <div class="exchange__input--calculator flex mt-3 rounded px-3">
                                <div class="bs--input rounded-tl-md rounded-bl-md">
                                    <label class="input__amount--label mb-0" for="amount">You Recieve</label>
                                    <input class="form-control bs__input--amount mt-1" value="" type="text" name="recieveAmount" id="recieveAmount" autocomplete="off" readonly>
                                </div>  
                                <div class="select__coin-option recieve__coin--option flex px-1 justify-content-center rounded-tr-md rounded-br-md">
                                    {{-- <button class="btn btn-primary">BTC <i class="fa fa-dropbox    "></i> </button> --}}
                                    <div class="flex coin__symbol--icon justify-content-center">
                                        {{-- <span>Select Crypto</span> --}}
                                        <img src="" class="img-fluid coin__send--icon recieve--icon" style="width: 15px; height: 15px;" alt="">
                                        <span class="coin__send--symbol recieve--symbol"></span>
                                        <small class="coin__recieve--name ml-1" style="font-size: .6rem"></small>
                                        <input type="hidden" id="recieveCoin" name="recieveCoin" value="">
                                        <input type="hidden" id="recieveCoinImage" name="recieveCoinImage" value="">

                                    </div>
                                    <div class="ml-auto mr-1" style="padding-top: 1.2rem">
                                        <span>
                                            <i class="fas fa-caret-down"></i>
                                        </span>
                                    </div>
                                </div>                          
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary btn-block py-2 font-semibold btn--exchange" style="font-size: 1.25rem; background: rgb(247,178,95);
                                background: linear-gradient(45deg, rgba(247,178,95,1) 0%, rgba(55,93,141,1) 0%, rgba(86,100,119,1) 0%, rgba(55,93,141,1) 1%, rgba(255,136,0,1) 77%, rgba(255,136,0,1) 100%, rgba(247,179,98,1) 100%)!important; border:none!important">Exchange</button>
                                {{-- <a href="{{ route('exchange.confirm') }} " class="btn btn-primary btn-block py-2 font-semibold btn--exchange" style="font-size: 1.25rem; border-color:">Exchange</a href="{{ route('exchange.confirm') }} "> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container px-2 py-2 rounded mt-10 shadow" style="background: #7899bd;">
                <div class="grid d grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 sm:gap-2 lg:gap-32">
                    <div class="mt-2">
                        <h1 class="font-bold text-white ml-2 uppercase" style="font-size: .7rem">Buy Crypto with</h1>
                        <div class="flex cursor-pointer" onclick="launchTransak()">
                            <span>
                                <img src="/images/visa.svg" width="70px" class="img-fluid" alt="">
                            </span>
                            <span class="ml-1">
                                <img src="/images/mastercard-2.svg" width="70px" style="margin-top:.9rem; height: 50%;" class="img-fluid" alt="">
                            </span>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="flex sm:justify-start lg:justify-end">
                            <div class="">
                            <h1 class="font-bold text-white uppercase" style="font-size: .7rem">Coming Soon</h1>
                                <div class="flex mt-3">
                                    <span>
                                        <img src="/images/google-play-badge.svg" width="120px" class="img-fluid" alt="">
                                    </span>
                                    <span>
                                        <img src="/images/aivalable-on-the-app-store-2.svg" width="120px" class="img-fluid" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Coins -->
            <div class="coins-prices mt-20">
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach ($data as $data)
                        <div class="mt-2 py-2 px-4 shadow-md bg-white rounded overflow-hidden hover:shadow-lg transition ease-in-out duration-150">
                            <div class="flex items-center mb-2">
                                <div class="flex">
                                    <img src="{{ $data['image'] }}" class="w-8 h-8" alt="">
                                    <span class="ml-2 text-blue-700 font-bold mt-1">
                                         
                                         <a href="{{route('user.marketcoin', $data['id'])}}">{{ $data['name'] }}</a>
                                         
                                     </span>
                                </div>
                                <div class="ml-auto">
                                    <span class="text-blue-600 font-normal font-bold"> ${{ number_format($data['current_price'],2) }} </span>
                                </div>
                            </div>
                            <hr>
                            <div class="mt-1">
                                <div class="flex items-center">
                                    <div>
                                        <span class="font-normal text-blue-700 mb-1"> 24h High</span>
                                        <span class="text-sm text-red-500"> ${{ number_format($data['high_24h'], 2) }} </span>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <span class="text-blue-700 font-normal mb-1">Market Cap Change</span>
                                        <span class="text-sm text-gray-500"> {{ number_format($data['market_cap_change_24h']) }} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href=" {{ route('user.markets') }} " class="text-center text-blue-700 text-sm flex justify-center mt-3 text-decoration-none font-medium"> View more </a>
            </div>
            <!-- ./ Coins -->
        </div>

        <div class="container">
            <!-- Why trade with us -->
            <div class="why-trade-with-us lg:px-16">
                <div class="pt-24">
                    <h4 class="text-blue-700 font-bold text-3xl">Why You Should Trade With Us</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid:cols-2 gap-4">
                        <div class="mt-4">
                            <img src="/images/authentication.png" class="wt-img" data-aos="zoom-in" width="60%" alt="">
                        </div>
                        <div class="lg:mt-24">
                            <!-- <span class="text-gray-500 text-xs font-mono">N0 1</span> -->
                            <h3 class="text-blue-700 text-3xl font-medium mb-1">No Registration</h3>
                            <p class="font-normal text-gray-700">
                                Simply exchange crypto without registration. <br>
                                No more logins and personal details.
                            </p>
                        </div>
                    </div>
                    <!-- Limit -->
                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid:cols-2 gap-4">
                        <div class="ml-1 lg:mt-40">
                            <!-- <span class="text-gray-500 text-xs font-mono">N0 2</span> -->
                            <h3 class="text-blue-700 text-3xl font-medium mb-1">No Limit</h3>
                            <p class="font-normal text-gray-700">
                                Exchange as much as you want. <br>
                                No more limits and restrictions on crypto exchange.
                            </p>
                        </div>
                        <div class="mt-4">
                            <img src="/images/limit.svg" class="wt-img" data-aos="zoom-in-up" data-aos-delay="400" width="60%" alt="">
                        </div>
                    </div>
                    <!-- Fast and Speed -->
                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid:cols-2 gap-4">
                        <div class="mt-4">
                            <img src="/images/moving_forward.png" class="wt-img" data-aos="fade-right" data-aos-delay="500" data-aos-duration="2000" width="60%" alt="">
                        </div>
                        <div class="ml-1 lg:mt-16">
                            <!-- <span class="text-gray-500 text-xs font-mono">N0 3</span> -->
                            <h3 class="text-blue-700 text-3xl font-medium mb-1">Fast Transactions</h3>
                            <p class="font-normal text-gray-700">
                                Exchanges are very fast. <br>
                                We swap your cryptos instantly
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./ Why trade with us -->

            <!-- How it Works -->
            <div class="how-it-works mb-5 mt-8">
                <h3 class="text-center text-blue-700 text-2xl font-bold mb-4">How It Works</h3>
                <div class="container px-8 py-4 shadow-lg bg-white divide-y divide-gray-400">
                    <div class="row divide-x divide-gray-400">
                        <div class="col-md-2">
                            <div class="mt-2">
                                <h1 class="text-center font-bold text-6xl" style="color: #9cadc31c; -webkit-text-stroke: 2.5px #9cadc3;">01</h1>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h5 class="text-blue-700 font-bold text-left">Select Currency</h5>
                            <p class="text-gray-700 font-normal mt-2">
                                Choose the crypto pair you’d like to exchange.
                                let's swap Bitcoin to Ethereum. In "You Send" field, choose "BTC" from the drop-down menu and type the amount of coins you'd like to exchange.
                                Then, in the "You Get" field, select "ETH". 
                                After that, the "You Get" field will automatically calculate the amount you will receive.
                            </p>
                        </div>
                    </div>
                    <!-- 02 -->
                        <div class="row divide-x divide-gray-400 mt-3 pt-4">
                        <div class="col-md-2">
                            <div class="mt-2">
                                <h1 class="text-center font-bold text-6xl" style="color: #9cadc31c; -webkit-text-stroke: 2.5px #9cadc3;">02</h1>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h5 class="text-blue-700 font-bold text-left">Exchange</h5>
                            <p class="text-gray-700 font-normal mt-2 pr-4"> 
                                Let Buy-Sell do all the work on the finding the best rates on the market and processing exchange as fast as possible. Your Coin will be sent to you just in a few minutes.
                            </p>
                        </div>
                    </div>
                    <!-- ./ 02 -->
                    <!-- 03 -->
                        <div class="row divide-x divide-gray-400 mt-3 pt-4">
                        <div class="col-md-2">
                            <div class="mt-2">
                                <h1 class="text-center font-bold text-6xl" style="color: #9cadc31c; -webkit-text-stroke: 2.5px #9cadc3;">03</h1>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h5 class="text-blue-700 font-bold text-left">Receive Funds</h5>
                            <p class="text-gray-700 font-normal mt-2 pr-4"> 
                                Relax a bit while we process the transaction. Quickly converts your crypto and sends it safely to your wallet.
                            </p>
                        </div>
                    </div>
                    <!-- ./ 03 -->
                </div>
            </div>
            
            <!-- Customer Reviews -->
            <div class="mb-10">
                <h5 class="text-blue-700 font-semibold mb-3 font-bold">Customer Reviews</h5>
                <!-- <div class="main-carousel"> -->
                <div class="main-carousel">
                    <div class="carousel-cell">
                        <div class="review rounded-md px-8 py-4 bg-gray-100">
                            <span class="mb-1">
                                <img src="/images/stars.svg" width="30%" alt="">
                            </span>
                            <h6 class="text-blue-700 font-semibold uppercase mb-1">GREAT EXCHANGE</h6>
                            <p class="mb-1">
                                Great exchange, was fast from BTC to XMR! Will use again!! thx
                            </p>
                            <div class="flex items-center">
                                <span class="text-gray-500 text-xs font-medium">Yakovenko Daniel</span>
                                <span class="text-gray-500 text-xs font-medium ml-auto">Jan 21, 2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="review rounded-md px-8 py-4 bg-gray-100">
                            <span class="mb-1">
                                <img src="/images/stars.svg" width="30%" alt="">
                            </span>
                            <h6 class="text-blue-700 font-semibold uppercase mb-1">GREAT EXCHANGE</h6>
                            <p class="mb-1">
                                Great exchange, was fast from BTC to XMR! Will use again!! thx
                            </p>
                            <div class="flex items-center">
                                <span class="text-gray-500 text-xs font-medium">Yakovenko Daniel</span>
                                <span class="text-gray-500 text-xs font-medium ml-auto">Jan 21, 2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="review rounded-md px-8 py-4 bg-gray-100">
                            <span class="mb-1">
                                <img src="/images/stars.svg" width="30%" alt="">
                            </span>
                            <h6 class="text-blue-700 font-semibold uppercase mb-1">GREAT EXCHANGE</h6>
                            <p class="mb-1">
                                Great exchange, was fast from BTC to XMR! Will use again!! thx
                            </p>
                            <div class="flex items-center">
                                <span class="text-gray-500 text-xs font-medium">Yakovenko Daniel</span>
                                <span class="text-gray-500 text-xs font-medium ml-auto">Jan 21, 2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="review rounded-md px-8 py-4 bg-gray-100">
                            <span class="mb-1">
                                <img src="/images/stars.svg" width="30%" alt="">
                            </span>
                            <h6 class="text-blue-700 font-semibold uppercase mb-1">GREAT EXCHANGE</h6>
                            <p class="mb-1">
                                Great exchange, was fast from BTC to XMR! Will use again!! thx
                            </p>
                            <div class="flex items-center">
                                <span class="text-gray-500 text-xs font-medium">Yakovenko Daniel</span>
                                <span class="text-gray-500 text-xs font-medium ml-auto">Jan 21, 2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="review rounded-md px-8 py-4 bg-gray-100">
                            <span class="mb-1">
                                <img src="/images/stars.svg" width="30%" alt="">
                            </span>
                            <h6 class="text-blue-700 font-semibold uppercase mb-1">GREAT EXCHANGE</h6>
                            <p class="mb-1">
                                Great exchange, was fast from BTC to XMR! Will use again!! thx
                            </p>
                            <div class="flex items-center">
                                <span class="text-gray-500 text-xs font-medium">Yakovenko Daniel</span>
                                <span class="text-gray-500 text-xs font-medium ml-auto">Jan 21, 2019</span>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
                </div>
            </div>
            <!-- ./ Customer Reviews -->
            
            <!-- ./ Statistics -->
            <div class="statistics mb-5">
                <h5 class="text-blue-700 font-semibold mb-1 font-bold">24-hour Statistics</h5>
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="mt-2">
                        <div class="items-center bg-gray-100 rounded-lg py-4 shadow-md hover:shadow-lg transition-all ease-in-out duration-150">
                            <span class="w-full">
                                <!-- <img src="/images/loop.svg" class="w-12 h-12 ml-auto mr-auto" alt=""> -->
                                <svg class="fill-current ml-auto mr-auto" xmlns="http://www.w3.org/2000/svg" width="32.001" height="32" viewBox="0 0 32.001 32">
                                    <g id="loop2" transform="translate(0.001)">
                                        <path id="Path_1095" data-name="Path 1095" d="M27.8,5.2A16,16,0,0,0,0,16H3A13,13,0,0,1,25.677,7.322L21,12H32V1L27.8,5.2Z" fill="#315180"/>
                                        <path id="Path_1096" data-name="Path 1096" d="M29,16A13,13,0,0,1,6.322,24.678L11,20H0V31l4.2-4.2A16,16,0,0,0,32,16Z" fill="#315180"/>
                                    </g>
                                </svg>
                            </span>
                            <h6 class="text-center font-semibold text-blue-700 mt-2 mb-1"> {{ $totalTransaction }} </h6>
                            <h6 class="text-gray-700 font-normal font-normal text-center">Transactions Made</h6>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="items-center bg-gray-100 rounded-lg py-4 shadow-md hover:shadow-lg transition-all ease-in-out duration-150">
                            <span class="w-full">
                                <!-- <img src="/images/loop.svg" class="w-12 h-12 ml-auto mr-auto" alt=""> -->
                                <svg class="fill-current ml-auto mr-auto" xmlns="http://www.w3.org/2000/svg" width="32" height="34" viewBox="0 0 74 81">
                                    <path id="badge2" d="M78.548,46.785c3.869,27.018-19.158,29.056-22.49,30.6a50.259,50.259,0,0,0-13.522,7.548A53.474,53.474,0,0,0,30.29,77.389c-3.47-1.43-28.778-3.673-24.9-30.6.816-3.878,5.3-7.141,5.3-13.672S5.179,19.036,5.179,19.036L20.9,3.937S26.41,7.822,31.311,7.822,42.536,3.937,42.536,3.937s6.328,3.885,11.02,3.885S63.968,3.937,63.968,3.937l14.668,14.9S73.127,26.6,73.127,33.117s4.437,9.592,5.421,13.668ZM42.314,17.364c-13.788,0-24.966,12.211-24.966,25.994S28.523,67.273,42.314,67.273,67.28,57.14,67.28,43.357,56.1,17.364,42.314,17.364Zm.138,48.452a23.291,23.291,0,1,1,23.3-23.291A23.3,23.3,0,0,1,42.452,65.816Zm14.05-33.8A2.427,2.427,0,0,0,54.076,34.4H47.409l-3.5-6.06a2.4,2.4,0,0,0,1.139-2.008,2.435,2.435,0,0,0-4.87,0,2.406,2.406,0,0,0,1.286,2.105L38.022,34.4H31.149a2.43,2.43,0,1,0-2.425,2.474,2.376,2.376,0,0,0,1.172-.342L33.343,42.5l-3.49,6.04a2.362,2.362,0,0,0-1.129-.316,2.431,2.431,0,1,0,2.432,2.434c0-.027-.01-.04-.01-.067h6.875l3.483,6.04a2.4,2.4,0,0,0-1.327,2.132,2.435,2.435,0,0,0,4.87,0,2.379,2.379,0,0,0-1.182-2.031l3.544-6.137h6.57c0,.027-.013.04-.013.067A2.448,2.448,0,1,0,55.5,48.4l-3.413-5.9,3.389-5.869a2.4,2.4,0,0,0,1.028.242,2.431,2.431,0,1,0,0-4.862Z" transform="translate(-4.985 -3.937)" fill="#315180"/>
                                </svg>
                            </span>
                            <h6 class="text-center font-semibold text-blue-700 mt-2 mb-1">ETH-BTC</h6>
                            <h6 class="text-gray-700 font-normal font-normal text-center">Today's Top Pair</h6>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="items-center bg-gray-100 rounded-lg py-4 shadow-md hover:shadow-lg transition-all ease-in-out duration-150">
                            <span class="w-full">
                                <!-- <img src="/images/loop.svg" class="w-12 h-12 ml-auto mr-auto" alt=""> -->
                                <svg class="fill-current ml-auto mr-auto" xmlns="http://www.w3.org/2000/svg" width="38" height="32" viewBox="0 0 78 69.5">
                                    <path id="user" d="M30.742,7.134c-4.4,2.656-5.585,6.859-5.368,9.1.276,2.735.961,6.3.961,6.3s-1.357.6-1.357,3c.471,6.03,2.96,3.429,3.472,6.071,1.23,6.37,4.044,5.237,4.044,8.714,0,5.79-2.947,8.5-12.147,11.708C11.117,55.245,1.6,59.3,1.6,66.325v3.512h78V66.325c0-7.024-9.52-11.08-18.755-14.3-9.2-3.209-12.139-5.913-12.139-11.708,0-3.477,2.8-2.342,4.038-8.714.515-2.645,3-.042,3.48-6.071,0-2.4-1.36-3-1.36-3s.685-3.56.959-6.3c.282-2.869-1.725-9-9.967-10.874-1.444-1.194-2.419-3.095,2.02-5C38.17-.008,35.912,4.108,30.744,7.134Z" transform="translate(-1.6 -0.337)" fill="#315180"/>
                                </svg>
                            </span>
                            <h6 class="text-center font-semibold text-blue-700 mt-2 mb-1">1203</h6>
                            <h6 class="text-gray-700 font-normal font-normal text-center">Visits Today</h6>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="items-center bg-gray-100 rounded-lg py-4 shadow-md hover:shadow-lg transition-all ease-in-out duration-150">
                            <span class="w-full">
                                <!-- <img src="/images/loop.svg" class="w-12 h-12 ml-auto mr-auto" alt=""> -->
                                <svg class="fill-current ml-auto mr-auto" xmlns="http://www.w3.org/2000/svg" width="38" height="32" viewBox="0 0 72.666 67">
                                    <path id="back-in-time" d="M41.663,2.878c-17.26,0-31.3,14.552-31.719,32.668v.837H.735L14.689,52.29,28.255,36.383H17.88v-.837c.415-13.494,10.9-24.287,23.783-24.287,13.149,0,23.807,11.25,23.807,25.125S54.812,61.508,41.663,61.508A22.906,22.906,0,0,1,27.58,56.634l-5.46,6.143a30.594,30.594,0,0,0,19.543,7.1c17.531,0,31.738-14.993,31.738-33.495S59.195,2.878,41.663,2.878ZM37.78,15.956V36.383a4.307,4.307,0,0,0,.3,1.56,4.133,4.133,0,0,0,.84,1.328L51.344,52.344A18.262,18.262,0,0,0,54.4,49.778l-8.853-9.31V15.956Z" transform="translate(-0.735 -2.878)" fill="#315180"/>
                                </svg>

                            </span>
                            <h6 class="text-center font-semibold text-blue-700 mt-2 mb-1">3250</h6>
                            <h6 class="text-gray-700 font-normal font-normal text-center">Average Processing Time</h6>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Partners --}}

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bs__partners--container">
                            <h1 class="text-2xl font-bold text-blue-800">Buy-Sell Partners</h1>
                            <hr class="text-teal-600 mt-2" style="width: 100px; border-top: 3px solid #319795;">
                            <p class="mt-2 text-blue-800" style="font-size: 1rem;">
                                Reputable projects are supporting the Buy-Sell, either by providing an easy
                                way to stake BSE tokens or participating in Buy-Sell governance 
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/images/govblocks.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-4">
                                <img src="/images/totle-logo.svg" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-4">
                                <img src="/images/intotheblock.jpg" style="width: 30%;" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                {{-- <h1 class="text-black text-2xl font-medium mt-2" style="font-family: _Cardillac,serif;">Staked</h1> --}}
                                <img src="/images/staked.jpg" alt="" style="width: 50%">
                            </div>
                            <div class="col-md-4">
                                <img src="/images/lid.jpg" class="img-fluid" alt="" style="width: 30%">
                            </div>
                            <div class="col-md-4">
                                <img src="/images/guarda.svg" class="img-fluid" style="width: 30%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script type="text/javascript">

            function launchTransak() {
                let transak = new TransakSDK.default({
                    apiKey: '{{ env('TRANSAK_KEY')}}', 
                    environment: 'STAGING', 
                    defaultCryptoCurrency: 'ETH',
                    walletAddress: '', 
                    themeColor: '#375d8d', 
                    fiatCurrency: 'USD', 
                    redirectURL: '{{ route('home') }}',
                    hideMenu: 'true',
                    hostURL: window.location.origin,
                    widgetHeight: '550px',
                    widgetWidth: '100%'
                });
                transak.init();
                // To get all the events
                transak
                    .on(transak.ALL_EVENTS, (data) => {
                    });
                // This will trigger when the user marks payment is made.
                transak.on(transak.EVENTS.TRANSAK_ORDER_SUCCESSFUL, (orderData) => {
                    transak.close();
                });
            }

            $('.send--icon').attr('src', '/images/arrow-right.png');
            $('.recieve--icon').attr('src', '/images/arrow-left.png');



            // fetch('https://changenow.io/api/v1/currencies?active=true&fixedRate=true')
            //     .then(response => response.json())
            //     .then(data => console.log(data));

            var elem = document.querySelector('.main-carousel');
            var flkty = new Flickity( elem, {
                //   initialIndex: 3,
                pageDots: true,
                wrapAround: true,
                cellAlign: 'left',
                contain: true,
                draggable: true,
                prevNextButtons: false,
                
                // any options from Flickity can be used
            });

            var testBtn = document.querySelector('.testSuccess');
            // testBtn.addEventListener('click', function() {
            //     var url = ' {{ route('exchange.success') }} ';
            //     window.location = url;
            // })

            var sendCoinBtn = document.querySelector('.send__coin--option');
            var recieveCoinBtn = document.querySelector('.recieve__coin--option');
            var allCoins = document.querySelector('.coins__send--list');
            var allCoinsRecieve = document.querySelector('.coins__recieve--list');
            // var numbersOnly = /^\d+$/;
            var numbersOnly = /^\s*-?[0-9]\d*(\.\d{1,8})?\s*$/;
            $('.send--symbol').text('Send');
            $('.recieve--symbol').text('Recieve');
            $('.btn--exchange').prop('disabled', true);


            var c = $('.coin__item--ticker').text();
            // console.log(c.substr(0,5))

            sendCoinBtn.addEventListener('click', function(e) {
                    showUl(e, allCoins);
            });

            recieveCoinBtn.addEventListener('click', function(e) {
                showUl(e, allCoinsRecieve);
            });

            //  Show ul for currencies
            var showUl = function (e, ul) {
                var classFound = e.target.parentNode.className;
                var splitClass = classFound.split(' ');
                // console.log(splitClass);
                var cl = splitClass[1];
                // console.log(cl);
                if(cl) {
                    ul.style.visibility = 'visible'; 
                } 
            };

            var hideUl = function (e, ul) {
                ul.style.visibility = 'hidden';
                // console.log('hidden'); 
            };

            var closeDropDown = function(e) {
                $(document).mouseup(function (e) {  
                    if ($(e.target).closest('.coins__list--dropdown').length === 0) { 
                        $c = document.querySelector('.coins__list--dropdown');
                        // console.log($c);
                        $c.style.visibility = 'hidden'; 
                    } 

                }); 
            }
            closeDropDown();


            // Select Send Coin
            $(document).on('click', 'li.ticker--send', function() {
                var tickerSendImage = $(this).find('img').attr('src');
                var tickerSymbol = $(this).find('.coin__item--ticker').text();
                var tickerName = $(this).find('.coin__item--name').text();
                $('.send--icon').attr('src', tickerSendImage);
                $('.coin__send--name').text(tickerSymbol);
                var symbol = tickerSymbol.substr(0,5);
                $('.send--symbol').text(symbol);
                $('.sendCoin').text(tickerSymbol);
                $('#sendCoin').val(tickerSymbol);
                $('#sendCoinImage').val(tickerSendImage);
                document.querySelector('.coins__list--dropdown').style.visibility = 'hidden';
                var sendAmount = $('#sendAmount').val().trim();
                var send = $('#sendCoin').val().trim();
                var rec = $('#recieveCoin').val().trim();
                var miniAmount = $('.miniAmount').text();


                // no extra fees section
                if(rec !== ''  && send !== rec) {
                    // getMinimum(send, rec, sendAmount);
                    inputTest(sendAmount, numbersOnly, send, rec);

                    // getPrice(sendAmount, send, rec);
                    calcPrice(send, rec, sendAmount);

                } else {
                    $('.btn--exchange').prop('disabled', true);
                }

            });
            // ../ Select Send Coin

            // Recieve section
            var closeDropDownRecieve = function(e) {
                $(document).mouseup(function (e) { 
                    if ($(e.target).closest('.coins__list--dropdown').length === 0) { 
                        $c = document.querySelector('.coins__recieve--list');
                        // console.log($c);
                        $c.style.visibility = 'hidden'; 
                    } 

                }); 
            }
            closeDropDownRecieve();

            $(document).on('click', 'li.ticker--recieve', function() {
                var tickerRecieveImage = $(this).find('img').attr('src');
                var tickerRecieveSymbol = $(this).find('.coin__item--ticker').text();
                var tickerRecieveName = $(this).find('.coin__item--name').text();

                $('.recieve--icon').attr('src', tickerRecieveImage);
                $('.coin__recieve--name').text(tickerRecieveSymbol);
                var recieveSymbol = tickerRecieveSymbol.substr(0,5);
                $('.recieve--symbol').text(recieveSymbol);
                $('#recieveCoin').val(tickerRecieveSymbol);
                $('#recieveCoinImage').val(tickerRecieveImage);
                document.querySelector('.coins__recieve--list').style.visibility = 'hidden';
                $('.recCoin').text(tickerRecieveSymbol);

                var sendAmount = $('#sendAmount').val().trim();
                var send = $('#sendCoin').val().trim();
                var rec = $('#recieveCoin').val().trim();
                var miniAmount = $('.miniAmount').text();

                if(sendAmount !== '' && send !== rec) {
                    inputTest(sendAmount, numbersOnly, send, rec);
                    calcPrice(send, rec, sendAmount);

                } else {
                    $('.btn--exchange').prop('disabled', true);
                }
                


                
                var assets;
                $('.spinner-border').show();
                //calc price and check minimum price
                calcPrice(send, rec, sendAmount);

            })

            // ../ Recieve section


            // Delay keyup event
            function delay(fn, ms) {
                let timer = 0
                return function(...args) {
                    clearTimeout(timer)
                    timer = setTimeout(fn.bind(this, ...args), ms || 0)
                }
            }

            function calcPrice(send, rec, sendAmount) {
                $('#sendAmount').keyup(delay(function (e) {
                    $("#sendAmount").val($(this).val());
                    var tryGetNewValue = $(this).val();
                    // console.log('tryGet: ' + tryGetNewValue);
                    var sendAmount = $('#sendAmount').val().trim();
                    var send = $('#sendCoin').val().trim();
                    var rec = $('#recieveCoin').val().trim();
                    // console.log(sendAmount);

                    inputTest(sendAmount, numbersOnly, send, rec);

                }, 2000));
            }
            // calcPrice();
            function inputTest(sendAmount, restrictionType, send, rec){
                if(restrictionType.test(sendAmount)) {
                    // return true
                    console.log('Number');
                    getMinimum(send, rec, sendAmount);
                } else {
                    // return false
                    console.log('not number');
                    $('.btn--exchange').prop('disabled', true);

                }
            }

            function getMinimum(send, rec, sendAmount) {
                $.ajax({
                    type:'GET',
                    url:`https://changenow.io/api/v1/min-amount/${send}_${rec}`,
                    data: {'_token': "{{csrf_token()}}"},
                    success:function(data){
                        assets = data;
                        // console.log(sendAmount);
                        var sendMin = assets['minAmount'];
                        $('.miniAmount').text(sendMin);
                        var miniAmount = $('.miniAmount').text();
                        console.log(miniAmount);
                        if(sendAmount >= miniAmount) {
                            $('.btn--exchange').prop('disabled', false);
                            $('#minimumExchange').hide();
                            getPrice(sendAmount, send, rec);
                        } else {
                            $('#minimumExchange').show();
                            $('#minimumExchange').text('Not up to minimum ' + miniAmount);
                            $('.btn--exchange').prop('disabled', true);
                            $('#recieveAmount').val('-');
                        } 
                    },
                });
            };

            function getPrice(sendAmount, send, rec) {
                $.ajax({
                    type: 'GET',
                    url: `https://changenow.io/api/v1/exchange-amount/${sendAmount}/${send}_${rec}?api_key={{{ env('CHANGENOW_KEY')}}}`,
                    success: function(data) {
                        currencyEstimate = data;
                        $('.expectedAmount').text(currencyEstimate['estimatedAmount']);
                        $('.calcSend').text(sendAmount);
                        $('.sendCoin').text(send);
                        $('.recCoin').text(rec);
                        $('#recieveAmount').val(currencyEstimate['estimatedAmount']);
                        $('.spinner-border').hide();
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = xhr.status + ': ' + xhr.statusText
                        // console.log('something went wrong');
                        // $('.sendMin').text('Minimum exchange ');

                    }
                });
            };
            // Recieve section     

            function priceChange(miniAmount, send, rec) {
                $.ajax({
                    type: 'GET',
                    url: `https://changenow.io/api/v1/exchange-amount/${miniAmount}/${send}_${rec}?api_key={{{ env('CHANGENOW_KEY')}}}`,
                    success: function(data) {
                        currencyEstimate = data;
                        $('.expectedAmount').text(currencyEstimate['estimatedAmount']);
                        $('.calcSend').text(miniAmount);
                        $('.sendCoin').text(send);
                        $('.recCoin').text(rec);
                        $('.spinner-border').hide();

                    }
                });
            };   


        </script>
    @endpush
@endsection
