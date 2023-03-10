<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link href="https://hirayabuilders.com/about" rel="canonical">
    <meta property="og:locale" content="en-US">
    <meta property="og:title" content="Best Builders and Interior Designing Company in Kozhikode | Kerala | India">
    <meta property="og:url" content="https://hirayabuilders.com/about">
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
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}"></head>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NPQ0QX47EG"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-NPQ0QX47EG');
    </script>
<body>



        <!-- header -->
        {{View::make('frontend/layout/header')}}
        <!-- header end -->

    <div class="main">

        <!-- banner -->
        <section class="banner about-banner">
            <div class="banner-head">
                <h4>About Us </h4>
            </div>
            <div class="banner-links mt-2">
                <a href="index.html">Home / </a>
                <a class="active" href="#">About Us</a>
            </div>
        </section>

        <!-- aboutUs-details -->
        <div class="aboutUs-details-section space-y">
            <div class="container">
            <div class="row">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="about-section-heading">
                        <h2>we're Builders You Can Trust.</h2>
                    </div>
                    <div class="about-details pt-2">
                        <p class="para">
                        Over the course of its journey, this business has established a firm foothold in it???s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base.
                        </P>

                        <div class="core-values">
                            <h3>Our Core Values</h3>
                            <ul>
                                <li>Excellence</li>
                                <li>Integrity</li>
                                <li>Reliability</li>
                                <li>Innovation</li>
                                <li>Team Work</li>
                                <li>Commitment</li>
                            </ul>
                        </div>

                    </div>

                </div>
                <div class="col-md-6 d-flex justify-content-center order-1 order-md-2">
                    <div class="about-img  d-flex justify-content-center pb-4">
                        <img class="wow fadeIn w-100"  src="{{url('assets/images/about.png')}}" alt="about-img">
                    </div>
                </div>
            </div>
            </div>
        </div>

        <!-- vision and mission section -->

        <div class="vision-mision-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mission-vision-box" data-aos="fade-up">
                            <div class="round-1"></div>
                            <h3 class="text-center">Mission</h3>
                            <p>To deliver high quality projects to our customers on time and within budget.To values the importance of our relationship with our customers with honesty.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mission-vision-box box2" data-aos="fade-up">
                            <div class="round-1"></div>
                            <h3 class="text-center">Vision</h3>
                            <p>To move a step ahead of contempoaries by synchronizing ourselves with the cutting-edge technologies and the modern methods in order to achieve the extraordinary and to reward success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- vision and mission section end -->

        <!-- testimonial section start  -->

        <div class="testimonial-section">
            <div class="container">
                <h3 class="main-head mt-md-3 mt-3">What Our Customers Say !</h3>
                <div class="testimonial-slider owl-carousel">
                    <div class="testimonial-box">
                        <div class="profile-sec">
                            <div>
                                <img src="{{url('assets/images/testimonial/profile-1.png')}}" alt="">
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
                                <img src="{{url('assets/images/testimonial/profile-2.png')}}" alt="">
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
                                <img src="{{url('assets/images/testimonial/profile-3.png')}}" alt="">
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


    <!-- footer start -->
    {{View::make('frontend/layout/footer')}}
    <!-- footer end -->


    </div>


    <script>
        document.getElementById('about').classList.add('active')
    </script>



    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <!-- smooth scroll -->
    <script src="{{url('assets/js/SmoothScrollMouseWheel.js')}}"></script>
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

    <script>
        AOS.init();
      </script>

</body>
</html>
