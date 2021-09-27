@extends('layout.main')

@section('content')


    <style>
        .SprdMain img {
            max-width: -webkit-fill-available !important;
        }

        ul {
            list-style: none;
        }

        ul li {
            display: inline-block;
        }
    </style>

    <main>


        <div class="container-fluid">
            <!--Section: Block Content-->
            <section class="mb-5">


                <div class="row mt-5">
                    <div class="col-lg-6">


                        <div class="mdb-lightbox">

                            <div class="row product-gallery mx-1">

                                <div class="col-12 mb-0">
                                    <figure class="view overlay rounded z-depth-1 main-img">
                                        @php
                                            $design=\App\Models\designs::find($product->design_id);

                                        @endphp
                                        @if($design)
                                            @php
                                                $detail=$product->productDetail;

                                            @endphp

                                            <img src="{{env('BASE_PATH')."/$design->image"}}"
                                                 style="position: absolute;width: {{$detail[0]->size}}%;top: {{$detail[0]->top}}%;left: {{$detail[0]->left}}%;transform: rotate({{$detail[0]->angle*3.6}}deg)">
                                        @endif
                                        <img src="{{$product->product_img}}">

                                    </figure>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6">

                        <form method="post" action="{{url('/product/buy')}}">
                            @csrf

                            <h5>{{$product->product_name}}</h5>

                            @php
                                $data_price= \App\Models\clientPrice::where('product_id',$data2->id)->where('design_id',$design->id)->first();
                            @endphp

                            @if($data_price)

                                <p><span class="mr-1"><strong>${{$data_price->updated}}</strong></span></p>



                            @else

                                @if(isset($data2->variants[0]->price))

                                    <p><span class="mr-1"><strong>${{$data2->variants[0]->price/100}}</strong></span>
                                    </p>
                                @endif
                            @endif


                            <h6>Colors</h6>
                            @foreach($data2->options as $op)
                                @if($op->type=='color')
                                    @foreach($op->values as $values)

                                        <div title="{{$values->title}}"

                                             class="ml-1 mb-1 d-inline-block color_change" data="{{$values->id}}"
                                             color="{{$values->colors[0]}}"
                                             style="width: 30px;height: 30px;background: @if(isset($values->colors[0])){{$values->colors[0]}} @endif; border-radius: 50%">

                                            <i style="margin-left: 7px;visibility:hidden"
                                               class="fas fa-check icon_{{$values->id}} tick-icon"></i></div>
                                    @endforeach

                                @endif
                            @endforeach


                            <h6>Sizes</h6>
                            @foreach($data2->options as $op)
                                @if($op->type=='size')
                                    @foreach($op->values as $values)
                                        <input type="radio" checked name="size" value="{{$values->title}}">
                                        <div title="{{$values->title}}"
                                             class="ml-1 mb-1 d-inline-block"
                                             style="color: black">{{$values->title}}</div>
                                    @endforeach

                                @endif
                            @endforeach
                            <div class="table-responsive">

                            </div>

                            <div class="table-responsive mb-2">
                                <table class="table table-sm table-borderless">
                                    <tbody>


                                    <input type="hidden" name="product_main_id" value="{{$data2->id}}">
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <input type="hidden" name="color" class="product_color" value="">





                                    @if($data_price)

                                        <input type="hidden" name="price" class="price"
                                               value="{{$data_price->updated}}">



                                    @else

                                        @if(isset($data2->variants[0]->price))

                                            <input type="hidden" name="price" class="price"
                                                   value="{{$data2->variants[0]->price/100}}">
                                        @endif
                                    @endif

                                    <tr>
                                        <td class="pl-0 pb-0 w-25">Quantity</td>

                                    </tr>

                                    <tr>
                                        <td class="pl-0">
                                            <div class="def-number-input number-input safari_only mb-0">
                                                <button type="button"
                                                        style="border: none;border-radius: 5px;padding: 7px"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                        class="btn-primary fa fa-minus"></button>
                                                <input style="width: 10%; text-align: center" class="quantity" min="0"
                                                       name="qty" value="1" type="number">
                                                <button style="border: none;border-radius: 5px;padding: 7px"
                                                        type="button"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                        class="btn-primary fa fa-plus"></button>
                                            </div>
                                        </td>

                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                            <button type="submit" class="btn btn-light btn-md mr-1 mb-2"><i
                                    class="fas fa-shopping-cart pr-2"></i>Add to cart
                            </button>


                        </form>
                        <div class="row">

                            <p class="pt-1">

                                {!!  $data2->description !!}

                            </p>

                        </div>

                    </div>
                </div>

            </section>
            <!--Section: Block Content-->
        </div>


    </main>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>


        $(document).ready(function () {
            // mdb lightbox init
            $(".color_change").click(function () {

                var id = $(this).attr('data');
                var color = $(this).attr('color');

                $(".tick-icon").each(function () {
                    $(this).css('visibility', 'hidden');
                });

                $('.product_color').val(color);
                $('.icon_' + id).css('visibility', 'visible');
            });
        });

    </script>
@endsection
