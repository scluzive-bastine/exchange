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

