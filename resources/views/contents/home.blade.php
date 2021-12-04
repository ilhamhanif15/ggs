@extends('welcome')

@section('contents')

    <style scoped>
        /* .card-wrapper {
                            margin-bottom: 30px;
                        }

                        .card-image .card .card-img-wrapper {
                            height: 100%;
                        }

                        .card-image .card .card-body {
                            display: none;
                        }

                        .card-image-title-description .card .card-img-wrapper {
                            max-height: 160px;
                        }

                        .card-image-title-description .card {
                            position: relative;
                            min-height: 300px;
                        }

                        .card-image-title-description .card .card-body {
                            height: auto;
                            position: relative;
                            top: 0;
                            margin-bottom: -70px;
                        }

                        .card-image-title-description .card:hover .card-body {
                            top: -70px;
                        }

                        .card-image-title-description .card .card-body .card-title {
                            margin-bottom: .75rem;
                        }

                        .card {
                            display: inline-block;
                            position: relative;
                            overflow: hidden;
                            min-height: 400px;
                            height: 100%;
                        }

                        .card:hover {
                            box-shadow: 8px 12px 31px -10px #ab98ab;
                        }

                        .card-img-wrapper {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            height: 50%;
                            overflow: hidden;
                        }

                        .card-img-wrapper img {
                            transition: 1.5s ease;
                        }

                        .card:hover .card-img-wrapper img {
                            transform: scale(1.15);
                        }

                        .card-body .card-title {
                            margin-bottom: calc(50% + 20px);
                            transition: 1.5s ease;
                        }

                        .card:hover .card-body .card-title {
                            margin-bottom: .75rem;
                        }

                        .card-body {
                            position: absolute;
                            bottom: 0;
                            left: 0;
                            right: 0;
                            height: 50%;
                            background-color: #fff;
                            transition: 1.5s ease;
                        }

                        .card-content {
                            left: 0;
                            right: 0;
                            overflow: hidden;
                            width: 100%;
                            height: auto;
                            transition: 1.5s ease;
                        }

                        .card:hover .card-body {
                            height: 80%;
                        }

                        .card:hover .card-content {
                            bottom: 0;
                        }

                        body {
                            margin: 0;
                            background-image: linear-gradient(to right, #ECE9E6, #FFFFFF);
                        } */
        


        /* .services */
        .services {
            padding-bottom: 20px;
        }

        .services .icon-box {
            padding: 30px;
            position: relative;
            overflow: hidden;
            margin: 0 0 40px 0;
            background: #fff;
            box-shadow: 0 5px 26px 0 rgba(68, 88, 144, 0.14);
            transition: all 0.3s ease-in-out;
            text-align: center;
            border: 1px solid #fff;
        }

        .services .icon {
            margin: 0 auto 20px auto;
            padding-top: 17px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            width: 72px;
            height: 72px;
        }

        .services .icon i {
            font-size: 36px;
            line-height: 1;
        }

        .services .title {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 18px;
        }

        .services .title a {
            color: #111;
        }

        .services .description {
            font-size: 15px;
            line-height: 28px;
            margin-bottom: 0;
            text-align: start;
        }

        .services .icon-box-pink .icon {
            background: #fceef3;
        }

        .services .icon-box-pink .icon i {
            color: #ff689b;
        }

        .services .icon-box-pink:hover {
            border-color: #ff689b;
        }

        .services .icon-box-cyan .icon {
            background: #e6fdfc;
        }

        .services .icon-box-cyan .icon i {
            color: #dab96a;
        }

        .services .icon-box-cyan:hover {
            border-color: #dab96a;
        }

        .services .icon-box-green .icon {
            background: #eafde7;
        }

        .services .icon-box-green .icon i {
            color: #105d3b;
        }

        .services .icon-box-green:hover {
            border-color: #105d3b;
        }

        .services .icon-box-blue .icon {
            background: #e1eeff;
        }

        .services .icon-box-blue .icon i {
            color: #2282ff;
        }

        .services .icon-box-blue:hover {
            border-color: #2282ff;
        }

    </style>

    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-touch="true" style="padding-top: 5rem">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                aria-label="Slide 1" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"
                class=""></button>
            {{-- <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"
                class=""></button> --}}
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('foto/home/1.jpeg') }}" alt="" style="object-fit: cover" width="100%" height="500rem">

                {{-- <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div> --}}
            </div>
            <div class="carousel-item">
                <img src="{{ asset('foto/home/2.jpeg') }}" alt="" style="object-fit: cover" width="100%" height="500rem">

                {{-- <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div> --}}
            </div>
            <div class="carousel-item">
                <img src="{{ asset('foto/home/3.jpg') }}" alt="" style="object-fit: cover" width="100%" height="500rem">

                {{-- <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div> --}}
            </div>
            <div class="carousel-item">
                <img src="{{ asset('foto/home/4.jpeg') }}" style="object-fit: cover" alt="" width="100%" height="500rem">

                {{-- <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div> --}}
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class=" py-5 px-3">
            <h1 class="display-6 text-center fw-bold">WELCOME TO <span style="color: #105d3b">GREEN GEO</span> <span
                    style="color: #dab96a">SINERGI</span> </h1>
            <p class="lead">
                <br>
                PT GREEN GEO SINERGI established in
                2021 which also comprises the team from
                formerly known as PT TIERRA MADYA
                EKSPLORASI
            </p>
            <P>The main business line of PT GREEN
                GEO SINERGI (GGS) is in mineral
                exploration services e.g.: shallow
                drilling service, geological mapping,
                geophysics, and geodetic
                (topography measurement) including
                the economical aspect</P>
            <p>
                In parallel with the drilling services
                in the future, GGS is working hard to
                be an independent, competitive, and
                reliable mineral exploration drilling
                company.
            </p>
            <p>GGS which has headquarter in
                Bandung also has
                representative offices and
                workshop in Balikpapan.
                GGS are supported by professional
                and experienced human resources
                and field teams, broad service
                networks and in competitive price
                make GGS able to deliver added value
                and better services to customers.</p>
            <p>
                Our Technical Teams are available and
                can collaborate with customers in
                dealing with troubles that may occur
                in the field and can help in preparing
                others service if needed.
            </p>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#105d3b" fill-opacity="1" d="M0,320L120,309.3C240,299,480,277,720,277.3C960,277,1200,299,1320,309.3L1440,320L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>

    <div class="services bg-light">
        <div class="container">
            <div class="text-center py-5 px-3">
                <h1 class="display-6 fw-bold" style="color: #105d3b">Services</h1>
                <p class="lead">
                    <br>
                    As a company in mineral exploration services, the services that we offer are:
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="icon-box icon-box-pink">
                        <div class="icon"> <i class="fa fa-tint text-dark" aria-hidden="true"></i> </div>
                        <h4 class="title"><a href="{{ route('service') }}">Coal and Mineral Drilling
                                Services</a></h4>
                        <p class="description">GGS has developed various methods in drilling techniques, from touch
                            coring drilling method to full coring drilling.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="icon-box icon-box-cyan">
                        <div class="icon"><i class="fa fa-wrench" aria-hidden="true"></i></div>
                        <h4 class="title"><a href="{{ route('service') }}">Geotechnical Drilling and Soil
                                Investigation</a></h4>
                        <p class="description">GGS also provided geotechnical drilling
                            services and soil investigation such as
                            Standard Penetration Test (SPT) and
                            Cone Penetration Test (CPT)</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="fa fa-street-view" aria-hidden="true"></i></i></div>
                        <h4 class="title"><a href="{{ route('service') }}">Surface Mapping</a></h4>
                        <p class="description"> The services that GGS can carry out
                            are from topography mapping
                            survey, regional mapping/initial
                            survey, etc</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="icon-box icon-box-blue">
                        <div class="icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
                        <h4 class="title"><a href="{{ route('service') }}">Workshop</a></h4>
                        <p class="description">In order to deliver our best work, we
                            have the workshop to built, assemble
                            and maintain our equipments.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#dab96a" fill-opacity="1" d="M0,0L120,26.7C240,53,480,107,720,112C960,117,1200,75,1320,53.3L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>


    

    {{-- <div class="bg-light">
        <div class="container">

            <div class="text-center py-5 px-3">
                <h1 class="display-6 fw-bold">Services</h1>
                <p class="lead">
                    <br>
                    As a company in mineral exploration services, the services that we offer are:
                </p>
            </div>

            <div class="container">
                <div class="row">
                    <div class="card-wrapper col-lg-3 col-md-6 col-xs-12">
                        <div class="card shadow-lg border-top-0">
                            <div class="card-img-wrapper">
                                <img class="card-img-top rounded-3" src="{{ asset('coal.png') }}" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-center">Coal and Mineral Drilling
                                    Services</h5>
                                <p class="card-text">
                                    <br>
                                    GGS has developed various
                                    methods in drilling techniques,
                                    from touch coring drilling
                                    method to full coring drilling.
                                </p>
                                <a href="{{ route('service-1') }}" class="btn btn-primary">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper col-lg-3 col-md-6 col-xs-12">
                        <div class="card shadow-lg border-top-0">
                            <div class="card-img-wrapper">
                                <img class="card-img-top rounded-3" src="{{ asset('geo.png') }}" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-center">Geotechnical Drilling and Soil
                                    Investigation</h5>
                                <p class="card-text">
                                    <br>
                                    GGS also provided geotechnical drilling
                                    services and soil investigation such as
                                    Standard Penetration Test (SPT) and
                                    Cone Penetration Test (CPT)
                                </p>
                                <a href="{{ route('service-2') }}" class="btn btn-primary">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper col-lg-3 col-md-6 col-xs-12">
                        <div class="card shadow-lg border-top-0">
                            <div class="card-img-wrapper">
                                <img class="card-img-top rounded-3" src="{{ asset('mapping.png') }}" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-center">Surface Mapping</h5>
                                <p class="card-text">
                                    <br>
                                    The services that GGS can carry out
                                    are from topography mapping
                                    survey, regional mapping/initial
                                    survey, etc
                                </p>
                                <a href="{{ route('service-3') }}" class="btn btn-primary">learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrapper col-lg-3 col-md-6 col-xs-12">
                        <div class="card shadow-lg border-top-0">
                            <div class="card-img-wrapper">
                                <img class="card-img-top rounded-3" src="{{ asset('workshop.jpeg') }}" alt="">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-center">Workshop</h5>
                                <p class="card-text">
                                    <br>
                                    In order to deliver our best work, we
                                    have the workshop to built, assemble
                                    and maintain our equipments.
                                </p>
                                <a href="{{ route('service-4') }}" class="btn btn-primary">learn more</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div> --}}

@endsection
