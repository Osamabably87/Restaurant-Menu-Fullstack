<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login - Feliciano</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS بتاع القالب -->
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <section class="ftco-section img" style="
      background-image: url('{{ asset('images/bg_3.jpg') }}');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 100vh;
      ">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
          <div class="col-md-6 col-lg-5">
            <div class="login-wrap p-4 p-md-5 bg-light rounded shadow">
              <h3 class="text-center mb-4">Login</h3>

              <!-- form -->
              <form action="{{ route('login.post') }}" method="POST" novalidate class="login-form">
                @csrf
                <div class="form-group mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                  @error('email')
                    <small class="text-danger d-block">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                  @error('password')
                    <small class="text-danger d-block">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary w-100 py-3">Login</button>
                </div>
                <p class="text-center mt-3">Don't have an account? 
                  <a href="{{ route('register') }}">Register</a>
                </p>
              </form>
              <!-- end form -->

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- JS بتاع القالب -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
