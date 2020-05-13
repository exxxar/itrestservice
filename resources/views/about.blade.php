@extends('layouts.main')

@section('title', 'О компании')

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
                        <li><a href="#!">О нас</a></li>
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
                        <div class="page-subtitle">ещё больше информации</div>
                        <h1 class="page-title">О нас</h1>
                    </div>
                    <div class="content">
                        <div class="img-style">
                            <img src="img/about-img.jpg" alt="">
                        </div>
{{--                        <h2>Developing High-quality Apps</h2>--}}
                        <p>It Rest Service - команда молодых и перспективных специалистов в области web-разработки.</p>
                        <p>Мы - слаженный коллектив, каждый член которого любит своё дело и постоянно совершенствует знания в своей профессиональной области. Все проекты для нас - нечто большее, чем просто работа. В первую очередь, это шаг в будущее бизнеса наших клиентов</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End main content -->

    <!-- Begin why choose us -->
    <section class="section section-bg">
        <div class="container">
            <div class="row items">
                <div class="col-12">
                    <div class="wrapp-section-title section-title-center">
                        <div class="section-subtitle">несколько причин</div>
                        <h2 class="section-title">Почему мы?</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin choose us item -->
                    <div class="advantages-item">
                        <div class="advantages-item-count">01</div>
                        <div class="advantages-item-info">
                            <h4 class="advantages-item-title">Эффективность</h4>
                            <div class="advantages-item-desc">
                                <p>Быстрая скорость обработки запроса и адекватные сроки выполнения</p>
                            </div>
                        </div>
                    </div><!-- End choose us item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin choose us item -->
                    <div class="advantages-item">
                        <div class="advantages-item-count">02</div>
                        <div class="advantages-item-info">
                            <h4 class="advantages-item-title">Соответствие цена-качество</h4>
                            <div class="advantages-item-desc">
                                <p>Повышение эффективности сайтов при оптимальном соотношении цены и качества.</p>
                            </div>
                        </div>
                    </div><!-- End choose us item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin choose us item -->
                    <div class="advantages-item">
                        <div class="advantages-item-count">03</div>
                        <div class="advantages-item-info">
                            <h4 class="advantages-item-title">Поддержка 24/7</h4>
                            <div class="advantages-item-desc">
                                <p>Для всех наших клиентов доступа оперативная техническая поддержка.</p>
                            </div>
                        </div>
                    </div><!-- End choose us item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin choose us item -->
                    <div class="advantages-item">
                        <div class="advantages-item-count">04</div>
                        <div class="advantages-item-info">
                            <h4 class="advantages-item-title">Быстрая разработка</h4>
                            <div class="advantages-item-desc">
                                <p>Быстрая разработка по методологии Agile</p>
                            </div>
                        </div>
                    </div><!-- End choose us item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin choose us item -->
                    <div class="advantages-item">
                        <div class="advantages-item-count">05</div>
                        <div class="advantages-item-info">
                            <h4 class="advantages-item-title">Демо-версии проектов</h4>
                            <div class="advantages-item-desc">
                                <p>Пробуй демо-версию проекта абсолютно бесплатно</p>
                            </div>
                        </div>
                    </div><!-- End choose us item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin choose us item -->
                    <div class="advantages-item">
                        <div class="advantages-item-count">06</div>
                        <div class="advantages-item-info">
                            <h4 class="advantages-item-title">Высокая производительность</h4>
                            <div class="advantages-item-desc">
                                <p>Все наши продукты имеют высокую практичность, что позволяет пользователям легко управлять приложениями.</p>
                            </div>
                        </div>
                    </div><!-- End choose us item -->
                </div>
            </div>
        </div>
    </section><!-- End why choose us -->

    <!-- Begin our customers -->
    <section class="section">
        <div class="container">
            <div class="row items">
                <div class="col-12">
                    <div class="wrapp-section-title section-title-center">
                        <div class="section-subtitle">Самые лучшие</div>
                        <h2 class="section-title">Наши клиенты</h2>
                        <p class="section-desc">Нам выпала честь работать с десятками перспективных компаний и талантливых предпринимателей</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/lotus.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/fastoran.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/ivamed.svg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/autodon.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/isushi.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/hutplace.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/diner.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/skidka.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
            </div>
        </div>
    </section><!-- End our customers -->

@endsection
