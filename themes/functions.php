<?php

add_theme_support( 'post-thumbnails' );
add_theme_support(
    'custom-logo',
    // array(
    //     'height'      => $logo_height,
    //     'width'       => $logo_width,
    //     'flex-height' => true,
    //     'flex-width'  => true,
    // )
);

add_action( 'wp_enqueue_scripts', 'true_stili_frontend', 25 );
function true_stili_frontend() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
 	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/assets/css/style.css' );
 	wp_enqueue_style( 'stylesheet', get_stylesheet_directory_uri() . '/assets/fonts/stylesheet.css' );
 	wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'script-name', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.0', true );
}

add_action( 'wp_ajax_filter', 'truemisha_ajax' ); // wp_ajax_{ЗНАЧЕНИЕ ПАРАМЕТРА ACTION!!}
add_action( 'wp_ajax_nopriv_filter', 'truemisha_ajax' );  // wp_ajax_nopriv_{ЗНАЧЕНИЕ ACTION!!}
// первый хук для авторизованных, второй для не авторизованных пользователей
function truemisha_ajax(){
	$current_category = $_POST[ 'category' ];
	
    $args = array(
        'post_type'      => 'portfolio',
        'post_status'    => 'publish',
        'posts_per_page' => - 1,
        'orderby'        => 'date',
        'order'          => 'ASC',
        'suppress_filters' => true
    );

    if($current_category != 'all-sites') $args[ 'category' ] = $current_category;
 
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            $category = get_the_category();
            $current_cat_name = $category[0]->name;
            ?>
            <div class="portfolio-item" data-review-image="<?php get_field('portfolio_review') ? the_field('portfolio_review') : '' ?>">
                <div class="portfolio-item__img">
                <!-- <span class="portfolio-item__review-image"></span> -->
                    <?php echo get_the_post_thumbnail() ?>
                </div>
                <div class="portfolio-item__name"><?php the_title() ?></div>
                <div class="portfolio-item__desc"><?= $current_cat_name; ?> <?= get_field('text_to_categiry'); ?></div>
                <div class="portfolio-item__link">Смотреть сайт</div>
            </div>
    <?php  }
    } else {
        echo 'Ничего не найдено';
    }
 
	die(); // даём понять, что обработчик закончил выполнение
}

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('portfolio', array(
		'labels'             => array(
			'name'               => 'Портфолио', // Основное название типа записи
			'singular_name'      => 'Портфолио', // отдельное название записи типа Book
            'all_items'          => 'Все сайты',
			'add_new'            => 'Добавить новый сайт',
			'add_new_item'       => 'Добавить новый сайт',
			'edit_item'          => 'Редактировать сайт',
			'new_item'           => 'Новый сайт',
			'view_item'          => 'Посмотреть сайт',
			'search_items'       => 'Найти сайт',
			'not_found'          => 'Сайтов не найдено',
			'not_found_in_trash' => 'В корзине сайтов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Портфолио'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 3,
        'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}

add_action( 'init', 'create_taxonomies' );
function create_taxonomies(){

	// Добавляем древовидную таксономию 'genre' (как категории)
	register_taxonomy('category', array('portfolio'), array(
		'hierarchical'  => true,
		'labels'        => array(
			'name'              => _x( 'Категории', 'taxonomy general name' ),
			'singular_name'     => _x( 'Категории', 'taxonomy singular name' ),
			'search_items'      =>  __( 'Найти' ),
			'all_items'         => __( 'Все категории' ),
			'parent_item'       => __( 'Parent' ),
			'parent_item_colon' => __( 'Parent' ),
			'edit_item'         => __( 'Редактировать' ),
			'update_item'       => __( 'Обновить' ),
			'add_new_item'      => __( 'Добавить категорию' ),
			'new_item_name'     => __( 'Новое имя' ),
			'menu_name'         => __( 'Категории' ),
		),
		'show_ui'       => true,
		'query_var'     => true,
		//'rewrite'       => array( 'slug' => 'the_genre' ), // свой слаг в URL
	));
}

add_action('init', 'my_custom_niche');
function my_custom_niche(){
	register_post_type('niche', array(
		'labels'             => array(
			'name'               => 'Нишы', // Основное название типа записи
			'singular_name'      => 'Нишы', // отдельное название записи типа Book
            'all_items'          => 'Все нишы',
			'add_new'            => 'Добавить новую нишу',
			'add_new_item'       => 'Добавить новую нишу',
			'edit_item'          => 'Редактировать сайт',
			'new_item'           => 'Новая ниша',
			'view_item'          => 'Посмотреть нишу',
			'search_items'       => 'Найти нишу',
			'not_found'          => 'Ниш не найдено',
			'not_found_in_trash' => 'В корзине ниш не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Ниши'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 3,
        'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}

add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
        'navigation-widgets',
    )
);

// Add Favicon with WordPress Hook 
function myfavicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_stylesheet_directory_uri().'/assets/img/favicon.ico" />';
}
add_action('wp_head', 'myfavicon');

function hs_image_editor_default_to_gd( $editors ) {
	$gd_editor = 'WP_Image_Editor_GD';
	$editors = array_diff( $editors, array( $gd_editor ) );
	array_unshift( $editors, $gd_editor );
	return $editors;
}
add_filter( 'wp_image_editors', 'hs_image_editor_default_to_gd' );

# Отменим `-scaled` размер - ограничение максимального размера картинки
add_filter( 'big_image_size_threshold', '__return_zero' );

// add_filter( 'wp_lazy_loading_enabled', '__return_false') ;
