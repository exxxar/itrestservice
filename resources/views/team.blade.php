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
                        <li><a href="#!">Our team</a></li>
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
                        <div class="page-subtitle">Who we are</div>
                        <h1 class="page-title">Meet The Team</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 item">
                    <!-- Begin team item -->
                    <div class="team-item item-style">
                        <div class="team-item-img">
                            <img data-src="img/team-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="team-item-info">
                            <h4 class="team-item-title">Mary Lee</h4>
                            <div class="team-item-position">Software Developer</div>
                            <ul class="team-item-social-links">
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
                            </ul>
                        </div>
                    </div><!-- End team item -->
                </div>
                <div class="col-lg-3 col-sm-6 col-12 item">
                    <!-- Begin team item -->
                    <div class="team-item item-style">
                        <div class="team-item-img">
                            <img data-src="img/team-img-2.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="team-item-info">
                            <h4 class="team-item-title">Ryan Wilson</h4>
                            <div class="team-item-position">CEO</div>
                            <ul class="team-item-social-links">
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
                            </ul>
                        </div>
                    </div><!-- End team item -->
                </div>
                <div class="col-lg-3 col-sm-6 col-12 item">
                    <!-- Begin team item -->
                    <div class="team-item item-style">
                        <div class="team-item-img">
                            <img data-src="img/team-img-3.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="team-item-info">
                            <h4 class="team-item-title">Sam Robinson</h4>
                            <div class="team-item-position">Senior Developer</div>
                            <ul class="team-item-social-links">
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
                            </ul>
                        </div>
                    </div><!-- End team item -->
                </div>
                <div class="col-lg-3 col-sm-6 col-12 item">
                    <!-- Begin team item -->
                    <div class="team-item item-style">
                        <div class="team-item-img">
                            <img data-src="img/team-img-4.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="team-item-info">
                            <h4 class="team-item-title">Jill Peterson</h4>
                            <div class="team-item-position">Senior Developer</div>
                            <ul class="team-item-social-links">
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
                            </ul>
                        </div>
                    </div><!-- End team item -->
                </div>
                <div class="col-lg-3 col-sm-6 col-12 item">
                    <!-- Begin team item -->
                    <div class="team-item item-style">
                        <div class="team-item-img">
                            <img data-src="img/team-img-2.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="team-item-info">
                            <h4 class="team-item-title">Ryan Wilson</h4>
                            <div class="team-item-position">CEO</div>
                            <ul class="team-item-social-links">
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
                            </ul>
                        </div>
                    </div><!-- End team item -->
                </div>
                <div class="col-lg-3 col-sm-6 col-12 item">
                    <!-- Begin team item -->
                    <div class="team-item item-style">
                        <div class="team-item-img">
                            <img data-src="img/team-img-4.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="team-item-info">
                            <h4 class="team-item-title">Jill Peterson</h4>
                            <div class="team-item-position">Senior Developer</div>
                            <ul class="team-item-social-links">
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
                            </ul>
                        </div>
                    </div><!-- End team item -->
                </div>
                <div class="col-lg-3 col-sm-6 col-12 item">
                    <!-- Begin team item -->
                    <div class="team-item item-style">
                        <div class="team-item-img">
                            <img data-src="img/team-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="team-item-info">
                            <h4 class="team-item-title">Mary Lee</h4>
                            <div class="team-item-position">Software Developer</div>
                            <ul class="team-item-social-links">
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
                            </ul>
                        </div>
                    </div><!-- End team item -->
                </div>
                <div class="col-lg-3 col-sm-6 col-12 item">
                    <!-- Begin team item -->
                    <div class="team-item item-style">
                        <div class="team-item-img">
                            <img data-src="img/team-img-3.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                        </div>
                        <div class="team-item-info">
                            <h4 class="team-item-title">Sam Robinson</h4>
                            <div class="team-item-position">Senior Developer</div>
                            <ul class="team-item-social-links">
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
                            </ul>
                        </div>
                    </div><!-- End team item -->
                </div>
            </div>
        </div>
    </div><!-- End main content -->

@endsection
