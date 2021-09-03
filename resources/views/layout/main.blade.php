
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


                <div class="row mt-2" style="width: 100%;">
                   <a style="margin-left: auto" href="{{url('/cart')}}" class="{{ Request::is('cart')? 'active' : '' }}"> <i style="font-size: 30px" class="fas fa-cart-plus"></i>
                   </a>
                </div>
            <div class="row" style="width: 100%;">
                <a class="sprd-header__title sprd__headline text-center" href="">Rehman</a>
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
                        class="sprd-info-footer__link" href="">+xx xxx xxxx <span
                            class="sprd-info-footer__times">(Call us! Mon - Fri 9am - 6pm )</span></a>
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
