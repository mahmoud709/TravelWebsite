<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-translate="وجهتي">Wejhatee</title>
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <!-- Render elements normaly -->
    <link rel="stylesheet" href="{{ asset('assets/css/Normarize.css') }}">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500;600&family=Poppins:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Ubuntu:ital,wght@0,300;0,400;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <!-- Bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    {{-- header --}}
    @include('website.includes.header')

    @auth
    <!-- orher places -->
    <section class="container mx-auto ">
        <div class="sohar-castleIamges row" style="margin-top: 100px">
            <div class="image col-12 col-sm-6 col-md-3 text-center my-3">
                <img src="{{ asset('assets/images/marketimg1.AVIF') }}" alt="marketimg1.AVIF">
            </div>
            <div class="image col-12 col-sm-6 col-md-3 text-center my-3">
                <img src="{{ asset('assets/images/marketimg2.AVIF') }}" alt="marketimg2">
            </div>
            <div class="image col-12 col-sm-6 col-md-3 text-center my-3">
                <img src="{{ asset('assets/images/marketimg3.AVIF') }}" alt="marketimg3">
            </div>
            <div class="image col-12 col-sm-6 col-md-3 text-center my-3">
                <img src="{{ asset('assets/images/marketimg4.AVIF') }}" alt="marketimg4">
            </div>
        </div>
    </section>
    <!--Start service section -->
    <section class="service container my-5 mx-auto" id="services">
        <div class="container-fluid">
            <div class="textinformation text-center">
                <h2 class="mx-auto" data-translate="servs">Services</h2>
            </div>
        </div>
        <div id="myCarousel" class="carousel slide py-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-12 col-md-4 serv-card">
                            <div class="card m-3 p-3 text-center">
                                <img src="{{ asset('assets/images/hotel.AVIF') }}" alt="hotel" width="80px">
                                <div class="card-body">
                                    <p class="card-text fs-4" data-translate="serv5"><a href="https://www.radissonhotels.com/ar-ae/hotels/radisson-blu-sohar">Hotel</a></p>
                                </div>
                                <div class="address">
                                    <p class="phoneNum">phone :+968 9635 7456</p>
                                    <span class="mail">maii :lorem41@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 serv-card">
                            <div class="card m-3 p-3 text-center">
                                <img src="{{ asset('assets/images/pharmacy.AVIF') }}" alt="pharmacy" width="80px">
                                <div class="card-body">
                                    <p class="card-text fs-4" data-translate="serv4"><a href="https://www.linkedin.com/in/lifeline-hospital-salalah-157b6b1ab?originalSubdomain=om">Hospital</a></p>
                                </div>
                                <div class="address">
                                    <p class="phoneNum">phone :+968 6354 7896</p>
                                    <span class="mail">maii :lorem95@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 serv-card">
                            <div class="card m-3 p-3 text-center">
                                <img src="{{ asset('assets/images/grocery-cart.AVIF') }}" alt="grocery-cart" width="80px">
                                <div class="card-body">
                                    <p class="card-text fs-4 " data-translate="serv6"><a href="https://www.luluhypermarket.com/ar-eg/department-store-home-living-appliances/c/HY00214834">Supermarkets</a></p>
                                </div>
                                <div class="address">
                                    <p class="phoneNum">phone :+968 9687 1234</p>
                                    <span class="mail">maii :lorem75@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End service section -->
    <!-- Start Review section -->
    <div class="container">
    <div class="container-fluid">
            <div class="textinformation text-center">
                <h2 class="mx-auto" data-translate="servs">Reviews</h2>
            </div>
        </div>
        <div class="row review-secion">
            <div class="col-md-4">
                <div class="review">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, sem nec mollis vestibulum, sapien arcu suscipit velit, ac pulvinar sapien mi at ligula. In vitae orci eget ante ullamcorper molestie.</p>
                    <p class="author">- John Doe</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="review">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Nullam vel malesuada velit. Sed consequat, libero vel suscipit venenatis, lorem metus accumsan justo, in efficitur ipsum ligula vel quam.</p>
                    <p class="author">- Jane Smith</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="review">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>Etiam vel felis sed dolor aliquet placerat. Sed eu malesuada dui, id malesuada eros. Nullam bibendum, justo eu pretium lobortis, nisl lorem iaculis purus, sed vestibulum metus dolor ut quam.</p>
                    <p class="author">- Mark Johnson</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Review section -->
    @endauth
    <!-- font awesome library -->
    <script src="https://kit.fontawesome.com/4964aa4896.js" crossorigin="anonymous"></script>
    <!-- Bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/main.js') }}"></script>
</body>

</html>
