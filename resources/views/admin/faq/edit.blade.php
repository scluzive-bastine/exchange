
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Faq</h1>
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
<div class="container">
    <div class="card">
    <form action="{{ route('faq.update', $faq->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

            <div class="card-body">
                <div class="form-group">
                    <label for="title">Question Title:</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{$faq->title}}">
                </div>
                <div class="form-group">
                    <label for="decription">Answer to Question:</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="5">
                        {{ $faq->description }}
                    </textarea>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Save Changes">
            </div>
        </form>
    </div>
</div>
    
@endsection