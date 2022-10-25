<?php get_header(); ?>
<div class="section-one container container_one-section">
        <div class="section-one__text">
            <?php 
            switch ($_GET['cat']) {
                case 'landings':
                    echo '<h1 class="section-one__title section-one__title_landing">Разработаем для вас лендинг</h1>';
                    break;
                case 'e-commerce':
                    echo '<h1 class="section-one__title section-one__title_e-commerce">Разработка интернет магазинов</h1>';
                    break;
                default:
                    echo '<h1 class="section-one__title">Разработаем для вас сайт</h1>';
                    break;
            }
            ?>
            <div class="section-one__desc">
            <?php 
            switch ($_GET['cat']) {
                case 'e-commerce':
                    echo 'А также настройка рекламы и продвижение в интернете для создания потока продаж';
                    break;
                default:
                    echo 'С современным красивым дизайном. И настроим рекламу так, чтобы он приносил заявки и продажи.';
                    break;
            }
            ?>
            </div>
            <div class="section-one__btn_row">
                <div class="section-one__btn_discuss btn_popup-back-call" data-form="discuss">Обсудить проект</div>
                <a href="#portfolio" class="section-one__btn_portfolio">Портфолио</a>
            </div>
        </div>
        <div class="section-one__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/MacBook-x2.png" alt="MacBoock">
        </div>
    </div>
    <div id="portfolio" class="section-tow container">
        <h2 class="section-title">Портфолио</h2>
        <div class="section-desc">Здесь мы выложили несколько интересных работ из тех, что мы сделали недавно.</div>
        <div class="portfolio-tabs">
            <div class="portfolio-tab <?php if(isset($_GET['cat']) === false || $_GET['cat'] === 'all-sites' ) echo 'active' ?>" data-category="all-sites"><span>Все сайты</span></div>
            <div class="portfolio-tab <?php if(isset($_GET['cat']) && $_GET['cat'] === 'e-commerce') echo 'active' ?>" data-category="e-commerce"><span>Интернет-магазины</span></div>
            <div class="portfolio-tab <?php if(isset($_GET['cat']) && $_GET['cat'] === 'landings') echo 'active' ?>" data-category="landings"><span>Лендинги</span></div>
        </div>
        <div class="portfolio-row">
            <?php
            $args = array(
                'post_type'      => 'portfolio',
                // 'category'       => 'lending',
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
                'orderby'        => 'date',
                'order'          => 'ASC',
                'suppress_filters' => true
            );

            if(isset($_GET['cat']) && $_GET['cat'] != 'all-sites') $args[ 'category' ] = $_GET['cat'];
            
            $query = new WP_Query( $args );
            
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    $category = get_the_category();
                    $current_cat_name = $category[0]->name;
                    // print_r( get_field('portfolio_review') )
                    ?>
                    <div class="portfolio-item" data-review-image="<?php get_field('portfolio_review') ? the_field('portfolio_review') : '' ?>">
                        <div>
                            <div class="portfolio-item__img">
                                <!-- <span class="portfolio-item__review-image"></span> -->
                                <?php echo get_the_post_thumbnail() ?>
                            </div>
                            <div class="portfolio-item__name"><?php the_title() ?></div>
                            <div class="portfolio-item__desc"><?= $current_cat_name != 'Без рубрики' ? $current_cat_name : ''; ?> <?= get_field('text_to_categiry'); ?></div>
                        </div>
                        <div class="portfolio-item__link">Смотреть сайт</div>
                    </div>
            <?php  }
            } else {
                echo 'Ничего не найдено';
            }
            
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div id="price" class="section-three container">
        <div class="test-price">
            <div class="test-price__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/test-price-x2.png"></div>
            <div class="test-price__text">
                <div class="test-price__title">Тест на стоимость разработки вашего сайта</div>
                <div class="test-price__desc">Пройдите короткий тест из 6 вопросов и рассчитайте стоимость разработки вашего сайта</div>
                <div class="test-price__btn" onclick="Marquiz.showModal('5d5d7c9efd89e00044681318')"><span>Начать тест</span></div>
            </div>
        </div>
    </div>
    <div id="promotion" class="section-four container">
        <div class="niche">
            <div class="niche__bg">
                <?php
                $args = array(
                    'post_type'      => 'niche',
                    // 'category'       => 'lending',
                    'post_status'    => 'publish',
                    'posts_per_page' => - 1,
                    'orderby'        => 'date',
                    'order'          => 'ASC',
                    'suppress_filters' => true
                );
                $query = new WP_Query( $args );

                if ( $query->have_posts() ) {
                ?>
                <div class="niche__slick">
                    <?php while ( $query->have_posts() ) { $query->the_post(); ?>
                    <div class="niche__slick__item">
                        <div class="niche__header">
                            <div class="niche__slick-header">
                            <?php if(get_the_post_thumbnail()) {
                                the_post_thumbnail( 'full', array('class' => 'slick-nice-icon', 'loading' => 'skip-lazy') );
                            }else{ ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/niche-default.svg">
                            <?php } ?>
                            </div>
                            <div class="niche__slick-text">
                                <div class="niche__slick-text__name">Ниша</div>
                                <div class="niche__slick-text__title"><?php the_title() ?></div>
                            </div>
                        </div>
                        <div class="niche__row">
                            <div class="niche__item">
                                <div class="niche__item__title">Рекламный бюджет</div>
                                <div class="niche__item__result">
                                    <div class="niche__item__was">
                                        <div class="niche__item__result-name">Было</div>
                                        <div class="niche__item__result-sum"><?= get_field('reklamnyj_byudzhet_bylo') ?></div>
                                    </div>
                                    <div class="niche__item__became">
                                        <div class="niche__item__result-name">Стало</div>
                                        <div class="niche__item__result-sum"><?= get_field('reklamnyj_byudzhet_stalo') ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="niche__item">
                                <div class="niche__item__title">Стоимость заявки</div>
                                <div class="niche__item__result">
                                    <div class="niche__item__was">
                                        <div class="niche__item__result-name">Было</div>
                                        <div class="niche__item__result-sum"><?= get_field('stoimost_zayavki_bylo') ?></div>
                                    </div>
                                    <div class="niche__item__became">
                                        <div class="niche__item__result-name">Стало</div>
                                        <div class="niche__item__result-sum"><?= get_field('stoimost_zayavki_stalo') ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="niche__item">
                                <div class="niche__item__title">Количество заявок в месяц</div>
                                <div class="niche__item__result">
                                    <div class="niche__item__was">
                                        <div class="niche__item__result-name">Было</div>
                                        <div class="niche__item__result-sum"><?= get_field('kolichestvo_zayavok_v_mesyacz_bylo') ?></div>
                                    </div>
                                    <div class="niche__item__became">
                                        <div class="niche__item__result-name">Стало</div>
                                        <div class="niche__item__result-sum"><?= get_field('kolichestvo_zayavok_v_mesyacz_stalo') ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } else {
                    echo 'Ничего не найдено';
                }
                
                wp_reset_postdata();
                ?>
                <div class="niche__slider-page">
                    <!-- <span class="niche__slider-page__current">1</span> -->из <span class="niche__slider-page__all">0</span></div>
            </div>
            <div class="niche__text">
                <div class="niche__title">Продвижение и реклама</div>
                <div class="niche__desc">В 90% случаев мы делаем сайты под ключ вместе с рекламой, то есть в качестве результата работы с нами Вы получаете заявки, а не просто сайт.</div>
            </div>
        </div>
    </div>
    <div class="section-five container">
        <div class="feedback">
            <div class="feedback__left">
                <div class="feedback__title">Расскажите о своей задаче</div>
                <div class="feedback__desc">Пожалуйста, опишите, какой вам нужен сайт и для чего, а мы обязательно предложим решение.</div>
                <?php echo do_shortcode('[contact-form-7 id="5" title="Расскажите о своей задаче"]'); ?>
            </div>
            <div class="feedback__right">
                <div class="feedback__info">
                    <div class="feedback__info__title">Или звоните/пишите сами</div>
                    <div class="feedback__info__desc">Это вас ни к чему не обязывает. Мы проконсультируем вас бесплатно и ответим на все ваши вопросы.</div>
                    <div class="feedback__tel">
                        <span>Наш телефон</span>
                        <a href="tel:+78126025347">8 (812) 602-53-47</a>
                    </div>
                    <div class="feedback__email">
                        <span>Наша почта</span>
                        <a href="mailto:info@klen-design.ru">info@klen-design.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();