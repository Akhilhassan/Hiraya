<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiraya Builders</title>

    <link href="https://hirayabuilders.com/" rel="canonical">
    <meta property="og:locale" content="en-US">
    <meta property="og:title" content="Best Builders and Interior Designing Company in Kozhikode | Kerala | India">
    <meta property="og:url" content="https://hirayabuilders.com/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://hirayabuilders.com/assets/images/about.png">

    <meta property="og:description" content="We are the best builders and interior designing company in Kozhikode.">
    <meta property="og:site_name" content="hirayabuilders">


    <link rel="icon" type="image/x-icon" href="{{ url('assets/images/favicon.png') }}">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- fancy box -->
    <link rel="stylesheet" href="{{ url('assets/css/jquery.fancybox.min.css') }}">
    <!-- data aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- style -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">


    <meta name="google-site-verification" content="vD819Z-3wY-hNhhXQ-P91OFz_Ku1TubxJdu3E9u6jpw" />


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NPQ0QX47EG"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-NPQ0QX47EG');
    </script>

</head>

<body>


        <!-- header -->
        {{View::make('frontend/layout/header')}}
        <!-- header end -->




    <!-- Page content -->
    <div class="main">

        <!-- maincarousel -->

        <div class="main-slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ url('assets/images/carousel/carousel-1.png') }}" class="d-block w-100" alt="carousel">
                        <div class="carousel-caption">
                            <div>
                                <h5 class="carousel-head">THROUGH <span>YOUR</span> VISION</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('assets/images/carousel/carousel-2.png') }}" class="d-block w-100" alt="carousel">
                        <div class="carousel-caption ">
                            <div>
                                <h5 class="carousel-head">THROUGH <span>YOUR</span> VISION</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('assets/images/carousel/carousel-3.png') }}" class="d-block w-100" alt="carousel">
                        <div class="carousel-caption ">
                            <div>
                                <h5 class="carousel-head">THROUGH <span>YOUR</span> VISION</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- maincarousel end-->

        <!-- about section -->

        <div class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <h3 class="main-head mb-md-4 mb-3">About Us</h3>
                        <p class="para mb-md-4 mb-3">Over the course of its journey, this business has established a firm foothold in it’s industry. The belief that customer satisfaction is as important as their products and services,
                             have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base.</p>
                        <div class="mt-4 mb-md-0 mb-4">
                            <a href="{{url('about')}}" class="btn-1">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-12" data-aos="fade-up">
                        <img src="{{ url('assets/images/about.png') }}" class="img-fluid"  alt="about-img">
                    </div>
                </div>
            </div>
        </div>

        <!-- about section end -->

        <!-- latest project section -->

        <div class="latest-projects-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12 latest--project" data-aos="fade-up">
                        <h3 class="main-head mt-md-5 mt-3">Our Latest Projects</h3>
                        <p class="para mt-md-5 mt-3">Hiraya is always make to accomplish our clients visions and we are so proudly to be build best architecture projects, most inspiring residential architectures, interior & exterior design, landscaping and more from the best engineers. Find all the Hiraya projects.</p>
                        <div class="my-md-5 my-3">
                            <a href="{{url('projects')}}" class="btn-2">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12" data-aos="fade-up">
                        <div class="latest-project-slider owl-carousel">
                            @foreach ($projects as $data)
                            <div class="latest-projects">
                                <a href="{{url('projects')}}">
                                    <div class="latest-projects-box">
                                        <img class="img-fluid" src="{{asset('/uploads/Cover/'.$data->cover)}}" alt="project-img">
                                        <div class="latest-project-dtls">
                                            <p class="head">{{$data->title}}</p>
                                            <div class="project-location"><i class="fa-regular fa-building"></i>{{$data->location}}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- latest project section end -->

        <!-- 3d design section start -->


        <div class="three-d-design-section" data-aos="fade-up">
            <div class="container">
                <h3 class="main-head mt-3 text-center">3D Design Projects</h3>
                <p class="para  text-center mb-4">The concept of before implementing project should be great 3D designs in order to boost our trust to accomplish projects and these are recently 3D designs.</p>

                <div class="three-d-sub-head">
                    <img src="{{ url('assets/images/exterior-sm.png') }}" alt="">
                    <h4>3D Exterior Projects</h4>
                </div>
                <div class="three-d-slider owl-carousel">

                    @foreach ($threed as $data)
                    <div class="slider-item">
                        <a href="three-d.html">
                            <div>
                                <img class="three-d-slider-img" src="{{asset('/uploads/Threed/'.$data->image)}}" alt="three-d-images">
                            </div>
                            <div class="thrre-d-card-dtls">
                                <i class="fa-solid fa-house-chimney"></i>
                                <span>{{$data->title}}</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>


                <div class="interior-three-d-projects">
                <div class="three-d-sub-head">
                    <img src="{{ url('assets/images/interior-sm.png') }}" alt="">
                    <h4>3D Interior Projects</h4>
                </div>


                <div class="three-d-slider owl-carousel">

                    @foreach ($interior as $data)
                    <div class="slider-item">
                        <a href="three-d.html">
                            <div>
                                <img class="three-d-slider-img" src="{{asset('/uploads/InteriorThreed/'.$data->image)}}" alt="three-d-images">
                            </div>
                            <div class="thrre-d-card-dtls">
                                <i class="fa-solid fa-house-chimney"></i>
                                <span>{{$data->title}}</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>


                </div>


            </div>
        </div>


        <!-- 3d design section end -->



        <!-- client section start -->
<!-- 
        <div class="client-section" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h3 class="main-head mt-md-5 mt-3 text-center">Our Clients</h3>
                        <p class="para text-center">Lorem ipsum dolor sit amet consectetur. Ut consectetur donec nisl
                            sed.</p>
                    </div>
                    <div class="col-lg-12 col-md-12 d-flex justify-content-center align-items-center">

                        <div class="client-slider owl-carousel">

                            <div class="item">
                                <div class="client-logo">
                                    <img src="{{ url('assets/images/client/logo-1.png') }}" alt="client-logo">
                                </div>
                                <div class="client-logo">
                                    <img src="{{ url('assets/images/client/logo-2.png') }}" alt="client-logo">
                                </div>
                            </div>

                            <div class="item">
                                <div class="client-logo">
                                    <img src="{{ url('assets/images/client/logo-3.png') }}" alt="client-logo">
                                </div>
                                <div class="client-logo">
                                    <img src="{{ url('assets/images/client/logo-4.png') }}" alt="client-logo">
                                </div>
                            </div>

                            <div class="item">
                                <div class="client-logo">
                                    <img src="{{ url('assets/images/client/logo-5.png') }}" alt="client-logo">
                                </div>
                                <div class="client-logo">
                                    <img src="{{ url('assets/images/client/logo-6.png') }}" alt="client-logo">
                                </div>
                            </div>

                            <div class="item">
                                <div class="client-logo">
                                    <img src="{{ url('assets/images/client/logo-7.png') }}" alt="client-logo">
                                </div>
                                <div class="client-logo">
                                    <img src="{{ url('assets/images/client/logo-8.png') }}" alt="client-logo">
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div> -->

        <!-- client section end -->
<!-- service section start -->

<div class="service-section" data-aos="fade-up">
            <div class="container">
                <div>
                    <h3 class="main-head text-center">Our Services</h3>
                    <p class="para text-center">Hiraya focusing to achieve client visions and making sure to satisfied by our services.</p>
                </div>
                <div class="service-card-section">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="{{url('assets/images/service/consultation-sm 1.png')}}" alt="service-icon">
                                <h6>Building Consulting</h6>
                                <p>Hiraya is associated with RENSFED and be participating the development of building construction.</p>
                                <a href="{{url('services')}}">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="{{url('assets/images/service/elevation-sm 1.png')}}" alt="service-icon">
                                <h6>Elevation Designing</h6>
                                <p>Hiraya can help with the aesthetic planning during your home or Apartment design process. By creating an elevation drawing, you can easily figure out the placement of things like furniture, fixtures, ceiling height, or other decor you plan on including in your final design.</p>
                                <a href="{{url('services')}}">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="{{url('assets/images/service/civil-construction-sm 1.png')}}"
                                    alt="">
                                <h6>Civil Constructions</h6>
                                <p>Hiraya is involved with the maintenance, design and construction. The creation of infrastructure involving anything to do with water, earth or transport.</p>
                                <a href="{{url('services')}}">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="{{url('assets/images/service/landscape-sm 1.png')}}" alt="service-icon">
                                <h6>Landscaping</h6>
                                <p>Hiraya creating plans, designs and drawings on matters to do with landscaping</p>
                                <a href="{{url('services')}}">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="{{url('assets/images/service/water-pool-sm 1.png')}}" alt="service-icon">
                                <h6>Water pool Designing</h6>
                                <p>Swimming pools come in all different types and sizes, and most importantly for relaxation. We can guide you to designing a swimming pool and will provide a complete 3D design project.</p>
                                <a href="{{url('services')}}">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="{{url('assets/images/service/approval-sm 1.png')}}" alt="service-icon">
                                <h6>Approval Completion</h6>
                                <p>Paperwork is always should be perfect in order to build accomplish dream and Hiraya making necessary assistance to our clients.</p>
                                <a href="{{url('services')}}">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="{{url('assets/images/service/interior-sm 1.png')}}" alt="service-icon">
                                <h6>Interior Designing</h6>
                                <p>The design is element tool to achieve your visions and Hiraya have a highly qualified professionals to deliver excellent Interior designs</p>
                                <a href="{{url('services')}}">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="{{url('assets/images/service/walkthrough-sm 1.png')}}" alt="service-icon">
                                <h6>Walk Through Modeling</h6>
                                <p>walkthrough is best way to find our visions and making a great a computer-based animation for Hiraya clients.</p>
                                <a href="{{url('services')}}">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="{{url('assets/images/service/wall-sm 1.png')}}" alt="service-icon">
                                <h6>Landscaping & Compound Wall</h6>
                                <p>There are many ways to make beautiful compund wall in this modern era and iTs depends about the matter to implement according to your projects.</p>
                                <a href="{{url('services')}}">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- service section end -->


        <!-- testimonial section start  -->

        <div class="testimonial-section" data-aos="fade-up">
            <div class="container">
                <h3 class="main-head mt-md-3 mt-3">What Our Customers Say !</h3>
                <div class="testimonial-slider owl-carousel">
                    <div class="testimonial-box">
                        <div class="profile-sec">
                            <div>
                                <img src="{{ url('assets/images/testimonial/profile-1.png') }}" alt="testimonial-profile-image">
                            </div>
                            <div class="details">
                                <p class="name">John</p>
                                <p class="designation">Engineer</p>
                                <div class="starRating">
                                    <div>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis
                                orci lectus maecenas.
                                Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu.</p>
                        </div>
                    </div>
                    <div class="testimonial-box">
                        <div class="profile-sec">
                            <div>
                                <img src="{{ url('assets/images/testimonial/profile-2.png') }}" alt="testimonial-profile-image">
                            </div>
                            <div class="details">
                                <p class="name">Vinod Kumar</p>
                                <p class="designation">Doctor</p>
                                <div class="starRating">
                                    <div>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis
                                orci lectus maecenas.
                                Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu.</p>
                        </div>
                    </div>
                    <div class="testimonial-box">
                        <div class="profile-sec">
                            <div>
                                <img src="{{ url('assets/images/testimonial/profile-3.png') }}" alt="testimonial-profile-image">
                            </div>
                            <div class="details">
                                <p class="name">Aleena</p>
                                <p class="designation">Photographer</p>
                                <div class="starRating">
                                    <div>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis
                                orci lectus maecenas.
                                Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- testimonial section end -->

    <!-- cta section start -->

    <div class="cta-section" data-aos="fade-up">
        <div class="cta-section-img">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-8 col-md-12 col-12 d-flex flex-column justify-content-center">
                        <p class="cta-head">Get a free consultation. <br>Just leave a request below </p>
                        <div class="cta-input">
                            <input type="text" placeholder="Enter Your Name" name="" id="">
                            <input type="text" placeholder="Enter Your Number" name="" id="">
                            <a href="#" class="">Connect Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 d-lg-block d-md-none d-none d-flex">
                        <div class="cta-right-img">
                            <div class="cta-img-div">
                                <img src="{{url ('assets/images/cta-banner-side-img.png')}}" class="img-fluid" alt="testimonial-profile-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cta section end -->


    <!-- img gallery section start -->



    <div class="masionary-container">
        @foreach ($galleries as $data)
        <div class="item">
            <a href="{{asset('/uploads/Gallery/'.$data->gallery)}}" data-fancybox="group">
            <span class="thumb"> <img src="{{asset('/uploads/Gallery/'.$data->gallery)}}" /></span></a>
        </div>
        @endforeach
    </div>





<!-- img gallery section end -->

    <!-- footer start -->
    {{View::make('frontend/layout/footer')}}
    <!-- footer end -->



    </div>


    <script>
        document.getElementById('home').classList.add('active')
    </script>






    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <!-- smooth scroll -->
    <script src="assets/js/SmoothScrollMouseWheel.js"></script>
    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <!-- slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- gallery -->
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
    <!-- fancybox -->
    <script src="{{url('assets/js/jquery.fancybox.min.js')}}"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- lottie -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- main js -->
    <script src="{{url('assets/js/main.js')}}"></script>




</body>
</html>
