<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>@yield('title')</title>

    <meta name="description" content="Description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">

    <link rel="icon" href="{{asset("logo.png")}}" type="image/png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i%7CMontserrat:400,400i,500,500i,600,600i,700,700i&display=swap&subset=cyrillic"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">


    <style>
        .team-item-social-links a {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-decoration: none;
        }

        .team-item-social-links a:hover {
            color: #8d3e9e;
        }

        .form-p p {
            margin-top:10px;
            font-size:12px;

        }

        .form-p p strong {
            font-family: 'Arial';
            font-weight: 800;
        }
    </style>
</head>

<body>

<main class="main" id="app">

    <div class="main-inner">

        <!-- Begin mobile main menu -->
        <nav class="mob-main-mnu">
            @include("partials.mob-main-mnu")
        </nav><!-- End mobile main menu -->

        <!-- Begin header -->
        <header class="header">
            <!-- Begin header top -->
            <nav class="header-top">
                @include("partials.header-top")
            </nav><!-- End header top -->
            <!-- Begin header fixed -->
            <nav class="header-fixed">
                @include("partials.header-fixed")
            </nav><!-- End header fixed -->
        </header><!-- End header -->

        @yield('content')

    </div>

    <footer class="footer footer-center ">
        <div class="footer-main">
            <div class="container">
                <div class="row items">
                    <div class="col-12 item">
                        <!-- Begin company info -->
                        <div class="footer-company-info">
                            <div class="footer-company-top">
                                <a href="/" class="logo logo-ico-widht-text" title="IT Rest Service">
                                    <img class="lazy logo-ico" src="/logo_it.png" alt="" style="">
                                </a>
                                <div class="footer-company-desc">
                                    <p>Мы собрали штат высокоэффективных сотрудников, которые могут реализовать
                                        проект любой сложности и окажут полный комплекс услуг.
                                        Наша компания заинтересована в том, чтобы удовлетворить потребности каждого
                                        клиента.
                                    </p>
                                </div>
                            </div>
                            <ul class="footer-social-links">
                                <li>
                                    <a href="#!" title="Facebook">
                                        <svg viewBox="0 0 320 512">
                                            <use xlink:href="/img/sprite.svg#facebook-ico"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" title="Instagram">
                                        <svg viewBox="0 0 448 512">
                                            <use xlink:href="/img/sprite.svg#instagram-ico"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" title="LinkedIn">
                                        <svg viewBox="0 0 448 512">
                                            <use xlink:href="/img/sprite.svg#linkedin-in-ico"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" title="Twitter">
                                        <svg viewBox="0 0 512 512">
                                            <use xlink:href="/img/sprite.svg#twitter-ico"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- End company info -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row justify-content-between items">
                    <div class="col-12 item">
                        <div class="copyright">© 2022 It Rest Service. All rights reserved.</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</main><!-- End main -->

<!-- Begin сallback popup -->
<div id="сallback_popup" class="popup_style popup_style_sally open_popup" style="display:none;">
    <div class="popup">
        <div class="popup_content">
            <h4 class="popup_title">Мы перезвоним Вам!</h4>
            <form action="#!" method="post" class="сallback_popup_form">
                <!-- Begin hidden Field for send form -->
                <input type="hidden" name="form_subject" value="Pop up form">
                <!-- End hidden Field for send form -->
                <div class="form-field">
                    <label for="popup-field-name" class="form-field-label">Ваше имя</label>
                    <input type="text" class="form-field-input" name="NameCallBack" value="" autocomplete="off"
                           required="required" id="popup-field-name">
                </div>
                <div class="form-field">
                    <label for="popup-field-phone" class="form-field-label">Ваш номер телефона</label>
                    <input type="tel" class="form-field-input mask-phone" name="PhoneCallBack" value=""
                           autocomplete="off" required="required" id="popup-field-phone">
                </div>
                <div class="form-btn form-btn-wide">
                    <button type="submit" class="btn ripple">Заказать звонок</button>

                </div>
                <div class="form-field form-p">
                    <p><em>Ожидайте звонок в течении <strong>10</strong> минут.</em></p>
                </div>
            </form>
        </div>
        <div class="сallback_popup_close popup_close"><i class="material-icons md-24">close</i></div>
    </div>
</div><!-- End сallback popup -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/script.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/app.js"></script>

</body>
</html>
