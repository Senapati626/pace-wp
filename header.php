<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solve your Assignments, Exams and Quizzes | Project and Content Experts</title>
    <link rel="stylesheet" href="./style.css">
    <?php wp_head()?>
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <?php the_custom_logo(  ) ?>
        </div>
        <div class="navbar-middle">
            <!-- <a href="">Services</a>
            <a href="">Testimonials</a>
            <a href="">Samples</a>
            <a href="">FAQs</a> -->
            <?php
                wp_nav_menu( array(
                    'theme-location' => 'primary'
                ) )
            ?>
        </div>
        <div class="navbar-right">
            <button class="navbar-btn">Get a Quote</button>
        </div>
        <div class="navbar-services" id="services">
            <button id="closeBtn">x</button>
            <?php
                $query = new WP_Query(array(
                    'post_type' => 'service',
                    'post_per_page' => 30
                ));
                query_posts( $query );
                while($query->have_posts()) : $query->the_post();
            ?>
            <a href="<?php the_permalink()?>"><?php the_title()?></a>
            <?php 
            endwhile;
            wp_reset_query(  );
            ?>
        </div>
    </header>