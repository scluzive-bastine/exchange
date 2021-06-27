@extends('layouts.app')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">About us</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible fade show">
        {{ $error }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endforeach
@endif
@include('messages')
<div class="create__about-us--btn card-header">
    <div class="card-tools">
        @foreach ($data as $data)   
            @if ($data->exists())
            <a href="{{ route('about-us.edit', $data->id) }}" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i>
                Edit About us Content
            </a> 
            @else
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createAboutUs">
                <i class="fa fa-plus"></i>
                Create About us Content
            </button>   
            @endif
        @endforeach
    </div>
</div>
<div class="container">
    <div class="ad--about__us--header px-2 py-2 bg-white rounded shadow mt-4">
        <div class="ab-title py-2 px-2 rounded-lg shadow-lg bg-teal-700 text-white w-32 text-center" style="margin-top: -1.5rem;">
            <h5 class="uppercase font-semibold mb-0">Title</h5>
        </div>
        <h5 class="text-teal-700 mt-3"> {{ $data->title }} </h5>
    </div>
    <div class="ad--about__us--description px-2 py-2 bg-white rounded shadow mt-4">
        <div class="ab-title py-2 px-2 rounded-lg shadow-lg bg-teal-700 text-white w-32 text-center mb-3" style="margin-top: -1.5rem;">
            <h6 class="uppercase font-semibold mb-0">Content</h6>
        </div>
        <p class="px-2">
            {{ $data->content }}
        </p>
    </div>
</div>

<form action="{{ route('about-us.store') }}" method="post">
    {{ csrf_field() }}
    @include('admin.about.create')
</form>

@endsection
@push('scripts')
  <script>
    $('.toast').toast('show');
    // document.querySelector('.toast').toast('show');
  </script>
@endpush