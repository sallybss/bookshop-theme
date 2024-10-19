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
<div class="container">
  <div class="row">
    <!-- Left Column: Design Hub Title and Subtitle -->
    <div class="col d-flex flex-column align-items-center justify-content-center">
      <h1 class="design-hub-title text-center">DESIGN HUB</h1>
      <h2 class="design-hub-text">Welcome to design hub</h2>
    </div>
    
  
  </div>
</div>

<img src="images/hero2.jpeg" alt="">

            <div class="post">
                <h1><?php echo $title; ?></h1>
                <p><?php echo $excerpt; ?></p>
                <a href="<?php echo $url; ?>">Read more</a>
            </div>

      



            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
