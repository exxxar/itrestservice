@extends('layouts.main')

@section('title', 'Услуги')

@section('content')
    <!-- Begin bread crumbs -->
    <nav class="bread-crumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="bread-crumbs-list">
                        <li>
                            <a href="index.html">Главная</a>
                            <i class="material-icons md-18">chevron_right</i>
                        </li>
                        <li><a href="#!">Услуги</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav><!-- End bread crumbs -->

    <!-- Begin main content -->
    <div class="main-content">
        <div class="container">
            <div class="row items">
                <div class="col-12">
                    <div class="wrapp-section-title section-title-center">
                        <div class="section-subtitle">То что мы умеем делать</div>
                        <h2 class="section-title">Наши услуги</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin services item -->
                    <a href="{{route('website-singleservice')}}" class="services-item services-item-modern item-style">
                        <div class="services-item-ico">
                            <i class="material-icons material-icons-outlined md-48">desktop_windows</i>
                        </div>
                        <div class="services-item-ico-bg">
                            <i class="material-icons material-icons-outlined">desktop_windows</i>
                        </div>
                        <h4 class="services-item-title">Веб-сайты</h4>
                        <div class="services-item-desc">Наши компетенции позволяют создавать сайты любой сложности: от простого сайта-визитки до сложного корпоративного портала или интернет-магазина, интегрированного с учетной системой.</div>
                    </a><!-- End services item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin services item -->
                    <a href="{{route('bots-singleservice')}}" class="services-item services-item-modern item-style">
                        <div class="services-item-ico">
                            <i class="material-icons material-icons-outlined md-48">message</i>
                        </div>
                        <div class="services-item-ico-bg">
                            <i class="material-icons material-icons-outlined">message</i>
                        </div>
                        <h4 class="services-item-title">Чат-боты</h4>
                        <div class="services-item-desc">Чат бот для бизнеса и личных целей давно стал востребованной услугой. Существует несколько видов чат-ботов, которые Вы можете заказать в нашей компании: чат-боты в мессенджерах, чат-боты в социальных сетях, чат-боты для Вашего сайта.
                        </div>
                    </a><!-- End services item -->
                </div>
                <div class="col-lg-4 col-md-12 col-12 item">
                    <!-- Begin services item -->
                    <a href="" class="services-item services-item-modern item-style">
                        <div class="services-item-ico">
                            <i class="material-icons material-icons-outlined md-48">phonelink_ring</i>
                        </div>
                        <div class="services-item-ico-bg">
                            <i class="material-icons material-icons-outlined">phonelink_ring</i>
                        </div>
                        <h4 class="services-item-title">Мобильные приложения</h4>
                        <div class="services-item-desc">Мы разрабатываем мобильные приложения, отвечающие всем требованиям и рекомендациям платформ, что обеспечивает их стабильную и безукоризненную работу.</div>
                    </a><!-- End services item -->
                </div>
            </div>
        </div>
    </div><!-- End main content -->
@endsection
