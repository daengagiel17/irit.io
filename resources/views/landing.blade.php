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
  <!-- <link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css') }}">
  <!-- <link rel="stylesheet" href="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}"> -->
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
          <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="#homeSection" aria-label="Irit.io">
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
                <a class="nav-link u-header__nav-link" href="#homeSection">Home</a>
              </li>
              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="#aboutSection">About</a>
              </li>
              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="#servicesSection">Services</a>
              </li>
              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="#showcaseSection">Showcase</a>
              </li>
              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="#teamSection">Team</a>
              </li>
              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="#contactSection">Contact</a>
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
    <div id="SVGheroBGShapes" class="svg-preloader position-relative overflow-hidden space-bottom-2 space-bottom-lg-3">
      <div class="gradient-half-warning-v2 space-bottom-2 space-bottom-lg-3">
        <!-- Content -->
        <div class="container space-top-3 space-top-md-5 space-top-lg-4">
          <div class="row">
            <div class="col-md-6 position-relative z-index-2">
              <div class="mb-4">
                <h1 class="display-4 text-white font-weight-normal">Irit.io Software Developer</h1>
              </div>
              <div class="mb-7">
                <p class="lead text-white">Tuangkan gagasan cemerlang anda dalam codingan kami. Hadirkan solusi IT di tengah kehidupan.</p>
              </div>

              <!-- Fancybox -->
              <div class="d-flex align-items-center flex-wrap">
                  <a class="btn btn-soft-white btn-wide transition-3d-hover" href="#servicesSection">Get Started</a>
                </div>
              <!-- End Fancybox -->
            </div>
          </div>
        </div>
        <!-- End Content -->

        <!-- Mockup Devices v1 -->
        <div class="d-none d-md-flex align-items-end u-devices-v1">
          <!-- SVG Phone Mockup -->
          <div class="u-devices-v1__phone">
            <div class="u-devices-v1__phone-svg">
              <figure class="ie-devices-v1-phone">
                <img class="js-svg-injector" src="{{ asset('assets/svg/components/iphone.svg') }}" alt="Image Description"
                     data-img-paths='[
                       {"targetId": "#SVGiphoneImg1", "newPath": "assets/img/282x500/img6.jpg"}
                     ]'
                     data-parent="#SVGheroBGShapes">
              </figure>
            </div>
          </div>
          <!-- End SVG Phone Mockup -->

          <!-- SVG Tablet Mockup -->
          <div class="u-devices-v1__tablet">
            <div class="u-devices-v1__tablet-svg">
              <figure class="ie-devices-v1-tablet">
                <img class="js-svg-injector" src="{{ asset('assets/svg/components/tablet.svg') }}" alt="Image Description"
                     data-img-paths='[
                       {"targetId": "#SVGtabletImg1", "newPath": "assets/img/533x711/img3.jpg"}
                     ]'
                     data-parent="#SVGheroBGShapes">
              </figure>
            </div>
          </div>
          <!-- End SVG Tablet Mockup -->
        </div>
        <!-- End Mockup Devices v1 -->

        <!-- SVG Shapes -->
        <div class="w-25 position-absolute top-0 left-0">
          <figure class="ie-wave-6-top-left">
            <img class="js-svg-injector" src="{{ asset('assets/svg/components/wave-6-top-left.svg') }}" alt="Image Description"
                 data-parent="#SVGheroBGShapes">
          </figure>
        </div>
        <!-- End SVG Shapes -->
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- About Section -->
    <div id="aboutSection" class="container space-2 space-md-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
        <span class="btn btn-xs btn-soft-success btn-pill mb-2">Vision</span>
        <h2 class="text-primary">Built with love for <span class="font-weight-semi-bold">everyone</span></h2>
        <p>Our goal is to power innovation, wherever that may be.</p>
      </div>
      <!-- End Title -->

      <div class="row">
        <div class="col-md-4 mb-7 mb-md-0">
          <!-- Process -->
          <div class="text-center">
            <div class="position-relative">
              <div id="SVGcircleProcess1" class="svg-preloader u-indicator-dots min-height-155 mb-2">
                <!-- Icon -->
                <span class="text-success btn btn-lg btn-icon mt-7">
                  <span class="fa fa-lightbulb font-size-5 btn-icon__inner btn-icon__inner-bottom-minus"></span>
                </span>
                <!-- End Icon -->

                <!-- SVG Shape -->
                <figure class="w-100 position-absolute top-0 right-0 left-0 z-index-n1">
                  <img class="js-svg-injector" src="{{ asset('assets/svg/components/circle-process-1.svg') }}" alt="Image Description"
                       data-parent="#SVGcircleProcess1">
                </figure>
                <!-- End SVG Shape -->
              </div>
            </div>

            <h3 class="h5">Creative</h3>
            <p class="mb-md-0">Kerja kreatif dalam memenuhi kebutuhan klien. Memberikan kesenangan dan ketenangan.</p>
          </div>
          <!-- End Process -->
        </div>

        <div class="col-md-4 mb-7 mb-md-0">
          <!-- Process -->
          <div class="text-center">
            <div class="position-relative">
              <div id="SVGcircleProcess2" class="svg-preloader u-indicator-dots min-height-155 mb-2">
                <!-- Icon -->
                <span class="text-primary btn btn-lg btn-icon mt-7">
                  <span class="fas fa-mug-hot font-size-5 btn-icon__inner btn-icon__inner-bottom-minus"></span>
                </span>
                <!-- End Icon -->

                <!-- SVG Shape -->
                <figure class="w-100 position-absolute top-0 right-0 left-0 z-index-n1">
                  <img class="js-svg-injector" src="{{ asset('assets/svg/components/circle-process-2.svg') }}" alt="Image Description"
                       data-parent="#SVGcircleProcess2">
                </figure>
                <!-- End SVG Shape -->
              </div>
            </div>

            <h3 class="h5">Productive</h3>
            <p class="mb-md-0">Kerja produktif dalam menyelesaikan tugas. Menguatkan komitmen dan kerjasama.</p>
            <!-- End Process -->
          </div>
        </div>

        <div class="col-md-4 mb-7 mb-md-0">
          <!-- Process -->
          <div class="text-center">
            <div id="SVGcircleProcess3" class="svg-preloader min-height-155 mb-2">
              <!-- Icon -->
              <span class="text-danger btn btn-lg btn-icon mt-7">
                <span class="fa fa-heart font-size-5 btn-icon__inner btn-icon__inner-bottom-minus"></span>
              </span>
              <!-- End Icon -->

              <!-- SVG Shape -->
                <figure class="w-100 position-absolute top-0 right-0 left-0 z-index-n1">
                  <img class="js-svg-injector" src="{{ asset('assets/svg/components/circle-process-3.svg') }}" alt="Image Description"
                       data-parent="#SVGcircleProcess3">
                </figure>
                <!-- End SVG Shape -->
            </div>

            <h3 class="h5">With Love</h3>
            <p class="mb-md-0">Mewakili perasaan klien dalam pencapaian kesuksesan. Menumbuhkan optimisme.</p>
            <!-- End Process -->
          </div>
        </div>

      </div>
    </div>
    <!-- End About Section -->

    <!-- Front in Frames Section -->
    <div class="bg-light">
      <div class="overflow-hidden container space-2 space-md-3">
        <div class="">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 mb-7 mb-lg-0">
              <div class="pr-md-4">
                <!-- Title -->
                <div class="mb-7">
                  <span class="btn btn-xs btn-soft-success btn-pill mb-2">About</span>
                  <h2 class="text-primary">Irit.io in <span class="font-weight-semi-bold">frames</span></h2>
                  <p>Irit.io software developer merupakan tim IT yang hadir untuk menjawab kebutuhan IT anda. Kami meyakini bahwa efisiensi dan efektifitas yang ditawarkan teknologi semakin dibutuhkan oleh masyarakat di hari-hari mendatang. </p>
                  <p>Sejauh ini kami telah menghasilkan berbagai produk mulai dari aplikasi android, website, serta design grafik. Saat ini kami dalam jalur yang tepat untuk berkembang bersama dukungan anda.</p>
                </div>
                <!-- End Title -->

                <a class="btn btn-sm btn-primary btn-wide transition-3d-hover" href="{{ asset('img/profil-irit.io.png') }}">Download <span class="fas fa-angle-right ml-2"></span></a>
              </div>
            </div>

            <div class="col-lg-6 position-relative">
              <!-- Image Gallery -->
              <div class="row mx-gutters-2">
                <div class="col-5 align-self-end px-2 mb-3">
                  <!-- Fancybox -->
                  <a class="js-fancybox u-media-viewer" href="javascript:;"
                     data-src="{{ asset('img/about/2.jpg') }}"
                     data-fancybox="lightbox-gallery-hidden"
                     data-caption="Irit.io in frames - image #01"
                     data-speed="700">
                    <img class="img-fluid rounded" src="{{ asset('img/about/2.jpg') }}" alt="Image Description">

                    <span class="u-media-viewer__container">
                      <span class="u-media-viewer__icon">
                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                      </span>
                    </span>
                  </a>
                  <!-- End Fancybox -->
                </div>

                <div class="col-7 px-2 mb-3">
                  <!-- Fancybox -->
                  <a class="js-fancybox u-media-viewer" href="javascript:;"
                     data-src="{{ asset('img/about/1.jpg') }}"
                     data-fancybox="lightbox-gallery-hidden"
                     data-caption="Irit.io in frames - image #02"
                     data-speed="700">
                    <img class="img-fluid rounded" src="{{ asset('img/about/1.jpg') }}" alt="Image Description">

                    <span class="u-media-viewer__container">
                      <span class="u-media-viewer__icon">
                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                      </span>
                    </span>
                  </a>
                  <!-- End Fancybox -->
                </div>

                <div class="col-5 offset-1 px-2 mb-3">
                  <!-- Fancybox -->
                  <a class="js-fancybox u-media-viewer" href="javascript:;"
                     data-src="{{ asset('img/about/3.jpg') }}"
                     data-fancybox="lightbox-gallery-hidden"
                     data-caption="Irit.io in frames - image #03"
                     data-speed="700">
                    <img class="img-fluid rounded" src="{{ asset('img/about/3.jpg') }}" alt="Image Description">

                    <span class="u-media-viewer__container">
                      <span class="u-media-viewer__icon">
                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                      </span>
                    </span>
                  </a>
                  <!-- End Fancybox -->
                </div>

                <div class="col-5 px-2 mb-3">
                  <!-- Fancybox -->
                  <a class="js-fancybox u-media-viewer" href="javascript:;"
                     data-src="{{ asset('img/about/4.jpg') }}"
                     data-fancybox="lightbox-gallery-hidden"
                     data-caption="Irit.io in frames - image #04"
                     data-speed="700">
                    <img class="img-fluid rounded" src="{{ asset('img/about/4.jpg') }}" alt="Image Description">

                    <span class="u-media-viewer__container">
                      <span class="u-media-viewer__icon">
                        <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                      </span>
                    </span>
                  </a>
                  <!-- End Fancybox -->
                </div>
              </div>
              <!-- End Image Gallery -->

              <!-- SVG Background Shape -->
              <div id="SVGbgShapeID1" class="svg-preloader w-100 content-centered-y z-index-n1">
                <figure class="ie-soft-triangle-shape">
                  <img class="js-svg-injector" src="{{ asset('assets/svg/components/soft-triangle-shape.svg') }}" alt="Image Description"
                       data-parent="#SVGbgShapeID1">
                </figure>
              </div>
              <!-- End SVG Background Shape -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Front in Frames Section -->

    <!-- Service Section -->
    <div id="servicesSection" class="container space-2 space-md-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
        <span class="btn btn-xs btn-soft-success btn-pill mb-2">Services</span>
        <h2 class="text-primary">We <span class="font-weight-semi-bold">provide</span></h2>
        <p>Layanan kami terdiri dari beberapa platform dan teknologi yang diperlukan untuk menyelesaikan permasalahan anda.</p>
      </div>
      <!-- End Title -->

      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-5">
          <!-- Card -->
          <article class="card border-0 h-100 shadow-soft">
            <div class="w-sm-65 p-5">
              <h3 class="h4 mb-3">Website</h3>
              <div class="mb-4">
                <p>Produksi website dalam berbagai model mulai dari, company profile hingga sistem informasi. Sesuai kebutuhan anda untuk mencapai kesuksesan.</p>
              </div>
              <a class="btn btn-sm btn-soft-primary btn-pill transition-3d-hover" href="{{ route('portofolio') }}">Find out More <span class="fas fa-angle-right ml-1"></span></a>
            </div>

            <div id="website" class="svg-preloader position-absolute bottom-0 right-0 w-sm-35 max-width-27">
              <figure class="ie-support-man">
                <img class="js-svg-injector" src="{{ asset('assets/svg/illustrations/browser.svg') }}" alt="Image Description"
                     data-parent="#website">
              </figure>
            </div>
          </article>
          <!-- End Card -->
        </div>

        <div class="col-lg-6 mb-lg-5">
          <!-- Card -->
          <article class="card border-0 h-100 shadow-soft">
            <div class="w-sm-65 p-5">
              <h3 class="h4 mb-3">Android Apps</h3>
              <div class="mb-4">
                <p>Produksi aplikasi android untuk bisnis maupun kegiatan anda. Lebih dekat dengan pengguna. Kesuksesan berada didepan mata anda.</p>
              </div>
              <a class="btn btn-sm btn-soft-primary btn-pill transition-3d-hover" href="{{ route('portofolio') }}">Find out More <span class="fas fa-angle-right ml-1"></span></a>
            </div>

            <div id="android" class="svg-preloader position-absolute bottom-0 right-0 w-sm-35 max-width-27">
              <figure class="ie-list-app">
                <img class="js-svg-injector" src="{{ asset('assets/svg/illustrations/android.svg') }}" alt="Image Description"
                     data-parent="#android">
              </figure>
            </div>
          </article>
          <!-- End Card -->
        </div>

      </div>
      <div class="space-0"></div>
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-5">
          <!-- Card -->
          <article class="card border-0 h-100 shadow-soft">
            <div class="w-sm-65 p-5">
              <h3 class="h4 mb-3">IOS Apps</h3>
              <div class="mb-4">
                <p>Produksi aplikasi IOS untuk bisnis maupun kegiatan anda. Lebih dekat dengan pengguna. Kesuksesan berada didepan mata anda.</p>
              </div>
              <a class="btn btn-sm btn-soft-primary btn-pill transition-3d-hover" href="{{ route('portofolio') }}">Find out More <span class="fas fa-angle-right ml-1"></span></a>
            </div>

            <div id="iphone" class="svg-preloader position-absolute bottom-0 right-0 w-sm-35 max-width-27">
              <figure class="ie-support-man">
                <img class="js-svg-injector" src="{{ asset('assets/svg/illustrations/iphone.svg') }}" alt="Image Description"
                     data-parent="#iphone">
              </figure>
            </div>
          </article>
          <!-- End Card -->
        </div>

        <div class="col-lg-6 mb-lg-5">
          <!-- Card -->
          <article class="card border-0 h-100 shadow-soft">
            <div class="w-sm-65 p-5">
              <h3 class="h4 mb-3">Graphic Design</h3>
              <div class="mb-4">
                <p>Produksi desain untuk menghadirkan kenyamanan bagi pengguna. Mengundang daya tarik dengan desain yang elegan dan memanjakan mata.</p>
              </div>
              <a class="btn btn-sm btn-soft-primary btn-pill transition-3d-hover" href="{{ route('portofolio') }}">Find out More <span class="fas fa-angle-right ml-1"></span></a>
            </div>

            <div id="graphic" class="svg-preloader position-absolute bottom-0 right-0 w-sm-35 max-width-27">
              <figure class="ie-list-app">
                <img class="js-svg-injector" src="{{ asset('assets/svg/illustrations/art.svg') }}" alt="Image Description"
                     data-parent="#graphic">
              </figure>
            </div>
          </article>
          <!-- End Card -->
        </div>

      </div>
    </div>
    <!-- End Service Section -->

    <!-- Portfolio Section -->
    <div id="showcaseSection" class="bg-light">
      <div class="container space-2 space-md-3">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-4">
          <span class="btn btn-xs btn-soft-success btn-pill mb-2">Showcase</span>
          <h2 class="text-primary">Recent our <span class="font-weight-semi-bold">works</span> </h2>
        </div>
        <!-- End Title -->

        <!-- Cubeportfolio -->
        <div class="u-cubeportfolio">
          <!-- Filter -->
          <ul id="filterControls" class="list-inline cbp-l-filters-alignRight text-center">
            <li class="list-inline-item cbp-filter-item cbp-filter-item-active u-cubeportfolio__item" data-filter="*">All</li>
            <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".website">Website</li>
            <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".mobile">Mobile</li>
            <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".graphic">Graphic design</li>
          </ul>
          <!-- End Filter -->

          <!-- Content -->
          <div class="cbp"
                data-controls="#filterControls"
                data-animation="quicksand"
                data-x-gap="15"
                data-y-gap="15"
                data-media-queries='[
                  {"width": 1500, "cols": 4},
                  {"width": 1100, "cols": 4},
                  {"width": 800, "cols": 3},
                  {"width": 480, "cols": 2},
                  {"width": 300, "cols": 1}
                ]'>
            @foreach ($portofolios as $portofolio)
              <!-- Item -->
              <div class="cbp-item rounded {{$portofolio->type}}">
                <a class="cbp-caption" href="{{ route('portofolio.show', ['id' => $portofolio->id]) }}" target="_blank">
                  <div class="cbp-caption-defaultWrap">
                    <img src="{{ asset($portofolio->image) }}" alt="Image {{ $portofolio->title }}">
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
        <!-- End Cubeportfolio -->

        <!-- Load More Button -->
      <div id="cubeLoadMore" class="text-center space-top-2 space-top-md-2">
        <a href="{{ route('portofolio') }}" class="cbp-l-loadMore-link link" rel="nofollow">
          <span class="cbp-l-loadMore-defaultText">
            Load More
            <span class="link__icon ml-1">
              <span class="link__icon-inner">&#43;</span>
            </span>
          </span>
        </a>
      </div>
      <!-- End Load More Button -->
      </div>
    </div>
    <!-- End Portfolio Section -->

    <!-- Team Section -->
    <div id="teamSection" class="container space-2 space-md-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
        <span class="btn btn-xs btn-soft-success btn-pill mb-2">Our Team</span>
        <h2 class="text-primary">Trust the <span class="font-weight-semi-bold">professionals</span></h2>
        <p>Kesan terbaik hanya muncul dari kolaborasi dan kerjasama tim yang baik Kami berusaha menghadirkan orang yang mumpuni di bidangnya.</p>
      </div>
      <!-- End Title -->

      <!-- Slick Carousel -->
      <div class="js-slick-carousel u-slick u-slick--gutters-3"
           data-slides-show="2"
           data-slides-scroll="1"
           data-pagi-classes="text-center u-slick__pagination mt-7 mb-0"
           data-responsive='[{
             "breakpoint": 992,
             "settings": {
               "slidesToShow": 1
             }
           }, {
             "breakpoint": 768,
             "settings": {
               "slidesToShow": 1
             }
           }, {
             "breakpoint": 554,
             "settings": {
               "slidesToShow": 1
             }
           }]'>
        <div class="js-slide px-3">
          <!-- Team -->
          <div class="row">
            <div class="col-sm-6 d-sm-flex align-content-sm-start flex-sm-column text-center text-sm-left mb-7 mb-sm-0">
              <div class="w-100">
                <h3 class="h5 mb-4">Agiel Nugraha</h3>
              </div>
              <div class="d-inline-block">
                <span class="badge badge-primary badge-pill badge-bigger mb-3">Website Programmer</span>
              </div>
              <!-- <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->

              <!-- Social Networks -->
              <ul class="list-inline mt-auto mb-0">
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="https://www.facebook.com/agielnara">
                    <span class="fab fa-facebook-f btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="https://www.instagram.com/daeng_agiel">
                    <span class="fab fa-instagram btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="https://twitter.com/agielnara17">
                    <span class="fab fa-twitter btn-icon__inner"></span>
                  </a>
                </li>
              </ul>
              <!-- End Social Networks -->
            </div>
            <div class="col-sm-6">
              <img class="img-fluid rounded mx-auto" src="{{ asset('img/team/agiel.jpeg') }}" alt="Image Description">
            </div>
          </div>
          <!-- End Team -->
        </div>

        <div class="js-slide px-3">
          <!-- Team -->
          <div class="row">
            <div class="col-sm-6 d-sm-flex align-content-sm-start flex-sm-column text-center text-sm-left mb-7 mb-sm-0">
              <div class="w-100">
                <h3 class="h5 mb-4">Ghina Afifah</h3>
              </div>
              <div class="d-inline-block">
                <span class="badge badge-primary badge-pill badge-bigger mb-3">Graphic Designer</span>
              </div>
              <!-- <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->

              <!-- Social Networks -->
              <ul class="list-inline mt-auto mb-0">
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="https://www.facebook.com/ghina.ghafifah">
                    <span class="fab fa-facebook-f btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="https://www.instagram.com/ghinamic">
                    <span class="fab fa-instagram btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="https://twitter.com/ghinaakhair">
                    <span class="fab fa-twitter btn-icon__inner"></span>
                  </a>
                </li>
              </ul>
              <!-- End Social Networks -->
            </div>
            <div class="col-sm-6">
              <img class="img-fluid rounded mx-auto" src="{{ asset('img/team/ghina.jpeg') }}" alt="Image Description">
            </div>
          </div>
          <!-- End Team -->
        </div>

        <div class="js-slide px-3">
          <!-- Team -->
          <div class="row">
            <div class="col-sm-6 d-sm-flex align-content-sm-start flex-sm-column text-center text-sm-left mb-7 mb-sm-0">
              <div class="w-100">
                <h3 class="h5 mb-4">Indra Wahyudi</h3>
              </div>
              <div class="d-inline-block">
                <span class="badge badge-primary badge-pill badge-bigger mb-3">Mobile Programmer</span>
              </div>
              <!-- <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->

              <!-- Social Networks -->
              <ul class="list-inline mt-auto mb-0">
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="https://www.facebook.com/lissol.pollepel">
                    <span class="fab fa-facebook-f btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="https://twitter.com/noneedsyntax">
                    <span class="fab fa-instagram btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="https://twitter.com/noneedsyntax">
                    <span class="fab fa-twitter btn-icon__inner"></span>
                  </a>
                </li>
              </ul>
              <!-- End Social Networks -->
            </div>
            <div class="col-sm-6">
              <img class="img-fluid rounded mx-auto" src="{{ asset('img/team/indra.jpg') }}" alt="Image Description">
            </div>
          </div>
          <!-- End Team -->
        </div>

        <div class="js-slide px-3">
          <!-- Team -->
          <div class="row">
            <div class="col-sm-6 d-sm-flex align-content-sm-start flex-sm-column text-center text-sm-left mb-7 mb-sm-0">
              <div class="w-100">
                <h3 class="h5 mb-4">Oky Ardian</h3>
              </div>
              <div class="d-inline-block">
                <span class="badge badge-primary badge-pill badge-bigger mb-3">UI Designer</span>
              </div>
              <!-- <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->

              <!-- Social Networks -->
              <ul class="list-inline mt-auto mb-0">
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="https://www.facebook.com/kykyleo">
                    <span class="fab fa-facebook-f btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="https://www.instagram.com/sambelpenyettahu/">
                    <span class="fab fa-instagram btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="https://twitter.com/_Ardianoky">
                    <span class="fab fa-twitter btn-icon__inner"></span>
                  </a>
                </li>
              </ul>
              <!-- End Social Networks -->
            </div>
            <div class="col-sm-6">
              <img class="img-fluid rounded mx-auto" src="{{ asset('img/team/oky.jpg') }}" alt="Image Description">
            </div>
          </div>
          <!-- End Team -->
        </div>
      </div>
      <!-- End Slick Carousel -->
    </div>
    <!-- End Team Section -->

    <!-- Testimonials Section -->
    <div class="bg-light">
      <div class="container space-2 space-md-3">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
          <span class="btn btn-xs btn-soft-primary btn-pill mb-2">Testimonials</span>
          <h2 class="h3 font-weight-normal">What they say about us</h2>
        </div>
        <!-- End Title -->

        <!-- Slick Carousel -->
        <div class="js-slick-carousel u-slick u-slick-zoom u-slick--gutters-3"
             data-slides-show="3"
             data-center-mode="true"
             data-autoplay="true"
             data-speed="5000"
             data-pagi-classes="text-center u-slick__pagination mt-7 mb-0"
             data-responsive='[{
               "breakpoint": 992,
               "settings": {
                 "slidesToShow": 2
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 1
               }
             }]'>

          @foreach ($testimonis as $testimoni)
            <div class="js-slide my-4">
              <!-- Testimonials -->
              <div class="u-slick-zoom__slide text-center">
                <div class="card border-0 shadow-sm">
                  <div class="card-body p-7">
                    <p class="mb-0">{{$testimoni->testimoni}}</p>
                  </div>
                </div>
                <div class="position-relative z-index-2 mt-n5 mb-3">
                  <div class="u-avatar mx-auto">
                    <img class="img-fluid rounded-circle" src="{{ asset($testimoni->photo) }}" alt="Image Description">
                  </div>
                </div>
                <h4 class="h6 mb-0">{{$testimoni->name}}</h4>
                <p class="small">{{$testimoni->position}}</p>
              </div>
              <!-- End Testimonials -->
            </div>
              
          @endforeach

        </div>
        <!-- End Slick Carousel -->
      </div>
    </div>
    <!-- End Testimonials Section -->

    
    </div>
    <!-- End Cubeportfolio Section -->

    <!-- Subscribe Section -->
    <div id="contactSection" class="container space-2 space-md-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto">
        <div class="mb-9">
          <span class="btn btn-xs btn-soft-primary btn-pill mb-2">Subscribe</span>
          <h2 class="font-weight-normal">Stay in the know</h2>
          <p class="mb-0">Bantu kami memahami kebutuhan anda agar tercipta solusi terbaik. Segera hubungi kami apabila anda tertarik.</p>
        </div>
      </div>
      <!-- End Title -->

      <!-- Form -->
      <form class="js-validate w-lg-75 mx-lg-auto" action="https://formspree.io/iritio.id@gmail.com" method="POST">
        <div class="form-row">
          <div class="col-sm-4 mb-2 mb-sm-0">
            <div class="js-form-message">
              <label class="sr-only" for="message">Name</label>
              <div class="input-group">
                <input type="text" class="form-control" name="name" id="message" placeholder="Name" aria-label="Name" required
                       data-msg="Name must contain only letters.">
              </div>
            </div>
          </div>

          <div class="col-sm-4 mb-2 mb-sm-0">
            <div class="js-form-message">
              <label class="sr-only" for="email">Email</label>
              <div class="input-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" aria-label="Email" required
                       data-msg="Please enter a valid email address.">
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <button type="submit" id="submit" class="btn btn-block btn-primary transition-3d-hover">Get Started</button>
            <div id="msgSubmit" class="h3 hidden"></div> 
            <div class="clearfix"></div>
          </div>
        </div>
      </form>
      <!-- End Form -->
    </div>
    <!-- End Subscribe Section -->

    <!-- Google Map -->
    <div class="border-bottom">
      <div class="container-fluid space-bottom-1">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d987.9257276356554!2d112.59441696295166!3d-7.926066554557323!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788221b72cc5e7%3A0x84e3c493ddacac05!2sJl.+Tirto+Utomo+Ganf+VIII%2C+Dusun+Rambaan%2C+Landungsari%2C+Kec.+Dau%2C+Malang%2C+Jawa+Timur+65151!5e0!3m2!1sid!2sid!4v1563639154835!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    
    <!-- End Google Map -->

    
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
  <!-- <script src="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script> -->
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
  <!-- <script src="{{ asset('assets/js/components/hs.malihu-scrollbar.js') }}"></script> -->
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