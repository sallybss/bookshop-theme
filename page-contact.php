<?php
/*
Template Name: Contact
*/


get_header();     ?>

<?php if (have_posts()) : ?>
    <?php  while (have_posts()) : the_post(); ?>


<div class="container">
    <div class="row">
            <div class="col-6">
            <h1>GET IN TOUCH</h1>
            <div class="form">
        
            <div class="form">
                <?php echo do_shortcode('[cf7form cf7key="form"]'); ?>  
            </div>
            </div>
            </div>

<div class="col-6">
<div>FOLLOW US</div>
<div> never miss out on events and offers on Instagram @avrktil</div>
<div>image </div>
</div>

</div>
</div>
     <?php endwhile; ?>
   <?php endif; ?>


   <?php get_footer() ?>