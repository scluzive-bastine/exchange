<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'UpdateController@index')->name('new.index');
// Route::get('/faq', 'UserController@faq')->name('user.faq');
// Route::get('/about-us', 'UserController@aboutUs')->name('user.about');
// Route::get('/markets', 'UserController@markets')->name('user.markets');
// Route::get('/market/{page?}', 'UserController@marketsPaginate')->name('user.marketsPaginate');
// Route::get('/news', 'UserController@news')->name('posts.index');
// Route::get('/news/{news?}', 'UserController@showNews')->name('posts.show');

// Route::get('/defi-exchange', 'UserController@defiExchange')->name('defi.exchange');

// Route::get('/bse-token', 'UserController@bseToken')->name('defi.token');
// Route::get('/staking', 'UserController@staking')->name('defi.staking');
// Route::get('/', 'UpdateController@index')->name('new.index');

// Route::get('/markets/{coin}', 'UserController@marketcoin')->name('user.marketcoin');

Route::get('/staking-dashboard', 'UserController@stakingDashboard')->name('staking.dashboard');


// ============================================== >

// NEW BS WEBSITE UPDATE
Route::get('/foo', function () {
    Artisan::call('storage:link');
});
Route::group(['prefix' => 'bse'], function () {
    // Route::get('/', 'UpdateController@index')->name('new.index');
    Route::get('/bs-exchange', 'NonCustodialExchangeController@exchange')->name('new.exchange'); 
    Route::get('/bs-pooled', 'UpdateController@pooled')->name('new.pooled');
    Route::get('/bs-assets-staking', 'UpdateController@assets')->name('new.assets');
    Route::get('/bs-classic-staking', 'UpdateController@classic')->name('new.classic');
    Route::get('/bs-governance', 'UpdateController@governance')->name('new.governance');
    Route::get('/bs-earn', 'UpdateController@earn')->name('new.earn');
    Route::get('/bs-borrow', 'UpdateController@borrow')->name('new.borrow');
    Route::get('/bs-nft', 'UpdateController@nft')->name('new.nft');
    Route::get('/bs-blog', 'UpdateController@blog')->name('new.blog');
    Route::get('/bs-post/{id?}', 'UpdateController@singlePost')->name('new.blog.post');
    Route::get('/farming', 'UpdateController@farming')->name('new.farming');


    // Custodial Exchange Routes
    Route::post('/custodial-confirm', 'NonCustodialExchangeController@exchangeConfirmDetails')->name('new.confirm.detials');
    Route::post('/bs-success', 'NonCustodialExchangeController@exchangeSuccessful')->name('bs.exchange.success');
    Route::get('/exchange-completed/{id?}', 'NonCustodialExchangeController@exchangeCompleted')->name('exchange.finished');

});


// ============================================== >



// 1606598357.jpeg



// Admin Page for setting minimum exchange
Route::resource('staking-min', 'Admin\StakingMinController')->middleware('auth');
Route::group(['prefix' => 'sdfgydjtydreetsr'], function () {
    Auth::routes([
        'register' => false
    ]);
    Route::post('login', 'LoginController@login')->name('admin.login');
    Route::group(['middleware' => 'auth','admin'], function () {
        Route::get('/home', 'LoginController@admin')->name('admin.index');
        Route::resource('faq', 'Admin\FaqController');
        Route::resource('about-us', 'Admin\AboutUsController');
        Route::resource('tags', 'Admin\TagsController');
        Route::resource('news', 'Admin\NewsController');

    });
});


// waigf@d3v3lop3r
// tiQcIDtv0E2x