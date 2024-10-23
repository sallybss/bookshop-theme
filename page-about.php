<?php
/*
Template Name: About
*/

get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <?php 
        $about_image = get_field('about_img');
        $about_text = get_field('about_text');
    ?>

    <div class="about-page">
        <div class="about-content">

            <div class="about-text">
                <h1><?php echo esc_html(get_the_title()); ?></h1> <!-- Use the title for the headline -->
                <p><?php echo esc_html($about_text); ?></p> <!-- Output about text safely -->
            </div>

            <div class="about-image">
                <img src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>"> <!-- Safe output for URL and alt attribute -->
            </div>
        </div>
    </div>
    
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>