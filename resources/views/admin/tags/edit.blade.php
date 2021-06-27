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

<div class="card">
    <form action=" {{ route('tags.update', $tag->id) }} " method="POST" id="editForm">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="modal-body">
            {{-- <form role="form"> --}}
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Tag</label>
                    {{-- <input type="hidden" name="id" id="editTagId"> --}}
                    <input type="text" class="form-control" name="tag" id="editTag" placeholder="Tag" value=" {{ $tag->tag}} ">
                </div>
            </div>
            {{-- </form> --}}
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </div>
    </form>
</div>
@endsection
@push('scripts')
  <script type="text/javascript">
    $('.toast').toast('show');

  </script>
@endpush