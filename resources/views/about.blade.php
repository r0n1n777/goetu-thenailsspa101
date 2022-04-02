@extends('layout')

@section('title', 'About Us - Welcome to Nails Spa 101 | Phoenix, Arizona United States')

@section('content')
<main id="main">
    <section id="about" class="about mt-5">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="{{ asset('assets/img/about-salon.webp') }}" alt="About Nails Spa 101">
                    </div>
                </div>
                
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>About Us</h3>
                    <p class="fst-italic">
                        Nails Spa 101 is a haven of relaxation that promotes comfort, beauty, well-being and health. 
                        Our priorities are client-focused services, high-quality products, and above all else, grade-A sanitation standards.
                        We are committed in bringing you the latest advances in beauty care and only use the most trusted brands in the beauty industry.
                        Our world class products, services and top technologies will help you feel great and look your best!
                    </p>
                    <p class="fst-italic">
                        We understand that safety and sanitation are key to your peace of mind. Our implements are medically
                        sterilized and disinfected after each use. Disposable liners, buffers and files are usually used only once then
                        discarded to prevent cross-contamination. All pedicure procedures are done with liner protection.
                        And above all, staffs are trained to follow a proper sanitization protocol that puts clients hygiene as
                        the number one priority.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Why Us</h2>
                <p>Why Choose Our Nail Spa</p>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span>01</span>
                        <h4>Professional Staff</h4>
                        <p>We assure you that all the staff are well train, professional and friendly too.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                        <span>02</span>
                        <h4>Perfect Cleanliness</h4>
                        <p>We make sure that we clean all the tools and the place especially in this pandemic.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                        <span>03</span>
                        <h4>High Reviews</h4>
                        <p>You can check out our social media to find out what our customers say about us.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection