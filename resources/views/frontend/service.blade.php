<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>

    <link href="https://hirayabuilders.com/services" rel="canonical">
    <meta property="og:locale" content="en-US">
    <meta property="og:title" content="Best Builders and Interior Designing Company in Kozhikode | Kerala | India">
    <meta property="og:url" content="https://hirayabuilders.com/services">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://hirayabuilders.com/assets/images/about.png">
    <meta property="og:description" content="We are the best builders and interior designing company in Kozhikode.">
    <meta property="og:site_name" content="hirayabuilders">
    <link rel="icon" type="image/x-icon" href="{{ url('assets/images/favicon.png') }}">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
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


    <div class="main">
    <!-- banner start -->
        <section class="banner service-banner">
            <div class="banner-head">
                <h4>Services</h4>
            </div>
            <div class="banner-links mt-2">
                <a href="index.html">Home / </a>
                <a class="active" href="">Services</a>
            </div>
        </section>
    <!-- banner end -->


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

    <!-- footer start -->
    {{View::make('frontend/layout/footer')}}
    <!-- footer end -->


    </div>


    <script>
        document.getElementById('services').classList.add('active')
    </script>


    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <!-- smooth scroll -->
    <script src="{{url ('assets/js/SmoothScrollMouseWheel.js')}}"></script>
    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <!-- slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- lottie -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- main js -->
    <script src="{{url('assets/js/main.js')}}"></script>


</body>

</html>
