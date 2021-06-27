@extends('layouts.dapp')

<style>
    .classic__img {
        width: 80%;
    }
</style>

@section('content')
    <!-- Hero -->
    <div class="section-header bg-primary pb-2">
        <div class="container mb-8">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 text-center justify-center text-white">
                    {{-- <img src="../../assets/img/team/profile-picture-freelancer.jpg" class="rounded-circle img-thumbnail image-lg border-light p-2" alt="Profile image"> --}}
                    {{-- <img src="/images/laptop-demo.png" class="classic__img ml-auto mr-auto" alt=""> --}}
                    <h1 class="display-2 mb-3">Classic Staking</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Hero section -->
    <div class="section bg-white">
        <div class="container text-center" style="margin-top: -12rem">
            <div class="row justify-center text-center">
                <div class="col-lg-8 text-center justify-center text-white">
                    {{-- <img src="../../assets/img/team/profile-picture-freelancer.jpg" class="rounded-circle img-thumbnail image-lg border-light p-2" alt="Profile image"> --}}
                    <img src="/images/laptop-demo.png" class="classic__img ml-auto mr-auto" alt="">
                </div>
            </div>
            <p>
                <p class="lead">Whether you’re a programmer, designer, freelancer or need Rocket for a whole team our pricing just makes sense.</p>
            </p>
            <a href="" class="btn btn-tertiary mb-3 mt-2 mr-2 mr-md-3 animate-up-2"><span class="fas fa-th-large mr-2"></span> Start Staking</a>
        </div>
    </div>
@endsection