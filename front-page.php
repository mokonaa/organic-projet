<?php 
    include('header.php');
    include('banner.php');
    include('promotions.php');
    include ('aboutus.php');
?>
<div class="newsletter">
    <?php 
        $newsletter_image = get_theme_mod('newsletter_image', '');
        $newsletter_url = get_theme_mod('newsletter_url', '');
        $newsletter_title = get_theme_mod('newsletter_title', '');
        if ($newsletter_image || $newsletter_url || $newsletter_title) { ?>
            <div class="newsletter">
                <div class="newsletter__picture">
                    <?php if ($newsletter_image) { ?>
                        <img src="<?php echo esc_url($newsletter_image); ?>" alt="Click to subscribe to our newsletter">
                    <?php } ?>
                </div>
                <div class="newsletter__text">
                    <?php if ($newsletter_title) { ?>
                        <h3 class="newsletter__title" style="color: <?php echo get_theme_mod('newsletter_text_color') ?>"><?php echo esc_html($newsletter_title); ?></h3>
                    <?php } ?>
                    <form class="newsletter__form" action="<?php echo esc_url($newsletter_url); ?>" method="post">
                        <input class="newsletter__input" type="email" name="email" placeholder="Enter your email address" required>
                        <button class="newsletter__button button button--pagination" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
    <?php } ?>
</div>
<?php //include('footer.php') ?>
