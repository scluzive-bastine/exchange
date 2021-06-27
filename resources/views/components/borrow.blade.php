@extends('layouts.dapp')

@section('content')
<section class="section section-header pb-6 bg-primary text-white overflow-hidden z-2">
    <div class="container z-2">
        <div class="row justify-content-center mb-2">
            <div class="col-lg-8 col-xl-8">
                <div class="text-center">
                    <h1 class="display-2 mb-3">Borrowing is Coming Soon.</h1>
                    <p class="lead text-muted">The Page <span class="text-italic">under construction</span>. <br>
                </div>
            </div>
        </div>
    </div>
    <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2">
        <svg class="fill-white" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 43.4" style="enable-background:new 0 0 1920 43.4;" xml:space="preserve">
        <path d="M0,23.3c0,0,405.1-43.5,697.6,0c316.5,1.5,108.9-2.6,480.4-14.1c0,0,139-12.2,458.7,14.3 c0,0,67.8,19.2,283.3-22.7v35.1H0V23.3z"></path>
        </svg>
    </figure>
</section>
<div class="section section-md bg-white">
    <div class="container">
        <ul class="nav justify-content-center mb-4">
            <li class="nav-item">
                <a class="nav-link text-telegram h3 px-4" aria-label="instagram social link" href="#"><span class="fab fa-telegram"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-twitter  h3 px-4" aria-label="facebook social link" href="#"><span class="fab fa-twitter"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-github h3 px-4" aria-label="github social link" href="#"><span class="fab fa-github"></span></a>
            </li>
        </ul>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 text-center">
                <p class="h3 font-weight-normal lh-160">Exciting features on coming soon</p>
                <div class="mt-5">
                    <a href="{{ route('new.exchange') }}" class="btn btn-secondary animate-up-1">
                        Swap & Exchange
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection