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
                            <a href="services.html">Services</a>
                            <i class="material-icons md-18">chevron_right</i>
                        </li>
                        <li><a href="#!">Corporate Solutions</a></li>
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
                        <h1 class="page-title">Corporate Solutions</h1>
                    </div>
                    <div class="content">
                        <div class="img-style">
                            <img src="img/subheader-corporate.png" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                        <h5>Key Features</h5>
                        <ul>
                            <li>High usability</li>
                            <li>Improved performance</li>
                            <li>Customizable interface</li>
                            <li>Crossplatform support</li>
                        </ul>
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
                        <h2 class="page-title">Pricing</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin pricing item -->
                    <div class="pricing-item item-style">
                        <header class="pricing-item-header">
                            <div class="pricing-item-title">Basic</div>
                            <div class="pricing-item-price"><small>from</small> 899$</div>
                        </header>
                        <div class="pricing-item-content">
                            <ul class="pricing-item-list">
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Concept development
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    UI/UX design
                                </li>
                                <li>
                                    <i class="material-icons md-24">check</i>
                                    Configuration management
                                </li>
                                <li>
                                    <i class="material-icons md-24">check</i>
                                    Software quality assurance
                                </li>
                                <li>
                                    <i class="material-icons md-24">check</i>
                                    App integration
                                </li>
                            </ul>
                        </div>
                        <footer class="pricing-item-footer">
                            <a href="#!" class="btn btn-large btn-widht-ico btn-wide ripple">
                                Get Starter
                                <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
                            </a>
                        </footer>
                    </div><!-- End pricing item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin pricing item -->
                    <div class="pricing-item item-style">
                        <div class="pricing-item-badge">Popular</div>
                        <header class="pricing-item-header">
                            <div class="pricing-item-title">Optimal</div>
                            <div class="pricing-item-price"><small>from</small> 1 500$</div>
                        </header>
                        <div class="pricing-item-content">
                            <ul class="pricing-item-list">
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Concept development
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    UI/UX design
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Configuration management
                                </li>
                                <li>
                                    <i class="material-icons md-24">check</i>
                                    Software quality assurance
                                </li>
                                <li>
                                    <i class="material-icons md-24">check</i>
                                    App integration
                                </li>
                            </ul>
                        </div>
                        <footer class="pricing-item-footer">
                            <a href="#!" class="btn btn-large btn-widht-ico btn-wide ripple">
                                Get Starter
                                <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
                            </a>
                        </footer>
                    </div><!-- End pricing item -->
                </div>
                <div class="col-lg-4 col-md-12 col-12 item">
                    <!-- Begin pricing item -->
                    <div class="pricing-item item-style">
                        <header class="pricing-item-header">
                            <div class="pricing-item-title">Ultimate</div>
                            <div class="pricing-item-price"><small>from</small> 2 000$</div>
                        </header>
                        <div class="pricing-item-content">
                            <ul class="pricing-item-list">
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Concept development
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    UI/UX design
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Configuration management
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    Software quality assurance
                                </li>
                                <li class="active">
                                    <i class="material-icons md-24">check</i>
                                    App integration
                                </li>
                            </ul>
                        </div>
                        <footer class="pricing-item-footer">
                            <a href="#!" class="btn btn-large btn-widht-ico btn-wide ripple">
                                Get Starter
                                <svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg>
                            </a>
                        </footer>
                    </div><!-- End pricing item -->
                </div>
            </div>
        </div>
    </section><!-- End Pricing -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapp-section-title section-title-center">
                        <div class="section-subtitle">Liked the service?</div>
                        <h2 class="section-title">Order service</h2>
                    </div>
                    <form action="#!" method="post" class="order-form">
                        <!-- Begin hidden Field for send form -->
                        <input type="hidden" name="form_subject" value="Order service">
                        <!-- End hidden Field for send form -->
                        <div class="row gutters-20 justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="order-name" class="form-field-label">Your Name</label>
                                    <input type="text" class="form-field-input" name="orderName" value="" autocomplete="off" required="required" id="order-name">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="order-phone" class="form-field-label">Your Phone</label>
                                    <input type="tel" class="form-field-input mask-phone" name="orderPhone" value="" autocomplete="off" required="required" id="order-phone">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="form-btn form-btn-wide">
                                    <button type="submit" class="btn btn-w240 ripple">Order</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-bg">
        <div class="container">
            <div class="row items">
                <div class="col-12">
                    <div class="wrapp-page-title page-title-center">
                        <h1 class="page-title">All Services</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin services item -->
                    <div class="services-image-item">
                        <div class="services-image-item-card services-image-item-card-front">
                            <img data-src="img/services-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="services-image-item-card services-image-item-card-back">
                            <div class="services-image-item-card-center">
                                <h5 class="services-image-item-title">Corporate Solution</h5>
                                <p class="services-image-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita velit omnis quas officia dolore repudiandae? Dolorum, sed dolor? Incidunt, dolor.</p>
                                <div class="wrapp-btn-circl-arrow justify-content-center">
                                    <a href="single-services.html" class="btn-circl-arrow btn-circl-arrow-white">
                                        <span class="btn-circl-arrow-text">Go to service</span>
                                        <svg viewBox="0 0 13 9" width="13px" height="9px">
                                            <use xlink:href="img/sprite.svg#arrow-right"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End services item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin services item -->
                    <div class="services-image-item">
                        <div class="services-image-item-card services-image-item-card-front">
                            <img data-src="img/services-img-2.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="services-image-item-card services-image-item-card-back">
                            <div class="services-image-item-card-center">
                                <h5 class="services-image-item-title">Call Center Solutions</h5>
                                <p class="services-image-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita velit omnis quas officia dolore repudiandae? Dolorum, sed dolor? Incidunt, dolor.</p>
                                <div class="wrapp-btn-circl-arrow justify-content-center">
                                    <a href="single-services.html" class="btn-circl-arrow btn-circl-arrow-white">
                                        <span class="btn-circl-arrow-text">Go to service</span>
                                        <svg viewBox="0 0 13 9" width="13px" height="9px">
                                            <use xlink:href="img/sprite.svg#arrow-right"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End services item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin services item -->
                    <div class="services-image-item">
                        <div class="services-image-item-card services-image-item-card-front">
                            <img data-src="img/services-img-3.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="services-image-item-card services-image-item-card-back">
                            <div class="services-image-item-card-center">
                                <h5 class="services-image-item-title">Cloud Development</h5>
                                <p class="services-image-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita velit omnis quas officia dolore repudiandae? Dolorum, sed dolor? Incidunt, dolor.</p>
                                <div class="wrapp-btn-circl-arrow justify-content-center">
                                    <a href="single-services.html" class="btn-circl-arrow btn-circl-arrow-white">
                                        <span class="btn-circl-arrow-text">Go to service</span>
                                        <svg viewBox="0 0 13 9" width="13px" height="9px">
                                            <use xlink:href="img/sprite.svg#arrow-right"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End services item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin services item -->
                    <div class="services-image-item">
                        <div class="services-image-item-card services-image-item-card-front">
                            <img data-src="img/services-img-4.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="services-image-item-card services-image-item-card-back">
                            <div class="services-image-item-card-center">
                                <h5 class="services-image-item-title">IOS/MacOS Apps</h5>
                                <p class="services-image-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita velit omnis quas officia dolore repudiandae? Dolorum, sed dolor? Incidunt, dolor.</p>
                                <div class="wrapp-btn-circl-arrow justify-content-center">
                                    <a href="single-services.html" class="btn-circl-arrow btn-circl-arrow-white">
                                        <span class="btn-circl-arrow-text">Go to service</span>
                                        <svg viewBox="0 0 13 9" width="13px" height="9px">
                                            <use xlink:href="img/sprite.svg#arrow-right"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End services item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin services item -->
                    <div class="services-image-item">
                        <div class="services-image-item-card services-image-item-card-front">
                            <img data-src="img/services-img-5.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="services-image-item-card services-image-item-card-back">
                            <div class="services-image-item-card-center">
                                <h5 class="services-image-item-title">Android Applications</h5>
                                <p class="services-image-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita velit omnis quas officia dolore repudiandae? Dolorum, sed dolor? Incidunt, dolor.</p>
                                <div class="wrapp-btn-circl-arrow justify-content-center">
                                    <a href="single-services.html" class="btn-circl-arrow btn-circl-arrow-white">
                                        <span class="btn-circl-arrow-text">Go to service</span>
                                        <svg viewBox="0 0 13 9" width="13px" height="9px">
                                            <use xlink:href="img/sprite.svg#arrow-right"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End services item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin services item -->
                    <div class="services-image-item">
                        <div class="services-image-item-card services-image-item-card-front">
                            <img data-src="img/services-img-6.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="services-image-item-card services-image-item-card-back">
                            <div class="services-image-item-card-center">
                                <h5 class="services-image-item-title">UX And Design</h5>
                                <p class="services-image-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita velit omnis quas officia dolore repudiandae? Dolorum, sed dolor? Incidunt, dolor.</p>
                                <div class="wrapp-btn-circl-arrow justify-content-center">
                                    <a href="single-services.html" class="btn-circl-arrow btn-circl-arrow-white">
                                        <span class="btn-circl-arrow-text">Go to service</span>
                                        <svg viewBox="0 0 13 9" width="13px" height="9px">
                                            <use xlink:href="img/sprite.svg#arrow-right"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End services item -->
                </div>
            </div>
        </div>
    </section>

@endsection
