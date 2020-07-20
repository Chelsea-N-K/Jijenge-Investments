@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Users Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Users Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
        <div class="content">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <h5 class="card-title">Users Table</h5>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-flat btn-success btn-block mr-2"><i class="fas fa-user-edit"></i></a>
                                        </div>
                                        <div class="col-md-6">
                                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-sm btn-flat btn-block btn-danger"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- /.card -->
        </div>
        <!-- /.content -->
    </div>

@endsection
