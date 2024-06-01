<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chat Dokter</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <style></style>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'>
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>


<body>
    <div class="container-lg border rounded mt-5 p-3">
        <div class="row d-flex flex-row">
            <span class="d-inline">
                <h2>Chat Dokter</h2>
            </span>
            <a href="{{ route('landing') }}" class="text-decoration-none">
                <li class="fa fa-chevron-circle-left"></li>
                Back
            </a>
            {{-- <div class=" col ">
                <div class=" ilustrasi border rounded mt-3" style="width:350px;">
                    <img src="/img/ilus-chatdokter.png" class="img-fluid" alt="ilustration">
                </div>
            </div> --}}

        </div>
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row ">
                    <div class="col-6">
                        <h3 class="mb-3">Choose Your Doctor ! </h3>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                            data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button"
                            data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12 d-flex justify-content-center align-item-center">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    <div class="row ">

                                        <div class="card me-3" style="width: 18rem;">
                                            <img src="/img/ozi.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">dr. Ozi SpKK</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Chat</a>
                                            </div>
                                        </div>
                                        <div class="card me-3" style="width: 18rem;">
                                            <img src="/img/ari.png" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">dr. Ari SpKK</h5>
                                                
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Chat</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 18rem;">
                                            <img src="/img/poto parhan.jpeg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">dr. Parhan SpKK</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Chat</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="card me-3" style="width: 18rem;">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Chat</a>
                                            </div>
                                        </div>
                                        <div class="card me-3" style="width: 18rem;">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Chat</a>
                                            </div>
                                        </div>
                                        <div class="card" style="width: 18rem;">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Chat</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script type='text/javascript' src=''></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
</body>

</html>
