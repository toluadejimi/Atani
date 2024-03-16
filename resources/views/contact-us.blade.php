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
                    <li>Contact Us</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                            <div class="banner-content">
<span class="sub-title">
Contact Us
</span>
                                <h1>For Any Information</h1>
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


    <div class="contact-page pt-100 mb-100">
        <div class="container">

            <div class="row g-4 mb-100">
                <div class="col-lg-5">
                    <div class="section-title mb-50">
                        <h4>Contact Us With Support Line</h4>
                    </div>
                    <div class="single-contact mb-40">
                        <div class="title">
                            <h6>To Know More</h6>
                        </div>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path
                                    d="M19.9018 8.6153C19.5412 5.99522 18.1517 3.62536 16.0393 2.02707C13.9268 0.428777 11.2643 -0.267025 8.63745 0.0927308C6.01063 0.452486 3.63468 1.83833 2.03228 3.94539C0.42988 6.05245 -0.267711 8.70813 0.0929693 11.3282C0.388972 13.4966 1.38745 15.509 2.9363 17.0589C4.48516 18.6088 6.49948 19.6113 8.67243 19.9136C9.11786 19.9713 9.56656 20.0002 10.0157 20C11.8278 20.0033 13.606 19.5101 15.1563 18.5744C15.2358 18.5318 15.3058 18.4735 15.362 18.4031C15.4182 18.3326 15.4595 18.2516 15.4833 18.1648C15.5072 18.078 15.5131 17.9872 15.5007 17.8981C15.4884 17.8089 15.458 17.7232 15.4114 17.6461C15.3648 17.569 15.303 17.5021 15.2298 17.4496C15.1565 17.397 15.0733 17.3599 14.9853 17.3403C14.8972 17.3208 14.806 17.3193 14.7173 17.336C14.6287 17.3527 14.5443 17.3871 14.4694 17.4373C12.7129 18.4904 10.6392 18.8886 8.61629 18.5613C6.59339 18.2339 4.75224 17.2022 3.4197 15.6492C2.08717 14.0962 1.34948 12.1225 1.3376 10.0784C1.32573 8.03438 2.04043 6.05225 3.35483 4.48397C4.66923 2.91568 6.49828 1.86271 8.51723 1.512C10.5362 1.16129 12.6144 1.53554 14.383 2.56829C16.1515 3.60104 17.4959 5.22548 18.1776 7.1532C18.8592 9.08092 18.8338 11.1872 18.1061 13.0981C17.9873 13.4102 17.7626 13.6709 17.4711 13.8349C17.1795 13.999 16.8396 14.056 16.5104 13.996C16.1811 13.9361 15.8833 13.763 15.6687 13.5068C15.454 13.2506 15.3362 12.9275 15.3356 12.5936V5.37867C15.3356 5.2024 15.2654 5.03336 15.1404 4.90872C15.0155 4.78408 14.846 4.71406 14.6693 4.71406C14.4925 4.71406 14.3231 4.78408 14.1981 4.90872C14.0731 5.03336 14.0029 5.2024 14.0029 5.37867V6.52578C13.2819 5.70734 12.3261 5.12961 11.265 4.8708C10.204 4.61198 9.08877 4.68456 8.0704 5.07873C7.05203 5.47289 6.17966 6.16961 5.57134 7.07458C4.96303 7.97954 4.64814 9.04908 4.66929 10.1384C4.69045 11.2278 5.04663 12.2843 5.68962 13.1651C6.33262 14.0459 7.23139 14.7084 8.2643 15.0629C9.2972 15.4175 10.4144 15.4469 11.4646 15.1473C12.5149 14.8477 13.4475 14.2335 14.1362 13.3878C14.3015 13.9385 14.6358 14.4237 15.092 14.775C15.5482 15.1263 16.1033 15.326 16.6793 15.3461C17.2553 15.3662 17.8231 15.2057 18.3028 14.887C18.7825 14.5684 19.15 14.1078 19.3535 13.5699C19.9483 11.99 20.1368 10.2866 19.9018 8.6153ZM10.0051 14.0185C9.21436 14.0185 8.4414 13.7847 7.78396 13.3465C7.12651 12.9083 6.61409 12.2856 6.3115 11.5569C6.00891 10.8283 5.92974 10.0265 6.08399 9.25296C6.23825 8.47943 6.61902 7.7689 7.17813 7.21122C7.73724 6.65354 8.4496 6.27376 9.22511 6.1199C10.0006 5.96603 10.8045 6.045 11.535 6.34681C12.2655 6.64863 12.8899 7.15973 13.3292 7.8155C13.7685 8.47126 14.0029 9.24223 14.0029 10.0309C14.0019 11.0882 13.5803 12.1018 12.8308 12.8494C12.0813 13.597 11.065 14.0175 10.0051 14.0185Z"/>
                            </svg>
                        </div>
                        <div class="content">
                            <span>Email Now</span>
                            <h6>
                                <a href="emailto:info@atanimotor.com"><span>info@atanimotors.com</span></a>
                            </h6>
                        </div>
                    </div>
                    <div class="single-contact">
                        <div class="title">
                            <h6>Show Room Address</h6>
                        </div>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path
                                    d="M19.9018 8.6153C19.5412 5.99522 18.1517 3.62536 16.0393 2.02707C13.9268 0.428777 11.2643 -0.267025 8.63745 0.0927308C6.01063 0.452486 3.63468 1.83833 2.03228 3.94539C0.42988 6.05245 -0.267711 8.70813 0.0929693 11.3282C0.388972 13.4966 1.38745 15.509 2.9363 17.0589C4.48516 18.6088 6.49948 19.6113 8.67243 19.9136C9.11786 19.9713 9.56656 20.0002 10.0157 20C11.8278 20.0033 13.606 19.5101 15.1563 18.5744C15.2358 18.5318 15.3058 18.4735 15.362 18.4031C15.4182 18.3326 15.4595 18.2516 15.4833 18.1648C15.5072 18.078 15.5131 17.9872 15.5007 17.8981C15.4884 17.8089 15.458 17.7232 15.4114 17.6461C15.3648 17.569 15.303 17.5021 15.2298 17.4496C15.1565 17.397 15.0733 17.3599 14.9853 17.3403C14.8972 17.3208 14.806 17.3193 14.7173 17.336C14.6287 17.3527 14.5443 17.3871 14.4694 17.4373C12.7129 18.4904 10.6392 18.8886 8.61629 18.5613C6.59339 18.2339 4.75224 17.2022 3.4197 15.6492C2.08717 14.0962 1.34948 12.1225 1.3376 10.0784C1.32573 8.03438 2.04043 6.05225 3.35483 4.48397C4.66923 2.91568 6.49828 1.86271 8.51723 1.512C10.5362 1.16129 12.6144 1.53554 14.383 2.56829C16.1515 3.60104 17.4959 5.22548 18.1776 7.1532C18.8592 9.08092 18.8338 11.1872 18.1061 13.0981C17.9873 13.4102 17.7626 13.6709 17.4711 13.8349C17.1795 13.999 16.8396 14.056 16.5104 13.996C16.1811 13.9361 15.8833 13.763 15.6687 13.5068C15.454 13.2506 15.3362 12.9275 15.3356 12.5936V5.37867C15.3356 5.2024 15.2654 5.03336 15.1404 4.90872C15.0155 4.78408 14.846 4.71406 14.6693 4.71406C14.4925 4.71406 14.3231 4.78408 14.1981 4.90872C14.0731 5.03336 14.0029 5.2024 14.0029 5.37867V6.52578C13.2819 5.70734 12.3261 5.12961 11.265 4.8708C10.204 4.61198 9.08877 4.68456 8.0704 5.07873C7.05203 5.47289 6.17966 6.16961 5.57134 7.07458C4.96303 7.97954 4.64814 9.04908 4.66929 10.1384C4.69045 11.2278 5.04663 12.2843 5.68962 13.1651C6.33262 14.0459 7.23139 14.7084 8.2643 15.0629C9.2972 15.4175 10.4144 15.4469 11.4646 15.1473C12.5149 14.8477 13.4475 14.2335 14.1362 13.3878C14.3015 13.9385 14.6358 14.4237 15.092 14.775C15.5482 15.1263 16.1033 15.326 16.6793 15.3461C17.2553 15.3662 17.8231 15.2057 18.3028 14.887C18.7825 14.5684 19.15 14.1078 19.3535 13.5699C19.9483 11.99 20.1368 10.2866 19.9018 8.6153ZM10.0051 14.0185C9.21436 14.0185 8.4414 13.7847 7.78396 13.3465C7.12651 12.9083 6.61409 12.2856 6.3115 11.5569C6.00891 10.8283 5.92974 10.0265 6.08399 9.25296C6.23825 8.47943 6.61902 7.7689 7.17813 7.21122C7.73724 6.65354 8.4496 6.27376 9.22511 6.1199C10.0006 5.96603 10.8045 6.045 11.535 6.34681C12.2655 6.64863 12.8899 7.15973 13.3292 7.8155C13.7685 8.47126 14.0029 9.24223 14.0029 10.0309C14.0019 11.0882 13.5803 12.1018 12.8308 12.8494C12.0813 13.597 11.065 14.0175 10.0051 14.0185Z"/>
                            </svg>
                        </div>
                        <div class="content">
                            <span>Location</span>
                            <h6><a>Lekki, Lagos</a></h6>
                        </div>
                    </div>
                    <div class="service-available">
                        <span>N:B:</span>
                        <p>Customer support always open at <strong>9 am</strong> to <strong>6 pm</strong> in everyday
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="inquiry-form">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-inner mb-30">
                                        <label>Full Name*</label>
                                        <input type="text" placeholder="Jackson Mile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-30">
                                        <label>Phone*</label>
                                        <input type="text" placeholder="Ex- +880-13* ** ***">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-30">
                                        <label>Email <span>(Optional)</span></label>
                                        <input type="email" placeholder="Ex- info@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner mb-30">
                                        <label>Subject*</label>
                                        <input type="email" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner mb-30">
                                        <label>Short Notes*</label>
                                        <textarea placeholder="Write Something..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="form-inner">
                                            <button type="submit" class="primary-btn3">Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11002.380656348627!2d3.446349318945024!3d6.431208047434754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf52e943fdedb%3A0x9eaeed65c337f44!2sKALTANI!5e0!3m2!1sen!2sng!4v1710459754317!5m2!1sen!2sng"
            style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection
