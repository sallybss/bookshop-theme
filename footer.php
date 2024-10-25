<?php 
$footercol1h1 = get_field("h1");
$insta = get_field("insta");
$fb = get_field("fb");
$threads = get_field("threads");
$footercol1h2 = get_field("h2");
$footercol1h3 = get_field("h3");
$location = get_field("location");
$footercol1h4 = get_field("h4");
$logoimg = get_field("logo_image");
$hours = get_field("hours");
$address = get_field("address");
$about = get_field("about");

?>

<footer>
    <div class="footer-container container">
        <div class="row">
            <div class="col-md-2 col-sm-12 footer-column footer-logo" style="margin-right: 15px;">
                <img src="<?php echo $logoimg['url']; ?>" alt="Company Logo">
            </div>

            <div class="col-md-2 col-sm-6 footer-column connect">
                <h3><?php echo $footercol1h1; ?></h3>
                <ul>
                    <li><a href="<?php echo $insta; ?>" target="_blank">Instagram</a></li>
                    <li><a href="<?php echo $fb; ?>" target="_blank">Facebook</a></li>
                    <li><a href="<?php echo $threads; ?>" target="_blank">Threads</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-6 footer-column company">
                <h3><?php echo $footercol1h2; ?></h3>
                <ul>
                    <li><a href="<?php echo $about; ?>" target="_blank"><?php echo $hours; ?></a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-6 footer-column support">
                <h3><?php echo $footercol1h3; ?></h3>
                <ul>
                    <li><a href="<?php echo $address; ?>" target="_blank"><?php echo $location; ?></a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6 footer-column newsletter">
                <h3><?php echo $footercol1h4; ?></h3>
                <?php echo do_shortcode('[contact-form-7 id="d878031" title="Contact form 1"]'); ?>
            </div>
        </div>
        <hr>
    </div>
    <?php wp_footer(); ?>
</footer>



</body>


