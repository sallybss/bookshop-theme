<?php get_header(); ?>
<div class="container">
    <div class="content">
        <?php if (have_posts()): ?>
            <?php while(have_posts()): the_post() ?>
            
            <?php
            $url = get_permalink();
            $title = get_the_title();
            $date = get_the_date();
            $author = get_the_author();
            $excerpt = get_the_excerpt();
            $mail = get_the_author_email();
            ?>
            
            <!-- Author: <a href="mailto:<?php echo $mail ?>"><?php echo $author; ?></a> -->
        <!-- Hero Section with Responsive Grid -->
<section class="hero d-flex justify-content-center align-items-center">
  <div class="grid-box">
    <div class="row gx-3 gy-3">
      <!-- Grid Cells -->
      <div class="col-6 col-md-3 grid-cell"></div>
      <div class="col-6 col-md-3 grid-cell"></div>
      <div class="col-6 col-md-3 grid-cell"></div>
      <div class="col-6 col-md-3 grid-cell"></div>

      <div class="col-6 col-md-3 grid-cell"></div>
      <div class="col-6 col-md-3 grid-cell"></div>
      
      <!-- Centered Text -->
      <div class="col-12 col-md-6 grid-cell d-flex justify-content-center align-items-center">
        <h1 class="display-1 text-center">Design Hub</h1>
      </div>

      <div class="col-6 col-md-3 grid-cell"></div>
      <div class="col-6 col-md-3 grid-cell"></div>
      
      <div class="col-6 col-md-3 grid-cell"></div>
      <div class="col-6 col-md-3 grid-cell"></div>
      <div class="col-6 col-md-3 grid-cell"></div>
      <div class="col-6 col-md-3 grid-cell"></div>
    </div>
  </div>
</section>

            <div class="post">
                <h1><?php echo $title; ?></h2>
                <p><?php echo $excerpt; ?></p>
                <a href="<?php echo $url; ?>">Read more</a>
            </div>

      



            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
