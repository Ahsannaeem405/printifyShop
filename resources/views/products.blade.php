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

                            
                          
                        @if($pro->productDetail[0]->position=='default')
                            @if($pro->productDetail[0]->orderfrontimg!=null)
                            <img src="{{$pro->productDetail[0]->orderfrontimg}}">
                          
                            @endif
                        @endif    
                           
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
