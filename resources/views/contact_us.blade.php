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
                        <li><a href="#!">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav><!-- End bread crumbs -->

    <!-- Begin main content -->
    <div class="main-content">
        <div class="container">
            <div class="row content-items">
                <div class="col-12">
                    <div class="wrapp-page-title">
                        <div class="page-subtitle">we are always in touch</div>
                        <h1 class="page-title">Contact Us</h1>
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 content-item">
                    <div class="contact-info section-bg">
                        <h3>Get in Touch</h3>
                        <ul class="contact-list">
                            <li>
                                <i class="material-icons md-22">location_on</i>
                                <div class="footer-contact-info">
                                    <a href="https://www.google.com/maps/place/4730+Crystal+Springs+Dr,+Los+Angeles,+CA+90027,+%D0%A1%D0%A8%D0%90/data=!4m2!3m1!1s0x80c2c08ea296b841:0x5030fc6064b8e8d1?sa=X&ved=2ahUKEwijmtvUqZvjAhXjkIsKHYNsDswQ8gEwAHoECAkQAQ">
                                        4730 Crystal Springs Dr, Los Angeles, CA
                                    </a>
                                </div>
                            </li>
                            <li>
                                <i class="material-icons md-22 footer-contact-tel">smartphone</i>
                                <div class="footer-contact-info">
                                    <a href="tel:+13239134688" class="formingHrefTel">+1 323-913-4688</a>
                                    <a href="tel:+13238884554" class="formingHrefTel">+1 323-888-4554</a>
                                </div>
                            </li>
                            <li>
                                <i class="material-icons md-22 footer-contact-email">email</i>
                                <div class="footer-contact-info">
                                    <a href="mailto:mail@example.com">mail@example.com</a>
                                    <a href="mailto:info@example.com">info@example.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-md-7 content-item">
                    <form action="#!" method="post" class="contact-form contact-form-padding">
                        <!-- Begin hidden Field for send form -->
                        <input type="hidden" name="form_subject" value="Contact form">
                        <!-- End hidden Field for send form -->
                        <div class="row gutters-default">
                            <div class="col-12">
                                <h3>Contact Form</h3>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="contact-name" class="form-field-label">Your Name</label>
                                    <input type="text" class="form-field-input" name="ContactName" value="" autocomplete="off" required="required" id="contact-name">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="contact-phone" class="form-field-label">Your Phone</label>
                                    <input type="tel" class="form-field-input mask-phone" name="ContactPhone" value="" autocomplete="off" required="required" id="contact-phone">
                                </div>
                            </div>
                            <div class="col-xl-4 col-12">
                                <div class="form-field">
                                    <label for="contact-email" class="form-field-label">Your Email</label>
                                    <input type="email" class="form-field-input" name="ContactEmail" value="" autocomplete="off" required="required" id="contact-email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-field">
                                    <label for="contact-message" class="form-field-label">Your Message</label>
                                    <textarea name="ContactMessage" class="form-field-input" id="contact-message" cols="30" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-btn">
                                    <button type="submit" class="btn btn-w240 ripple">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End main content -->

    <!-- Begin map -->
    <div class="map">
        <input type="hidden" id="map_address" name="map_address"
               value="301 S Irving Blvd Los Angeles, CA 90020"
               data-marker="img/map-marker.png">
        <div id="map_canvas"></div>
    </div><!-- End map -->


@endsection
