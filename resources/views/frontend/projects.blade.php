<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>


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

    <!-- banner -->
        <section class="banner project-banner">
            <div class="banner-head">
                <h4>Projects</h4>
            </div>
            <div class="banner-links mt-2">
                <a href="index.html">Home / </a>
                <a class="active" href="">Projects</a>
            </div>
        </section>


    <!-- project card section -->

    <div class="project-card-section">
        <div class="container">
            <div class="row">
                @foreach ($projects as $data)
                <div class="col-lg-4 col-md-6 col-6">
                    <a href="{{url('project/'.$data->id)}}">
                        <div class="latest-projects-box">
                            <img class="img-fluid" src="{{asset('/uploads/Cover/'.$data->cover)}}" alt="">
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



    <!-- footer start -->
    {{View::make('frontend/layout/footer')}}
    <!-- footer end -->


    </div>

    <script>
        document.getElementById('projects').classList.add('active')
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
</body>
</html>
