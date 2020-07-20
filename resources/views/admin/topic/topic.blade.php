@extends('layouts.admin')

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
                        <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.topics.index') }}">Topics</a></li>
                        <li class="breadcrumb-item active">{{ $topic->title }} Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid mb-3" align="right">
            <button class="btn btn-primary px-3" type="button" data-toggle="modal" data-target="#modal-default">New Document</button>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach($documents as $document)
                <div class="col-lg-3">
                    <!-- Card -->
                    <div class="card">

                        <!-- Card image -->
                        <img class="card-img-top" src="/img/pdf3.jpg" alt="Card image cap">

                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title"><a>{{ $document->title }}</a></h4>
                            <!-- Text -->
                            <p class="card-text">{{ $document->description }}</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <!-- Button -->
                                    <a href="{{ route('admin.documents.show', $document->id) }}" class="btn btn-sm px-3 btn-success"><i class="far fa-eye"></i></a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="javascript:;" onclick="deleteData({{$document->id}})" data-toggle="modal" data-target="#modalConfirmDelete" class="btn btn-sm px-3 btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                @endforeach
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.Main content -->

    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info" role="document">
            <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <p class="heading">Add Document</p>
                </div>
                <form action="{{ route('store-document', $topic->id) }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body mx-3">
                        <i class="far fa-edit text-info fa-4x animated rotateIn mb-4"></i>

                        @csrf
                        <div class="form-group">
                            <label for="document_title" class="col-md-6 col-form-label">Document Title</label>
                            <input type="text" class="form-control" id="document_title" placeholder="Title" name="document_title" required>

                            <label for="document_description" class="col-md-6 col-form-label">Document description</label>
                            <textarea type="text" class="form-control" id="document_description" placeholder="Description" name="document_description" required></textarea>

                            <div class="mt-4">
                                <input type="file" name="document" id="document" required>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-info">Save Document</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!--Modal: modalConfirmDelete-->
    <div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
            <form action="" id="deleteForm" method="POST">
                <!--Content-->
                <div class="modal-content text-center">
                    <!--Header-->
                    <div class="modal-header d-flex justify-content-center">
                        <p class="heading">Are you sure?</p>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        @csrf
                        @method('DELETE')

                        <i class="fas fa-times text-danger fa-4x animated rotateIn"></i>

                    </div>

                    <!--Footer-->
                    <div class="modal-footer flex-center">
                        <button type="submit" class="btn btn-outline-danger" data-dismiss="modal" onclick="formSubmit()">Yes</button>
                        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
                    </div>
                </div>
                <!--/.Content-->
            </form>
        </div>
    </div>
    <!--Modal: modalConfirmDelete-->
@endsection
