@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
    <!-- Begin main content -->
    <div class="main-content comming-soon section-bg lazy" data-src="img/main-banner-img1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapp-page-title page-title-center">
                        <h1 class="page-title">We’re getting ready to launch in</h1>
                    </div>
                    <div class="wrapp-countdown">
                        <div id="countdown" class="countdown" data-dedline="January 01 2021 00:00:00 GMT+0300">
                            <div class="countdown-number item-style">
                                <span class="days countdown-time">00</span>
                                <span class="countdown-text">Days</span>
                            </div>
                            <div class="countdown-number item-style">
                                <span class="hours countdown-time">00</span>
                                <span class="countdown-text">Hours</span>
                            </div>
                            <div class="countdown-number item-style">
                                <span class="minutes countdown-time">00</span>
                                <span class="countdown-text">Minutes</span>
                            </div>
                            <div class="countdown-number item-style">
                                <span class="seconds countdown-time">00</span>
                                <span class="countdown-text">Seconds</span>
                            </div>
                        </div>
                        <div id="deadline-message" class="deadline-message">
                            Time is up!
                        </div>
                    </div>
                    <div class="form-center">
                        <form action="#!" method="post" class="comming-soon-form">
                            <h5 class="title-center">Stay tuned and subscribe to our newsletter</h5>
                            <div class="row gutters-20 justify-content-center">
                                <div class="col-md col-12">
                                    <div class="form-field">
                                        <label for="comming-soon-email" class="form-field-label">Your Email</label>
                                        <input type="email" class="form-field-input" name="commingSoonEmail" value="" autocomplete="off" required="required" id="comming-soon-email">
                                    </div>
                                </div>
                                <div class="col-md-auto col-12">
                                    <div class="form-btn form-btn-wide">
                                        <button type="submit" class="btn btn-w240 ripple">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End main content -->
@endsection
