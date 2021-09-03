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
                <div class="col-md-6 mb-4 mb-md-0">



                    <div class="mdb-lightbox">

                        <div class="row product-gallery mx-1">

                            <div class="col-12 mb-0">
                                <figure class="view overlay rounded z-depth-1 main-img">
                                    <a href="#"
                                       data-size="710x23">
                                        <img style="width: 100%;height: 600px" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                                             class="img-fluid z-depth-1">
                                    </a>
                                </figure>
                                <figure class="view overlay rounded z-depth-1" style="display: none">
                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                                       data-size="710x823">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                                             class="img-fluid z-depth-1">
                                    </a>
                                </figure>
                                <figure class="view overlay rounded z-depth-1" style="display: none">
                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                                       data-size="710x823">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                                             class="img-fluid z-depth-1">
                                    </a>
                                </figure>
                                <figure class="view overlay rounded z-depth-1" style="display: none">
                                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                                       data-size="710x823">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                                             class="img-fluid z-depth-1">
                                    </a>
                                </figure>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-6">

                    <h5>Fantasy T-shirt</h5>
                    <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                    <ul class="rating">
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                    </ul>
                    <p><span class="mr-1"><strong>$12.99</strong></span></p>
                    <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
                        error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
                        officia quis dolore quos sapiente tempore alias.</p>
                    <div class="table-responsive">

                    </div>
                    <hr>
                    <div class="table-responsive mb-2">
                        <table class="table table-sm table-borderless">
                            <tbody>
                            <tr>
                                <td class="pl-0 pb-0 w-25">Quantity</td>
                                <td class="pb-0">Select size</td>
                            </tr>
                            <tr>
                                <td class="pl-0">
                                    <div class="def-number-input number-input safari_only mb-0">
                                        <button style="border: none;border-radius: 5px;padding: 7px" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                class="btn-primary fa fa-minus"></button>
                                        <input style="width: 54%;" class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                class="btn-primary fa fa-plus"></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="mt-1">
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="small" name="materialExampleRadios"
                                                   checked>
                                            <label class="form-check-label small text-uppercase card-link-secondary"
                                                   for="small">Small</label>
                                        </div>
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="medium" name="materialExampleRadios">
                                            <label class="form-check-label small text-uppercase card-link-secondary"
                                                   for="medium">Medium</label>
                                        </div>
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                                            <label class="form-check-label small text-uppercase card-link-secondary"
                                                   for="large">Large</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
                            class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
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
            $(function () {
                $("#mdb-lightbox-ui").load("{{asset('mdb-ui-kit')}}");
            });
        });

    </script>
@endsection
