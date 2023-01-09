@extends('main')
@section('title', 'Contact')
@section('content')
<div class="hero overlay" style="background-image: url('images/img_v_5-min.jpg')">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
                <h1 class="heading text-white mb-2" data-aos="fade-up">Contact Us</h1>
                <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">We'd love to show you how you can reach out and share happiness. 
                    Provide good service, or all of the above! So what are you waiting for, come join us !</p>
                <p data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="btn btn-primary me-4">Follow Now</a>
                </p>

            </div>


        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6" data-aos="fade-up">
                <h2 class="heading">Get In Touch</h2>
                <p class="text-black-50">WE ARE LOOKING FORWARD TO START A NEW DAY WITH YOU</p>
            </div>
        </div>

        <form action="" class="row justify-content-between">

            <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="row">

                    <div class="mb-3 col-lg-6">
                        <label for="name" class="ps-3 fw-bold mb-2">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="ps-3 fw-bold mb-2">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>

                    <div class="mb-3 col-lg-12">
                        <label for="message" class="ps-3 fw-bold mb-2">Message</label>
                        <textarea name="" id="message" class="form-control" cols="30" rows="10"></textarea>
                    </div>

                    <div class="col-lg-6">
                        <input type="submit" class="btn btn-primary text-white py-3" value="Send Message">
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="200">
                <div class="row">
                    <div class="col-6 col-lg-6 mb-4">
                        <h3 class="h6 fw-bold text-secondary">Address</h3>
                        <p>Telkom University</p>
                    </div>
                    <div class="col-6 col-lg-6 mb-4">
                        <h3 class="h6 fw-bold text-secondary">Phone</h3>
                        <p>
                            +628 554 0490 433 <br>
                            +628 344 0983 567
                        </p>
                    </div>

                    <div class="col-6 col-lg-6 mb-4">
                        <h3 class="h6 fw-bold text-secondary">Follow</h3>
                        <ul class="list-unstyled social-custom">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-6 mb-4">
                        <h3 class="h6 fw-bold text-secondary">Email</h3>
                        <p>
                            <a href="#">service@myvolunteer.com</a>
                        </p>
                    </div>

                </div>
            </div>


        </form>
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
