<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php bloginfo( 'name' ); ?></title>

<style>
@-ms-viewport { width: device-width; }
	@media screen and (max-width: 1400px) {
		@-ms-viewport { width: 1400px; }
	}
	@media screen and (max-width: 480px) {
		@-ms-viewport { width: 480px; }
	}
</style>
<?php wp_head(); ?>
<script>
$(function(){
	$('#top-mainvisual').vegas({
		slides: [
			{src: "<?php echo esc_attr(get_template_directory_uri() . '/images/mv_animation_01_01.jpg'); ?>"},
			{src: "<?php echo esc_attr(get_template_directory_uri() . '/images/mv_animation_02_01.jpg'); ?>"},
			{src: "<?php echo esc_attr(get_template_directory_uri() . '/images/mv_animation_03_01.jpg'); ?>"},
		],
		transition: 'fade',
		animation: 'kenburns',
		delay: 6000,
		timer: false,
		transitionDuration: 2000,
		animationDuration: 8000,
	});
});
</script>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<div class="header-bg-before"></div>
	<header id="header" class="header-fixed">
		<div id="head-inner" class="content-width">
			<div class="clearfix">
				<div class="left">
					<div id="h-logo" class="img-box">
						<a href="<?php echo esc_attr(home_url()); ?>">
							<img src="https://placehold.jp/280x40.png" alt="<?php bloginfo('name'); ?>">
						</a>
					</div>
				</div>
				<div id="gnav-box" class="right">
					<nav id="gnav">
						<?php
						$args = array(
							'theme_location' => 'header',
							'menu_class' => 'flex-box',
						);
						wp_nav_menu( $args );
						?>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div class="header-bg-start"></div>
	<div id="main">
