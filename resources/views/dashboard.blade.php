<head>
    @vite('resources/css/tailwind_vite.css')
</head>
<x-app-layout>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

   {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("WELLCOME YOU'RE HOME!") }}
                </div>
            </div>
        </div>
    </div> --}}

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords"
    content="Reprise Responsive web template, Bootstrap Web Templates" />
  <title>Reprise Personal Category Bootstrap Responsive Web Template | Home :: W3layouts</title>
  <link href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
  <!-- header -->
  <header id="site-header" class="header fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <a class="navbar-brand mr-xl-5 mr-lg-3" href="index.html">
          <span class="fa fa-black-tie"></span> Reprise
        </a>
        <!-- if logo is image enable this
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-lg-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/services') }}">Services</a>
              </li>

              <li class="nav-item mr-lg-5">
                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
              </li>
            <!--//search-right-->
            <div class="search-right ml-xl-5 mr-xl-0 mr-lg-3 ">
              <!--/search-form-->
              <form action="#" method="GET" class="search-box position-relative">
                <div class="input-search">
                  <input type="search" placeholder="Enter Keyword" name="search" required="required" autofocus=""
                    class="search-popup">

                  <button type="submit" class="btn search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
              </form>
              <!--//search-form-->
            </div>
            <!--/search-right-->
          </ul>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!-- //header -->
  <!-- banner-section -->
  <section id="home" class="w3l-banner py-5">
    <div class="container">
      <div class="align-items-center">
        <div class="bannerw3-content mt-lg-0 mt-4">
          <span class="title-small">Hey there!</span>
          <h3 class="mb-2 title">
            <span> Looking for my <br>next
              opportunity
              to make a change.</span>
            The digital way. </h3>
          <p class="mt-4 pr-lg-5">I design with a purpose, viewing digital a single piece of a larger picture.
            Escalate effective products through design and creative strategy.</p>
          <div class="mt-sm-5 mt-4">
            <a class="btn btn-primary btn-style" href="contact.html"> Let's Work Together </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //banner-section -->
  <!--/w3l-index2-->
  <section class="w3l-index2" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
        <div class="row mx-auto text-center">
          <div class="col-lg-12 mt-lg-0 mt-5 text-left">
            <h5 class="title-subhny mb-2">About Me</h5>
            <h3 class="title-w3l"><span>I'm a Passionate designer & developer who loves simplicity in things and crafts
                beautiful user</span> interfaces with love.</h3>
            <p class="mt-4">I am 29 years old front-end developer from Nowy Sacz in Poland - in the busienss since 2004!

              Through my 5 years of my career I have been working for over 500 clients from all over the World. My
              speciality is webdesign and Angular development. I guarentee great communication and quick turnaround.</p>
            <div class="about-pic-grids row no-gutters mt-5">
              <div class="col-md-3 position-relative person-img">
                <img src="assets/images/person.jpg" alt="" class="radius-image img-fluid">
              </div>
              <div class="col-md-9 about-pic-info pl-lg-5 mt-md-0 mt-2">
                <h4>Hi! I’m Marcus Nowak <br> experienced Front-End Developer from Poland</h4>
                <p class="title mt-2">
                  Follow Me </p>
                <div class="social-column-3 mt-3">
                  <a href="#" target="_blank" class="twitter">
                    <span class="fa fa-twitter mr-2"></span>
                    <span class="social-text">Twitter</span>
                  </a>
                  <a href=" #" target="_blank" class="instagram">
                    <span class="fa fa-instagram mr-2"></span>
                    <span class="social-text">Instagram</span>
                  </a>
                  <a href=" #" class="dribble">
                    <span class="fa fa-dribbble mr-2"></span>
                    <span class="social-text">Dribbble</span>
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //w3l-index2-->
  <!--/w3l-education-->
  <section class="w3lhny-timeline py-5" id="education">
    <div class="container py-lg-5 py-md-3 py-2">
      <div class="title-content text-center">
        <h6 class="title-subhny">Experts in field</h6>
        <h3 class="title-w3l mb-sm-5 mb-4 pb-lg-2"> <span>
            My
          </span>
          Job & Education</h3>
      </div>
      <div class="w3l-educatiob-job-info mt-lg-5 mt-3 pt-lg-2">
        <ul class="m-timeline">
          <li>
            <div class="m-timeline__date">
              <span>Present</span> - Design & Frontend Techs
            </div>

            <p>
              Company Ltd.
            </p>
          </li>

          <li>
            <div class="m-timeline__date">
              <span>2020</span> - Illustration, Design, Animation
            </div>

            <p> Company Ltd.</p>
          </li>

          <li>
            <div class="m-timeline__date">
              <span>2018</span> - Webdesigner & Front-End Developer
            </div>

            <p>
              Company Ltd.
            </p>
          </li>
          <li>
            <div class="m-timeline__date">
              <span>2017</span> Senior Front-End Developer
            </div>

            <p>
              Company Ltd.
            </p>
          </li>
          <li>
            <div class="m-timeline__date">
              <span>2016</span> - Junior Front-End Developer
            </div>

            <p>
              Company Ltd.
            </p>
          </li>
          <li>
            <div class="m-timeline__date">
              <span>2015</span> - IT Engineer
            </div>
            <p>
              University of Oxford
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!--//w3l-education-->
  <!--/w3-grids-3-->
  <section class="w3l-bottom-grids-6 py-5" id="services">
    <div class="container py-lg-5 py-md-4 py-2">
      <h5 class="title-subhny mb-2">My Services</h5>
      <h3 class="title-w3l"><span>What I </span>Do</h3>
      <div class="grids-area-hny main-cont-wthree-fea row pt-3 mt-5">
        <div class="col-lg-4 col-md-6 grids-feature">
          <div class="area-box">
            <div class="area-icon icon-red">
              <span class="fa fa-paint-brush"></span>
            </div>
            <h4><a href="#feature" class="title-head">Web Design</a></h4>
            <p>Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet. </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
          <div class="area-box">
            <div class="area-icon icon-green">
              <span class="fa fa-podcast"></span>
            </div>
            <h4><a href="#feature" class="title-head">Brand Building</a></h4>
            <p>Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet. </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
          <div class="area-box">
            <div class="area-icon icon-blue">
              <span class="fa fa-laptop"></span>
            </div>
            <h4><a href="#feature" class="title-head">App Dev</a></h4>
            <p>Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet. </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 grids-feature mt-5">
          <div class="area-box">
            <div class="area-icon icon-yellow">
              <span class="fa fa-paint-brush"></span>
            </div>
            <h4><a href="#feature" class="title-head">Clean Code</a></h4>
            <p>Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet. </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 grids-feature mt-5">
          <div class="area-box">
            <div class="area-icon icon-purple">
              <span class="fa fa-podcast"></span>
            </div>
            <h4><a href="#feature" class="title-head">Mobile apps</a></h4>
            <p>Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet. </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 grids-feature mt-5">
          <div class="area-box">
            <div class="area-icon icon-orange">
              <span class="fa fa-laptop"></span>
            </div>
            <h4><a href="#feature" class="title-head">Retina Ready</a></h4>
            <p>Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi sit amet. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//w3-grids-3-->
  <!-- gallery section -->
  <div class="gallery section-agile py-5">
    <div class="container-fluid py-lg-5 py-md-4 px-lg-0 mx-lg-0">
      <div class="title-content text-center">
        <h6 class="title-subhny">My Projects</h6>
        <h3 class="title-w3l mb-sm-5 mb-4 pb-lg-2"> <span>
            My
          </span>
          Projects</h3>
      </div>
      <div class="row gallery_grids no-gutters">
        <div class="col-lg-4 col-6 gallery-img-grid gallery_grid1 hover14 column">
          <div class="gallery_effect">
            <a href="assets/images/g1.jpg" class="js-img-viwer d-block">
              <figure>
                <img src="assets/images/g1.jpg" alt=" " class="img-fluid" />
              </figure>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-6 gallery-img-grid hover14 column">
          <div class="gallery_effect">
            <a href="assets/images/g2.jpg" class="js-img-viwer d-block">
              <figure>
                <img src="assets/images/g2.jpg" alt=" " class="img-fluid" />
              </figure>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-6 gallery-img-grid hover14 column">
          <div class="gallery_effect">
            <a href="assets/images/g3.jpg" class="js-img-viwer d-block">
              <figure>
                <img src="assets/images/g3.jpg" alt=" " class="img-fluid" />
              </figure>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-6 gallery-img-grid hover14 column">
          <div class="gallery_effect">
            <a href="assets/images/g4.jpg" class="js-img-viwer d-block">
              <figure>
                <img src="assets/images/g4.jpg" alt=" " class="img-fluid" />
              </figure>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-6 gallery-img-grid hover14 column">
          <div class="gallery_effect">
            <a href="assets/images/g5.jpg" class="js-img-viwer d-block">
              <figure>
                <img src="assets/images/g5.jpg" alt=" " class="img-fluid" />
              </figure>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-6 gallery-img-grid hover14 column">
          <div class="gallery_effect">
            <a href="assets/images/g6.jpg" class="js-img-viwer d-block">
              <figure>
                <img src="assets/images/g6.jpg" alt=" " class="img-fluid" />
              </figure>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- //gallery section -->
  <!-- /testimonials-->
  <section class="w3l-clients" id="testimonials">
    <div class="container py-lg-5 py-md-3">
      <div class="row w3-testimonial-grids">
        <div class="col-lg-6 w3-testimonial-content-top pr-lg-5">
          <div class="title-content text-left">
            <h6 class="title-subhny">Testimonials</h6>
            <h3 class="title-w3l mb-sm-5 mb-4 pb-lg-2">
              <span> What my clients think
              </span>
              about Me</h3>
          </div>
          <div id="owl-demo1" class="owl-carousel owl-theme mt-4 py-2 mb-4">
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                      laudantium
                      voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                      Dolores molestias adipisci dolor sit amet! by the Desire to achieve Success .</q>
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="assets/images/c1.jpg" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>John wilson</h3>
                      <p class="indentity">Seattle, Washington</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                      laudantium
                      voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                      Dolores molestias adipisci dolor sit amet! by the Desire to achieve Success.</q>
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="assets/images/c2.jpg" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>Julia sakura</h3>
                      <p class="indentity">Seattle, Washington</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                      laudantium
                      voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                      Dolores molestias adipisci dolor sit amet! by the Desire to achieve Success.</q>
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="assets/images/c3.jpg" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>Roy Linderson</h3>
                      <p class="indentity">Seattle, Washington</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                      laudantium
                      voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                      Dolores molestias adipisci dolor sit amet! by the Desire to achieve Success.</q>
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="assets/images/c2.jpg" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>Mike Thyson</h3>
                      <p class="indentity">Seattle, Washington</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 position-relative pl-lg-5 mt-lg-0 mt-5">
          <img src="assets/images/person.jpg" alt="" class="radius-image img-fluid">
        </div>
      </div>
    </div>
  </section>
  <!-- //testimonials-->
  <!-- Footers-14 -->
  <footer class="w3l-footers-14 py-5">
    <div class="container py-md-5 py-sm-3">
      <div class="row w3l-footer-top-form no-gutters">
        <div class="col-lg-7 grid-two-column">
          <div class="footer-image">
            <img src="assets/images/banner1.jpg" class="img-fluid radius-image">
          </div>
          <div class="text-grid grid-column">
            <h4>Subscribe to receive my best posts once a month</h4>
            <p>
              Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a
              notification by email.</p>
          </div>
        </div>
        <div class="col-lg-5 form-submitinfo pl-lg-5">
          <form action="#" method="GET">
            <input type="email" name=" placeholder" placeholder="Enter Your Email" required="">
            <button type="submit" class="btn btn-primary btn-style submitbtn mt-3">Subscribe Now</button>
          </form>
        </div>
      </div>
      <div class="row footers14-top no-gutters">
        <div class="col-lg-6 footer14-nav-left">
          <ul class="footer14-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <div class="col-lg-6 footer14-app text-lg-right">
          <span>Download app :</span>
          <a href="#url"><span class="fa fa-apple"></span></a>
          <a href="#url"><span class="fa fa-windows"></span></a>
          <a href="#url"><span class="fa fa-android"></span></a>

        </div>
      </div>
      <div class="footers14-bottom d-flex">
        <div class="copyright">
          <p>© 2021 Reprise. All RIghts Reserved. Design by <a href="#URL">W3Layouts</a></p>
        </div>
        <div class="language-select d-flex">
          <span class="fa fa-language" aria-hidden="true"></span>
          <select>
            <option>English</option>
            <option>Estonina</option>
            <option>Deutsch</option>
            <option>Nederlan;ds</option>
          </select>
        </div>
      </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &uarr;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->

  </footer>
  <!-- Footers-14 -->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
   <!--/carousel-->
  <script src="assets/js/owl.carousel.js"></script>
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 1,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- gallery popup js -->
  <script src="assets/js/smartphoto.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const sm = new SmartPhoto(".js-img-viwer", {
        showAnimation: false
      });
      // sm.destroy();
    });
  </script>
  <!-- //gallery popup js -->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->


  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>

</x-app-layout>
