@include('head')

<!-- <div class="mx-auto"> -->
    <!-- nav-start -->
    @include('layout.nav')
    <!-- nav-end -->
    <!-- content-start -->
    <!-- carousel start -->
    @include('mahasiswa-side.carousel')
    <!-- carousel-end -->
    <h1> Selamat Datang di Halaman {{Auth::user()->role}}</h1>
    <h2> {{Auth::user()->name}}</h2>

    
    <a href='/logout'> Logout </a>
    @include('layout.footer')
<!-- </div> -->
@include('tail')