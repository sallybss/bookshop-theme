<?php
/*
Template Name: Contact
*/


get_header();     ?>

<?php if (have_posts()) : ?>
    <?php  while (have_posts()) : the_post(); ?>

       <?php 
    
        $contact = get_field('contact');
        $follow = get_field('follow');
        $followtext = get_field("follow_text");
        $instapic = get_field("instapic");
         $instapic2 = get_field("instapic2");
        ?>


<div class="container">
    <div class="row">
            <div class="col-6">
            <h1><?php echo $contact; ?></h1>
        
        
            <div class="form">
                <?php echo do_shortcode('[cf7form cf7key="form"]'); ?>  
            </div>
            
            </div>

<div class="col-6">
<div> <h1> <?php echo $follow; ?> <h1></div>
<div><?php echo $followtext; ?></div>
<div> <img src="<?php echo $instapic['url']; ?>" alt="instagram account"> </div>
<div> <img src="<?php echo $instapic2['url']; ?>" alt="instagram account"> </div>
</div>

</div>
</div>
     <?php endwhile; ?>
   <?php endif; ?>


   <?php get_footer() ?>