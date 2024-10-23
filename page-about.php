<?php
/*
Template Name: About
*/


get_header();     ?>

<?php if (have_posts()) : ?>
    <?php  while (have_posts()) : the_post(); ?>

    <?php 
        $about_image = get_field('about_img');
        $about_text = get_field('about_text');
        ?>

        <div class="about-page">
            <div class="about-content">

                <div class="about-text">
                    <h1><?php echo $about_text; ?></h1>
                    <p><?php echo $about_text; ?></p>
                </div>

                <div class="about-image">
                    <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>">
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php get_footer() ?>