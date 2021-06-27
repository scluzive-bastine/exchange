@extends('layouts.main')

<style>
    .flag {
        border-bottom-right-radius: 1rem;
        border-bottom-left-radius: 1rem;
        position: relative;
        text-align: center;
        width: auto;
        display: inline-block;
        color: white;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 15px -3px;
        background: rgb(24, 198, 131);
        padding: 1rem;
        margin-bottom: -4rem;

    }
    .flag::before {
        content: "";
        width: calc(100% + 20px);
        height: 10px;
        position: absolute;
        left: -10px;
        top: 0px;
        border-bottom-left-radius: 8px;
        border-top-left-radius: 8px;
        border-bottom-right-radius: 8px;
        border-top-right-radius: 8px;
        background: inherit;
    }
    .details h4 {
        font-size: .7rem;
    }
</style>

@section('content')

<div class="container">
    <h1 class="text-center text-white text-2xl mt-10">Markets Details about <span> {{ $response['name'] }} </span> </h1>
    <div class="flag mr-5 ml-4 mt-10">
        <span class="items-center">
            <h4 class="text-2xl mt-2"> {{ $response['market_cap_rank'] }} </h4>
            <small>Rank</small>
        </span>
    </div>
    <div class="container">
        <div class="coin__market--details bg-white rounded py-4 shadow-lg">
            <div class="flex ml-20">
                <img src="{{ $response['image']['small'] }}" class="mr-2 w-10" alt="">
                <span class="mt-2 font-medium"> {{ $response['name'] }} <small class="uppercase">({{ $response['symbol'] }})</small> </span>
            </div>
            <div class="coin__details py-4 px-2">
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-3">
                    <div class="mt-3">
                        <div class="flex">
                            <span class="mr-2">
                                <img src="/images/pricetags.svg" class="w-75" alt="">
                            </span>
                            <div class="details">
                                <h4 class="font-bold mb-2 uppercase">Price</h4>
                                <h1 class=""> ${{ number_format($response['market_data']['current_price']['usd'], 2)}} </h1>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="flex">
                            <span class="mr-2">
                                <img src="/images/dollar2.svg" class="w-75" alt="">
                            </span>
                            <div class="details">
                                <h4 class="font-bold mb-2 uppercase">market cap</h4>
                                <h1 class="">${{ number_format($response['market_data']['market_cap']['usd'], 2) }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="flex">
                            <span class="mr-2">
                                <img src="/images/stats.svg" class="w-75" alt="">
                            </span>
                            <div class="details">
                                <h4 class="font-bold mb-2 uppercase">24h low / 24h high</h4>
                                <h1 class=""> ${{ number_format($response['market_data']['high_24h']['usd']) }} / ${{ number_format($response['market_data']['low_24h']['usd']) }} </h1>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="flex">
                            <span class="mr-2">
                                <img src="/images/chart2.svg" class="w-75" alt="">
                            </span>
                            <div class="details">
                                <h4 class="font-bold mb-2 uppercase">24h trading vol</h4>
                                <h1 class="">${{ number_format($response['market_data']['total_volume']['usd']) }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="flex">
                            <span class="mr-2">
                                <img src="/images/moneybag.svg" class="w-75" alt="">
                            </span>
                            <div class="details">
                                <h4 class="font-bold mb-2 uppercase">circulating supply</h4>
                                <h1 class="">${{ number_format($response['market_data']['circulating_supply']) }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="flex">
                            <span class="mr-2">
                                <img src="/images/star.svg" class="w-75" alt="">
                            </span>
                            <div class="details">
                                <h4 class="font-bold mb-2 uppercase">Reactions</h4>
                                <h1 class=""> {{$response['community_score']}}% <br> <small class="text-xs">people like this</small> </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="coin__info bg-white py-3 px-3 rounded mt-5 shadow-lg row">
            <div class="col-lg-8">
                <div class="info overflow-x-scroll">
                    <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/" rel="noopener" target="_blank"><span class="blue-text">Bitcoin and Altcoin Prices</span></a> by TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                            "title": "Cryptocurrencies",
                            "title_raw": "Cryptocurrencies",
                            "tabs": [
                            {
                                "title": "Overview",
                                "title_raw": "Overview",
                                "symbols": [
                                {
                                    "s": "BITSTAMP:BTCUSD"
                                },
                                {
                                    "s": "BITSTAMP:ETHUSD"
                                },
                                {
                                    "s": "BITSTAMP:XRPUSD"
                                },
                                {
                                    "s": "COINBASE:BCHUSD"
                                },
                                {
                                    "s": "COINBASE:LTCUSD"
                                },
                                {
                                    "s": "BITFINEX:IOTUSD"
                                }
                                ],
                                "quick_link": {
                                "title": "More cryptocurrencies",
                                "href": "/markets/cryptocurrencies/prices-all/"
                                }
                            },
                            {
                                "title": "Bitcoin",
                                "title_raw": "Bitcoin",
                                "symbols": [
                                {
                                    "s": "BITSTAMP:BTCUSD"
                                },
                                {
                                    "s": "COINBASE:BTCEUR"
                                },
                                {
                                    "s": "COINBASE:BTCGBP"
                                },
                                {
                                    "s": "BITFLYER:BTCJPY"
                                },
                                {
                                    "s": "CEXIO:BTCRUB"
                                },
                                {
                                    "s": "CME:BTC1!"
                                }
                                ],
                                "quick_link": {
                                "title": "More Bitcoin pairs",
                                "href": "/markets/cryptocurrencies/prices-bitcoin/"
                                }
                            },
                            {
                                "title": "XRP",
                                "title_raw": "XRP",
                                "symbols": [
                                {
                                    "s": "BITSTAMP:XRPUSD"
                                },
                                {
                                    "s": "KRAKEN:XRPEUR"
                                },
                                {
                                    "s": "KORBIT:XRPKRW"
                                },
                                {
                                    "s": "BITSO:XRPMXN"
                                },
                                {
                                    "s": "BINANCE:XRPBTC"
                                },
                                {
                                    "s": "BITTREX:XRPETH"
                                }
                                ],
                                "quick_link": {
                                "title": "More XRP pairs",
                                "href": "/markets/cryptocurrencies/prices-xrp/"
                                }
                            },
                            {
                                "title": "Ethereum",
                                "title_raw": "Ethereum",
                                "symbols": [
                                {
                                    "s": "COINBASE:ETHUSD"
                                },
                                {
                                    "s": "KRAKEN:ETHEUR"
                                },
                                {
                                    "s": "KRAKEN:ETHGBP"
                                },
                                {
                                    "s": "KRAKEN:ETHJPY"
                                },
                                {
                                    "s": "POLONIEX:ETHBTC"
                                },
                                {
                                    "s": "KRAKEN:ETHXBT"
                                }
                                ],
                                "quick_link": {
                                "title": "More Ethereum pairs",
                                "href": "/markets/cryptocurrencies/prices-ethereum/"
                                }
                            },
                            {
                                "title": "Bitcoin Cash",
                                "title_raw": "Bitcoin Cash",
                                "symbols": [
                                {
                                    "s": "COINBASE:BCHUSD"
                                },
                                {
                                    "s": "BITSTAMP:BCHEUR"
                                },
                                {
                                    "s": "CEXIO:BCHGBP"
                                },
                                {
                                    "s": "BITSTAMP:BCHBTC"
                                },
                                {
                                    "s": "HITBTC:BCHETH"
                                },
                                {
                                    "s": "KRAKEN:BCHXBT"
                                }
                                ],
                                "quick_link": {
                                "title": "More Bitcoin Cash pairs",
                                "href": "/markets/cryptocurrencies/prices-bitcoin-cash/"
                                }
                            }
                            ],
                            "title_link": "/markets/cryptocurrencies/prices-all/",
                            "width": 800,
                            "height": 660,
                            "showChart": true,
                            "locale": "en",
                            "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
                            "plotLineColorFalling": "rgba(33, 150, 243, 1)",
                            "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                            "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                            "gridLineColor": "#F0F3FA",
                            "scaleFontColor": "rgba(120, 123, 134, 1)",
                            "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                            "colorTheme": "light"
                        }
                            </script>
                        </div>
                    <!-- TradingView Widget END -->
                    {{-- {{  $response['description']['en']}} --}}
                    {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore placeat assumenda fugit praesentium? Animi sed quae similique assumenda obcaecati voluptas error, amet fugiat fugit quam sint excepturi rerum incidunt quibusdam! --}}
                </div> 
            </div>
            <div class="col-lg-4">
                <div class="info__list">
                    <ul class="list-group shadow-2xl">
                        <li class="list-group-item list-group-item-dark flex">
                            <span class="font-bold">
                                {{ $response['name'] }} Price
                            </span>
                            <span class="ml-auto text-xs">
                                ${{ number_format($response['market_data']['current_price']['usd'], 2)}}
                            </span>
                        </li>
                        <li class="list-group-item list-group-item-dark flex">
                            <span class="font-bold">
                                Market Cap
                            </span>
                            <span class="ml-auto text-xs">
                                ${{ number_format($response['market_data']['market_cap']['usd'], 2) }}
                            </span>
                        </li>
                        <li class="list-group-item list-group-item-dark flex">
                            <span class="font-bold">
                                Trading Volume
                            </span>
                            <span class="ml-auto text-xs">
                                ${{ number_format($response['market_data']['total_volume']['usd']) }}
                            </span>
                        </li>
                        <li class="list-group-item list-group-item-dark flex">
                            <span class="font-bold">
                                24h High / 24h Low
                            </span>
                            <span class="ml-auto text-xs">
                                ${{ number_format($response['market_data']['high_24h']['usd'],2) }} / ${{ number_format($response['market_data']['low_24h']['usd'],2) }}
                            </span>
                        </li>
                        <li class="list-group-item list-group-item-dark flex">
                            <span class="font-bold">
                                Hashing Algorithm
                            </span>
                            <span class="ml-auto text-xs">
                                {{ $response['hashing_algorithm'] }}
                            </span>
                        </li>
                        <li class="list-group-item list-group-item-dark flex">
                            <span class="font-bold">
                                Dominance
                            </span>
                            <span class="ml-auto text-xs">
                                 {{-- $symbol = $response['symbol'] --}}
                                {{-- {{ number_format($global['data']['market_cap_percentage'][$response['symbol']], 2) }}% --}}
                            </span>
                        </li>
                        {{-- @media only screen and (max-width: 600px) --}}
                    </ul>
                </div>
            </div>
            {{-- <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-2">
                <div class="info">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga excepturi saepe nesciunt tempora sunt impedit, dolor veritatis libero similique consequatur debitis nemo cupiditate nobis et quo dignissimos, dolorum modi at.
                </div>
                <div class="info__list">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-dark flex">
                            <span>
                                MARKET CAP
                            </span>
                            <span class="ml-3 text-sm">
                                $173,388,888,779
                            </span>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</div>
    
@endsection