@extends('layout')

@section('title', 'Gallery - Welcome to Nails Spa 101 | Phoenix, Arizona United States')

@section('content')
<main id="main">
    <section id="gallery" class="gallery mt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Photo Gallery</h2>
                <p>Our Featured Works</p>
            </div>
        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-1">
                @for ($x = 1; $x < 77; $x++)
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
    </section>
</main>
@endsection