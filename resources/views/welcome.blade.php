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


        {{-- HERO --}}
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
        {{-- HERO --}}

        {{-- BERITA --}}
        <section id="berita">
            <div class="container py-5">

                <div class="header-berita text-center">
                    <h2 class="fw-bold">Berita Kegiatan Pondok Pesantren</h2>
                </div>

                <div class="row py-5">
                    <div class="col-lg-4">
                        <div class="card-border-0">
                            <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary" >21/04/2025</p>
                                <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Al Hijrrah</h4>
                                <p class="text-secondary">#pesantrenmodern</p>
                                <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-border-0">
                            <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary" >21/04/2025</p>
                                <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Al Hijrrah</h4>
                                <p class="text-secondary">#pesantrenmodern</p>
                                <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-border-0">
                            <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary" >21/04/2025</p>
                                <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Al Hijrrah</h4>
                                <p class="text-secondary">#pesantrenmodern</p>
                                <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="foother-berita text-center">
                    <a href="" class="btn btn-outline-danger"> Berita Lainnya</a>
                </div>
            </div>
        </section>

         {{-- JOIN --}}
        <section id="join" class="py-5">
            <diV class="container py-5">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="stripe me-2"></div>
                            <h5>Daftar Santri</h5>
                        </div>
                        <h1 class="fw-bold mb-2">Gabung bersama kami, mewujudkan generasi rabani</h1>
                        <p class="mb-3">
                            Pesantren Al Hijrah merupakan pesantren terbaik di Jawa Barat, dengan
                            meluluskan santri dan menjadi ustadz terkemuka berdakwah di pelosok nusantara
                        </p>
                        <buuton class="btn btn-outline-danger">Register</buuton>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/il-join.jpeg') }} " class="img-fluid" alt="">
                    </div>
                </div>
            </diV>
        </section>
         {{-- JOIN --}}


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity=
            "sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
        </script>

        <script>
            const navbar = document.querySelector(".fixed-top");
            window.onscroll = () => {
                if (window.scrollY > 100) {
                    navbar.classList.add("scroll-nav-active");
                    navbar.classList.add("text-nav-active");
                    navbar.classList.remove("navbar-dark");
                }else {
                    navbar.classList.remove("scroll-nav-active");
                    navbar.classList.add("navbar-dark");
                }
            };
        </script>
    </body>
</html>
