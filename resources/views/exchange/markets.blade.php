@extends('layouts.main')

@section('content')

<div class="container">
    <div class="market-bg lg:pl-24 lg:pr-24 mt-10">
        <h2 class="text-center text-white font-bold text-4xl">Market</h2>
        <p class="text-center text-center font-normal text-2xl sm:text-gray-800 lg:text-gray-200 ">
            Market prices and info
        </p>
    </div>
    <div class="market lg:mt-20 sm:mt-10 lg:mb-5 sm:mb-5">
        <!-- <hr> -->
        <div class="flex bg-white py-2 px-3 text-xs">
            <span class="mr-3">Coins:  <span class="text-blue-700 font-mono font-medium">{{ $global['data']['active_cryptocurrencies'] }}</span></span>
            <span class="mr-3">Exchanges: <span class="text-blue-700 font-mono font-medium">  </span></span>
            <span class="mr-3">Market Cap Change 24h:  <span class="text-blue-700 font-mono font-medium"> </span></span>
            <span class="mr-3">Dominance: BTC {{ number_format($global['data']['market_cap_percentage']['btc'], 2) }}<span class="text-blue-700 font-mono font-medium mr-2">%</span> <span class="text-blue-700 font-mono font-medium mr-2"></span> ETH {{ number_format($global['data']['market_cap_percentage']['eth'], 2) }}<span class="text-blue-700 font-mono font-medium mr-2">%</span> XRP {{ number_format($global['data']['market_cap_percentage']['xrp'], 2) }}<span class="text-blue-700 font-mono font-medium mr-2">%</span> </span>
        </div>
        <!-- <hr> -->
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-light">
                    <tr>
                        <th class="text-xs font-medium uppercase">#</th>
                        <th class="text-xs font-medium uppercase">Coin</th>
                        <th class="text-xs font-medium uppercase">Symbol</th>
                        <th class="text-xs font-medium uppercase">Price</th>
                        <th class="text-xs font-medium uppercase">Market Cap Change 24h</th>
                        <th class="text-xs font-medium uppercase">Circulating Supply</th>
                        <th class="text-xs font-medium uppercase">Total Supply</th>
                        <th class="text-xs font-medium uppercase">Market Cap</th>
                    </tr>
                </thead>
                <tbody class="bg-white font-medium text-sm">
                    @foreach ($data as $data)
                        <tr>
                            <td> {{$data['market_cap_rank']}} </td>
                            <td>
                                <div class="flex">
                                    <span>
                                        <img src="{{$data['image']}}" class="w-6 h-6" alt="">
                                    </span>
                                <span class="ml-2 font-weight-bold" style="color: #2e507f"> <a href="{{route('user.marketcoin', $data['id'])}}">{{$data['name']}}</a> </span>
                                </div>
                            </td>
                            <td class="uppercase text-blue-800"> {{$data['symbol']}} </td>
                            <td> ${{ number_format($data['current_price'],2) }} </td>
                            <td> {{ number_format($data['market_cap_change_24h'], 2) }} </td>
                            <td> {{ number_format($data['circulating_supply'], 2) }} </td>
                            <td> {{ number_format($data['total_supply'], 2) }} </td>
                            <td> ${{ number_format($data['market_cap'], 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href=" {{ route('user.marketsPaginate', 1) }} " >1</a></li>
                <li class="page-item"><a class="page-link" href="{{ route('user.marketsPaginate', 2) }}">2</a></li>
                <li class="page-item"><a class="page-link" href="{{ route('user.marketsPaginate', 3) }}">3</a></li>
            </ul>
        </nav>
    </div>
</div>

@endsection