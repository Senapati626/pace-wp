<?php get_header() ?>

<section class="single-page-container">
        <?php if(have_posts(  )){
            while(have_posts(  )){
                the_post(  );?>
        <section class="single-page-blog">
            <div class="single-page-header">
                <h1><?php the_title();?></h1>
            </div>
            <div class="single-page-meta">
                <p>By Author Brandon</p>
                <p><?php the_date();?><span><?php echo get_comments_number();?> COMMENTS</span></p>
            </div>
            <div class="single-page-img">
                <?php the_post_thumbnail()?>
            </div>
            <div class="single-page-content">
                <p><?php the_content();?></p>
            </div>
        </section>
        <?php
                    }
                }
        ?>
        <sidebar>
        </sidebar>
    </section>