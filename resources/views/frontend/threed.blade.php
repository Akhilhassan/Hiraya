<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three D</title>


    <link href="https://hirayabuilders.com/threed" rel="canonical">
    <meta property="og:locale" content="en-US">
    <meta property="og:title" content="Best Builders and Interior Designing Company in Kozhikode | Kerala | India">
    <meta property="og:url" content="https://hirayabuilders.com/threed">
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
            <section class="banner project-banner-1">
                <div class="banner-head">
                    <h4>3D Projects</h4>
                </div>
                <div class="banner-links mt-2">
                    <a href="index.html">Home / </a>
                    <a class="active" href="">3D Images</a>
                </div>
            </section>


            <!-- 3d card section -->



            <ul class="nav  three-d-nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-exterior-tab" data-bs-toggle="pill" data-bs-target="#pills-exterior" type="button" role="tab" aria-controls="pills-exterior" aria-selected="true">Exterior</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-interior-tab" data-bs-toggle="pill" data-bs-target="#pills-interior" type="button" role="tab" aria-controls="pills-interior" aria-selected="false">Interior</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-exterior" role="tabpanel" aria-labelledby="pills-exterior-tab">
                <div class="three-d-card-section">
                    <div class="row">
                    @foreach ($threed as $data)

                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="three-card-item">

                                    <div>
                                        <img class="img-fluid" src="{{asset('/uploads/Threed/'.$data->image)}}" alt="">
                                    </div>
                                    <div class="thrre-d-card-dtls">
                                        <i class="fa-solid fa-house-chimney"></i>
                                        <span>{{$data->title}}</span>
                                    </div>

                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                </div>
                <div class="tab-pane fade" id="pills-interior" role="tabpanel" aria-labelledby="pills-interior-tab">
                <div class="three-d-card-section">
                    <div class="row">
                    @foreach ($interior as $data)

                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="three-card-item">

                                    <div>
                                        <img class="img-fluid" src="{{asset('/uploads/InteriorThreed/'.$data->image)}}" alt="">
                                    </div>
                                    <div class="thrre-d-card-dtls">
                                        <i class="fa-solid fa-house-chimney"></i>
                                        <span>{{$data->title}}</span>
                                    </div>

                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                </div>
            </div>










    <!-- footer start -->
    {{View::make('frontend/layout/footer')}}
    <!-- footer end -->




         </div>



         <script>
        document.getElementById('threed').classList.add('active')
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
