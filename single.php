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
            $content = get_the_content();
            $mail = get_the_author_email();
            ?>
            
            <!-- HTML to print one blog entry preview -->
        

                 <div class="container">
        <div class="row">
            <div class="col-8">
                     <h1><?php echo $title; ?></h1>
             <p><?php echo $content; ?></p>
            </div>
            <div class="col-4">
                <h2> <?php echo $author ?></h2>
                Author: <a href="mailto:<?php echo $mail ?>"><?php echo $author; ?></a>
            </div>
        </div>
    </div>
            
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
