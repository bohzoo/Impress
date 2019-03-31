<?php

/**
 * カスタム投稿タイプのアーカイブページにもYoastSEOのDescriptionを入れる
 *
 * @param [type] $str
 * @return void
 */
function hoge_change_description( $str ) {
  // if archive page
  if( is_archive() ){
    $queried_object = get_queried_object();
    $post_type = $queried_object->name;
    // check if this has description
    $obj = get_post_type_object( $post_type );
    if( !empty( $obj->description ) ) return esc_html( $obj->description );
  }
  return $str;
}
add_filter( 'wpseo_metadesc', 'hoge_change_description', 10, 1 );
