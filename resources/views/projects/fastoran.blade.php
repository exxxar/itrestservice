@extends('layouts.main')

@section('title', 'Fastoran')

@section('content')
    <img
        src="/img/right-blob2.png"
        class="hidden-sm-and-down"
        style="position: absolute; top: 16vh; right: 0; height: 500px; z-index: 0;"
    >
    <img
        src="/img/left-blob3.png"
        class="hidden-sm-and-down"
        style="position: absolute; top: 40vh; left: 0; height: 600px; z-index: 0;"
    >
    <div style="height: 90vh">
        <div class="row justify-content-center align-items-center mt-5">
            <img src="/img/fastoran-project.png" class="mr-auto ml-auto">
        </div>
    </div>
    <!-- Begin main content -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapp-page-title page-title-center">
{{--                        <div class="page-subtitle">ещё больше информации</div>--}}
                        <h1 class="page-title">Fastoran</h1>
                    </div>
                    <div class="content text-center">
                        <div class="img-style">
                            <img src="img/about-img.jpg" alt="">
                        </div>
                        <div class="row justify-content-center">
                            <p>Служба доставки с ресторанов города Донецк</p>
                        </div>

                    </div>
                </div>
                <div class="col-12">

                        <div class="pricing-item-content" style="height: 70%; margin-bottom: 20px;">
                            <ul class="pricing-item-list">
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Пользователи могут заказать доставку из 10 заведений, ознакомиться с которыми можно в меню товаров.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Есть возможность произвольного заказа из магазинов продуктов, цветов и многое другое.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Разнообразный штат доставщиков: пешие, велосипедисты, автомобилисты.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Реализована функция автоматического предельно точного расчета дистанции доставки.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Простая регистрация пользователя и быстрая смс-рассылка.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Доступно приложение для Android.
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Доступен режим PWA (Progressive Web Applications).
                                </li>
                            </ul>
                        </div>

                </div>
            </div>
        </div>
    </div><!-- End main content -->
@endsection
