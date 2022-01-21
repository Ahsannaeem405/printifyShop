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
                                        
                                      


                                    </figure>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6">

                        <form method="post" action="{{url('/product/buy')}}">
                            @csrf

                            <h5>{{$product->product_name}}</h5>

                            
                            

                                <p><span class="mr-1"><strong>$
                                @if($price !=null)
                                {{$price}}
                                @else
                                {{$product->product_price}}
                                @endif

                                </strong></span></p>





                          
                            <div class="table-responsive">

                            </div>

                            <div class="table-responsive mb-2">
                                <table class="table table-sm table-borderless">
                                    <tbody>


                                    <input type="hidden" name="product_main_id" value="{{$product->id}}">
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <input type="hidden" name="color" class="product_color" value="">
                                    <input type="hidden" checked name="variation_id" value="0">





                                   
                                    @if($price !=null)
                                
                                        <input type="hidden" name="price" class="price"
                                               value="{{$price}}">
                                    @else
                                        <input type="hidden" name="price" class="price"
                                               value="{{$product->product_price}}">
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
