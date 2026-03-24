@include('head')
<body>
  <!-- Top Bar -->
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
              <span class="text">+ 1235 2355 98</span>
            </div>
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
              <span class="text">youremail@email.com</span>
            </div>
            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
              <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('header')
  
  <!-- Slider Section -->
  <section class="home-slider owl-carousel js-fullheight">
    @for ($i = 1; $i <= 3; $i++)
      <div class="slider-item js-fullheight" style="background-image: url({{ asset('images/bg_'.$i.'.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <span class="subheading">Feliciano</span>
              <h1 class="mb-4">
                @if($i == 1) Best Restaurant
                @elseif($i == 2) Nutritious &amp; Tasty
                @else Delicious Specialties
                @endif
              </h1>
            </div>
          </div>
        </div>
      </div>
    @endfor
  </section>

  <!-- Featured Menus -->
  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="featured">
            <div class="row">
              @for ($i = 1; $i <= 4; $i++)
                <div class="col-md-3">
                  <div class="featured-menus ftco-animate">
                    <div class="menu-img img" style="background-image: url({{ asset('images/breakfast-'.$i.'.jpg') }});"></div>
                    <div class="text text-center">
                      <h3>Grilled Beef with potatoes</h3>
                      <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                    </div>
                  </div>
                </div>
              @endfor
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="ftco-section ftco-wrap-about">
    <div class="container">
      <div class="row">
        <div class="col-md-7 d-flex">
          <div class="img img-1 mr-md-2" style="background-image: url({{ asset('images/about.jpg') }});"></div>
          <div class="img img-2 ml-md-2" style="background-image: url({{ asset('images/about-1.jpg') }});"></div>
        </div>
        <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
          <div class="heading-section mb-4 my-5 my-md-0">
            <span class="subheading">About</span>
            <h2 class="mb-4">Feliciano Restaurant</h2>
          </div>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          <p class="time">
            <span>Mon - Fri <strong>8 AM - 11 PM</strong></span>
            <span><a href="#">+ 1-978-123-4567</a></span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Counter Section -->
  <section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
    <div class="container">
      <div class="row d-md-flex">
        <div class="col-md-9">
          <div class="row d-md-flex align-items-center">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <strong class="number" data-number="18">0</strong>
                  <span>Years of Experienced</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <strong class="number" data-number="100">0</strong>
                  <span>Menus/Dish</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <strong class="number" data-number="50">0</strong>
                  <span>Staffs</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <strong class="number" data-number="15000">0</strong>
                  <span>Happy Customers</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 text-center text-md-left">
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-12 text-center heading-section ftco-animate">
          <span class="subheading">Services</span>
          <h2 class="mb-4">Catering Services</h2>
        </div>
      </div>
      <div class="row">
        @php
          $services = [
            ['icon'=>'flaticon-cake','title'=>'Birthday Party','desc'=>'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
            ['icon'=>'flaticon-meeting','title'=>'Business Meetings','desc'=>'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
            ['icon'=>'flaticon-tray','title'=>'Wedding Party','desc'=>'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.'],
          ];
        @endphp
        @foreach($services as $service)
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="{{ $service['icon'] }}"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">{{ $service['title'] }}</h3>
                <p>{{ $service['desc'] }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Specialties Menu Section -->
  <section class="ftco-section">
    <div class="container">
      <div class="row no-gutters justify-content-center mb-5 pb-2">
        <div class="col-md-12 text-center heading-section ftco-animate">
          <span class="subheading">Specialties</span>
          <h2 class="mb-4">Our Menu</h2>
        </div>
      </div>
      <div class="row no-gutters d-flex align-items-stretch">
        @for ($i = 1; $i <= 7; $i++)
          <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
            <div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img @if($i%2==1) @else order-md-last @endif" style="background-image: url({{ asset('images/breakfast-'.$i.'.jpg') }});"></div>
              <div class="text d-flex align-items-center">
                <div>
                  <div class="d-flex">
                    <div class="one-half">
                      <h3>Grilled Beef with potatoes</h3>
                    </div>
                    <div class="one-forth">
                      <span class="price">$29</span>
                    </div>
                  </div>
                  <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                  <p><a href="#" class="btn btn-primary">Order now</a></p>
                </div>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>
  </section>

  <!-- Master Chef Section -->
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-12 text-center heading-section ftco-animate">
          <span class="subheading">Chef</span>
          <h2 class="mb-4">Our Master Chef</h2>
        </div>
      </div>	
      <div class="row">
        @php
          $chefs = [
            ['img'=>'chef-4.jpg','name'=>'John Smooth','position'=>'Restaurant Owner'],
            ['img'=>'chef-2.jpg','name'=>'Rebeca Welson','position'=>'Head Chef'],
            ['img'=>'chef-3.jpg','name'=>'Kharl Branyt','position'=>'Chef'],
            ['img'=>'chef-1.jpg','name'=>'Luke Simon','position'=>'Chef'],
          ];
        @endphp
        @foreach($chefs as $chef)
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img" style="background-image: url({{ asset('images/'.$chef['img']) }});"></div>
              <div class="text pt-4">
                <h3>{{ $chef['name'] }}</h3>
                <span class="position mb-2">{{ $chef['position'] }}</span>
                <div class="faded">
                  <ul class="ftco-social d-flex">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Testimony Section -->
  <section class="ftco-section testimony-section img">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-12 text-center heading-section ftco-animate">
          <span class="subheading">Testimony</span>
          <h2 class="mb-4">Happy Customer</h2>
        </div>
      </div>
      <div class="row ftco-animate justify-content-center">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            @for ($i = 1; $i <= 5; $i++)
              <div class="item">
                <div class="testimony-wrap text-center pb-5">
                  <div class="user-img mb-4" style="background-image: url({{ asset('images/person_'.$i.'.jpg') }});">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Customer {{$i}}</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Blog Section -->
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Blog</span>
          <h2 class="mb-4">Recent Posts</h2>
        </div>
      </div>
      <div class="row">
        @for ($i = 1; $i <= 3; $i++)
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('images/image_'.$i.'.jpg') }});">
              </a>
              <div class="text p-4">
                <div class="meta mb-2">
                  <div><a href="#">Oct. {{$i+1}}, 2025</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> {{$i*3}}</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>
  </section>

  @include('footer')
  @include('scripts')
</body>
</html>
