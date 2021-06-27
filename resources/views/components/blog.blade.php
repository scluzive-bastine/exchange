@extends('layouts.dapp')

@section('content')
<section class="section-header bg-primary text-white pb-10 pb-sm-8 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-4">Our Blog</h1>
                <p class="lead">We help you get better at SEO and marketing: detailed tutorials, case studies and opinion pieces from marketing practitioners and industry experts alike</p>
            </div>
        </div>
    </div>
</section>
<section class="section section-lg bg-white line-bottom-light">
    <div class="container mt-n10 mt-lg-n12 z-2">
        <div class="row">
            <div class="col-lg-12 mb-5">
                @foreach ($latest as $latest)
                    <div class="card bg-white border-light flex-lg-row align-items-center g-0 p-4">
                        <a href="{{route('new.blog.post', $latest->title)}}" class="col-12 col-lg-6 latImage"><img src="/images/{{$latest->image}}" alt="{{$latest->title}}" class="card-img-top rounded" style="max-height: 300px"></a>
                        <div class="card-body d-flex flex-column justify-content-between col-auto py-4 p-lg-3 p-xl-5">
                            <a href="./blog-post.html">
                                <h2>{{$latest->title}}</h2>
                            </a>
                            <p>
                                @php
                                    $content = Str::limit($latest->content, 150)
                                @endphp
                                {!!  html_entity_decode($content) !!}
                            </p>
                            <div class="d-flex align-items-center mt-3">
                                <span class="h6 text-muted small font-weight-normal mb-0 ml-auto">
                                    <time datetime="2019-04-25">{{ \Carbon\Carbon::parse($latest->created_at)->format("F j, Y, g:i a") }} </time>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @foreach ($news as $news)
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-5">
                    <div class="card bg-white border-light  p-4 rounded">
                        <a href="{{route('new.blog.post', $news->title)}}">
                            @php
                                $image = public_path('/public/images/').$news->image
                            @endphp
                            @php
                                $pic = str_replace("storage/", "storage/app/public/images",$news->image);
                            @endphp
                            {{$pic}}
                            <img src="/images/{{$news->image}}" class="card-img-top rounded" alt="{{$news->title}}" style="max-height: 160px">
                        </a>
                        <div class="card-body p-0 pt-4">
                            <a href="{{route('new.blog.post', $news->title)}}" class="h4 mb-2">{{$news->title}}</a>
                            <p class="mb-0">
                                @php
                                    $link = route('new.blog.post', $news->title);
                                    $content = Str::limit($news->content, 150)
                                @endphp
                                {!!  html_entity_decode($content) !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection