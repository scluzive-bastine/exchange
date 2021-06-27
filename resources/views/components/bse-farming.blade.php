@extends('layouts.dapp')

@section('content')
    <section class="section section-header bg-primary text-white pb-md-10">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-6">
                    <h1 class="display-2 mb-4">Bse<span class="text-secondary-app font-weight-bold"> Farming</span>
                    </h1>
                    <p class="lead text-gray-200 mb-1">With Impact, you'll get fast, simple, secure messaging and calling for free*, available on phones all over the world.</p>
                    <small class="text-light-gray">* Data charges may apply. Contact your provider for details.</small>
                    <div class="d-flex flex-wrap mt-4 mt-lg-5">
                        <a href="https://farm.buy-sell.io" class="btn btn-tertiary mb-3 mt-2 mr-2 mr-md-3 animate-up-2">
                            <span class="fas fa-coins mr-2"></span> Start Farming
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <img class="d-none d-md-inline-block" src="/images/farming.svg" alt="xBSE farming">
                </div>
            </div>
        </div>
        <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2">
        <svg class="fill-white" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 43.4" style="enable-background:new 0 0 1920 43.4;" xml:space="preserve">
            <path d="M0,23.3c0,0,405.1-43.5,697.6,0c316.5,1.5,108.9-2.6,480.4-14.1c0,0,139-12.2,458.7,14.3 c0,0,67.8,19.2,283.3-22.7v35.1H0V23.3z"></path>
        </svg>
        </figure>
    </section>
    <section class="section section-lg bg-primary py-sm-0" style="margin-bottom: -10rem;">
        <div class="container z-2 mt-sm-n6 mt-md-n7">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card bg-white border-light text-gray p-4">
                        <div class="card-header bg-white border-0 pb-0">
                            <h2 class="h5 m-0">xBSE-ETH UNI LP</h2>
                        </div>
                        <div class="card-body">
                            <p>
                                farm description / content
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card bg-white border-light text-gray p-4">
                        <div class="card-header bg-white border-0 pb-0">
                            <h2 class="h5 m-0">xBSE-BSE UNI LP</h2>
                        </div>
                        <div class="card-body">
                            <p>
                                farm description / content
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card bg-white border-light text-gray p-4">
                        <div class="card-header bg-white border-0 pb-0">
                            <h2 class="h5 m-0">BSE-ETH UNI LP</h2>
                        </div>
                        <div class="card-body">
                            <p>
                                farm description / content
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section section-lg bg-white" style="padding-top: 17rem; ">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-6">    
                    <div class="d-flex flex-wrap justify-content-lg-start">
                        <h2 class="h3 text-center text-lg-left mb-5">xBSE Farming</h2>
                    </div>  
                    <div>
                        <p>
                            How it works
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <img class="d-none d-lg-inline-block" src="/images/team_building.svg" alt="pool contents">
                </div>
            </div>
        </div>
    </div>
    <section class="section bg-secondary text-white">
        <div class="container text-center">
            <h4 class="h1">Total xBSE sSupply</h4>
            <h1 class="mt-4 font-bold">$12,121</h1>
        </div>
    </section>
    <section class="section bg-white">
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center">
                <h2 class="display-3 mb-4">Facts & Questions</h2>
                <p class="lead">Have a question? Read through our FAQ below. If you can't find an answer, <br class="d-none d-lg-inline-block"> please email our support team. We're here to help.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <!--Accordion-->
                <div class="accordion" id="accordionExample">
                    <div class="card border-light mb-0">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block d-flex justify-content-between text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="h6 mb-0 font-weight-bold">What is the purpose of a FAQ?</span>
                                    <span class="icon"><span class="fas fa-plus"></span></span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="mb-0">
                                    At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also
                                    helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                                </p>                           
                            </div>
                        </div>
                    </div>
                    <div class="card border-light mb-0">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block d-flex justify-content-between text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="h6 mb-0 font-weight-bold">What is a FAQ document?</span>
                                    <span class="icon"><span class="fas fa-plus"></span></span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="mb-0">
                                    At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also
                                    helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                                </p>                           
                            </div>
                        </div>
                    </div>
                    <div class="card border-light mb-0">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block d-flex justify-content-between text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="h6 mb-0 font-weight-bold">What are the top 10 interview questions?</span>
                                    <span class="icon"><span class="fas fa-plus"></span></span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="mb-0">
                                    At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also
                                    helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                                </p>                           
                            </div>
                        </div>
                    </div>
                    <div class="card border-light mb-0">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block d-flex justify-content-between text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="h6 mb-0 font-weight-bold">Cookies?</span>
                                    <span class="icon"><span class="fas fa-plus"></span></span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="mb-0">
                                    At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also
                                    helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                                </p>                           
                            </div>
                        </div>
                    </div>
                    <div class="card border-light mb-0">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block d-flex justify-content-between text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span class="h6 mb-0 font-weight-bold">Copyright Notice</span>
                                    <span class="icon"><span class="fas fa-plus"></span></span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="mb-0">
                                    At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also
                                    helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                                </p>                           
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Accordion-->
            </div>
        </div>
    </section>
@endsection