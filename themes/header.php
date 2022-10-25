<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1280, maximum-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Klen Design</title>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(90857622, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/90857622" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Marquiz script start -->
        <script>
        (function(w, d, s, o){
        var j = d.createElement(s); j.async = true; j.src = '//script.marquiz.ru/v2.js';j.onload = function() {
            if (document.readyState !== 'loading') Marquiz.init(o);
            else document.addEventListener("DOMContentLoaded", function() {
            Marquiz.init(o);
            });
        };
        d.head.insertBefore(j, d.head.firstElementChild);
        })(window, document, 'script', {
            host: '//quiz.marquiz.ru',
            region: 'eu',
            id: '5d5d7c9efd89e00044681318',
            autoOpen: false,
            autoOpenFreq: 'once',
            openOnExit: false,
            disableOnMobile: false
        }
        );
        </script>
    <!-- Marquiz script end -->
    <?php wp_head(); ?>
</head>
<body>
    <?php if( ! is_404() ){ ?>
    <header class="container container_one-section">
        <a href="/" class="header__logo">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.svg" alt="logo">
            <div class="header__logo__name">Klen Design</div>
        </a>
        <nav>
            <ul>
                <li><a href="#portfolio">Портфолио</a></li>
                <li><a href="#price">Стоимость</a></li>
                <li><a href="#promotion">Продвижение</a></li>
            </ul>
        </nav>
        <div class="header__call">
            <div class="header__call__btn btn_popup-back-call" data-form="call-back">Обратный звонок</div>
            <div class="header__call__tel">8 (812) 602-53-47</div>
        </div>
    </header>
    <?php } ?>