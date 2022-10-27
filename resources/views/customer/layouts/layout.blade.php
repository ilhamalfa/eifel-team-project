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
    @include('customer.layouts.sidebar')
    {{-- Side Bar End --}}

    {{-- Content --}}
    <div class="main-content position-relative bg-gray-100">
        @yield('main')

        {{-- Copyright --}}
        <div class="container bg-white rounded-3 mt-5">
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