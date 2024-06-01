<nav class="navbar navbar-light navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand text-wrap" href="#"><img src="/img/logouperku1.png" width="100" alt="pt.wiratrans samudera"></a>

        {{-- toggle btn --}}
        <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- sidebar --}}
        <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

            {{-- sidebar header --}}
            <!-- <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PT WIRATRANS SAMUDERA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div> -->

            {{-- sidebar body --}}
            <div class="offcanvas-body d-flex flex-lg-row flex-column">
                <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#hero-carousel">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Chat Dokter</a></li>
                            <li><a class="dropdown-item" href="#">Janji Medis</a></li>
                            <li><a class="dropdown-item" href="#">Drugs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Article</a>
                    </li>
                </ul>

                {{-- switch toggle --}}
                <!-- <div class="toggle d-flex gap-3 align-items-center justify-content-center">
                    <div class="">
                        <div class="switchToggle">
                            <input type="checkbox" id="switch">
                            <label for="switch">Toggle</label>
                        </div>
                    </div>
                    <div class="">
                        <a class="btn btn-primary mail d-flex gap-1" data-bs-toggle="collapse" href="#" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <span class="material-icons">email</span>
                            Email
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</nav>