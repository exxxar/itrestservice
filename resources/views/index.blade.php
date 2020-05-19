@extends('layouts.main')

@section('title', 'IT Rest Service')

@section('content')

    <div class="main-banner">
        <div class="main-banner-slider flickity-dots-absolute flickity-dots-white" data-flickity='{ "bgLazyLoad": 1, "bgLazyLoad": true, "fade": true, "prevNextButtons": false, "autoPlay": 7000, "pauseAutoPlayOnHover": false }'>
            <div class="main-banner-slider-item">
                <div class="main-banner-item-img-right" data-flickity-bg-lazyload="{{asset("img/3.jpg")}}"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main-banner-box">
                                <h1 class="main-banner-title">IT Проекты для вашего бизнеса!</h1>
                                <div class="main-banner-desc">
                                    <p>Высококачественные специалисты в области веб и мобильной разработки. Мы воплотим в реальность все ваши технологичные мечты.</p>
                                </div>
                                <div class="main-banner-btns">
{{--                                    <a href="{{route('timeline')}}" class="btn btn-widht-ico btn-small ripple">--}}
{{--                                        <span>Подробнее</span>--}}
{{--                                        <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>--}}
{{--                                    </a>--}}
                                    <a href="{{route("contactus")}}" class="btn btn-widht-ico btn-small ripple">
                                        <span>Заказать</span>
                                        <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-banner-slider-item">
                <div class="main-banner-item-img-right" data-flickity-bg-lazyload="{{asset("img/1.jpg")}}"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main-banner-box">
                                <h2 class="main-banner-title">IT Проекты для вашего бизнеса!</h2>
                                <div class="main-banner-desc">
                                    <p>
                                        С момента нашего основания мы поставляем высококачественные и надежные программные решения для целей корпоративного бизнеса.</p>
                                </div>
                                <div class="main-banner-btns">
{{--                                    <a href="#!" class="btn btn-widht-ico btn-small ripple">--}}
{{--                                        <span>Подробнее</span>--}}
{{--                                        <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>--}}
{{--                                    </a>--}}
                                    <a href="{{route("contactus")}}" class="btn btn-widht-ico btn-small ripple">
                                        <span>Заказать</span>
                                        <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="main-banner-slider-item">--}}
{{--                <div class="main-banner-item-img-right" data-flickity-bg-lazyload="{{asset("img/2.jpg")}}"></div>--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col">--}}
{{--                            <div class="main-banner-box">--}}
{{--                                <h2 class="main-banner-title">IT Solutions for Your Business</h2>--}}
{{--                                <div class="main-banner-desc">--}}
{{--                                    <p>With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>--}}
{{--                                </div>--}}
{{--                                <div class="main-banner-btns">--}}
{{--                                    <a href="#!" class="btn btn-widht-ico btn-small ripple">--}}
{{--                                        <span>Подробнее</span>--}}
{{--                                        <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>--}}
{{--                                    </a>--}}
{{--                                    <a href="#!" class="btn btn-widht-ico btn-border btn-small">--}}
{{--                                        <span>Get in Touch</span>--}}
{{--                                        <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

    <it-order-calc></it-order-calc>
    @include("partials.services")

    @include("partials.why_choose_us")

    @include("partials.counter")

    @include("partials.projects")

    @include("partials.team")

{{--    @include("partials.reviews")--}}

{{--    @include("partials.latest_news")--}}

@endsection
