<!DOCTYPE html>
<html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?=$this->pageTitle?></title>
            <link rel="stylesheet" href="/assets_cvl/css/animate.css">
            <link rel="stylesheet" href="/assets_cvl/css/style.css">
            <link rel="stylesheet" href="/assets_cvl/css/fansybox.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


            <? if (Yii::app()->controller->id == "site") { ?>
            <link rel="stylesheet" href="/assets_cvl/css/responsive.css">
            <link rel="icon" type="image/png" href="/assets_cvl/img/favicons.png" />
            <? } ?>
            <? if (Yii::app()->controller->id == "ventilation") { ?>
                <link rel="icon" type="image/png" href="/assets_cvl/img/landing/ventilation.png" />
                <link rel="stylesheet" href="/assets_cvl/css/landing.css">
                <link rel="stylesheet" href="/assets_cvl/css/landing-responsive.css">
            <? } ?>
            <? if (Yii::app()->controller->id == "watersupply") { ?>
                <link rel="icon" type="image/png" href="/assets_cvl/img/landing/water/logo.png" />
                <link rel="stylesheet" href="/assets_cvl/css/landing.css">
                <link rel="stylesheet" href="/assets_cvl/css/landing-responsive.css">
            <? } ?>
            <? if (Yii::app()->controller->id == "coldsupply") { ?>
                <link rel="icon" type="image/png" href="/assets_cvl/img/landing/cold/logo.png" />
                <link rel="stylesheet" href="/assets_cvl/css/landing.css">
                <link rel="stylesheet" href="/assets_cvl/css/landing-responsive.css">
            <? } ?>
            <? if (Yii::app()->controller->id == "heating") { ?>
                <link rel="icon" type="image/png" href="/assets_cvl/img/landing/heating/logo.png" />
                <link rel="stylesheet" href="/assets_cvl/css/landing.css">
                <link rel="stylesheet" href="/assets_cvl/css/landing-responsive.css">
            <? } ?>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(function() {
                    $(window).scroll(function() {
                        if($(this).scrollTop() != 0) {
                            $('#toTop').fadeIn();
                        } else {
                            $('#toTop').fadeOut();
                        }
                    });
                    $('#toTop').click(function() {
                        $('body,html').animate({scrollTop:0},800);
                    });
                });
            </script>

            <script type="text/javascript" src="/assets_cvl/js/mask.js"></script>
            <script>
                jQuery(function($){
                    $(".phone2,.phone").inputmask("+7 (999) 999 99 99");
                });
            </script>

            <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47534857 = new Ya.Metrika({
                    id:47534857,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });
 
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
 
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47534857" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
			
			
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113463607-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'UA-113463607-1');
</script>
			
        </head>
    <body>
        <? Yii::app()->params['lan'] = ""; ?>
        <main>
            <?

                echo $content;
            ?>
        </main>
    </body>
</html>
