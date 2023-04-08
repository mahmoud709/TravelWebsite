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
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@500;600&family=Poppins:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Ubuntu:ital,wght@0,300;0,400;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <!-- Bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    {{-- header --}}
    @include('website.includes.header')
    <!-- start main -->
    <main class="hero d-flex justify-content-center align-items-center">
        <div class="textinfo text-center">
            @if (Session::has('error'))
                <div class="row mr-2 ml-2">
                    <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                        id="type-error">{{ Session::get('error') }}
                    </button>
                </div>
            @endif
            <h2 class="text-white fw-bolder text-center" data-translate="Travel">Travel is to live
                more than once</h2>
        </div>
    </main>
    <!-- End main -->
    @auth
        <!-- orher places -->
        <section class="container mx-auto my-5">
            <div class="cards row">
                <div class="card col-12 col-sm-6 col-md-4 my-4 mx-2 item ">
                    <img src="{{ asset('assets/images/salalah.AVIF') }}" class="card-img-top" alt="SalalahImg">
                    <div class="card-body">
                        <a href="{{ route('salalah') }}">
                            <h3 class="card-title card_description" data-translate="loc7">Salalah</h3>
                        </a>
                        <p class="card-text fs-5" data-translate="title7">
                            The best hotels in Salalah are a fundamental pillar in the advancement of the tourism industry
                            in Oman, especially with the historical, renaissance, and recreational
                            elements that the state possesses, which made it the second capital of the Sultanate.
                        </p>
                    </div>
                </div>
                <div class="card col-12 col-sm-6 col-md-4 my-4 mx-2 item">
                    <img src="{{ asset('assets/images/duqm.AVIF') }}" class="card-img-top" alt="duqmImg">
                    <div class="card-body">
                        <a href="{{ route('Duqm') }}">
                            <h3 class="card-title card_description" data-translate="loc8">Duqm</h3>
                        </a>
                        <p class="card-text fs-5" data-translate="title8">
                            Duqm, the Sultanate of Oman, is the city of the future and not just an industrial zone, as the
                            state is witnessing a
                            tourism boom and is currently considered the most promising area for tourism-related
                            investments.
                        </p>
                    </div>
                </div>
                <div class="card col-12 col-sm-6 col-md-4 my-4 mx-2 item">
                    <img src="{{ asset('assets/images/nzwyimg.AVIF') }}" class="card-img-top" alt="nzwyimg">
                    <div class="card-body">
                        <a href="{{ route('nizwa') }}">
                            <h3 class="card-title card_description" data-translate="loc9">Nizwa city</h3>
                        </a>
                        <p class="card-text fs-5" data-translate="title9">
                            The city of Nizwa is located in the Sultanate of Oman in the Al Dakhiliyah Governorate,
                            specifically in the Al Jawf region
                            It is about 164 km from the city of Muscat, and it is the city of Nizwa
                            The regional and administrative center for the Dakhiliyah Governorate
                        </p>
                    </div>
                </div>
                <div class="card col-12 col-sm-6 col-md-4 my-4 mx-2 item">
                    <img src="{{ asset('assets/images/surimage.AVIF') }}" class="card-img-top" alt="surimage">
                    <div class="card-body">
                        <a href="{{ route('sur') }}">
                            <h3 class="card-title card_description" data-translate="loc10">Sur city</h3>
                        </a>
                        <p class="card-text fs-5" data-translate="title10">
                            The Ras Al Hadd Turtle Reserve in the state of Tire includes one of the most wonderful and
                            distinctive tourist attractions.
                            Tire has been famous since ancient times for shipbuilding, and its
                            people were known for their practice of the fishing profession.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- strat Tourist Palces -->
        <section id="TouristPalces" class="container my-5">
            <div class="textinformation text-center">
                <h2 class="mx-auto" data-translate="TouristPalces">Best Tourist Palces</h2>
            </div>
            <div class="weathersahar">
                <h4 class="text-center my-4"><a
                        href="#"
                        data-translate="saharweather"><span class="d-inline-block">Sahar Weather : <span class="value">25</span></span>
                    </a></h4>
            </div>

            <div class="cards row">
                <div class="card col-12 col-sm-6 col-md-4 my-4">
                    <img src="{{ asset('assets/images/img1.AVIF') }}" class="card-img-top" alt="img1">
                    <div class="card-body">
                        <h3 class="card-title" data-translate="loc1"><a href="{{route('saharcastle')}}">sahar castle</a></h3>
                        <p class="card-text fs-5" data-translate="title1">This castle is one of the
                            oldest tourist placesin Sohar, and one of the most important castles and
                            forts due to its privileged location, and the important role it played over the past
                            centuries</p>
                    </div>
                </div>
                <div class="cards col-12 col-sm-6 col-md-4 my-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/img2.AVIF') }}" class="card-img-top" alt="img2">
                        <div class="card-body">
                            <h3 class="card-title" data-translate="loc2"><a href="{{route('Mosqueinfo')}}">Sultan Qaboos Mosque</a></h3>
                            <p class="card-text fs-5" data-translate="title2">One of the most beautiful tourist
                                places in the state of Sohar, is a huge, newly built royal mosque. If you are visiting
                                Sohar,this landmark is one of the most important architectural features that you can see
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cards col-12 col-sm-6 col-md-4 my-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/img3.AVIF') }}" class="card-img-top" alt="img3">
                        <div class="card-body">
                            <h3 class="card-title" data-translate="loc3"><a href="{{route('market')}}">Sohar Old Market</a></h3>
                            <p class="card-text fs-5" data-translate="title3">Sohar Old Market is the most famous tourist
                                attraction in Sohar, and it is an old market with a modern building in the historical style
                                of the country,
                                which is inspired by the architectural forms</p>
                        </div>
                    </div>
                </div>
                <div class="cards col-12 col-sm-6 col-md-4 my-4">
                </div>
                <div class="cards col-12 col-sm-6 col-md-4 my-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/img6.AVIF') }}" class="card-img-top" alt="img6">
                        <div class="card-body">
                            <h3 class="card-title" data-translate="loc6"><a href="{{route('garden')}}">Sohar Gardens</a></h3>
                            <p class="card-text fs-5" data-translate="title6">During your search for the best tourist
                                places in Sohar, you will of course find that the Sohar Gardens sit on its throne
                                , as everyone loves wandering among the green spaces</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Tourist Palces -->
        <!--Start service section -->
        <section class="service container my-5 mx-auto" id="services">
            <div class="container-fluid">
                <div class="textinformation text-center">
                    <h2 class="mx-auto" data-translate="servs">Services</h2>
                </div>
            </div>
            <div id="myCarousel" class="carousel slide py-5" data-bs-ride="carousel" data-bs-interval="1500">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-12 col-md-4 serv-card">
                                <div class="card m-3 p-3 text-center">
                                    <img src="{{ asset('assets/images/dish.AVIF') }}" alt="dish" width="80px">
                                    <div class="card-body">
                                        <p class="card-text fs-4" data-translate="serv1">Resturants</p>
                                    </div>
                                    <div class="address">
                                        <p class="phoneNum">phone :+968 4532 0028</p>
                                        <span class="mail">maii :lorem45@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 serv-card">
                                <div class="card m-3 p-3 text-center">
                                    <img src="{{ asset('assets/images/guard.AVIF') }}" alt="guard" width="80px">
                                    <div class="card-body">
                                        <p class="card-text fs-4 " data-translate="serv2">police stations</p>
                                    </div>
                                    <div class="address">
                                        <p class="phoneNum">phone :+968 1458 4523</p>
                                        <span class="mail">maii :lorem45@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 serv-card">
                                <div class="card m-3 p-3 text-center">
                                    <img src="{{ asset('assets/images/shopping-cart.AVIF') }}" alt="shopping-cart"
                                        width="80px">
                                    <div class="card-body">
                                        <p class="card-text fs-4" data-translate="serv3">commercial centers</p>
                                    </div>
                                    <div class="address">
                                        <p class="phoneNum">phone :+968 7569 1236</p>
                                        <span class="mail">maii :lorem45@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-md-4 serv-card">
                                <div class="card m-3 p-3 text-center">
                                    <img src="{{ asset('assets/images/pharmacy.AVIF') }}" alt="pharmacy" width="80px">
                                    <div class="card-body">
                                        <p class="card-text fs-4" data-translate="serv4">Hospital</p>
                                    </div>
                                    <div class="address">
                                        <p class="phoneNum">phone :+968 6354 7896</p>
                                        <span class="mail">maii :lorem95@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 serv-card">
                                <div class="card m-3 p-3 text-center">
                                    <img src="{{ asset('assets/images/hotel.AVIF') }}" alt="hotel" width="80px">
                                    <div class="card-body">
                                        <p class="card-text fs-4" data-translate="serv5">Hotels</p>
                                    </div>
                                    <div class="address">
                                        <p class="phoneNum">phone :+968 9635 7456</p>
                                        <span class="mail">maii :lorem41@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 serv-card">
                                <div class="card m-3 p-3 text-center">
                                    <img src="{{ asset('assets/images/grocery-cart.AVIF') }}" alt="grocery-cart"
                                        width="80px">
                                    <div class="card-body">
                                        <p class="card-text fs-4 " data-translate="serv6">Supermarkets</p>
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
        <!-- Start Section for google map -->
        <section class="location container">
        <div class="container-fluid">
                <div class="textinformation text-center">
                    <h2 class="mx-auto" data-translate="Location">Location</h2>
                </div>
                <div class="map text-center py-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54730.12673157996!2d31.18115181665648!3d30.980724496326822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3dd3df964481c879%3A0xa5e758c7c82eb314!2sSalalah%2C%20Oman!5e0!3m2!1sen!2seg!4v1680901708321!5m2!1sen!2seg" width="600" height="450" style="border:0;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </div>
        </section>
        <!-- Start Section for google map -->
        <!-- Start Review Section -->
        <section id="Reviews" class="container">
            <div class="container-fluid">
                <div class="textinformation text-center">
                    <h2 class="mx-auto" data-translate="Reviews">Reviews</h2>
                </div>
            </div>
            <div class="cards row my-5 py-5">
                <div class="card rv-item col-12 col-sm-6 col-md-4 my-2 mx-auto p-3">
                    <div class="personinfo">
                        <div class="user text-center">
                            <img src="{{ asset('assets/images/pic-1.AVIF') }}" alt="pic-2">
                            <div class="user-info">
                                <h3>john deo</h3>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi,
                        magni numquam nemo sed ut corrupti,
                        ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
                </div>
                <div class="card rv-item col-12 col-sm-6 col-md-4 my-2 mx-auto p-3">
                    <div class="personinfo ">
                        <div class="user text-center">
                            <img src="{{ asset('assets/images/pic-2.AVIF') }}" alt="pic-2">
                            <div class="user-info">
                                <h3>john deo</h3>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi,
                        magni numquam nemo sed ut corrupti,
                        ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
                </div>
                <div class="card rv-item col-12 col-sm-6 col-md-4 my-2 mx-auto p-3">
                    <div class="personinfo ">
                        <div class="user text-center">
                            <img src="{{ asset('assets/images/pic-3.AVIF') }}" alt="pic-2">
                            <div class="user-info">
                                <h3>john deo</h3>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni
                        numquam nemo sed ut corrupti,
                        ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
                </div>
            </div>
        </section>
    @endauth
    <!-- font awesome library -->
    <script src="https://kit.fontawesome.com/4964aa4896.js" crossorigin="anonymous"></script>
    <!-- Bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/main.js') }}"></script>
</body>

</html>
