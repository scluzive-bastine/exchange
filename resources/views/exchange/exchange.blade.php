@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="toast-container">
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="container mt-16">
                    <div class="bg-white text-gray-600 rounded exchange--container shadow-lg">
                        <h1>Please <span class="section__change--title">enter</span> the details of your transaction</h1>
                        <div class="confirm__section--one">
                            <div class="exchange__confirm--header mt-2">
                            </div>
                            <form action="">
                                <div class="exchange__input--calculator flex mt-3 rounded px-3">
                                    <div class="bs--input rounded-tl-md rounded-bl-md">
                                        <label class="input__amount--label mb-0" for="amount">You Send</label>
                                        <input class="form-control bs__input--amount mt-1" value="{{$sendAmount}}" id="sendAmount" name="sendAmount" type="text" autocomplete="off" readonly>
                                    </div>  
                                    <div class="select__coin-option send__coin--option flex px-1 rounded-tr-md rounded-br-md" id="showCoin">
                                        {{-- <button class="btn btn-primary">BTC <i class="fa fa-dropbox    "></i> </button> --}}
                                        <div class="flex coin__symbol--icon justify-content-center">
                                            <img src=" {{ $sendCoinImage }} " class="img-fluid coin__send--icon send--icon ml-4" style="width: 15px; height: 15px;" alt="">
                                            <span class="coin__send--symbol send--symbol ml-2"> {{ $sendCoin }} </span>
                                            <small class="coin__send--name ml-1" style="font-size: .6rem"></small>
                                            <input type="hidden" id="sendCoin" name="sendCoin" value=" {{ $sendCoin }} ">
                                        </div>
                                        {{-- <div class="ml-auto mr-2" style="padding-top: 1.2rem">
                                            <span>
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </div> --}}
                                    </div>  
                                </div>
                                {{-- price informations --}}
                                <div class="exchange__calculator--fields flex mt-3 px-4">
                                    <ul class="nav flex-column">
                                        <li class="nav-item"> <small class="error text-red-500 font-bold"></small> </li>
                                        <li class="nav-item"> <small class="sendMin font-bold text-teal-600"></small> </li>
                                        <li class="nav-item">  
                                            <span class="calcSend"></span> {{ $sendAmount }} <span class="font-bold uppercase sendCoin"> {{ $sendCoin}} </span> ~ 
                                            <div class="spinner-border text-primary" style="display: none; width: 1rem; height: 1rem;" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <span class="expectedAmount"></span> <span class="font-bold uppercase recCoin"> {{$recieveCoin}} </span> 
                                        </li>
                                        <li class="nav-item font-bold">No extra fees</li>
                                    </ul>
                                    <div class="ml-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            width="30" height="30"
                                            viewBox="0 0 172 172"
                                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#375d8d"><path d="M154.08333,118.25l-32.25,35.83333l-32.25,-35.83333h21.51075v-57.33333h21.5v57.33333zM132.61558,17.91667h-21.5v14.33333h21.5zM132.58333,39.41667h-21.5v14.33333h21.5zM17.91667,53.75h21.51075v57.33333h21.5v-57.33333h21.48925l-32.25,-35.83333zM39.44892,154.08333h21.5v-14.33333h-21.5zM60.91667,118.25h-21.5v14.33333h21.5z"></path></g></g></svg>
                                    </div>
                                </div>
                                {{-- ./ price informations --}}
                                <div class="exchange__input--calculator flex mt-3 rounded px-3">
                                    <div class="bs--input rounded-tl-md rounded-bl-md">
                                        <label class="input__amount--label mb-0" for="amount">You Recieve</label>
                                    <input class="form-control bs__input--amount mt-1" value="" type="text" id="recieveAmount" autocomplete="off" readonly>
                                    </div>  
                                    <div class="select__coin-option recieve__coin--option flex px-1rounded-tr-md rounded-br-md">
                                        {{-- <button class="btn btn-primary">BTC <i class="fa fa-dropbox    "></i> </button> --}}
                                        <div class="flex coin__symbol--icon justify-content-center">
                                            <img src=" {{ $recieveCoinImage }} " class="img-fluid coin__send--icon recieve--icon ml-4" style="width: 15px; height: 15px;" alt="">
                                            <span class="coin__send--symbol recieve--symbol ml-2"> {{ $recieveCoin }} </span>
                                            <small class="coin__recieve--name ml-1" style="font-size: .6rem"></small>
                                            <input type="hidden" id="recieveCoin" name="recieveCoin" value=" {{ $recieveCoin }} ">
                                        </div>
                                        {{-- <div class="ml-auto mr-1" style="padding-top: 1.2rem">
                                            <span>
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </div> --}}
                                    </div>                          
                                </div>
                                <div class="recipient__address--container mt-4">
                                    <div class="flex">
                                        <h6>Recipient Wallet</h6>
                                        <h6 class="ml-auto">
                                            <a href="#">Don't have a wallet yet?</a>
                                        </h6>
                                    </div>
                                    <div class="input__box-container receiveAddress mt-2 px-2 rounded flex">
                                        <div class="" style="width: 95%">
                                            <label for="address" class="mb-0">Enter the <span class="coinRec uppercase">{{ $recieveCoin }} </span> address</label>
                                            <input type="text" class="form-control ex__input--address" name="recieveAddress" id="ex__input--address" value="">
                                        </div>
                                        <span class="mt-3 ml-auto input__check" style="font-size: 1.2rem">
                                            <i class="far fa-check-circle text-teal-500 check" style="display: none" aria-hidden="true"></i>
                                            <i class="far fa-times-circle text-red-500 checkError" style="display: none"></i>
                                        </span>
                                    </div>
                                </div>
                                {{-- Refund Address --}}
                                <div class="input__box-container refund__box--container mt-2 px-2 rounded flex">
                                    <div class="" style="width: 95%">
                                        <label class="refundLabel" for="address" class="mb-0" style="margin-bottom: 0!important;">Enter your <span class="sendCoin uppercase">{{$sendCoin}} </span>address in case of refund</label>
                                        <div class="mt-0 text-red-500 text-small addressError"></div>
                                        <input type="text" class="form-control ex__input--address refundAddress" name="refundAddress" value="">
                                    </div>
                                    <span class="mt-3 ml-auto input__check" style="font-size: 1.2rem">
                                        <i class="far fa-times-circle text-red-500 refundCheckError" style="display: none"></i>
                                    </span>
                                </div>
                                {{-- ./ Refund Address --}}
                            </form>
                            <div class="mt-2">
                                <button type="button" class="btn btn-primary btn-custom btn-lg px-5 next">Next</button>
                            </div>
                        </div>
                        <div class="confirm__section--two mt-4" style="display: none">
                            {{-- <form action="{{ route('exchange.confirm') }} " method="POST" id="instantForm"> --}}
                                {{--  --}}
                                @csrf
                                @method('POST')
                                <form>
                                <div class="send__coin--amount">
                                    <h6>You Send</h6>
                                    <h1 class="font-bold text-gray-900 text-3xl mt-1 mb-1"> <span class="coinSendAmount"> {{$sendAmount}} </span> <span class="coinSendSymbol uppercase"> {{ $sendCoin }} </span> </h1>
                                    <h6>
                                        <span class="coinSendAmount">{{$sendAmount}}</span> <span class="coinSendSymbol uppercase"> {{$sendCoin}} </span> ≈ <span class="coinRecieveAmount"></span> <span class="coinRecieveSymbol uppercase"> {{ $recieveCoin }} </span>
                                    </h6>
                                    <input type="hidden" name="sendAmount" value="{{$sendAmount}}">
                                    <input type="hidden" name="sendCoin" value="{{$sendCoin}}">
                                </div>
                                <div class="recieve__coin--amount mt-4">
                                    <h6>You Get</h6>
                                    <h1 class="font-bold text-gray-900 text-3xl mt-1 mb-1"> ≈ <span class="coinRecieveAmount"></span> <span class="coinRecieveSymbol uppercase"> {{ $recieveCoin }} </span> </h1>
                                    <span class="recieveAddress text-break"></span>
                                    <input type="hidden" name="recieveCoin" value="{{ $recieveCoin }}">
                                    <input type="hidden" id="inputRecieveAmount" name="recieveAmount" value="">
                                    <input type="hidden" id="inputRecieveAddress" name="recieveAddress" value="">
                                    <input type="hidden" id="inputRefundAddress" name="refundAddress" value="">
                                </div>
                                <div class="extimated__arrival--container mt-4">
                                    <h6>Estimated Arrival</h6>
                                    <span>≈ <span class="arrivalTime"></span> minutes</span>
                                </div>
                                <div class="policy__container--approval mt-4">
                                    <div class="flex">
                                        <input type="checkbox" class="mt-1 mr-2" name="" id="">
                                        <span>I've read and accepted the <a href="#">terms and conditions</a> of Buy-sell</span>
                                    </div>
                                </div>
                                <div class="confirm__webite mt-4 bg-gray-200 px-3 py-3 rounded">
                                    <h6>Make sure you're visiting</h6>
                                    <div class="bg-white px-2 py-2 flex mt-1">
                                        <h6>
                                            <span class="font-bold"> <i class="fa fa-lock text-green-500" aria-hidden="true"></i>  Secure | https://buy-sell.io</span>
                                        </h6>
                                    </div>
                                </div>
                            </form>
                            <div class="confirm__button mt-4 flex">
                                {{-- <button type="submit" class="btn btn-primary btn-confirm-transaction lg:px-16 sm:px-8 py-2 btn-confirm">Confirm</button> --}}
                                <button class="btn btn-primary btn-confirm-transaction btn-custom lg:px-16 sm:px-8 py-2 btn-confirm">
                                    <div class="spinner-border confirmLoader" style="display: none; width: 1rem; height: 1rem; color:#fff!important" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    Confirm
                                </button>
                                <button class="btn btn-outline-primary btn-custom-outline lg:px-5 sm:px-4 ml-4">Back</button>
                            </div>
                        </div>
                        <div class="confirm__section--three" style="display: none">
                            <div class="send__amount--container">
                                <div class="mt-3">
                                    <h6  class="font-bold text-2xl text-gray-800"> Send Amount</h6>
                                    <span class="sendAmount text-gray-800" style="font-size: 1.4rem"> {{ $sendAmount }} </span> <span class="sendCoin uppercase text-gray-800" style="font-size: 1.4rem"> {{ $sendCoin }}</span>
                                    <h6>To this Address</h6>
                                    <input type="hidden" class="transactionId" name="" value="">
                                </div>
                                {{-- <div class="send__address--container">
                                    <div class="sendAddress text-2xl font-semibold text-gray-800 coinSendAddress" id="CopyMeID"> 0x7Bf5bfd4B21403497FCBaeCeb6446E4dafcF9601 </div>
                                </div> --}}
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control coinSendAddress px-0" value="" style="font-size:25px;" readonly>
                                    <div class="input-group-append btnCopyAddress">
                                      <span class="input-group-text bg-white border-0 cursor-pointer">
                                        <i class="fas fa-copy"></i>
                                      </span>
                                    </div>
                                </div>
                            </div>
                            <div class="send__warning mt-2 px-2 py-2 bg-gray-300 rounded lg:w-75 sm:w-100">
                                <span>Please be careful not send your <span> money </span> from a smart contract</span>
                            </div>
                            {{-- <div class="waiting__transaction--stages flex mt-4">
                                <span class="mr-2 waiting">
                                    <div class="spinner-grow waiting-spinner text-teal-500" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </span>
                                <hr class="mt-2 mr-2 w-32">
                                <span class="mr-2 confirming">
                                    <div class="bg-gray-200 rounded-full transaction__stages--container confirming-container"></div>
                                </span>
                                <hr class="mt-2 mr-2 w-32">
                                <span class="mr-2 exchanging">
                                    <div class="bg-gray-200 rounded-full transaction__stages--container exchanging-container"></div>
                                </span>
                                <hr class="mt-2 mr-2 w-32">
                                <span class="sending">
                                    <div class="bg-gray-200 rounded-full transaction__stages--container sending-container"></div>
                                </span>
                            </div>
                            <div class="flex">
                                <span class="w-32">Awaiting Payment</span>
                                <span class="ml-1 w-32">Confirming</span>
                                <span class="ml-2 w-32 text-center">Exchanging</span>
                                <span class="ml-5 w-32 text-center">Sending</span>
                            </div> --}}
                            <div class="text-center mt-4">
                                <h6 class="mb-1">Processing Transaction</h6>
                                {{-- <div class="spinner-grow text-teal-500 text-2xl" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div> --}}
                                <div class="lds-ripple"><div></div><div></div></div>
                                <div class="statusText"></div>
                            </div>
                            <input type="hidden" class="status" name="" value="">
                            <div class="receiving__amount--container mt-4">
                               <div>
                                   <h6>You Get</h6>
                                   ≈ <span class="recieveAmount mr-1"></span> <span class="recieveCoin uppercase">  </span>
                               </div>
                               <div class="mt-3">
                                   <h6>Recipient Wallet</h6>
                                   <h3 class="recipientWallet mt-1 text-break" style="font-size: 1.2rem"> </h3>
                               </div>
                            </div>
                        </div>
                        <div class="loader__conatiner-blur" style="display: none">
                            <div class="spinner-grow text-teal-500 text-2xl" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('exchange.sidebar')
        </div>
    </div>
    <form action="" id="exchangeSuccessfulForm" method="POST">
        @csrf
        @method('POST')
        <input type="hidden" name="transactionId" id="seTransactionId">
        <input type="hidden" name="sendCoin" id="seSendCoin">
        <input type="hidden" name="sendCoinImage" id="seCoinImage">
        <input type="hidden" name="recieveCoin" id="seRecieveCoin">
        <input type="hidden" name="recieveCoinImage" id="seRecieveCoinImage">
        <input type="hidden" name="sendAmount" id="seSendAmount">
        <input type="hidden" name="recieveAmount" id="seRecieveAmount">
        <input type="hidden" name="coinSendAddress" id="seCoinSendAddress">
        <input type="hidden" name="coinRecieveAddress" id="seCoinRecieveAddress">
    </form>
@endsection

@push('scripts')
{{-- 1dyJj9FwxhcWffEuoEsuNXkjhf79QVDwP --}}
    <script type="text/javascript">
        var next =  document.querySelector('.next');
        var confirm = document.querySelector('.btn-confirm');
        // var exAddress = document.querySelector('.ex__input--address');
        var exAddress = $('#ex__input--address');
        var refAddress = $('.refundAddress');
        var firstSection = $('.confirm__section--one');
        var secondSection = $('.confirm__section--two');
        var lastSection = $('.confirm__section--three');
        var checked = $('.input__check');
        var inputContainer = $('.receiveAddress');
        var stageOne = $('.stage--one__check');
        var stageTwo = $('.stage--two__check');
        var stageThree = $('.stage--three__check');
        var transactionId = '12wareaer12e34';


        // Ajax request variables
        var sendAmount = $('#sendAmount').val().trim();
        var send = $('#sendCoin').val().trim();
        var rec = $('#recieveCoin').val().trim();
        var recieveAddress = $('#inputRecieveAddress').val().trim();
        var refundAddress = $('#inputRefundAddress').val().trim();
        var exchangeData = {};
        var successfulExchange = {};

        // $('.ex__input--address').val()
        $('[data-toggle="tooltip"]').tooltip();
        next.disabled = 'true';
        exAddress.keyup(function() {
            if(this.value.length >= 16) {
                // console.log('not empty')
                $('.next').prop('disabled', false)
                inputContainer.addClass('input__container--success');
                inputContainer.removeClass('input__container--error');
                $('.checkError').hide();
                $('.check').show();
                var recieveAddress = $('#ex__input--address').val().trim();
                $('.recieveAddress').text(recieveAddress);
                $('#inputRecieveAddress').val(recieveAddress);
                exchangeData.address = recieveAddress;
            } else {
                inputContainer.removeClass('input__container--success');
                inputContainer.addClass('input__container--error');
                $('.check').hide();
                $('.checkError').show();
                next.disabled = 'true';
            }
        });

        refAddress.keyup(function() {
            var refundAddress = $('.refundAddress').val().trim();
            $('#inputRefundAddress').val(refundAddress);
            exchangeData.refundAddress = refundAddress;
            $('.addressError').hide();
            $('.refundCheckError').hide();
            $('.refund__box--container').removeClass('refund__address--error');

        });

        // Assigning values to the exchange Data object
        exchangeData.from = send;
        exchangeData.to = rec;
        exchangeData.amount = sendAmount;
        // Assigning values to the exchange Data object

        function getPrice(sendAmount, send, rec) {
            $.ajax({
                type: 'GET',
                url: `https://changenow.io/api/v1/exchange-amount/${sendAmount}/${send}_${rec}?api_key={{{ env('CHANGENOW_KEY')}}}`,
                success: function(data) {
                    currencyEstimate = data;
                    $('.expectedAmount').text(currencyEstimate['estimatedAmount']);
                    $('#recieveAmount').val(currencyEstimate['estimatedAmount']);
                    $('#inputRecieveAmount').val(currencyEstimate['estimatedAmount']);
                    $('.coinRecieveAmount').text(currencyEstimate['estimatedAmount']);
                    $('.arrivalTime').text(currencyEstimate['transactionSpeedForecast']);
                    // console.log(data)
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText
                    console.log('something went wrong');
                },
                complete: function(data) {
                    // setTimeout(getPrice(sendAmount, send, rec), 100000);
                }
            });
        }

        setTimeout(getPrice(sendAmount, send, rec), 100000);


        next.addEventListener('click', function(){
            // firstSection.remove();
            firstSection.hide();
            secondSection.fadeIn('slow');
            // stageOne.removeClass('check--active');
            stageTwo.addClass('check--active');
        });

        confirm.addEventListener('click', function() {
            // checkAddress(send, rec, recieveAddress, refundAddress, sendAmount);
            // console.log(exchangeData);
            $('.confirmLoader').show();
            checkAddress();
        });


        function checkAddress() {
            $.ajax({
                type: 'POST',
                url: `https://changenow.io/api/v1/transactions/{{ env('CHANGENOW_KEY')}}`,
                dataType: "json",
                contentType: "application/json",
                data: JSON.stringify(exchangeData),
                success: function(data) {
                    // console.log(data);
                    var Id = data['id'];
                    $('.transactionId').val(Id);
                    thirdSection();

                },
                error: function(e) {
                    var refundError = `<span> Enter a valid ${send} Address </span>`;
                    console.log(e['responseJSON']['message']);
                    lastSection.hide()
                    secondSection.hide();
                    firstSection.fadeIn('slow');
                    stageOne.addClass('check--active');
                    stageTwo.removeClass('check--active');
                    stageThree.removeClass('check--active');
                    $('.refund__box--container').addClass('refund__address--error');
                    $('.refundCheckError').show();
                    $('.addressError').show();
                    $('.addressError').text(e['responseJSON']['message']);
                },

            });

            function thirdSection() {
                var expectedAmount = $('.expectedAmount').text();
                firstSection.hide();
                secondSection.hide();

                var loaderSection = $('.loader__conatiner-blur');
                loaderSection.show();
                lastSection.fadeIn('slow');
                loaderSection.hide();

                // stageOne.removeClass('check--active');
                // stageTwo.removeClass('check--active');
                stageThree.addClass('check--active');

                var btnCopyAddress = document.querySelector('.btnCopyAddress');
                var transactionId = $('.transactionId').val().trim();

                var toast = `
                        <div class="toast ml-auto" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="true" data-delay="5000">
                            <div class="toast-header">
                            <i class="far fa-check-circle mr-1 text-green-500" style="color: #009900; font-size: 1.5rem"></i>
                            <strong class="mr-auto" style="font-size: 1.1rem; color: #009900;"></strong>
                            <button type="button" class="ml-2 mb-1 close toastClose" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="toast-body">
                            Address Copied
                            </div>
                        </div>`;


                btnCopyAddress.addEventListener('click', function() {
                    var inputSendAddress =  document.querySelector('.coinSendAddress');

                    inputSendAddress.select();
                    inputSendAddress.setSelectionRange(0, 99999); /*For mobile devices*/
                    var address = document.execCommand('copy');
                    var toastEle = document.querySelector('.toast');

                    if(toastEle) {
                        $('.toast').toast('hide');
                    }
                    $('.toast-container').append(toast);
                    $('.toast').toast('show');
                    // var closeToast = document.querySelector('.toastClose');
                    // closeToast.addEventListener('click', function() {
                    //     $('.toast').toast('dispose');
                    // });

                });


                var transactionStatus;
                var status;



                function transactStatus(transactionId, transactionStatus) {
                    $.ajax({
                        type: 'GET',
                        url: `https://changenow.io/api/v1/transactions/${transactionId}/{{ env('CHANGENOW_KEY')}}`,
                        success: function(data) {
                            transactionStatus = data;
                            // console.log(transactionStatus);
                            $('.coinSendAddress').val(transactionStatus['payinAddress']);
                            $('.recieveAmount').text(transactionStatus['expectedReceiveAmount']);
                            $('.recieveCoin').text(transactionStatus['toCurrency']);
                            $('.recipientWallet').text(transactionStatus['payoutAddress']);
                            
                            successfulExchange.transactionId = transactionId;
                            successfulExchange.sendCoin = transactionStatus['fromCurrency'];
                            successfulExchange.sendCoinImage = `{{ $sendCoinImage }}`;
                            successfulExchange.recieveCoinImage = `{{ $recieveCoinImage }}`;
                            successfulExchange.recieveCoin = transactionStatus['toCurrency'];
                            successfulExchange.sendAmount = transactionStatus['expectedSendAmount'];
                            successfulExchange.recieveAmount = transactionStatus['expectedReceiveAmount'];
                            successfulExchange.coinSendAddress = transactionStatus['payinAddress'];
                            successfulExchange.coinRecieveAddress = transactionStatus['payoutAddress'];
                            // successfulExchange._token = `{{ csrf_token() }}`;
                            $('#seTransactionId').val(successfulExchange.transactionId);
                            $('#seSendCoin').val(successfulExchange.sendCoin);
                            $('#seCoinImage').val(successfulExchange.sendCoinImage);
                            $('#seRecieveCoin').val(successfulExchange.recieveCoin);
                            $('#seRecieveCoinImage').val(successfulExchange.recieveCoinImage);
                            $('#seSendAmount').val(successfulExchange.sendAmount );
                            $('#seRecieveAmount').val(successfulExchange.recieveAmount);
                            $('#seCoinSendAddress').val(successfulExchange.coinSendAddress);
                            $('#seCoinRecieveAddress').val(successfulExchange.coinRecieveAddress);
                            // var f = $('#exchangeSuccessfulForm').serialize();
                            // console.log(f);

                            // status = transactionStatus['status'];
                            $('.status').val(transactionStatus['status']);
                            $('.statusText').text(transactionStatus['status']);
                            status = $('.status').val().trim();
                            // status = 'finished';
                            if(status == 'finished') {
                                transactionSuccessful(transactionId);
                            }   
                        },
                        error: function(xhr, status, error) {
                            var errorMessage = xhr.status + ': ' + xhr.statusText
                            console.log('something went wrong');
                        }
                    });
                };

                // transactStatus(transactionId, transactionStatus);

                setInterval(transactStatus, 7000, transactionId, transactionStatus);

                // status = $('.status').val().trim();
                // console.log(status);
                // exchangeStages(status);
                // var status = $('.status').val().trim();
                // status = 'finished';
                // setTimeout(() => 
                //     exchangeStages(status)
                // , 8000);
            }
            // exchangeStages(status)


            // function exchangeStages(status) {
            //     var waitingChecked = `<div class="rounded-full status__checked waiting-checked"><i class="fas fa-check"></i></div>`;
            //     var waitingFailed = `<div class="rounded-full status__failed"><i class="fas fa-times"></i></div>`;
            //     var confirmingSpinner = `<div class="spinner-grow confirming-spinner text-teal-500" role="status"><span class="sr-only">Loading...</span></div>`;
            //     var exchangingSpinner = `<div class="spinner-grow exchanging-spinner text-teal-500" role="status"><span class="sr-only">Loading...</span></div>`;
            //     var sendingSpinner = `<div class="spinner-grow exchanging-spinner text-teal-500" role="status"><span class="sr-only">Loading...</span></div>`;
            //     // status = $('.status').val().trim();
            //     // status = 'finished';

            //     console.log(status);
            //     if(status == 'waiting') {
            //         // $('.waiting-checked').remove();
            //     } else if(status == 'confirming') {
            //         $('.waiting-spinner').hide();
            //         $('.waiting').append(waitingChecked);
            //         $('.confirming').append(confirmingSpinner);
            //         $('.confirming-container').remove();
            //     } else if(status == 'exchanging') {
            //         $('.waiting-spinner').hide();
            //         $('.waiting').append(waitingChecked);
            //         $('.confirming-spinner').remove();
            //         $('.confirming').append(waitingChecked);
            //         $('.confirming-container').remove();
            //         $('.exchanging-container').remove();
            //         $('.exchanging').append(exchangingSpinner);
            //     } else if(status == 'sending') {
            //         $('.waiting-spinner').hide();
            //         $('.waiting').append(waitingChecked);
            //         $('.confirming-spinner').remove();
            //         $('.confirming-container').remove();
            //         $('.confirming-container').remove();
            //         $('.confirming').append(waitingChecked);
            //         $('.exchanging-container').remove();
            //         $('.exchanging').append(waitingChecked);
            //         $('.sending-container').remove();
            //         $('.sending').append(sendingSpinner);
            //     } else if (status == 'finished') {
            //         // $('.waiting-spinner').hide();
            //         // $('.waiting').append(waitingChecked);
            //         // $('.confirming-spinner').remove();
            //         // $('.confirming-container').remove();
            //         // $('.confirming-container').remove();
            //         // $('.confirming').append(waitingChecked);
            //         // $('.exchanging-container').remove();
            //         // $('.exchanging').append(waitingChecked);
            //         // $('.sending-container').remove();
            //         // $('.sending').append(waitingChecked);
            //         var url = ' {{ route('exchange.success') }} ';
            //         window.location = url;
            //     } else if(status == 'failed') {
            //         $('.waiting-spinner').hide();
            //         $('.waiting').append(waitingFailed);
            //         $('.confirming-container').remove();
            //         $('.confirming').append(waitingFailed);
            //         $('.exchanging-container').remove();
            //         $('.exchanging').append(waitingFailed);
            //         $('.sending-container').remove();
            //         $('.sending').append(waitingFailed);
            //     }
            // }

        }

        // sendCoin (string)
        // sendCoinImage (string)
        // recCoin (string)
        // recCoinImage (string)
        // transactionID
        // sendAmount $table->double('amount', 8, 8);
        // recieveAmount $table->double('amount', 8, 8);
        

        function transactionSuccessful(transactionId) {
            $.ajax({
                type: 'POST',
                url: '{{ route('exchange.success') }}',
                data: $('#exchangeSuccessfulForm').serialize(),
                success: function() {
                    console.log('success');
                    var url = ' {{ route('exchange.completed', ':id') }} ';
                    url = url.replace(':id', transactionId);
                    window.location = url;
                }, 
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText;
                    console.log(xhr);
                }
            });
        }
        // var expectedAmount = $('.expectedAmount').text();
        // console.log(expectedAmount);
    </script>
@endpush