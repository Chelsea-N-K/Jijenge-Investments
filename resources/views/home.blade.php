@extends('layouts.users')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"> Welcome <small>{{ Auth::user()->name }}</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="row">
        <div class="col-lg-4">
            <!-- Card -->
            <div class="card">

                <!-- Card image -->
                <img class="card-img-top" src="/img/pdf3.jpg" alt="Card image cap">

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title"><a>Documents</a></h4>
                    <!-- Text -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                    <!-- Button -->
                    <a href="{{ route('userTopics.index') }}" class="btn btn-primary">Curriculum</a>

                </div>

            </div>
            <!-- Card -->

        </div>
        <!-- /.col-md-6 -->
        <div class="col-lg-4">
            <!-- Card -->
            <div class="card">

                <!-- Card image -->
                <img class="card-img-top" src="/img/zoom5.png" alt="Card image cap" height="232">

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title"><a>Zoom</a></h4>
                    <!-- Text -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                        content.</p>
                    <!-- Button -->
                    <a href="#" class="btn btn-primary">Zoom</a>

                </div>

            </div>
            <!-- Card -->

        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->

@endsection
