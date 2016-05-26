
    <?php
    /**
    * znews block start
    */

        function znews_before(){
            echo '<div class="znews-bar">';
        }

        function znews_after(){
            echo '</div>';
        }

        function znews_head(){
            $head_text = 'Последние добавленые товары';

            echo '<div class="znews-head"><h2>' . $head_text . '</h2></div>';
        }


        function znews_before_body(){
            echo '<div class="znews-body">';
        }

        function znews_after_body(){
            echo '</div>';
        }


        function znews_body(){
            $count = 4;
            $img_size = array(100, 100);
            $max_length = 30;

            $args = array(
                'numberposts' => $count,
                'category' => 0,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'product',
                'post_status' => 'publish' );


                $recent_products = wp_get_recent_posts($args);

                echo '<ul>';
                foreach( $recent_products as $recent ){
                    $id = $recent["ID"];
                    $attributes = get_post_meta( $id, '_product_attributes');
                    $title = $recent["post_title"];
                    if(strlen($title)>$max_length){
                        $title = substr($title, 0, $max_length) . '...';
                    }

                    echo '<li class="col-md-'. 12/$count .'"><div class="znews-title"><a href="' . get_permalink($id) . '">' . $title .'</a> </div> ';


                    echo get_the_post_thumbnail($id, $img_size);

                    echo '<div class="znews-attr">';
                    foreach($attributes[0] as $att){
                        echo '<p><b>' . $att['name'] . ': ' . '</b>';
                        echo $att['value'] . '</p>';
                    }
                    echo '</div></li>';
                }
                echo '</ul>';

        }

    ?>













    <?php

    function cart_link() {

        $count = WC()->cart->get_cart_contents_count();
        ?>

        <a class="cart-contents" href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" title="<?php _e( 'Посмотреть заказ'); ?>">
            <!--<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> -->
            <span class="count">
                <?php  if($count>0) echo $count; ?>
            </span>
            <i class="fa fa-shopping-cart"></i>

        </a>
    <?php
    }


    function wc_widget_template() {
        if ( is_woocommerce_activated() ) {

            ?>
            <ul class="zmenu-cart">
                <li class="z-card-trigger">
                    <?php cart_link(); ?>
                </li>
                <li class="zcard-widjet">
                    <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
                </li>
            </ul>

        <?php }} ?>

