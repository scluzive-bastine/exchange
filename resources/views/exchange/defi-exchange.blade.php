@extends('layouts.main')

@section('content')

<div class="container">
    {{-- <div class="defi__header--container bg-white shadow rounded mt-10 px-5 py-5">
        <h1>DeFi Exchange</h1>
    </div> --}}
    {{-- <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 mt-12">
        <div class="mt-10">
            <h2 class="mb-2 lg:text-white font-bold lg:text-5xl sm:text-blue-700 text-2xl md:text-white">Exchange Cryptocurrencies</h2>
            <p class="lg:text-gray-300 sm:text-gray-800 text-2xl">Buy, Sell and Exchange Cryptocurrencies
                <br>
                Fast and Easy
            </p>
        </div>
        <div class="mt-10">
            <h1>Defi Exchange</h1>
        </div>
    </div> --}}

    <div class="text-center mt-5">
        <h1 class="text-4xl lg:text-white sm:text-blue-800 font-bold">Buy-Sell DeFi Exchange</h1>
        <div class="exchange__widget ml-auto mr-auto">
            <h1 class="font-medium text-center lg:text-white sm:text-blue-800 mt-2" style="font-size: 1rem">
                With Buy-Sell DeFi exchange, you experience over 5600+ aggregated decentralized and synthetic assets that is provided into a suite tools 
                that simplifies the access of deep liquidity for DeFi assets at the best price through Totle.
            </h1>
        </div>
    </div>

    <div class="bg-white shadow exchange__widget rounded ml-auto mr-auto px-5 py-5 mt-16">
        <div id='totle-widget'></div>
    </div>
</div>

<div class="container-fluid mt-5 bg-white py-2">
    <div class="how__it-works--container px-2 py-2">
        <h1 class="text-center text-blue-800 font-semibold text-2xl">How Buy-Sell DeFi Exchange works</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="px-4 py-4">
                    <p class="mt-4">
                        Buy-Sell DeFi exchange is connected to top decentralized exchanges and synthetic asset providers.
                    </p>
                    <p class="mt-4">
                        When you execute an exchange on Buy-Sell DeFi through Totle, your order is routed to the sources offering the best prices on the market.
                    </p>
                    <p class="mt-4">
                        With Nexus Mutual Automatic Insurance which routes through Totle, Users are covered for up to 500 ETH in the event that funds are lost during a swap due to an unforeseen bug.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="/images/defi-exchange.png" class="ml-auto mr-auto img-fluid w-64" alt="">
            </div>
        </div>
    </div>
</div>

{{-- Get token section --}}

<div class="container-fluid bg-blue-800 py-4">
    <div class="how__it-works--container px-2 py-2">
        <h1 class="text-center text-white font-semibold text-2xl">Get More for Your Tokens</h1>
    </div>
    <div class="container mt-4 mb-4">
        <img src="/images/gt.svg" class="img-fluid ml-auto mr-auto" alt="">
    </div>
    <h1 class="text-center text-white font-semibold">Get a better price for your tokens 99% of the time when you trade on Totle instead of a single DEX.</h1>
</div>

{{-- Get token section --}}

<div class="container-fluid bg-white py-2">
    <div class="how__it-works--container px-2 py-2">
        {{-- <h1 class="text-center text-blue-800 font-semibold text-2xl">How Buy-Sell DeFi Exchange works</h1> --}}
    </div>
    <div class="container">
       <div class="py-2 ml-auto mr-auto section__three">
            <p class="text-center font-semibold text-blue-800" style="font-size: 1.2rem">
                With Buy-Sell DeFi exchange, you get more for your token swap, this means you get a better price 
                for your tokens 99% of the time when you trade on Buy-Sell DeFi exchange instead of a single DEX
            </p>
       </div>
    </div>
</div>

<div class="container-fluid bg-white py-4">
    <div class="how__it-works--container px-2 py-2">
        <h1 class="text-center text-blue-800 font-semibold text-2xl">Buy-sell Advantage</h1>
    </div>
    <div class="container px-4 py-4">
        <div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-12 text-center">
              <div class="mt-2">
                <div>
                    <img src="/images/coins.png" class="img-fluid ml-auto mr-auto w-64" style="" alt="">
                </div>
                <h3 class="mt-3">Asset pairs with over 5000</h3>
              </div>
              <div class="mt-2">
                <div>
                    <img src="/images/crm.png" class="img-fluid ml-auto mr-auto w-64" alt="">
                </div>
                <h3 class="mt-3">Cross multiple changes to get set price from splitting orders</h3>
              </div>
              <div class="mt-2">
                <div>
                    <img src="/images/bs-defi.png" class="img-fluid ml-auto mr-auto" alt="">
                </div>
                <h3 class="mt-3">The easiest to use</h3>
              </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-12 text-center">
                <div class="mt-2">
                  <div>
                      <img src="/images/non-custodial.svg" class="img-fluid ml-auto mr-auto w-64" alt="">
                  </div>
                  <h3 class="mt-3">Non-custodial, transparent and compliance</h3>
                </div>
                <div class="mt-2">
                  <div>
                      <img src="/images/reliable.svg" class="img-fluid ml-auto mr-auto" alt="">
                  </div>
                  <h3 class="mt-3">Reliable measures to protect against multiple failed transactions</h3>
                </div>
                <div class="mt-2">
                  <div>
                      <img src="/images/eth-gas.png" class="img-fluid ml-auto mr-auto w-20" alt="">
                  </div>
                  <h3 class="mt-3">Less gas fee</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-white">
    <h1 class="text-center text-blue-800 font-semibold text-2xl">Liquidity Partners</h1>
    <div class="container mt-2 py-4">
        <div class="row">
            <div class="col-md-4">
                <img src="/images/uniswap.svg" class="mt-5 ml-auto mr-auto" alt="">
            </div>
            <div class="col-md-4">
                <img src="/images/kyber-logo.svg" class="mt-5 ml-auto mr-auto" alt="">
            </div>
            <div class="col-md-4">
                <img src="/images/bancor-logo-white.svg" class="mt-5 ml-auto mr-auto" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="/images/airswap.svg" class="mt-5 ml-auto mr-auto" alt="">
            </div>
            <div class="col-md-4">
                <img src="/images/etherdelta.svg" class="mt-5 ml-auto mr-auto" alt="">
            </div>
            <div class="col-md-4">
                <img src="/images/fulcrum.svg" class="mt-5 ml-auto mr-auto" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="/images/0x_protocol.svg" class="mt-5 ml-auto mr-auto" alt="">
            </div>
            <div class="col-md-4">
                <img src="/images/oasis.svg" class="mt-5 ml-auto mr-auto" alt="">
            </div>
            <div class="col-md-4">
                <img src="/images/compound-logo.svg" class="mt-5 ml-auto mr-auto" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="/images/synthetix.svg" class="mt-5 ml-auto mr-auto" alt="">
            </div>
            <div class="col-md-4">
                <img src="/images/Chai@2x.png" class="mt-5 ml-auto mr-auto" alt="" style="width: 50%;">
            </div>
            <div class="col-md-4">
                <img src="/images/curve@2x.png" class="mt-5 ml-auto mr-auto" alt="" style="width: 50%;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="/images/set-and-tokensets.svg" class="mt-5 ml-auto mr-auto" alt="">
            </div>
            <div class="col-md-4">
                <img src="/images/idle_blue.svg" class="mt-5 ml-auto mr-auto" alt="" style="width: 40%;">
            </div>
            <div class="col-md-4">
                <img src="/images/aave.svg" class="mt-5 ml-auto mr-auto" alt="" style="width: 40%;">
            </div>
        </div>
    </div>
</div>
    
@endsection

@push('scripts')

<script type="text/javascript">
    const config = {
      sourceAssetAddress: null,
      sourceAmountDecimal: null,
      destinationAssetAddress: null,
      destinationAmountDecimal: null,
      apiKey: null,
      partnerContractAddress: null,
    };
    const nodeId = 'totle-widget';
    !function(){const t=document.createElement("script");t.type="text/javascript";const e=()=>{TotleWidget.default.run(config,document.getElementById(nodeId))};t.readyState?t.onreadystatechange=function(){"loaded"!=t.readyState&&"complete"!=t.readyState||(t.onreadystatechange=null,e())}:t.onload=function(){e()},t.src="https://widget.totle.com/latest/dist.js",document.getElementsByTagName("head")[0].appendChild(t)}();
</script>
    
@endpush