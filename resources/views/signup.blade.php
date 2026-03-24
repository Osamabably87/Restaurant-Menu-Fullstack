@include('head')
<body>

<section class="ftco-section img" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="login-wrap p-4 p-md-5 bg-light rounded shadow">
          <h3 class="text-center mb-4">Register</h3>

          <!-- success -->
          @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <form action="{{ route('register.post') }}" method="POST"   novalidate  class="login-form">
            @csrf

            <!-- Full Name -->
            <div class="form-group mb-3">
              <input type="text"
                     name="name"
                     class="form-control @error('name') is-invalid @enderror"
                     placeholder="Full Name"
                     value="{{ old('name') }}"
                     required>
              @error('name')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <!-- Email -->
            <div class="form-group mb-3">
              <input type="email"
                     name="email"
                     class="form-control @error('email') is-invalid @enderror"
                     placeholder="Email"
                     value="{{ old('email') }}"
                     required>
              @error('email')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <!-- Password -->
            <div class="form-group mb-3">
              <input type="password"
                     name="password"
                     class="form-control @error('password') is-invalid @enderror"
                     placeholder="Password"
                     required>
              @error('password')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group mb-3">
              <input type="password"
                     name="password_confirmation"
                     class="form-control @error('password_confirmation') is-invalid @enderror"
                     placeholder="Confirm Password"
                     required>
              @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <!-- Submit -->
            <div class="form-group">
              <button type="submit" class="btn btn-primary w-100 py-3">Register</button>
            </div>

            <p class="text-center mt-3">Already have an account?
              <a href="{{ route('login') }}">Login</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JS -->
@include('scripts')
</body>
</html>
