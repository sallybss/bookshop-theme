<?php
/*
Template Name: Contact
*/


get_header();     ?>

<?php if (have_posts()) : ?>
    <?php  while (have_posts()) : the_post(); ?>


<div class="form-container">
    <h1>GET IN TOUCH</h1>
    <div class="form">
        <?php echo do_shortcode('[cf7form cf7key="form"]'); ?>  
    </div>
</div>

<div class="container follow">
<div class="row">
    <div class="col-4">
        Keep in touch by following us on Instagram and get updated about events, offers, news and more!
    </div>
    <div class="col-4">
        image
    </div>
</div>
</div>

     <?php endwhile; ?>
   <?php endif; ?>


   <?php get_footer() ?>