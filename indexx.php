<!doctype html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Digipro</title>
</head>

<body>
    <!--top nav start-->
    <ul class="nav justify-content-end navbar-dark bg-dark">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Account list</a>
        </li>
        <li>
            <i class='fas fa-shopping-cart' style='color:white;'></i>
        </li>
        <li class="nav-item">
            <i class="fa fa-shopping-cart" style="font-size:24px"></i>
            <a class="nav-link" href="#"> My Cart </a>

        </li>
    </ul>
    <!--top nav end-->
    <!--nav bar start-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Digipro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Off sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Best Sellers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Your Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Best For You</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!--nav bar end-->
    <!--carosuel start-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="caros1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;">Introducing Our Business In Social Media for Digipro</h2>
                    <p style="color:black; text-align:left">Our company have decided to make oru products and accesories in all social media for your convnience </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="caros2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;">Go Green on Digipro</h2>
                    <p style="color:white;">As we are turning to Go Green digipro is showing importance in green natural products and selling natural and traditional products on our platform </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="caros3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--carosuel end-->
    <!--products start-->
    <div class="row">
        <div class="card" style="width: 19.9rem;">
            <img src="pro1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mobiles and Accessories</h5>
                <p class="card-text">Starting from &#8377; 10,000</p>
                <p><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </p>
                <div style="text-align: center;">
                    <a href="mobs.php" class="btn btn-dark">Know More</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 19.99rem;">
            <img src="pro2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Fashion</h5>
                <p class="card-text">Starting from &#8377; 1,999 ,50% off </p>
                <p><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </p>
                <div style="text-align: center;">
                    <a href="#" class="btn btn-dark">Know More</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 19.9rem;">
            <img src="pro3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Fitness Essentials</h5>
                <p class="card-text">Starting form &#8377; 999</p>
                <p><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <div style="text-align: center;">
                    <a href="#" class="btn btn-dark">Know More</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 19.9rem;">
            <img src="pro4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Furniture</h5>
                <p class="card-text">Starting form &#8377; 4,999</p>
                <p><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </p>
                <div style="text-align: center;">
                    <a href="#" class="btn btn-dark">Know More</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 19.9rem;">
            <img src="pro5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cookware & dining</h5>
                <p class="card-text">Starting form &#8377; 2,999</p>
                <p><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <div style="text-align: center;">
                    <a href="#" class="btn btn-dark">Know More</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 19.9rem;">
            <img src="pro6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Musical Instruments</h5>
                <p class="card-text">Starting form &#8377; 999</p>
                <p><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </p>
                <div style="text-align: center;">
                    <a href="#" class="btn btn-dark">Know More</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 19.9rem;">
            <img src="pro7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">IoT Products</h5>
                <p class="card-text">Starting form &#8377; 499</p>
                <p><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </p>
                <div style="text-align: center;">
                    <a href="#" class="btn btn-dark">Know More</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 19.9rem;">
            <img src="pro8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Laptops and PC's</h5>
                <p class="card-text">Starting form &#8377;29,999 </p>
                <p><span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </p>
                <div style="text-align: center;">
                    <a href="#" class="btn btn-dark">Know More</a>
                </div>
            </div>
        </div>
    </div>
    <!--products end-->
    <!--next/pre start-->
    <div class="center">
        <a href="#" class="previous">&laquo; Previous</a>
        <a href="#" class="next"> Next &raquo;</a>
    </div>
    <!--next/pre -->
    <br> <br>
    <!-- Footer start-->
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left bg-dark">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <br>
                    <h5 class="text-uppercase" style="font-family:Verdana, Geneva, Tahoma, sans-serif; text-align:center ; color:blanchedalmond"><b>
                            Digipro </b> </h5>
                    <br>
                    <p style="font-family:Verdana, Geneva, Tahoma, sans-serif ; color:cornsilk">DigiPro inc ,Online shopping site in India - Shop Online for men, women and kids fashion,
                        home décor and furnishings, kitchen apppliances, health and sports products at a affordable
                        price which connected even in rural areas...</b> </p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase" style="color:cornsilk">Know US</h5>

                    <ul class="list-unstyled" style="color:cornsilk;border-radius:10px">
                        <li>
                            <a href="#!">About US</a>
                        </li>
                        <li>
                            <a href="#!">Careers</a>
                        </li>
                        <li>
                            <a href="#!">Press Releases</a>
                        </li>
                        <li>
                            <a href="#!">DigiPro</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase" style="color:cornsilk">Connect With US</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Instagram</a>
                        </li>
                        <li>
                            <a href="#!">Twitter</a>
                        </li>
                        <li>
                            <a href="#!">Instagram</a>
                        </li>
                        <li>
                            <a href="#!">Youtube</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 bg-dark" style="color:cornsilk">© 2021 Copyright:
            <a href="#">DigiPro.inc</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer end -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>