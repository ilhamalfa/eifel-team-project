@extends('customer.layouts.layout')

@section('main')
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
                    @foreach ($listbuku as $buku)
                    <div class="col-xl-3 col-md-6 mb-xl-0 mt-4">
                        <div class="card card-blog card-plain">
                            <div class="position-relative">
                                <a class="d-block shadow-xl border-radius-xl">
                                    <img src="../assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                </a>
                            </div>
                            <div class="card-body px-1 pb-0">
                                <p class="text-gradient text-dark mb-2 text-sm">{{ $buku->kategori->jenis_kategori }}  </p>
                                <a href="">
                                    <h5>{{ $buku->judul }}</h5>
                                </a>
                                <p class="text-gradient text-dark mb-2 text-sm">Rp {{ $buku->harga }}  </p>
                                <a href="">
                                    <p>See Details</p>
                                </a>
                                <div class="d-flex align-items-center justify-content-between">
                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0">Buy Now!</button>
                                    <h6>OR</h6>
                                    <form action="{{ url('customer/cart/store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $buku->id }}">
                                        <input type="hidden" name="qty" id="qty" min="1" max="{{ $buku->jumlah }}" value="1">
                                        <button type="submit" class="btn btn-outline-primary btn-sm mb-0">
                                            <i class="fa-solid fa-cart-shopping"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- Book1 End --}}
                </div>
            </div>
            {{-- Book End --}}
@endsection