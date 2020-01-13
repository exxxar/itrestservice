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
                        <li><a href="#!">Services</a></li>
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
                    <div class="wrapp-page-title page-title-center">
                        <div class="page-subtitle">Areas what we serv</div>
                        <h1 class="page-title">Our Services</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin services item -->
                    <a href="single-services.html" class="services-item item-style">
                        <div class="services-item-ico">
                            <i class="material-icons material-icons-outlined md-48">settings</i>
                        </div>
                        <div class="services-item-ico-bg">
                            <i class="material-icons material-icons-outlined">settings</i>
                        </div>
                        <h4 class="services-item-title">Corporate Solution</h4>
                        <div class="services-item-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                            in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</div>
                    </a><!-- End services item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin services item -->
                    <a href="single-services.html" class="services-item item-style">
                        <div class="services-item-ico">
                            <i class="material-icons material-icons-outlined md-48">perm_phone_msg</i>
                        </div>
                        <div class="services-item-ico-bg">
                            <i class="material-icons material-icons-outlined">perm_phone_msg</i>
                        </div>
                        <h4 class="services-item-title">Call Center Solutions</h4>
                        <div class="services-item-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                            in a piece of classical Latin literature from 45 BC, making it.</div>
                    </a><!-- End services item -->
                </div>
                <div class="col-lg-4 col-md-12 col-12 item">
                    <!-- Begin services item -->
                    <a href="single-services.html" class="services-item item-style">
                        <div class="services-item-ico">
                            <i class="material-icons material-icons-outlined md-48">cloud_download</i>
                        </div>
                        <div class="services-item-ico-bg">
                            <i class="material-icons material-icons-outlined">cloud_download</i>
                        </div>
                        <h4 class="services-item-title">Cloud Development</h4>
                        <div class="services-item-desc">There are many variations of passages of Lorem Ipsum available, but the majority
                            have suffered alteration in some form, by injected humour, or randomised word.</div>
                    </a><!-- End services item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin services item -->
                    <a href="single-services.html" class="services-item item-style">
                        <div class="services-item-ico">
                            <i class="material-icons material-icons-outlined md-48">laptop_mac</i>
                        </div>
                        <div class="services-item-ico-bg">
                            <i class="material-icons material-icons-outlined">laptop_mac</i>
                        </div>
                        <h4 class="services-item-title">IOS/MacOS Apps</h4>
                        <div class="services-item-desc">Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</div>
                    </a><!-- End services item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin services item -->
                    <a href="single-services.html" class="services-item item-style">
                        <div class="services-item-ico">
                            <i class="material-icons material-icons-outlined md-48">phone_android</i>
                        </div>
                        <div class="services-item-ico-bg">
                            <i class="material-icons material-icons-outlined">phone_android</i>
                        </div>
                        <h4 class="services-item-title">Android Applications</h4>
                        <div class="services-item-desc">Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit.</div>
                    </a><!-- End services item -->
                </div>
                <div class="col-lg-4 col-md-12 col-12 item">
                    <!-- Begin services item -->
                    <a href="single-services.html" class="services-item item-style">
                        <div class="services-item-ico">
                            <i class="material-icons material-icons-outlined md-48">tv</i>
                        </div>
                        <div class="services-item-ico-bg">
                            <i class="material-icons material-icons-outlined">tv</i>
                        </div>
                        <h4 class="services-item-title">UX And Design</h4>
                        <div class="services-item-desc">Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.</div>
                    </a><!-- End services item -->
                </div>
            </div>
        </div>
    </div><!-- End main content -->
@endsection
