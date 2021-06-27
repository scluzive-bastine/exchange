<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;



class NonCustodialExchangeController extends Controller
{
    // Exchange Page function
    public function exchange() {
        $client = new CoinGeckoClient();
        $data = $result = $client->coins()->getMarkets('usd', ['per_page' => 4, 'page' => 1]);
        $global = Http::get('https://api.coingecko.com/api/v3/global')->json();
        $availableCurriences = Http::get('https://changenow.io/api/v1/currencies?active=true&fixedRate=true')->json();

        return view('components.exchange', compact('availableCurriences', 'data'));
    }

    public function exchangeConfirmDetails(Request $request) {
        if($request->all()) {
            $sendAmount = $request->sendAmount;
            $sendCoin = $request->sendCoin;
            $sendCoinImage = $request->sendCoinImage;
            $recieveAmount = $request->recieveAmount;
            $recieveCoin = $request->recieveCoin;
            $recieveCoinImage = $request->recieveCoinImage;
        }

        return view('components.confirm-details', compact('sendAmount', 'sendCoin', 'recieveAmount', 'recieveCoin', 'sendCoinImage', 'recieveCoinImage'));
    }

    // Exchange Successful

    public function exchangeSuccessful(Request $request, Transaction $transaction) {
        $transaction->transaction_id = $request->transactionId;
        $transaction->send_coin = $request->sendCoin;
        $transaction->send_coin_image = $request->sendCoinImage;
        $transaction->rec_coin = $request->recieveCoin;
        $transaction->rec_coin_image = $request->recieveCoinImage;
        $transaction->send_amount = $request->sendAmount;
        $transaction->recieve_amount= $request->recieveAmount;
        $transaction->coin_send_address = $request->coinSendAddress; 
        $transaction->coin_recieve_address = $request->coinRecieveAddress; 
        $transaction->save();
        // return view('exchange.success');
    }

    public function exchangeCompleted($id) {
        $data = DB::table('transactions')->where('transaction_id', $id)->first();

        // dd($data);

        return view('components.success', compact('data'));
    }

}
