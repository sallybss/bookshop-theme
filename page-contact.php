<?php
/*
Template Name: Contact
*/


get_header();     ?>

<?php if (have_posts()) : ?>
    <?php  while (have_posts()) : the_post(); ?>

<div class="form-container">
    <div class="form">
        <?php echo do_shortcode('[cf7form cf7key="form"]'); ?>  
    </div>
</div>

     <?php endwhile; ?>
   <?php endif; ?>


   <?php get_footer() ?>