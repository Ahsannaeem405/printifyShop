@extends('layout.main')

@section('content')
    <main id="sprd-content" class="sprd-startpage" tabindex="-1">

        <div id="sprd-startpage-teaser" class="sprd-startpage-teaser sprd-startpage-teaser--with-link"><a
                class="sprd-startpage-teaser__link" href="#">
                <div class="sprd-startpage-teaser__image sprd-startpage-teaser__image--has-text"
                     style="background-image:url({{env('BASE_PATH')."/$shop->about_img"}})"></div>
                <div class="sprd-startpage-teaser__content sprd-bg-m3"><h1 style="color:"
                                                                           class="sprd-startpage-teaser__caption sprd__caption">
                        About {{$shop->shop}}</h1>
                    <div style="color:" class="sprd-startpage-teaser__subcaption">          <p style="font-size: 20px;background-color: #f1efef;padding: 50px;border-radius: 10px">



{{$shop->about}}
                        </p></div>
                    <button type="button" class="sprd-startpage-teaser__cta sprd-button sprd-btn-primary">Shop Now
                    </button>
                </div>
            </a></div>










        </div>
    </main>

@endsection
