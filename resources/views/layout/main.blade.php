@php
    $shop=\App\Models\User::where('email','rehmanahmad101@gmail.com')->first();
@endphp
<!DOCTYPE html>
<html class="sprd--standalone" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

@include('layout.head')

<body>

<div id="sprd-main" class="SprdMain" style="width: 100% !important;">

    <div id="sprd-container" class="customPageBackground">

        <header id="sprd-header-container" class="sprd-header-container">

                <div class="row mt-2 ml-0" style="width: 100%;">
                   <a style="margin-left: auto;padding-right: 5px" href="{{url('/cart')}}" class="{{ Request::is('cart')? 'active' : '' }}"> <i style="font-size: 30px" class="fas fa-cart-plus"></i>
                   </a>
                </div>
            <div class="row p-0 m-0" style="width: 100%;">


                <nav style="width: 100%" class="navbar navbar-expand-lg navbar-light bg-light d-lg-none d-md-block d-sm-block d-block">

<div class="row">


                    <div class="col-3 pr-0">
                    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    </div>
    <h2  style="text-align: center;position: absolute;left: 45%">{{$shop->shop}}</h2>




</div>
                        <div class="col-12">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item {{ Request::is('/')? 'active' : '' }}">
                                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item {{ Request::is('products')? 'active' : '' }}">
                                <a class="nav-link" href="{{url('products')}}">Products </a>
                            </li>

                            <li class="nav-item {{ Request::is('about')? 'active' : '' }}">
                                <a class="nav-link" href="{{url('about')}}">About </a>
                            </li>
                    </div>
                </nav>

                <a class="sprd-header__title sprd__headline text-center d-lg-block d-md-none d-sm-none d-none font-weight-bold" href="">{{$shop->shop}}</a>
            </div>
            <div id="sprd-navigation"
                 class="sprd-navigation sprd-bg-m1 sprd-c-s3 sprd-lbc-s3 sprd-navigation--hide-on-touchdevs">
                <div id="sprd-department-filter" class="sprd-department-filter">
                    <div id="sprd-department-filter-designer" class="sprd-department-filter__openmenu"><a
                            class="sprd-nav-link customHighlight customFilterItem sprd-c-s3 sprd-bc-m2  {{ Request::is('/')? 'active' : '' }}"
                            href="{{url('/')}}">

                            Home</a></div>

                    <div id="sprd-department-filter-designer" class="sprd-department-filter__openmenu"><a
                            class="sprd-nav-link customHighlight customFilterItem sprd-c-s3 sprd-bc-m2 {{ Request::is('products')? 'active' : '' }}"
                            href="{{url('products')}}">

                            Products</a></div>

                    <div id="sprd-department-filter-designer" class="sprd-department-filter__openmenu"><a
                            class="sprd-nav-link customHighlight customFilterItem sprd-c-s3 sprd-bc-m2 {{ Request::is('about')? 'active' : '' }}"
                            href="{{url('about')}}">

                            About us</a></div>

                </div>
            </div>

        </header>
        <nav class="sprd-burgermenu sprd-bg-m1 sprd-c-s3"></nav>


@yield('content')




        <footer class="sprd-footer" id="sprd-footer">
            <div class="sprd-info-footer sprd-bg-m1 sprd-c-s3 sprd-lbc-m1 " style="padding: 0px !important;padding-top: 10px !important;">


                <div class="sprd-info-footer__col sprd-info-footer__contact-col">





                    <a
                        class="sprd-info-footer__link" href="">{{$shop->phone}}<span
                            class="sprd-info-footer__times">{{$shop->shop_address}}</span></a>
                </div>
            </div>

            <a id="buttonSpreadshirt" class="sprd-info-footer__open-shop sprd-bg-m1 sprd-c-s3"
               href="#" target="_blank"
               rel="noopener noreferrer" style="padding: 0px !important;padding-bottom: 20px !important;">

                Create Your Own Shop Now</a>
        </footer>
    </div>
    <div id="sprd-overlay"></div>
</div>


</body>

</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
