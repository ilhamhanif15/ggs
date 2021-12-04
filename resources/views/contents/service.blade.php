@extends('welcome')

@section('contents')



<div style="margin-top: 2cm">
    <div class="border-bottom border-4 border-dark border-top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#105d3b" fill-opacity="1" d="M0,288L0,224L38.9,224L38.9,96L77.8,96L77.8,256L116.8,256L116.8,64L155.7,64L155.7,160L194.6,160L194.6,320L233.5,320L233.5,160L272.4,160L272.4,320L311.4,320L311.4,128L350.3,128L350.3,160L389.2,160L389.2,224L428.1,224L428.1,224L467,224L467,192L505.9,192L505.9,192L544.9,192L544.9,160L583.8,160L583.8,96L622.7,96L622.7,0L661.6,0L661.6,32L700.5,32L700.5,160L739.5,160L739.5,160L778.4,160L778.4,160L817.3,160L817.3,224L856.2,224L856.2,160L895.1,160L895.1,128L934.1,128L934.1,192L973,192L973,320L1011.9,320L1011.9,160L1050.8,160L1050.8,224L1089.7,224L1089.7,256L1128.6,256L1128.6,128L1167.6,128L1167.6,256L1206.5,256L1206.5,64L1245.4,64L1245.4,160L1284.3,160L1284.3,224L1323.2,224L1323.2,256L1362.2,256L1362.2,160L1401.1,160L1401.1,288L1440,288L1440,0L1401.1,0L1401.1,0L1362.2,0L1362.2,0L1323.2,0L1323.2,0L1284.3,0L1284.3,0L1245.4,0L1245.4,0L1206.5,0L1206.5,0L1167.6,0L1167.6,0L1128.6,0L1128.6,0L1089.7,0L1089.7,0L1050.8,0L1050.8,0L1011.9,0L1011.9,0L973,0L973,0L934.1,0L934.1,0L895.1,0L895.1,0L856.2,0L856.2,0L817.3,0L817.3,0L778.4,0L778.4,0L739.5,0L739.5,0L700.5,0L700.5,0L661.6,0L661.6,0L622.7,0L622.7,0L583.8,0L583.8,0L544.9,0L544.9,0L505.9,0L505.9,0L467,0L467,0L428.1,0L428.1,0L389.2,0L389.2,0L350.3,0L350.3,0L311.4,0L311.4,0L272.4,0L272.4,0L233.5,0L233.5,0L194.6,0L194.6,0L155.7,0L155.7,0L116.8,0L116.8,0L77.8,0L77.8,0L38.9,0L38.9,0L0,0L0,0Z"></path></svg>
    </div>
        <div class="container">
            <div class="section-title pt-5 bg-light shadow-lg p-5">
                <h1 class="display-6 fw-bold text-center" style="color: #105d3b">SERVICES</h1>
                <p class="fs-5 text-center">As a company in mineral exploration services, the services that we offer are</p>
            </div>
        </div>

        <div class="container py-3">
            <div class="container p-lg-5 p-0">
                <div class="card shadow-lg border-start-0">
                    <div class="row ">
                        <div class="col-md-4">
                            <img src="{{ asset('foto/coal.jpeg') }}" class="w-100" style="object-fit: cover; border-radius: 1rem">
                        </div>
                        <div class="col-md-8 px-3">
                            <div class="card-block px-3 p-5">
                                <h1 class="card-title display-6 text-center fw-bold" style="color: #dab96a">Coal and Mineral Drilling
                                    Services</h1>
                                <p class="card-text">
                                    <br>
                                    GGS has developed various
                                    methods in drilling techniques,
                                    from touch coring drilling
                                    method to full coring drilling.
                                    These drilling methods are for
                                    testing the coal sources and
                                    other mineral in a prospect area
                                    and will continue with drawing
                                    in lithological profile for every
                                    drill hole in the report format to
                                    the client.
                                </p>
                                <p class="card-text">The total depth of the drill holes
                                    depend on the request and the
                                    needs of our clients and the
                                    presentation of the drill result
                                    (core recovery) will be inserted
                                    into core box and next on by our
                                    geologist will be analyzed and
                                    interpreted into type, character
                                    and structure of the rock in the
                                    prospect area.</p>
                                <p class="card-text">Drilling Machine that are used by
                                    GGS are Jack-Row 300, Jack-Row 200, Jack-Row 175, Jack-Row 150, Power Rig and Spindle
                                    Rig for Geotech Drill.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-3">
            <div class="container p-lg-5 p-0">
                <div class="card shadow-lg">
                    <div class="row ">
                        <div class="col-md-8 px-3">
                            <div class="card-block px-3 p-5">
                                <h1 class="card-title display-6 text-center fw-bold" style="color: #105d3b">Geotechnical Drilling and Soil
                                    Investigation</h1>
                                <p class="card-text">
                                    <br>
                                    GGS also provided geotechnical drilling
                                    services and soil investigation such as
                                    Standard Penetration Test (SPT) and
                                    Cone Penetration Test (CPT).
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('foto/geo.png') }}" class="w-100" style="object-fit: cover; border-radius: 1rem">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-3">
            <div class="container p-lg-5 p-0">
                <div class="card shadow-lg">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('foto/mapping.png') }}" class="w-100 h-100" style="object-fit: cover; border-radius: 1rem">
                        </div>
                        <div class="col-md-8 px-3">
                            <div class="card-block px-3 p-5">
                                <h1 class="card-title display-6 text-center fw-bold" style="color: #dab96a">Surface Mapping</h1>
                                <p class="card-text">
                                    <br>
                                    The services that GGS can carry out
                                    are from topography mapping
                                    survey, regional mapping/initial
                                    survey, semi-detail geological
                                    mapping to detail geological
                                    mapping for exploitation of coal and
                                    other mineral (gold, nickel, etc.).
                                    General difference mapping
                                    techniques is the scale of the maps.
                                </p>
                                <p class="card-text">The preliminary survey mapping
                                    activities for exploration include
                                    outcrops evaluation and the
                                    potential of coal/mineral in the
                                    surveyed area such as: rock type,
                                    coal type, mineralization type, the
                                    stretch of coal/mineral, the
                                    surroundings of sedimentation,
                                    location and geological condition and
                                    geological structure.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-3">
            <div class="container p-lg-5 p-0">
                <div class="card shadow-lg">
                    <div class="row ">
                        <div class="col-md-8 px-3">
                            <div class="card-block px-3 p-5">
                                <h1 class="card-title display-6 text-center fw-bold" style="color: #105d3b">Workshop</h1>
                                <p class="card-text">
                                    <br>
                                    In order to deliver our best work, we
                                    have the workshop to built, assemble
                                    and maintain our equipments.

                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <img src="{{ asset('foto/workshop/1.jpg') }}" class="d-block w-100"
                                            style="object-fit: cover; border-radius: 1rem" alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="{{ asset('foto/workshop/2.jpg') }}" class="d-block w-100"
                                            style="object-fit: cover; border-radius: 1rem" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('foto/workshop/3.jpg') }}" class="d-block w-100"
                                            style="object-fit: cover; border-radius: 1rem" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#dab96a" fill-opacity="1" d="M0,0L0,32L41.1,32L41.1,224L82.3,224L82.3,160L123.4,160L123.4,288L164.6,288L164.6,224L205.7,224L205.7,256L246.9,256L246.9,192L288,192L288,128L329.1,128L329.1,192L370.3,192L370.3,0L411.4,0L411.4,32L452.6,32L452.6,192L493.7,192L493.7,160L534.9,160L534.9,224L576,224L576,64L617.1,64L617.1,128L658.3,128L658.3,0L699.4,0L699.4,224L740.6,224L740.6,288L781.7,288L781.7,192L822.9,192L822.9,192L864,192L864,224L905.1,224L905.1,96L946.3,96L946.3,32L987.4,32L987.4,32L1028.6,32L1028.6,64L1069.7,64L1069.7,288L1110.9,288L1110.9,64L1152,64L1152,32L1193.1,32L1193.1,256L1234.3,256L1234.3,224L1275.4,224L1275.4,192L1316.6,192L1316.6,160L1357.7,160L1357.7,224L1398.9,224L1398.9,288L1440,288L1440,320L1398.9,320L1398.9,320L1357.7,320L1357.7,320L1316.6,320L1316.6,320L1275.4,320L1275.4,320L1234.3,320L1234.3,320L1193.1,320L1193.1,320L1152,320L1152,320L1110.9,320L1110.9,320L1069.7,320L1069.7,320L1028.6,320L1028.6,320L987.4,320L987.4,320L946.3,320L946.3,320L905.1,320L905.1,320L864,320L864,320L822.9,320L822.9,320L781.7,320L781.7,320L740.6,320L740.6,320L699.4,320L699.4,320L658.3,320L658.3,320L617.1,320L617.1,320L576,320L576,320L534.9,320L534.9,320L493.7,320L493.7,320L452.6,320L452.6,320L411.4,320L411.4,320L370.3,320L370.3,320L329.1,320L329.1,320L288,320L288,320L246.9,320L246.9,320L205.7,320L205.7,320L164.6,320L164.6,320L123.4,320L123.4,320L82.3,320L82.3,320L41.1,320L41.1,320L0,320L0,320Z"></path></svg>
</div>

@endsection
