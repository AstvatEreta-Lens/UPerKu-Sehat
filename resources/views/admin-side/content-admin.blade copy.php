@extends('admin-side.app')

@section('contents')
<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>Report</span>
            <h2>Dashboard</h2>

        </div>
        <div class="user--info">
            <div class="search--box"><i class="fa-solid fa-search "></i>
                <input type="search" name="" id="" placeholder="Search">
            </div>
            <p>{{Auth::user()->name}}</p>
            <img src="/img/3.jpg" alt="ads">
        </div>
    </div>
    <!-- header end -->
    <div class="card--container">
        <h3 class="main--title">
            How many people can access ?
        </h3>
        <div class="card--wrapper">
            <div class="admin--card light-magenta">
                <div class="card--header">
                    <div class="total">
                        <span class="title">
                            Total Admin
                        </span>
                        <span class="total--value">
                            {{$totalAdmin}}
                        </span>

                    </div>
                    <i class="fa fa-user icon"></i>
                </div>
                <span class="card--detail">
                    Role Administrator
                </span>
            </div>

            <div class="admin--card light-sky">
                <div class="card--header">
                    <div class="total">
                        <span class="title">
                            Total Student
                        </span>
                        <span class="total--value">
                        {{ $totalMahasiswa }}
                        </span>

                    </div>
                    <i class="fa fa-graduation-cap icon dark-sky"></i>
                </div>
                <span class="card--detail">
                    Role Students
                </span>
            </div>

            <div class="admin--card light-leaf">
                <div class="card--header">
                    <div class="total">
                        <span class="title">
                            Total Doctors
                        </span>
                        <span class="total--value">
                        {{ $totalDokter }}
                        </span>

                    </div>
                    <i class="fa fa-user-md icon dark-leaf"></i>
                </div>
                <span class="card--detail">
                    Role Doctors
                </span>
            </div>
            <!-- data tabular user -->
        </div>

    </div>
    <div class="tabular--wrapper">
        <h3 class="main--title">
            User Role Data
        </h3>
        <div class="table--container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <!-- <td class="action">
                            <a href="#" class="edit"><i class="fa fa-pencil iconact light-yell"></i></a>
                            <form action="#" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete"><i class="fa fa-trash iconact light-danger"></i></button>
                            </form>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection