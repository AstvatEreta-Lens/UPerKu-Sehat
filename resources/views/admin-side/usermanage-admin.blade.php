@extends('admin-side.app')
@section('contents')
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>User Management</span>
                <h2>Admin Panel</h2>

            </div>
            <div class="user--info">
                <div class="search--box"><i class="fa-solid fa-search "></i>
                    <input type="search" name="" id="" placeholder="Search">
                </div>
                <p>{{ Auth::user()->name }}</p>
                <img src="/img/3.jpg" alt="ads">
            </div>
        </div>


        <div class="tabular--wrapper">
            <h3 class="main--title">
                Management User
            </h3>
            <a href="{{ route('create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Add New User</a>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data User</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>created_at</th>
                                                <th>updated_at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->role }}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>{{ $user->updated_at }}</td>
                                                    <td class="action">
                                                        <a href="{{route('edit',$user->id)}}" class="edit"><i
                                                                class="fa fa-pencil iconact light-yell"></i></a>
                                                        <form action="{{ route('deleted', $user->id) }}" method="POST"
                                                            style="display:inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="delete"><i
                                                                    class="fa fa-trash iconact light-danger"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
