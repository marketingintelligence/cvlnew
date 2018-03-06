$(window).mousemove(function(e) {
    var change;
    var xpos = e.clientX;
    var ypos = e.clientY;
    var left = change * 20;
    var xpos = xpos * 2;
    ypos = ypos * 2;
    $('.parallax').css('top', ((0 + (ypos / 50)) + "px"));
    $('.parallax').css('right', ((0 + (xpos / 80)) + "px"));
    $('.parallax2').css('top', ((0 + (ypos / 50)) + "px"));
    $('.parallax2').css('left', ((0 + (xpos / 80)) + "px"))
    $('.parallax3').css('bottom', ((0 + (ypos / 50)) + "px"));
    $('.parallax3').css('left', ((0 + (xpos / 80)) + "px"))
});
$(document).ready(function() {

    $("body").on("click", "#zakaz-btn", function() {
        var name = $(".name").val();
        var phone = $(".phone").val();
        var error = 0;
        if (phone == "") {
            $(".phone").css("background", "#D66161");
            error++;
        }
        if (error == 0) {
            Send(name, phone);
        }
    });


    function Send(name, phone) {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: {name: name, phone: phone},
            success: function() {
                $('.before').animate({opacity: 0}, 500, function () {
                    $('.call-window-box2').append("<div class='transform' style='position:absolute;top:50%; left: 50%;width: 100%; text-align: center;'>Спасибо за обращению в нашу компанию, менеджер свяжется с Вами в течении 10 минут\n</div>")
                });
            }
        });
    }



    $('#nav-icon2').click(function() {
        $(this).toggleClass('open');
    });
    setInterval(function() {
        $('.blick').addClass('blickOn');
        setTimeout(function() {
            $('.blick').removeClass('blickOn')
        }, 1500);
    }, 2000);
    $(".call, .menu-click").css('cursor', 'pointer');


    if (window.matchMedia("(max-width: 300px)").matches) {
        $(".mobile-close, .city-name").css('cursor', 'pointer');
        $(".mobile-close").click(function() {
            $('#news .container').fadeOut();
            $('body, html').css('overflow-y', 'auto').css('height', 'auto');
        });
        $(".news-item").click(function() {
            $(".news-item").removeClass('active');
            $(this).addClass('active');
            var id = $(this).data('id');
            $('body, html').css('overflow-y', 'hidden').css('height', '100%');
            if ($('.news-container').hasClass('active')) {
                $('#news .container').fadeIn();
                $('.news-container').fadeOut().removeClass('active').promise().done(function() {
                    $('#news-' + id).fadeIn().addClass('active');
                })
            }
            if ($(this).children('.news-item-img').hasClass('green')) {
                $('.news-container').find('.date').css('color', '#19923f');
                $('.news-container').find('hr').css('background-color', '#19923f');
            }
            if ($(this).children('.news-item-img').hasClass('orange')) {
                $('.news-container').find('.date').css('color', '#ed7a1d');
                $('.news-container').find('hr').css('background-color', '#ed7a1d');
            }
            if ($(this).children('.news-item-img').hasClass('red')) {
                $('.news-container').find('.date').css('color', '#dd2023');
                $('.news-container').find('hr').css('background-color', '#dd2023');
            }
            if ($(this).children('.news-item-img').hasClass('blue')) {
                $('.news-container').find('.date').css('color', '#3197ff');
                $('.news-container').find('hr').css('background-color', '#3197ff');
            }
        });
    }

    if (window.matchMedia("(max-width: 1049px)").matches) {
        $(".mobile-close, .city-name").css('cursor', 'pointer');
        $(".mobile-close").click(function() {
            $('#news .container').fadeOut();
        });
        $(".news-item").click(function() {
            $(".news-item").removeClass('active');
            $(this).addClass('active');
            var id = $(this).data('id');
            if ($('.news-container').hasClass('active')) {
                $('#news .container').fadeIn();
                $('.news-container').fadeOut().removeClass('active').promise().done(function() {
                    $('#news-' + id).fadeIn().addClass('active');
                })
            }
            if ($(this).children('.news-item-img').hasClass('green')) {
                $('.news-container').find('.date').css('color', '#19923f');
                $('.news-container').find('hr').css('background-color', '#19923f');
            }
            if ($(this).children('.news-item-img').hasClass('orange')) {
                $('.news-container').find('.date').css('color', '#ed7a1d');
                $('.news-container').find('hr').css('background-color', '#ed7a1d');
            }
            if ($(this).children('.news-item-img').hasClass('red')) {
                $('.news-container').find('.date').css('color', '#dd2023');
                $('.news-container').find('hr').css('background-color', '#dd2023');
            }
            if ($(this).children('.news-item-img').hasClass('blue')) {
                $('.news-container').find('.date').css('color', '#3197ff');
                $('.news-container').find('hr').css('background-color', '#3197ff');
            }
        });
    } else {
        $(".news-item").click(function() {
            $(".news-item").removeClass('active');
            $(this).addClass('active');
            var id = $(this).data('id');
            if ($('.news-container').hasClass('active')) {
                $('.news-container').fadeOut().removeClass('active').promise().done(function() {
                    $('#news-' + id).fadeIn().addClass('active');
                })
            }
            if ($(this).children('.news-item-img').hasClass('green')) {
                $('.news-container').find('.date').css('color', '#19923f');
                $('.news-container').find('hr').css('background-color', '#19923f');
            }
            if ($(this).children('.news-item-img').hasClass('orange')) {
                $('.news-container').find('.date').css('color', '#ed7a1d');
                $('.news-container').find('hr').css('background-color', '#ed7a1d');
            }
            if ($(this).children('.news-item-img').hasClass('red')) {
                $('.news-container').find('.date').css('color', '#dd2023');
                $('.news-container').find('hr').css('background-color', '#dd2023');
            }
            if ($(this).children('.news-item-img').hasClass('blue')) {
                $('.news-container').find('.date').css('color', '#3197ff');
                $('.news-container').find('hr').css('background-color', '#3197ff');
            }
        });
    }
    $(".cold-supply").hover(function() {
        $('.snow-canvas').css('display', 'block');
        $(this).css('background-image', 'none');
    }, function() {
        $('.snow-canvas').css('display', 'none');
        $(this).css('backgroundImage', 'url("assets/img/cold-supply.png")');
    });
    $(".heating").hover(function() {
        $(this).css('background-image', 'none');
        $('#sconvas').css('display', 'block');
        setTimeout(function() {
            $('#sconvas').css('display', 'none');
            $('.heating canvas').not('#sconvas').css('display', 'block!important');
        }, 2000);
    }, function() {
        $('.heating canvas').css('display', 'none!important');
        $(this).css('backgroundImage', 'url("assets/img/heating.png")');
    });
    $(".water-supply").hover(function() {
        $(this).css('background-image', 'none');
    }, function() {
        $(this).css('backgroundImage', 'url("assets/img/water.png")');
    });
    $(".ventilation").hover(function() {
        $('#myCanvas').css('display', 'block');
        $(this).css('background-image', 'none');
    }, function() {
        $('#myCanvas').css('display', 'none');
        $(this).css('backgroundImage', 'url("assets/img/ventilation.png")');
    });
    $(".preim-item").hover(function() {
        $(this).find('img').css('filter', 'brightness(0) invert(1)');
    }, function() {
        $(this).find('img').css('filter', 'invert(0)');
    });
    $(".advice-item").click(function() {
        $(".advice-item").css('border', '1px solid transparent');
        if ($(this).hasClass('red')) {
            $(this).css('border', '1px solid #dd2023');
        }
        if ($(this).hasClass('orange')) {
            $(this).css('border', '1px solid #ed7a1d');
        }
        if ($(this).hasClass('green')) {
            $(this).css('border', '1px solid #19923f');
        }
        if ($(this).hasClass('blue')) {
            $(this).css('border', '1px solid #3197ff');
        }
        var id = $(this).data('id');
        if ($('.advice-container').hasClass('active')) {
            $('.advice-container').fadeOut().removeClass('active').promise().done(function() {
                $('#advice-' + id).fadeIn().addClass('active');
            })
        }
    });
    $(".ventilation").click(function() {
        window.open("ventilation.html", "_self");
    });
    $(".cold-supply").click(function() {
        window.open("coldsupply.html", "_self");
    });
    $(".water-supply").click(function() {
        window.open("watersupply.html", "_self");
    });
    $(".heating").click(function() {
        window.open("heating.html", "_self");
    });
    $(".slider-container-items").click(function() {
        $(".portfolio-text span").text('');
        var trial = $(this).find('img').attr('src');
        $('.portfolio-image-view').find('img').attr("src", trial).fadeIn();
        $(this).find('span').clone().appendTo(".portfolio-text span");
    });
    $(".slider-container-items").hover(function() {
        $(this).find('.border').addClass('animated flip').promise().done(function() {
            $(this).find('.border').removeClass('animated flip border-animate');
            $(this).find('.border').addClass('border-animate');
        });
        $(this).find('img').css('opacity', '1');
    }, function() {
        $(this).find('.border').removeClass('animated flip border-animate');
        $(this).find('img').css('opacity', '0.5');
    });
    $(".slide-next, .slide-prev").hover(function() {
        $(this).addClass('invert');
    }, function() {
        $(this).removeClass('invert');
    });
    $(".w-service-item").hover(function() {
        $(this).addClass('active');
    }, function() {
        $(this).removeClass('active');
    });
    $(".social a li").hover(function() {
        $(this).addClass('animated rotateIn');
    }, function() {
        $(this).removeClass('animated rotateIn');
    });
    $(".call").hover(function() {
        $('.call-items-1,.call-items-2,.call-items-3 ').css('visibility', 'hidden');
        setTimeout(function() {
            $('.call-items-1').removeClass('animated rollIn').addClass('animated rollIn').css('visibility', 'visible')
        }, 0);
        setTimeout(function() {
            $('.call-items-2').removeClass('animated rollIn').addClass('animated rollIn').css('visibility', 'visible')
        }, 300);
        setTimeout(function() {
            $('.call-items-3').removeClass('animated rollIn').addClass('animated rollIn').css('visibility', 'visible')
        }, 600);
    }, function() {
        $('.call-items-1,.call-items-2,.call-items-3 ').removeClass('animated rollIn');
    });

    if (window.matchMedia("(max-width: 1050px)").matches) {
        $('body').on('click', '.call', function() {
            $('.modal').fadeIn();
            $('.footer').css('opacity', '0');
        });
        $('body').on('click', '.close-button', function() {
            $('.modal').fadeOut();
            $('.footer').css('opacity', '1');
        });
        $("#reviews .preim-item").hover(function() {
            $(this).find('img').css('filter', 'invert(0)');
        }, function() {
            $(this).find('img').css('filter', 'invert(0)');
        });
        $(".ar-ventilation").click(function() {
            window.open("ventilation.html", "_self");
        });
        $(".ar-cold").click(function() {
            window.open("coldsupply.html", "_self");
        });
        $(".ar-water").click(function() {
            window.open("watersupply.html", "_self");
        });
        $(".ar-heating").click(function() {
            window.open("heating.html", "_self");
        });
        var clicked = 0;
        $(".m-icon").click(function() {
            $('ul.menu-container li').css('display', 'inline-block').fadeIn(0)
            if (clicked == 0) {
                $('ul.menu-container').removeClass('animated slideOutLeft').addClass('animated slideInLeft').fadeIn(0);
                $(".m-icon").addClass("cross");
                clicked = 1;
            } else if (clicked == 1) {
                $(".m-icon").removeClass("cross");
                $("ul.menu-container").removeClass('animated slideInLeft').addClass('animated slideOutLeft').fadeOut(0);
                clicked = 0;
            }
        });
        $(".page-scroll").on("click", "a", function(event) {
            event.preventDefault();
            var id = $(this).attr('href'),
                top = $(id).offset().top;
            $('#home, #about, #services, #preim, #portfolio, #certificate, #partners, #reviews, #news, #advice, #contacts').css('display', 'none').promise().done(function() {
                $('' + id).addClass('animated fadeIn').css('display', 'block');
            });
            if (id == '#contacts') {
                $('.footer').css('opacity', '0');
            } else {
                $('.footer').css('opacity', '1');
            }
            $(".m-icon").removeClass("cross");
            $("ul.menu-container").addClass('animated slideOutLeft');
            $("ul.menu-container li").stop().removeClass('li-animate').fadeOut(0);
            clicked = 0;
        });
    } else {
        $('body').on('click', '.call', function() {
            $('section').not('.modal').css('opacity', '0.5').promise().done(function() {
                $('.modal').fadeIn().removeClass('animated bounceOutUp').addClass('animated bounceInDown').css('opacity', '1');
            })
        });
        $('body').on('click', '.close-button', function() {
            $('.modal').removeClass('animated bounceInDown').addClass('animated bounceOutUp');
            $('section').css('opacity', '1');
        });

        $(".menu-click").hover(function() {
            $("ul.menu-container").show();
            var lis = $("ul.menu-container li");
            for (var i = 0; i < lis.length; i++) {
                $(lis[i]).stop().addClass('li-animate').delay(i * 100).fadeIn();
            }
        }, function() {
            $("ul.menu-container li").stop().removeClass('li-animate').fadeOut(0);
            $("ul.menu-container").hide();
        });
        $("#reviews .preim-item").hover(function() {
            $(this).find('img').css('filter', 'invert(0)');
            $(this).find('.review-title').css('display', 'block').addClass('animated zoomIn');
        }, function() {
            $(this).find('img').css('filter', 'invert(0)');
            $(this).find('.review-title').css('display', 'none').removeClass('animated zoomIn');
        });
    }
    setTimeout(function() {
        $('#logo-1, .call-items-1').addClass('animated rollIn').css('visibility', 'visible')
    }, 1000);
    setTimeout(function() {
        $('#logo-2, .call-items-2').addClass('animated rollIn').css('visibility', 'visible')
    }, 1500);
    setTimeout(function() {
        $('#logo-3, .call-items-3').addClass('animated rollIn').css('visibility', 'visible')
    }, 2000);
    setTimeout(function() {
        $('.call-items-1').removeClass('animated rollIn').css('visibility', 'visible')
    }, 2200);
    setTimeout(function() {
        $('.call-items-2').removeClass('animated rollIn').css('visibility', 'visible')
    }, 2200);
    setTimeout(function() {
        $('.call-items-3').removeClass('animated rollIn').css('visibility', 'visible')
    }, 2200);
    setTimeout(function() {
        $('.logo-text h2').addClass('animated bounceInLeft').css('visibility', 'visible')
    }, 2500);
    setTimeout(function() {
        $('.logo-text p').addClass('animated bounceInRight').css('visibility', 'visible')
    }, 2500);
    $("a[rel=group1]").fancybox();
    $("a[rel=group2]").fancybox();
    $("a[rel=group3]").fancybox();
});
if (window.matchMedia("(max-width: 850px)").matches) {
    $('body').on('click', '.city-name', function() {
        var id = $(this).data('id');
        $('.info').slideUp();
        $('.city-name').removeClass('active');
        if ($('#info-' + id).hasClass('active')) {
            $('#info-' + id).removeClass('active').slideUp();
        } else if (!$('#info-' + id).hasClass('active')) {
            $('#info-' + id).addClass('active').slideDown();
            $(this).addClass('active').show();
            if ($('#info-' + id).addClass('active').slideDown()) {
                $('.info').not($('#info-' + id)).removeClass('active');
            }
        }
    });
    var clicked = 0;
    $('#ventilation').on('click', '.menu', function() {
        $('ul.menu-container li').css('display', 'inline-block').fadeIn(0);
        if (clicked == 0) {
            $('ul.menu-container').removeClass('animated slideOutLeft').addClass('animated slideInLeft').fadeIn(0);
            $(".m-icon").addClass("cross");
            clicked = 1;
        } else if (clicked == 1) {
            $(".m-icon").removeClass("cross");
            $("ul.menu-container").removeClass('animated slideInLeft').addClass('animated slideOutLeft').fadeOut(0);
            clicked = 0;
        }
    });
    $(".v-anim h3, .products-item, .city-name, .c-products-item").css('cursor', 'pointer');
    $("w-products-item, .h-products-item, .h-green-item").css('cursor', 'pointer');
    $('#ventilation').on('click', '.h-products-item', function() {
        var id = $(this).data('id');
        $('.m-text').hide();
        $('.h-products-item').removeClass('active');
        if ($('#' + id).hasClass('active')) {
            $('#' + id).removeClass('active').slideUp();
        } else if (!$('#' + id).hasClass('active')) {
            $('#' + id).addClass('active').slideDown();
            $(this).addClass('active').show();
            if ($('#' + id).addClass('active').slideDown()) {
                $('.m-text').not($('#' + id)).removeClass('active');
            }
        }
    });
    $('.v-responsive').on('click', '.products-item', function() {
        $('.products-item p').not($(this).find('p')).fadeOut();
        $(this).find('p').fadeToggle();
    });
    $('#ventilation').on('click', '.r-1', function() {
        $('.v-anim h3').removeClass('l-border');
        $('.complex-item-2, .complex-item-3, .complex-item-4').fadeOut();
        $('.complex-item-1').fadeToggle();
        $(this).toggleClass('l-border');
    });
    $('#ventilation').on('click', '.r-2', function() {
        $('.v-anim h3').removeClass('l-border');
        $('.complex-item-1, .complex-item-3, .complex-item-4').fadeOut();
        $('.complex-item-2').fadeToggle();
        $(this).toggleClass('l-border');
    });
    $('#ventilation').on('click', '.r-3', function() {
        $('.v-anim h3').removeClass('l-border');
        $('.complex-item-2, .complex-item-1, .complex-item-4').fadeOut();
        $('.complex-item-3').fadeToggle();
        $(this).toggleClass('l-border');
    });
    $('#ventilation').on('click', '.r-4', function() {
        $('.v-anim h3').removeClass('l-border');
        $('.complex-item-2, .complex-item-3, .complex-item-1').fadeOut();
        $('.complex-item-4').fadeToggle();
        $(this).toggleClass('l-border');
    });
    $('#ventilation').on('click', '.c-products-item', function() {
        $(this).find('span').slideToggle();
        $('.c-products-item span').not($(this).find('span')).slideUp();
    });
    $('#ventilation').on('click', '.w-products-item', function() {
        $('.w-text').not($(this).find('.w-text')).hide();
        $(this).find('.w-text').slideToggle();
    });
    $('#ventilation').on('click', '.h-green-item', function() {
        $('.blue-text, .orange-text, .red-text').hide();
        $('.green-text').slideToggle();
    });
    $('#ventilation').on('click', '.h-red-item', function() {
        $('.blue-text, .orange-text, .green-text').hide();
        $('.red-text').slideToggle();
    });
    $('#ventilation').on('click', '.h-blue-item', function() {
        $('.green-text, .orange-text, .red-text').hide();
        $('.blue-text').slideToggle();
    });
    $('#ventilation').on('click', '.h-orange-item', function() {
        $('.blue-text, .green-text, .red-text').hide();
        $('.orange-text').slideToggle();
    });
} else {
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 400) {
            $('.header-menu').removeClass('active').addClass('animated slideInDown fixed');
            $('.header-address, .header-menu hr').hide();
            $('.none').show()
        } else {
            $('.header-menu').removeClass('animated slideInDown animated fixed').addClass('active');
            $('.header-address, .header-menu hr').show();
            $('.none').hide()
        }
    })
    setInterval(function() {
        $('.h1').addClass('animated jello')
    }, 500);
    setInterval(function() {
        $('.h2').addClass('animated jello')
    }, 1500);
    setInterval(function() {
        $('.h3').addClass('animated jello')
    }, 2000);
    setInterval(function() {
        $('.h4').addClass('animated jello')
    }, 1000);
    setInterval(function() {
        $('.h5').addClass('animated jello')
    }, 2500);
    setInterval(function() {
        $('.h6').addClass('animated jello')
    }, 3500);
    setInterval(function() {
        $('.h7').addClass('animated jello')
    }, 4000);
    setInterval(function() {
        $('.h8').addClass('animated jello')
    }, 3000);
    setInterval(function() {
        $('.h9').addClass('animated jello')
    }, 4500);
    setInterval(function() {
        $('.h10').addClass('animated jello')
    }, 5500);
    setInterval(function() {
        $('.h11').addClass('animated jello')
    }, 6000);
    setInterval(function() {
        $('.h12').addClass('animated jello')
    }, 5000);
    $('.cloud-3, .cloud-1, .cloud-2').addClass('animated zoomIn');
    setTimeout(function() {
        $('#c-home .call-window').addClass('animated slideInDown').css('visibility', 'visible');
    }, 1000);
    $(function() {
        var $window = $(window),
            win_height_padded = $window.height() * 1.1,
            isTouch = Modernizr.touch;
        if (isTouch) {
            $('.revealOnScroll').addClass('animated');
        }
        $window.on('scroll', revealOnScroll);

        function revealOnScroll() {
            var scrolled = $window.scrollTop(),
                win_height_padded = $window.height() * 1.1;
            $(".revealOnScroll:not(.animated)").each(function() {
                var $this = $(this),
                    offsetTop = $this.offset().top;
                if (scrolled + win_height_padded > offsetTop) {
                    if ($this.data('timeout')) {
                        window.setTimeout(function() {
                            $this.addClass('animated ' + $this.data('animation'));
                            $this.css('visibility', 'visible');
                        }, parseInt($this.data('timeout'), 10));
                    } else {
                        $this.addClass('animated ' + $this.data('animation'));
                    }
                }
            });
            $(".revealOnScroll.animated").each(function(index) {
                var $this = $(this),
                    offsetTop = $this.offset().top;
                if (scrolled + win_height_padded < offsetTop) {
                    $(this).removeClass('animated bounceIn zoomIn fadeInRight');
                    $(this).css('visibility', 'hidden');
                }
            });
        }
        revealOnScroll();
    });
    $(function() {
        var $window = $(window),
            win_height_padded = $window.height() * 1.1,
            isTouch = Modernizr.touch;
        if (isTouch) {
            $('.revealOnScroll2').addClass('animated');
        }
        $window.on('scroll', revealOnScroll2);

        function revealOnScroll2() {
            var scrolled = $window.scrollTop(),
                win_height_padded = $window.height() * 1.1;
            $(".revealOnScroll2:not(.animated)").each(function() {
                var $this = $(this),
                    offsetTop = $('.v-anim').offset().top;
                if (scrolled + win_height_padded > offsetTop) {
                    if ($this.data('timeout')) {
                        window.setTimeout(function() {
                            $this.addClass('animated ' + $this.data('animation'));
                            $this.css('visibility', 'visible');
                        }, parseInt($this.data('timeout'), 10));
                    } else {
                        $this.addClass('animated ' + $this.data('animation'));
                    }
                }
            });
            $(".revealOnScroll2.animated").each(function(index) {
                var $this = $(this),
                    offsetTop = $this.offset().top;
                if (scrolled + win_height_padded < offsetTop) {
                    $(this).removeClass('animated zoomIn tada fadeIn');
                    $(this).css('visibility', 'hidden');
                }
            });
        }
        revealOnScroll2();
    });
    $(function() {
        var $window = $(window),
            win_height_padded = $window.height() * 1.1,
            isTouch = Modernizr.touch;
        if (isTouch) {
            $('.revealOnScroll3').addClass('animated');
        }
        $window.on('scroll', revealOnScroll3);

        function revealOnScroll3() {
            var scrolled = $window.scrollTop(),
                win_height_padded = $window.height() * 1.1;
            $(".revealOnScroll3:not(.animated)").each(function() {
                var $this = $(this),
                    offsetTop = $('.c-complex').offset().top + 400;
                if (scrolled + win_height_padded > offsetTop) {
                    if ($this.data('timeout')) {
                        window.setTimeout(function() {
                            $this.addClass('animated ' + $this.data('animation'));
                            $this.css('visibility', 'visible');
                        }, parseInt($this.data('timeout'), 10));
                    } else {
                        $this.addClass('animated ' + $this.data('animation'));
                    }
                }
            });
            $(".revealOnScroll3.animated").each(function(index) {
                var $this = $(this),
                    offsetTop = $this.offset().top;
                if (scrolled + win_height_padded < offsetTop) {
                    $(this).removeClass('animated flipInX fadeInLeft fadeInRight zoomIn bounceIn tada');
                    $(this).css('visibility', 'hidden');
                }
            });
        }
        revealOnScroll3();
    });
    $(function() {
        var $window = $(window),
            win_height_padded = $window.height() * 1.1,
            isTouch = Modernizr.touch;
        if (isTouch) {
            $('.revealOnScroll4').addClass('animated');
        }
        $window.on('scroll', revealOnScroll4);

        function revealOnScroll4() {
            var scrolled = $window.scrollTop(),
                win_height_padded = $window.height() * 1.1;
            $(".revealOnScroll4:not(.animated)").each(function() {
                var $this = $(this),
                    offsetTop = $('.h-complex').offset().top + 350;
                if (scrolled + win_height_padded > offsetTop) {
                    if ($this.data('timeout')) {
                        window.setTimeout(function() {
                            $this.addClass('animated ' + $this.data('animation'));
                            $this.css('visibility', 'visible');
                        }, parseInt($this.data('timeout'), 10));
                    } else {
                        $this.addClass('animated ' + $this.data('animation'));
                    }
                }
            });
            $(".revealOnScroll4.animated").each(function(index) {
                var $this = $(this),
                    offsetTop = $this.offset().top;
                if (scrolled + win_height_padded < offsetTop) {
                    $(this).removeClass('animated fadeInDown fadeInUp fadeInLeft fadeInRight zoomIn tada');
                    $(this).css('visibility', 'hidden');
                }
            });
        }
        revealOnScroll4();
    });
    $(function() {
        var $window = $(window),
            win_height_padded = $window.height() * 1.1,
            isTouch = Modernizr.touch;
        if (isTouch) {
            $('.revealOnScroll5').addClass('animated');
        }
        $window.on('scroll', revealOnScroll5);

        function revealOnScroll5() {
            var scrolled = $window.scrollTop(),
                win_height_padded = $window.height() * 1.1;
            $(".revealOnScroll5:not(.animated)").each(function() {
                var $this = $(this),
                    offsetTop = $('.city-animate').offset().top + 200;
                if (scrolled + win_height_padded > offsetTop) {
                    if ($this.data('timeout')) {
                        window.setTimeout(function() {
                            $this.addClass('animated ' + $this.data('animation'));
                            $this.css('visibility', 'visible');
                        }, parseInt($this.data('timeout'), 10));
                    } else {
                        $this.addClass('animated ' + $this.data('animation'));
                    }
                }
            });
            $(".revealOnScroll5.animated").each(function(index) {
                var $this = $(this),
                    offsetTop = $this.offset().top;
                if (scrolled + win_height_padded < offsetTop) {
                    $(this).removeClass('animated flipInX  flipInY rotateIn rollIn');
                    $(this).css('visibility', 'hidden');
                }
            });
        }
        revealOnScroll5();
    });
    $(function() {
        var $window = $(window),
            win_height_padded = $window.height() * 1.1,
            isTouch = Modernizr.touch;
        if (isTouch) {
            $('.revealOnScroll6').addClass('animated');
        }
        $window.on('scroll', revealOnScroll6);
        var width = $(window).width();

        function revealOnScroll6() {
            var scrolled = $window.scrollTop(),
                win_height_padded = $window.height() * 1.1;
            $(".revealOnScroll6:not(.animated)").each(function() {
                var $this = $(this),
                    offsetTop = $('.water').offset().top + 300;
                if (width > 1400) {
                    offsetTop = $('.water').offset().top + 500;
                }
                if (scrolled + win_height_padded > offsetTop) {
                    if ($this.data('timeout')) {
                        window.setTimeout(function() {
                            $this.addClass('animated ' + $this.data('animation'));
                            $this.css('visibility', 'visible');
                        }, parseInt($this.data('timeout'), 10));
                    } else {
                        $this.addClass('animated ' + $this.data('animation'));
                    }
                }
            });
            $(".revealOnScroll6.animated").each(function(index) {
                var $this = $(this),
                    offsetTop = ('.header-menu').offset().top;
                if (offsetTop == 0) {
                    $(this).removeClass('animated flipInX');
                    $(this).css('visibility', 'hidden');
                }
            });
        }
        revealOnScroll6();
    });
    $(function() {
        var $window = $(window),
            win_height_padded = $window.height() * 1.1,
            isTouch = Modernizr.touch;
        if (isTouch) {
            $('.revealOnScroll7').addClass('animated');
        }
        $window.on('scroll', revealOnScroll7);

        function revealOnScroll7() {
            var scrolled = $window.scrollTop(),
                win_height_padded = $window.height() * 1.1;
            $(".revealOnScroll7:not(.animated)").each(function() {
                var $this = $(this),
                    offsetTop = $('.city-animate').offset().top + 200;
                if (scrolled + win_height_padded > offsetTop) {
                    if ($this.data('timeout')) {
                        window.setTimeout(function() {
                            $this.addClass('animated ' + $this.data('animation'));
                            $this.css('visibility', 'visible');
                        }, parseInt($this.data('timeout'), 10));
                    } else {
                        $this.addClass('animated ' + $this.data('animation'));
                    }
                }
            });
            $(".revealOnScroll7.animated").each(function(index) {
                var $this = $(this),
                    offsetTop = $this.offset().top;
                if (scrolled + win_height_padded < offsetTop) {
                    $(this).removeClass('animated flipInX  flipInY rotateIn rollIn');
                    $(this).css('visibility', 'hidden');
                }
            });
        }
        revealOnScroll7();
    });
    $(function() {
        var $window = $(window),
            win_height_padded = $window.height() * 1.1,
            isTouch = Modernizr.touch;
        if (isTouch) {
            $('.revealOnScroll8').addClass('animated');
        }
        $window.on('scroll', revealOnScroll8);

        function revealOnScroll8() {
            var scrolled = $window.scrollTop(),
                win_height_padded = $window.height() * 1.1;
            $(".revealOnScroll8:not(.animated)").each(function() {
                var $this = $(this),
                    offsetTop = $('.revealOnScroll8').offset().top;
                if (scrolled + win_height_padded > offsetTop) {
                    if ($this.data('timeout')) {
                        window.setTimeout(function() {
                            $this.addClass('animated ' + $this.data('animation'));
                            $this.css('visibility', 'visible');
                        }, parseInt($this.data('timeout'), 10));
                    } else {
                        $this.addClass('animated ' + $this.data('animation'));
                    }
                }
            });
            $(".revealOnScroll8.animated").each(function(index) {
                var $this = $(this),
                    offsetTop = $this.offset().top;
                if (scrolled + win_height_padded < offsetTop) {
                    $(this).removeClass('animated flipInX');
                    $(this).css('visibility', 'hidden');
                }
            });
        }
        revealOnScroll5();
    });
}
var smokemachine = function(context, color) {
    color = color || [255, 255, 255]
    var polyfillAnimFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    var lastframe;
    var currentparticles = []
    var pendingparticles = []
    var buffer = document.createElement('canvas'),
        bctx = buffer.getContext('2d')
    buffer.width = 20
    buffer.height = 20
    var opacities = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 5, 5, 7, 4, 4, 1, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 17, 27, 41, 52, 56, 34, 23, 15, 11, 4, 9, 5, 1, 0, 0, 0, 0, 0, 0, 1, 45, 63, 57, 45, 78, 66, 52, 41, 34, 37, 23, 20, 0, 1, 0, 0, 0, 0, 1, 43, 62, 66, 64, 67, 115, 112, 114, 56, 58, 47, 33, 18, 12, 10, 0, 0, 0, 0, 39, 50, 63, 76, 87, 107, 105, 112, 128, 104, 69, 64, 29, 18, 21, 15, 0, 0, 0, 7, 42, 52, 85, 91, 103, 126, 153, 128, 124, 82, 57, 52, 52, 24, 1, 0, 0, 0, 2, 17, 41, 67, 84, 100, 122, 136, 159, 127, 78, 69, 60, 50, 47, 25, 7, 1, 0, 0, 0, 34, 33, 66, 82, 113, 138, 149, 168, 175, 82, 142, 133, 70, 62, 41, 25, 6, 0, 0, 0, 18, 39, 55, 113, 111, 137, 141, 139, 141, 128, 102, 130, 90, 96, 65, 37, 0, 0, 0, 2, 15, 27, 71, 104, 129, 129, 158, 140, 154, 146, 150, 131, 92, 100, 67, 26, 3, 0, 0, 0, 0, 46, 73, 104, 124, 145, 135, 122, 107, 120, 122, 101, 98, 96, 35, 38, 7, 2, 0, 0, 0, 50, 58, 91, 124, 127, 139, 118, 121, 177, 156, 88, 90, 88, 28, 43, 3, 0, 0, 0, 0, 30, 62, 68, 91, 83, 117, 89, 139, 139, 99, 105, 77, 32, 1, 1, 0, 0, 0, 0, 0, 16, 21, 8, 45, 101, 125, 118, 87, 110, 86, 64, 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 28, 79, 79, 117, 122, 88, 84, 54, 46, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 6, 55, 61, 68, 71, 30, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 23, 25, 20, 12, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 12, 9, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0]
    var data = bctx.createImageData(20, 20)
    var d = data.data
    for (var i = 0; i < d.length; i += 4) {
        d[i] = color[0]
        d[i + 1] = color[1]
        d[i + 2] = color[2]
        d[i + 3] = opacities[i / 4]
    }
    bctx.putImageData(data, 0, 0)
    var imagewidth = 20 * 10
    var imageheight = 20 * 10

    function particle(x, y, l) {
        this.x = x
        this.y = y
        this.age = 0
        this.vx = (Math.random() * 8 - 4) / 100
        this.startvy = -(Math.random() * 30 + 10) / 100
        this.vy = this.startvy
        this.scale = Math.random() * .5
        this.lifetime = Math.random() * l + l / 2
        this.finalscale = 5 + this.scale + Math.random()
        this.update = function(deltatime) {
            this.x += this.vx * deltatime
            this.y += this.vy * deltatime
            var frac = Math.pow((this.age) / this.lifetime, .5)
            this.vy = (1 - frac) * this.startvy
            this.age += deltatime
            this.scale = frac * this.finalscale
        }
        this.draw = function() {
            context.globalAlpha = (1 - Math.abs(1 - 2 * (this.age) / this.lifetime)) / 8
            var off = this.scale * imagewidth / 2
            var xmin = this.x - off
            var xmax = xmin + this.scale * imageheight
            var ymin = this.y - off
            var ymax = ymin + this.scale * imageheight
            context.drawImage(buffer, xmin, ymin, xmax - xmin, ymax - ymin)
        }
    }

    function addparticles(x, y, n, lifetime) {
        lifetime = lifetime || 4000
        n = n || 10
        if (n < 1) return Math.random() <= n && pendingparticles.push(new particle(x, y, lifetime));
        for (var i = 0; i < n; i++) {
            pendingparticles.push(new particle(x, y, lifetime))
        };
    }

    function updateanddrawparticles(deltatime) {
        context.clearRect(0, 0, canvas.width, canvas.height);
        deltatime = deltatime || 16
        var newparticles = []
        currentparticles = currentparticles.concat(pendingparticles)
        pendingparticles = []
        currentparticles.forEach(function(p) {
            p.update(deltatime)
            if (p.age < p.lifetime) {
                p.draw()
                newparticles.push(p)
            }
        })
        currentparticles = newparticles
    }

    function frame(time) {
        if (running) {
            var deltat = time - lastframe
            lastframe = time;
            updateanddrawparticles(deltat)
            polyfillAnimFrame(frame)
        }
    }
    var running = false

    function start() {
        running = true
        polyfillAnimFrame(function(time) {
            lastframe = time
            polyfillAnimFrame(frame)
        })
    }

    function stop() {
        running = false
    }
    return {
        start: start,
        stop: stop,
        step: updateanddrawparticles,
        addsmoke: addparticles
    }
}
var canvas = document.getElementById('myCanvas')
var ctx = canvas.getContext('2d')
canvas.width = innerWidth
canvas.height = innerHeight
var party = smokemachine(ctx, [255, 255, 255])
party.start()
onmousemove = function(e) {
    var x = e.clientX
    var y = e.clientY
    var n = .5
    var t = Math.floor(Math.random() * 200) + 3800
    party.addsmoke(x, y, n, t)
}
setInterval(function() {
    party.addsmoke(innerWidth / 2, innerHeight, 1)
}, 100);
var particles = [];
var particleCount = 45;
var maxVelocity = 3;
var targetFPS = 70;
var canvasWidth = 600;
var canvasHeight = 600;
var imageObj = new Image();
imageObj.onload = function() {
    particles.forEach(function(particle) {
        particle.setImage(imageObj);
    });
};
imageObj.src = "assets/img/Smoke10.png";

function Particle(context) {
    this.x = 0;
    this.y = 0;
    this.xVelocity = 0;
    this.yVelocity = 0;
    this.radius = 5;
    this.context = context;
    this.draw = function() {
        if (this.image) {
            this.context.drawImage(this.image, this.x - 128, this.y - 128);
            return;
        }
        this.context.beginPath();
        this.context.arc(this.x, this.y, this.radius, 0, 2 * Math.PI, false);
        this.context.fillStyle = "rgba(225, 255, 255, 0.70)";
        this.context.fill();
        this.context.closePath();
    };
    this.update = function() {
        this.x += this.xVelocity;
        this.y += this.yVelocity;
        if (this.x >= canvasWidth) {
            this.xVelocity = -this.xVelocity;
            this.x = canvasWidth;
        } else if (this.x <= 0) {
            this.xVelocity = -this.xVelocity;
            this.x = 0;
        }
        if (this.y >= canvasHeight) {
            this.yVelocity = -this.yVelocity;
            this.y = canvasHeight;
        } else if (this.y <= 0) {
            this.yVelocity = -this.yVelocity;
            this.y = 0;
        }
    };
    this.setPosition = function(x, y) {
        this.x = x;
        this.y = y;
    };
    this.setVelocity = function(x, y) {
        this.xVelocity = x;
        this.yVelocity = y;
    };
    this.setImage = function(image) {
        this.image = image;
    }
}

function generateRandom(min, max) {
    return Math.random() * (max - min) + min;
}
var context;

function init() {
    var canvas = document.getElementById('sconvas');
    if (canvas.getContext) {
        context = canvas.getContext('2d');
        for (var i = 0; i < particleCount; ++i) {
            var particle = new Particle(context);
            particle.setPosition(generateRandom(0, canvasWidth), generateRandom(0, canvasHeight));
            particle.setVelocity(generateRandom(-maxVelocity, maxVelocity), generateRandom(-maxVelocity, maxVelocity));
            particles.push(particle);
        }
    } else {
        alert("Please use a modern browser");
    }
}

function draw() {
    context.fillStyle = "rgba(0, 0, 0, 1)";
    context.fillRect(0, 0, 400, 400);
    particles.forEach(function(particle) {
        particle.draw();
    });
}

function update() {
    particles.forEach(function(particle) {
        particle.update();
    });
}
init();
if (context) {
    setInterval(function() {
        update();
        draw();
    }, 1000 / targetFPS);
}