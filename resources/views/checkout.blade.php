@extends('layout.main')

@section('content')

    <main>

        <!--Section: Block Content-->
        <section>

            <div class="container-fluid p-4">
            <!--Grid row-->
            <div class="row mt-5">

                <!--Grid column-->
                <div class="col-lg-8 mb-4">

                    <!-- Card -->
                    <div class="card wish-list pb-1">
                        <div class="card-body">

                            <h5 class="mb-2" style="font-weight: bold">Billing details</h5>
<form method="post" action="{{url('order/save')}}">
    @csrf

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-lg-6">

                                    <!-- First name -->
                                    <div class="md-form md-outline mb-0 mb-lg-4">
                                        <label for="firstName">First name</label>

                                        <input type="text"
                                               required id="firstName" name="f_name" class="form-control mb-0 mb-lg-2">
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-lg-6">

                                    <!-- Last name -->
                                    <div class="md-form md-outline">
                                        <label for="lastName">Last name</label>

                                        <input type="text" id="lastName" name="l_name" required class="form-control">
                                    </div>

                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->




                            <!-- Country -->
                            <div class="d-flex flex-wrap">
                                <div class="select-outline position-relative w-100">
                                    <label>Country</label>
                                    <select class="mdb-select md-form md-outline form-control" required name="country">
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>

                                </div>
                            </div>

                            <!-- Address Part 1 -->
                            <div class="md-form md-outline mt-0">
                                <label for="form14">Address</label>

                                <input type="text" name="address" required id="form14" placeholder="House number and street name" class="form-control">
                            </div>

                            <!-- Town / City -->
                            <div class="md-form md-outline">
                                <label for="form17">Town / City</label>

                                <input name="city" type="text" required id="form17" class="form-control">
                            </div>

                            <!-- Phone -->
                            <div class="md-form md-outline">
                                <label for="form18">Phone</label>
                                <input type="number" id="form18" name="phone" required class="form-control">

                            </div>

                            <!-- Email address -->
                            <div class="md-form md-outline">
                                <label for="form19">Email address</label>
                                <input type="email" id="form19" name="email" required class="form-control">

                            </div>

                            <!-- Additional information -->
                            <div class="md-form md-outline">
                                <label for="form76">Additional information(Optional)</label>
                                <textarea id="form76" name="info" class="md-textarea form-control" rows="4"></textarea>

                            </div>


                        </div>
                    </div>
                    <!-- Card -->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4">

                    <!-- Card -->
                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-3">The total amount</h5>

                            <ul class="list-group list-group-flush">


                                <li class="font-weight-bold list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                   Select Payment Method
                               <input type="radio" name="payment" value="paypal" checked>PayPal
                               <input type="radio" name="payment" value="stripe" >Stripe
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

                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Place order</button>

                        </div>
                        </form>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
            </div>
        </section>
        <!--Section: Block Content-->

    </main>

    @endsection
