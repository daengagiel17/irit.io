<!DOCTYPE html>
<html lang="en">
  
<head>
  <!-- Title -->
  <title>Irit.io | Software Developer</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="Irit, Irit.io, Iritio, Software Developer, Aplikasi, Android, Website,  IOS, Desain Grafis, Graphic Design, Application, Laravel, Fluter">
  <meta name="title" content="Irit.io - Software Developer">
  <meta name="description" content="Turning ideas into code | Tuangkan gagasan cemerlang anda dalam codingan kami. Hadirkan solusi IT di tengah kehidupan.">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="profile">
  <meta property="og:url" content="http://irit-io.id/">
  <meta property="og:title" content="Irit.io - Software Developer">
  <meta property="og:description" content="Turning ideas into code | Tuangkan gagasan cemerlang anda dalam codingan kami. Hadirkan solusi IT di tengah kehidupan.">
  <meta property="og:image" content="https://irit-io.id/img/irit.io-logo.jpg">
  
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="http://irit-io.id/">
  <meta property="twitter:title" content="Irit.io - Software Developer">
  <meta property="twitter:description" content="Turning ideas into code | Tuangkan gagasan cemerlang anda dalam codingan kami. Hadirkan solusi IT di tengah kehidupan.">
  <meta property="twitter:image" content="https://irit-io.id/img/irit.io-logo.jpg">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('img/favicon.jpg') }}">

  <!-- Google Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/jquery.fancybox.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/dist/chartist.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/cubeportfolio/css/cubeportfolio.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/dzsparallaxer/dzsparallaxer.css') }}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>
<body id="homeSection">
  <!-- ========== HEADER ========== -->
  <!-- u-header u-header--bg-transparent u-header--abs-top u-header--white-nav-links-md u-header--show-hide -->
  <header id="header" class="u-header u-header--abs-top-md u-header--bg-transparent u-header--show-hide-md u-header--white-nav-links-md"  
          data-header-fix-moment="500"
          data-header-fix-effect="slide">
    <div class="u-header__section">
      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
          <!-- Logo -->
          <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="{{ route('landing') }}" aria-label="Irit.io">
            <img src="{{ asset('img/logo.png') }}" alt="Irit.io" style="width: 46px; height: 46px;">
            <span class="u-header__navbar-brand-text">Irit.io</span>
          </a>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn u-hamburger"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span id="hamburgerTrigger" class="u-hamburger__box">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
            <ul class="js-scroll-nav js-mega-menu navbar-nav align-items-md-center u-header__navbar-nav position-static">
              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="{{ route('landing') }}#homeSection">Home</a>
              </li>
              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="{{ route('landing') }}#aboutSection">About</a>
              </li>
              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="{{ route('landing') }}#servicesSection">Services</a>
              </li>
              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="{{ route('landing') }}#showcaseSection">Showcase</a>
              </li>
              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="{{ route('landing') }}#teamSection">Team</a>
              </li>
              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="{{ route('landing') }}#contactSection">Contact</a>
              </li>

              <!-- Demos -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut"
                  data-max-width="900px"
                  data-position="right">
                <a id="demosMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Demos</a>

                <!-- Demos - Mega Menu -->
                <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="demosMegaMenu">
                    <div class="row no-gutters">
                      <div class="col-lg-8">
                        <div class="u-header__promo-card-deck">
                          <!-- Promo Item -->
                          <div class="u-header__promo-card u-header__promo-item">
                            <a class="u-header__promo-link" href="#">
                              <div class="media align-items-center">
                                <img class="js-svg-injector u-header__promo-icon" src="{{ asset('assets/svg/icons/icon-45.svg') }}" alt="SVG">
                                <div class="media-body">
                                  <span class="u-header__promo-title">LMS<span class="badge badge-success badge-pill ml-1">New</span></span>
                                  <small class="u-header__promo-text">LSQ UMM</small>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->
  
                          <!-- Promo Item -->
                          <div class="u-header__promo-card u-header__promo-item">
                            <a class="u-header__promo-link" href="https://greenviewregency.com" target="_blank">
                              <div class="media align-items-center">
                                <img class="js-svg-injector u-header__promo-icon" src="{{ asset('assets/svg/icons/icon-13.svg') }}" alt="SVG">
                                <div class="media-body">
                                  <span class="u-header__promo-title">Real Estate</span>
                                  <small class="u-header__promo-text">Green View Regency</small>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->
                        </div>
  
                        <div class="u-header__promo-card-deck">
                          <!-- Promo Item -->
                          <div class="u-header__promo-card u-header__promo-item">
                            <a class="u-header__promo-link" href="https://razzaqtourandtravel.com" target="_blank">
                              <div class="media align-items-center">
                                <img class="js-svg-injector u-header__promo-icon" src="{{ asset('assets/svg/icons/icon-19.svg') }}" alt="SVG">
                                <div class="media-body">
                                  <span class="u-header__promo-title">Travel Booking</span>
                                  <small class="u-header__promo-text">Razzaq Tour Travel</small>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->
  
                          <!-- Promo Item -->
                          <div class="u-header__promo-card u-header__promo-item">
                            <a class="u-header__promo-link" href="https://muktamar-imm.org" target="_blank">
                              <div class="media align-items-center">
                                <img class="js-svg-injector u-header__promo-icon" src="{{ asset('assets/svg/icons/icon-4.svg') }}" alt="SVG">
                                <div class="media-body">
                                  <span class="u-header__promo-title">Information</span>
                                  <small class="u-header__promo-text">Muktamar IMM</small>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->
                        </div>
  
                        <div class="u-header__promo-card-deck">
                          <!-- Promo Item -->
                          <div class="u-header__promo-card u-header__promo-item">
                            <a class="u-header__promo-link" href="https://ngejip.site/" target="_blank">
                              <div class="media align-items-center">
                                <img class="js-svg-injector u-header__promo-icon" src="{{ asset('assets/svg/icons/icon-5.svg') }}" alt="SVG">
                                <div class="media-body">
                                  <span class="u-header__promo-title">Ticket Booking</span>
                                  <small class="u-header__promo-text">Jeep</small>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->
  
                          <!-- Promo Item -->
                          <div class="u-header__promo-card u-header__promo-item">
                            <div class="u-header__promo-link">
                              <div class="media align-items-center">
                                <img class="js-svg-injector u-header__promo-icon" src="{{ asset('assets/svg/icons/icon-23.svg') }}" alt="SVG">
                                <div class="media-body">
                                  <span class="u-header__promo-title text-secondary">New demos</span>
                                  <small class="u-header__promo-text">coming soon ...</small>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Promo Item -->
                        </div>
                      </div>
  
                      <!-- Promo -->
                      <div class="col-lg-4 u-header__promo d-none d-lg-block">
                        <a class="d-block u-header__promo-inner" href="#">
                          <div class="position-relative">
                            <img class="img-fluid rounded mb-3" src="{{ asset('img/about/1.jpg') }}" alt="Image Description">
                          </div>
                          <!-- <span class="text-secondary font-size-1">Front makes you look at things from a different perspectives.</span> -->
                        </a>
                      </div>
                      <!-- End Promo -->
                    </div>
                </div>
                <!-- End Demos - Mega Menu -->
              </li>
              <!-- End Demos -->

              <li class="nav-item u-header__nav-last-item">
                <a class="btn btn-primary btn-sm transition-3d-hover" href="https://wa.me/6281935911244?text=Saya%20ingin%20konsultasi%20tentang%20program%20:" target="_blank">Whatsapp</a>
              </li>
            </ul>
          </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
      <!-- Hero Section -->
      <div id="SVGGraphicIllustration1" class="svg-preloader d-lg-flex align-items-lg-center gradient-half-primary-v1 height-lg-100vh">
        <div class="d-none d-lg-block bg-img-hero position-absolute top-0 right-0 left-0 height-lg-100vh" style="background-image: url(assets/img/bg-shapes/bg1.png);"></div>
        <div class="container space-top-3 space-bottom-2 space-top-md-4 space-bottom-md-3">
          <div class="row align-items-md-center">
            <div class="col-lg-6">
              <!-- Title -->
              <div class="mb-7">
                <h1 class="text-white font-weight-normal">
                  Portofolio<br>
                  <span class="text-warning">
                    <span class="u-text-animation u-text-animation--typing"></span>
                  </span>
                </h1>
                <p class="lead text-white-70">Menghasilkan karya terbaik memerlukan kerja keras dengannya kualitas produk senantiasa kami tingkatkan.</p>
              </div>
              <!-- End Title -->
  
              <a class="btn btn-white btn-wide text-primary transition-3d-hover" href="https://wa.me/6281935911244?text=Saya%20ingin%20konsultasi%20tentang%20program%20:">Contact Us</a>
            </div>
  
            <div class="col-lg-6 d-none d-lg-inline-block">
              <!-- SVG Shapes -->
              <figure class="ie-graphic-illustration-1">
                <img class="js-svg-injector" src="assets/svg/illustrations/graphic-illustration-1.svg" alt="Image Description"
                     data-img-paths='[
                       {"targetId": "#SVGgraphicIllustration1Img1", "newPath": "{{ asset('assets/img/100x100/img1.jpg') }}"},
                       {"targetId": "#SVGgraphicIllustration1Img2", "newPath": "{{ asset('assets/img/100x100/img2.jpg') }}"},
                       {"targetId": "#SVGgraphicIllustration1Img3", "newPath": "{{ asset('assets/img/160x160/img3.png') }}"},
                       {"targetId": "#SVGgraphicIllustration1Img4", "newPath": "{{ asset('assets/img/160x160/img4.png') }}"},
                       {"targetId": "#SVGgraphicIllustration1Img5", "newPath": "{{ asset('assets/img/160x160/img1.png') }}"}
                     ]'
                     data-parent="#SVGGraphicIllustration1">
              </figure>
              <!-- End SVG Shapes -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Hero Section -->
  
      <!-- Cubeportfolio Section -->
      <div class="container space-2 space-bottom-md-3 u-cubeportfolio">
        <!-- Filter -->
        <ul id="cubeFilter" class="list-inline cbp-l-filters-alignRight d-flex">
          <li class="list-inline-item cbp-filter-item cbp-filter-item-active u-cubeportfolio__item mr-auto" data-filter="*">Show all</li>
          <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".website">Website</li>
          <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".mobile">Mobile</li>
          <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".graphic">Graphic</li>
        </ul>
        <!-- End Filter -->
  
        <!-- Content -->
        <div class="cbp mb-7"
              data-controls="#cubeFilter"
              data-animation="quicksand"
              data-x-gap="16"
              data-y-gap="16"
              data-load-more-selector="#cubeLoadMore"
              data-load-more-action="click"
              data-load-items-amount="4"
              data-media-queries='[
                {"width": 1500, "cols": 3},
                {"width": 1100, "cols": 3},
                {"width": 800, "cols": 3},
                {"width": 480, "cols": 2},
                {"width": 300, "cols": 1}
              ]'>

          @foreach ($portofolios as $portofolio)
            <!-- Item -->
            <div class="cbp-item rounded {{$portofolio->type}}">
              <a class="cbp-caption" href="{{ route('portofolio.show', ['id' => $portofolio->id]) }}">
                <div class="cbp-caption-defaultWrap">
                  <img src="{{ asset($portofolio->image) }}" alt="Image Description">
                </div>
                <div class="cbp-caption-activeWrap bg-primary">
                  <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                      <h4 class="h6 text-white mb-0">{{ $portofolio->title }}</h4>
                      <p class="small text-white-70 mb-0">
                        {{ $portofolio->client }}
                      </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- End Item -->              
          @endforeach

        </div>
        <!-- End Content -->

      </div>
      <!-- End Cubeportfolio Section -->
    </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  <footer>
    <!-- Copyright -->
    <div class="container text-center space-1">
        <!-- Logo -->
        <a class="d-inline-flex align-items-center mb-2" href="{{ route('landing') }}" aria-label="Front">
            <img src="{{ asset('img/logo.png') }}" alt="Irit.io" style="width: 46px; height: 46px;">
            <span class="brand brand-primary">Irit.io</span>
        </a>
        <!-- End Logo -->
        <p class="small text-muted">&copy; Front. 2019 Htmlstream. All rights reserved. Credits by Colorlib</p>
      </div>
    <!-- End Copyright -->
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
  <script src="{{ asset('assets/vendor/svg-injector/dist/svg-injector.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/fancybox/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chartist/dist/chartist.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js') }}"></script>
  <script src="{{ asset('assets/vendor/slick-carousel/slick/slick.js') }}"></script>
  <script src="{{ asset('assets/vendor/appear.js') }}"></script>
  <script src="{{ asset('assets/vendor/circles/circles.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>

  <!-- JS Front -->
  <script src="{{ asset('assets/js/hs.core.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.header.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.unfold.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.scroll-nav.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.fancybox.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.chartist-area-chart.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.slick-carousel.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.cubeportfolio.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.chart-pie.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.svg-injector.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.go-to.js') }}"></script>

  <!-- JS Plugins Init. -->
  <script>
     $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
      });

      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');

      // initialization of HSScrollNav component
      $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
        duration: 700
      });
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

      // initialization of chartist area charts
      $.HSCore.components.HSChartistAreaChart.init('.js-area-chart');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of cubeportfolio
      $.HSCore.components.HSCubeportfolio.init('.cbp');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');

      // initialization of malihu scrollbar
      // var windW = window.innerWidth;

      // if(windW < 768) {
      //   $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));
      // }

      // initialization of chart pies
      var items = $.HSCore.components.HSChartPie.init('.js-pie');
    });

    // $(window).on('resize', function () {
    //   // initialization of malihu scrollbar
    //   var windW = window.innerWidth;

    //   if(windW < 768) {
    //     $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));
    //   } else {
    //     $('.js-scrollbar').mCustomScrollbar("destroy");
    //   }
    // });

    // initialization of google map
    function initMap() {
      $.HSCore.components.HSGMap.init('.js-g-map');
      $.HSCore.components.HSGMap.init('#gMapMultipleMarkers', {
        infoWindowTemplate: function (imgsrc, imgalt, date, locationname, title) {
          return '<div class="u-gmap-interactive__info">' +
            '<img class="img-fluid mb-2" src="' + imgsrc + '" alt="' + imgalt + '">' +
            '<small class="d-block text-muted mb-2">' + date + '</small>' +
            '<h4 class="h6 mb-0">' + title + '</h4>' +
            '<p class="mb-0">' + locationname + '</p>' +
            '</div>';
        }
      });
    }
  </script>

  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABAaQLTeSRRn4egPXc1tRNi40scrXvcQM&callback=initMap" async defer></script> -->
</body>

<!-- Mirrored from htmlstream.com/preview/front-v2.8.0/html/home/classic-consulting.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jul 2019 08:40:29 GMT -->
</html>