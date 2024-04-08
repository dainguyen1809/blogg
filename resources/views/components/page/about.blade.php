@extends('layouts.app')

@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('images/hero_5.jpg');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">About Page</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-halfs py-0">
        <div class="container">
            <div class="half-content d-lg-flex align-items-stretch">
                <div class="img" style="background-image: url('images/hero_1.jpg')" data-aos="fade-in"
                    data-aos-delay="100">

                </div>
                <div class="text">
                    <h2 class="heading text-primary mb-3">Resources for makers and creatives</h2>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                        the Semantics, a large language ocean.</p>
                    <p><a href="#" class="btn btn-outline-primary py-2">Read more</a></p>
                </div>
            </div>

            <div class="half-content d-lg-flex align-items-stretch">
                <div class="img order-md-2" style="background-image: url('images/hero_2.jpg')" data-aos="fade-in">

                </div>
                <div class="text">
                    <h2 class="heading text-primary mb-3">We are trusted by more than 5,000 clients</h2>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                        the Semantics, a large language ocean.</p>
                    <p><a href="#" class="btn btn-outline-primary py-2">Read more</a></p>
                </div>
            </div>
        </div>

    </div>
@endsection
