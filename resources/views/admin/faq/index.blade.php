@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Faq</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <div class="row">
        <div class="col-md-12">
            <!--card -->
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
                <div class="card-header">
                  <h3 class="card-title">List of FAQ</h3>
                  <div class="card-tools">
                      <a href="#"  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newFAQ"><i class="fa fa-plus" aria-hidden="true"></i> Create New</a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($faqs as $faq)
                      <tr>
                        <td> {{ $faq->id }} </td>
                        <td> {{ $faq->title }} </td>
                        <td> {{ $faq->description }} </td>
                        <td> {{ $faq->created_at }} </td>
                        <td>
                          @if ($faq->status == 1)
                              {{$status = 'Active'}}
                          @else 
                              {{$status = 'Inactive'}}
                          @endif
                          {{-- <span> {{ $status }} </span> --}}
                        </td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                              <a href="{{ route('faq.edit', $faq->id) }}" class="btn btn-sm btn-primary">
                                <i class="far fa-edit"></i>
                                Edit
                              </a>
                              {{-- <button type="button" class="btn btn-sm btn-danger">Delete</button> --}}
                              <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit() " class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                              <form class="" action="{{ route('faq.destroy', $faq->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
            </div>
              <!-- /.card -->
        </div>
        <form action="{{ route('faq.store') }}" method="POST">
            {{ csrf_field() }}
            @include('admin.faq.create')
        </form>
    </div>    
@endsection
@push('scripts')
  <script>
    $('.toast').toast('show');
    // document.querySelector('.toast').toast('show');
  </script>
@endpush