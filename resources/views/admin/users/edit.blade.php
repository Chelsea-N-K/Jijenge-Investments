@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit User Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users Page</a></li>
                        <li class="breadcrumb-item active">Edit User Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title">Edit {{ $user->name }}'s Role</h5>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('admin.users.update' , $user) }}" method="POST">
                                <div class="form-group row">
                                    <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label text-md-right">E-mail</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                @csrf
                                {{ method_field('PUT') }}

                                <div class="form-group row">
                                    <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>

                                    <div class="col-md-6">
                                        @foreach($roles as $role)
                                            <div class="form-check">
                                                <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                                       @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                                <label>{{ $role->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

