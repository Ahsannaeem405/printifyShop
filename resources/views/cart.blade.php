@extends('layout.main')

@section('content')

    <main>

        <!--Section: Block Content-->
        <section>

            <div class="container-fluid p-5">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
            @endif

                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                @endif
            <!--Grid row-->
            <div class="row p-lg-0 p-4">

                <!--Grid column-->
                <div class="col-lg-8  p-0">

                    <!-- Card -->
                    <div class="mb-3">
                        <div class="pt-4 wish-list">

                            <h5 class="mb-4">Cart (<span>{{$cart->count()}}</span> items)</h5>
@php $total=0; @endphp
                            @foreach($cart as $cart)

                            <div class="row  mb-4 " style="    width: 100%;margin: 0px;">
                                <div class="col-md-5 col-lg-3 col-xl-3 p-0">
                                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">

                                        {{-- @php
                                            $design=\App\Models\designs::find($cart->product->design_id);

                                        @endphp
                                        @if($design)
                                            @php
                                                $detail=$cart->product->productDetail;

                                            @endphp

                                            <img src="{{$design->image}}" style="position: absolute;width: {{$detail[0]->size}}%;top: {{$detail[0]->top}}%;left: {{$detail[0]->left}}%;transform: rotate({{$detail[0]->angle*3.6}}deg)">
                                        @endif --}}


                                       
                                        <img src="{{$cart->product->productDetail[0]->orderfrontimg}}" style="width:100px;">

                                    </div>

                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5>{{$cart->product->product_name}}</h5>


                                                <p class="mb-1 text-muted text-uppercase small">Variation: {{$cart->variation_id}}</p>
                                            </div>
                                            <div>

                                                <form action="{{url('cart/update')}}" method="post">
                                                    @csrf
                                                <div class="def-number-input number-input safari_only mb-0 w-100">
                                                    <button type="button" style="border: none;border-radius: 5px;padding: 7px" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="btn-primary fa fa-minus"></button>
                                                    <input type="hidden" name="cart[]" value="{{$cart->id}}"   >
                                                    <input style="width: 20%" class="quantity" min="1" name="quantity[]" value="{{$cart->qty}}" type="number">
                                                    <button type="button" style="border: none;border-radius: 5px;padding: 7px" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class=" btn-primary fa fa-plus"></button>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="{{url('cart/remove/'.$cart->id.'')}}" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                                                        class="fas fa-trash-alt mr-1"></i> Remove item </a>

                                            </div>
                                            @php $total=$total+($cart->price*$cart->qty); @endphp
                                            <p class="mb-0"><span><strong id="summary">${{$cart->price*$cart->qty}}</strong></span></p class="mb-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            @endforeach

                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="pt-4">

                            <h5 class="mb-4">We accept</h5>


                            <img class="mr-2" style="display: inline-block !important;" width="45px"
                                 src="https://mdbootstrap.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
                                 alt="PayPal acceptance mark">
                        </div>
                    </div>
                    <!-- Card -->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4">

                    <!-- Card -->
                    <div class="mb-3">
                        <div class="pt-4">

                            <h5 class="mb-3">The total amount of</h5>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Temporary amount
                                    <span>${{$total}}</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>The total amount of</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong>${{$total}}</strong></span>
                                </li>
                            </ul>

                          <a href="{{url('checkout')}}"> <button type="button" class="btn btn-primary btn-block">checkout</button>
                          </a>
                            <button type="submit" class="btn btn-primary btn-block mt-2">Update Cart</button>

                        </div>
                    </div>
                    </form>

                </div>
                <!--Grid column-->

            </div>
            <!-- Grid row -->
            </div>
        </section>
        <!--Section: Block Content-->

    </main>


 @endsection
