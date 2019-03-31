<?php

/**
 * CSSとJavaScriptファイルの読み込み
 *
 * @return void
 */
function style_and_script_reader() {
	$dir = get_template_directory_uri();

	$arr = array(
		'handle'		=> 'style.css',
		'src'				=> get_stylesheet_directory_uri(),
		'deps'			=> array(),
		'ver'				=> '1.0',
		'in_footer' => false,
	);
	extract($arr);
	wp_enqueue_style( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'Cardo',
		'src'				=> '<link href="https://fonts.googleapis.com/css?family=Cardo:400,700" rel="stylesheet">',
		'deps'			=> array(),
		'in_footer' => false,
	);
	extract($arr);
	wp_enqueue_style( $handle, $src, $deps, $in_footer );

	$arr = array(
		'handle'		=> 'Montserrat',
		'src'				=> 'https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet',
		'deps'			=> array(),
		'in_footer' => false,
	);
	extract($arr);
	wp_enqueue_style( $handle, $src, $deps, $in_footer );

	$arr = array(
		'handle'		=> 'bxslider.css',
		'src'				=> 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css',
		'deps'			=> array(),
		'ver'				=> '4.2.12',
		'in_footer' => false,
	);
	extract($arr);
	wp_enqueue_style( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'fontawesome',
		'src'				=> 'https://use.fontawesome.com/releases/v5.7.1/css/all.css',
		'deps'			=> array(),
		'ver'				=> '5.7.1',
		'in_footer' => false,
	);
	extract($arr);
	wp_enqueue_style( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'animate.min.css',
		'src'				=> $dir . '/assets/plugin/animate.min.css',
		'deps'			=> array(),
		'ver'				=> '3.7.0',
		'in_footer' => false,
	);
	extract($arr);
	wp_enqueue_style( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'vegas.min.css',
		'src'				=> $dir . '/assets/plugin/vegas.min.css',
		'deps'			=> array(),
		'ver'				=> false,
		'in_footer' => false,
	);
	extract($arr);
	wp_enqueue_style( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'normalize.css',
		'src'				=> $dir . '/assets/normalize.css',
		'deps'			=> array(),
		'ver'				=> false,
		'in_footer' => false,
	);
	extract($arr);
	wp_enqueue_style( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'common.css',
		'src'				=> $dir . '/assets/common.css',
		'deps'			=> array(),
		'ver'				=> false,
		'in_footer' => false,
	);
	extract($arr);
	wp_enqueue_style( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'all.css',
		'src'				=> $dir . '/assets/all.css',
		'deps'			=> array(),
		'ver'				=> false,
		'in_footer' => false,
	);
	extract($arr);
	wp_enqueue_style( $handle, $src, $deps, $ver, $in_footer );

	if( is_home() || is_front_page() ) {
		$arr = array(
			'handle'		=> 'home.css',
			'src'				=> $dir . '/assets/home.css',
			'deps'			=> array(),
			'ver'				=> false,
			'in_footer' => false,
		);
		extract($arr);
		wp_enqueue_style( $handle, $src, $deps, $ver, $in_footer );
	}

	if( is_page() ) {
		$arr = array(
			'handle'		=> 'page.css',
			'src'				=> $dir . '/assets/page.css',
			'deps'			=> array(),
			'ver'				=> false,
			'in_footer' => false,
		);
		extract($arr);
		wp_enqueue_style( $handle, $src, $deps, $ver, $in_footer );
	}

	wp_deregister_script('jquery');

	$arr = array(
		'handle'		=> 'jquery',
		'src'				=> 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
		'deps'			=> array(),
		'ver'				=> '3.3.1',
		'in_footer' => false,
	);
	extract($arr);
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'bxslider.js',
		'src'				=> 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js',
		'deps'			=> array('jquery'),
		'ver'				=> '4.2.12',
		'in_footer' => true,
	);
	extract($arr);
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'imagesloaded.pkgd.min.js',
		'src'				=> 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js',
		'deps'			=> array('jquery'),
		'ver'				=> '3.2.0',
		'in_footer' => false,
	);
	extract($arr);
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'jquery.heightLine.js',
		'src'				=> $dir . '/script/plugin/jquery.heightLine.js',
		'deps'			=> array('jquery'),
		'ver'				=> false,
		'in_footer' => true,
	);
	extract($arr);
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'jquery.inview.min.js',
		'src'				=> $dir . '/script/plugin/jquery.inview.min.js',
		'deps'			=> array('jquery'),
		'ver'				=> false,
		'in_footer' => true,
	);
	extract($arr);
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'vegas.min.js',
		'src'				=> $dir . '/script/plugin/vegas.min.js',
		'deps'			=> array('jquery'),
		'ver'				=> false,
		'in_footer' => true,
	);
	extract($arr);
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'scrollreveal.min.js',
		'src'				=> $dir . '/script/plugin/scrollreveal.min.js',
		'deps'			=> array('jquery'),
		'ver'				=> false,
		'in_footer' => true,
	);
	extract($arr);
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

	$arr = array(
		'handle'		=> 'myscript.js',
		'src'				=> $dir . '/script/myscript.js',
		'deps'			=> array('jquery'),
		'ver'				=> '1.0',
		'in_footer' => true,
	);
	extract($arr);
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
}
add_action( 'wp_enqueue_scripts', 'style_and_script_reader' );

/**
 * カスタムメニューの定義
 *
 * @return void
 */
function custom_menu_setup() {
	add_theme_support( 'menus' );
	register_nav_menus(
		array(
			'primary'		=> 'Global Navigation',
			'header-ec' => 'Header Navigation for EC links',
			'header'		=> 'Header Navigation',
			'footer-ec' => 'Footer Navigation for EC links',
			'footer'		=> 'Footer Navigation',
			'burger-sp'	=> 'Burger Menu in SP'
		)
	);
}
add_action( 'after_setup_theme', 'custom_menu_setup' );

/**
 * カスタムメニュー の「タイトル属性」が文字列として表示されるようになる
 *
 * @param [type] $item_output
 * @param [type] $item
 * @return void
 */
function description_in_nav_menu($item_output, $item){
  return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<span class='ja'>{$item->attr_title}</span><", $item_output);
}
add_filter( 'walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4 );

/**
 * アイキャッチ画像を有効にする
 *
 * @return void
 */
function enable_thumbnails() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'enable_thumbnails' );
