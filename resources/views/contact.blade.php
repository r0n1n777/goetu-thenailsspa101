@extends('layout')

@section('title', 'Contact Us - Welcome to Nails Spa 101 | Phoenix, Arizona United States')

@section('content')
<main id="main">
    <section id="contact" class="contact mt-5">
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