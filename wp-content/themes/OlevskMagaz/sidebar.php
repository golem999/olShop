<?php
        $taxonomy     = 'product_cat';
        $orderby      = 'name';
        $show_count   = 0;      // 1 for yes, 0 for no
        $pad_counts   = 0;      // 1 for yes, 0 for no
        $hierarchical = 1;      // 1 for yes, 0 for no
        $title        = '';
        $empty        = 0;

        $args = array(
            'taxonomy'     => $taxonomy,
            'orderby'      => $orderby,
            'show_count'   => $show_count,
            'pad_counts'   => $pad_counts,
            'hierarchical' => $hierarchical,
            'title_li'     => $title,
            'hide_empty'   => $empty
        );
        $sub_cats = get_categories( $args );
?>


    <div class="zbar">
        <div class="zbar-head">
            <h2>Категории</h2>
        </div>

        <ul>
            <!--     <li><a href="#">Lorem.<i class="fa fa-angle-right "></i></a></li> -->


            <?php

            if($sub_cats) {
                foreach($sub_cats as $sub_category) {
                    echo  '<li><a href="'. get_term_link($sub_category->slug, 'product_cat') .'">'. $sub_category->name .
                      //  ' (' . apply_filters( 'woocommerce_subcategory_count_html', '<span class="cat-count">' . $sub_category->count . '</span>', $category ) . ') '.
                        '<i class="fa fa-angle-right "></i></a></li>';
                  //  echo apply_filters( 'woocommerce_subcategory_count_html', ' <span class="cat-count">' . $sub_category->count . '</span>', $category );
                }
            }
            ?>
        </ul>




            <?php

                dynamic_sidebar( 'Main Sidebar' );

            ?>


    </div>

