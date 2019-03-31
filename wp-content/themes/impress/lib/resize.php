<?php

/**
 * timthumb.phpを利用できるようにする
 *
 * @return void
 */
function my_thumbnail() {
	global $post;
	if ( preg_match_all( '//i', $post->post_content, $matches) ) {
		$first_img = $matches[1][0];
	} else {
		$first_img = false;
	}
	if(empty($first_img)){ //Defines a default image
		$first_img = "/images/thumbnail.png";
	}
return $first_img;
}

/**
 * timthumb.phpを使用して画像をリサイズする
 *
 * @param string $image_path
 * @param string $alt
 * @param int $width
 * @param int $height
 * @return void
 */
function resize_image($image_path="", $alt="", $width=0, $height=0, $sp_width=0, $sp_height=0) {
	if(has_post_thumbnail()) {
		$img_tag = '<img src="' . get_template_directory_uri() . '/lib/timthumb.php?src=' . $image_path . '&w=' . strval($width) . '&h=' . strval($height) . '&q=100" alt="' . $alt . '" width="' . strval($width) . '" height="' . strval($height) . '">';
	} else {
		$img_tag = '<img src="https://placehold.jp/999/fff/' . strval($width) . 'x' . strval($height) . '.png?text=NoImage">';
	}
		return $img_tag;
};
