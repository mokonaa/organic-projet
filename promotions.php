<?php 
if (get_theme_mod('promotion_title0') && get_theme_mod('promotion_desc0')){ ?>
    <div class="promotionsList">
        <div class="promotion">
            <img class="promotion__img" src="<?php echo get_theme_mod('promotion_image0') ?>" />
            <div class="promotion__partieTextes">
                <p class="promotion__description"><?php echo get_theme_mod('promotion_desc0') ?></p>
                <h1 class="promotion__titre">
                    <?php echo get_theme_mod('promotion_title0') ? get_theme_mod('promotion_title0') : 'Welcome'; ?>
                </h1>
            </div>
        </div>

        <div class="promotion">
            <img class="promotion__img" src="<?php echo get_theme_mod('promotion_image1') ?>" />
            <div class="promotion__partieTextes">
                <p class="promotion__description"><?php echo get_theme_mod('promotion_desc1') ?></p>
                <h1 class="promotion__titre">
                    <?php echo get_theme_mod('promotion_title1') ? get_theme_mod('promotion_title1') : 'Welcome'; ?>
                </h1>
            </div>
        </div>
    </div>
<?php 
} 