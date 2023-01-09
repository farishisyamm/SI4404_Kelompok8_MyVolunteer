@extends('main')
@section('title', 'Activity')
@section('content')

<div class="hero overlay" style="background-image: url('images/img_v_6-min.jpg')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center mx-auto">
                <span class="subheading-white text-white mb-3" data-aos="fade-up">Activity</span>

                <h1 class="heading text-white mb-2" data-aos="fade-up">Our Activity</h1>
                <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">Share happiness, with all my heart.</p>
                
            </div>

            
        </div>
    </div>
</div>



<div class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="causes-item bg-white">
                    <a href="#"><img src="{{url('/images')}}/img_v_1-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                    <div class="px-4 pb-3 pt-3">
                        <span class="date">May 11, 2020</span>
                        <h3><a href="#">Food for the Hungry</a></h3>
                        <p></p>
                        <p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>

                        
                    </div>
                </div>
            </div>		
            <div class="col-lg-4 col-md-6">
                <div class="causes-item bg-white">
                    <a href="#"><img src="{{url('/images')}}/img_v_2-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                    <div class="px-4 pb-3 pt-3">
                        <span class="date">May 11, 2020</span>
                        <h3><a href="#">Education for Children</a></h3>
                        <p></p>
                        <p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="causes-item bg-white">
                    <a href="#"><img src="{{url('/images')}}/img_v_3-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                    <span class="date">May 11, 2020</span>
                    <div class="px-4 pb-3 pt-3">
                        <h3><a href="#">Support Livelihood</a></h3>
                        <p></p>
                        <p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="causes-item bg-white">
                    <a href="#"><img src="{{url('/images')}}/img_v_4-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                    <div class="px-4 pb-3 pt-3">
                        <span class="date">May 11, 2020</span>

                        <h3><a href="#">Food for the Hungry</a></h3>
                        <p></p>

                        <p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="causes-item bg-white">
                    <a href="#"><img src="{{url('/images')}}/img_v_5-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                    <div class="px-4 pb-3 pt-3">
                        <span class="date">May 11, 2020</span>
                        <h3><a href="#">Education for Children</a></h3>
                        <p></p>

                        <p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="causes-item bg-white">
                    <a href="#"><img src="{{url('/images')}}/img_v_6-min.jpg" alt="Image" class="img-fluid mb-4 rounded"></a>
                    <div class="px-4 pb-3 pt-3">
                        <span class="date">May 11, 2020</span>
                        <h3><a href="#">Support Livelihood</a></h3>
                        <p></p>
                        <p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span class="icon-chevron-right"></span></a></p>
                        
                    </div>
                </div>
            </div>

        </div>	

        <div class="row align-items-center py-5">
            <div class="col-lg-3">
                <!-- Pagination (1 of 10) -->
            </div>
            <div class="col-lg-6 text-center">
                <div class="custom-pagination">
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
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
                <p>
                IF YOU WANT TO KNOW MORE ABOUT US, CLICK ON INSTAGRAM !</p>
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
