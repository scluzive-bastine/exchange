@extends('layouts.main');

@section('content')
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="container">
                    @foreach ($post as $post)
                        <div class="main__post--container px-4 py-10 mb-4 bg-white shadow-lg">
                            <div class="post--header text-center mb-4">
                                <h5 class="mb-3 font-bold text-teal-500 text-uppercase"> {{ $post->tags->tag }} </h5>
                                <h1 class="mt-2 font-weight-bold text-gray-600 mb-3" style="font-size: 1.8rem"> {{ $post->title}} </h1>
                                <hr class="mb-1 w-32 ml-auto mr-auto">
                                <small class="mt-4 font-bold text-gray-500"> {{ \Carbon\Carbon::parse($post->created_at)->format("F j, Y, g:i a") }} </small>
                                <hr class="mt-1 w-32 ml-auto mr-auto">
                            </div>
                            <div class="post__image--container">
                                <img src="/images/{{$post->image}}" class="img-fluid" alt="post image" style="max-height: 500px; width: 720px;">
                            </div>
                            <div class="post__slug--content mt-4 py-2" data-maxlength="400" style="border-bottom: 1px dashed #ddd;">
                                <p class="text-gray-700 font-sans text-wrap" id="textContent" style="font-size: 1.2rem;">
                                    {!!  html_entity_decode($post->content) !!}
                                    
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="container mt-4">
                    <div class="recent__post--container bg-white shadow-lg px-4 py-2">
                        <h2 class="text-center uppercase text-gray-700 font-bold text-2xl mb-2">Related Post</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                            @foreach ($related as $related)
                                <div class="mt-2">
                                    <img src="/images/{{$related->image}}" class="img-fluid" alt="" style="height: 116px; width: 100%;">
                                    <h3 class="mt-2 font-bold text-teal-500 text-uppercase"> {{ $related->title }} </h3>
                                    <small class="font-bold text-gray-500">{{ \Carbon\Carbon::parse($related->created_at)->format("F j, Y") }}</small>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @include('news.sidebar')
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        var content = document.querySelector('#textContent').textContent;
        console.log(content);
    </script>
@endpush