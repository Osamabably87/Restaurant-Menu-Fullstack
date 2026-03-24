@include('head')
<body>
    <div class="py-1 bg-black top">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center">
                                <span class="icon-phone2"></span>
                            </div>
                            <span class="text">+ 1235 2355 98</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center">
                                <span class="icon-paper-plane"></span>
                            </div>
                            <span class="text">youremail@email.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                            <p class="mb-0 register-link">
                                <span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('header')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Specialties</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Menu <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="ftco-search">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Breakfast</a>
                            <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Lunch</a>
                            <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Dinner</a>
                            <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Drinks</a>
                            <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Desserts</a>
                           
                        </div>
                    </div>

                    {{-- عرض كل الوجبات --}}
                    <div class="row mt-4">
                        @foreach($meals as $meal)
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-4">
                            <div class="meal-card d-flex flex-column">
                                <div class="meal-img">
                                    <img src="{{ $meal->image }}" alt="{{ $meal->name }}">
                                </div>
                                <div class="meal-info p-3 flex-grow-1 d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h3>{{ $meal->name }}</h3>
                                        <span class="price">${{ $meal->price }}</span>
                                    </div>
                                    <p class="flex-grow-1">{{ $meal->description }}</p>
                                    <a href="{{route('order')}}" class="btn btn-primary btn-block mt-auto">Order now</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>

    @include('scripts')

    <style>
        .meal-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            background-color: #fff;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .meal-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .meal-img {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .meal-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .meal-info h3 {
            font-size: 1.25rem;
            margin: 0;
        }

        .meal-info .price {
            font-weight: bold;
            color: #F96D00;
        }

        .btn-block {
            width: 100%;
            text-align: center;
        }
    </style>
</body>
</html>
