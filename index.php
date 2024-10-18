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

<h1>
    DONT KNOW
</h1>

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
                <button><a href= "<?php echo $buttonexplore ?>"target="_blank"><?php echo  $btntext; ?></a></button>
            </div>
        </div>
    </div>

    <div class="centered-image">
    <img src="<?php echo $trustpilot["url"]; ?>" alt="Trustpilot rate">
    </div>




    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>