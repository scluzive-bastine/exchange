@extends('layouts.dapp')

<style>
    .swap-input {
        background: transparent; 
    }
</style>

@section('content')
    {{-- Hero --}}
    <section class="section-header pb-5 pb-lg-7 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mt-3">
                    <div class="defi__swap--container shadow-lg rounded bg-secondary px-3 py-3 rounded relative">
                        <h4 class="font-bold">DeFi Swap</h4>
                        <div class="swap__input--container flex mt-3 rounded">
                            <div class="swp--input rounded-tl-md rounded-bl-md">
                                <label class="input__amount--label mb-0" for="swap__amount--lable">Sell</label>
                                <input type="text" class="form-control swp__input--amount">
                            </div>
                            <div class="select__swp--option flex px-1 justify-content-center rounded-tr-md rounded-br-md">
                                <div class="flex swp--content">
                                    <span class="swp__image">
                                        <img src="/images/ethereum.svg" alt="">
                                    </span>
                                    <span class="ml-2 uppercase swp__sell--coin">Eth</span>
                                </div>
                                <div class="ml-auto mr-2" style="padding-top: 1.2rem">
                                    <i class="fas fa-caret-down" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        {{-- price informations --}}
                        <div class="flex mt-3 px-4">
                            <ul class="nav flex-column">
                                {{-- <li class="nav-item font-bold">No extra fees</li> --}}
                                <li class="nav-item">
                                    <span class="">1</span> <span class="font-bold uppercase">ETH</span> ~ <span class="">22.615211</span> <span class="font-bold uppercase">DEI</span> 
                                </li>
                                <li class="nav-item font-bold">No extra fees</li>
                            </ul>
                            <div class="ml-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="30" height="30"
                                    viewBox="0 0 172 172"
                                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#1f7e79"><path d="M154.08333,118.25l-32.25,35.83333l-32.25,-35.83333h21.51075v-57.33333h21.5v57.33333zM132.61558,17.91667h-21.5v14.33333h21.5zM132.58333,39.41667h-21.5v14.33333h21.5zM17.91667,53.75h21.51075v57.33333h21.5v-57.33333h21.48925l-32.25,-35.83333zM39.44892,154.08333h21.5v-14.33333h-21.5zM60.91667,118.25h-21.5v14.33333h21.5z"></path></g></g>
                                </svg>
                            </div>
                        </div>
                        {{-- ./ price informations --}}

                        {{-- Buy --}}
                        <div class="swap__input--container flex mt-3 rounded">
                            <div class="swp--input rounded-tl-md rounded-bl-md">
                                <label class="input__amount--label mb-0" for="swap__amount--lable">Buy</label>
                                <input type="text" class="form-control swp__input--amount">
                            </div>
                            <div class="select__swp--option flex px-1 justify-content-center rounded-tr-md rounded-br-md">
                                <div class="flex swp--content">
                                    <span class="swp__image">
                                        <img src="/images/160408.png" alt="">
                                    </span>
                                    <span class="ml-2 uppercase swp__buy--coin">Coin</span>
                                </div>
                                <div class="ml-auto mr-2" style="padding-top: 1.2rem">
                                    <i class="fas fa-caret-down" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        {{-- Buy --}}
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary btn-block py-2 font-semibold bg-teal-700">Launching Soon</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mt-3 order-first order-md-2">
                    {{-- This will be replaced with the exchange functionality --}}
                    <form id="exchange_form" action="{{route('new.confirm.detials')}}" method="POST">
                        @method('POST')
                        @csrf
                        <div class="exchange__coins--container bg-secondary px-3 py-3 shadow-lg rounded relative">
                            <h4 class="font-bold">Non-Custodial Exchange</h4>
                            {{-- UL --}}
                            <ul class="nav flex-column coins__list--dropdown coins__send--list bg-gray-400 rounded py-2 mr-2">
                                <div class="coins__list--header text-blue-900 font-bold uppercase px-2 mb-3" style="font-size: .8rem">Popular Currencies</div>
                                @php
                                    $coinArr = array($availableCurriences);
                                @endphp
                                @foreach ($availableCurriences as $currency)
                                    <li class="nav-item mb-2 px-2 py-2 transition ease-in-out duration-150 ticker--send">
                                        <div class="flex">
                                            <span class="coin__item--ticker ml-2 font-bold uppercase text-blue-900"> {{ $currency['ticker'] }} </span>
                                            <span class="coin__item--name ml-1 text-gray-800" style="font-size: .75rem"> {{ $currency['name'] }}  </span>
                                            <img src="{{$currency['image']}}" class="ml-auto" width="16" height="16" alt="">
                                        </div>
                                    </li>
                                    
                                @endforeach
                            </ul>
                            {{-- UL --}}
                            <div class="exchange__input--calculator flex mt-3 rounded">
                                <div class="bs--input rounded-tl-md rounded-bl-md">
                                    <label class="input__amount--label mb-0" for="amount">You Send</label>
                                    <input class="form-control bs__input--amount" value="" id="sendAmount" name="sendAmount" type="text" autocomplete="off">
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
                            {{-- price informations --}}
    
                            {{-- UL --}}
                            <ul class="nav flex-column coins__list--dropdown coins__recieve--list bg-gray-400 rounded py-2 mr-2" style="top: 182px;">
                                <div class="coins__list--header text-gray-600 font-medium text-blue-900 uppercase px-2 mb-3" style="font-size: .8rem">Popular Currencies</div>
                                @php
                                    $coinArr = array($availableCurriences); 
                                @endphp
                                @foreach ($availableCurriences as $currency)
                                    <li class="nav-item mb-2 px-2 py-2 transition ease-in-out duration-150 ticker--recieve">
                                        <div class="flex">
                                            <span class="coin__item--ticker ml-2 font-bold uppercase text-blue-900"> {{ $currency['ticker'] }} </span>
                                            <span class="coin__item--name ml-1 text-gray-800" style="font-size: .75rem"> {{ $currency['name'] }}  </span>
                                            <img src="{{$currency['image']}}" class="ml-auto" width="16" height="16" alt="">
                                        </div>
                                    </li>
                                    
                                @endforeach
                            </ul>
                            {{-- UL --}}
                            <div class="exchange__input--calculator flex mt-3 rounded">
                                <div class="bs--input rounded-tl-md rounded-bl-md">
                                    <label class="input__amount--label mb-0" for="amount">You Recieve</label>
                                    <input class="form-control bs__input--amount" value="" type="text" name="recieveAmount" id="recieveAmount" autocomplete="off" readonly>
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
    </section>

    <div class="container px-2 py-2 rounded mt-4 shadow bg-secondary">
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

    {{-- Prices --}}
    <section class="section section-sm bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <!-- Card -->
                    <div class="row text-white shadow-sm">
                        @foreach ($data as $data)
                            <div class="col-12 col-md-3">
                                <div class="card-body text-center bg-secondary rounded mb-3 mb-lg-0" style="height: 180px;">
                                        <span class="icon icon-warning icon-lg mb-2">
                                            {{-- <span class="fab fa-btc"></span> --}}
                                            <img src="{{ $data['image'] }}" alt="" style="width: 50px; height; 50px;">
                                        </span>
                                        <h2 class="h5">{{ $data['name'] }}</h2>
                                    <!-- Heading -->
                                    <h3 class="h4 mr-2 my-2">
                                        ${{ number_format($data['current_price'],2) }}
                                    </h3>
                                    <!-- Text -->
                                    {{-- <p class="text-muted  small font-weight-normal mb-0">
                                    Change, 24 hrs<span class="text-soft-green"> ${{ number_format($data['high_24h'], 2) }}</span>
                                    </p> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  --}}
    <section class="section text-white text-center">
        <div class="container">
            <h1 class="display-2">New Section</h1>
        </div>
    </section>

    {{-- Swap Section --}}
    <section class="section-header pb-5 pb-lg-7 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-12 col-lg-6">
                    <img src="/images/swp.svg" alt="">
                </div>
                <div class="col-12 col-md-8 col-lg-5 text-center text-lg-left">
                    <h1 class="display-2 mb-0">Swap BSE</h1>
                    <p class="lead font-weight-normal text-muted mt-4 mb-4 mb-lg-5">Impact is the easiest place to buy and sell cryptocurrency. Buy Bitcoin, Ethereum and other digital assets within minutes.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Swap Section --}}

    {{--  --}}
    <section class="section bg-secondary text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 text-center mb-5 px-lg-5">
                    <div class="icon icon-shape bg-secondary text-white rounded-circle">
                        <span class="far fa-times-circle"></span>
                    </div>
                    <h3 class="h4 my-3">No Registration</h3>
                    <p class="text-muted">Simply exchange crypto without registration. No more logins and personal details.</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 text-center mb-5 px-lg-5">
                    <div class="icon icon-shape bg-secondary text-white rounded-circle">
                        <span class="fas fa-coins"></span>
                    </div>
                    <h3 class="h4 my-3">No limit</h3>
                    <p class="font-weight-normal text-muted">Exchange as much as you want. No more limits and restrictions on crypto exchange.</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 text-center mb-5 px-lg-5">
                    <div class="icon icon-shape bg-secondary text-white rounded-circle">
                        <span class="fas fa-user-astronaut"></span>
                    </div>
                    <h3 class="h4 my-3">Fast Transactions</h3>
                    <p class="font-weight-normal text-muted">Our support staff is available 24 hours a day, 7 days a week to help you</p>
                </div>
                {{-- <div class="col-12 col-sm-6 col-lg-4 text-center px-lg-5">
                    <div class="icon icon-shape bg-secondary text-white rounded-circle">
                        <span class="fas fa-box-open"></span>
                    </div>
                    <h3 class="h4 my-3">Secure storage</h3>
                    <p class="font-weight-normal text-muted">We store the vast majority of the digital assets in secure offline storage.</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 text-center px-lg-5">
                    <div class="icon icon-shape bg-secondary text-white rounded-circle">
                        <span class="fas fa-shield-alt"></span>
                    </div>
                    <h3 class="h4 my-3">Protected by insurance</h3>
                    <p class="font-weight-normal text-muted">Cryptocurrency stored on our servers is covered by our insurance policy.</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 text-center px-lg-5">
                    <div class="icon icon-shape bg-secondary text-white rounded-circle">
                        <span class="fab fa-android"></span>
                    </div>
                    <h3 class="h4 my-3">Mobile apps</h3>
                    <p class="font-weight-normal text-muted">Stay on top of the markets with the Tradient app for Android or iOS.</p>
                </div> --}}
            </div>
        </div>
    </section>
    
@endsection

@push('scripts')
    <script>
            // TRANSAK
            function launchTransak() {
                let transak = new TransakSDK.default({
                    apiKey: '{{ env('TRANSAK_KEY')}}', 
                    environment: 'STAGING', 
                    defaultCryptoCurrency: 'ETH',
                    walletAddress: '', 
                    themeColor: '#375d8d', 
                    fiatCurrency: 'USD', 
                    redirectURL: '{{ route('new.index') }}',
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
        $(document).ready(function() {

            // Arrow Image on dropdown
            $('.send--icon').attr('src', '/images/arrow-right.png');
            $('.recieve--icon').attr('src', '/images/arrow-left.png');
            // Arrow Image on dropdown

            var sendCoinBtn = document.querySelector('.send__coin--option');
            var recieveCoinBtn = document.querySelector('.recieve__coin--option');
            var allCoins = document.querySelector('.coins__send--list');
            var allCoinsRecieve = document.querySelector('.coins__recieve--list');
            // Numbers only
            var numbersOnly = /^\s*-?[0-9]\d*(\.\d{1,8})?\s*$/;
            // Numbers only

            // Add send and recieve text to dropdown
            $('.send--symbol').text('Send');
            $('.recieve--symbol').text('Recieve');
            // Add send and recieve text to dropdown

            // Disable button
            $('.btn--exchange').prop('disabled', true);
            // Disable button

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

            // Hide Dropdown when clicked outside
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

            });

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
                    // console.log('Number');
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
                        // console.log(miniAmount);
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


        });
    </script>
@endpush