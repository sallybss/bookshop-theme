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
  <div class="design-hub d-flex justify-content-center align-items-center">
    <div class="text-center">
      <h1>Design Hub</h1>
      <h2>Welcome to our Design Hub. Here you can find book recommendations, podcasts, and the latest news about Design.</h2>
    </div>
  </div>
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
