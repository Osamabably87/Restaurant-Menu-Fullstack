@include('head')
  <body>
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
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Make order</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Reservation <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row d-flex no-gutters">
          <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-5">
		          	<span class="subheading">Order Now!</span>
		            
		          </div>
				   @if (Session::has('msg'))
              <div style="color: forestgreen">{{Session::get('msg')}}</div>
                  
              @endif
	            <form action="{{route('orderstore')}}" method="POST">
                @csrf
	              <div class="row">
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Name</label>
	                    <input type="text" class="form-control" placeholder="Your Name" name="name" value="{{old('name')}}">
	                  </div>
                    @error('name')
                      <p style="color: red;" class="error-message">{{$message}}</p>
                    @enderror
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Email</label>
	                    <input type="text" class="form-control" placeholder="Your Email" name="email" value="{{old('email')}}">
	                  </div>
                    @error('email')
                      <p style="color: red;" class="error-message">{{$message}}</p>
                    @enderror
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Phone</label>
	                    <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{old('phone')}}">
	                  </div>
                    @error('phone')
                      <p style="color: red;" class="error-message">{{$message}}</p>
                    @enderror
	                </div>

					 <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Address</label>
	                    <input type="text" class="form-control" placeholder="Address" name="Address" value="{{old('Address')}}">
	                  </div>
                    @error('Address')
                      <p style="color: red;" class="error-message">{{$message}}</p>
                    @enderror
	                </div>
                 
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">meal</label>
	                    <div class="select-wrap one-third">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="meal" id="" class="form-control">
							@foreach($meals as $meal)
	                        <option value="{{ $meal->name }}">{{ $meal->name }}</option>
	                       @endforeach
	                      </select>
	                    </div>
                      @error('meal')
                        <p style="color: red;" class="error-message">{{$message}}</p>
                      @enderror
	                  </div>
	                </div>
	                <div class="col-md-12 mt-3">
	                  <div class="form-group">
	                    <input type="submit" value="Make order" class="btn btn-primary py-3 px-5">
	                  </div>
	                </div>
	              </div>
	            </form>
	          </div>
          </div>
         <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
              <!-- بدل الخريطة: صورة أكل -->
              <div class="w-100" style="
                      background-image: url('images/breakfast-1.jpg');
                     background-size: cover;
                       background-position: center;
                         border-radius: 8px;
                        min-height: 450px;">
              </div>
          </div>

					</div>
        </div>
			</div>
		</section>
		
   @include('footer')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  @include('scripts')
    
  </body>
</html>