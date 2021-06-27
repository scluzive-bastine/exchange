@extends('layouts.main')

@section('content')

<div class="container">
    <div class="toast-container">
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="container mt-16">
                <div class="bg-white text-gray-600 rounded exchange--container shadow-lg">
                    <h1>Please <span class="section__change--title">Send</span> the funds you would like to exchange</h1>
                    <div class="send__amount--container">
                        <div class="mt-3">
                            <h6  class="font-bold text-2xl text-gray-800"> Send Amount</h6>
                            <span class="sendAmount text-gray-800" style="font-size: 1.4rem"> {{ $sendAmount }} </span> <span class="sendCoin uppercase text-gray-800" style="font-size: 1.4rem"> {{ $response['fromCurrency'] }} </span>
                            <h6>To this Address</h6>
                            <input type="hidden" class="transactionId" name="" value="{{ $response['id'] }}">
                        </div>
                        {{-- <div class="send__address--container">
                            <div class="sendAddress text-2xl font-semibold text-gray-800 coinSendAddress" id="CopyMeID"> 0x7Bf5bfd4B21403497FCBaeCeb6446E4dafcF9601 </div>
                        </div> --}}
                        <div class="input-group mb-3">
                            <input type="text" class="form-control coinSendAddress px-0" value="{{ $response['payinAddress'] }}" style="font-size:25px;" readonly>
                            <div class="input-group-append btnCopyAddress">
                              <span class="input-group-text bg-white border-0 cursor-pointer">
                                <i class="fas fa-copy"></i>
                              </span>
                            </div>
                        </div>
                    </div>
                    <div class="send__warning mt-2 px-2 py-2 bg-gray-300 rounded lg:w-75 sm:w-100">
                        <span>Please be careful not send your <span> {{ $response['fromCurrency'] }} </span> from a smart contract</span>
                    </div>
                    <div class="waiting__transaction--stages flex mt-4">
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
                    </div>
                    <div class="receiving__amount--container mt-4">
                       <div>
                           <h6>You Get</h6>
                           ≈ <span class="recieveAmount mr-1">{{ $response['amount'] }}</span> <span class="recieveCoin uppercase"> {{ $response['toCurrency'] }} </span>
                       </div>
                       <div class="mt-3">
                           <h6>Recipient Wallet</h6>
                           <h3 class=" mt-1 text-break" style="font-size: 1.2rem"> {{ $response['payoutAddress'] }} </h3>
                       </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="notify__via-email--container">
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-white rounded mt-16 px-4 py-4 shadow-lg">
                <div class="completion__check--stage">
                    <div class="flex stage--one mb-3">
                        <h6 class="mb-0 mt-3 font-medium">Enter Exchange Details</h6>
                        <span class="rounded-full ml-auto mr-4 text-center mt-1 stage--one__check check--icon">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                    <div class="flex stage--two mb-3">
                        <h6 class="mb-0 mt-3 font-medium">Confirm Exchange Details</h6>
                        <span class="rounded-full ml-auto mr-4 text-center mt-1 stage--two__check  check--icon">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                    <div class="flex stage--three mb-3">
                        <h6 class="mb-0 mt-3 font-medium">Complete Exchange</h6>
                        <span class="rounded-full ml-auto mr-4 text-center mt-1 stage--three__check  check--icon check--active">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
    
<script type="text/javascript">


var btnCopyAddress = document.querySelector('.btnCopyAddress');
var transactionId = $('.transactionId').val().trim();

var toast = `
        <div class="toast ml-auto" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="true" data-delay="5000">
            <div class="toast-header">
              <i class="far fa-check-circle mr-1 text-green-500" style="color: #009900; font-size: 1.5rem"></i>
              <strong class="mr-auto" style="font-size: 1.1rem; color: #009900;"></strong>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
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
    $('.toast-container').append(toast);
    $('.toast').toast('show');
});

var transactionStatus;
var waitingChecked = `<div class="rounded-full status__checked waiting-checked"><i class="fas fa-check"></i></div>`;
var waitingFailed = `<div class="rounded-full status__failed"><i class="fas fa-times"></i></div>`;
var confirmingSpinner = `<div class="spinner-grow confirming-spinner text-teal-500" role="status"><span class="sr-only">Loading...</span></div>`;
var exchangingSpinner = `<div class="spinner-grow exchanging-spinner text-teal-500" role="status"><span class="sr-only">Loading...</span></div>`;
var sendingSpinner = `<div class="spinner-grow exchanging-spinner text-teal-500" role="status"><span class="sr-only">Loading...</span></div>`;



function transactStatus(transactionId, transactionStatus) {
    $.ajax({
        type: 'GET',
        url: `https://changenow.io/api/v1/transactions/${transactionId}/{{ env('CHANGENOW_KEY')}}`,
        success: function(data) {
            transactionStatus = data;
            status = transactionStatus['status'];
            // status = 'failed';
            if(status == 'waiting') {
                // $('.waiting-checked').remove();
            } else if(status == 'confirming') {
                $('.waiting-spinner').hide();
                $('.waiting').append(waitingChecked);
                $('.confirming').append(confirmingSpinner);
                $('.confirming-container').remove();
            } else if(status == 'exchanging') {
                $('.waiting-spinner').hide();
                $('.waiting').append(waitingChecked);
                $('.confirming-spinner').remove();
                $('.confirming').append(waitingChecked);
                $('.confirming-container').remove();
                $('.exchanging-container').remove();
                $('.exchanging').append(exchangingSpinner);
            } else if(status == 'sending') {
                $('.waiting-spinner').hide();
                $('.waiting').append(waitingChecked);
                $('.confirming-spinner').remove();
                $('.confirming-container').remove();
                $('.confirming-container').remove();
                $('.confirming').append(waitingChecked);
                $('.exchanging-container').remove();
                $('.exchanging').append(waitingChecked);
                $('.sending-container').remove();
                $('.sending').append(sendingSpinner);
            } else if (status == 'finished') {
                $('.waiting-spinner').hide();
                $('.waiting').append(waitingChecked);
                $('.confirming-spinner').remove();
                $('.confirming-container').remove();
                $('.confirming-container').remove();
                $('.confirming').append(waitingChecked);
                $('.exchanging-container').remove();
                $('.exchanging').append(waitingChecked);
                $('.sending-container').remove();
                $('.sending').append(waitingChecked);
            } else if(status == 'failed') {
                $('.waiting-spinner').hide();
                $('.waiting').append(waitingFailed);
                $('.confirming-container').remove();
                $('.confirming').append(waitingFailed);
                $('.exchanging-container').remove();
                $('.exchanging').append(waitingFailed);
                $('.sending-container').remove();
                $('.sending').append(waitingFailed);

            }
            console.log(status);
            // $('.waiting').text(transactionStatus['status']);
            // console.log(transactionStatus['status'])
            // console.log(transactionStatus);
        },
        error: function(xhr, status, error) {
            var errorMessage = xhr.status + ': ' + xhr.statusText
            console.log('something went wrong');
        }
    });
};

transactStatus(transactionId, transactionStatus);

</script>

@endpush