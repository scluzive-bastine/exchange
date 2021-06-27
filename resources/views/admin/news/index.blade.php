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

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-uppercase">Posts</h3>
                <div class="card-tools">
                    <a href="{{ route('news.create') }}" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> New Post</a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Create At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $post)
                        <tr>
                            <td> {{ $post->id }} </td>
                            <td> {{ Str::limit($post->title, 50) }} </td>
                            <td>
                                {!! html_entity_decode(Str::limit($post->content, 100)) !!}
                            </td>
                            <td> {{ $post->created_at }} </td>
                            <td>
                                <div class="btn-group">
                                    <a href=" {{ route('news.edit', $post->id) }} " class="btn btn-primary btn-sm">Edit</a>
                                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit() " class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                    <form class="" action="{{ route('news.destroy', $post->id) }}" method="post">
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
        </div>
    </div>
    <div class="col-md-6"></div>
</div>
    
@endsection
@push('scripts')

<script type="text/javascript">
    $('.toast').toast('show');
</script>

@endpush