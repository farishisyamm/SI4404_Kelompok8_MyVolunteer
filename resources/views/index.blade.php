@extends('main')
@section('title', 'Home')
@section('content')

<div class="hero overlay" style="background-image: url('images/hero_2.jpg')">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-8 text-left">
                <span class="subheading-white text-white mb-3" data-aos="fade-up">Volunteer</span>
                <h1 class="heading text-white mb-2" data-aos="fade-up">Give a helping hand to those who need it!</h1>
                <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">Lorem ipsum dolor sit, amet
                    consectetur adipisicing elit. Illum minima dignissimos hic mollitia eius et quam ducimus maiores eos
                    magni.</p>
                <p data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="btn btn-primary me-4 d-inline-flex align-items-center"> <i
                            class="flaticon-organs-donation me-2"></i><span>Follow Now</span></a>
                    <a href="https://www.youtube.com/watch?v=mwtbEGNABWU"
                        class="text-white glightbox d-inline-flex align-items-center"><span
                            class="icon-play me-2"></span><span>Watch the video</span></a>
                </p>
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
                    <p class="mb-4 lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum minima
                        dignissimos hic mollitia eius et quam ducimus maiores eos magni.</p>
                    <p><a href="#" class="link-underline">Learn More</a></p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="mission">
                    <h2>Our Mission</h2>
                    <p class="mb-4 lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum minima
                        dignissimos hic mollitia eius et quam ducimus maiores eos magni.</p>
                    <p><a href="#" class="link-underline">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section flip-section" style="background-image: url('images/img_v_2-min.jpg')">
    <div class="blob-1">
        <img src="{{url('/images')}}/blob.png" alt="Image" class="img-fluid">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center" data-aos="fade-up">
                <span class="subheading-white mb-3 text-white">Help Now</span>
                <h2 class="heading text-white">Help Today</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="card-flip">
                    <div class="flip">
                        <div class="front">
                            <!-- front content -->
                            <div class="flip-content-wrap">
                                <span class="icon-local_drink"></span>
                                <h3>Pure Water</h3>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <div class="flip-content-wrap">
                                <h3>Pure Water</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Distinctio, quam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Flip -->
            </div>
            <div class="col-lg-4 position-relative" data-aos="fade-up" data-aos-delay="200">
                <div class="card-flip">
                    <div class="flip">
                        <div class="front">
                            <!-- front content -->
                            <div class="flip-content-wrap">
                                <span class="icon-graduation-cap"></span>
                                <h3>Give Education</h3>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <div class="flip-content-wrap">
                                <h3>Give Education</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Distinctio, quam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 position-relative" data-aos="fade-up" data-aos-delay="400">
                <div class="card-flip">
                    <div class="flip">
                        <div class="front">
                            <!-- front content -->
                            <div class="flip-content-wrap">
                                <span class="icon-medkit"></span>
                                <h3>Medical Mission</h3>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <div class="flip-content-wrap">
                                <h3>Medical Mission</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Distinctio, quam.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>




<div class="section">
    <div class="container">
        <div class="row mb-5 align-items-center justify-content-between">
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                <span class="subheading mb-3">Who we are</span>
                <h2 class="heading">About Us</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus sint quae cumque vitae sed aliquid,
                    voluptatibus, doloremque?</p>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <blockquote>
                    Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Quos deserunt quod, dolores obcaecati.
                    Magni nesciunt architecto, ullam laborum, illum fugit.
                </blockquote>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-5 pe-lg-5" data-aos="fade-up" data-aos-delay="200">
                <ul class="nav nav-pills mb-5 custom-nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-mission-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-mission" type="button" role="tab" aria-controls="pills-mission"
                            aria-selected="true">Our Mission</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-values-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-values" type="button" role="tab" aria-controls="pills-values"
                            aria-selected="false">Our Values</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-history-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-history" type="button" role="tab" aria-controls="pills-history"
                            aria-selected="false">Our History</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-mission" role="tabpanel"
                        aria-labelledby="pills-mission-tab">
                        <h2 class="mb-3 text-primary fw-bold">Our Mission</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eveniet voluptates eligendi
                            maxime ad. Quas commodi distinctio modi, aspernatur, quos neque omnis magnam voluptatibus,
                            sapiente fugiat cupiditate velit impedit praesentium.</p>
                        <p>Reprehenderit hic illo, nulla autem odit molestiae molestias, dolores accusantium eos? Ut
                            aspernatur fuga labore eius sequi nihil sit iusto, enim. Aliquam, cumque! Quaerat inventore
                            illo dicta, exercitationem natus ducimus?</p>
                        <p class="mt-5">
                            <a href="#" class="btn btn-primary me-4">Follow Now</a>
                            <a href="#" class="link-more">Learn More <span class="icon-chevron-right"></span></a>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-values" role="tabpanel" aria-labelledby="pills-values-tab">
                        <h2 class="mb-3 text-primary fw-bold">Our Values</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eveniet voluptates eligendi
                            maxime ad. Quas commodi distinctio modi, aspernatur, quos neque omnis magnam voluptatibus,
                            sapiente fugiat cupiditate velit impedit praesentium.</p>
                        <p>Reprehenderit hic illo, nulla autem odit molestiae molestias, dolores accusantium eos? Ut
                            aspernatur fuga labore eius sequi nihil sit iusto, enim. Aliquam, cumque! Quaerat inventore
                            illo dicta, exercitationem natus ducimus?</p>
                        <p class="mt-5">
                            <a href="#" class="btn btn-primary me-4">Be A Volunteer</a>
                            <a href="#" class="link-more">Learn More <span class="icon-chevron-right"></span></a>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">

                        <h2 class="mb-3 text-primary fw-bold">Our History</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eveniet voluptates eligendi
                            maxime ad. Quas commodi distinctio modi, aspernatur, quos neque omnis magnam voluptatibus,
                            sapiente fugiat cupiditate velit impedit praesentium.</p>
                        <p>Reprehenderit hic illo, nulla autem odit molestiae molestias, dolores accusantium eos? Ut
                            aspernatur fuga labore eius sequi nihil sit iusto, enim. Aliquam, cumque! Quaerat inventore
                            illo dicta, exercitationem natus ducimus?</p>
                        <p class="mt-5">
                            <a href="#" class="btn btn-primary me-4">Be a Sponsor</a>
                            <a href="#" class="link-more">Learn More <span class="icon-chevron-right"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="overlap-imgs">
                    <img src="{{url('/images')}}/img_v_2-min.jpg" alt="Image" class="img-fluid rounded" data-aos="fade-up"
                        data-aos="100">
                    <img src="{{url('/images')}}/img_v_3-min.jpg" alt="Image" class="img-fluid rounded" data-aos="fade-up"
                        data-aos="200">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section cause-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                <span class="subheading mb-3">Causes</span>
                <h2 class="heading">Featured Causes</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Animi quaerat, eaque asperiores quos
                    natus, ratione.</p>

                <div id="features-slider-nav" class="mt-5 d-flex justify-content-center">
                    <button class="btn btn-primary prev d-flex align-items-center me-2" data-controls="prev"> <span
                            class="icon-chevron-left"></span> <span class="ms-3">Prev</span></button>
                    <button class="btn btn-primary next d-flex align-items-center" data-controls="next"><span
                            class="me-3">Next</span> <span class="icon-chevron-right"></span></button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="features-slider" id="features-slider">

                <div class="item">
                    <div class="causes-item bg-white">
                        <a href="#"><img src="{{url('/images')}}/img_v_1-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                        <div class="px-4 pb-5 pt-3">

                            <h3><a href="#">Food for the Hungry</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora
                                laudantium voluptate, amet ad libero facilis nihil officiis.</p>

                            <div class="progress mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>

                            <div class="d-flex mb-4 justify-content-between amount">
                                <div>250 Relawan</div>
                                <div>1000 Relawan</div>
                            </div>
                            <div>
                                <a href="<?php echo url('/register');?>" class="btn btn-primary">Follow Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="causes-item bg-white">
                        <a href="#"><img src="{{url('/images')}}/img_v_2-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                        <div class="px-4 pb-5 pt-3">
                            <h3><a href="#">Education for Children</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora
                                laudantium voluptate, amet ad libero facilis nihil officiis.</p>

                            <div class="progress mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 68%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">68%</div>
                            </div>

                            <div class="d-flex mb-4 justify-content-between amount">
                                <div>680 Relawan</div>
                                <div>1000 Relawan</div>
                            </div>
                            <div>
                                <a href="<?php echo url('/register');?>" class="btn btn-primary">Follow Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="causes-item bg-white">
                        <a href="#"><img src="{{url('/images')}}/img_v_3-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                        <div class="px-4 pb-5 pt-3">
                            <h3><a href="#">Support Livelihood</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora
                                laudantium voluptate, amet ad libero facilis nihil officiis.</p>

                            <div class="progress mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 87%;" aria-valuenow="87"
                                    aria-valuemin="0" aria-valuemax="100">87%</div>
                            </div>

                            <div class="d-flex mb-4 justify-content-between amount">
                                <div>870 Relawan</div>
                                <div>1000 Relawan</div>
                            </div>
                            <div>
                                <a href="<?php echo url('/register');?>" class="btn btn-primary">Follow Now</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="causes-item bg-white">
                        <a href="#"><img src="{{url('/images')}}/img_v_4-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                        <div class="px-4 pb-5 pt-3">

                            <h3><a href="#">Food for the Hungry</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora
                                laudantium voluptate, amet ad libero facilis nihil officiis.</p>

                            <div class="progress mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>

                            <div class="d-flex mb-4 justify-content-between amount">
                                <div>250 Relawan</div>
                                <div>1000 Relawan</div>
                            </div>
                            <div>
                                <a href="<?php echo url('/register');?>" class="btn btn-primary">Follow Now</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="causes-item bg-white">
                        <a href="#"><img src="{{url('/images')}}/img_v_5-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                        <div class="px-4 pb-5 pt-3">
                            <h3><a href="#">Education for Children</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora
                                laudantium voluptate, amet ad libero facilis nihil officiis.</p>

                            <div class="progress mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 54%;" aria-valuenow="54"
                                    aria-valuemin="0" aria-valuemax="100">54%</div>
                            </div>

                            <div class="d-flex mb-4 justify-content-between amount">
                                <div>540 Relawan</div>
                                <div>1000 Relawan</div>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary">Follow Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="causes-item bg-white">
                        <a href="#"><img src="{{url('/images')}}/img_v_6-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                        <div class="px-4 pb-5 pt-3">
                            <h3><a href="#">Support Livelihood</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora
                                laudantium voluptate, amet ad libero facilis nihil officiis.</p>

                            <div class="progress mb-2">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>

                            <div class="d-flex mb-4 justify-content-between amount">
                                <div>250 Relawan</div>
                                <div>1000 Relawan</div>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary">Follow Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="section flip-section secondary-bg" style="background-image: url('images/img_v_4-min.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <span class="subheading-white mb-3 text-white" data-aos="fade-up">Help Now</span>
                <h3 class="mb-4 heading text-white" data-aos="fade-up">Let's Help The Unfortunate People </h3>
                <a href="<?php echo url('/register');?>" class="btn btn-outline-white me-3" data-aos="fade-up" data-aos-delay="100">Become a
                    Volunteer</a> <a href="<?php echo url('/register');?>" class="btn btn-outline-white" data-aos="fade-up"
                    data-aos-delay="200">Become a
                    Organization</a>
            </div>
        </div>
    </div>
</div>

<div class="section bg-light">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5" data-aos="fade-up">
                <span class="subheading mb-3">Impact</span>
                <h2 class="heading mb-4">Explore Volunteer work and Impact in 2022</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Inventore, vero quibusdam quisquam nisi
                    officia obcaecati, modi impedit veniam nam possimus!</p>
                <p>Corporis culpa facilis, nesciunt repellat amet nihil voluptatibus repudiandae blanditiis officia,
                    ullam adipisci molestiae minima magnam quas ex temporibus aliquid!</p>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="row section-counter">
                    <div class="col-lg-6">
                        <div class="counter">
                            <i class="flaticon-social-services d-block text-secondary"></i>

                            <span class="number countup">589</span>
                            <span class="d-block">New Causes</span>
                        </div>

                        <div class="counter">
                            <i class="flaticon-charity-money d-block text-secondary"></i>
                            <span class="number">$<span class="countup">920</span>M</span>
                            <span class="d-block">Fund Raised</span>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="counter mt-5">
                            <i class="flaticon-money-donation d-block text-secondary"></i>
                            <span class="number countup">4211</span>
                            <span class="d-block">Donors</span>
                        </div>

                        <div class="counter">
                            <i class="flaticon-organs-donation d-block text-secondary"></i>
                            <span class="number countup">389</span>
                            <span class="d-block">Volunteers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section bg-light pt-0">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-5 mb-5" data-aos="fade-up">
                <span class="subheading mb-1">News Update</span>
                <h2 class="heading mb-1">Our News</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora laudantium
                    voluptate, amet ad libero facilis nihil officiis.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="causes-item bg-white">
                    <a href="#"><img src="{{url('/images')}}/img_v_1-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                    <div class="px-4 pb-3 pt-3">
                        <span class="date">May 11, 2020</span>
                        <h3><a href="#">Food for the Hungry</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora
                            laudantium voluptate, amet ad libero facilis nihil officiis.</p>
                        <p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span
                                    class="icon-chevron-right"></span></a></p>


                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="causes-item bg-white">
                    <a href="#"><img src="{{url('/images')}}/img_v_2-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                    <div class="px-4 pb-3 pt-3">
                        <span class="date">May 11, 2020</span>
                        <h3><a href="#">Education for Children</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora
                            laudantium voluptate, amet ad libero facilis nihil officiis.</p>
                        <p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span
                                    class="icon-chevron-right"></span></a></p>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="causes-item bg-white">
                    <a href="#"><img src="{{url('/images')}}/img_v_3-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                    <span class="date">May 11, 2020</span>
                    <div class="px-4 pb-3 pt-3">
                        <h3><a href="#">Support Livelihood</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora
                            laudantium voluptate, amet ad libero facilis nihil officiis.</p>
                        <p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span
                                    class="icon-chevron-right"></span></a></p>

                    </div>
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
