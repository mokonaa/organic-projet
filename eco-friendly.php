<?php if (get_theme_mod('eco_friendly_img') && get_theme_mod('eco_friendly_desc') && get_theme_mod('eco_friendly_title')) { ?>
<div class="eco-friendly-section">
    <div class="eco-friendly-image" style="background-image:url(<?php echo get_theme_mod("eco_friendly_img"); ?>);"></div>
    <div class="eco-friendly-container">
        <div class="eco-friendly">
            <p class="eco-friendly__description"><?php echo get_theme_mod('eco_friendly_desc') ?></p>
            <h2 class="eco-friendly__title"><?php echo get_theme_mod('eco_friendly_title') ?></h2>
            <?php if (get_theme_mod("eco_friendly_subtitle_1")) { ?>
                <h6 class="eco-friendly__subtitle"><?php echo get_theme_mod('eco_friendly_subtitle_1') ?></h6>
                <?php if (get_theme_mod("eco_friendly_text_1")) { ?>
                    <p class="eco-friendly__text"><?php echo get_theme_mod('eco_friendly_text_1') ?></p>
                <?php } ?>
            <?php } ?>
            <?php if (get_theme_mod("eco_friendly_subtitle_2")) { ?>
                <h6 class="eco-friendly__subtitle"><?php echo get_theme_mod('eco_friendly_subtitle_2') ?></h6>
                <?php if (get_theme_mod("eco_friendly_text_2")) { ?>
                    <p class="eco-friendly__text"><?php echo get_theme_mod('eco_friendly_text_2') ?></p>
                <?php } ?>
            <?php } ?>
            <?php if (get_theme_mod("eco_friendly_subtitle_3")) { ?>
                <h6 class="eco-friendly__subtitle"><?php echo get_theme_mod('eco_friendly_subtitle_3') ?></h6>
                <?php if (get_theme_mod("eco_friendly_text_3")) { ?>
                    <p class="eco-friendly__text"><?php echo get_theme_mod('eco_friendly_text_3') ?></p>
                <?php } ?>
            <?php } ?>
        </div>  
    </div>
</div>
<?php 
} 