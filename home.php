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
                                <p class="card-text"><?php echo esc_html($excerpt); ?></p>
                                <a href="<?php echo esc_url($url); ?>" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
