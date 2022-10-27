<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Homepage</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('template/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/assets/css/nucleo-svg.css" rel="stylesheet') }}" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    {{-- <link href="{{ asset('template/assets/css/nucleo-svg.css') }}" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{ asset('template/logo/css/all.min.css') }}">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('template/assets/css/soft-ui-dashboard.css?v=1.0.6') }}" rel="stylesheet" />
    </head>
<body>
    {{-- Side Bar --}}
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
        {{-- Sidebar Head --}}
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                {{-- <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html " target="_blank">
                    
                </a> --}}
            {{-- Logo --}}
            <div class="navbar-brand m-0">
                <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Kelompok7Bookstore</span>
            </div>
        {{-- Logo End --}}
        </div>
        {{-- Sidebar Head End --}}

        <hr class="horizontal dark mt-0">

        {{-- Sidebar Body --}}
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                {{-- Profile --}}
                <div class="ms-5 me-5">
                    <div class="dropdown-center mb-3">
                        <button class="btn my-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('template/assets/img/bruce-mars.jpg') }}" alt="profile_image" class="w-40 border-radius-lg shadow-sm " title="Ambil Dari Database">
                            <br>
                            <p class="mt-2 mb-2">Profile</p>
                        </button>
                        <ul class="dropdown-menu mt-0">
                            <li><a class="dropdown-item" href="userprofile">My Profile</a></li>
                            <li><a class="dropdown-item" href="#">History</a></li>
                            <li><a class="dropdown-item" href="#">Log Out</a></li>
                        </ul>
                    </div>
                </div>
                {{-- Profile End --}}
                <li class="nav-item">
                    <div class="container">
                        <div class="row ms-2 me-2">
                            {{-- Homepage --}}
                            {{-- <button type="button" class="btn col-md-12" href="userhomepage">
                                <i class="fa-solid fa-store"></i>
                                <p>Homepage</p>
                            </button> --}}
                            <a href="userhomepage" class="btn col-md-12">
                                <i class="fa-solid fa-store"></i>
                                <p>Homepage</p>
                            </a>
                            {{-- Homepage End --}}

                            {{-- Cart --}}
                            <button type="button" class="btn col-md-12">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <p>List cart</p>
                            </button>
                            {{-- Cart End --}}
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
        {{-- Need Help --}}
        <div class="sidenav-footer mx-3 mt-5">
            <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
                <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpg')"></div>
                    <div class="card-body text-start p-3 w-100">
                        <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                            <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
                        </div>
                        <div class="docs-info">
                            <h6 class="text-white up mb-0">Need help?</h6>
                            <p class="text-xs font-weight-bold">Please contactus</p>
                            <a href="" target="_blank" class="btn btn-white btn-sm w-100 mb-0">ContactUs</a>
                        </div>
                </div>
            </div>
        </div>
        {{-- Need Help End --}}
        {{-- Sidebar Body End --}}
    </aside>
    {{-- Side Bar End --}}

    {{-- Content --}}
    <div class="main-content position-relative bg-gray-100">
        {{-- Search --}}
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-2">
                    
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategory
                        </button>
                        <ul class="dropdown-menu">
                            @foreach($kategori as $kat)
                            <li><a class="dropdown-item" href="{{ url('userhomepage?kategori='.$kat->id) }}">{{ $kat->jenis_kategori }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <form class="d-flex" action="userhomepage" method="GET">
                        <input type="search" class="form-control" placeholder="Search Book" aria-label="Username" name="search">
                        <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>
        {{-- search End --}}

        {{-- Carousel --}}
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded-3 mt-5 mb-5">
                    <div class="carousel-item active">
                        <img src="{{ asset('template/media/carousel1.jpg') }}" class="d-block w-100" alt="..." width="500" height="200">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('template/media/carousel2.jpg') }}" class="d-block w-100" alt="..." width="500" height="200">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('template/media/carousel3.jpg') }}" class="d-block w-100" alt="..." width="500" height="200">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        {{-- Carousel End --}}

        {{-- Book --}}
        <div class="container">
            <div class="row">
                {{-- Book1 --}}
                @foreach ($listbuku as $list)
                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <a class="d-block shadow-xl border-radius-xl">
                                <img src="../assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                            </a>
                        </div>
                        <div class="card-body px-1 pb-0">
                            <div>
                                <h5>{{ $list->judul }}</h5>
                            </div>
                            <div class="mb-2">
                                <p class="text-gradient text-dark mb-2 text-sm">Rating  </p>
                                <p class="text-gradient text-dark mb-2 text-sm">Kategory: {{ $list->kategori->jenis_kategori }}</p>
                                <p class="text-gradient text-dark mb-2 text-sm">Stock: {{ $list->jumlah }}</p>
                            </div>
                            <div class="dropdown mb-5">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    See Details
                                </button>
                                <ul class="dropdown-menu">
                                    {{-- <li><p class="dropdown-item">Sinopsis</p></li>
                                    <li></li>
                                    <li></li> --}}
                                    <div class="container">
                                        <p>{{ $list->sinopsis }}</p>
                                        <p>Penulis: {{ $list->penulis }}</p>
                                        <p>Penerbit: {{ $list->penerbit }}</p>
                                    </div>
                                </ul>
                            </div>
                            <div class="ms-auto">
                                <p>Rp {{ $list->harga }}</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">Buy Now!</button>
                                <h6>OR</h6>
                                <button type="button" class="btn btn-outline-primary btn-sm mb-0">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- Book1 End --}}
            </div>
        </div>
        {{-- Book End --}}

        {{-- Copyright --}}
        <div class="container bg-white rounded-3 mt-12">
            <footer class="footer pt-3  ">
                <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                        document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Kelompok7</a>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                        <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                        <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </footer>
        </div>
        {{-- Copyright End --}}
    </div>
    {{-- Content End --}}

    <!--   Core JS Files   -->
    <script src="{{ asset('template/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('template/assets/js/soft-ui-dashboard.min.js?v=1.0.6') }}"></script>
</body>
</html>