@extends('layout.main')

@section('content')


        <main id="sprd-content" class="sprd-startpage" tabindex="-1">
            <div id="sprd-startpage-teaser" class="sprd-startpage-teaser sprd-startpage-teaser--with-link"><a
                    class="sprd-startpage-teaser__link" href="#">
                    <div class="sprd-startpage-teaser__image sprd-startpage-teaser__image--has-text"
                         style="background-image:url({{asset('images/header2.png')}})"></div>
                    <div class="sprd-startpage-teaser__content sprd-bg-m3"><h1 style="color:"
                                                                               class="sprd-startpage-teaser__caption sprd__caption">
                            Welcome to Rehman</h1>
                        <div style="color:" class="sprd-startpage-teaser__subcaption">Find Your Product</div>
                        <button type="button" class="sprd-startpage-teaser__cta sprd-button sprd-btn-primary">Shop Now
                        </button>
                    </div>
                </a></div>


            <div id="sprd-startpage-cyo-intro" class="sprd-startpage-cyo-intro"><h2 class="sprd__caption">

                    Your Latest Products
                </h2>

                <div class="row">

                    <div class="col-lg-3 mb-5">

                        <div class="card col-lg-12 p-0">
                            <img class="card-img-top" src="{{asset('images/header4.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text">Product short description...</p>
                                <a href="{{url('productDetail')}}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-3 mb-5">

                        <div class="card col-lg-12 p-0">
                            <img class="card-img-top" src="{{asset('images/header4.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text">Product short description...</p>
                                <a href="{{url('productDetail')}}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>

                    </div>



                    <div class="col-lg-3 mb-5">

                        <div class="card col-lg-12 p-0">
                            <img class="card-img-top" src="{{asset('images/header4.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text">Product short description...</p>
                                <a href="{{url('productDetail')}}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-3 mb-5">

                        <div class="card col-lg-12 p-0">
                            <img class="card-img-top" src="{{asset('images/header4.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Product Name</h5>
                                <p class="card-text">Product short description...</p>
                                <a href="{{url('productDetail')}}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>

                    </div>









                </div>


                <div class="sprd-startpage-cyo-intro__button-section">
                    <a class="sprd-button sprd-btn-primary"
                       href="{{url('/products')}}">
                        See More</a></div>
            </div>
        </main>

@endsection
