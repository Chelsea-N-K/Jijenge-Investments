@extends('layouts.users')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $topic->title }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('userTopics.index') }}">Topics</a></li>
                        <li class="breadcrumb-item active">{{ $topic->title }} Page</li>
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
                    @foreach($documents as $document)
                        <div class="callout callout-info">
                            <h5>{{ $document->title }}</h5>

                            <p>{{ $document->description }}</p>

                            <a href="{{ route('user-show-document', [ 'id' => $document->id ]) }}" class="btn btn-md px-5 btn-outline-teal btn-flat">Learn More</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.Main content -->

@endsection
