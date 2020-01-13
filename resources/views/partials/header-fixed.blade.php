<div class="container">
    <div class="row flex-nowrap align-items-center justify-content-between">
        <div class="col-auto d-block d-lg-none header-fixed-col">
            <div class="main-mnu-btn">
                <span class="bar bar-1"></span>
                <span class="bar bar-2"></span>
                <span class="bar bar-3"></span>
                <span class="bar bar-4"></span>
            </div>
        </div>
        <div class="col-auto header-fixed-col">
            <!-- Begin logo -->
            <a href="/" class="logo logo-ico-widht-text" title="it-rest-service">
                <img class="lazy logo-ico" data-src="img/logo.png"  alt="">
            </a>
        </div>

        <div class="col-lg col-auto col-static header-fixed-col">
            <div class="row flex-nowrap align-items-center justify-content-end">
                <div class="col-auto header-fixed-col d-none d-lg-block col-static">
                    <!-- Begin main menu -->
                    <nav class="main-mnu">
                        <ul class="main-mnu-list">
                            <li class="main-mnu-item-has-child">
                                <a href="{{route("index")}}" data-title="Главная">
                                    <span>Главная</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route("about")}}" data-title="О компании">
                                    <span>О компании</span>
                                </a>
                            </li>
                            <li class="main-mnu-item-has-child">
                                <a href="{{route("services")}}" data-title="Наши услуги">
                                    <span>Наши услуги</span>
                                </a>
                            </li>

                            <li><a href="{{route("contactus")}}" data-title="Связь с нами"><span>Cвязь с нами</span></a></li>
                        </ul>
                    </nav><!-- End main menu -->
                </div>

                <div class="col-auto header-fixed-col col-static">
                    <!-- Begin header search -->
                    <div class="header-search">
                        <div class="header-search-ico">
                            <i class="material-icons md-22 header-search-ico-search">search</i>
                            <i class="material-icons md-22 header-search-ico-close">close</i>
                        </div>
                        <form action="#!" method="post" class="header-search-form">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-field">
                                            <label for="field-search" class="form-field-label">Search...</label>
                                            <input type="search" class="form-field-input" name="Search" value="" autocomplete="off" required="required" id="field-search">
                                            <button type="submit" class="header-search-btn"><i class="material-icons md-22">search</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- End header search -->
                </div>
                <div class="col-auto d-block d-lg-none col-static header-fixed-col">
                    <div class="header-navbar">
                        <div class="header-navbar-btn">
                            <i class="material-icons md-24">more_vert</i>
                        </div>
                        <ul class="header-navbar-content">
                            <li>
                                <a href="mailto:mail@example.com">
                                    <i class="material-icons">email</i>
                                    <span>mail@example.com</span>
                                </a>
                            </li>
                            <li>
                                <b>24/7 Support:</b>
                                <a href="#!" class="formingHrefTel">1-888-777-1234</a>
                            </li>
                            <li>
                                <a href="#сallback_popup" class="header-call-back-link сallback_popup_open">
                                    <i class="material-icons">ring_volume</i>
                                    <span>Callback</span>
                                </a>
                            </li>
                            <li>
                                <!-- Begin social links -->
                                <ul class="social-links">
                                    <li>
                                        <a href="#!" title="Facebook">
                                            <svg viewBox="0 0 320 512"><use xlink:href="img/sprite.svg#facebook-ico"></use></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" title="Instagram">
                                            <svg viewBox="0 0 448 512"><use xlink:href="img/sprite.svg#instagram-ico"></use></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" title="LinkedIn">
                                            <svg viewBox="0 0 448 512"><use xlink:href="img/sprite.svg#linkedin-in-ico"></use></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" title="Twitter">
                                            <svg viewBox="0 0 512 512"><use xlink:href="img/sprite.svg#twitter-ico"></use></svg>
                                        </a>
                                    </li>
                                </ul><!-- End social links -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
