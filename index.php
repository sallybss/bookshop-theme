<?php get_header() ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

    <?php 
    $heroimage = get_field("hero-img");
    $herotext = get_field("hero-text");
    $intro = get_field("intro");
    $desc = get_field("description_img");
    $desctext = get_field("description_text");
    $saletext = get_field("sale_text");
    $saletext1 = get_field("sale_text1");
    $saleh1 = get_field("sale_h1");
    $exploreimage = get_field("explore_image");
    $exploretext = get_field("explore_text");
    $exploreh1 = get_field("explore_h1");
    $buttonexplore = get_field("button_explore");
    $trustpilot = get_field("trustpilot");
    $btntext = get_field("button_text");
    ?>

    <img src="<?php echo $heroimage["url"]; ?>" alt="" class="hero" >

    <div class="text-hero">
        <h1><?php echo $herotext; ?></h1>
        <p><?php echo  $intro; ?></p>
    </div>

    <!-- WooCommerce Product Loop Section -->
<div class="container-fluid woocommerce-section">
    <h2 class="text-center mb-4">Our Book Collection</h2>
    <div class="row justify-content-center">
        <?php
        $loop = new WP_Query(array(
                'post_type' => 'product',
                'posts_per_page' => 4, // Change this to set a specific number of products
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => "new-releases	",
                    ),
                ),
        ));
        ?>

        <?php if($loop->have_posts()): ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                <?php
                global $product;
                $title = get_the_title();
                $excerpt = get_the_excerpt();
                $price = $product->get_price_html();
                $link = get_the_permalink();
                $image = get_the_post_thumbnail_url($product->get_id(), 'medium');
                ?>

                <div class="col-lg-auto col-md-6 col-sm-12 d-flex align-items-stretch">
                    <div class="card product-card" style="width: 18rem;">
                        <a href="<?php echo $link; ?>">
                            <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="card-img-top product-image">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $title; ?></h5>
                            <p class="card-text product-price"><?php echo $price; ?></p>
                            <p class="card-text product-excerpt"><?php echo $excerpt; ?></p>
                            <a href="<?php echo $link; ?>" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
<!-- woocommerce END -->
    <div class="grey-section">
        <div class="content">
            <div class="image">
                <img src="<?php echo $desc["url"]; ?>" alt="Section Image" class="image" >
            </div>
            <div class="text">
                <p><?php echo  $desctext; ?></p>
            </div>
        </div>
    </div>

    <div class="sale-section">
        <div class="content-section">
            <div class="text-section">
                <h1><?php echo  $saleh1; ?></h1>
                <p><?php echo  $saletext; ?></p>
            </div>
            <div class="small-text">
                <p><?php echo  $saletext1; ?></p>
            </div>
        </div>
    </div>

    <div class="pink-section">
        <div class="content-pink">
            <div class="image">
                <img src="<?php echo $exploreimage["url"]; ?>" alt="Books">
            </div>
            <div class="text">
                <h1><?php echo  $exploreh1; ?></h1>
                <p><?php echo  $exploretext; ?></p>
                <button><a href="<?php echo $buttonexplore ?>" target="_blank"><?php echo  $btntext; ?></a></button>
            </div>
        </div>
    </div>

    <div class="centered-image">
        <img src="<?php echo $trustpilot["url"]; ?>" alt="Trustpilot rate">
    </div>

    <?php endwhile; ?>
<?php endif; ?>

<!-- WooCommerce Product Loop Section -->
<div class="container-fluid woocommerce-section">
    <h2 class="text-center mb-4">Our Book Collection</h2>
    <div class="row justify-content-center">
        <?php
        $loop = new WP_Query(array(
                'post_type' => 'product',
                'posts_per_page' => 4, // Change this to set a specific number of products
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => "architecture",
                    ),
                ),
        ));
        ?>

        <?php if($loop->have_posts()): ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                <?php
                global $product;
                $title = get_the_title();
                $excerpt = get_the_excerpt();
                $price = $product->get_price_html();
                $link = get_the_permalink();
                $image = get_the_post_thumbnail_url($product->get_id(), 'medium');
                ?>

                <div class="col-lg-auto col-md-6 col-sm-12 d-flex align-items-stretch">
                    <div class="card product-card" style="width: 18rem;">
                        <a href="<?php echo $link; ?>">
                            <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="card-img-top product-image">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $title; ?></h5>
                            <p class="card-text product-price"><?php echo $price; ?></p>
                            <p class="card-text product-excerpt"><?php echo $excerpt; ?></p>
                            <a href="<?php echo $link; ?>" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>


<?php get_footer() ?>
