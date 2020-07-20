@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $document->title }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.topics.index') }}">Topics</a></li>
                        <li class="breadcrumb-item"><a href="{{ URL::previous() }}">Documents</a></li>
                        <li class="breadcrumb-item active">{{ $document->title }} Page</li>
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
                    <!-- Calendar -->
                    <div class="card bg-gradient-primary">
                        <div class="card-header border-0">
                            <!-- tools card -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pt-0">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%">
                                <object data="{{ url('storage/'.$document->url) }}" type="application/pdf" frameborder="1" scrolling="auto" height="500rem" width="100%" >
                                    <iframe src="https://docs.google.com/viewer?url=your_url_to_pdf&embedded=true" frameborder="1" scrolling="auto" height="790rem" width="100%" ></iframe>
                                </object>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
