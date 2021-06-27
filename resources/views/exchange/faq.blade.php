use App\Faq;
@extends('layouts.main')

@section('content')
<div class="container">
    <div class="faq-bg lg:pl-24 lg:pr-24 mt-10 sm:text-gray-800">
        <h2 class="text-center lg:text-white sm:text-blue-700 font-bold text-4xl">FAQ</h2>
        <p class="text-center text-center font-normal text-2xl sm:text-gray-800 lg:text-gray-200 ">
            Buy-Sell is a Platform that are interested in giving you the best experience in cryptocurrency exchange <br>
            Frequently asked questions
        </p>
    </div>
    <div class="faq lg:mt-32 sm:mt-4 mb-5 lg:mb-10">        
        @foreach ($faqs as $faq)
          <div class="accordion mt-2" id="accordionExample">
            <div class="card shadow" style="border-radius: 30px">
              <div class="card-header bg-white" id="headingOne">
                <h2 class="mb-0">
                  <div class="flex px-4 py-2" type="button" data-toggle="collapse" data-target="#faq{{$faq->id}}" aria-expanded="true" aria-controls="collapseOne">
                    <span class="ml-1 text-md uppercase text-blue-700 faq__header font-bold"> {{ $faq->title }} </span>
                    <span class="ml-auto text-lg">  <i class="fas fa-chevron-circle-down text-blue-800 transition-all duration-150"></i></span>
                    {{-- <i class="fas fa-angle-down"></i> --}}
                  </div>
                </h2>
              </div>
          
              <div id="faq{{$faq->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  {{ $faq->description }}
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>

@push('scripts')
    <script>
      function btnClick() {
        let btn = document.querySelector('.faq__header').parentElement.addEventListener('click', function() {
            document.querySelector('.fa-chevron-circle-down').classList.toggle('faq__icon--dropdown')
        });
      }
      btnClick()
      // for(var i = 0; i <= 5; i++) {
      //   btnClick()
      // }
    </script>
@endpush
@endsection
