<?php 
if (get_theme_mod('promotion_title0') && get_theme_mod('promotion_desc0')){ ?>
    <div class="promotionsList">
        <div class="promotion promotion_0">
            <img class="promotion__img" src="<?php echo get_theme_mod('promotion_image0') ?>" />
            <div class="promotion__partieTextes">
                <p class="promotion__description"><?php echo get_theme_mod('promotion_desc0') ?></p>
                <p class="promotion__titre">
                    <?php echo get_theme_mod('promotion_title0') ? get_theme_mod('promotion_title0') : 'Welcome'; ?>
                </p>
            </div>
        </div>

        <div class="promotion promotion_1">
            <img class="promotion__img" src="<?php echo get_theme_mod('promotion_image1') ?>" />
            <div class="promotion__partieTextes">
                <p class="promotion__description"><?php echo get_theme_mod('promotion_desc1') ?></p>
                <p class="promotion__titre">
                    <?php echo get_theme_mod('promotion_title1') ? get_theme_mod('promotion_title1') : 'Welcome'; ?>
                </p>
            </div>
        </div>
    </div>
<?php 
} 