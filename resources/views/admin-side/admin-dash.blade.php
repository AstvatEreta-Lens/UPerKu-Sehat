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
    @include('admin-side.content-admin')
</div>
@endsection