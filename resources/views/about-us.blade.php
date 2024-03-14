@extends('layout.sub')
@section('content')

    <body class="tt-magic-cursor">

    <div class="egns-preloader">
        <div class="preloader-close-btn">
            <span><i class="bi bi-x-lg"></i> Close</span>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="circle-border">
                        <div class="moving-circle"></div>
                        <div class="moving-circle"></div>
                        <div class="moving-circle"></div>
                        <svg width="180px" height="150px" viewbox="0 0 187.3 93.7" preserveaspectratio="xMidYMid meet"
                             style="left: 50%; top: 50%; position: absolute; transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);">
                            <path stroke="#D90A2C" id="outline" fill="none" stroke-width="4" stroke-linecap="round"
                                  stroke-linejoin="round" stroke-miterlimit="10"
                                  d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"/>
                            <path id="outline-bg" opacity="0.05" fill="none" stroke="#959595" stroke-width="4"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                  d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal adSearch-modal fade" id="adSearchModal01" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x"></i></button>
                <div class="modal-body">
                    <form>
                        <h5 class="main-title">Advanced Option</h5>
                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <div class="form-inner">
                                    <select>
                                        <option value="1">Sydne City, Australia</option>
                                        <option value="2">Dhaka, Bangladesh</option>
                                        <option value="3">Tokyo, Japan</option>
                                    </select>
                                </div>
                            </div>
                            <h5>More Filter</h5>
                            <div class="row mb-10">
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Select Brand </label>
                                        <select>
                                            <option value="1"> Mercedes Benz</option>
                                            <option value="2">Volkswagen</option>
                                            <option value="3">Mitsubishi</option>
                                            <option value="4 ">Tesla</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Select Body Type</label>
                                        <select>
                                            <option value="1">Hatchback</option>
                                            <option value="2">Covertible</option>
                                            <option value="3">Coupe</option>
                                            <option value="4 ">Truck</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Select Fuel Type </label>
                                        <select>
                                            <option value="1"> Petrol + Gas</option>
                                            <option value="2">Petrol</option>
                                            <option value="3">Gas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Steering Side</label>
                                        <select>
                                            <option value="1">Left</option>
                                            <option value="2">Right</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Select Color</label>
                                        <select>
                                            <option value="1">Yellow</option>
                                            <option value="2">Brown</option>
                                            <option value="3">Red</option>
                                            <option value="4">Silver</option>
                                            <option value="5">Orange</option>
                                            <option value="6">Blue</option>
                                            <option value="7">Gray</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Select Doors</label>
                                        <select>
                                            <option value="1">03 doors</option>
                                            <option value="2">04 doors</option>
                                            <option value="3">06 doors</option>
                                            <option value="4 ">08 doors</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h5>Year & Mileage</h5>
                            <div class="row">
                                <div class="col-md-6 mb-20">
                                    <div class="form-inner">
                                        <label>Select Year </label>
                                        <select>
                                            <option value="1">2021</option>
                                            <option value="2">2020</option>
                                            <option value="3">2019</option>
                                            <option value="4 ">2018</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-20">
                                    <div class="form-inner">
                                        <label>Select Min (miles)</label>
                                        <select>
                                            <option value="1">800 miles</option>
                                            <option value="2">1500 miles</option>
                                            <option value="3">2000 miles</option>
                                            <option value="4 ">2500 miles</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-20">
                                    <div class="form-inner">
                                        <label>Select Max (miles)</label>
                                        <select>
                                            <option value="1">1200 miles</option>
                                            <option value="2">3000 miles</option>
                                            <option value="3">3500 miles</option>
                                            <option value="4 ">4000 miles</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-20">Price Range</h5>
                            <div class="row">
                                <div class="col-lg-6 mb-20">
                                    <div class="range-wrapper2">
                                        <div class="slider-wrapper">
                                            <div id="eg-range-slider"></div>
                                        </div>
                                        <div class="valus">
                                            <div class="min-value">
                                                <span>$</span>
                                                <input type="text" class="from" value="200"/>
                                            </div>
                                            <div class="min-value">
                                                <span>$</span>
                                                <input type="text" class="to" value="2000"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-20">
                                    <div class="form-inner">
                                        <label>Min (Price)</label>
                                        <select>
                                            <option value="1">$2,234</option>
                                            <option value="2">$3,234</option>
                                            <option value="3">$4,234</option>
                                            <option value="4 ">$5,234</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-20">
                                    <div class="form-inner">
                                        <label>Max (Price)</label>
                                        <select>
                                            <option value="1">$12,234</option>
                                            <option value="2">$13,234</option>
                                            <option value="3">$14,234</option>
                                            <option value="4 ">$15,234</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="apply-btn pt-30">
                            <button class="primary-btn2" type="submit">Apply Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                            <div class="banner-content">
<span class="sub-title">
About Us
</span>
                                <h1>Our Brief History</h1>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 d-lg-flex d-none align-items-center justify-content-end">
                            <div class="banner-img">
                                <img alt="image" src="{{url('')}}/public/assets/img/sb-logo.svg" width="300"
                                     height="100"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="welcome-banner-section pb-100 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="welcome-wrap text-center">
                        <div class="section-title1 text-center wow fadeInUp" data-wow-delay="200ms">
                            <h2>Welcome To ATANI MOTORS</h2>
                        </div>
                        <div class="welcome-content wow fadeInUp " data-wow-delay="300ms">
                            <p class="text-left">Welcome to ATANI, where our passion lies in connecting you with the
                                perfect Toyota that seamlessly aligns with your lifestyle. Beyond being a car
                                dealership, we are your trusted automotive partner, dedicated to ensuring a
                                personalized, hassle-free experience from the very start.</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="why-choose-area pt-90 pb-90 mb-100">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-title1 text-center">
                        <span>Best Car Agency</span>
                        <h2>Here's what sets us apart</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-50 g-4 justify-content-center">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="choose-card">
                        <div class="choose-top">
                            <div class="choose-icon">
                                <img src="{{url('')}}/public/assets/img/home1/icon/toyota2.svg" alt>
                            </div>
                            <h5>Wide Selection of New <span> Toyotas</span></h5>
                        </div>
                        <p class="mb-4"> Explore a comprehensive inventory of the latest models, including fuel-efficient hybrids,
                            powerful SUVs, and dependable trucks.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="choose-card">
                        <div class="choose-top">
                            <div class="choose-icon">
                                <img src="{{url('')}}/public/assets/img/home1/icon/team.svg" alt>
                            </div>
                            <h5>Expert Sales  <span>Team</span></h5>
                        </div>
                        <p>Our friendly and knowledgeable staff is dedicated to understanding your needs and helping you find the perfect Toyota. We'll answer your questions, guide you through test drives, and ensure you make an informed decision.
                        </p>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 wow fadeInUp mb-5" data-wow-delay="400ms">
                    <div class="choose-card">
                        <div class="choose-top">
                            <div class="choose-icon">
                                <img src="{{url('')}}/public/assets/img/home1/icon/affordable.svg" alt>
                            </div>
                            <h5>Competitive Financing<span> Options</span></h5>
                        </div>
                        <p class="mb-5">We work with various lenders to secure the best financing rates and terms for your budget.</p>
                    </div>
                </div>

                <div class="col-lg-6  col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="choose-card">
                        <div class="choose-top">
                            <div class="choose-icon">
                                <img src="{{url('')}}/public/assets/img/home1/icon/warranty.svg" alt>
                            </div>
                            <h5>Comprehensive Service<span> Center</span></h5>
                        </div><p>Our certified technicians use genuine Toyota parts and state-of-the-art equipment to keep your Toyota running smoothly for years to come. We offer convenient scheduling, express service options, and comfortable waiting areas.
                        </p>
                    </div>
                </div>


            </div>


        </div>
    </div>


    <div class="drivco-gallery mb-100">
        <div class="container">
            <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12">
                    <div class="section-title1 text-center">
                        <h2>ATANI MOTORS Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-50">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="gallery-item">
                        <img class="img-fluid" src="{{url('')}}/public/assets/img/inner-page/gallery-01.png" alt="gallery">
                        <a href="{{url('')}}/public/assets/img/inner-page/gallery-01.png" data-fancybox="gallery"
                           class="gallary-item-overlay"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-end wow fadeInUp" data-wow-delay="300ms"
                     data-wow-duration="1500ms">
                    <div class="gallery-item">
                        <img class="img-fluid" src="{{url('')}}/public/assets/img/inner-page/gallery-02.png" alt="gallery">
                        <a href="{{url('')}}/public/assets/img/inner-page/gallery-02.png" data-fancybox="gallery"
                           class="gallary-item-overlay"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="gallery-item">
                        <img class="img-fluid" src="{{url('')}}/public/assets/img/inner-page/gallery-03.png" alt="gallery">
                        <a href="{{url('')}}/public/assets/img/inner-page/gallery-03.png" data-fancybox="gallery"
                           class="gallary-item-overlay"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="gallery-item">
                        <img class="img-fluid" src="{{url('')}}/public/assets/img/inner-page/gallery-04.png" alt="gallery">
                        <a href="{{url('')}}/public/assets/img/inner-page/gallery-04.png" data-fancybox="gallery"
                           class="gallary-item-overlay"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 d-flex align-items-start wow fadeInUp" data-wow-delay="600ms"
                     data-wow-duration="1500ms">
                    <div class="gallery-item">
                        <img class="img-fluid" src="{{url('')}}/public/assets/img/inner-page/gallery-05.png" alt="gallery">
                        <a href="{{url('')}}/public/assets/img/inner-page/gallery-05.png" data-fancybox="gallery"
                           class="gallary-item-overlay"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                    <div class="gallery-item">
                        <img class="img-fluid" src="{{url('')}}/public/assets/img/inner-page/log-dt-img2.png" alt="gallery">
                        <a href="{{url('')}}/public/assets/img/inner-page/log-dt-img2.png" data-fancybox="gallery"
                           class="gallary-item-overlay"></a>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="view-more-btn">
                        <a class="primary-btn3" href="/contact-us">Contact US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="how-it-work-section mb-100">
        <div class="container">
            <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex align-items-end justify-content-between gap-3 flex-wrap">
                    <div class="section-title-2">
                        <h2>How Does It Work</h2>
                        <p>Here are some of the featured cars in different categories</p>
                    </div>

                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                <div class="col-lg-12">
                    <div class="work-process-group">
                        <div class="row justify-content-center g-lg-0 gy-5">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-work-process text-center">
                                    <div class="step">
                                        <span>01</span>
                                    </div>
                                    <div class="icon">
                                        <img src="{{url('')}}/public/assets/img/home2/icon/loaction.svg" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Find your Car</h6>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-work-process text-center">
                                    <div class="step">
                                        <span>02</span>
                                    </div>
                                    <div class="icon">
                                        <img src="{{url('')}}/public/assets/img/home2/icon/contact.svg" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Contact With Us</h6>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-work-process text-center">
                                    <div class="step">
                                        <span>03</span>
                                    </div>
                                    <div class="icon">
                                        <img src="{{url('')}}/public/assets/img/home2/icon/pay.svg" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Pay For The Car</h6>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-work-process text-center">
                                    <div class="step">
                                        <span>04</span>
                                    </div>
                                    <div class="icon">
                                        <img src="{{url('')}}/public/assets/img/home2/icon/recieve.svg" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Recieve The Car</h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
