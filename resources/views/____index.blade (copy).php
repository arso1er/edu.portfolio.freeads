<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BazingaAds, the #1 free ads platform in the world.">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>BazingaAds | Ultimate free ads</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    {{-- <link rel="stylesheet" href="/assets/css/fontawesome.css"> --}}
    {{-- <link rel="stylesheet" href="/assets/css/templatemo-space-dynamic.css"> --}}
    {{-- <link rel="stylesheet" href="/assets/css/animated.css"> --}}
    <link rel="stylesheet" href="/assets/css/bazinga-home.css">

</head>
<body>

    <nav class="navbar navbar-light bg-light sticky-top">
        <div class="container">
            <a class="fw-bold navbar-brand text-primary text-uppercase" href="#">
                Bazinga<span class="text-danger">Ads</span>
            </a>
            <div class="baz-nav d-sm-flex d-none">
                <div class="baz-nav-item p-4">
                    <a class="baz-nav-link active" aria-current="page" href="#">Home</a>
                </div>
                <div class="baz-nav-item p-4">
                    <a class="baz-nav-link" href="#">Features</a>
                </div>
                <div class="baz-nav-item p-4">
                    <a class="baz-nav-link" href="#">Pricing</a>
                </div>
                <div class="baz-nav-item p-4">
                    <a class="baz-nav-link">Not Disabled</a>
                </div>
            </div>
            <div class="baz-nav d-sm-flex d-none">
                <div class="baz-nav-item p-4">
                    <a class="baz-nav-link active" aria-current="page" href="#">Home</a>
                </div>
                <div class="baz-nav-item p-4">
                    <a class="baz-nav-link" href="#">Features</a>
                </div>
                <div class="baz-nav-item p-4">
                    <a class="baz-nav-link" href="#">Pricing</a>
                </div>
                <div class="baz-nav-item p-4">
                    <a class="baz-nav-link">Not Disabled</a>
                </div>
            </div>
            <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                        <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </div>
    </nav>

    <main class="container-fluid p-0 position-relative home">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-sm-6 baz-home-header order-md-2"></div>
                <div class="col-12 col-sm-6 mt-4 mt-md-0 d-flex flex-column">
                    <div class="text-danger text-uppercase fw-bold">Welcome to Bazinga Ads.</div>
                    <div class="fs-2 lh-sm mb-3 mt-3">We are the number one growing free ads platform.</div>
                    <div class="fs-4 mb-3">We offer unlimited free ads to anyone and everyone. You won't find better anywhere else. Over ten thousands people put their trust in Bazinga Ads since its creation, and we'll be happy to have you among us. All you have to do is create an account and join the fun!</div>
                    <form action="/search" class="col-md-8 mt-auto">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light" placeholder="Search ads" aria-label="Search ads" aria-describedby="home-search">
                            <button class="btn btn-outline-secondary" type="submit" id="home-search">Go</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="baz-about text-white">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 order-2 order-md-0 about-person">
                  <div class="mr-5">
                    <img src="/assets/img/about-left-image.png" alt="person graphic">
                  </div>
                </div>
                <div class="col-lg-8 align-self-center about-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item mb-4">
                                <h4>Free Ads</h4>
                                <p class="m-0">Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item mb-4">
                                <h4>Max visibility</h4>
                                <p class="m-0">Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item mb-4">
                                <h4>No hidden fees</h4>
                                <p class="m-0">Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <h4>High reach</h4>
                                <p class="m-0">Lorem ipsum dolor sit amet, ctetur aoi adipiscing eliter</p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>

        <div class="container mt-120 mb-120">
            <div class="align-items-center d-flex justify-content-between mb-4">
                <div class="fs-4 fw-bold">Latest ads</div>
                <a href="#" class="btn btn-primary btn-sm">View more</a>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <a href="#" class="card h-100">
                        <img src="/assets/img/test.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text baz-ellipsis">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">$100</small>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="card h-100">
                        <img src="/assets/img/test.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text baz-ellipsis">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">$100</small>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="card h-100">
                        <img src="/assets/img/test.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text baz-ellipsis">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">$100</small>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="card h-100">
                        <img src="/assets/img/test.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text baz-ellipsis">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">$100</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <footer class="border-top container py-5 text-center">
        &copy; 2021 Bazinga, Inc. All rights reserved.
    </footer>


    <!-- Scripts -->
    {{-- <script src="vendor/jquery/jquery.min.js"></script> --}}
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script> --}}
    {{-- <script src="assets/js/templatemo-custom.js"></script> --}}
    
</body>
</html>