<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/1
 * Time: 17:05
 */

add_theme_support( 'post-thumbnails' );

/**
 * 名称：WordPress手动修改文章排列顺序
 * 作者：露兜
 * 博客：https://www.ludou.org/
 * 最后修改：2015年10月21日
 */
add_action('pre_get_posts', 'ludou_orderby');
function ludou_orderby( $query ) {
    if ( (is_home() || is_archive()) && $query->is_main_query() ) {
        $query->set( 'meta_key', 'sort' );
        $query->set( 'orderby', array('meta_value_num' => 'DESC', 'date' => 'DESC') );
    }
    return $query;
}