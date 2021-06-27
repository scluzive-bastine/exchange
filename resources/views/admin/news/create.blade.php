@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Posts / News</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@include('messages')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">New Post</h3>
    </div>
    <div class="card-body">
        <form action=" {{ route('news.store') }} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
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
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Select Tag</label>
                <select class="form-control" name="tag">
                    <option value="">Select Tag</option>
                  @foreach ($tags as $tag)
                    <option value="{{ $tag->id}}"> {{ $tag->tag }} </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="file" name="image" id="">
            </div>
            <textarea name="content" id="" cols="30" rows="10" class="editor"></textarea>
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-success btn-sm"> <i class="fa fa-check" aria-hidden="true"></i> Save</button>
            </div>
        </form>
    </div>
</div>

@endsection
@push('scripts')
<script type="text/javascript">
    // $('textarea').ckeditor();
    CKEDITOR.replace( 'content' );
</script>
@endpush