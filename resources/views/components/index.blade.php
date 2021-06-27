@extends('layouts.dapp')

<style>
    .tweets__container {
        height: 500px;
        border-radius: 10px;
        overflow: auto;
    }
    .tweets__container::-webkit-scrollbar {
        width: 5px;
    }

    .tweets__container::-webkit-scrollbar-track {
        background: #fff;
    }

    .tweets__container::-webkit-scrollbar-thumb {
        background-color: #1c2540;
    }
/* ---- reset ---- */ body{ margin:0; font:normal 75% Arial, Helvetica, sans-serif; } canvas{ display: block; vertical-align: bottom; } /* ---- particles.js container ---- */ #particles-js{ position:absolute; width: 100%; height: 100%; background-color: transparent; background-image: url(""); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; } /* ---- stats.js ---- */ .count-particles{ background: #000022; position: absolute; top: 48px; left: 0; width: 80px; color: #13E8E9; font-size: .8em; text-align: left; text-indent: 4px; line-height: 14px; padding-bottom: 2px; font-family: Helvetica, Arial, sans-serif; font-weight: bold; } .js-count-particles{ font-size: 1.1em; } #stats, .count-particles{ -webkit-user-select: none; margin-top: 5px; margin-left: 5px; } #stats{ border-radius: 3px 3px 0 0; overflow: hidden; } .count-particles{ border-radius: 0 0 3px 3px; }
</style>

@section('content')
    {{-- Hero --}}
    {{-- <div id="particles-js"></div> --}}
    <section class="section bg-primary section pb-11 pb-lg-12 text-white overflow-hidden z-2">  
        <div id="particles-js" class="top-0"></div>
        <div class="container z-2">
            <div class="row justify-content-center text-center pt-6 pb-4 mb-4">
                <div class="col-lg-8 col-xl-8">
                    <h1 class="text-6xl font-black mb-3">DeFi Ecosystem</h1> 
                    {{-- <span class="pixel-pro-badge font-weight-bolder text-primary">PRO</span> --}}
                    <p class="lead px-md-6 mb-5"> The modern and easiest way to manage and control your Defi portfolio from one place</p>
                    <div class="d-flex flex-column flex-wrap flex-md-row justify-content-md-center mb-5">
                        <div class="" data-aos="zoom-in" data-aos-duration="2000">
                            <a href="./html/components/all.html" class="btn btn-tertiary mb-3 mt-2 mr-2 mr-md-3 animate-up-2"><span class="fas fa-th-large mr-2"></span> Lauch App</a>
                            <a href="./html/pages/all.html" class="btn btn-outline-white mb-3 mt-2 mr-md-4 animate-up-2">Exchange</a>
                        </div>
                    </div>
                    <a href="https://themesberg.com" target="_blank" class="d-flex justify-content-center flex-column mb-6">
                        <div class="d-flex ml-auto mr-auto">
                            <img src="/images/bs-logo-circle.png" height="25" width="25" class="mb-1" alt="BSE Logo" style="width: 25px; height: 25px;"> 
                            <span class="ml-2 font-bold">Buy-Sell (BSE)</span>
                        </div>

                        <span class="text-muted font-small mt-3">Current Price</span>
                        <h6 class="text-muted">$5.21</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- particles.js container -->  <!-- stats - count particles --> 
        <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2">
            <svg class="fill-white" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 43.4" style="enable-background:new 0 0 1920 43.4;" xml:space="preserve">
                <path d="M0,23.3c0,0,405.1-43.5,697.6,0c316.5,1.5,108.9-2.6,480.4-14.1c0,0,139-12.2,458.7,14.3 c0,0,67.8,19.2,283.3-22.7v35.1H0V23.3z"></path>
            </svg>
        </figure>
    </section>
    <div class="section py-0 bg-white">
        <div class="container mt-n10 mt-lg-n12 z-2">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10"><img src="/images/1st.png" alt="illustration"></div>
            </div>
        </div>
    </div>

    {{-- 3rd Section Components --}}
    <section class="section section-lg bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <!-- Icon box -->
                    <div class="icon-box text-center mb-5 mb-md-0" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="2000">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-3">
                            <span class="fas fa-box-open"></span>
                        </div>
                        <h2 class="h5 my-3">Explore All DeFi Components</h2>
                        <p class="px-lg-4">Search, filter, and connect all your Defi components through Buy-Sell dApp and be on top of your assets always. It has never been easier than this.</p>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-12 col-md-4 mb-5 mb-md-0">
                    <!-- Icon box -->
                    <div class="icon-box text-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="2000">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-3">
                            {{-- <span class="fas fa-pager"></span> --}}
                            <span class="fa fa-eye" aria-hidden="true"></span>
                        </div>
                        <h2 class="h5 my-3">Keep An Eye On It</h2>
                        <p class="px-lg-4">With powerful, interactive, and rewarding use cases. The utility asset properly engaged by the protocol ensures maximum benefit for your asset.</p>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-12 col-md-4 mb-5 mb-md-0">
                    <!-- Icon box -->
                    <div class="icon-box text-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="2000">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle icon-secondary mb-3">
                            <span class="fa fa-lock"></span>
                            {{-- <i class="fa fa-lock" aria-hidden="true"></i> --}}
                        </div>
                        <h2 class="h5 my-3">Seamless and Secure Protocol</h2>
                        <p class="px-lg-4">Decentralized financial means access to all, flexibility, and without restriction. Full self-control and secure of finance is the ultimate goal.</p>
                    </div>
                    <!-- End of Icon box -->
                </div>
            </div>
        </div>
    </section>
    {{-- ./ 3rd Section --}}

    {{-- 4th Section Products --}}
    <section class="section section-xl bg-soft">
        <div class="container">
        <div id="particles-js"></div>
            <div class="row">
                <div class="col-12 col-xl-4" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                    <h1 class="font-weight-light mb-0">Advanced </h1>
                    <span class="font-semibold text-3xl mb-4">Products</span>
                    <p class="lead">Just within the ecosystem, you can interact with the advanced products we have. This enables you to do more by simply holding the BSE Token.“Button” Explore features </p>
                    {{-- <a href="./html/components/all.html"  class="btn btn-tertiary mt-2 animate-up-2">
                        <span class="fas fa-th-large mr-2"></span>
                        Demo components
                    </a> --}}
                </div>
                <div class="col-12 col-xl-6 ml-xl-auto">
                    <div class="presentation-box mx-auto mx-xl-0 mt-6 mt-xl-0">
                        <img class="d-block d-md-none mx-auto floating-sm mx-auto gadget" src="/images/defi-exchange.png" alt="Phone" />
                        {{-- <img class="d-none d-md-block d-lg-none mx-auto floating-sm gadget" src="./assets/img/index-components/ipad.png" alt="Tablet" /> --}}
                        <img class="d-none d-lg-block floating-sm gadget" src="/images/2nd.png" alt="Macbook laptop" />
                        {{-- <img class="pricing-card floating-md" src="/images/3rd.png" alt="" /> --}}
                        <img class="blog-card floating-sm" src="/images/5th.png" alt="" />
                        {{-- <img class="profile-card floating-lg" src="/images/4th.png" alt="" /> --}}
                        <img class="navbar-img floating-md" src="/images/6th.png" alt="" />
                        {{-- <img class="modal-img floating-lg" src="/iamges/7th.png" alt="" /> --}}
                        {{-- <img class="social-btn-img" src="./assets/img/index-components/social-btn.png" alt="Social button component" /> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ./ 4th Section --}}

    {{-- 5th Section Our Mission --}}
    <section class="section section-xl pt-5 bg-soft">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="2000">
                    <img src="/images/progress_.svg" alt="Dashboard Preview">
                </div>
                <div class="col-lg-5">
                    <h2 class="h1">Our Mission is simple</h2>
                    <p class="mb-4 lead">As the utility token is a token by the community and for the community, owning the asset should worth it, as we distribute over 90% of our revenue with our user</p>
                    <div class="d-flex justify-content-between mt-lg-4 mb-5">
                        {{-- <div>
                            <a href="./html/dashboard/account.html" class="btn btn-primary animate-up-2"><span class="fas fa-chart-line mr-2"></span> Dashboard demo</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ./ 5th Section --}}

    {{-- 6th Section Staking Assets --}}
    <section class="section section-lg line-bottom-soft bg-white">
        <div class="container">
            <div class="row justify-content-center mb-5 mb-lg-6">
                <div class="col-12 text-center">
                    <h2 class="h1 px-lg-5">A modernized token that is fully transparent and provides endless opportunities for everyone.</h2>
                    <p class="lead px-lg-8">Stake on the following assets</p>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-12 col-sm-4 col-lg-4 text-center mb-4 mb-lg-0" data-aos="zoom-in" data-aos-duration="2000">
                    <!-- Icon box -->
                    <div class="icon icon-shape icon-shape-secondary rounded-circle">
                        <span class="fas fa-poll"></span>
                    </div>
                    <h2 class="h5 my-3">Classic Staking</h2>
                    <!-- End of Icon box -->
                </div>
                <div class="col-12 col-sm-4 col-lg-4 text-center mb-4 mb-lg-0" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="2000">
                    <!-- Icon box -->
                    <div class="icon icon-shape icon-shape-secondary rounded-circle">
                        <span class="fas fa-coins"></span>
                    </div>
                    <h2 class="h5 my-3">Pooled Staking</h2>
                    <!-- End of Icon box -->
                </div>
                <div class="col-12 col-sm-4 col-lg-4 text-center mb-4 mb-lg-0" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="2000">
                    <!-- Icon box -->
                    <div class="icon icon-shape icon-shape-secondary rounded-circle">
                        <span class="fas fa-poll"></span>
                    </div>
                    <h2 class="h5 my-3">Assets Staking</h2>
                    <!-- End of Icon box -->
                </div>
            </div>
        </div>
    </section>
    {{-- ./ 6th Section --}}

    {{-- 7th Section Functionalities --}}
    <section class="section section-lg" style="background: #af783b;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-white">
                    <h1 class="font-weight-light">Awesome <span class="font-weight-bold">Functionalities</span></h1>
                    {{-- <p class="lead">You get all Bootstrap components fully customized. Besides, you receive numerous plugins out of the box and ready to use</p> --}}
                </div>
            </div>
            <div class="row mt-6 text-white">
                <div class="col-md-4">
                    <!-- Icon box -->
                    <div class="icon-box text-center mb-5">
                        <div class="icon">
                            <span class="fas fa-search-dollar"></span>
                        </div>
                        <h2 class="h5 my-3">Explore the market at all time</h2>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-md-4">
                    <!-- Icon box -->
                    <div class="icon-box text-center mb-5">
                        <div class="icon">
                            <span class="fas fa-chart-bar"></span>
                        </div>
                        <h2 class="h5 my-3">Track price movement from you dApp</h2>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-md-4">
                    <!-- Icon box -->
                    <div class="icon-box text-center mb-5">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="32" height="32"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g id="original-icon" fill="#ffffff"><path d="M82.94857,14.40332c-22.1284,0.93161 -41.62535,11.99151 -54.14193,28.59668h-0.13997v0.18197c-7.0735,9.44567 -11.9063,20.66105 -13.63346,32.86588c-4.58667,32.5295 14.60936,62.71819 44.6377,76.03385c11.66733,5.17433 22.89627,6.27453 33.49577,5.22103v-11.8278v-59.47493h-28.66667v-14.33333h14.33333v-21.5h28.66667v-17.27279c20.984,8.52833 35.83333,29.09779 35.83333,53.10612c0,0.774 -0.08331,1.52874 -0.11198,2.29557l12.9056,12.42969c1.83467,-8.75051 2.12694,-18.06202 0.36394,-27.68685c-5.72617,-31.1965 -32.31461,-55.55197 -63.89811,-58.39713c-3.25546,-0.29383 -6.48301,-0.37104 -9.6442,-0.23796zM107.5,71.66667v71.66667l16.29297,-15.49511l14.57129,33.57975l15.76106,-7.16667l-14.68327,-32.41797h20.18425zM30.16439,73.16439l12.83561,12.83561l21.5,21.5v21.5h14.33333v13.84343c-28.23667,-3.5475 -50.16667,-27.66076 -50.16667,-56.84343c0,-4.41467 0.55172,-8.70045 1.49772,-12.83561z"></path></g></g></svg>
                        </div>
                        <h2 class="h5 my-3">Connect Web 3.0 and start managing your portfolio</h2>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-md-4">
                    <!-- Icon box -->
                    <div class="icon-box text-center mb-5">
                        <div class="icon">
                            <span class="fas fa-exchange-alt"></span>
                        </div>
                        <h2 class="h5 my-3">Instantly swap your assets from one to another</h2>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-md-4">
                    <!-- Icon box -->
                    <div class="icon-box text-center mb-5">
                        <div class="icon">
                            <span class="fas fa-credit-card"></span>
                        </div>
                        <h2 class="h5 my-3">Buy crypto with your card.</h2>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-md-4">
                    <!-- Icon box -->
                    <div class="icon-box text-center mb-5">
                        <div class="icon">
                            <span class="fas fa-wallet"></span>
                        </div>
                        <h2 class="h5 my-3">Earn interest on your token via staking</h2>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-md-4">
                    <!-- Icon box -->
                    <div class="icon-box text-center">
                        <div class="icon">
                            <span class="fas fa-vote-yea"></span>
                        </div>
                        <h2 class="h5 my-3">Create a proposal and vote through our governance mechanism</h2>
                        </p>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-md-4">
                    <!-- Icon box -->
                    <div class="icon-box text-center mb-5">
                        <div class="icon">
                            <span class="fas fa-archive"></span>
                        </div>
                        <h2 class="h5 my-3"> Vault your assets with a time-locked mechanism </h2>
                        </p>
                    </div>
                    <!-- End of Icon box -->
                </div>
                <div class="col-md-4">
                    <!-- Icon box -->
                    <div class="icon-box text-center mb-5">
                        <div class="icon">
                            <span class="fa fa-globe" aria-hidden="true"></span>
                        </div>
                        <h2 class="h5 my-3">Accessible from all parts of the world</h2>
                    </div>
                    <!-- End of Icon box -->
                </div>
            </div>
        </div>
    </section>
    {{-- ./ section --}}

    {{-- Statistics --}}
    <section class="section section-lg line-bottom-soft bg-soft">
        <div class="container">
            <div class="row justify-content-center mb-5 mb-lg-6">
                <div class="col-12 text-center">
                    <h2 class="h1 px-lg-5 font-bold">672,822,412</h2>
                    {{-- <p class="px-lg-8">Token Supply</p> --}}
                    <h5 class="font-weight-light">Total <span class="font-weight-bold">Token Supply</span></h5>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-2">
                    <div class="bg-white rounded px-4 py-4 text-center shadow">
                        <span>Cirulating Supply</span>
                        <h4 class="mt-1">231,112,871</h4>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-2">
                    <div class="bg-white rounded px-4 py-4 text-center shadow">
                        <span>Locked Supply</span>
                        <h4 class="mt-1">231,112,871</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Statistics --}}


    {{-- 8 section RoadMap  --}}
    <section class="section section-lg line-bottom-soft bg-white">
        <div class="container">
            <div class="row justify-content-center mb-5 mb-lg-6">
                <div class="col-12 text-center">
                    <h2 class="h1 px-lg-5">Roadmap</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <!-- Timeline -->
                    <div class="container overflow-hidden">
                        <div class="main-carousel" style="cursor: grab;">
                            <div class="carousel-cell">
                                <div class="roadmap">
                                    <div class="timeline timeline-four">
                                        <!-- Timeline Item 1 -->
                                        <div class="timeline-item">
                                            <div class="icon"></div>
                                            <div class="date-content">
                                                <div class="date-outer">
                                                    <span class="date">
                                                        <span class="year">Jun-Sept 2020</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h2 class="h5 title">Project Formation & Dev</h2>
                                                <p>Team formation and project discussion and establishement</p>
                                                <p>Developement & launch of non-custodial exchange v1.0.</p>
                                                <p>Marketing, partnerships discussions, smart contract development</p>
                                                <p>Token Sale & token distribution</p>
                                            </div>
                                        </div>
                                        <!-- Timeline Item 2 -->
                                        <div class="timeline-item">
                                            <div class="icon"></div>
                                            <div class="date-content">
                                                <div class="date-outer">
                                                    <span class="date">
                                                        <span class="year">Sept-Oct 2020</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h2 class="h5 title">Development</h2>
                                                <p>Uniswap listing, liquidity locked, and more exchange listings for BSE</p>
                                                <p>Launched staking for BSE v 1.0</p>
                                                <p>Launched staking/partnership for tokens v2.0</p>
                                                <p>Launched DEX with instant swap for BSE/ETH</p>
                    
                                            </div>
                                        </div>
                                        <!-- Timeline Item 3 -->
                                        <div class="timeline-item">
                                            <div class="icon"></div>
                                            <div class="date-content">
                                                <div class="date-outer">
                                                    <span class="date">
                                                        <span class="year">Oct-Dec 2020</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h2 class="h5 title">Dev & Marketing</h2>
                                                <p>Website rebuild and new modernized UI</p>
                                                <p>Advanced DEX trading with more token pairs.</p>
                                                <p>Launch of Classic staking for xBSE</p>
                                                <p>Marketing, Promotion and strategic partnership</p>
                                                <p>Governance - Governance, voting, and proposal development</p>
                                                <p>CEXs Listings</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="roadmap">
                                    <div class="timeline timeline-four">
                                        <!-- Timeline Item 1 -->
                                        <div class="timeline-item">
                                            <div class="icon"></div>
                                            <div class="date-content">
                                                <div class="date-outer">
                                                    <span class="date">
                                                        <span class="year">Jan-March 2021</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h2 class="h5 title">Business & Awareness</h2>
                                                <p>Lending & Borrowing feature to be released.</p>
                                                <p>Launch of NFTs and xBSE utility</p>
                                                <p>dApp explorer For DeFi products & services</p>
                                                <p>Massive social engagement for BSE branding</p>
                                                
                                            </div>
                                        </div>
                                        <!-- Timeline Item 2 -->
                                        <div class="timeline-item">
                                            <div class="icon"></div>
                                            <div class="date-content">
                                                <div class="date-outer">
                                                    <span class="date">
                                                        <span class="year">April-June 2021</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h2 class="h5 title">Advance Dev Services</h2>
                                                <p>DeFi Digital Auction with xBSE utility</p>
                                                <p>dApp explorer Update v1.2 </p>
                                                <p>DeFi Aggregated exchange v1.2</p>
                                                <p>Partnership Engagement for BSE utility and exposure.</p>
                    
                                            </div>
                                        </div>
                                        <!-- Timeline Item 3 -->
                                        <div class="timeline-item">
                                            <div class="icon"></div>
                                            <div class="date-content">
                                                <div class="date-outer">
                                                    <span class="date">
                                                        <span class="year">Jul-Sept 2021</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="timeline-content">
                                                <h2 class="h5 title">Additional Services</h2>
                                                <p>Decentralized Mobile credit & data refill covering over 185 countries covering over 280 Telecommunications..</p>
                                                <p>Desktop and mobile app version with Exchange, DeFi exchange, Staking launch, Lend & Borrow, NFT</p>
                                                <p>Marketing and BSE, xBSE utility exposure and products branding</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Timeline -->
                </div>
            </div>
        </div>
    </section>
    {{-- ./ --}}

    {{-- 9th Section Partners --}}
    <section class="section section-lg bg-secondary">
        <div class="container">
            <div class="row justify-content-center text-center text-white">
                <div class="col-lg-10 col-xl-12">
                    <h1 class="font-weight-light mb-4">Our<span class="font-weight-bold"> Partners</span>
                    </h1>
                    <p class="lead">
                        We're happy to partner with the following awesome companies
                    </p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-lg-4 mt-4 d-flex justify-center mb-4">
                    <a href="https://app.uniswap.org/#/swap?inputCurrency=0xa30189d8255322a2f8b2a77906b000aeb005570c&outputCurrency=ETH" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 32 32" fill="none">
                            <path d="M14.3078 13.7367C14.9143 14.8093 13.5578 15.1418 12.9212 15.203C11.9566 15.2972 11.7569 14.7387 11.9453 14.0371C12.0072 13.7859 12.1444 13.5599 12.3384 13.3898C12.5325 13.2196 12.7739 13.1135 13.03 13.0859C13.2823 13.0627 13.5361 13.1114 13.7621 13.2265C13.9881 13.3417 14.1773 13.5185 14.3078 13.7367V13.7367Z" fill="white"/>
                            <path d="M18.094 11.7521C17.389 17.169 26.8931 16.0418 26.7122 20.3531C27.6497 19.1288 28.0528 15.8026 25.2929 14.0905C22.8339 12.5639 19.6296 13.3992 18.094 11.7521Z" fill="white"/>
                            <path d="M23.5684 9.7093C23.5065 9.65186 23.4427 9.59535 23.3809 9.53885C23.4437 9.59629 23.5065 9.65657 23.5684 9.7093Z" fill="white"/>
                            <path d="M25.7771 13.6581L25.7715 13.6496C25.6857 13.4895 25.5879 13.3362 25.479 13.191C25.1586 12.7549 24.699 12.4424 24.1769 12.3057C23.8293 12.2156 23.4739 12.1595 23.1156 12.1381C22.7528 12.1117 22.3825 12.0966 22.0085 12.0769C21.2585 12.0354 20.4907 11.9582 19.7407 11.7435C19.5532 11.6898 19.3658 11.6314 19.1848 11.5608C19.0911 11.5269 19.0039 11.4902 18.9111 11.4506C18.8183 11.4111 18.7236 11.3658 18.6298 11.3178C18.2772 11.1238 17.9505 10.8855 17.6577 10.6087C17.0802 10.0691 16.6265 9.45692 16.1718 8.86362C15.7432 8.26804 15.2831 7.6959 14.7937 7.14964C14.3108 6.61451 13.74 6.16664 13.1063 5.82555C12.45 5.49351 11.7372 5.28902 11.0054 5.22283C11.7646 5.14002 12.5326 5.23412 13.2497 5.49782C13.9733 5.78002 14.6348 6.20204 15.1968 6.73999C15.5637 7.08565 15.9082 7.45463 16.228 7.84465C18.6092 7.37378 20.5404 7.79192 22.0244 8.6037L22.0582 8.62065C22.5305 8.87801 22.9732 9.18689 23.3781 9.54168C23.4428 9.59819 23.5066 9.65469 23.5656 9.71214C23.8817 10.0039 24.1759 10.3187 24.4459 10.6539L24.4665 10.6812C25.3431 11.7962 25.7762 12.9555 25.7771 13.6581Z" fill="white"/>
                            <path d="M25.776 13.657L25.7705 13.6458L25.776 13.657Z" fill="white"/>
                            <path d="M11.1263 5.92056C11.7338 6.00909 12.3535 6.25206 12.7528 6.7154C13.1522 7.17874 13.2994 7.78146 13.4147 8.35498C13.5084 8.79949 13.5825 9.25247 13.7569 9.67343C13.8412 9.87873 13.965 10.0586 14.0681 10.2526C14.1534 10.4136 14.309 10.5587 14.369 10.731C14.3798 10.7558 14.3838 10.7829 14.3806 10.8097C14.3775 10.8365 14.3674 10.862 14.3512 10.8836C14.1394 11.119 13.5675 10.8572 13.3519 10.7517C12.9791 10.5661 12.6453 10.3104 12.3685 9.99834C11.5032 9.03304 11.056 7.64396 11.0832 6.37919C11.0892 6.22564 11.1036 6.07253 11.1263 5.92056Z" fill="white"/>
                            <path d="M21.2865 16.8057C19.974 20.4851 25.927 22.9535 23.6967 26.6941C25.9851 25.7448 27.0716 22.8772 26.122 20.6019C25.2914 18.6045 22.8352 17.8765 21.2865 16.8057Z" fill="white"/>
                            <path d="M13.4131 21.6174C13.7707 21.3466 14.1618 21.1234 14.5765 20.9535C14.996 20.7848 15.4313 20.6586 15.8758 20.5768C16.758 20.4082 17.6308 20.3668 18.3639 20.0701C18.7261 19.928 19.0594 19.7206 19.3473 19.458C19.626 19.1979 19.8393 18.8751 19.9698 18.5162C20.1034 18.1375 20.1577 17.7351 20.1291 17.3343C20.096 16.9038 19.999 16.4807 19.8413 16.079C20.1681 16.4204 20.4061 16.8375 20.5341 17.2933C20.6621 17.7492 20.6763 18.2297 20.5754 18.6923C20.4607 19.1821 20.2131 19.6303 19.8601 19.9872C19.5107 20.333 19.0893 20.5967 18.6264 20.7595C18.1846 20.9151 17.7238 21.0102 17.2567 21.042C16.8067 21.0797 16.3717 21.09 15.9443 21.1154C15.08 21.1519 14.2263 21.3211 13.4131 21.6174V21.6174Z" fill="white"/>
                            <path d="M21.8102 28.0852C21.678 28.1907 21.5458 28.3028 21.4005 28.4007C21.2543 28.4975 21.101 28.5831 20.9421 28.6569C20.6111 28.8191 20.2472 28.9019 19.879 28.8989C18.8815 28.8801 18.1765 28.1342 17.7641 27.2913C17.4828 26.7169 17.2888 26.0962 16.955 25.5491C16.4778 24.7665 15.6613 24.1365 14.7051 24.2532C14.3151 24.3022 13.9495 24.4783 13.7329 24.8183C13.1629 25.7064 13.9814 26.9504 15.0248 26.7743C15.1135 26.7607 15.2003 26.7367 15.2835 26.7027C15.3664 26.6673 15.4437 26.62 15.5132 26.5624C15.6589 26.4405 15.7688 26.281 15.831 26.101C15.8995 25.9133 15.9148 25.7101 15.875 25.5142C15.8322 25.3095 15.7119 25.1295 15.5394 25.0123C15.74 25.1066 15.8962 25.2754 15.9754 25.4832C16.0574 25.6969 16.0785 25.9295 16.0363 26.1546C15.9953 26.3892 15.8924 26.6085 15.7382 26.7894C15.6563 26.8824 15.5616 26.9633 15.4569 27.0295C15.3532 27.095 15.2421 27.1478 15.126 27.1868C14.8905 27.2677 14.6399 27.2937 14.3929 27.2631C14.0461 27.2135 13.7191 27.071 13.4461 26.8506C13.1236 26.5944 12.8836 26.2592 12.592 25.971C12.2578 25.6187 11.8635 25.3294 11.4277 25.1168C11.1272 24.9842 10.8127 24.8863 10.4902 24.8249C10.328 24.791 10.164 24.7665 9.99991 24.7458C9.92491 24.7383 9.55742 24.6563 9.50586 24.7043C10.0129 24.2354 10.5657 23.819 11.1558 23.4612C11.7617 23.1 12.4123 22.8205 13.0908 22.6297C13.7942 22.4308 14.53 22.3741 15.2554 22.463C15.6288 22.508 15.9945 22.6031 16.3428 22.7455C16.7078 22.892 17.0447 23.101 17.3384 23.3633C17.6292 23.6384 17.8641 23.9675 18.0303 24.3324C18.1803 24.6739 18.2923 25.0311 18.364 25.3975C18.5778 26.4927 18.499 28.1907 19.9268 28.4412C20.0012 28.4557 20.0763 28.4664 20.1518 28.4732L20.3852 28.4789C20.5457 28.4674 20.7052 28.4444 20.8624 28.4101C21.1881 28.3332 21.5056 28.2243 21.8102 28.0852V28.0852Z" fill="white"/>
                            <path d="M13.514 26.8916L13.4766 26.8622L13.514 26.8916Z" fill="white"/>
                            <path d="M12.2325 11.4336C12.1805 11.6343 12.0897 11.8228 11.9653 11.9883C11.7338 12.2902 11.4273 12.5256 11.0766 12.6711C10.7612 12.8076 10.4272 12.8958 10.0857 12.9329C10.0116 12.9423 9.93478 12.9479 9.86072 12.9536C9.64444 12.9618 9.43648 13.0394 9.26728 13.175C9.09808 13.3106 8.97653 13.497 8.92043 13.707C8.89474 13.8115 8.87564 13.9175 8.86324 14.0244C8.82949 14.3012 8.82387 14.5894 8.79387 14.9378C8.72041 15.5308 8.54967 16.1074 8.28857 16.6443C7.94921 17.3619 7.5686 17.9401 7.65672 18.767C7.71484 19.3038 7.98858 19.6635 8.35232 20.0346C9.00855 20.7089 10.4776 21.0102 10.1495 22.6715C9.95165 23.6631 8.31482 24.7038 6.01426 25.0673C6.24301 25.0324 5.72083 24.1481 5.68802 24.0916C5.44147 23.7036 5.17148 23.3382 4.97555 22.9173C4.59118 22.1008 4.41306 21.1562 4.57056 20.2615C4.73649 19.3198 5.43022 18.5984 6.00677 17.8789C6.693 17.0229 7.41297 15.9013 7.57234 14.79C7.60984 14.5207 7.63609 14.1835 7.69609 13.8482C7.75329 13.4768 7.86912 13.1169 8.0392 12.7822C8.1553 12.5626 8.30815 12.3648 8.49106 12.1974C8.58643 12.1085 8.64935 11.99 8.66975 11.8609C8.69014 11.7318 8.66684 11.5996 8.60356 11.4854L4.93617 4.85926L10.2038 11.3893C10.2638 11.465 10.3396 11.5265 10.4259 11.5694C10.5122 11.6123 10.6069 11.6357 10.7031 11.6377C10.7994 11.6398 10.8949 11.6206 10.983 11.5814C11.071 11.5422 11.1494 11.484 11.2126 11.411C11.2793 11.3328 11.3171 11.2339 11.3197 11.131C11.3222 11.0281 11.2894 10.9274 11.2266 10.846C10.8826 10.4043 10.5188 9.95412 10.1663 9.5115L8.84075 7.86344L6.1802 4.57297L2.55225 0L6.52144 4.27821L9.35354 7.42364L10.7663 9.00013C11.235 9.53034 11.7038 10.0436 12.1725 10.6011L12.2494 10.6953L12.2663 10.8412C12.2891 11.0392 12.2777 11.2396 12.2325 11.4336Z" fill="white"/>
                            <path d="M13.447 26.8463C13.1925 26.6488 12.966 26.4171 12.7739 26.1579C12.98 26.4047 13.205 26.6349 13.447 26.8463V26.8463Z" fill="white"/>
                        </svg>
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mt-4 d-flex justify-center mb-4">
                    <a href="https://lid.sh/" target="_blank">
                        <img src="/images/lidlogo.png" alt="" style="width: 60px; height: 60px;">
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mt-4 d-flex justify-center mb-4">
                    <a href="https://transak.com/" target="_blank">
                        <img src="/images/transaklogo.png" alt="" style="width: 150px; height: 50px;">
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mt-4 d-flex justify-center mb-4">
                    <a href="https://www.dextools.io/app/uniswap/pair-explorer/0x9d03b651b7fdd85d7c87d23aaadb54ed178f6fca" target="_blank">
                        <img src="/images/dextools.png" alt="" style="width: 100px; height: 42px;">
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mt-4 d-flex justify-center mb-4">
                    <a href="https://govblocks.io/" target="_blank">
                        <img src="/images/govb.png" alt="" style="width: 60px; height: 60px;">
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mt-4 d-flex justify-center mb-4">
                    <a href="https://www.totle.com/" target="_blank">
                        <img src="/images/Totle-logo.svg" alt="" style="width: 150px; height: 50px;">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center mt-5 text-center text-white">
                <div class="col-lg-10 col-xl-12">
                    <h1 class="font-weight-light mb-4">Feeds</span>
                    </h1>
                    
                </div>
                <div class="col-md-4">
                    <div class="tweets__container shadow" style="height: 500px; ">
                        <a class="twitter-timeline" data-theme="dark" href="https://twitter.com/BuySell_Network?ref_src=twsrc%5Etfw">Tweets by BuySell_Network</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ./ --}}

    {{-- 10th section FAQ --}}
    <section class="section section-lg bg-soft">
        <div class="container">
            <div class="row justify-content-center text-center text-dark mb-5">
                <div class="col-lg-9 col-xl-8">
                    <h2 class="h1 font-weight-light mb-3 uppercase">Faq</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    @foreach ($faqs as $faq)
                        <div class="accordion" id="accordionExample">
                            <div class="card border-light mb-0">
                                <div class="card-header" id="{{ $faq->title }}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block d-flex justify-content-between text-left" type="button" data-toggle="collapse" data-target="#faq-{{ $faq->id }}" aria-expanded="false" aria-controls="collapseOne">
                                            <span class="h6 mb-0 font-weight-bold">{{ $faq->title }} </span>
                                            <div class="icon"><span class="fas fa-plus"></span></div>
                                        </button>
                                    </h2>
                                </div>
                                <div id="faq-{{ $faq->id }}" class="collapse" aria-labelledby="{{ $faq->title }}" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="pt-3">
                                            {{ $faq->description }}
                                        </div>                          
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- ./ --}}

    {{-- 11th section Team --}}
    <section class="section section-lg bg-white">
        <div class="container">
            <div class="row justify-content-center mb-6">
                <div class="col-12 col-lg-9 text-center">
                    <h2 class="display-3 font-weight-light mb-4">Team Members</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-6">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 text-center">
                        <div class="profile-thumbnail mx-auto">
                            <img src="/images/nor2.jpeg" class="card-img-top rounded-circle shadow border-0" alt="Benjamin Portrait">
                        </div>
                        <div class="card-body">
                            <h3 class="h5 card-title mb-2">Benjamin West</h3>
                            <span class="card-subtitle text-gray font-weight-normal">Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 text-center">
                        <div class="profile-thumbnail mx-auto">
                            <img src="/images/nor2.jpeg" class="card-img-top rounded-circle shadow border-0" alt="Benjamin Portrait">
                        </div>
                        <div class="card-body">
                            <h3 class="h5 card-title mb-2">Benjamin West</h3>
                            <span class="card-subtitle text-gray font-weight-normal">Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 text-center">
                        <div class="profile-thumbnail mx-auto">
                            <img src="/images/nor2.jpeg" class="card-img-top rounded-circle shadow border-0" alt="Benjamin Portrait">
                        </div>
                        <div class="card-body">
                            <h3 class="h5 card-title mb-2">Benjamin West</h3>
                            <span class="card-subtitle text-gray font-weight-normal">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        // const Web3 = require('web3');
        // import Web3 from 'web3';
        // let web3;

        // const ethEnabled = () => {
        //     if (window.ethereum) {
        //         window.web3 = new Web3(window.ethereum);
        //         window.ethereum.enable();
        //         alert('Web3 is defined');
        //         return true
        //     }
        //     alert('Web3 is undefined');
        //     return false;
        // }


        $(document).ready(function() {
            var elem = document.querySelector('.main-carousel');
            var flkty = new Flickity( elem, {
                //   initialIndex: 3,
                pageDots: true,
                wrapAround: false,
                cellAlign: 'left',
                contain: true,
                draggable: true,
                prevNextButtons: false,
                
                // any options from Flickity can be used
            });
        });
        particlesJS("particles-js", {"particles":{"number":{"value":14,"density":{"enable":true,"value_area":800}},"color":{"value":"#131528"},"shape":{"type":"polygon","stroke":{"width":0,"color":"#000"},"polygon":{"nb_sides":6},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.3,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":160,"random":false,"anim":{"enable":true,"speed":10,"size_min":40,"sync":false}},"line_linked":{"enable":false,"distance":200,"color":"#ffffff","opacity":1,"width":2},"move":{"enable":true,"speed":8,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"grab"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; 
        stats.domElemt.style.display = 'none';document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
    </script>
@endpush