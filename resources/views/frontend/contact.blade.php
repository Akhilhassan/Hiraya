<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link href="https://hirayabuilders.com/contact" rel="canonical">
    <meta property="og:locale" content="en-US">
    <meta property="og:title" content="Best Builders and Interior Designing Company in Kozhikode | Kerala | India">
    <meta property="og:url" content="https://hirayabuilders.com/contact">
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
        <section class="banner contact-banner">
            <div class="banner-head">
                <h4>Contact</h4>
            </div>
            <div class="banner-links mt-2">
                <a href="index.html">Home / </a>
                <a class="active" href="">Contact</a>
            </div>
        </section>


    <div class="contact-section">
        <img src="gray-dots.png" alt="" class="dots">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <form method="POST" action="{{ url('sent/message') }}" enctype="multipart/form-data" class="left-box">
                      <!-- <img src="stars.png" class="star" alt=""> -->
                        @csrf
                      <span>Let's Meet Over Coffee</span>
                      <h1>CONTACT</h1>

                      <div class="row">
                          <div class="col-md-4 col-sm-6 col-12">
                              <label for="">Name</label>
                              <input name="name" required type="text">
                          </div>
                          <div class="col-md-4 col-sm-6 col-12">
                              <label for="">Email</label>
                              <input required name="email" type="email">
                          </div>
                          <div class="col-md-4 col-12">
                              <label for="">Phone</label>
                              <input name="number" required type="tel">
                          </div>
                          <div class="col-12">
                              <label for="">Message</label>
                              <input name="content" required type="text">
                          </div>
                          <div class="col-12 mt-3 btn-div">
                              <button type="submit" class="btn-1" style="border-style: none;">Submit</button>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="px-md-0 px-sm-5 px-3 col-lg-4">
                  <div class="right-box">
                      <h5>Talk to Us</h5>
                      <p class="email">hirayabuilders@gmail.com</p>
                      <p class="phone">+91 79945 70445</p>
                      <p class="phone">+91 9633 464677</p>

                      <a class="mt-3" href="">Facebook </a>
                      <a href="">Instagram</a>
                      <a href="">Twitter </a>

                      <h5 class="mt-5">Visit Us</h5>
                      <p class="mb-3 location">                                
                        Hiraya Builders & Interiors <br>
                        1st floor Thankam complex, Mannur Valavu, <br>
                        Calicut - 678642</p>

                  </div>
              </div>
          </div>
      </div>
  </div>



    <!-- footer start -->
    {{View::make('frontend/layout/footer')}}
    <!-- footer end -->

    </div>


    <script>
        document.getElementById('contact').classList.add('active')
    </script>





      <!-- jquery -->
      <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            @if($message = session('success'))
            swal(
            'Success',
            "{{$message}}",
            'success'
            )
            @endif
            @if($error_msg = session('error'))
            swal(
            'Error',
            "{{$error_msg}}",
            'error'
            )
            @endif
        </script>
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
