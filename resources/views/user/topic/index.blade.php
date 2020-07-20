@extends('layouts.users')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Topics</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Topics Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    @foreach($topics as $topic)
                        <blockquote class=" elevation-1">
                            <p>
                                <a href="{{ route('user-show-topic' , [ 'id' => $topic->id ]) }}">
                                    <h5>{{ $topic->title }}</h5>
                                </a>
                            </p>
                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                        </blockquote>
                    @endforeach
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
        <div class="col-md-12">
            {{ $topics->links() }}
        </div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.topics.store') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="topic_title" class="col-md-6 col-form-label">Topic Title</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="topic_title" placeholder="Topic Title" name="topic_title" required>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save New Topic</button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
