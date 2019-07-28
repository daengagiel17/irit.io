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
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/hs-megamenu/src/hs.megamenu.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/dzsparallaxer/dzsparallaxer.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/slick-carousel/slick/slick.css') }}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>
<body>

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Back Section -->
    <div class="d-lg-flex space-top-2 space-top-md-0 space-lg-0 position-relative">
      <div class="container d-lg-flex align-items-lg-center position-relative space-md-2 space-bottom-lg-0">
        <!-- Blog -->
        <div class="w-lg-40">
          <!-- Link -->
          <div class="space-bottom-0 space-bottom-md-0">
            <a class="text-secondary" href="{{ route('landing') }}">
              <span class="fas fa-arrow-left small mr-2"></span>
              Go Back
            </a>
            <span class="ml-2">|</span>
            <a class="text-secondary" href="{{ route('portofolio') }}">
              <span class="mr-2"></span>
              All Portofolio
              <span class="fas fa-arrow-right small ml-2"></span>
            </a>
          </div>
        </div>
        <!-- End Blog -->
      </div>
    </div>
    <!-- End Back Section -->

    <!-- Title Section -->
    <div class="container space-top-1 space-top-md-0 space-bottom-0">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-0">
        <span class="btn btn-xs btn-soft-success btn-pill mb-2">{{$portofolio->type}}</span>
        <h2 class="text-primary"><strong class="font-weight-semi-bold">{{$portofolio->title}}</strong></h2>
        <p>{{ \Carbon\Carbon::parse($portofolio->created_at)->diffForHumans() }}.</p>
      </div>
      <!-- End Title -->
    </div>
    <!-- End Title Section -->

    <!-- Images Carousel -->
    <div class="container">
      <div class="w-lg-80 mx-auto">
        <div class="js-slick-carousel u-slick u-slick--gutters-2 space-2"
             data-infinite="true"
             data-slides-show="1"
             data-slides-scroll="1"
             data-center-mode="true"
             data-center-padding="200px"
             data-pagi-classes="text-center u-slick__pagination mt-5 mb-0"
             data-responsive='[{
               "breakpoint": 992,
               "settings": {
                 "centerPadding": "120px"
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "centerPadding": "80px"
               }
             }, {
               "breakpoint": 554,
               "settings": {
                 "centerPadding": "50px"
               }
             }]'>

          @foreach ($portofolio->gambar as $gambar)
            <div class="js-slide rounded bg-img-hero min-height-300" style="background-image: url({{ asset($gambar->url) }});"></div>              
          @endforeach
        </div>
      </div>
    </div>
    <!-- End Images Carousel -->

    <!-- Fitur Section -->
    <div class="container">
      <div class="w-lg-60 mx-auto">
        <div class="mb-5">
          <!-- List -->
            <ul class="list-unstyled mb-0">
              <li class="media mb-1">
                <div class="d-flex w-40 w-sm-30">
                  <h3 class="h6">Client</h3>
                </div>
                <div class="media-body">
                  <small class="text-muted">
                    {{ $portofolio->client }}
                  </small>
                </div>
              </li>

              <li class="media mb-1">
                <div class="d-flex w-40 w-sm-30">
                  <h4 class="h6">Pengerjaan</h4>
                </div>
                <div class="media-body">
                  <small class="text-muted">
                    {{ $portofolio->waktu_pengerjaan }}
                  </small>
                </div>
              </li>

              <li class="media mb-1">
                <div class="d-flex w-40 w-sm-30">
                  <h4 class="h6">Link</h4>
                </div>
                <div class="media-body">
                  <small class="text-muted">
                    <a href="{{ $portofolio->link }}" target="_blank">{{ $portofolio->link }}</a>
                  </small>
                </div>
              </li>

              <li class="media">
                <div class="d-flex w-40 w-sm-30">
                  <h4 class="h6">Fitur</h4>
                </div>
                <div class="media-body">
                  @foreach ($portofolio->fitur as $fitur)
                    <small class="d-block text-muted mb-1">
                      {{ $fitur->name }}
                    </small>                      
                  @endforeach
                </div>
              </li>
            </ul>
            <!-- End List -->
          <hr class="my-7">
        </div>
      </div>
    </div>
    <!-- End Fitur Section -->

    <!-- Description Section -->
    <div class="container">
      <div class="w-lg-60 mx-auto">

        <div class="mb-5">
          <p>{{ $portofolio->description }}</p>
        </div>
      </div>
    </div>
    <!-- End Description Section -->

    @if($portofolio->gif != null)
    <div class="container">
      <div class="w-lg-60 mx-auto">
        <div class="mb-5">
          <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" style="width: 100%">
            <source src="{{ $portofolio->gif }}" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
    @endif

  </main>
  <!-- ========== END MAIN ========== -->

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
  <script src="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/dzsparallaxer/dzsparallaxer.js') }}"></script>
  <script src="{{ asset('assets/vendor/slick-carousel/slick/slick.js') }}"></script>

  <!-- JS Front -->
  <script src="{{ asset('assets/js/hs.core.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.header.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.unfold.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.malihu-scrollbar.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.validation.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.focus-state.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.show-animation.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.scroll-effect.js') }}"></script>
  <script src="{{ asset('assets/js/components/hs.slick-carousel.js') }}"></script>
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
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#signupPassword'
          }
        }
      });

      // initialization of forms
      $.HSCore.components.HSFocusState.init();

      // initialization of scroll effect component
      $.HSCore.components.HSScrollEffect.init('.js-scroll-effect');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>