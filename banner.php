<?php 
if (get_theme_mod('banner_image') && get_theme_mod('banner_title') && get_theme_mod('banner_desc')){ ?>
    <div class="banner">
        <img class="banner__img" src="<?php echo get_theme_mod('banner_image') ?>" />
        <div class="banner__partieTextes">
            <p class="banner__description"><?php echo get_theme_mod('banner_desc') ?></p>
            <h1 class="banner__titre">
                <?php echo get_theme_mod('banner_title') ? get_theme_mod('banner_title') : 'Welcome'; ?>
            </h1>
            <button class="banner__button"><a class="banner__buttonUrl" target="_blank" href="<?php echo get_theme_mod('banner_url') ?>" >Explore now </a></button>
        </div>
    </div>
<?php 
} 