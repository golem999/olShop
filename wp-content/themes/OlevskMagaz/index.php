<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unite
 */

 ?>


<?php   get_header();   ?>
<?php   get_sidebar();  ?>

    <div class="page page-main">

        <?php
        get_template_part('slider');
        ?>


        <?php
        /** last items in the shop
         *
         * */
        do_action('znew-items');
        ?>




    </div>


<?php get_footer(); ?>