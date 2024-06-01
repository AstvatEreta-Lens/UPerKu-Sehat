<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>UperKu-Sehat</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <title>UperKu-Sehat</title>

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="/assets/css/animate.css">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="/assets/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="/assets/css/LineIcons.css">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="/assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="/img/logouperku1.png" width="80" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#doctor">Doctors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#articles">Articles</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->

                            <a href="/logout" type="button" class="btn btn-primary"><i class="fa fa-sign-out"></i>
                                Logout</a>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover" style="background-image: url(/assets/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                Welcome <strong>{{ Auth::user()->name }}</strong> To</h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s"> UPerKu
                                Sehat</h2>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                                UPerKu Sehat, sebuah layanan kesehatan inovatif di lingkungan Universitas Pertamina,
                                hadir sebagai platform terpadu yang menyediakan akses cepat dan mudah terhadap
                                berbagai layanan kesehatan bagi mahasiswa.

                            </p>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <!-- header hero image -->
                <div class="d-flex row">
                    <div class="col-lg-12 d-flex justify-content-center align-items-center ">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s"
                            data-wow-delay="1s">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner ">
                                    <div class="carousel-item active">
                                        <img src="/assets/banner.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/banner2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/banner3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <section id="services" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Services <br> <span> Choose your need to help!</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="/assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="/assets/images/services-shape-1.svg" alt="shape">
                            <i class="fa fa-stethoscope"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="{{ route('toPageChat') }}">Chat Dokter</a></h4>
                            <p class="text">Konsultasikan kodisi kesehatanmu dengan dokter ahli secara personal tanpa
                                jarak.</p>
                            <a class="more" href="{{ route('toPageChat') }}">Chat!<i
                                    class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="/assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="/assets/images/services-shape-2.svg" alt="shape">
                            <i class="fa fa-medkit"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="{{ route('toPageJanji') }}">Janji Medis</a></h4>
                            <p class="text">Buat janji temu untuk konsultasi kesehatan secara langsung</p>
                            <a class="more" href="{{ route('toPageJanji') }}">Buat Janji <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="/assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="/assets/images/services-shape-3.svg" alt="shape">
                            <i class="fa fa-heartbeat"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Riwayat Medis</a></h4>
                            <p class="text">Riwayat dan catatan kesehatan</p>
                            <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== TEAM PART START ======-->

    <section id="doctor" class="team-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-30">
                        <div class="line m-auto"></div>
                        <h3 class="title"><span>Meet Our</span> Doctors</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="/img/ozi.jpeg" alt="Team">
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">dr. Ahmad Arroziqi SpKK</a></h5>
                            <p class="text">Dokter Spesialis Kulit dan Kelamin</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <div class="team-image">
                            <img src="/img/ari.png" alt="foto">

                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">dr. Ari Senku chan </a></h5>
                            <p class="text">Spesialis Kejiwaan</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s"
                        data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="/img/poto parhan.jpeg" alt="Team">

                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">dr. Farhan Dwi</a></h5>
                            <p class="text">Dokter Umum</p>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->



    <!--====== BLOG PART START ======-->

    <section id="articles" class="blog-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-35">
                        <div class="line"></div>
                        <h3 class="title"><span>Our Recent</span> Articles</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="/img/fotoartikel1.jpeg" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li>Posted By: <a href="#"> Suci Risanti R</a></li>
                                <li>06 Jan 2024</li>
                            </ul>
                            <p class="text">Ribuan Tentara Israel Kena Mental Imbas Perang, Kasus Bunuh Diri
                                Meningkat</p>
                            <a class="more"
                                href="https://health.detik.com/berita-detikhealth/d-7127047/ribuan-tentara-israel-kena-mental-imbas-perang-kasus-bunuh-diri-meningkat">ReadMore
                                <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="blog-image">
                            <img src="/img/fotoartikel2.jpeg" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li>Posted By: <a href="#"> Bayu Ardi I</a></li>
                                <li>07 Jan 2024</li>
                            </ul>
                            <p class="text">Paru-paru sehat VS Berpenyakit, Ini Ciri-ciri dan gejalanya.</p>
                            <a class="more"
                                href="https://health.detik.com/berita-detikhealth/d-7127994/paru-paru-sehat-vs-berpenyakit-ini-ciri-ciri-dan-gejalanya">Read
                                More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="blog-image">
                            <img src="/img/fotoartikel3.jpeg" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li>Posted By: <a href="#">Nafilah Sri N</a></li>
                                <li>07 Jan 2024</li>
                            </ul>
                            <p class="text">Polio Muncul Lagi di RI, Menkes Desak Warga Setop BAB Sembarangan.</p>
                            <a class="more"
                                href="https://health.detik.com/berita-detikhealth/d-7128760/polio-muncul-lagi-di-ri-kemenkes-desak-warga-setop-bab-sembarangan">Read
                                More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <h4 class="text-center mb-2">“Kekayaan yang paling utama adalah kesehatan.” </h4>
                <h5 class="text-center"> -Ralph Waldo Emerson</h5>
            </div> <!-- subscribe area -->
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="/img/logouperku1.png" alt="logo">
                            </a>
                            <p class="text">UPerKu
                                Sehat menawarkan informasi layanan kesehatan, artikel kesehatan, serta kemudahan
                                untuk mengatur janji temu dengan dokter. Dengan tampilan yang bersih dan navigasi
                                yang intuitif, UPerKu Sehat memprioritaskan kesehatan mahasiswa dengan
                                memberikan solusi yang efisien dan terpercaya.</p>
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <!-- footer wrapper -->
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Resources</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Doctor</a></li>
                                    <li><a href="#">Blog</a></li>

                                </ul>
                            </div> <!-- footer wrapper -->
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-5">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Contact Us</h4>
                            </div>
                            <ul class="contact">
                                <li>082216860317</li>
                                <li>uperkusehat@univerrsitaspertamina.ac.id</li>
                                <li> Jl. Teuku Nyak Arief, Simprug Jakarta Selatan <br> DKI Jakarta.</li>
                            </ul>
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content">
                                <p class="text"> UPerKu-Sehat 2024</a></p>
                            </div> <!-- copyright content -->
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer copyright -->
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!--====== Plugins js ======-->
    <script src="/assets/js/plugins.js"></script>

    <!--====== Slick js ======-->
    <script src="/assets/js/slick.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="/assets/js/ajax-contact.js"></script>

    <!--====== Counter Up js ======-->
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/scrolling-nav.js"></script>

    <!--====== wow js ======-->
    <script src="/assets/js/wow.min.js"></script>

    <!--====== Particles js ======-->
    <script src="/assets/js/particles.min.js"></script>

    <!--====== Main js ======-->
    <script src="/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
