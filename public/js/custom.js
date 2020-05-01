(function() {

    "use strict";

    var app = {

        init: function() {

            //=== lazy loading effect ===\\
            this.lazyLoading();

            this.setUpListeners();

            //=== Custom scripts ===\\
            this.appendMfBg();
            this.appendBtnTop();
            this.formingHrefTel();
            this.contentTable();
            this.clockCountDown();
            this.detectIE();

            //=== Plugins ===\\
            this.autoSizeTextarea();
            this.iCookies();
            this.device();
            this.popUp();
            this.lightGallery();
            this.scrollToFixed();
            this.carousels();
            this.forms();
            this.phoneMask();
            this.isotopeProjects();
            this.isotopeGallery();
            this.isotopeGalleryMasonry();
            this.spincrement();

        },

        OPTIONSCOOCIES: {
            title: 'Cookies',
            // message: 'We use cookies to understand how you use our site, to personalize content and to improve your experience. By continuing to use our site, you accept our use of cookies and revised.',
            message: 'Мы используем cookie, чтобы понять, как вы используете наш сайт, персонализировать контент и улучшить ваш опыт. Продолжая использовать наш сайт, вы соглашаетесь на использование нами файлов cookie.',
            delay: 600,
            expires: 30,
            onAccept: function () {
                var myPreferences = $.fn.ihavecookies.cookie();
            },
            moreInfoLabel: '',
            uncheckBoxes: true,
            advancedBtnLabel: '',
        },

        setUpListeners: function() {

            //=== Ripple effect for buttons ===\\
            $(".ripple").on("click", this.btnRipple);

            //=== Header search ===\\
            // Header search open
            $(".header-search-ico-search").on("click", this.headerSearchOpen);
            // Header search close \\
            $(".header-search-ico-close").on("click", this.headerSearchClose);
            // Header search close not on this element \\
            $(document).on("click", this.headerSearchCloseNotEl);

            //=== Header lang ===\\
            // Header lang open
            $(".header-lang-current").on("click", this.headerLangOpen);
            // Header lang select \\
            $(".header-lang-list a").on("click", this.headerLangSelect);
            // Header lang close not on this element \\
            $(document).on("click", this.headerLangCloseNotEl);

            //=== Header mobile/tablet navbar ===\\
            // Header navbar toggle \\
            $(".header-navbar-btn").on("click", this.headerNavbarToggle);
            // Header navbar close not on this element \\
            $(document).on("click", this.headerNavbarNotEl);

            //=== Mobile/tablet main menu ===\\
            // Main menu toogle \\
            $(".main-mnu-btn").on("click", this.MainMenuToggle);
            // Main menu submenu toogle \\
            $(".mmm-btn").on("click", this.MainMenuSubmenuToggle);
            // Main menu close not on this element \\
            $(document).on("click", this.MainMenuCloseNotEl);

            //=== Tab ===\\
            $(".tabs-nav li").on("click", this.tab);

            //=== Accordion ===\\
            $(".accordion-trigger").on("click", this.accordion);

            //=== UI elements ===\\
            $(".ui-nav li").on("click", this.ui);

            //=== Form field ===\\
            $(".form-field").each(this.inputEach);
            $(".form-field-input")
                .on("focus", this.inputFocus)
                .on("keyup change", this.inputKeyup)
                .on("blur", this.inputBlur);

            //=== Button top ===\\
            $(document).on("click", '.btn-top', this.btnTop);
            $(window).on("scroll", this.btnTopScroll);

        },

        appendMfBg: function() {

            $("body").append('<div class="mf-bg"></div>');

        },

        appendBtnTop: function() {

            $("body").append('<div class="btn-top"><svg class="btn-widht-ico-right" viewBox="0 0 13 9"><use xlink:href="img/sprite.svg#arrow-right"></use></svg></div>');

        },

        btnTop: function() {

            $('html, body').animate({scrollTop: 0},1000, function() {
                $(this).removeClass("active");
            });

        },

        btnTopScroll: function() {

            var btnTop = $('.btn-top');

            if ($(this).scrollTop() > 700) {

                btnTop.addClass("active");

            } else {

                btnTop.removeClass("active");

            }

        },

        ui: function() {

            var _this = $(this),
                index = _this.index(),
                nav = _this.parent(),
                tabs = _this.closest(".ui"),
                items = tabs.find(".ui-item");

            if (!_this.hasClass("active")) {

                items
                    .eq(index)
                    .add(_this)
                    .addClass("active")
                    .siblings()
                    .removeClass("active");

                nav
                    .trigger("detach.ScrollToFixed")
                    .scrollToFixed({
                        marginTop: $(".header-fixed").outerHeight() + 20,
                        zIndex: 2,
                        limit: $(".footer").offset().top - nav.outerHeight() - 40,
                        preAbsolute: function() { $(this).css({"opacity": 0, "visability": "hidden"}); },
                        postUnfixed: function() { $(this).css({"opacity": 1, "visability": "visible"}); },
                        postAbsolute: function() { $(this).css({"opacity": 1, "visability": "visible"}); },
                    });

                if ($(document).scrollTop() > 0) {
                    $("html, body").animate({ scrollTop: 0 }, 500);
                }

            }

        },

        //=== Tab ===\\
        tab: function() {

            var _this = $(this),
                index = _this.index(),
                list = _this.parent(),
                tabs = _this.closest(".tabs"),
                items = tabs.find(".tabs-item");

            if (!_this.hasClass("active")) {

                items
                    .eq(index)
                    .add(_this)
                    .addClass("active")
                    .siblings()
                    .removeClass("active");

            }

        },

        //=== Accordion ===\\
        accordion: function(e) {

            e.originalEvent.preventDefault();

            var _this = $(this),
                item = _this.closest(".accordion-item"),
                container = _this.closest(".accordion"),
                items = container.find(".accordion-item"),
                content = item.find(".accordion-content"),
                otherContents = container.find(".accordion-content"),
                duration = 300;

            if (!item.hasClass("active")) {
                items.removeClass("active");
                item.addClass("active");
                otherContents.stop(true, true).slideUp(duration);
                content.stop(true, true).slideDown(duration);
            } else {
                content.stop(true, true).slideUp(duration);
                item.removeClass("active");
            }

        },

        //=== Header search ===\\
        headerSearchOpen: function() {

            $(this).closest(".header-search").addClass("open");

        },
        headerSearchClose: function() {

            $(this).closest(".header-search").removeClass("open");

        },
        headerSearchCloseNotEl: function(e) {

            if ($(e.originalEvent.target).closest(".header-search").length) return;
            $(".header-search").removeClass("open");
            e.originalEvent.stopPropagation();

        },

        //=== Header lang ===\\
        headerLangOpen: function() {

            $(this).parent().toggleClass("open");

        },
        headerLangSelect: function() {

            var _this = $(this),
                lang = _this.attr("data-lang"),
                container = _this.closest(".header-lang"),
                current = container.find(".header-lang-current");

            container.removeClass("open");
            current.children().text(lang);
            current.attr("data-title", lang);

        },
        headerLangCloseNotEl: function(e) {

            if ($(e.originalEvent.target).closest(".header-lang").length) return;
            $(".header-lang").removeClass("open");
            e.originalEvent.stopPropagation();

        },

        //=== Mobile/tablet main menu ===\\
        MainMenuToggle: function() {

            var _this = $(this),
                _body = $("body"),
                headerH = _this.closest(".header").outerHeight(),
                mnu = $(".mob-main-mnu"),
                offsetTop = $(".header-fixed").offset().top;

            mnu.css("padding-top", headerH);
            $(this).toggleClass("active");

            _body.toggleClass("mob-main-mnu-open").scrollTop(offsetTop);

            if(_body.hasClass("mob-main-mnu-open")) {
                $(".mf-bg").addClass("visible mm");
            } else {
                $(".mf-bg").removeClass("visible mm");
            }

        },
        MainMenuSubmenuToggle: function() {

            var _this = $(this),
                item = _this.parent(),
                content = item.find(".mob-main-submnu");

            item.toggleClass("open");
            content.slideToggle();

        },
        MainMenuCloseNotEl: function(e) {

            if ($(e.originalEvent.target).closest(".mob-main-mnu, .main-mnu-btn").length) return;
            $("body").removeClass("mob-main-mnu-open");
            $(".main-mnu-btn").removeClass("active");
            $(".mf-bg").removeClass("visible mm");
            e.originalEvent.stopPropagation();

        },

        //=== Header mobile/tablet navbar ===\\
        headerNavbarToggle: function() {

            $(this).parent().toggleClass("open");

        },
        headerNavbarNotEl: function(e) {

            if ($(e.originalEvent.target).closest(".header-navbar").length) return;
            $(".header-navbar").removeClass("open");
            e.originalEvent.stopPropagation();

        },

        //=== Form input ===\\
        inputEach: function() {

            var _this = $(this),
                val = _this.find(".form-field-input").val();

            if (val === "") {
                _this.removeClass("focus");
            } else {
                _this.addClass("focus");
            }

        },
        inputFocus: function() {

            var _this = $(this),
                wrappInput = _this.parent();

            wrappInput.addClass("focus");

        },
        inputKeyup: function() {

            var _this = $(this),
                val = _this.val(),
                wrappInput = _this.parent();

            if (val === "" && !_this.is(":focus")) {
                wrappInput.removeClass("focus");
            } else {
                wrappInput.addClass("focus");
            }

        },
        inputBlur: function() {

            var _this = $(this),
                val = _this.val(),
                wrappInput = _this.parent();

            if(val === "") {
                wrappInput.removeClass("focus");
            }

        },

        //=== Ripple effect for buttons ===\\
        btnRipple: function(e) {

            var _this = $(this),
                offset = $(this).offset(),
                positionX = e.originalEvent.pageX - offset.left,
                positionY = e.originalEvent.pageY - offset.top;
            _this.append("<div class='ripple-effect'>");
            _this
                .find(".ripple-effect")
                .css({
                    left: positionX,
                    top: positionY
                })
                .animate({
                    opacity: 0
                }, 1500, function() {
                    $(this).remove();
                });

        },

        //=== Forming href for phone ===\\
        formingHrefTel: function() {

            var linkAll = $('.formingHrefTel'),
                joinNumbToStringTel = 'tel:';

            $.each(linkAll, function () {
                var _this = $(this),
                    linkValue = _this.text(),
                    arrayString = linkValue.split("");

                for (var i = 0; i < arrayString.length; i++) {
                    var thisNunb = app.isNumber(arrayString[i]);
                    if (thisNunb === true || (arrayString[i] === "+" && i === 0)) {
                        joinNumbToStringTel += arrayString[i];
                    }
                }

                _this.attr("href", function () {
                    return joinNumbToStringTel;
                });
                joinNumbToStringTel = 'tel:'

            });

        },

        isNumber: function(n) {

            return !isNaN(parseFloat(n)) && isFinite(n);

        },

        //=== Content table responsive ===\\
        contentTable: function() {

            var contentTable = $(".content");
            if(contentTable.length) {

                $.each(contentTable.find("table"), function() {
                    $(this).wrap("<div class='table-responsive-outer'></div>").wrap("<div class='table-responsive'></div>");
                });

            }

        },

        //=== Clock count down ===\\
        clockCountDown: function() {

            if($("#countdown").length) {
                this.clock("countdown", $("#countdown").attr("data-dedline"));
            }

        },
        getTimeRemaining: function(endtime) {

            var t = Date.parse(endtime) - Date.parse(new Date()),
                seconds = Math.floor((t / 1000) % 60),
                minutes = Math.floor((t / 1000 / 60) % 60),
                hours = Math.floor((t / (1000 * 60 * 60)) % 24),
                days = Math.floor(t / (1000 * 60 * 60 * 24));

            return {
                total: t,
                days: days,
                hours: hours,
                minutes: minutes,
                seconds: seconds
            };

        },
        clock: function(id, endtime) {

            var clock = document.getElementById(id),
                daysSpan = clock.querySelector(".days"),
                hoursSpan = clock.querySelector(".hours"),
                minutesSpan = clock.querySelector(".minutes"),
                secondsSpan = clock.querySelector(".seconds");

            function updateClock() {
                var t = app.getTimeRemaining(endtime);

                if (t.total <= 0) {
                    document.getElementById("countdown").className = "hidden";
                    document.getElementById("deadline-message").className = "visible";
                    clearInterval(timeinterval);
                    return true;
                }

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
                minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
                secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
            }

            updateClock();
            var timeinterval = setInterval(updateClock, 1000);

        },

        //=== Custom alert ===\\
        customAlert: function(text, duration, alertInfo) {

            var alerts = $(".alerts"),
                body = $("body"),
                alertClass = "",
                alertIco = "info";

            if (!alerts.length) {
                body.append('<div class="alerts"></div>');
            }
            $(".alert").remove();

            if (alertInfo === "success") {
                alertClass = "alert-success";
                alertIco = "check";
            } else if (alertInfo === "danger") {
                alertClass = "alert-danger";
                alertIco = "error";
            } else if (alertInfo === "warning") {
                alertClass = "alert-warning";
                alertIco = "warning";
            } else if (alertInfo == "default") {
                alertClass = "alert-default";
                alertIco = "info";
            }

            if (!$("." + alertClass + "").length) {
                $(".alerts").append(
                    '<div class="alert ' +
                    alertClass +
                    '" data-duration-hide="' +
                    duration +
                    '"> <div class="alert-ico"> <i class="material-icons md-22">' +
                    alertIco +
                    '</i> </div> <div class="alert-text">' +
                    text +
                    "</div> </div>"
                );

                setTimeout(function() {
                    $("." + alertClass + "").remove();
                }, duration);
            }

            $(document).on("click", ".alert-close", function() {
                $(this)
                    .closest(".alert")
                    .remove();
            });

        },

        //=== Plugins ===\\

        lazyLoading: function() {

            $('.lazy').Lazy({
                effect: 'fadeIn'
            });

        },

        autoSizeTextarea: function() {

            autosize(document.querySelectorAll('textarea'));

        },

        iCookies: function() {

            $('body').ihavecookies(this.OPTIONSCOOCIES);

        },

        device: function() {

            if( (device.mobile() || device.tablet()) && device.ios() ) {
                var tempCSS = $('a').css('-webkit-tap-highlight-color');
                $('main, .main-inner').css('cursor', 'pointer')
                    .css('-webkit-tap-highlight-color', 'rgba(0, 0, 0, 0)');
                $('a').css('-webkit-tap-highlight-color', tempCSS);
            }

        },

        popUp: function() {

            $('.open_popup').popup({
                transition: 'all 0.4s',
                color: '#000000',
                opacity: 0.8
            });

        },

        lightGallery: function() {

            $(".gallery-container").lightGallery({
                selector: '.gallery-item'
            });

        },

        scrollToFixed: function() {

            $('.header-fixed').scrollToFixed({
                preFixed: function() { $(this).addClass("fixed"); },
                postFixed: function() { $(this).removeClass("fixed"); }
            });

            $('#ui-nav').scrollToFixed({
                marginTop: $('.header-fixed').outerHeight() + 20,
                zIndex: 2,
                limit: $('.footer').offset().top - $('#ui-nav').outerHeight() - 40,
                preAbsolute: function() { $(this).css({"opacity": 0, "visability": "hidden"}); },
                postUnfixed: function() { $(this).css({"opacity": 1, "visability": "visible"}); },
                postAbsolute: function() { $(this).css({"opacity": 1, "visability": "visible"}); },
            });

        },

        carousels: function() {

            var reviewsCaruselTh = $('.reviews-carusel-th');
            reviewsCaruselTh.flickity({
                imagesLoaded: true,
                lazyLoad: true,
                pageDots: false,
                adaptiveHeight: true,
                fade: true,
                prevNextButtons: false
            });

            $('.reviews-thumb-item').on('click', function() {
                var _this = $(this),
                    index = _this.index();
                reviewsCaruselTh.flickity( 'select', index );
                _this.addClass("active").siblings().removeClass("active");
            });

        },

        forms: function() {

            var ajaxurl = "/mail.php";

            $.validator.addMethod("customemail", function (value, element) {
                    return /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(value);
                },
                "Адрес электронной почты не является действительным."
            );

            $(".СЃallback_popup_form").validate({
                rules: {
                    NameCallBack: {
                        required: true,
                        minlength: 2
                    },
                    PhoneCallBack: {
                        required: true
                    }
                },
                messages: {
                    NameCallBack: {
                        required: "Поле имени обязательно для заполнения.",
                    },
                    PhoneCallBack: {
                        required: "Поле телефона обязательно для заполнения.",
                    }
                },
                submitHandler: function(form) {
                    var th = $(form),
                        popup = th.closest(".popup_style"),
                        close = popup.find(".popup_close");
                    close.click();

                    $.ajax({
                        type: "POST",
                        url: ajaxurl,
                        data: th.serialize()
                    }).done(function() {

                        //customAlert(text, duration, alertInfo) info = "success" || "danger" || "warning" || "default"
                        app.customAlert("Успешно отправлено!", 4000, "success");

                        setTimeout(function() {
                            th.trigger("reset");
                            $(".form-field").removeClass("focus");
                        }, 1000);
                    });

                }
            });


            $(".contact-form").validate({
                rules: {
                    ContactName: {
                        required: true,
                        minlength: 2
                    },
                    ContactPhone: {
                        required: true
                    },
                    ContactEmail: {
                        required: true,
                        email: true,
                        customemail: true
                    },
                },
                messages: {
                    ContactName: {
                        required: "Поле имени обязательно для заполнения.",
                    },
                    ContactPhone: {
                        required: "Поле телефона обязательно для заполнения.",
                    },
                    ContactEmail: {
                        required: "Поле email обязательно для заполнения.",
                        email: "Поле email обязательно для заполнения.",
                        customemail: "Данный адрес электронной почты не является действительным."
                    },
                },
                submitHandler: function(form) {
                    var th = $(form);

                    $.ajax({
                        type: "POST",
                        url: ajaxurl,
                        data: th.serialize()
                    }).done(function() {

                        //customAlert(text, duration, alertInfo) info = "success" || "danger" || "warning" || "default"
                        app.customAlert("Успешно отправлено!", 4000, "success");

                        setTimeout(function() {
                            th.trigger("reset");
                            $(".form-field").removeClass("focus");
                        }, 1000);
                    });

                }
            });

            $(".footer-subscribe").validate({
                rules: {
                    ContactEmail: {
                        required: true,
                        email: true,
                        customemail: true
                    },
                },
                messages: {
                    ContactEmail: {
                        required: "Поле email обязательно для заполнения.",
                        email: "Поле email обязательно для заполнения.",
                        customemail: "Данный адрес электронной почты не является действительным."
                    },
                },
                submitHandler: function(form) {
                    var th = $(form);

                    //customAlert(text, duration, alertInfo) info = "success" || "danger" || "warning" || "default"
                    app.customAlert("Успешно отправлено!", 4000, "success");

                    setTimeout(function() {
                        th.trigger("reset");
                        $(".form-field").removeClass("focus");
                    }, 1000);

                }
            });

            $(".login-form").validate({
                rules: {
                    LoginName: {
                        required: true
                    },
                    loginPassword: {
                        required: true,
                        minlength : 6
                    }
                },
                messages: {
                    LoginName: {
                        required: "Поле логина обязательно для заполнения.",
                    },
                    loginPassword: {
                        required: "Поле пароля обязательно для заполнения.",
                    }
                },
                submitHandler: function(form) {
                    var th = $(form);

                    //customAlert(text, duration, alertInfo) info = "success" || "danger" || "warning" || "default"
                    app.customAlert("Успешно отправлено!", 4000, "success");

                    setTimeout(function() {
                        th.trigger("reset");
                        $(".form-field").removeClass("focus");
                    }, 1000);

                }
            });

            $(".order-form").validate({
                rules: {
                    orderName: {
                        required: true,
                        minlength: 2
                    },
                    orderPhone: {
                        required: true
                    }
                },
                messages: {
                    orderName: {
                        required: "Поле имени обязательно для заполнения.",
                    },
                    orderPhone: {
                        required: "Поле телефона обязательно для заполнения.",
                    }
                },
                submitHandler: function(form) {
                    var th = $(form);

                    $.ajax({
                        type: "POST",
                        url: ajaxurl,
                        data: th.serialize()
                    }).done(function() {

                        //customAlert(text, duration, alertInfo) info = "success" || "danger" || "warning" || "default"
                        app.customAlert("Успешно отправлено!", 4000, "success");

                        setTimeout(function() {
                            th.trigger("reset");
                            $(".form-field").removeClass("focus");
                        }, 1000);
                    });

                }
            });

            $(".subscribe-bg-form").validate({
                rules: {
                    subscribeBgEmail: {
                        required: true,
                        email: true,
                        customemail: true
                    }
                },
                messages: {
                    subscribeBgEmail: {
                        required: "Поле email обязательно для заполнения.",
                        email: "Поле email обязательно для заполнения.",
                        customemail: "Данный адрес электронной почты не является действительным."
                    }
                },
                submitHandler: function(form) {
                    var th = $(form);

                    //customAlert(text, duration, alertInfo) info = "success" || "danger" || "warning" || "default"
                    app.customAlert("Успешно отправлено!", 4000, "success");

                    setTimeout(function() {
                        th.trigger("reset");
                        $(".form-field").removeClass("focus");
                    }, 1000);
                }
            });

            $(".mailchimp-form").validate({
                rules: {
                    mailchimpEmail: {
                        required: true,
                        email: true,
                        customemail: true
                    }
                },
                messages: {
                    mailchimpEmail: {
                        required: "Поле email обязательно для заполнения.",
                        email: "Поле email обязательно для заполнения.",
                        customemail: "Данный адрес электронной почты не является действительным."
                    }
                },
                submitHandler: function(form) {
                    var th = $(form);

                    //customAlert(text, duration, alertInfo) info = "success" || "danger" || "warning" || "default"
                    app.customAlert("Успешно отправлено!", 4000, "success");

                    setTimeout(function() {
                        th.trigger("reset");
                        $(".form-field").removeClass("focus");
                    }, 1000);
                }
            });

            $(".cm-form").validate({
                rules: {
                    cmEmail: {
                        required: true,
                        email: true,
                        customemail: true
                    }
                },
                messages: {
                    cmEmail: {
                        required: "Поле email обязательно для заполнения.",
                        email: "Поле email обязательно для заполнения.",
                        customemail: "Данный адрес электронной почты не является действительным."
                    }
                },
                submitHandler: function(form) {
                    var th = $(form);

                    //customAlert(text, duration, alertInfo) info = "success" || "danger" || "warning" || "default"
                    app.customAlert("Успешно отправлено!", 4000, "success");

                    setTimeout(function() {
                        th.trigger("reset");
                        $(".form-field").removeClass("focus");
                    }, 1000);
                }
            });

            $(".comming-soon-form").validate({
                rules: {
                    commingSoonEmail: {
                        required: true,
                        email: true,
                        customemail: true
                    }
                },
                messages: {
                    commingSoonEmail: {
                        required: "Поле email обязательно для заполнения.",
                        email: "Поле email обязательно для заполнения.",
                        customemail: "Данный адрес электронной почты не является действительным."
                    }
                },
                submitHandler: function(form) {
                    var th = $(form);

                    //customAlert(text, duration, alertInfo) info = "success" || "danger" || "warning" || "default"
                    app.customAlert("Успешно отправлено!", 4000, "success");

                    setTimeout(function() {
                        th.trigger("reset");
                        $(".form-field").removeClass("focus");
                    }, 1000);
                }
            });

            $(".comments-form").validate({
                rules: {
                    CommentsName: {
                        required: true,
                        minlength: 2
                    },
                    CommentsEmail: {
                        required: true,
                        email: true,
                        customemail: true
                    },
                    CommentsMessage: {
                        required: true,
                        minlength: 15
                    },
                },
                messages: {
                    CommentsName: {
                        required: "Поле имени обязательно для заполнения."
                    },
                    CommentsEmail: {
                        required: "Поле email обязательно для заполнения.",
                        email: "Поле email обязательно для заполнения.",
                        customemail: "Данный адрес электронной почты не является действительным."
                    },
                    CommentsMessage: {
                        required: "The message field is required."
                    }
                },
                submitHandler: function(form) {
                    var th = $(form);

                    //customAlert(text, duration, alertInfo) info = "success" || "danger" || "warning" || "default"
                    app.customAlert("Успешно отправлено!", 4000, "success");

                    setTimeout(function() {
                        th.trigger("reset");
                        $(".form-field").removeClass("focus");
                    }, 1000);
                }
            });

            $(".subscribe-blog-form").validate({
                rules: {
                    CommentsEmail: {
                        required: true,
                        email: true,
                        customemail: true
                    }
                },
                messages: {
                    CommentsEmail: {
                        required: "Поле email обязательно для заполнения.",
                        email: "Поле email обязательно для заполнения.",
                        customemail: "Данный адрес электронной почты не является действительным."
                    }
                },
                submitHandler: function(form) {
                    var th = $(form);

                    //customAlert(text, duration, alertInfo) info = "success" || "danger" || "warning" || "default"
                    app.customAlert("Успешно отправлено!", 4000, "success");

                    setTimeout(function() {
                        th.trigger("reset");
                        $(".form-field").removeClass("focus");
                    }, 1000);
                }
            });

        },

        phoneMask: function() {

            var listCountries = $.masksSort($.masksLoad("data/phone-codes.json"), ['#'], /[0-9]|#/, "mask");

            var maskOpts = {
                inputmask: {
                    definitions: {
                        '#': {
                            validator: "[0-9]",
                            cardinality: 1
                        }
                    },
                    showMaskOnHover: false,
                    autoUnmask: true,
                    clearMaskOnLostFocus: true
                },
                match: /[0-9]/,
                replace: '#',
                listKey: "mask",
            };

            $('.mask-phone').inputmasks($.extend(true, {}, maskOpts, {
                list: listCountries
            }));

        },

        isotopeProjects: function() {

            var container = $("#projects-container");

            container.isotope({
                itemSelector: '.project-col'
            });

            $('.project-nav-list li').on('click', function() {
                var _this = $(this),
                    selector = _this.data('filter');

                _this.addClass("active").siblings().removeClass("active");
                container.isotope({
                    filter: selector
                });
            });

        },

        isotopeGallery: function() {

            var container = $("#gallery-container");

            container.isotope({
                itemSelector: '.gallery-col'
            });

            $('.gallery-nav-list li').on('click', function() {
                var _this = $(this),
                    selector = _this.data('filter');

                _this.addClass("active").siblings().removeClass("active");
                container.isotope({
                    filter: selector,
                });
            });

        },

        isotopeGalleryMasonry: function() {

            var container = $("#gallery-masonry-container");

            container.isotope({
                itemSelector: '.gallery-col',
                percentPosition: true,
                masonry: {
                    columnWidth: '.gallery-col-sizer'
                }
            });

            $('.gallery-masonry-nav-list li').on('click', function() {
                var _this = $(this),
                    selector = _this.data('filter');

                _this.addClass("active").siblings().removeClass("active");
                container.isotope({
                    filter: selector,
                });
            });

        },

        spincrement: function() {

            var show = true;
            var countbox = ".spincrement-container";

            if($(countbox).length) {

                $(window).on("scroll load resize", function () {
                    if (!show) return false;
                    var w_top = $(window).scrollTop();
                    var e_top = $(countbox).offset().top;
                    var w_height = $(window).height();
                    var d_height = $(document).height();
                    var e_height = $(countbox).outerHeight();
                    if (w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
                        $('.spincrement').spincrement({
                            duration: 1500,
                            leeway: 10
                        });
                        show = false;
                    }
                });
            }

        },

        //=== detect IE ===\\
        detectIE: function() {

            if(this.detectIECheck()) {
                var body = document.querySelector("body"),
                    msg = 'К сожалению, используемый вами браузер Internet Explorer устарел и не может нормально отображать сайт. <br> Пожалуйста, откройте сайт в другом браузере';
                body.classList.add("overflow-hidden");
                body.innerHTML = '<div class="ie-browser"><div class="ie-browser-tr"><div class="ie-browser-td">'+ msg +'</div></div></div>';
            }

        },
        detectIECheck: function() {

            var ua = window.navigator.userAgent;

            var msie = ua.indexOf('MSIE ');
            if (msie > 0) {
                // IE 10 or older => return version number
                return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
            }

            var trident = ua.indexOf('Trident/');
            if (trident > 0) {
                // IE 11 => return version number
                var rv = ua.indexOf('rv:');
                return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
            }

            // other browser
            return false;

        }

    }

    app.init();

}());

function initMap() {
    var geocoder, map,
        mapInfo = $('#map_address'),
        markerUrl = mapInfo.data("marker"),
        address = mapInfo.val();
    function initialize() {
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(48.0074449,37.8093354);
        var myOptions = {
            zoom: 15,
            center: latlng,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            },
            styles: [ { "featureType": "water", "elementType": "geometry", "stylers": [ { "color": "#e9e9e9" }, { "lightness": 17 } ] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [ { "color": "#f5f5f5" }, { "lightness": 20 } ] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [ { "color": "#ffffff" }, { "lightness": 17 } ] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [ { "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 } ] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [ { "color": "#ffffff" }, { "lightness": 18 } ] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [ { "color": "#ffffff" }, { "lightness": 16 } ] }, { "featureType": "poi", "elementType": "geometry", "stylers": [ { "color": "#f5f5f5" }, { "lightness": 21 } ] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [ { "color": "#dedede" }, { "lightness": 21 } ] }, { "elementType": "labels.text.stroke", "stylers": [ { "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 } ] }, { "elementType": "labels.text.fill", "stylers": [ { "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 } ] }, { "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "featureType": "transit", "elementType": "geometry", "stylers": [ { "color": "#f2f2f2" }, { "lightness": 19 } ] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [ { "color": "#fefefe" }, { "lightness": 20 } ] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [ { "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 } ] } ],
            navigationControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        if (geocoder) {
            geocoder.geocode({
                'address': address
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                        map.setCenter(results[0].geometry.location);

                        var infowindow = new google.maps.InfoWindow({
                            content: '<b>' + address + '</b>',
                            size: new google.maps.Size(150, 50)
                        });

                        var marker = new google.maps.Marker({
                            position: results[0].geometry.location,
                            map: map,
                            title: address,
                            icon: {
                                url: markerUrl,
                                scaledSize: new google.maps.Size(47, 71)
                            }
                        });
                        google.maps.event.addListener(marker, 'click', function() {
                            infowindow.open(map, marker);
                        });

                    } else {
                        console.log("+++");
                    }
                } else {
                    console.log("Status: " + status);

                }
            });
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
}
