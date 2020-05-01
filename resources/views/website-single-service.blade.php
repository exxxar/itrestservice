@extends('layouts.main')

@section('title', 'Услуга Веб-сайты')

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
                        <li><a href="#!">Услуга Веб-сайты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav><!-- End bread crumbs -->

    <!-- Begin main content -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapp-page-title page-title-center">
                        <h1 class="page-title">Услуга Веб-сайты</h1>
                    </div>
                    <div class="content">
                        <div class="img-style">
                            <img src="img/4.jpg" alt="">
                        </div>
                        <p>Наши компетенции позволяют создавать сайты любой сложности: от простого сайта-визитки до сложного корпоративного портала или интернет-магазина, интегрированного с учетной системой.</p>
{{--                       <h5>Key Features</h5>--}}
{{--                        <ul>--}}
{{--                            <li>High usability</li>--}}
{{--                            <li>Improved performance</li>--}}
{{--                            <li>Customizable interface</li>--}}
{{--                            <li>Crossplatform support</li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End main content -->

    <!-- Begin Pricing -->
    <section class="section section-bg">
        <div class="container">
            <div class="row items">
                <div class="col-12">
                    <div class="wrapp-page-title page-title-center">
                        <h2 class="page-title">Пакеты</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin pricing item -->
                    <div class="pricing-item item-style">
                        <header class="pricing-item-header"  >
                            <div class="pricing-item-title">Базовый</div>
                            <div class="pricing-item-price"><small>от</small> 7 000 руб</div>
                        </header>
                        <div class="pricing-item-content" style="height: 70%;margin-bottom: 20px;">
                            <ul class="pricing-item-list">
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    создание и дизайн одностраничного сайта с услугами компании (или товарами).
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    создание простого телеграм бота с возможностью оформления заказов.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    на выбор одна из систем лояльности.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    техническая поддержка 1 месяц.
                                </li>
{{--                                <li>--}}
{{--                                    <i class="material-icons md-24">check</i>--}}
{{--                                    Software quality assurance--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="material-icons md-24">check</i>--}}
{{--                                    App integration--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                        <footer class="pricing-item-footer"style="height: 12%">
                            <a href="{{route("contactus")}}" class="btn btn-large btn-widht-ico btn-wide ripple" style="position: absolute; bottom: 0">
                                 Заказать
                                <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
                            </a>
                        </footer>
                    </div><!-- End pricing item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin pricing item -->
                    <div class="pricing-item item-style">
                        <div class="pricing-item-badge">Популярный</div>
                        <header class="pricing-item-header"  >
                            <div class="pricing-item-title">БИЗНЕС</div>
                            <div class="pricing-item-price"><small>от</small> 15 000 руб</div>
                        </header>
                        <div class="pricing-item-content" style="height: 70%;margin-bottom: 20px;">
                            <ul class="pricing-item-list">
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    создание и дизайн одностраничного сайта с услугами компании (или товарами).
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    создание админ панели для управления системой.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    создание простого бота в телеграм с выводом товаров и возможностью оформления заказов + на выбор несколько систем лояльности.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    ведение технической документации по проекту.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    базовая настройка сео-продвижения.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    техническая поддержка 3 месяца.
                                </li>
                            </ul>
                        </div>
                        <footer class="pricing-item-footer" style="height: 12%">
                            <a href="{{route("contactus")}}" class="btn btn-large btn-widht-ico btn-wide ripple" style="position: absolute; bottom: 0">
                                 Заказать
                                <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
                            </a>
                        </footer>
                    </div><!-- End pricing item -->
                </div>
                <div class="col-lg-4 col-md-12 col-12 item">
                    <!-- Begin pricing item -->
                    <div class="pricing-item item-style">
                        <header class="pricing-item-header"  >
                            <div class="pricing-item-title">МАКСИМУМ</div>
                            <div class="pricing-item-price"><small>от</small> 25 000 руб</div>
                        </header>
                        <div class="pricing-item-content" style="height: 70%; margin-bottom: 20px;">
                            <ul class="pricing-item-list">
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    создание и дизайн одностраничного и многостраничного сайта с услугами компании (или товарами).
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    создание админ панели для управления системой и личного кабинета пользователя.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    подключение сrm системы.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    ведение технической документации.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    подготовка рекламной компании в одном из поисковиков.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    создание бота в телеграм с отображением всех товаров и услуг компании с сайта + несколько систем лояльности.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    техническая поддержка 3 месяца
                                </li>
                            </ul>
                        </div>
                        <footer class="pricing-item-footer" style="height: 12%">
                            <a href="{{route("contactus")}}" class="btn btn-large btn-widht-ico btn-wide ripple" style="position: absolute; bottom: 0">
                                 Заказать
                                <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
                            </a>
                        </footer>
                    </div><!-- End pricing item -->
                </div>
            </div>
        </div>
    </section><!-- End Pricing -->

{{--    <section class="section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="wrapp-section-title section-title-center">--}}
{{--                        <div class="section-subtitle">Liked the service?</div>--}}
{{--                        <h2 class="section-title">Order service</h2>--}}
{{--                    </div>--}}
{{--                    <form action="#!" method="post" class="order-form">--}}
{{--                        <!-- Begin hidden Field for send form -->--}}
{{--                        <input type="hidden" name="form_subject" value="Order service">--}}
{{--                        <!-- End hidden Field for send form -->--}}
{{--                        <div class="row gutters-20 justify-content-center">--}}
{{--                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">--}}
{{--                                <div class="form-field">--}}
{{--                                    <label for="order-name" class="form-field-label">Your Name</label>--}}
{{--                                    <input type="text" class="form-field-input" name="orderName" value="" autocomplete="off" required="required" id="order-name">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">--}}
{{--                                <div class="form-field">--}}
{{--                                    <label for="order-phone" class="form-field-label">Your Phone</label>--}}
{{--                                    <input type="tel" class="form-field-input mask-phone" name="orderPhone" value="" autocomplete="off" required="required" id="order-phone">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-4 col-12">--}}
{{--                                <div class="form-btn form-btn-wide">--}}
{{--                                    <button type="submit" class="btn btn-w240 ripple">Order</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="section section-bg">
        <div class="container">
            <div class="row items">
                <div class="col-12">
                    <div class="wrapp-page-title page-title-center">
                        <h1 class="page-title">Все услуги</h1>
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
                    <a href="{{route('singleservice')}}" class="services-item services-item-modern item-style">
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
    </section>

@endsection
