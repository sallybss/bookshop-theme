
<?php get_header(); ?>
<div class="container">
    <!-- Design Hub Section -->
    <div class="row my-5">
        <!-- Left Column: Design Hub Title and Subtitle -->
        <div class="col d-flex flex-column align-items-center justify-content-center">
            <h1 class="design-hub-title text-center">DESIGN HUB</h1>
            <h2 class="design-hub-text text-center">Welcome to design hub</h2>
        </div>
    </div>

    <!-- Hero Image -->
    <div class="row mb-5">
        <div class="col d-flex justify-content-center">
            <img src="hero2.jpeg" alt="Hero Image" class="img-fluid">
        </div>
    </div>

    <!-- Content Section -->
    <div class="content">
        <div class="row">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <?php
                        $url = get_permalink();
                        $title = get_the_title();
                        $excerpt = get_the_excerpt();
                    ?>

                    <!-- Post Card -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                     

                        <div class="card-body">
                            <h5 class="card-title"><?php echo esc_html($title); ?></h5>
                               <!-- Card Image (Featured Image) -->
                        <?php if (has_post_thumbnail()) : ?>
                            <img class="card-img-top img-fluid img-small" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php echo esc_attr($title); ?>">
                        <?php endif; ?>
                            <p class="card-text"><?php echo esc_html($excerpt); ?></p>
                            <a href="<?php echo esc_url($url); ?>" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<!-- Spotify Playlist and Podcast Info Section -->
<div class="row my-5">
    <!-- Left Column: Podcast Info -->
    <div class="col-lg-4 col-md-4 mb-4">
        <h3>Check Out Our Podcasts</h3>
        <p>Explore engaging discussions with top designers and industry leaders. In our podcasts, we cover the latest trends, challenges, and innovations in design, providing you with insights and thought-provoking conversations from experts who shape the field.</p>
    </div>
    
    <!-- Right Column: Spotify Playlist -->
    <div class="col-lg-4 col-md-4 d-flex justify-content-center">
        <div class="embed-responsive embed-responsive-16by9" style="max-width: 400px; width: 100%;">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/3SdukUsvVBUwzbS3Mv69TM?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>
    </div>
</div>
<?php get_footer(); ?>

