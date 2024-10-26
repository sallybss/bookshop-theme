<?php
/*
Template Name: Contact
*/

get_header();
?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php 
            $contact = get_field('contact');
            $follow = get_field('follow');
            $followtext = get_field("follow_text");
            $instapic = get_field("instapic");
            $instapic2 = get_field("instapic2");
        ?>

<div class="container my-5">
    <div class="row">
        <!-- Left Column: Contact Form Section -->
        <div class="col-12 col-md-6 col-lg-6 mb-4">
            <h1 class="text-primary mb-3"><?php echo esc_html($contact); ?></h1>
            <div class="form">
                <?php echo do_shortcode('[cf7form cf7key="form"]'); ?>  
            </div>
        </div>

        <!-- Right Column: Follow Section with Images -->
        <div class="col-12 col-md-6 col-lg-6">
            <h1 class="text-secondary mb-3"><?php echo esc_html($follow); ?></h1>
            <p><?php echo esc_html($followtext); ?></p>

            <!-- Responsive Images for Instagram -->
            <div class="d-flex flex-wrap justify-content-between">
                <?php if ($instapic): ?>
                    <div class="mb-3">
                        <img src="<?php echo esc_url($instapic['url']); ?>" class="img-fluid rounded shadow-sm" alt="Instagram account">
                    </div>
                <?php endif; ?>
                
                <?php if ($instapic2): ?>
                    <div class="mb-3">
                        <img src="<?php echo esc_url($instapic2['url']); ?>" class="img-fluid rounded shadow-sm" alt="Instagram account">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>



