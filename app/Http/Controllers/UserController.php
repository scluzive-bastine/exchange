<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Tag;
use App\News;
use App\StakingLimit;
use App\Transaction;
use Throwable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use GuzzleHttp\Exception\RequestException;
// use App\Faq;


class UserController extends Controller
{

    public function index() {
        $client = new CoinGeckoClient();
        $data = $result = $client->coins()->getMarkets('usd', ['per_page' => 4, 'page' => 1]);
        $global = Http::get('https://api.coingecko.com/api/v3/global')->json();

        $availableCurriences = Http::get('https://changenow.io/api/v1/currencies?active=true&fixedRate=true')->json();
        $currencyRates = Http::get('https://changenow.io/api/v1/min-amount/eth_btc')->json();

        // Total transactions done
        $transaction = Transaction::all();
        $totalTransaction = count($transaction);
        // ./ Total transactions done

        $sum = DB::table('transactions')->sum('send_amount');
        // $latest = DB::table('transactions')->orderBy('created_at', 'asc');
        // dd($latest);



        return view('components.index', compact('availableCurriences', 'data', 'global', 'totalTransaction', 'sum'));
    }

    public function estimatedPrice(Request $request, $amount, $from, $to, $key) {
        // https://changenow.io/api/v1/exchange-amount/{amount?}/{from_to?}?api_key={key?}
        if($request->ajax()) {
            $amount = $request->sendAmount;
            $from = $request->sendCoin;
            $to  = $request->recieveCoin;
            $key = env('CHANGENOW_KEY');
        }
                            // url: `https://changenow.io/api/v1/exchange-amount/${sendAmount}/${send}_${rec}?api_key={{{ env('CHANGENOW_KEY')}}}`,

    }

    // public function exchangeConfirmDetails(Request $request) {
    //     if($request->all()) {
    //         $sendAmount = $request->sendAmount;
    //         $sendCoin = $request->sendCoin;
    //         $sendCoinImage = $request->sendCoinImage;
    //         $recieveAmount = $request->recieveAmount;
    //         $recieveCoin = $request->recieveCoin;
    //         $recieveCoinImage = $request->recieveCoinImage;
    //     }

    //     return view('exchange.exchange', compact('sendAmount', 'sendCoin', 'recieveAmount', 'recieveCoin', 'sendCoinImage', 'recieveCoinImage'));
    // }

    // // Exchange Successful

    // public function exchangeSuccessful(Request $request, Transaction $transaction) {
    //     $transaction->transaction_id = $request->transactionId;
    //     $transaction->send_coin = $request->sendCoin;
    //     $transaction->send_coin_image = $request->sendCoinImage;
    //     $transaction->rec_coin = $request->recieveCoin;
    //     $transaction->rec_coin_image = $request->recieveCoinImage;
    //     $transaction->send_amount = $request->sendAmount;
    //     $transaction->recieve_amount= $request->recieveAmount;
    //     $transaction->coin_send_address = $request->coinSendAddress; 
    //     $transaction->coin_recieve_address = $request->coinRecieveAddress; 
    //     $transaction->save();
    //     // return view('exchange.success');
    // }

    // public function exchangeCompleted($id) {
    //     $data = DB::table('transactions')->where('transaction_id', $id)->first();

    //     // dd($data);

    //     return view('exchange.success', compact('data'));
    // }

    // ./ Exchange Successful


    // Defi Exchange

    public function defiExchange() {
        return view('exchange.defi-exchange');
    }

    public function bseToken() {
        return view('layouts.bse-token');
    }

    // Defi Exchange

    public function staking() {
        return view('layouts.staking');
    }

    public function stakingDashboard() {
        // $stakingMinimum = DB::table('staking_limits')->where('id', '1')->value('staking_min');
        $stakingMinimum = StakingLimit::first();
        return view('layouts.staking-dashboard', compact('stakingMinimum'));
    }


    // public function faq() {
    //     $faqs = Faq::all();
    //     return view('exchange.faq', compact('faqs'));
    // }

    // public function aboutUs() {
    //     return view('exchange.about-us');
    // }

    public function markets() {
        $client = new CoinGeckoClient();
        $data = $result = $client->coins()->getMarkets('usd', ['per_page' => 100, 'page' => 1]);
        $global = Http::get('https://api.coingecko.com/api/v3/global')->json();
        // dd($data);

        return view('exchange.markets', compact('data', 'global'));
    }

    public function marketsPaginate($page) {
        if($page == '') {
            $page = 1;
        } else {
            $page = $page;
        };

        // $page == '' ? $page = 1 : $page = $page;
        $client = new CoinGeckoClient();
        $data = $result = $client->coins()->getMarkets('usd', ['per_page' => 100, 'page' => $page]);
        $global = Http::get('https://api.coingecko.com/api/v3/global')->json();

        return view('exchange.markets', compact('data', 'global'));
    }

    public function marketcoin($coin) {
        $client = new CoinGeckoClient();
        $response = Http::get('https://api.coingecko.com/api/v3/coins/'.$coin)->json();
        $global = Http::get('https://api.coingecko.com/api/v3/global')->json();
        $response = $result = $client->coins()->getCoin($coin);
        // dd($response);
        return view('exchange.coin', compact('response', 'global'));
    }

    // News function
    public function news() {
        $posts = News::orderBy('created_at', 'desc')->get();
        $tags = Tag::all();
        // dd($posts);

        return view('news.index', compact('posts', 'tags'));
    }

    public function showNews($id) {
        $post = News::where('id', '=', $id)->get();
        $tags = Tag::all();
        $tagId = $post->pluck('tag_id');
        $related = News::where('tag_id', $tagId->all())->orderBy('created_at', 'asc')->get();
        // dd($related);
        return view('news.show', compact('post', 'tags', 'related'));
    }

    
    // public function 
}