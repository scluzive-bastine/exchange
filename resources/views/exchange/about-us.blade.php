@extends('layouts.main')

@section('content')
<div class="container">
    <div class="about-bg lg:pl-24 lg:pr-24 mt-10">
        <h2 class="text-center text-white font-bold text-4xl">About us</h2>
        <p class="text-center text-center font-normal text-2xl sm:text-gray-800 lg:text-gray-200 ">
            Buy-Sell is a Platform that are interested in giving you the best experience in cryptocurrency exchange
        </p>
    </div>
    <div class="mb-4 mt-20 py-4 px-4 bg-white rounded-lg shadow-lg">
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="mt-2">
                <img src="images/abt.svg" class="img-fluid" alt="">
            </div>
            <div class="mt-2">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora reiciendis, dolorem fugit expedita, q
                    uos quisquam similique officia, 
                    ullam numquam ratione doloremque quis repellat. Mollitia neque quos deserunt commodi possimus expedita!
                </p>
            </div>
        </div>
    </div>
    {{-- <div class="about lg:mt-56 sm:mt-10 mb-5">
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="mt-2">
                <div class="py-3 px-2 hover:bg-white hover:shadow-lg rounded-lg transition ease-in-out duration-200">
                    <h5 class="text-center text-blue-700 font-bold">No Registration</h5>
                    <div class="px-2 py-2">
                        <span class="w-full">
                           <img src="/images/authentication.png" class="ml-auto mr-auto" width="80%" alt="">
                        </span>
                    </div>
                    <p class="text-center text-gray-800 font-normal">
                        Exchange your currencies without registration, No personal info required, Completely Anonymous
                    </p>
                </div>
            </div>
            <div class="mt-2">
                <div class="py-3 px-2 hover:bg-white hover:shadow-lg rounded-lg transition ease-in-out duration-200">
                    <h5 class="text-center text-blue-700 font-bold">Easy to use</h5>
                    <div class="px-2 py-2">
                        <span>
                            <img src="/images/laptop-2.svg" class="ml-1 w-auto" alt="">
                        </span>
                    </div>
                    <p class="text-center text-gray-800 font-normal">
                        Buy-Sell provides effortless step-by-step exchange process and 24/7 support                        
                    </p>
                </div>
            </div>
            <div class="mt-2">
                <div class="py-3 px-2 hover:bg-white hover:shadow-lg rounded-lg transition ease-in-out duration-200">
                    <h5 class="text-center text-blue-700 font-bold">Low Fees</h5>
                    <div class="px-2 py-2">
                        <span class="w-full">
                           <img src="/images/fees.svg" alt="">
                        </span>
                    </div>
                    <p class="text-center text-gray-800 font-normal">
                        Our fees are very honest and low, every step is transparent. We show all the fees before you exchange
                    </p>
                </div>
            </div>
            <div class="mt-2">
                <div class="py-3 px-2 hover:bg-white hover:shadow-lg rounded-lg transition ease-in-out duration-200">
                    <h5 class="text-center text-blue-700 font-bold">Multiple Payment Method</h5>
                    <div class="px-2 py-2">
                        <span class="w-full">
                            <img src="/images/cards.svg" alt="">
                        </span>
                    </div>
                    <p class="text-center text-gray-800 font-normal">
                        Use Visa or MasterCard to easily exchange your fortune. We accept different payment methods
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection