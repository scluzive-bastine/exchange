@extends('layouts.dapp')
@section('content')

@foreach ($news as $news)
    
<section class="section-header bg-primary text-white pb-4 pb-sm-8 pb-lg-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 text-center">
                <div class="mb-4">
                    <a href="./blog.html" class="badge bg-tertiary text-uppercase mr-2 px-3">{{ $news->tags->tag }}</a>
                    <a href="#" class="badge bg-secondary text-uppercase px-3">Marketing</a>
                </div>
                <h1 class="display-3 mb-4 px-lg-5">{{$news->title}}</h1>
                <div class="post-meta"> 
                    <span class="post-date mr-3"> {{ \Carbon\Carbon::parse($news->created_at)->format("F j, Y, g:i a") }} </span> 
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-sm bg-white line-bottom-light">
    <div class="section section-sm bg-white pt-6 text-black">
        <article class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <img src="/images/{{$news->image}}" class="card-img-top rounded" style="max-height: 400px">
                    <p>
                        {!!  html_entity_decode($news->content) !!}

                    </p>
                </div>
            </div>
        </article>
    </div>
</section>
@endforeach




@endsection