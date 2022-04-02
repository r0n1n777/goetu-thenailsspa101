@extends('layout')

@section('title', 'Services - Welcome to Nails Spa 101 | Phoenix, Arizona United States')

@section('content')
<main id="main">
    <section id="services-menu" class="menu section-bg mt-5">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Our Services</h2>
            <p>Check Our Menu & Price List</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-manicure">Manicure</li>
                    <li data-filter=".filter-pedicure">Pedicure</li>
                    <li data-filter=".filter-waxing">Waxing</li>
                    <li data-filter=".filter-kids">Kids</li>
                </ul>
            </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-manicure">
                <img src="{{ asset('assets/img/menu/nail1.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Regular Manicure</b>
                    <span>$17</span>
                </div>
                <div class="menu-desc">
                    Manicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-manicure">
                <img src="{{ asset('assets/img/menu/nail2.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Gel Manicure</b>
                    <span>$35</span>
                </div>
                <div class="menu-desc">
                    Manicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-manicure">
                <img src="{{ asset('assets/img/menu/nail3.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Gel Pedicure</b>
                    <span>$40</span>
                </div>
                <div class="menu-desc">
                    Manicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-manicure">
                <img src="{{ asset('assets/img/menu/nail4.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Hand Polish Change</b>
                    <span>$8</span>
                </div>
                <div class="menu-desc">
                    Manicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-manicure">
                <img src="{{ asset('assets/img/menu/nail5.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Feet Polish Change</b>
                    <span>$10</span>
                </div>
                <div class="menu-desc">
                    Manicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-manicure">
                <img src="{{ asset('assets/img/menu/nail6.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Nail Trim</b>
                    <span>$10+</span>
                </div>
                <div class="menu-desc">
                    Manicure
                </div>
            </div>



            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-pedicure">
                <img src="{{ asset('assets/img/menu/nail1.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Basic Pedicure</b>
                    <span>$25</span>
                </div>
                <div class="menu-desc">
                    Pedicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-pedicure">
                <img src="{{ asset('assets/img/menu/nail2.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Deluxe Spa Pedicure</b>
                    <span>$35</span>
                </div>
                <div class="menu-desc">
                    Pedicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-pedicure">
                <img src="{{ asset('assets/img/menu/nail3.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Pampered Pedicure</b>
                    <span>$40</span>
                </div>
                <div class="menu-desc">
                    Pedicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-pedicure">
                <img src="{{ asset('assets/img/menu/nail4.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Top Notch Pedicure</b>
                    <span>$50</span>
                </div>
                <div class="menu-desc">
                    Pedicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-pedicure">
                <img src="{{ asset('assets/img/menu/nail5.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Volcano Spa Pedicure</b>
                    <span>$55</span>
                </div>
                <div class="menu-desc">
                    Pedicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-pedicure">
                <img src="{{ asset('assets/img/menu/nail6.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Collagen Spa Pedicure</b>
                    <span>$60</span>
                </div>
                <div class="menu-desc">
                    Pedicure
                </div>
            </div>


            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-waxing">
                <img src="{{ asset('assets/img/menu/lip.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Lip</b>
                    <span>$5</span>
                </div>
                <div class="menu-desc">
                    Waxing
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-waxing">
                <img src="{{ asset('assets/img/menu/eyebrow.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Eyebrows</b>
                    <span>$10</span>
                </div>
                <div class="menu-desc">
                    Waxing
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-waxing">
                <img src="{{ asset('assets/img/menu/fullface.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Full Face</b>
                    <span>$35</span>
                </div>
                <div class="menu-desc">
                    Waxing
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-waxing">
                <img src="{{ asset('assets/img/menu/underarm.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Underarm</b>
                    <span>$20 & up</span>
                </div>
                <div class="menu-desc">
                    Waxing
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-waxing">
                <img src="{{ asset('assets/img/menu/underarm.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Half Arm</b>
                    <span>$25</span>
                </div>
                <div class="menu-desc">
                    Waxing
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-waxing">
                <img src="{{ asset('assets/img/menu/chin.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Chin</b>
                    <span>$10</span>
                </div>
                <div class="menu-desc">
                    Waxing
                </div>
            </div>


            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-kids">
                <img src="{{ asset('assets/img/menu/nail1.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Hand Polish Change</b>
                    <span>$7</span>
                </div>
                <div class="menu-desc">
                    Kids (under 12) Manicure and Pedicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-kids">
                <img src="{{ asset('assets/img/menu/nail2.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Feet Polish Change</b>
                    <span>$8</span>
                </div>
                <div class="menu-desc">
                    Kids (under 12) Manicure and Pedicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-kids">
                <img src="{{ asset('assets/img/menu/nail3.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Regular Manicure</b>
                    <span>$12</span>
                </div>
                <div class="menu-desc">
                    Kids (under 12) Manicure and Pedicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-kids">
                <img src="{{ asset('assets/img/menu/nail4.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Regular Pedicure</b>
                    <span>$20</span>
                </div>
                <div class="menu-desc">
                    Kids (under 12) Manicure and Pedicure
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 menu-item filter-kids">
                <img src="{{ asset('assets/img/menu/nail5.jpg') }}" class="menu-img">
                <div class="menu-content">
                    <b>Gel Manicure</b>
                    <span>$25</span>
                </div>
                <div class="menu-desc">
                    Kids (under 12) Manicure and Pedicure
                </div>
            </div>
        </div>
    </section>

    <section id="specials" class="specials">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Specials & Add Ons</h2>
                <p>Check Our Specials & Add Ons</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">SNS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Acrylic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Liquid Gels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Add Ons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Additional Costs</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show w-75" id="tab-1">
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>SNS Dip</b>
                                <span>$40</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>SNS Manicure</b>
                                <span>$45</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>SNS Full Set</b>
                                <span>$50+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>SNS Ombre</b>
                                <span>$50+</span>
                            </div>
                        </div>

                        <div class="tab-pane w-75" id="tab-2">
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Regular Full Set</b>
                                <span>$40+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Gel Full Set</b>
                                <span>$50+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Regular White Tip Set</b>
                                <span>$40+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Gel White Tip Set</b>
                                <span>$50+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Regular Fill</b>
                                <span>$25+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Gel Fill</b>
                                <span>$40+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Regular White Tip Fill</b>
                                <span>$30+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Gel White Tip Fill</b>
                                <span>$45+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Pink and White Set</b>
                                <span>$55+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Back Fill</b>
                                <span>$45+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Ombre Full Set</b>
                                <span>$60+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Pink and White Fill</b>
                                <span>$35+</span>
                            </div>
                        </div>

                        <div class="tab-pane w-75" id="tab-3">
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Regular Set</b>
                                <span>$40+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Gel Set</b>
                                <span>$55+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Regular Fill</b>
                                <span>$40+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Gel Fill</b>
                                <span>$45+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Pink & White Set</b>
                                <span>$60+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Pink & White Back Fill</b>
                                <span>$50+</span>
                            </div>
                        </div>

                        <div class="tab-pane w-75" id="tab-4">
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Nails Art</b>
                                <span>$5+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Callus Remover</b>
                                <span>$7</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Sugar Scrub</b>
                                <span>$7</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Moisture Mask</b>
                                <span>$8</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Paraffin Wax</b>
                                <span>$10</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Gel Polish</b>
                                <span>$15</span>
                            </div>
                        </div>

                        <div class="tab-pane w-75" id="tab-5">
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>French Tips</b>
                                <span>$5</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Designs</b>
                                <span>$5+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Nail Repair</b>
                                <span>$5+</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Shiny Buff</b>
                                <span>$5</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom p-2">
                                <b>Cut Down</b>
                                <span>$5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection