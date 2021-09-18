@extends('layout.main')
@section('content')


    <main id="sprd-content" class="sprd-startpage" tabindex="-1">



        <div id="sprd-startpage-cyo-intro" class="sprd-startpage-cyo-intro mb-5">
            <h2 class="sprd__caption mt-5">

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


    </main>
@endsection
