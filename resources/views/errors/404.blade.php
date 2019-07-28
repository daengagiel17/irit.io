
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Error 404 | Front - Responsive Website Template</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>
<body class="bg-img-hero-fixed" style="background-image: url({{ asset('assets/svg/illustrations/error-404.svg') }});">

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="d-lg-flex">
      <div class="container d-lg-flex align-items-lg-center min-height-lg-100vh space-4">
        <div class="w-lg-60 w-xl-50">
          <!-- Title -->
          <div class="mb-5">
            <h1 class="text-primary font-weight-normal">Page not <span class="font-weight-semi-bold">found</span></h1>
            <p class="mb-0">Oops! Looks like you followed a bad link.</p>
            <p>If you think this is a problem with us, please <a href="#">tell us</a>.</p>
          </div>
          <!-- End Title -->

          <a class="btn btn-primary btn-wide transition-3d-hover" href="{{ route('landing') }}">Go Back</a>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- JS Global Compulsory -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>

  <!-- JS Implementing Plugins -->

  <!-- JS Front -->
  <script src="{{ asset('assets/js/hs.core.js') }}"></script>
</body>
</html>