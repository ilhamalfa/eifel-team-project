<!--
=========================================================
* Soft UI Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
        <title>Register Page</title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.6') }}" rel="stylesheet" />
    </head>

    <body class="">
        <main class="main-content mt-0">
            <section class="min-vh-100 mb-8">
                <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg')">
                <span class="mask bg-gradient-dark opacity-6"></span>
                </div>
                <div class="container">
                    <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                        <div class="card z-index-0" style="margin-top: -100px">
                            <div class="card-header text-center pt-4">
                            <h2>{{ __('Register') }}</h2>
                            </div>
                            <div class="card-body" style="margin-top: -25px">
                            <form method="POST" action="{{ route('register') }}" role="form text-left">
                                @csrf
                                {{-- Username --}}
                                <div class="mb-3">
                                    <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus placeholder="Username" />
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                {{-- Name --}}
                                <div class="mb-3">
                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required  placeholder="Name" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                {{-- no Telp --}}
                                <div class="mb-3">
                                    <input type="number" id="nomor_Telp" class="form-control @error('nomor_Telp') is-invalid @enderror" name="nomor_Telp" value="{{ old('nomor_Telp') }}" required placeholder="Nomor Telp"/>
                                    @error('nomor_Telp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                {{-- Email --}}
                                <div class="mb-3">
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email"/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                {{-- Password --}}
                                <div class="mb-3">
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password"/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                {{-- Password Confirm --}}
                                <div class="mb-3">
                                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" aria-label="Password" aria-describedby="password-addon" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-check form-check-info text-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                                <label class="form-check-label" for="flexCheckDefault"> I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a> </label>
                                </div>
                                <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">{{ __('Register') }}</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ url('login') }}" class="text-dark font-weight-bolder">Sign in</a></p>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
        <script>
        var win = navigator.platform.indexOf("Win") > -1;
        if (win && document.querySelector("#sidenav-scrollbar")) {
            var options = {
            damping: "0.5",
            };
            Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
        }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.6') }}"></script>
    </body>
</html>


