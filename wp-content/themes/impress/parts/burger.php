<?php // burger-menu ?>
<a id="burger-menu" href="#sidr" class="sp-only">MENU</a>
<div id="sidr">
	<?php // class名に"active"を指定するとボタンを押した状態を表現できます。 ?>
	<?php
	wp_nav_menu( array(
		'theme_location' => 'burger-sp',
		'container' => false,
		'items_wrap'		 => '<ul id="%1$s" class="%2$s"><li id="item-id" class="img-box burger-top"><img src="' . get_template_directory_uri() . '/images/company_logo_01.png" alt="窪田農園"></li>%3$s</ul>',
	) );
	?>
</div>
<?php // burger-menu ?>
