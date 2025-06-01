<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Pesantren Al Hijrah</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo.png') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    </head>
    <body>
        {{-- NAVBAR --}}

        <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                 <img src="{{ asset('assets/icons/ic-logo.png') }}" height="55" width="55" alt="">
                </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Presentasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Kontak</a>
                                </li>
                            </ul>
                                <div class="d-flex">
                                    <button class="btn btn-danger">Register</button>
                                </div>
                        </div>
            </div>
        </nav>
        {{-- NAVBAR --}}

        <section id="hero">
            <div class="container text-center text-white">
                <div class="hero-title">
                    <div class="hero-text">Selamat Datanag <br> Di Pesantren Al Hijrah</div>
                    <h5> Pondok Pesantren Modern Dengan Konsep Islam Kaffah</h5>
                </div>
            </div>
        </section>

        <section id="program" style="margin-top: -30px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Pendidikan Berkualitas</h5>
                            </div>
                            <img src="{{ asset('assets/icons/ic-book.png') }}" height="55" width="55" alt="icon">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between  align-items-center">
                            <div>
                                <h5>Pendidikan Berakhlak</h5>
                            </div>
                            <img src="{{ asset('assets/icons/ic-globe.png') }}" height="55" width="55" alt="icon">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Pendidikan Muamalah</h5>
                            </div>
                            <img src="{{ asset('assets/icons/ic-neraca.png') }}" height="55" width="55" alt="icon">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Pendidikan Teknologi</h5>
                            </div>
                            <img src="{{ asset('assets/icons/ic-komputer.png') }}" height="55" width="55" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity=
            "sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
        </script>
    </body>
</html>
