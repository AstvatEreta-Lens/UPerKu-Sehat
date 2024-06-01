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
                Edit User
            </h3>
            <form action="{{ route('updated', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="Nama" class="col-sm-2 col-form-label">Your Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-3" id="Nama" placeholder="your name"
                            name="name" value="{{ $user->name }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="emailuser" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control mb-3" id="emailuser" placeholder="your email"
                            name="email" value="{{ $user->email }}"required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">
                        Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control mb-3" id="password" placeholder="your password"
                            name="password">
                    </div>
                </div>
                <div class="form-group
                                row mb-3">
                    <label for="inputState" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10"> <select id="inputState" class="form-control" name="role"
                            value="{{ $user->role }}">
                            <option>Admin</option>
                            <option>Mahasiswa</option>
                            <option>Dokter</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection
