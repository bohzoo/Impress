<?php

/**
 * attachment_idのURLにアクセスすると404を返す
 *
 * @return void
 */
function gs_attachment_template_redirect() {
	if ( is_attachment() ) {
		global $wp_query;
		$wp_query->set_404();
		status_header(404);
	}
}
add_action( 'template_redirect', 'gs_attachment_template_redirect' );

/**
 * 投稿タイトルを省略する
 *
 * @param integer $length
 * @return void
 */
function the_short_title($length = 20) {
	$ret = get_the_title( $post->ID );
	if ( mb_strlen($ret) > $length ) {
			$ret = mb_substr( $ret, 0, $length ) . '...';
	}

	echo $ret;
}
