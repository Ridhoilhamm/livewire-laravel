<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Conversion</title>
</head>

<body>
    <header class="py-4 bg-white">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <a class="navbar-brand" href="#">
                    {{-- <img class="img-fluid" src="https://landingfoliocom.imgix.net/store/collection/clarity-blog/images/logo.svg" alt="Logo" style="height: 40px;"> --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-uppercase" href="#">Organisasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-uppercase" href="#">Sertifikat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-uppercase" href="#">Blog</a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-dark ms-md-3">Join Email List</a>
                </div>
            </nav>
        </div>
    </header>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <h1 class="display-5 fw-bold">Hey 👋 I am Ridho Ilham,.</h1>
                    <p class="mt-3 text-muted">Backend Developer</p>

                </div>

                <div class="col-lg-4">

                    <img class="img-fluid" src="{{ asset('asset/images/image-porto1.png') }}" alt="">
                </div>
                <div class="col-lg-3 text-center">
                    <p class="text-uppercase text-muted fw-bold small">⚡️ Latest Picks</p>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-3 d-flex align-items-center">
                            <img src="https://landingfoliocom.imgix.net/store/collection/clarity-blog/images/hero/1/thumbnail-1.png"
                                class="rounded me-3" alt="" style="height: 50px; width: 50px;">
                            <a href="#" class="text-decoration-none fw-bold text-dark">How a visual artist
                                redefines success in graphic design</a>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <img src="https://landingfoliocom.imgix.net/store/collection/clarity-blog/images/hero/1/thumbnail-2.png"
                                class="rounded me-3" alt="" style="height: 50px; width: 50px;">
                            <a href="#" class="text-decoration-none fw-bold text-dark">How a visual artist
                                redefines success in graphic design</a>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <img src="https://landingfoliocom.imgix.net/store/collection/clarity-blog/images/hero/1/thumbnail-3.png"
                                class="rounded me-3" alt="" style="height: 50px; width: 50px;">
                            <a href="#" class="text-decoration-none fw-bold text-dark">How a visual artist
                                redefines success in graphic design</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-white py-5">
        <div class="container text-center">
            <h1 class="text-center text-primary-bold display-4">Sertifikat</h1>
            <p class="text-muted mx-auto my-4" style="max-width: 600px;">
                Berikut ini merupakan sertifikat yang berhasil saya peroleh
            </p>

            <div class="d-flex justify-content-center mb-5">
                <div class="btn-group" role="group" aria-label="Team Roles">
                    <button class="btn btn-success">Development</button>
                </div>
            </div>

            <!-- Baris kartu -->
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card text-center shadow-sm">
                        <img src="{{ asset('asset/images/Screenshot 2024-11-21 105652.png') }}"
                            class="card-img-top img-fluid" alt="Sertifikasi JavaScript"
                            style="height: 250px; object-fit: cover;" />
                        <div class="card-body">
                            <h5 class="card-title">Sertifikasi JavaScript</h5>
                            <p class="card-text text-muted">Certiport</p>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="text-muted"><i class="bi bi-reddit"></i></a>
                                <a href="#" class="text-muted"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="text-muted"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card text-center shadow-sm">
                        <img src="{{ asset('asset/images/Screenshot 2024-11-21 110241.png') }}"
                            class="card-img-top img-fluid" alt="Arthur Melo"
                            style="height: 250px; object-fit: cover;" />
                        <div class="card-body">
                            <h5 class="card-title">Sertifikat Wordpress</h5>
                            <p class="card-text text-muted">Jagoan Hosting</p>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="text-muted"><i class="bi bi-reddit"></i></a>
                                <a href="#" class="text-muted"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="text-muted"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container py-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="h2 font-weight-bold text-primary">Project</h1>

                <button class="btn btn-link">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 text-secondary transition-colors duration-300 transform hover:text-primary"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>

            <hr class="my-4">

            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            class="card-img-top" alt="Post Image" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-info text-light">Ecommerce</span>
                            <h5 class="card-title mt-4"></h5>
                            <p class="card-text text-muted mt-2">Build menggunakan Node And React, yang mana merupakan
                                Project akhir kelas 11</p>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <p class="text-muted small">Mei 16, 2023</p>
                                </div>
                                <a href="#" class="btn btn-link text-primary text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            class="card-img-top" alt="Post Image" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-info text-light">Website Caffe</span>
                            <p class="card-text text-muted mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Nam est asperiores vel, ab animi recusandae nulla veritatis id tempore sapiente.
                            </p>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <p class="text-muted small">February 6, 2022</p>
                                </div>
                                <a href="#" class="btn btn-link text-primary text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://images.unsplash.com/photo-1597534458220-9fb4969f2df5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80"
                            class="card-img-top" alt="Post Image" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <span class="badge bg-info text-light">Pariwisata</span>
                            <p class="card-text text-muted mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Nam est asperiores vel, ab animi recusandae nulla veritatis id tempore sapiente.
                            </p>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <p class="text-muted small">February 19, 2022</p>
                                </div>
                                <a href="#" class="btn btn-link text-primary text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if ("serviceWorker" in navigator) {
            // Register a service worker hosted at the root of the
            // site using the default scope.
            navigator.serviceWorker.register("/sw.js").then(
                (registration) => {
                    console.log("Service worker registration succeeded:", registration);
                },
                (error) => {
                    console.error(`Service worker registration failed: ${error}`);
                },
            );
        } else {
            console.error("Service workers are not supported.");
        }
    </script>
</body>

</html>
