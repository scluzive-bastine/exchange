@extends('layouts.app');

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tags</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@include('messages')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title text-uppercase font-bold">Tags</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead class="thead-dark">
                  <tr>
                    <th>ID</th>
                    <th>Tag</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tag as $tag)
                        <tr>
                            <td> {{$tag->id}} </td>
                            <td> {{ $tag->tag }} </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href=" {{ route('tags.edit', $tag->id) }} " class="btn btn-primary btn-sm editBtn" id="edit" data-id="{{ $tag->tag_id }}" data-tag="{{ $tag->tag }}">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    {{-- data-toggle="modal" data-target="#editTagModal" --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-uppercase font-black">Create New Tag</h3>
            </div>
            <form action="{{ route('tags.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
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
                        <label for="tag">Tag</label>
                        <input type="text" name="tag" id="tag" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


    
@endsection
@push('scripts')
  <script type="text/javascript">
    $('.toast').toast('show');

  </script>
@endpush