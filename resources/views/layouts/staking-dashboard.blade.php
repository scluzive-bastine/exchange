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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<style>
    .pool-input {
        border: none!important;
        font-size: 1.2rem!important;
        font-weight: 700!important;
        color: #000;
    }
    .pool-input:focus {
        box-shadow: none!important;
        border: #fff!important;
    }
    .unstake__input--container {
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        font-size: 1.5rem;
        text-align: center;
    }
    .unstake__input--container:focus {
        box-shadow: none!important;
    }
    .sb-logo {
        width: 100px;
        height: 100px;
    }

    .search__pair--input {
        border-left: 0!important;
        border-radius: 0!important;
        border-top: 0!important;
        border-right: 0!important;
        border-bottom: 2px solid #ced4da;
    }
    .search__pair--icon {
        border: 0!important;
        background: transparent;
    }
    .search__pair--input:focus {
        box-shadow: none!important;
        border-color: rgb(44, 82, 130);
    }
</style>
<body class="font-sans text-white" style="background: #061831;">
    <nav class="navbar navbar-expand-sm navbar-light">
        <a class="navbar-brand" href=" {{route('new.index')}} ">
            <div class="flex">
                <img src="/images/bs-l.png" class="sb-logo" alt="">
                <small class="ml-2 mt-2 text-gray-400" style="font-size: .7rem">BETA</small>
            </div>
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
                  <button class="btn btn-primary px-4" style="border-radius: 50px;background: #2c5282!important;border-color: #2c5282!important;">Connect Wallet</button>
                </li>

            </ul>
        </div>
    </nav>
    
<div class="container mt-10 mb-5" id="app">
    <div class="row">
        <div class="col-12 col-md-4 sm:px-12 lg:px-2 mb-2">
            <div class="staking__sidebar--container bg-white rounded shadow px-2 py-2" style="height: 400px">
                <div class="asset--address bg-gray-200 px-2 py-1 overflow-hidden w-48 shadow-sm" style="border-radius: 50px">
                @if (Auth::check() && Auth::user()->is_admin())
                    <span class="text-gray-800 flex"> <i class="fas fa-copy mr-2 mt-1"></i> 0x957D906AEB375833E20cF1cf92Fa07AD37eEDe94</span>
                @endif
                </div>
                <ul class="nav flex-column mt-3">
                    <li class="nav-item stake-nav nav-staking stake-active text-blue-800 mt-1 rounded-lg">
                        <a class="nav-link asset-staking" href="#">
                          <i class="fas fa-coins ml-2 mr-2 text-2xl"></i>
                            Assets Staking
                            <small class="mt-1 float-right">New</small>
                          </a>
                    </li>
                    <li class="nav-item stake-nav pool-li text-blue-800 rounded-lg mt-1">
                        <a class="nav-link nav-pool" href="#">
                            <i class="fas fa-poll ml-2 mr-2 text-2xl"></i>
                            Pooled Staking
                        </a>
                    </li>
                    <li class="nav-item stake-nav assets text-blue-800 rounded-lg mt-1">
                        <a class="nav-link nav-assets-btn" href="#">
                          <i class="fas fa-coins ml-2 mr-2 text-2xl"></i>
                            Assets
                        </a>
                    </li>
                    <li class="nav-item stake-nav swap-bse rounded-lg text-blue-800 mt-1">
                        <a class="nav-link nav-swap" href="#"> 
                          <i class="fas fa-exchange-alt ml-2 mr-2 text-2xl"></i>
                           Swap BSE
                        </a>
                    </li>
                    {{-- <button class="btn btn-primary btn-sm nav-swap"> swap</button> --}}
                    <li class="nav-item stake-nav rounded-lg text-blue-800 mt-1">
                        <a class="nav-link nav__coming--soon" href="#">
                          <i class="fas fa-money-check-alt ml-2 mr-2 text-2xl"></i>
                           Earn Interest
                        </a>
                    </li>
                    <li class="nav-item stake-nav rounded-lg text-blue-800 mt-1">
                        <a class="nav-link nav__borrow" href="#">
                          <i class="fas fa-hand-holding-usd ml-2 mr-2 text-2xl"></i>
                           Borrow
                        </a>
                    </li>
                    <li class="nav-item stake-nav rounded-lg text-blue-800 mt-1">
                        <a class="nav-link nav__governance" href="#">
                          <i class="fas fa-globe-americas ml-2 mr-2 text-2xl"></i>
                           Governance
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="section__assets--staking" style="display: none">
                <div class="staking__header-dashboard px-4 py-2 rounded shadow bg-gray-200">
                    <div class="flex">
                        <div class="stake--header">
                            <div class="flex">
                                <img src="/images/bse-pool.png" width="50" height="50">
                                <h1 class="font-bold uppercase text-blue-800 text-2xl ml-2 mt-2">   BuySell Staking</h1>
                            </div>
                            <p class="text-gray-800">Stake and Earn you trusted crypto assets and receive BSE tokens</p>
                        </div>

                        <div class="ml-auto">
                            <button type="button" class="btn btn-outline-primary btn__start--swaping"> <i class="fas fa-handshake"></i> Start Staking</button>
                            <button type="button" class="btn btn-primary btn__claim--rewards"><i class="fa fa-plus-circle" aria-hidden="true"></i> </i> Claim Rewards</button>
                        </div>
                    </div>
                    {{-- <div class="container"> --}}
                        <div class="row mt-4">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-2">
                                <div class="staking__contents--header px-2 py-6 text-center rounded shadow" style="background: #9b2c2c;">
                                    <h1 class="font-bold uppercase">Total Assets Staked</h1>
                                    <span class="text-2xl">5</span> <br>
                                    <small>-</small>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-2">
                                <div class="staking__contents--header px-2 py-6 text-center rounded shadow" style="background: #4a5568">
                                    <h1 class="font-bold uppercase">Your Total Staked</h1>
                                    <span class="text-2xl">100.000 BSE</span>
                                    <small>$25.000 USDC</small>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-2">
                                <div class="staking__contents--header px-2 py-6 text-center rounded shadow" style="background: #1a202c">
                                    <h1 class="font-bold uppercase">Total Rewards</h1>
                                    <span class="text-2xl">101.000 BSE</span>
                                    <small>$25.000 USDC</small>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-2">
                                <div class="staking__contents--header px-2 py-6 text-center rounded shadow" style="background: #f6ad55">
                                    <h1 class="font-bold uppercase">Total Avg. Returns</h1>
                                    <span class="text-2xl">N/A</span> <br>
                                    <small>N/A</small>
                                </div>
                            </div>
                        </div>
                    {{-- </div> --}}
                </div>
                <div class="container mt-2 py-2 rounded shadow text-gray-800">
                    <div class="grid grid-cols sm:grid-col-1 md:grid-col-2 lg:grid-cols-2 gap-2 mt-3">
                        <div class="mt-2 pool__staking--timer bg-white px-4 py-4 rounded">
                            <div class="">
                                <h6 class="text-center" style>Time to the next reward</h6>
                                <div class="flex justify-center" style="font-size: 2rem;">
                                    <span class="mr-2">
                                        <div>
                                            <h1 class="mt-2">00</h1>
                                            <h6 class="ml-2" style="font-size: .6rem">Days</h6>
                                        </div>
                                    </span>:
                                    <span class="mr-2">
                                        <div class="ml-2">
                                            <h1 class="mt-2">23</h1>
                                            <h6 class="" style="font-size: .6rem">Hours</h6>
                                        </div>
                                    </span>:
                                    <span class="mr-2">
                                        <div class="ml-2">
                                            <h1 class="mt-2">12</h1>
                                            <h6 class="" style="font-size: .6rem">Minutes</h6>
                                        </div>
                                    </span>:
                                    <span class="mr-2">
                                        <div class="ml-2">
                                            <h1 class="mt-2">20</h1>
                                            <h6 class="" style="font-size: .6rem">Seconds</h6>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 px-4 py-4 bg-white rounded">
                            <h1 class="text-center">Price Chart</h1>
                        </div>
                    </div>
                </div>
                {{-- Staking and Unstaking --}}
                <div class="container mt-4 py-2 bg-white rounded shadow">
                    <div class="row mb-2 mt-4">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-2">
                            <div class="staking__contents--header px-2 py-6 bg-white text-center text-gray-800 rounded shadow">
                                <h1 class="font-bold uppercase text-2xl">Total Staked</h1>
                                <span class="text-3xl">3565.00</span> <br>
                                <small>19.805556 %</small>
                                <p>Circulating Supply</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-2">
                            <div class="staking__contents--header px-2 py-6 bg-white text-center text-gray-800 rounded shadow">
                                <h1 class="font-bold uppercase text-2xl">Enter Amount to Unstake</h1>
                                <form action="">
                                    <input type="text" class="form-control unstake__input--container" id="unstake" placeholder="20">
                                    <button class="btn btn-primary" type="button" id="button-addon2" style="background: #9b2c2c; border-color: #9b2c2c;">Unstake</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ./ Staking and Unstaking --}}
                @if (Auth::check() && Auth::user()->is_admin())
                    <div class="container bg-white text-gray-800 px-2 py-2 mt-4 rounded">
                        <h1 class="font-bold uppercase text-blue-800">Minimum Staking (Admin)</h1>
                        @include('messages')
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible fade show">
                                    {{ $error }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endforeach
                        @endif
                        <form action="{{route('staking-min.store')}}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="d-flex">
                                <div>
                                    <input type="text" name="minStaking" class="form-control mt-2 " value="{{ !empty($stakingMinimum) ? $stakingMinimum->staking_min : "" }}">
                                </div>
                                <div>
                                    @if (!empty($stakingMinimum))
                                        <button type="button" class="btn btn-primary mt-2 ml-2" data-toggle="modal" data-target="#stakeModal"> <i class="fas fa-edit"></i> Edit</button>
                                    @else
                                        <button type="submit" class="btn btn-success mt-2 ml-2"> <i class="fa fa-check" aria-hidden="true"></i> Save Changes</button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
            <div class="section__assets--swap text-gray-800 rounded" >
                <div class="card">
                    <div class="card-header">
                        <h1 class="font-bold text-blue-800 uppercase">Atomic Swap</h1>
                    </div>
                    <div class="card-body">
                        <div class="swap__container">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="swap__send--container px-2 py-2 shadow">
                                        <div class="flex">
                                            <label for="">Amount</label>
                                            <span class="ml-auto text-green-500 font-bold">Max</span>
                                        </div>
                                        <div class="flex">
                                            <div class="swap__send--input" style="width: 70%">
                                                <input type="text" class="form-control swap-input text-right" placeholder="0">
                                            </div>
                                            <div class="flex ml-2 bg-gray-200 rounded px-2 py-2" style="width: 30%">
                                                <span class="uppercase mr-2">BSE</span>
                                                <span class="ml-auto">
                                                    <i class="fas fa-caret-down"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <small class="ml-auto">$0.00</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="swap__receive--container px-2 py-2">
                                        <div class="flex">
                                            <label for="">Amount to receive</label>
                                            {{-- <span class="ml-auto text-green-500 font-bold">Max</span> --}}
                                        </div>
                                        <div class="flex">
                                            <div class="swap__send--input" style="width: 70%">
                                                <input type="text" class="form-control swap-input text-right" placeholder="0">
                                            </div>
                                            <div class="flex ml-2 bg-gray-200 rounded px-2 py-2" style="width: 30%">
                                                <span class="uppercase mr-2">ETH</span>
                                                {{-- <span class="ml-auto">
                                                    <i class="fas fa-caret-down"></i>
                                                </span> --}}
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <small class="ml-auto font-bold mt-2">1 ETH = N/A ETH</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="flex">
                            <div class="ml-auto">
                                <button class="btn btn-primary px-4" style="background: #2c5282!important;border-color: #2c5282!important;">Swap</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="text-white text-2xl mt-8 mb-2">Pair Stats</h1>
                </div>
                <div class="flex bg-white rounded shadow px-3 py-3">
                    {{-- <h4 class="text-2xl text-blue-800 font-semibold">$133, 366</h4> --}}
                    <div class="flex">
                        <div class="flex bg-gray-200 px-2 py-2 rounded">
                            <img src="/images/bs-logo-circle.png" class="" alt="" style="width: 25px; height: 25px">
                            <span class=" ml-2">182,189</span> <span class="font-bold uppercase ml-1">BSE</span>
                        </div>
                        <div class="flex bg-gray-200 ml-3 px-2 py-2 rounded">
                            <img src="/images/ethereum.svg" class="" alt="" style="width: 25px; height: 25px">
                            <span class=" ml-2">200,189</span> <span class="font-bold uppercase ml-1">eth</span>
                        </div>
                    </div>
                    <div class="ml-auto flex">
                        {{-- <div class="form-group">
                            <input type="text" class="form-control mr-2">
                        </div> --}}
                        <div class="form-group mb-0 mr-2 mt-1 ">
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control search__pair--input transition-all duration-150 ease-in-out" placeholder="Search Pairs" aria-label="Username" aria-describedby="addon-wrapping">
                                <div class="input-group-prepend">
                                    <span class="input-group-text search__pair--icon" id="addon-wrapping"> <i class="fa fa-search" aria-hidden="true"></i> </span>
                                  </div>
                              </div>
                        </div>
                        <button class="btn btn-primary px-4" style="background: rgb(44, 82, 130) !important; border-color: rgb(44, 82, 130) !important;"> <i class="fas fa-plus-circle" aria-hidden="true"></i> Trade</button>
                    </div>
                </div>
                <div class="row justify-center mt-3">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-3">
                        <div class="market__statistics--container px-3 py-3 bg-white rounded shadow">
                            <h6 class="text-blue-800 mb-3 font-semibold">Total Liquidity</h6>
                            <div class="flex">
                                <h4 class="text-2xl text-blue-800 font-semibold">$133, 366</h4>
                                <span class="ml-auto text-red-600 mt-1">-5.78%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-3">
                        <div class="market__statistics--container px-3 py-3 bg-white rounded shadow">
                            <h6 class="text-blue-800 mb-3 font-semibold">Volume (24hrs)</h6>
                            <div class="flex">
                                <h4 class="text-2xl text-blue-800 font-semibold">$133, 366</h4>
                                <span class="ml-auto text-green-600 mt-1">+45.78%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 mb-3">
                        <div class="market__statistics--container px-3 py-3 bg-white rounded shadow">
                            <h6 class="text-blue-800 mb-3 font-semibold">Fees</h6>
                            <div class="flex">
                                <h4 class="text-2xl text-blue-800 font-semibold">$13.2</h4>
                                <span class="ml-auto text-green-600 mt-1">+43.78%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white px-2 py-4 rounded shadow h-40"> <h1>Chart</h1> </div>
                <div class="table-responsive mt-3 bg-white rounded shadow">
                    <h1 class="font-bold text-blue-800 text-2xl ml-2 mt-2">Transactions</h1>
                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th>All</th>
                                <th>Total Value</th>
                                <th>Token Amount</th>
                                <th>Token Amount</th>
                                <th>Account</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody class="font-semibold">
                            <tr>
                                <td>
                                    <h6 class="text-blue-900">Swap <span class="font-bold uppercase">Bse</span> for <span class="font-bold uppercase">Eth</span> </h6>
                                </td>
                                <td>$332</td>
                                <td>168.891 <span class="uppercase font-semibold">bse</span> </td>
                                <td>18.891 <span class="uppercase font-semibold">eth</span> </td>
                                <td class="text-blue-900">0x7a25...488d</td>
                                <td>1 hour ago</td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="text-blue-900">Swap <span class="font-bold uppercase">eth</span> for <span class="font-bold uppercase">bse</span> </h6>
                                </td>
                                <td>$1,232</td>
                                <td>568.891 <span class="uppercase font-semibold">eth</span> </td>
                                <td>40.891 <span class="uppercase font-semibold">bse</span> </td>
                                <td class="text-blue-900">0x7a39...488d</td>
                                <td>2 hour ago</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive mt-3 bg-white rounded shadow">
                    <h1 class="font-bold text-blue-800 text-2xl ml-2 mt-2">Pair Information</h1>
                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th>Pair Name</th>
                                <th>Pair Address</th>
                                <th>BSE Address</th>
                                <th>Eth Address</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="font-semibold">
                            <tr>
                                <td>
                                    <h6 class="text-blue-900"><span class="font-bold uppercase">Bse</span>-<span class="font-bold uppercase">Eth</span> </h6>
                                </td>
                                <td>
                                    <span>0x9d03...6fca</span> <span class="fas fa-copy cursor-pointer"></span>
                                </td>
                                <td>
                                    <span>0x9d03...6fca</span> <span class="fas fa-copy cursor-pointer"></span>
                                </td>
                                <td>
                                    <span>0x9d03...6fca</span> <span class="fas fa-copy cursor-pointer"></span>
                                </td>
                                <td colspan="2">
                                    <button class="btn btn-primary px-4" style="background: rgb(44, 82, 130) !important; border-color: rgb(44, 82, 130) !important;">View on Etherscan <span class="fa fa-expand" aria-hidden="true"></span> </button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="section__assets--soon bg-white text-gray-800 shadow-2xl rounded" style="display: none">
                <div class="card">
                    <div class="card-header">
                        <h1 class="font-bold text-blue-800 uppercase">Coming Soon</h1>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center text-3xl font-bold">Coming Soon</h1>
                        <img src="/images/coding_.svg" class="img-fluid w-64 ml-auto mr-auto mt-4" alt="coming soon">
                    </div>
                    <div class="card-footer text-muted">
                        <div class="flex">
                            <div class="ml-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__assets--pool text-gray-800 shadow-2xl rounded" style="display: none">
                <div class="pool__container--section bg-white px-4 py-2 rounded">
                    <h1 class="mt-2 mb-2 font-bold text-2xl uppercase">BSE pool staking</h1>
                </div>
                <div class="grid grid-cols sm:grid-col-1 md:grid-col-2 lg:grid-cols-2 gap-2 mt-3">
                    <div class="mt-2 pool__staking--timer bg-white px-4 py-4 rounded">
                        <div class="">
                            <h6 class="text-center" style>Time to the next reward</h6>
                            <div class="flex justify-center" style="font-size: 2rem;">
                                <span class="mr-2">
                                    <div>
                                        <h1 class="mt-2">00</h1>
                                        <h6 class="ml-2" style="font-size: .6rem">Days</h6>
                                    </div>
                                </span>:
                                <span class="mr-2">
                                    <div class="ml-2">
                                        <h1 class="mt-2">23</h1>
                                        <h6 class="" style="font-size: .6rem">Hours</h6>
                                    </div>
                                </span>:
                                <span class="mr-2">
                                    <div class="ml-2">
                                        <h1 class="mt-2">12</h1>
                                        <h6 class="" style="font-size: .6rem">Minutes</h6>
                                    </div>
                                </span>:
                                <span class="mr-2">
                                    <div class="ml-2">
                                        <h1 class="mt-2">20</h1>
                                        <h6 class="" style="font-size: .6rem">Seconds</h6>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 px-4 py-4 bg-white rounded">
                        <div class="flex">
                            <img src="/images/bse-pool.png" width="70" height="50" alt="">
                            <span class="ml-3" style="font-size: 1.2rem">
                                Stake BSE and get up to 35% of yearly reward
                            </span>
                        </div>
                    </div>
                </div>
                <div class="pool__calculator--container px-4 py-4 mt-2 bg-white rounded">
                    <h1 class="text-2xl font-bold text-blue-800">BSE Staking Calculator</h1>
                    <div class="staking__input--container py-4 px-4 rounded">
                       <div class="grid grid-cols sm:grid-col-1 md:grid-col-2 lg:grid-cols-2 mt-3">
                            <div class="mt-2">
                                <div class="mt-2 rounded shadow px-2 py-2">
                                    <div class="form-group">
                                        <label for="" class="mb-0 ml-3">Amount</label>
                                        <input type="text" class="form-control pool-input" value="100">
                                    </div>
                                </div>
                                <div class="mt-4 rounded shadow px-2 py-2">
                                    <div class="form-group">
                                        <label for="" class="mb-0 ml-3">period</label>
                                        <input type="text" class="form-control pool-input" value="10 months 2 days">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 px-4">
                                <canvas id="myChart"></canvas>
                            </div>
                       </div>
                       <div class="pool-button mt-5">
                           <p class="text-center">
                            <button class="btn btn-primary btn-lg px-8 btn__stake" style="background: #ed8936!important; border-color: #ed8936!important;">Stake Now</button>
                                {{-- <a href="#" class="btn btn-primary btn-lg px-8 btn-stake" style="background: #ed8936!important; border-color: #ed8936!important;">Stake Now</a> --}}
                           </p>
                           {{-- data-toggle="modal" data-target="#poolModal"  --}}
                       </div>
                    </div>
                </div>
                <div class="stake__details--container px-4 py-4 mt-2 bg-white rounded" style="display: none">
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-12 col-md-6 mt-2">
                                <a href="#" class="no-underline hover:no-underline" data-toggle="modal" data-target="#poolModal">
                                    <div class="wallet__container rounded ml-auto mr-auto px-4 py-4 hover:shadow-2xl cursor-pointer transition delay-150 duration-300 ease-in-out" style="border: 1px solid #00000017; width: 80%; height: 250px">
                                        <h1 class="text-center uppercase mb-5">Metamask</h1>
                                        <p class="text-center">
                                            <img src="/images/metamask.jpg" class="ml-auto mr-auto" width="50" alt="">
                                        </p>
                                        <hr class="mt-5">
                                        <p class="mt-2 text-center">Stake</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 mt-2">
                                <a href="#" class="no-underline hover:no-underline" data-toggle="modal" data-target="#poolModal">
                                    <div class="wallet__container rounded ml-auto mr-auto px-4 py-4 hover:shadow-2xl cursor-pointer transition delay-150 duration-300 ease-in-out" style="border: 1px solid #00000017; width: 80%; height: 250px">
                                        <h1 class="text-center uppercase mb-10">Guarda Wallet</h1>
                                        <p class="text-center">
                                            <img src="/images/guardawallet.svg" class="ml-auto mr-auto" width="50" alt="">
                                        </p>
                                        <hr class="mt-5">
                                        <p class="mt-2 text-center">Stake</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mt-2 text-center px-4 py-4 text-white" style="font-size: 1rem;">
                    Earn a portion of the Buy-Sell fees based on the amount of BSE held, proportion to the stake. Mint xBSE by staking BSE. Then redeem your BSE staked plus fees by converting your rewarded xBSE back to BSE.
                </p>
            </div>
            <div class="stake__assets--container px-4 mt-2 rounded" style="display: none">
                <div class="bg-white px-2 py-2 rounded text-gray-800"><h1 class="mt-2 mb-2 font-bold uppercase text-center" style="font-size: 1rem;">Coming Soon</h1></div>
                <div class="container mt-4">
                    <div class="container mt-4">
                        <h1 class="font-bold text-white uppercase">Select Asset to stake</h1>
                        <hr style="    width: 100px;
                        color: #fff;
                        background: #fff;
                        margin-top: 3px;
                        border-top-width: 3px!important;;">
        
                        <div class="staking__assets--container">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="staking--assets mt-4 px-4 py-4 text-center bg-white rounded shadow-lg">
                                        <img src="/images/bs-logo-circle.png" class="img-fluid ml-auto mr-auto" alt="">
                                        <span class="text-blue-800 font-bold uppercase mt-2">Coming Soon</span>
                                        <p class="mt-2">
                                            <a href="#" class="btn btn-outline-primary btn-stake px-6" class="btn btn-primary" style="border-radius: 50px">Stake Now</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="staking--assets mt-4 px-4 py-4 text-center bg-white rounded shadow-lg">
                                        <img src="/images/bs-logo-circle.png" class="img-fluid ml-auto mr-auto" alt="">
                                        <span class="text-blue-800 font-bold uppercase mt-2">Coming Soon</span>
                                        <p class="mt-2">
                                            <a href="#" class="btn btn-outline-primary btn-stake px-6" class="btn btn-primary" style="border-radius: 50px">Stake Now</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="staking--assets mt-4 px-4 py-4 text-center bg-white rounded shadow-lg">
                                        <img src="/images/bs-logo-circle.png" class="img-fluid ml-auto mr-auto" alt="">
                                        <span class="text-blue-800 font-bold uppercase mt-2">Coming Soon</span>
                                        <p class="mt-2">
                                            <a href="#" class="btn btn-outline-primary btn-stake px-6" class="btn btn-primary" style="border-radius: 50px">Stake Now</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row mt-2">
                                <div class="col-12 col-md-4">
                                    <div class="staking--assets mt-4 px-4 py-4 text-center bg-white rounded shadow-lg">
                                        <img src="/images/bs-logo-circle.png" class="img-fluid ml-auto mr-auto" alt="">
                                        <span class="text-blue-800 font-bold uppercase mt-2">Coming Soon</span>
                                        <p class="mt-2">
                                            <a href="#" class="btn btn-outline-primary btn-stake px-6" class="btn btn-primary" style="border-radius: 50px">Stake Now</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="staking--assets mt-4 px-4 py-4 text-center bg-white rounded shadow-lg">
                                        <img src="/images/bs-logo-circle.png" class="img-fluid ml-auto mr-auto" alt="">
                                        <span class="text-blue-800 font-bold uppercase mt-2">Coming Soon</span>
                                        <p class="mt-2">
                                            <a href="#" class="btn btn-outline-primary btn-stake px-6" class="btn btn-primary" style="border-radius: 50px">Stake Now</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="staking--assets mt-4 px-4 py-4 text-center bg-white rounded shadow-lg">
                                        <img src="/images/bs-logo-circle.png" class="img-fluid ml-auto mr-auto" alt="">
                                        <span class="text-blue-800 font-bold uppercase mt-2">Coming Soon</span>
                                        <p class="mt-2">
                                            <a href="#" class="btn btn-outline-primary btn-stake px-6" class="btn btn-primary" style="border-radius: 50px">Stake Now</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{--  --}}
                            <div class="row mt-2">
                                <div class="col-12 col-md-4">
                                    <div class="staking--assets mt-4 px-4 py-4 text-center bg-white rounded shadow-lg">
                                        <img src="/images/bs-logo-circle.png" class="img-fluid ml-auto mr-auto" alt="">
                                        <span class="text-blue-800 font-bold uppercase mt-2">Coming Soon</span>
                                        <p class="mt-2">
                                            <a href="#" class="btn btn-outline-primary btn-stake px-6" class="btn btn-primary" style="border-radius: 50px">Stake Now</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="staking--assets mt-4 px-4 py-4 text-center bg-white rounded shadow-lg">
                                        <img src="/images/bs-logo-circle.png" class="img-fluid ml-auto mr-auto" alt="">
                                        <span class="text-blue-800 font-bold uppercase mt-2">Coming Soon</span>
                                        <p class="mt-2">
                                            <a href="#" class="btn btn-outline-primary btn-stake px-6" class="btn btn-primary" style="border-radius: 50px">Stake Now</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="staking--assets mt-4 px-4 py-4 text-center bg-white rounded shadow-lg">
                                        <img src="/images/bs-logo-circle.png" class="img-fluid ml-auto mr-auto" alt="">
                                        <span class="text-blue-800 font-bold uppercase mt-2">Coming Soon</span>
                                        <p class="mt-2">
                                            <a href="#" class="btn btn-outline-primary btn-stake px-6" class="btn btn-primary" style="border-radius: 50px">Stake Now</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-blue-800 uppercase font-bold" id="exampleModalLabel">Stake Cosmos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="stake__coins--modal">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="flex">
                        <h1 class="font-bold text-blue-800">Balance</h1>
                        <span class="ml-auto font-black text-blue-900">500</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="flex">
                        <h1 class="font-bold text-blue-800">Staked</h1>
                        <span class="ml-auto font-black text-blue-900">1</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="flex">
                        <h1 class="font-bold text-blue-800">Unstaked</h1>
                        <span class="ml-auto font-black text-blue-900">100 </span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="flex">
                        <h1 class="font-bold text-blue-800">Earned</h1>
                        <span class="ml-auto font-black text-blue-900">200</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="flex">
                        <h1 class="font-bold text-blue-800">BSE Reward</h1>
                        <span class="ml-auto font-black text-blue-900">0 <small>BSE</small> <small class="ml-1 badge-primary rounded px-2 py-1">Claim</small></span>
                    </div>
                </li>
              </ul>
              <div class="flex mt-3">
                  <button class="btn btn-primary px-4" style="border-radius: 50px">Stake</button>
                  <button class="btn btn-danger px-4 ml-2" style="border-radius: 50px">Unstake</button>
              </div>
          </div>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
</div>

<!-- Modal -->
@if (Auth::check() && Auth::user()->is_admin())
<div class="modal fade" id="stakeModal" tabindex="-1" aria-labelledby="stakeModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-blue-800 uppercase font-bold" id="poolModal">Edit Staking</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @if (!empty($stakingMinimum))
            <form action="{{route('staking-min.update', $stakingMinimum->id)}}" method="POST">
                @method('PUT')
                @csrf
                <input type="text" name="minStaking" class="form-control" value="{{$stakingMinimum->staking_min}}">
                <button type="submit" class="btn btn-success mt-2"> <i class="fa fa-check" aria-hidden="true"></i> Save Changes</button>
            </form>
            @endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
@endif

{{-- @if(request('dev')) --}}
{{-- @endif  --}}
</body>
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
{{-- @push('scripts') --}}
<script type="text/javascript">

$(document).ready(function(){
    var navSwap = document.querySelector('.nav-swap');
    var navStaking = document.querySelector('.asset-staking');
    var assetsStaking = document.querySelector('.nav-staking');
    var assetsNavBtn = document.querySelector('.nav-assets-btn')
    var poolStaking = document.querySelector('.nav-pool');
    var stakingLi = document.querySelector('.stake-active');
    var swapLi = document.querySelector('.swap-bse');
    var poolLi = document.querySelector('.pool-li');
    var assetsLi = document.querySelector('.assets');
    var stakingAssets = document.querySelector('.section__assets--staking');
    var swapingAssets = document.querySelector('.section__assets--swap');
    var assetsContainer = document.querySelector('.stake__assets--container');
    var assetsComingSoon = document.querySelector('.section__assets--soon');
    var comingSoon = document.querySelector('.nav__coming--soon');
    var poolSection = document.querySelector('.section__assets--pool');
    var btnStake = document.querySelector('.btn__stake');
    var poolCalculator = document.querySelector('.pool__calculator--container');
    var stakeDetailsContainer = document.querySelector('.stake__details--container');
    var btnBorrow = document.querySelector('.nav__borrow');
    var btnGovernance = document.querySelector('.nav__governance');

    navSwap.addEventListener('click', function() {
        stakingAssets.style.display = 'none';
        swapingAssets.style.display = 'block';
        assetsComingSoon.style.display = 'none';
        assetsContainer.style.display = 'none';
        stakingLi.classList.remove('stake-active');
        stakingLi.style.color = "#2c5282";
        swapLi.classList.add('stake-active');
        poolSection.style.display = 'none';
        poolLi.classList.remove('stake-active');
        assetsStaking.classList.remove('stake-active');
        stakeDetailsContainer.style.display = 'none';
        poolCalculator.style.display = 'block';
        assetsLi.classList.remove('stake-active');
    });

    navStaking.addEventListener('click', function() {
        stakingAssets.style.display = 'block';
        swapingAssets.style.display = 'none';
        assetsComingSoon.style.display = 'none';
        assetsContainer.style.display = 'none';
        poolSection.style.display = 'none';
        stakingLi.classList.add('stake-active');
        stakingLi.style.color = "#fff";
        assetsStaking.classList.add('stake-active');
        swapLi.classList.remove('stake-active');
        poolLi.classList.remove('stake-active');
        assetsLi.classList.remove('stake-active');
        stakeDetailsContainer.style.display = 'none';
        poolCalculator.style.display = 'block';
    });

    poolStaking.addEventListener('click', function(e) {
        stakingAssets.style.display = 'none';
        swapingAssets.style.display = 'none';
        assetsComingSoon.style.display = 'none';
        assetsContainer.style.display = 'none';
        poolSection.style.display = 'block';
        stakingLi.classList.remove('stake-active');
        assetsStaking.classList.remove('stake-active');
        stakingLi.style.color = "#2c5282";
        swapLi.classList.remove('stake-active');
        poolLi.classList.add('stake-active');
        assetsLi.classList.remove('stake-active');
    });

    assetsNavBtn.addEventListener('click', function(e) {
        stakingAssets.style.display = 'none';
        swapingAssets.style.display = 'none';
        poolSection.style.display = 'none';
        assetsContainer.style.display = 'block';
        assetsComingSoon.style.display = 'none';
        stakingLi.classList.remove('stake-active');
        assetsStaking.classList.remove('stake-active');
        stakingLi.style.color = "#2c5282";
        swapLi.classList.remove('stake-active');
        poolLi.classList.remove('stake-active');
        assetsLi.classList.add('stake-active');
    });

    comingSoon.addEventListener('click', function(e) {
        stakingAssets.style.display = 'none';
        swapingAssets.style.display = 'none';
        poolSection.style.display = 'none';
        assetsContainer.style.display = 'none';
        assetsComingSoon.style.display = 'block';
    });

    btnBorrow.addEventListener('click', function(e) {
        stakingAssets.style.display = 'none';
        swapingAssets.style.display = 'none';
        poolSection.style.display = 'none';
        assetsComingSoon.style.display = 'block';
    });
    btnGovernance.addEventListener('click', function(e) {
        stakingAssets.style.display = 'none';
        swapingAssets.style.display = 'none';
        poolSection.style.display = 'none';
        assetsComingSoon.style.display = 'block';
    });

    btnStake.addEventListener('click', function(e) {
        poolCalculator.style.display = 'none';
        stakeDetailsContainer.style.display = 'block';
    });


    var ctx = document.getElementById('myChart').getContext('2d');
    var myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [10, 2],
                backgroundColor: '#061831',
            }],
                    // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                'months',
                'days'
            ]
        },
        options: options
    });
    var options;

});

</script>
{{-- @endpush --}}
</html>
