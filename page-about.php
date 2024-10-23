<?php
/*
Template Name: About Page
*/

get_header();
HELLO WOOOOOOOOOOORLLD
if (have_posts()) :
    while (have_posts()) : the_post();

        // Declare ACF fields as variables
        $about_image = get_field('about_image');
        $about_text = get_field('about_text');
        ?>

        <div class="about-page">
            <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" class="about-image">
            <div class="about-text">
                <h1>About Us</h1>
                <p><?php echo $about_text; ?></p>
            </div>
        </div>

    <?php endwhile;
endif;

get_footer();
?>