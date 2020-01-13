@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
    <!-- Begin bread crumbs -->
    <nav class="bread-crumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="bread-crumbs-list">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="material-icons md-18">chevron_right</i>
                        </li>
                        <li>
                            <a href="#!">Pages</a>
                            <i class="material-icons md-18">chevron_right</i>
                        </li>
                        <li><a href="#!">Brands</a></li>
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
                    <div class="wrapp-page-title page-title-center page-title-m0">
                        <h1 class="page-title">Brands</h1>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End main content -->

    <!-- Begin our customers -->
    <section class="section section-bg">
        <div class="container">
            <div class="row items">
                <div class="col-12">
                    <div class="wrapp-section-title section-title-center">
                        <div class="section-subtitle">The best</div>
                        <h2 class="section-title">Our customers</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/brands/circle.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/brands/codelab.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/brands/earth.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/brands/hexa.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/brands/lightai.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/brands/nirastate.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/brands/treva.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="img/brands/zootv.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                    </div><!-- End brands item -->
                </div>
            </div>
        </div>
    </section><!-- End our customers -->

    <!-- Begin our customers -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapp-section-title section-title-center">
                        <div class="section-subtitle">The best</div>
                        <h2 class="section-title">Our partners</h2>
                    </div>
                    <div class="brands-carusel" data-flickity='{ "imagesLoaded": true, "lazyLoad": true, "groupCells": true, "contain": true, "prevNextButtons": false }'>
                        <div class="brands-col">
                            <div class="brands-item item-style">
                                <img data-flickity-lazyload="img/brands/circle.png" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-col">
                            <div class="brands-item item-style">
                                <img data-flickity-lazyload="img/brands/codelab.png" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-col">
                            <div class="brands-item item-style">
                                <img data-flickity-lazyload="img/brands/earth.png" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-col">
                            <div class="brands-item item-style">
                                <img data-flickity-lazyload="img/brands/hexa.png" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-col">
                            <div class="brands-item item-style">
                                <img data-flickity-lazyload="img/brands/lightai.png" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-col">
                            <div class="brands-item item-style">
                                <img data-flickity-lazyload="img/brands/nirastate.png" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-col">
                            <div class="brands-item item-style">
                                <img data-flickity-lazyload="img/brands/treva.png" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-col">
                            <div class="brands-item item-style">
                                <img data-flickity-lazyload="img/brands/zootv.png" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End our customers -->

@endsection
