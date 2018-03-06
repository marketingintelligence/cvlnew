$( document ).ready(function() {

    var url = window.location.href;
    $(".tabs ul li").each(function () {
        var href = $(this).find("a").attr("href");
        if (url.indexOf(href) + 1) {
            $(this).addClass('active');
        }
    });

    $(".side-nav ul a, .side-lnav ul a").each(function () {
        var href = $(this).attr("href");
        if (url.indexOf(href) + 1) {
            $(this).find(".skew").addClass('active-nav');
            $(this).find(".btn-blocks").append('<div class="nav-act-b"><div class="nav-circle"><div class="nav-circle2"></div></div></div>');
        }
    });

    // Modal
    $('.linkToModal').click(function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        $(href).modal();
    });

    // Меняет язык
    var actLang= 1;
    $("body").on("click", "header .language", function() {
        var id = $(this).data("id");
        $('[data-id='+actLang+']').removeClass("act-language");
        $(this).addClass("act-language");
        actLang = id;
    });
    // Меняет команду на главной странице
    var act = 1;
    $('.carousel-container[data-id='+act+']').fadeIn();
    $('.mcarousel-container[data-id='+act+']').fadeIn();
	$("body").on("click", ".change-block", function() {
        if ($(window).width() > 992) {
            var id = $(this).data("id");
            $('[data-id='+act+']').removeClass("active-name");
            $(this).addClass("active-name");
            $('.change-block').removeClass('active-name');
            $(this).addClass('active-name');
            $('.carousel-container').removeClass('act animated slideInLeft').addClass('animated slideOutRight').fadeOut().promise().done(function() {
                $('.carousel-container[data-id='+act+']').fadeIn().addClass('act animated slideInLeft').removeClass('slideOutRight');
            });
            act = id;

        }
        else {
            var id = $(this).data("id");
            $('[data-id='+act+']').removeClass("active-name");
            $(this).addClass("active-name");
            $('.change-block').removeClass('active-name');
            $(this).addClass('active-name');
            $('.mcarousel-container').removeClass('act animated slideInLeft').addClass('animated slideOutRight').fadeOut().promise().done(function() {
                $('.mcarousel-container[data-id='+act+']').fadeIn().addClass('act animated slideInLeft').removeClass('slideOutRight');
            });
            act = id;
        }
	});

    // Меняет матчи завершенных и следующих
    $('#end').fadeIn();
    var actButton = false;
    $("body").on("click", ".rbut", function() {
        var id = $(this).data("id");
        if (id == 1 && !actButton) {
            $('.rbut').removeClass('active-time');
            $('.rbut-help, .rbutr-help').removeClass('act-helper');
            actButton = true;
            $(this).addClass('active-time');
            $('.rbut-help').addClass('act-helper');
            $('#begin').fadeOut().promise().done(function () {
                $('#end').fadeIn();
                actButton = false;
            });
        } else if (id == 2 && !actButton) {
            $('.rbut').removeClass('active-time');
            $('.rbut-help, .rbutr-help').removeClass('act-helper');
            actButton = true;
            $(this).addClass('active-time');
            $('.rbutr-help').addClass('act-helper');
            $('#end').fadeOut().promise().done(function () {
                $('#begin').fadeIn();
                actButton = false;
            });
        }
    });


    if ($(window).width() < 600) {
        $("body").on("click", "#fadein-btn", function() {
            $('#fadein-btn').fadeOut().promise().done(function() {
                $('.fadeout').fadeIn();
            });
        });
    }
    if ($(window).width() < 520) {
        $('.contact-tel').attr('placeholder', 'Контактный телефон');
        $('.contact-address').attr('placeholder', 'Адрес доставки');
    }
    // Меняет таблицу
    var actTable= 1;
    $('.change-league[data-id="1"]').fadeIn();
    $("body").on("click", ".btn-premier", function() {
        var id = $(this).data("id");
        $('[data-id='+actTable+']').removeClass("active-premier");
        $(this).addClass("active-premier");
        $('.change-league').fadeOut().promise().done(function () {
            $('.change-league[data-id='+actTable+']').fadeIn();
        });
        actTable = id;
    });

    // Меняет блок
    var act = 1;
    $('.block-content[data-id=1]').fadeIn();
    $("body").on("click", ".btn-blocks", function() {
        var id = $(this).data("id");
        $('.nav-act-b').remove();
        $('[data-id='+act+'] .bg-active').removeClass('active-nav');
        $('.block-content').removeClass('factive');
        $(this).find(".bg-active").addClass("active-nav");

        $(this).append('<div class="nav-act-b"><div class="nav-circle"><div class="nav-circle2"></div></div></div>');
        $('.block-content').fadeOut().promise().done(function() {
            $('.block-content[data-id='+act+']').addClass('factive').fadeIn();
        });
        act = id;
    });

    // Меняет интернет-магазин
    var actStore = 1;
    $('.block-store[data-id=1]').fadeIn();
    $('.btn-store[data-id=1]').find("img").css('filter', 'invert(1)');
    $("body").on("click", ".btn-store", function() {
        var id = $(this).data("id");
        $('.nav-act-b').remove();
        $('[data-id='+actStore+'] .bg-active').removeClass('active-nav');
        $('.block-store').removeClass('factive');
        $('.btn-store').find("img").css('filter', 'invert(0)');
        $(this).find("img").css('filter', 'invert(1)');
        $(this).find(".bg-active").addClass("active-nav");
        $(this).append('<div class="nav-act-b"><div class="nav-circle"><div class="nav-circle2"></div></div></div>');
        $('.block-store').fadeOut().promise().done(function() {
            $('.block-store[data-id='+actStore+']').addClass('factive').fadeIn();
        });
        actStore = id;
    });



    // "Тренерский штаб, команда, администрация" - кнопка
    var actNav = 1;
    $("body").on("click", ".tnav", function() {
        var id = $(this).data("id");
        actNav = id;
        $('.team-nav').removeClass("active-team");
        $('.team-nav[data-id='+actNav+']').addClass("active-team");
        $('.kairat-nav').fadeOut().promise().done(function () {
            $('.kairat-nav[data-id='+actNav+']').fadeIn().promise().done(function () {
                $('.team .border-btm').fadeIn();
                $('.team .rgba-nav').fadeIn();
            })
        })
    });


    // "Тренерский штаб, команда, администрация" показывает
    $("body").on("click", ".kairat-fnav", function() {
        $('.select-coach, .select-player, .select-admin').fadeOut();
        $('.select-coach[data-id=3], .player-video[data-id=3], .select-admin[data-id=3]').fadeIn();
        var href = $(this).data("id");
        $('.blocks').fadeOut().promise().done(function () {
            $('#'+href).fadeIn();
            $("html, body").animate({scrollTop: $('#'+href).offset().top }, 1000, function () {
                $('#'+href+'-content').animate({ opacity: 1 }, 1000);
            });
            $('.together').fadeIn();
            $('.rgba-nav, .kairat-nav').fadeOut();
            $('.player-video[data-id=3]')[0].play();
            $('.player-video[data-id=3]').on('ended',function(){
                $('.player-video[data-id=3]').fadeOut().promise().done(function () {
                    $('.select-player[data-id=3]').fadeIn().promise().done(function () {
                        setTimeout(function () {
                            $('.team .player-linfo, .player-details').animate({opacity:1}, 1500);
                        }, 400);
                    });
                });

            });

        });
    });


    // Информация тренеров
    var actPdButton = 1;
    $('.pd[data-id='+actPdButton+']').fadeIn();
    $('.pd-change-button[data-id=1]').addClass("pd-active");
    $("body").on("click", ".pd-change-button", function() {
        var id = $(this).data("id");
        $('.pd-change-button').removeClass("pd-active");
        $(this).addClass('pd-active');
        $('.pd').fadeOut().promise().done(function () {
            $('.pd[data-id='+actPdButton+']').fadeIn();
        });
        actPdButton = id;
    });

    // Меняет тренеров
    var actCoach = 3;
    $('.select-coach[data-id='+actCoach+']').fadeIn();
    $("body").on("click", ".coach-item", function() {
        var id = $(this).data("id");
        $('.pd-change-button').removeClass("pd-active").promise().done(function () {
            $('.pd-change-button[data-id=1]').addClass("pd-active");
        });
        $('.pd').fadeOut().promise().done(function () {
            $('.pd[data-id=1]').fadeIn();
        });
        $('[data-id='+actCoach+']').removeClass("active-coach");
        $(this).addClass("active-coach");
        $('.select-coach').fadeOut().promise().done(function () {
            $('.select-coach[data-id='+actCoach+']').fadeIn();
        });
        actCoach = id;
    });


    // Информация игроков
    var actPlayerButton = 1;
    $('.player[data-id='+actPlayerButton+']').fadeIn();
    $('.player-change-button[data-id=1]').addClass("player-active");
    $("body").on("click", ".player-change-button", function() {
        var id = $(this).data("id");
        $('.player-change-button').removeClass("player-active");
        $(this).addClass('player-active');
        $('.player').fadeOut().promise().done(function () {
            $('.player[data-id='+actPlayerButton+']').fadeIn();
        });
        actPlayerButton = id;
    });


    // Меняет игроков
    var actPlayer = 3;
    if ($(window).width() > 992) {
        $("body").on("click", ".player-item", function () {
            var id = $(this).data("id");
            $('.player-change-button').removeClass("player-active").promise().done(function () {
                $('.player-change-button[data-id=1]').addClass("player-active");
            });
            $('.player').fadeOut().promise().done(function () {
                $('.player[data-id=1]').fadeIn();
            });
            $('[data-id=' + actPlayer + ']').removeClass("active-player");
            $(this).addClass("active-player");
            $('.player-video[data-id=' + actPlayer + ']')[0].pause();
            $('.player-video, .select-player').fadeOut().promise().done(function () {
                $('.team .player-linfo, .player-details').css({opacity: 0});
                $('.player-video[data-id=' + actPlayer + ']').fadeIn().promise().done(function () {
                    $('.player-video[data-id=' + actPlayer + ']')[0].play();
                    $('.player-video[data-id=' + actPlayer + ']').on('ended', function () {
                        $('.player-video').fadeOut().promise().done(function () {
                            $('.select-player[data-id=' + actPlayer + ']').fadeIn().promise().done(function () {
                                setTimeout(function () {
                                    $('.team .player-linfo, .player-details').animate({opacity: 1}, 1500);
                                }, 400);
                            });
                        });
                    });

                });
            });
            actPlayer = id;
        });
    }

    // Меняет администратор
    var actAdmin = 3;
    $('.select-admin[data-id='+actAdmin+']').fadeIn();
    $("body").on("click", ".admin-item", function() {
        var id = $(this).data("id");
        $('[data-id='+actAdmin+']').removeClass("active-admin");
        $(this).addClass("active-admin");
        $('.select-admin').fadeOut().promise().done(function () {
            $('.select-admin[data-id='+actAdmin+']').fadeIn();
        });
        actAdmin = id;
    });


    // Мобильная версия
    // Меню

    $("body").on("click", "#mob-change-lang", function() {
        $('#change-block-lang').slideToggle();
    });


    $("body").on("click", "#mob-nav", function() {
        $('main').toggleClass('main');
        $('.mob-menu').toggleClass('mob-menu-width');
        $('body').toggleClass('ovetflow');
    });

    $("body").on("click", "#mob-nav2", function() {
        $('main').toggleClass('main');
        $('.mob-menu').toggleClass('mob-menu-width');
        $('body').toggleClass('ovetflow');
    });

    $("body").on("click", "#share-btn", function() {
        $('#share-block').slideToggle();
    });

    // "Тренерский штаб, команда, администрация" показывает мобилка
    $("body").on("click", ".mkairat-fnav", function() {
        $('.mstadium').css("height", "50vh");
        $('.select-coach, .select-player, .select-admin').fadeOut();
        var href = $(this).data("id");
        $('.blocks').fadeOut().promise().done(function () {
            $('#'+href).fadeIn();
            $("html, body").animate({scrollTop: $('#'+href).offset().top }, 1000, function () {
                $('#'+href+'-content').animate({ opacity: 1 }, 1000);

            });
            $('.together').fadeIn();
            $('.btn-teams-nav ').fadeOut();
            $('.mstadium').css("height", "auto");
        });
        // setTimeout(function () {
        //     $('#mob-stadium').css("height", "20vh");
        // },1000)
    });


    // "Тренерский штаб, команда, администрация" - кнопка мобилка
    var actNav = 1;
    $("body").on("click", ".team-mob-nav", function() {
        var id = $(this).data("id");
        actNav = id;
        $('.team-mob-nav').removeClass("active-team-nav ");
        $('.team-mob-nav[data-id='+actNav+']').addClass("active-team-nav ");
        $('.btn-teams-nav').fadeOut().promise().done(function () {
            $('.btn-teams-nav[data-id='+actNav+']').fadeIn();
        })
    });


    // Меняет тренеров
    var actmCoach = 1;
    $('.mselect-coach[data-id='+actmCoach+']').fadeIn();
    $("body").on("click", ".coach-item", function() {
        var id = $(this).data("id");
        $('.pd-change-button').removeClass("pd-active").promise().done(function () {
            $('.pd-change-button[data-id=1]').addClass("pd-active");
        });
        $('.pd').fadeOut().promise().done(function () {
            $('.pd[data-id=1]').fadeIn();
        });
        $('[data-id='+actmCoach+']').removeClass("active-coach");
        $(this).addClass("active-coach");
        $('.mselect-coach').fadeOut().promise().done(function () {
            $('.mselect-coach[data-id='+actmCoach+']').fadeIn();
        });
        actmCoach = id;
    });


    // Информация игроков мобилка
    var actmPlayerButton = 1;
    $('.player[data-id='+actmPlayerButton+']').fadeIn();
    $('.player-change-button[data-id=1]').addClass("player-active");
    $("body").on("click", ".player-change-button", function() {
        var id = $(this).data("id");
        $('.player-change-button').removeClass("player-active");
        $(this).addClass('player-active');
        $('.player').fadeOut().promise().done(function () {
            $('.player[data-id='+actmPlayerButton+']').fadeIn();
        });
        actmPlayerButton = id;
    });

    // Меняет игроков мобилка
    var actmPlayer = 1;
    $('.mselect-player[data-id='+actmPlayer+']').fadeIn();
    $("body").on("click", ".player-item", function() {
        var id = $(this).data("id");
        $('.player-change-button').removeClass("player-active").promise().done(function () {
            $('.player-change-button[data-id=1]').addClass("player-active");
        });
        $('.player').fadeOut().promise().done(function () {
            $('.player[data-id=1]').fadeIn();
        });
        $('[data-id='+actmPlayer+']').removeClass("active-player");
        $(this).addClass("active-player");
        $('.mselect-player').fadeOut().promise().done(function () {
            $('.mselect-player[data-id='+actmPlayer+']').fadeIn();
        });
        actmPlayer = id;
    });

    // Меняет администратор
    var actmAdmin = 1;
    $('.mselect-admin[data-id='+actmAdmin+']').fadeIn();
    $("body").on("click", ".admin-item", function() {
        var id = $(this).data("id");
        $('[data-id='+actmAdmin+']').removeClass("active-admin");
        $(this).addClass("active-admin");
        $('.mselect-admin').fadeOut().promise().done(function () {
            $('.mselect-admin[data-id='+actmAdmin+']').fadeIn();
        });
        actmAdmin = id;
    });

    // Закупки меняет год
    var actYear = 2;
    $('.download-fade[data-id='+actYear+']').fadeIn();
    $("body").on("click", ".change-year", function() {
        var id = $(this).data("id");
        $('[data-id='+actYear+']').removeClass("active-z");
        $(this).addClass("active-z");
        $('.download-fade').fadeOut().promise().done(function () {
            $('.download-fade[data-id='+actYear+']').fadeIn();
            $('.border-fade').css('display', 'none').promise().done(function () {
                $('.border-fade[data-id=1]').css('display', 'block')
            });
        });
        actYear = id;
    });
    // Закупки меняет active
    var  actLf = 1;
    $('.border-fade[data-id='+actLf+']').css('display', 'block')
    $("body").on("click", ".list-file", function() {
        var id = $(this).data("id");
        $('[data-id='+actLf+']').find('.name-file').removeClass("act-dwd");
        $(this).find('.name-file').addClass("act-dwd");
        actLf = id;
        $('.border-fade').css('display', 'none').promise().done(function () {
            $('.border-fade[data-id='+actLf+']').css('display', 'block')
        });
    });

    // Интернет-магазин слайдер
    var actSlider = 1;
    $("body").on("click", ".btn-filter", function() {
        var id = $(this).data("id");
        $('[data-id='+actSlider+']').removeClass("active-filter");
        $(this).addClass("active-filter");
        $('.btn-filterl-helper, .btn-filterr-helper').removeClass("active-filter");
        $(this).find('.btn-filterl-helper').addClass("active-filter");
        $(this).find('.btn-filterr-helper').addClass("active-filter");
        actSlider = id;
    });


    var xact = 1;
    $("body").on("click", ".xzoom-select", function() {
        var id = $(this).data("id");
        $('.xactive-bg').remove();
        $(this).append("<div class='xactive-bg transformy'></div>")
        xact = id;
    });

    var actDesc = 1;
    $('.pdi-desc-btn[data-id='+actDesc+']').addClass("active-desc");
    $('.pdi-desc-text[data-id='+actDesc+']').fadeIn();
    $("body").on("click", ".pdi-desc-btn", function() {
        var id = $(this).data("id");
        $('[data-id='+actDesc+']').removeClass("active-desc");
        $(this).addClass("active-desc");
        $('.btn-filterl-helper, .btn-filterr-helper').removeClass("active-desc");
        $(this).find('.btn-filterl-helper').addClass("active-desc");
        $(this).find('.btn-filterr-helper').addClass("active-desc");
        $('.pdi-desc-text').fadeOut().promise().done(function () {
            $('.pdi-desc-text[data-id='+actDesc+']').fadeIn();
        })
        actDesc = id;
    });

    var actProductImg = 1;
    $("body").on("click", ".product-img", function() {
        var id = $(this).data("id");
        $('.online-store  .content').fadeOut().promise().done(function () {
            $('.product-detail-main').fadeIn();
            $('.online-store .filter-block-right').fadeOut();
        });
        actProductImg = id;
    });

    $("body").on("click", ".back-product", function() {
        $('.product-detail-main').fadeOut().promise().done(function () {
            $('.online-store  .content').fadeIn();
            $('.online-store .filter-block-right').fadeIn();
        });
    });


});