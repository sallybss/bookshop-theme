<?php
/*
Template Name: About
*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();

        $about_image = get_field('about_img');
        $about_text = get_field('about_text');
        ?>

        <div class="about-page">
            <div class="about-content">
                <!-- Left Column: Text -->
                <div class="about-text">
                    <h1><?php echo $about_text; ?></h1>
                    <p><?php echo $about_text; ?></p>
                </div>

                <!-- Right Column: Image -->
                <div class="about-image">
                    <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>">
                </div>
            </div>
        </div>

    <?php endwhile;
endif;

get_footer();
?>