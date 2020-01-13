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
                        <li><a href="#!">404</a></li>
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
                        <div class="page-subtitle">Sorry, but the page was not found</div>
                        <h1 class="page-title page-404-title">404</h1>
                        <p class="page-desc">You may have mistyped the address or the page may have moved</p>
                    </div>
                    <div class="wrap-btn align-items-center justify-content-center">
                        <a href="/" class="btn btn-widht-ico ripple">
                            <span>Go to home page</span>
                            <svg class="btn-widht-ico-right" viewBox="0 0 13 9">
                                <use xlink:href="img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                        <a href="contact-us.html" class="btn btn-border btn-widht-ico ripple">
                            <span>Contact us</span>
                            <svg class="btn-widht-ico-right" viewBox="0 0 13 9">
                                <use xlink:href="img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End main content -->

@endsection
