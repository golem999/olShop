<html>
<head>
    <meta charset="UTF-8">
    <meta description="hello epta">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
<div class="content">
    <header class="zhead">
        <img  class='headimg' src="<?php echo get_template_directory_uri() . '/img/smart.png'  ?>" height="355" width="480" alt="">
    </header>


    <?php get_template_part('navbar'); ?>

    <div class="znews">
        <p><b>Обьяление:</b></p>
        <p>Lorem ipsum dolor sit amet, consectetur. lorem</p>
    </div>

    <div class="zmain">
        <?php get_sidebar(); ?>
        <div class="zcontent">
            
   

