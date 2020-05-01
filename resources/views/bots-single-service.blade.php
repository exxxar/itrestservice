@extends('layouts.main')

@section('title', 'Услуга Чат-боты')

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
                        <li><a href="#!">Услуга Чат-боты</a></li>
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
                        <h1 class="page-title">Услуга Чат-боты</h1>
                    </div>
                    <div class="content">
                        <div class="img-style">
                            <img src="img/2.jpg" alt="">
                        </div>
                        <p>Чат бот для бизнеса и личных целей давно стал востребованной услугой. Существует несколько видов чат-ботов, которые Вы можете заказать в нашей компании: чат-боты в мессенджерах, чат-боты в социальных сетях, чат-боты для Вашего сайта.</p>
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
                        <h2 class="page-title">Боты</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin pricing item -->
                    <div class="pricing-item item-style">
                        <header class="pricing-item-header"  >
                            <div class="pricing-item-title">ИНФОРМАЦИОННЫЙ</div>
                            <div class="pricing-item-price"><small>от</small> 6 000 руб</div>
                        </header>
                        <div class="pricing-item-content" style="height: 70%;margin-bottom: 20px;">
                            <ul class="pricing-item-list">
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Личная маркетинговая площадка на базе мессенджера Telegram.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Индивидуальный маркетинговый кабинет для учета различного уровня статистики.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Не ограниченная рассылка всей необходимой информацию своим подписчикам в одно действие.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Возможность иметь портрет целевой аудитории (подписчиков) по указанным Вами характеристикам через встроенную анкету.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    5 000 рублей стоимость написания Telegram-бота
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    От 1 000 рублей ежемесячное обслуживание.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Дополнительные функции по Вашему желанию за дополнительную плату.
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
{{--                        <div class="pricing-item-badge">Популярный</div>--}}
                        <header class="pricing-item-header"  >
                            <div class="pricing-item-title">ИНФОРМАЦИОННЫЙ + СИСТЕМА ЛОЯЛЬНОСТИ</div>
                            <div class="pricing-item-price"><small>от</small> 6 000 руб</div>
                        </header>
                        <div class="pricing-item-content" style="height: 70%;margin-bottom: 20px;">
                            <ul class="pricing-item-list">
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Личная маркетинговая площадка на базе мессенджера Telegram.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Индивидуальный маркетинговый кабинет для учета различного уровня статистики.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Не ограниченная рассылка всей необходимой информацию своим подписчикам в одно действие.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Возможность иметь портрет целевой аудитории (подписчиков) по указанным Вами характеристикам через встроенную анкету.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Активное «сарафанное радио» Ваших товаров и услуг, используя различные инструменты, встроенные в Ваш бот:
                                    • индивидуальные скидки;
                                    • многоуровневый Cashback Вашим клиентам;
                                    • система достижений и призов;
                                    • промокоды и розыгрыши;
                                    • увеличение охватов Ваших интернет-ресурсов и социальных сетей.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    3 000 рублей стоимость написания Telegram-бота.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    От 3 000 рублей ежемесячное обслуживание, в зависимости от выбора инструментов.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Дополнительные функции по Вашему желанию за дополнительную плату.
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
                            <div class="pricing-item-title">МАГАЗИН</div>
                            <div class="pricing-item-price"><small>от</small> 13 000 руб</div>
                        </header>
                        <div class="pricing-item-content" style="height: 70%; margin-bottom: 20px;">
                            <ul class="pricing-item-list">
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Личная маркетинговая площадка на базе мессенджера Telegram.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Индивидуальный маркетинговый кабинет для учета различного уровня статистики.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Не ограниченная рассылка всей необходимой информацию своим подписчикам в одно действие.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Возможность иметь портрет целевой аудитории (подписчиков) по указанным Вами характеристикам через встроенную анкету.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Активное «сарафанное радио» Ваших товаров и услуг, используя различные инструменты, встроенные в Ваш бот:
                                    • индивидуальные скидки;
                                    • многоуровневый Cashback Вашим клиентам;
                                    • система достижений и призов;
                                    • промокоды и розыгрыши;
                                    • увеличение охватов Ваших интернет-ресурсов и социальных сетей.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Полноценный интернет-магазин в Вашем телефоне.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    10 000 рублей стоимость написания.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    От 3 000 рублей ежемесячное обслуживание, в зависимости от выбора инструментов.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Дополнительные функции по Вашему желанию за дополнительную плату.
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
    </section>

@endsection
