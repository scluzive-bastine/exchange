@extends('layouts.main');

@section('content')
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="container">
                    @foreach ($posts as $post)
                        <div class="main__post--container px-4 py-10 mb-4 bg-white shadow-lg">
                            <div class="post--header text-center mb-4">
                                <h5 class="mb-3 font-bold text-teal-500 text-uppercase"> {{ $post->tags->tag }} </h5>
                                <a href="{{ route('posts.show', $post->id)}}">
                                    <h1 class="mt-2 font-weight-bold text-gray-600 mb-3" style="font-size: 1.8rem"> {{ $post->title}} </h1>
                                </a>
                                <hr class="mb-1 w-32 ml-auto mr-auto">
                                <small class="mt-4 font-bold text-gray-500"> {{ \Carbon\Carbon::parse($post->created_at)->format("F j, Y, g:i a") }} </small>
                                <hr class="mt-1 w-32 ml-auto mr-auto">
                            </div>
                            <div class="post__image--container">
                                <img src="/images/{{$post->image}}" class="img-fluid" alt="post image" style="max-height: 500px; width: 720px;">
                            </div>
                            <div class="post__slug--content mt-4 py-2" data-maxlength="400" style="border-bottom: 1px dashed #ddd;">
                                <p class="text-gray-700 font-sans text-wrap" id="textContent" style="font-size: 1rem;">
                                    @php
                                        $link = route('posts.show', $post->id);
                                        $content = Str::limit($post->content, 300, "..<br> <a href='$link' class='btn btn-primary btn-sm mt-3'>Continue Reading</a>")
                                    @endphp
                                    {!!  html_entity_decode($content) !!}
                                    
                                </p>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="main__post--container px-4 py-10 mb-4 bg-white shadow-lg">
                        <div class="post--header text-center mb-4">
                            <h5 class="mb-3 text-2xl font-bold text-teal-500">New Expert</h5>
                            <h1 class="mt-2 font-weight-bold text-gray-500 mb-3" style="font-size: 1.8rem">Cryptocurrency in the USA – State of Adoption And the Legal Status</h1>
                            <hr class="mb-1 w-32 ml-auto mr-auto">
                            <small class="mt-4 font-italic font-normal">July 17, 2020</small>
                            <hr class="mt-1 w-32 ml-auto mr-auto">
                        </div>
                        <div class="post__image--container">
                            <img src=" {{ asset('/images/post-demo.png') }} " class="img-fluid" alt="post image">
                        </div>
                        <div class="post__slug--content mt-4 py-2"  style="border-bottom: 1px dashed #ddd;">
                            <p class="text-gray-700 font-sans" style="font-size: 1rem;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptates possimus ipsa, quos doloribus, 
                                ipsam tempora quam similique sed quidem sequi eos minus culpa corrupti quisquam voluptatum eveniet eligendi consequatur.
                            </p>
                        </div>
                    </div> --}}
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