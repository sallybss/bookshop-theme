<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

    <?php 
    $about_image = get_field("about_image");
    $about_text = get_field("about_text");
    ?>

    <div class="about-page">
        <img src="<?php echo $about_image['url']; ?>" alt="About Us" class="about-image">
        <div class="about-text">
            <h1>About Us</h1>
            <p><?php echo $about_text; ?></p>
        </div>
    </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>