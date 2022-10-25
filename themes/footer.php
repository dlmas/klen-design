<?php ?>
<footer class="container">
        <a href="/" class="footer__logo">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-footer.svg">
            <div class="footer__logo-name">Klen Design</div>
        </a>
        <div class="footer__info">
            <div class="footer__nav">
                <ul>
                    <li><a href="#portfolio">Портфолио</a></li>
                    <li><a href="#price">Расчет стоимости</a></li>
                    <li><a href="#promotion">Продвижение</a></li>
                </ul>
            </div>
            <div class="footer__contacts">
                8 (812) 602-53-47<br>
                info@klen-design.ru<br>
                с 9:00 до 21:00<br>
                ОГРНИП 319645100004188
            </div>
            <div class="footer__adress">
                г. Санкт Петербург, Невский пр. 38, БЦ Сенатор<br>
                @ Klen Design, 2018 - 2022
            </div>
        </div>
    </footer>
    <div class="popup-reviews">
        <div class="popup-reviews__container">
            <i class="gg-close">
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.7871 0.22188C20.5032 -0.0618363 20.0429 -0.0618363 19.759 0.22188L10.5045 9.47234L1.25009 0.22188C0.971156 -0.066833 0.510815 -0.0748267 0.221976 0.203984C-0.0668619 0.482795 -0.0748591 0.942938 0.204073 1.23165C0.209889 1.23774 0.215887 1.24364 0.221976 1.24955L9.47644 10.5L0.221976 19.7505C-0.0668619 20.0294 -0.0748599 20.4894 0.204163 20.7781C0.483185 21.0668 0.943436 21.0748 1.23227 20.7959C1.23836 20.7901 1.24427 20.7841 1.25009 20.7781L10.5045 11.5277L19.759 20.7781C20.0478 21.057 20.5081 21.049 20.7871 20.7603C21.0593 20.4787 21.0593 20.0321 20.7871 19.7505L11.5327 10.5L20.7871 1.24955C21.071 0.96574 21.071 0.505688 20.7871 0.22188Z" fill="white"/>
                </svg>
            </i>
            <img class="popup-reviews__img" src="">
        </div>
    </div>
    <div class="popup-back-call">
        <div class="popup-back-call__container">
            <div class="popup-back-call__header">
                <i class="gg-close">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.7871 0.22188C20.5032 -0.0618363 20.0429 -0.0618363 19.759 0.22188L10.5045 9.47234L1.25009 0.22188C0.971156 -0.066833 0.510815 -0.0748267 0.221976 0.203984C-0.0668619 0.482795 -0.0748591 0.942938 0.204073 1.23165C0.209889 1.23774 0.215887 1.24364 0.221976 1.24955L9.47644 10.5L0.221976 19.7505C-0.0668619 20.0294 -0.0748599 20.4894 0.204163 20.7781C0.483185 21.0668 0.943436 21.0748 1.23227 20.7959C1.23836 20.7901 1.24427 20.7841 1.25009 20.7781L10.5045 11.5277L19.759 20.7781C20.0478 21.057 20.5081 21.049 20.7871 20.7603C21.0593 20.4787 21.0593 20.0321 20.7871 19.7505L11.5327 10.5L20.7871 1.24955C21.071 0.96574 21.071 0.505688 20.7871 0.22188Z" fill="white"/>
                    </svg>
                </i>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo-footer.svg">
                <div class="footer__logo-name">Klen Design</div>
            </div>
            <div class="popup-back-call__main">
                <div class="popup-back-call__form active">
                    <div class="popup-back-call__desc">Пожалуйста, оставьте ваш телефон. Мы перезвоним вам и обсудим вашу задачу.</div>
                    <div class="popup-back-call__shortcode_one"><?php echo do_shortcode('[contact-form-7 id="69"]'); ?></div>
                    <div class="popup-back-call__shortcode_two"><?php echo do_shortcode('[contact-form-7 id="119" title="Обсудить проект"]'); ?></div>
                    <div class="popup-back-call__info">Наш менеджер свяжется с вами в течение 5 минут<br>(в рабочее время)</div>
                </div>
                <div class="popup-back-call__send">
                    <div class="popup-back-call__send__icon">
                        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1139 0.237413C20.2943 0.400335 20.4025 0.628201 20.4149 0.870915C20.4273 1.11363 20.3428 1.35132 20.1799 1.53174L7.93693 15.0627L0.533936 7.99608C0.367706 7.82619 0.273961 7.59838 0.272479 7.3607C0.270996 7.12302 0.361891 6.89406 0.525989 6.72212C0.690087 6.55017 0.914557 6.44868 1.15205 6.43907C1.38954 6.42945 1.62147 6.51246 1.79893 6.67058L7.83977 12.4364L18.8205 0.302495C18.9013 0.213196 18.9989 0.140695 19.1078 0.0891378C19.2166 0.0375803 19.3346 0.00797738 19.4548 0.00201834C19.5751 -0.0039407 19.6954 0.0138618 19.8088 0.0544092C19.9222 0.0949567 20.0265 0.157454 20.1158 0.238329L20.1139 0.237413Z" fill="#04527B"/>
                        </svg>
                    </div>
                    <div class="popup-back-call__send__title">Спасибо за заявку!</div>
                    <div class="popup-back-call__send__desc">Мы уже набираем ваш номер, а пока что предлагаем вам посмотреть наше порфтолио поподробнее.</div>
                    <a href="#portfolio" class="popup-back-call__send__btn">Смотреть портфолио</a>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
    <script type="text/javascript">
        jQuery( $ => {
            //slider
            $(document).ready(() => {
                $('.niche__slick').slick({
                    infinite: true,
                    dots: true,
                });
            });
            $('.niche__slider-page__all').html( $('.niche__slick__item').length );
            // $('.slick-prev').click(function() {
            //     let btn = $('.niche__slider-page__current');
            //     btn.html( btn.html - 1 );
            // });
            //niche__slider-page__current

            //filter
            $('.portfolio-tab').click(function() {
                let category = $(this).data('category');

                if(category ===  $('.portfolio-tab.active').data('category')) return;

                $('.portfolio-tab').removeClass('active');
                $(this).addClass('active');

                $.ajax({
                    url: '<?php echo admin_url( "admin-ajax.php" ) ?>',
                    type: 'POST',
                    data:{
                        'action': 'filter',
                        'category': category
                    },
                    //data: 'action=filter&param1=2&param2=3', // можно также передать в виде объекта
                    beforeSend( xhr ) {
                        $( '.portfolio-row' ).html('<div class="preloader">Загрузка...</div>');
                    },
                    success( data ) {
                        // $( '#misha_button' ).text( 'Отправить' );	
                        $( '.portfolio-row' ).html(data);
                    }
                });
                // если элемент – ссылка, то не забываем:
                // return false;
            });

            //popup portfolio full img
            $('.portfolio-row').on('click','.portfolio-item', function() {
                let imgUrl = $(this).data('review-image');
                if(imgUrl === undefined) return;
                $('.popup-reviews__img').attr('src', imgUrl);
                $('body').css('overflow', 'hidden');
                $('.popup-reviews').addClass('active');
                $('.popup-reviews').on('mouseup', function(e){ // событие клика по веб-документу
                    var div = $( ".popup-reviews__container" ); // тут указываем ID элемента
                    if ( !div.is(e.target) // если клик был не по нашему блоку
                        && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
                        $('.popup-reviews').removeClass('active');
                        $('body').css('overflow', 'auto');
                        $('.popup-reviews').off("mouseup");
                        $('.popup-reviews__img').attr('src', '');
                        $('.popup-reviews').scrollTop(0);
                    }
                });
            });
            $('.popup-reviews .gg-close').click(function() {
                $('body').css('overflow', 'auto');
                $('.popup-reviews').removeClass('active');
                $('.popup-reviews__img').attr('src', '');
                $('.popup-reviews').scrollTop(0);
            });
            //popup call back
            $('.btn_popup-back-call').click(function() {
                switch( $(this).data('form') ) {
                    case 'call-back':
                        $('.popup-back-call__shortcode_one').show();
                        break;
                    case 'discuss':
                        $('.popup-back-call__shortcode_two').show();
                }
                $('body').css('overflow', 'hidden');
                $('.popup-back-call').addClass('active');
                $('.popup-back-call').on('mouseup', function(e){ // событие клика по веб-документу
                    var div = $( ".popup-back-call__container" ); // тут указываем ID элемента
                    if ( !div.is(e.target) // если клик был не по нашему блоку
                        && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
                        $('.popup-back-call').removeClass('active');
                        $('body').css('overflow', 'auto');
                        $('.popup-back-call').off("mouseup");
                        $('.popup-back-call__form').addClass('active');
                        $('.popup-back-call__send').removeClass('active');
                        $('.popup-back-call').scrollTop(0);
                        $('.popup-back-call__shortcode_one, .popup-back-call__shortcode_two').hide();
                    }
                });
            });
            $('.popup-back-call .gg-close, .popup-back-call__send__btn').click(function() {
                $('body').css('overflow', 'auto');
                $('.popup-back-call').removeClass('active');
                $('.popup-back-call__form').addClass('active');
                $('.popup-back-call__send').removeClass('active');
                $('.popup-back-call').scrollTop(0);
                $('.popup-back-call__shortcode_one, .popup-back-call__shortcode_two').hide();
            });

            //portfolio reviews image
            // $('.portfolio-row').on('mouseover','.portfolio-item__img', function() {
            //     let imgUrl = $(this).parent().data('review-image');
            //     $( this ).children('.portfolio-item__review-image').css('background-image', `url('${imgUrl}')`);
            // });

            //cf7 mail sent
            function sendMail() {
                $('.popup-back-call__form').removeClass('active');
                $('.popup-back-call__send').addClass('active');
            }
            // let wpcf7Elm = document.querySelector( '#wpcf7-f69-o2, #wpcf7-f119-o3' );
            document.querySelector( '#wpcf7-f69-o2').addEventListener('wpcf7mailsent',  function() {
                sendMail();
                ym(90857622,'reachGoal','form-call-back');
            });
            document.querySelector( '#wpcf7-f119-o3').addEventListener('wpcf7mailsent', function() {
                sendMail();
                ym(90857622,'reachGoal','form-discuss-project');
            });
            document.querySelector( '#wpcf7-f5-o1').addEventListener('wpcf7mailsent',  function() {
                ym(90857622,'reachGoal','form-about-task');
                setTimeout(() => {
                    $('#wpcf7-f5-o1 form').removeClass('sent').addClass('init');
                    $('#wpcf7-f5-o1 form').attr('data-status', 'init');
                }, 3000);
            });
        });
      </script>
</body>
</html>