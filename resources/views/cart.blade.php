@extends('layout.main')

@section('content')

    <main>

        <!--Section: Block Content-->
        <section>

            <div class="container-fluid p-5">
            <!--Grid row-->
            <div class="row p-lg-0 p-4">

                <!--Grid column-->
                <div class="col-lg-8  p-0">

                    <!-- Card -->
                    <div class="mb-3">
                        <div class="pt-4 wish-list">

                            <h5 class="mb-4">Cart (<span>2</span> items)</h5>

                            <div class="row  mb-4 " style="    width: 100%;margin: 0px;">
                                <div class="col-md-5 col-lg-3 col-xl-3 p-0">
                                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                        <img class="img-fluid w-100"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">

                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5>Blue denim shirt</h5>


                                                <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                                            </div>
                                            <div>
                                                <div class="def-number-input number-input safari_only mb-0 w-100">
                                                    <button style="border: none;border-radius: 5px;padding: 7px" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="btn-primary fa fa-minus"></button>
                                                    <input class="quantity" min="1" name="quantity" value="1" type="number">
                                                    <button style="border: none;border-radius: 5px;padding: 7px" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class=" btn-primary fa fa-plus"></button>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                                                        class="fas fa-trash-alt mr-1"></i> Remove item </a>

                                            </div>
                                            <p class="mb-0"><span><strong id="summary">$17.99</strong></span></p class="mb-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="row  mb-4 " style="    width: 100%;margin: 0px;">
                                <div class="col-md-5 col-lg-3 col-xl-3 p-0">
                                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                        <img class="img-fluid w-100"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">

                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5>Blue denim shirt</h5>


                                                <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                                            </div>
                                            <div>
                                                <div class="def-number-input number-input safari_only mb-0 w-100">
                                                    <button style="border: none;border-radius: 5px;padding: 7px" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="btn-primary fa fa-minus"></button>
                                                    <input class="quantity" min="1" name="quantity" value="1" type="number">
                                                    <button style="border: none;border-radius: 5px;padding: 7px" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class=" btn-primary fa fa-plus"></button>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                                                        class="fas fa-trash-alt mr-1"></i> Remove item </a>

                                            </div>
                                            <p class="mb-0"><span><strong id="summary">$17.99</strong></span></p class="mb-0">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="pt-4">

                            <h5 class="mb-4">We accept</h5>

                            <img class="mr-2" style="display: inline-block !important;" width="45px"
                                 src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                 alt="Visa">
                            <img class="mr-2" style="display: inline-block !important;" width="45px"
                                 src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                 alt="American Express">
                            <img class="mr-2" style="display: inline-block !important;" width="45px"
                                 src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                 alt="Mastercard">
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
                                    <span>$25.98</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>Gratis</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>The total amount of</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong>$53.98</strong></span>
                                </li>
                            </ul>

                          <a href="{{url('checkout')}}"> <button type="button" class="btn btn-primary btn-block">checkout</button>
                          </a>
                        </div>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!-- Grid row -->
            </div>
        </section>
        <!--Section: Block Content-->

    </main>


 @endsection
