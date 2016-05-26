<?php
/**
 * Created by PhpStorm.
 * User: Golem199
 * Date: 15.02.2016
 * Time: 19:09
 */


add_action( 'widgets_init', 'theme_slug_widgets_init' );



function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="zbar-head"><h2>',
        'after_title'   => '</h2></div>',
    ) );
}