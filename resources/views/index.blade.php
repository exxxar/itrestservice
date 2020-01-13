@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

    <div class="main-banner">
        <div class="main-banner-slider flickity-dots-absolute flickity-dots-white" data-flickity='{ "bgLazyLoad": 1, "bgLazyLoad": true, "fade": true, "prevNextButtons": false, "autoPlay": 7000, "pauseAutoPlayOnHover": false }'>
            <div class="main-banner-slider-item">
                <div class="main-banner-item-img-right" data-flickity-bg-lazyload="https://softgroup.ua/sites/default/files/styles/480x320/public/DSC_1286.jpg?itok=r8TeQAyy"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main-banner-box">
                                <h1 class="main-banner-title">IT Проекты для вашего бизнеса!</h1>
                                <div class="main-banner-desc">
                                    <p>On this template you will be able to create a site for your business. The template has many different blocks from which you can create your own unique site.</p>
                                </div>
                                <div class="main-banner-btns">
                                    <a href="{{route('timeline')}}" class="btn btn-widht-ico btn-small ripple">
                                        <span>Подробнее</span>
                                        <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
                                    </a>
                                    <a href="{{route('comingsoon')}}" class="btn btn-widht-ico btn-border btn-small ripple">
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
                <div class="main-banner-item-img-right" data-flickity-bg-lazyload="https://egate.lv/wp-content/uploads/2015/12/IT-support.jpg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main-banner-box">
                                <h2 class="main-banner-title">IT Solutions for Your Business</h2>
                                <div class="main-banner-desc">
                                    <p>Since our establishment, we have been delivering high-quality and sustainable software solutions for corporate business purposes.</p>
                                </div>
                                <div class="main-banner-btns">
                                    <a href="#!" class="btn btn-widht-ico btn-small ripple">
                                        <span>Подробнее</span>
                                        <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
                                    </a>
                                    <a href="#!" class="btn btn-widht-ico btn-border btn-small">
                                        <span>Get in Touch</span>
                                        <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-banner-slider-item">
                <div class="main-banner-item-img-right" data-flickity-bg-lazyload="https://mate.academy/static/cover.jpg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main-banner-box">
                                <h2 class="main-banner-title">IT Solutions for Your Business</h2>
                                <div class="main-banner-desc">
                                    <p>With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                                </div>
                                <div class="main-banner-btns">
                                    <a href="#!" class="btn btn-widht-ico btn-small ripple">
                                        <span>Подробнее</span>
                                        <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
                                    </a>
                                    <a href="#!" class="btn btn-widht-ico btn-border btn-small">
                                        <span>Get in Touch</span>
                                        <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("partials.services")

    @include("partials.why_choose_us")

    @include("partials.counter")

    @include("partials.projects")

    @include("partials.team")

    @include("partials.reviews")

    @include("partials.latest_news")

@endsection
