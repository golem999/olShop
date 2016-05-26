<?php

    require get_template_directory() . "/lib/links.php";
    require get_template_directory() . "/lib/sidebar.php";
    require get_template_directory() . "/lib/menu.php";
    require get_template_directory() . "/lib/hooks.php";
    require get_template_directory() . "/lib/templates.php";
    require get_template_directory() . "/lib/extras.php";


    require_once( get_template_directory() . "/woocommerce/widget/widget-filter-wc.php" );
    function wc_filter_widgets() {
        register_widget( 'WC_Widget_Filter' );
    }
    add_action( 'widgets_init', 'wc_filter_widgets' );

    function wc_remove_related_products( $args ) {
        return array();
    }
    add_filter('woocommerce_related_products_args','wc_remove_related_products', 10);








?>