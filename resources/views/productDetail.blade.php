@extends('layout.main')

@section('content')


    <style>
        .SprdMain img{
            max-width: -webkit-fill-available !important;
        }
        ul{
           list-style: none;
        }
        ul li{
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
                                    <a href="#"
                                       data-size="710x23">
                                    <img src="{{$product->product_img}}">
                                    </a>
                                </figure>

                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-lg-6">

                    <h5>{{$product->product_name}}</h5>

                    <p><span class="mr-1"><strong>{{$data2->variants[0]->price}}$</strong></span></p>
<h6>Colors</h6>
                    @foreach($data2->options as $op)
                        @if($op->type=='color')
                            @foreach($op->values as $values)

                                <div  title="{{$values->title}}"

                                     class="ml-1 mb-1 d-inline-block color_change" data="{{$values->id}}"
                                     style="width: 30px;height: 30px;background: @if(isset($values->colors[0])){{$values->colors[0]}} @endif; border-radius: 50%">

                                    <i style="margin-left: 7px;visibility:hidden" class="fas fa-check icon_{{$values->id}}"></i></div>
                            @endforeach

                        @endif
                    @endforeach


                    <h6>Sizes</h6>
                    @foreach($data2->options as $op)
                        @if($op->type=='size')
                            @foreach($op->values as $values)
                              <input type="radio" name="size" value="{{$values->title}}">  <div title="{{$values->title}}"
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
                            <form method="post" action="{{url('/product/buy')}}">
                                @csrf


                                <input type="hidden" name="product_id" value="{{$data2->id}}">

                                                            <tr>
                                <td class="pl-0 pb-0 w-25">Quantity</td>

                            </tr>

                            <tr>
                                <td class="pl-0">
                                    <div class="def-number-input number-input safari_only mb-0">
                                        <button style="border: none;border-radius: 5px;padding: 7px" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                class="btn-primary fa fa-minus"></button>
                                        <input style="width: 10%; text-align: center" class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                class="btn-primary fa fa-plus"></button>
                                    </div>
                                </td>

                            </tr>

                            </form>

                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
                            class="fas fa-shopping-cart pr-2"></i>Add to cart</button>


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
            $(".color_change").click(function(){

               var  id=$(this).attr('data');


                $('.icon_'+id).css('visibility','visible');
            });
        });

    </script>
@endsection
