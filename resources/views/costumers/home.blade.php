@extends('layouts.main')
@section('title')
    Home
@endsection
@section('content')

    <section class="hero">
        <main class="content">
            <h1>Udah Dingin Diminum Gak Enak!</h1>
            <p>“Secangkir kopi dapat membuat kita belajar, bahwa rasa pahit juga dapat dinikmati.”</p>
            <a href="/product" class="btn">Pesan Sekarang</a>
        </main>
    </section>

    <section class="py-5 about container">
        <h1 class="mb-5 text-center">Tentang Kami</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/Cappucino.jpg')}}" alt="" width="100%">
            </div>
            <div class="col-md-6">
                <h4 class="fst-italic text-decoration-underline mb-3">Mengapa Memilih Coffee MZ</h4>
                <p> Kedai kopi "Coffee MZ" adalah sebuah tempat yang menyajikan 
                    berbagai jenis kopi berkualitas tinggi dengan sentuhan unik dan khas. 
                    Berlokasi di pusat kota yang ramai, kedai ini memiliki suasana yang hangat dan nyaman, 
                    cocok untuk bersantai sambil menikmati secangkir kopi yang segar.
                </p>
                <p>
                    Dari aroma kopi yang menggoda 
                    hingga desain interior yang modern namun tetap cozy, 
                    "Coffee MZ" mengundang para pengunjung untuk merasakan pengalaman kopi yang tak terlupakan. 
                </p>
            </div>
        </div>
    </section>

    <section class="product container">
    <h1 class="py-5 text-center">Best Product</h1>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                <img src="{{ asset('images/Cappucino.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title fw-bold">--Cappucino--</h5>
                        <p class="fs-5 fw-bold ">Rp.25.000</p>
                        <a href="#" class="btn btn-dark">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                <img src="{{ asset('images/Vanilla Latte.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title fw-bold">--Vanilla Latte--</h5>
                        <p class="fs-5 fw-bold ">Rp.32.000</p>
                        <a href="#" class="btn btn-dark">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                <img src="{{ asset('images/latte.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title fw-bold">--Latte--</h5>
                        <p class="fs-5 fw-bold ">Rp.18.000</p>
                        <a href="#" class="btn btn-dark">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                <img src="{{ asset('images/matcha latte.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title fw-bold">--Matcha Latte--</h5>
                        <p class="fs-5 fw-bold ">Rp.20.000</p>
                        <a href="#" class="btn btn-dark">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                <img src="{{ asset('images/Americano.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title fw-bold">--Americano--</h5>
                        <p class="fs-5 fw-bold ">Rp.18.000</p>
                        <a href="#" class="btn btn-dark">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                <img src="{{ asset('images/Espresso.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title fw-bold">--Espresso--</h5>
                        <p class="fs-5 fw-bold ">Rp.23.000</p>
                        <a href="#" class="btn btn-dark">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection