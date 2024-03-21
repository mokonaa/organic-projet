<?php 
if (get_theme_mod('aboutus_title') && get_theme_mod('aboutus_description') && get_theme_mod('aboutus_text')){ ?>
   <div class="aboutUs">
    <div class="aboutusPartieGauche">
        <img class="aboutusPartieGauche__img" src="<?php echo get_theme_mod('aboutus_fondimage') ?>" />
    </div>
    <div class="aboutusPartieDroite">
            <p class="aboutusPartieDroite__description"><?php echo get_theme_mod('aboutus_description') ?></p>
            <h2 class="aboutusPartieDroite__titre">
                <?php echo get_theme_mod('aboutus_title') ? get_theme_mod('aboutus_title') : 'Welcome'; ?>
            </h2>
            <p class="aboutusPartieDroite__paragraphe"> <?php echo get_theme_mod('aboutus_text') ?></p>
            <div>
                <div class="aboutusPartieDroite__bloc">
                    <div class="aboutusPartieDroite__blocimg"><img src="<?php echo get_theme_mod('aboutusbloc1_image') ?>"/></div>
                    <div>
                        <h6 class="aboutusPartieDroite__blocsTitre"><?php echo get_theme_mod('aboutus_bloc1title') ?></h6>
                        <p class="aboutusPartieDroite__blocsDescription"><?php echo get_theme_mod('aboutus_bloc1description') ?></p>
                    </div>
                </div>
                <div class="aboutusPartieDroite__bloc">
                    <div class="aboutusPartieDroite__blocimg"><img src="<?php echo get_theme_mod('aboutusbloc2_image') ?>"/></div>
                    <div>
                        <h6 class="aboutusPartieDroite__blocsTitre"><?php echo get_theme_mod('aboutus_bloc2title') ?></h6>
                        <p class="aboutusPartieDroite__blocsDescription"><?php echo get_theme_mod('aboutus_bloc2description') ?></p>
                    </div>
                </div>
            </div>
            <button class="aboutusPartieDroite__button button button--blue "><a class="aboutusPartieDroite__buttonUrl" target="_blank" href="<?php echo get_theme_mod('aboutus_url') ?>" ><?php echo get_theme_mod('bouton_text') ? get_theme_mod('bouton_text') : 'Shop'; ?> </a></button>
        </div>
    </div>
<?php 
} 