@extends('layouts.main')

@section('title', 'Свяжитесь с нами')

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
                        <li><a href="#!">Свяжитесь с нами</a></li>
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
                        <div class="page-subtitle">мы всегда на связи</div>
                        <h1 class="page-title">Свяжитесь с нами</h1>
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 content-item">
                    <div class="contact-info section-bg">
                        <h3>Связаться</h3>
                        <ul class="contact-list">
                            <li>
                                <i class="material-icons md-22">location_on</i>
                                <div class="footer-contact-info">
                                    <a href="https://www.google.com/maps/place/%D1%83%D0%BB.+50-%D0%BB%D0%B5%D1%82%D0%B8%D1%8F+%D0%A1%D0%A1%D0%A1%D0%A0,+144%2F3,+%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA,+%D0%94%D0%BE%D0%BD%D0%B5%D1%86%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0,+83000/@48.0074449,37.8093354,17z/data=!3m1!4b1!4m5!3m4!1s0x40e09045c72a4a63:0xac96c5ea5806bb2e!8m2!3d48.0074449!4d37.8115241">
                                        г. Донецк, ул. 50-летия СССР, 144/3
                                    </a>
                                </div>
                            </li>
                            <li>
                                <i class="material-icons md-22 footer-contact-tel">smartphone</i>
                                <div class="footer-contact-info">
                                    <a href="tel:+38071432-06-61" class="formingHrefTel">+38 (071) 432-06-61</a>
{{--                                    <a href="tel:+13238884554" class="formingHrefTel">+1 323-888-4554</a>--}}
                                </div>
                            </li>
                            <li>
                                <i class="material-icons md-22 footer-contact-email">email</i>
                                <div class="footer-contact-info">
                                    <a href="mailto:mail@example.com">business@it-rest-service.ru</a>
{{--                                    <a href="mailto:info@example.com">info@example.com</a>--}}
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
                                <h3>Форма обратной связи</h3>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="contact-name" class="form-field-label">Ваше Имя</label>
                                    <input type="text" class="form-field-input" name="ContactName" value="" autocomplete="off" required="required" id="contact-name">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="contact-phone" class="form-field-label">Ваш телефон</label>
                                    <input type="tel" class="form-field-input mask-phone" name="ContactPhone" value="" autocomplete="off" required="required" id="contact-phone">
                                </div>
                            </div>
                            <div class="col-xl-4 col-12">
                                <div class="form-field">
                                    <label for="contact-email" class="form-field-label">Ваш Email</label>
                                    <input type="email" class="form-field-input" name="ContactEmail" value="" autocomplete="off" required="required" id="contact-email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-field">
                                    <label for="contact-message" class="form-field-label">Ваше сообщение</label>
                                    <textarea name="ContactMessage" class="form-field-input" id="contact-message" cols="30" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-btn">
                                    <button type="submit" class="btn btn-w240 ripple">Отправить</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End main content -->

    <!-- Begin map -->
{{--    <div class="map">--}}
{{--        <input type="hidden" id="map_address" name="map_address"--}}
{{--               value="г. Донецк, ул. 50-летия СССР, 144/3"--}}
{{--               data-marker="img/map-marker.png">--}}
{{--        <div id="map_canvas"></div>--}}
{{--    </div><!-- End map -->--}}


@endsection
