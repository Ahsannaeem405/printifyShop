@extends('layout.main')

@section('content')


        <main id="sprd-content" class="sprd-startpage" tabindex="-1">
            <div id="sprd-startpage-teaser" class="sprd-startpage-teaser sprd-startpage-teaser--with-link"><a
                    class="sprd-startpage-teaser__link" href="#">
                    <div class="sprd-startpage-teaser__image sprd-startpage-teaser__image--has-text"
                         style="background-image:url({{env('BASE_PATH')."/$shop->home_img"}})"></div>
                    <div class="sprd-startpage-teaser__content sprd-bg-m3"><h1 style="color:"
                                                                               class="sprd-startpage-teaser__caption sprd__caption">
                            {{$shop->shop_title}}</h1>
                        <div style="color:" class="sprd-startpage-teaser__subcaption">Find Your Product</div>
                        <button type="button" class="sprd-startpage-teaser__cta sprd-button sprd-btn-primary">Shop Now
                        </button>
                    </div>
                </a></div>


            <div id="sprd-startpage-cyo-intro" class="sprd-startpage-cyo-intro"><h2 class="sprd__caption">

                    Your Latest Products
                </h2>

                <div class="row">

                    @foreach($product as $pro)
                    <div class="col-lg-3 mb-5">

                        <div class="card col-lg-12 p-0">

                            @php
                                $design=\App\Models\designs::find($pro->design_id);

                                @endphp
                            @if($design)
                                @php
                                $detail=$pro->productDetail;

                                @endphp

                            <img src="{{env('BASE_PATH')."/$design->image"}}" style="position: absolute;width: {{$detail[0]->size}}%;top: {{$detail[0]->top}}%;left: {{$detail[0]->left}}%;transform: rotate({{$detail[0]->angle*3.6}}deg)">
@endif
                            <img class="card-img-top" src="{{$pro->product_img}}" style="height: 270px" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$pro->product_name}}</h5>
                                <a href="{{url("productDetail/$pro->id")}}" class="btn btn-primary">View Detail</a>
                            </div>
                        </div>

                    </div>

                    @endforeach




                </div>


                <div class="sprd-startpage-cyo-intro__button-section">
                    <a class="sprd-button sprd-btn-primary"
                       href="{{url('/products')}}">
                        See More</a></div>
            </div>
        </main>

@endsection
