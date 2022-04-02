@extends('layout')

@section('title', 'Home - Welcome to Nails Spa 101 | Phoenix, Arizona United States')

@section('content')

<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
                <h1>Welcome to <span>Nails Spa 101</span></h1>
                <h2>
                    Your relaxation is our mission.
                    Nails Spa 101 is where you will find the best services with luxury atmosphere.
                </h2>
        
                <div class="btns">
                    <a href="{{ route('services') }}" class="btn-menu animated fadeInUp scrollto">Services</a>
                    <a href="https://salons.go3reservation.com/nails-spa-101-4326-e-cactus-rd-phoenix-arizona?fbclid=IwAR1B14x9ufK7oHJLqdHddZva7wHVLQadT4kPnOxr64Nbo10NjluHRCf2Kds" class="btn-book animated fadeInUp scrollto" target="_blank">Book Online</a>
                </div>
            </div>
            {{-- <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
                <a href="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FNailspa101%2Fvideos%2F639375273958442%2F" class="glightbox play-btn"></a>
            </div> --}}
        </div>
    </div>
</section>
    
<main id="main">
    <section id="services-highlight" class="services-highlight">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Services Highlight</h2>
                <p>Our Offered Services</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('images/manipedi.webp') }}" class="img-fluid" alt="Manicure and Pedicure Services">
                        <div class="member-info mt-2">
                            <div class="member-info-content">
                                <h4>Manicure / Pedicure</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('images/waxing.webp') }}" class="img-fluid" alt="Manicure and Pedicure Services">
                        <div class="member-info mt-2">
                            <div class="member-info-content">
                                <h4>Waxing / Body Care</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('images/additional.webp') }}" class="img-fluid" alt="Manicure and Pedicure Services">
                        <div class="member-info mt-2">
                            <div class="member-info-content">
                                <h4>Additional Services</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
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

    {{-- <section id="why-us" class="why-us">
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
    </section> --}}

    {{-- <section id="events" class="events">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Events</h2>
            <p>Host a Party!</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="row event-item">
                <div class="col-lg-6">
                    <img src="assets/img/event-party.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Pamper Barkada Time</h3>
                    <div class="price">
                    <p><span>$189</span></p>
                    </div>
                    <p class="fst-italic">
                    Nail Spa is the ideal settings for any group parties.

                    Our Staff is available to assist with any details and arrangements to make your party memorable.

                    </p>
                    
                </div>
                </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="row event-item">
                <div class="col-lg-6">
                    <img src="assets/img/event-bridal-shower.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Bridal Shower Party</h3>
                    <div class="price">
                    <p><span>$290</span></p>
                    </div>
                    <p class="fst-italic">
                    We offer bridal promo for all bridal parties which has 5 or more guest. 
                    </p>
                    <p>For any group of 5 or more, please make a reservation 1 week prior to date of the event. A deposit will be required. All group of 8 or more will receive a special group discount.</p>
                </div>
                </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="row event-item">
                <div class="col-lg-6">
                    <img src="assets/img/event-customparty.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Custom Parties</h3>
                    <div class="price">
                    <p><span>$99</span></p>
                    </div>
                    <p class="fst-italic">
                    For any group of 5 or more, please make a reservation 1 week prior to date of the event. A deposit will be required. All group of 8 or more will receive a special group discount.<br>
                    Our Staff is available to assist with any details and arrangements to make your party memorable.
                    </p>
                    
                </div>
                </div>
            </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

        </div>
    </section> --}}

    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Photo Gallery</h2>
            <p>Some Of Our Featured Works</p>
        </div>
        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-1">
                @for ($x = 1; $x <= 4; $x++)
                <div class="col-lg-3 col-md-4">
                    <div class="d-flex justify-content-center">
                        <a href="{{ asset('assets/img/gallery/'.$x.'.webp') }}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ asset('assets/img/gallery/'.$x.'.webp') }}" class="gallery-image img-fluid">
                        </a>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <br>
        <div class="d-flex justify-content-center">
            <a href="{{ route('gallery') }}" class="book-a-table-btn">Show More Photos</a>
        </div>
    </section>

    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>YELP & GOOGLE Reviews</h2>
                <p>What they're saying about us</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <h1 class="text-center">Yelp Rating</h1>
                <div class="swiper-wrapper">
                    <div class="swiper-slide d-flex justify-content-center align-items-center">
                        <span class="yelp-review" data-review-id="_QZdYQOjUo7BiM5JLOrfCQ" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=BFHMF8HiclI5OmdYhGkzRg" rel="nofollow noopener">Jennifer G.</a>'s <a href="https://www.yelp.com/biz/nails-spa-101-phoenix?hrid=_QZdYQOjUo7BiM5JLOrfCQ" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/X4noQmWB-7gIAH40Moz4uA" rel="nofollow noopener">Nails Spa 101</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                    </div>
                
                    <div class="swiper-slide d-flex justify-content-center align-items-center">
                        <span class="yelp-review" data-review-id="TiHUcZasFCoaflo2b8l58Q" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=I-kvEbsX78srNznwzQTbKg" rel="nofollow noopener">Paige V.</a>'s <a href="https://www.yelp.com/biz/nails-spa-101-phoenix?hrid=TiHUcZasFCoaflo2b8l58Q" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/X4noQmWB-7gIAH40Moz4uA" rel="nofollow noopener">Nails Spa 101</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                    </div>

                    <div class="swiper-slide d-flex justify-content-center align-items-center">
                        <span class="yelp-review" data-review-id="Sab7VLHLL-ZM5piOmcQ0_Q" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=53n0GvOUZMqSyg1_slyWqg" rel="nofollow noopener">Julia M.</a>'s <a href="https://www.yelp.com/biz/nails-spa-101-phoenix?hrid=Sab7VLHLL-ZM5piOmcQ0_Q" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/X4noQmWB-7gIAH40Moz4uA" rel="nofollow noopener">Nails Spa 101</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                    </div>

                    <div class="swiper-slide d-flex justify-content-center align-items-center">
                        <span class="yelp-review" data-review-id="bYDS4EZvYoL4ty3XNpyMQA" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=i9KGn2ffE-mcm-zzN1rpEw" rel="nofollow noopener">Taylor L.</a>'s <a href="https://www.yelp.com/biz/nails-spa-101-phoenix?hrid=bYDS4EZvYoL4ty3XNpyMQA" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/X4noQmWB-7gIAH40Moz4uA" rel="nofollow noopener">Nails Spa 101</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                    </div>

                    <div class="swiper-slide d-flex justify-content-center align-items-center">
                        <span class="yelp-review" data-review-id="FnDpGkK3tZYVbUqKC1W8JQ" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=vnSOv58VLT1dhN7xn07ESQ" rel="nofollow noopener">Lynntelle S.</a>'s <a href="https://www.yelp.com/biz/nails-spa-101-phoenix?hrid=FnDpGkK3tZYVbUqKC1W8JQ" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/X4noQmWB-7gIAH40Moz4uA" rel="nofollow noopener">Nails Spa 101</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                    </div>

                    <div class="swiper-slide d-flex justify-content-center align-items-center">
                        <span class="yelp-review" data-review-id="_kRs7SOpLvpUnmb0Nr-2YA" data-hostname="www.yelp.com">Read <a href="https://www.yelp.com/user_details?userid=Eh0ls7PACAJMQJiBjDd-YQ" rel="nofollow noopener">Jessie A.</a>'s <a href="https://www.yelp.com/biz/nails-spa-101-phoenix?hrid=_kRs7SOpLvpUnmb0Nr-2YA" rel="nofollow noopener">review</a> of <a href="https://www.yelp.com/biz/X4noQmWB-7gIAH40Moz4uA" rel="nofollow noopener">Nails Spa 101</a> on <a href="https://www.yelp.com" rel="nofollow noopener">Yelp</a><script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script></span>
                    </div>
                </div>

                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <br><br>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1>Google Rating</h1>
                <a href="https://www.google.com/search?sxsrf=APq-WBsIdFU6HIpdFZgEQuDD0KUdIZ62Kg:1648850895497&q=nails%20spa%20101&sa=X&ved=2ahUKEwiipaef8PP2AhWR8HMBHb3YDJAQvS56BAgSEAE&biw=727&bih=687&dpr=1.1&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:14&tbm=lcl&rflfq=1&num=10&rldimm=5039173566369058363&lqi=Cg1uYWlscyBzcGEgMTAxSOXMvLryrICACFobEAAQARACGAAYARgCIg1uYWlscyBzcGEgMTAxkgEKbmFpbF9zYWxvbg&rlst=f#lrd=0x872b73b05c2c4459:0x45eebda8f0f74e3b,1,,,&rlfi=hd:;si:5039173566369058363,l,Cg1uYWlscyBzcGEgMTAxSOXMvLryrICACFobEAAQARACGAAYARgCIg1uYWlscyBzcGEgMTAxkgEKbmFpbF9zYWxvbg;mv:[[33.6381924,-111.9746763],[33.597383799999996,-112.2439186]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:14" class="text-center" target="_blank">
                    <img src="{{ asset('assets/img/testimonials/google.png') }}"><br>
                    <span>Tap or click to view reviews on Google.</span>
                </a>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Location & Contact Information</h2>
                <p>Find Us & Contact Us</p>
            </div>
        </div>

        <div class="container mb-5" data-aos="fade-up">
            <div class="row g-2">
                <div class="col-6">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>4326 E Cactus Rd Phoenix, AZ 85032</p>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="info">
                        <div class="open-hours">
                            <i class="bi bi-clock"></i>
                            <h4>Open Hours:</h4>
                            <p>
                                Monday-Friday: 9:00 AM - 6:00 PM<br>
                                Saturday: 9:00 AM - 5:00 PM<br>
                                Sunday: Closed
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="info">
                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>azrael85017@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="info">
                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>(602) 971-7400</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div data-aos="fade-up">
            <iframe style="border:0; width: 100%; height: 400px;" src="https://maps.google.com/maps?q=4326%20E%20Cactus%20Rd,%20Phoenix,%20AZ%2085032&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>
</main>
@endsection