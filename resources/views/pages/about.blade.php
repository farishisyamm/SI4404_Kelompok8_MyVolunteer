@extends('main')
@section('title', 'About')
@section('content')

<div class="hero overlay" style="background-image: url('images/img_v_8-min.jpg')">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
                <h1 class="heading text-white mb-2" data-aos="fade-up">About Us</h1>
                <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">A provider application for an organization that extends assistance to volunteers who want to join and give happiness to others</p>
            </div>


        </div>
    </div>
</div>

<div class="section sec-about">
    <div class="container">
        <div class="row g-5 justify-content-between">
            <div class="col-lg-6 has-bg" data-aos="fade-right">
                <img src="{{url('/images')}}/hero_2.jpg" alt="Image" class="img-fluid img-box-shadow rounded">
            </div>
            <div class="col-lg-4 align-self-center" data-aos="fade-left" data-aos-delay="100">
                <span class="subheading mb-3">About</span>
                <h2 class="heading mb-4">History</h2>
                <p>In remote areas, they need help from volunteers because the facilities and education are not sufficient, therefore an organization opens an activity entitled "Sharing Smiles", so that it can provide enthusiasm for local people who need help</p>
            </div>
        </div>
    </div>
</div>


<div class="section sec-features bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-4" data-aos="fade-up">
                <span class="subheading mb-3">The Team</span>
                <h2 class="heading">Who We Are</h2>
            </div>
            <div class="col-lg-6 text-start" data-aos="fade-up" data-aos-delay="100">
                <p>The Team</p>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="features-slider-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="features-slider" id="features-slider">

                <div class="item">

                    <div class="feature bg-color-1">
                        <img src="{{url('/images')}}/person_1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                        <h3 class="mb-0">Dea Rahman Fauzi</h3>
                        <span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
                        <p class="text-black-50">S1 Sistem Informasi Telkom University</p>

                    </div>

                </div>

                <div class="item">

                    <div class="feature bg-color-2">
                        <img src="{{url('/images')}}/person_4.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                        <h3 class="mb-0">Ahmad Faris Hisyam M</h3>
                        <span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
                        <p class="text-black-50">S1 Sistem Informasi Telkom University</p>

                    </div>

                </div>

                <div class="item">

                    <div class="feature bg-color-3">
                        <img src="{{url('/images')}}/person_3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                        <h3 class="mb-0">Aisha Nabila</h3>
                        <span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
                        <p class="text-black-50">S1 Sistem Informasi Telkom University</p>

                    </div>

                </div>

                <div class="item">

                    <div class="feature bg-color-4">
                        <img src="{{url('/images')}}/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                        <h3 class="mb-0">Rohimin Imani Arti</h3>
                        <span class="text-black-50 mb-3 d-block">CEO, Co-Founder</span>
                        <p class="text-black-50">S1 Sistem Informasi Telkom University</p>

                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<div class="section ">
    <div class="container">
        <div class="row">
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                <div id="features-slider-nav">
                    <button class="btn btn-primary" class="prev" data-controls="prev">Prev</button>
                    <button class="btn btn-primary" class="next" data-controls="next">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
                <div class="vision">
                    <h2>Our Vision</h2>
                    <p class="mb-4 lead">Build awareness for the people who are around and a place that provides opportunities for volunteers and organizations to collaborate with each other and make a positive contribution to society.</p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="mission">
                    <h2>Our Mission</h2>
                    <p class="mb-4 lead">Provides a variety of volunteer activities to participate in</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section sec-instagram pb-0">
    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-lg-3" data-aos="fade-up">
                <span class="subheading mb-3">Instagram</span>
                <h2 class="heading">We Are In Instagram</h2>
            </div>
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                <p>IF YOU WANT TO KNOW MORE ABOUT US, CLICK ON INSTAGRAM !</p>
            </div>
        </div>
    </div>

    <div class="instagram-slider-wrap" data-aos="fade-up" data-aos-delay="200">
        <div class="instagram-slider" id="instagram-slider">

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="{{url('/images')}}/img_v_8-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="{{url('/images')}}/img_v_2-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="{{url('/images')}}/img_v_3-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="{{url('/images')}}/img_v_4-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="{{url('/images')}}/img_v_5-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="{{url('/images')}}/img_v_6-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="{{url('/images')}}/img_v_7-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>


        </div>
    </div>

</div>
@endsection
