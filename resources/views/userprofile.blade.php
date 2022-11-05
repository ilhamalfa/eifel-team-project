<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>
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
                <span class="ms-1 font-weight-bold">My Profile</span>
            </div>
        {{-- Logo End --}}
        </div>
        {{-- Sidebar Head End --}}

        <hr class="horizontal dark mt-0">

        {{-- Sidebar Body --}}
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
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

                            {{-- History --}}
                            <button type="button" class="btn col-md-12">
                                <i class="fa-solid fa-clock-rotate-left"></i>
                                <p>History</p>
                            </button>
                            {{-- History End --}}
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
        {{-- Header --}}
        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">Nama Ambil Dari Database</h5>
                            <p class="mb-0 font-weight-bold text-sm">Personal Account</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="#chat" role="tab" aria-selected="true">
                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>document</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(154.000000, 300.000000)">
                                                            <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                                            <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">Messages</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="#profile" role="tab" aria-selected="false">
                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>settings</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(304.000000, 151.000000)">
                                                            <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                            </polygon>
                                                            <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                                            <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">Edit Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Header End --}}

        {{-- Chat --}}
        <div class="container mt-4 mb-4" id="chat">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Conversations</h6>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                            <div class="avatar me-3">
                                <img src="../assets/img/kal-visuals-square.jpg" alt="kal" class="border-radius-lg shadow">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Sophie B.</h6>
                                <p class="mb-0 text-xs">Hi! I need more information..</p>
                            </div>
                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                            <div class="avatar me-3">
                                <img src="../assets/img/marie.jpg" alt="kal" class="border-radius-lg shadow">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Anne Marie</h6>
                                <p class="mb-0 text-xs">Awesome work, can you..</p>
                            </div>
                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                            <div class="avatar me-3">
                                <img src="../assets/img/ivana-square.jpg" alt="kal" class="border-radius-lg shadow">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Ivanna</h6>
                                <p class="mb-0 text-xs">About files I can..</p>
                            </div>
                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                            <div class="avatar me-3">
                                <img src="../assets/img/team-4.jpg" alt="kal" class="border-radius-lg shadow">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Peterson</h6>
                                <p class="mb-0 text-xs">Have a great afternoon..</p>
                            </div>
                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center px-0">
                            <div class="avatar me-3">
                                <img src="../assets/img/team-3.jpg" alt="kal" class="border-radius-lg shadow">
                            </div>
                            <div class="d-flex align-items-start flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Nick Daniel</h6>
                                <p class="mb-0 text-xs">Hi! I need more information..</p>
                            </div>
                            <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- Chat End --}}

        {{-- Edit Profile --}}
        <div class="container mb-5" id="profile">
            <div class="row">
                {{-- Edit --}}
                <form action="{{ url('userhomepage/update') }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control w-75 @error('username') is-invalid @enderror" name="username" id="username" required value="{{ $user->username }}">
                            @error('judul')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control w-75 @error('name') is-invalid @enderror" name="name" id="name" required value="{{ $user->name }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">No. Telp</label>
                        <input type="number" class="form-control w-75 @error('nomor_Telp') is-invalid @enderror" name="nomor_Telp" id="nomor_Telp" required value="{{ $user->nomor_Telp }}">
                            @error('nomor_Telp')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control w-75 @error('email') is-invalid @enderror" name="email" id="email" required value="{{ $user->email }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control w-75 @error('password') is-invalid @enderror" name="password" id="password" required value="{{ $user->password }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" class="form-control w-75 @error('alamat') is-invalid @enderror" name="alamat" id="nomor_Telp" required value="{{ $user->alamat }}">
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </form>
                {{-- Edit End --}}

                {{-- Profile --}}
                <div class="card h-100 col-md-5 ms-4">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Profile Information</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <p class="text-sm">
                            Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
                        </p>
                        <hr class="horizontal gray-light my-4">
                        <ul class="list-group mb-8">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Username:</strong> &nbsp; Ambil Dari Database</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Name:</strong> &nbsp; Ambil Dari Database</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Phone Number:</strong> &nbsp; Ambil Dari Database</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; Ambil Dari Database</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Password:</strong> &nbsp; </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Address:</strong> &nbsp; Ambil Dari Database</li>
                        </ul>
                    </div>
                </div>
                {{-- Profile End --}}
            </div>
        </div>
        {{-- Edit Profile End --}}
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