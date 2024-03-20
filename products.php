<div class="products">
    <?php
    $args = [
        'status' => 'publish',
    ];

    $products = wc_get_products($args);
    $products_url = get_theme_mod('products_url', '');
    $products_title = get_theme_mod('products_title', 'Lorem Ipsum Dolor');
    $products_subtitle = get_theme_mod('products_subtitle', 'Lorem Ipsum');
    $products_text_cta = get_theme_mod('products_text_cta', 'Lorem');
    if ($products_subtitle || $products_title) { ?>
        <div class="products__title-content">
            <h3 class="products__subtitle"><?php echo esc_html($products_subtitle); ?></h3>
            <h2 class="products__title"><?php echo esc_html($products_title); ?></h2>
        </div>
    <?php } ?>
    <div class="products__card">
        <?php $product_count = 0; 
        foreach ($products as $product) {
        if ($product_count >= 8) break; 
            $product_count++;
            $product_id = $product->get_id();
            $product_url = get_permalink($product_id);
            $product_name = $product->get_name();
            $product_image = $product->get_image();
            $product_price = $product->get_regular_price();
            $product_sale_price = $product->get_sale_price();
            $product_categories = $product->get_category_ids();
            $product_categories_names = array();
            foreach ($product_categories as $category_id) {
                $category = get_term($category_id, 'product_cat');
                if ($category && !is_wp_error($category)) {
                    $product_categories_names[] = $category->name;
                }
            }
            $product_reviews_count = $product->get_review_count();
            $product_reviews_html = '';
            if ($product_reviews_count > 0) {
                $product_reviews_rating = $product->get_average_rating();
                $product_reviews_html = wc_get_rating_html($product_reviews_rating);
            } else {
                $product_reviews_html = 'No reviews yet!';
            }
        ?>
            <a class="product__card" href="<?php echo esc_url($product_url); ?>">
                <div class="product__image"><?php echo $product_image; ?></div>
                <div class="product__content">
                    <h2 class="product__title"><?php echo esc_html($product_name); ?></h2>
                    <p class="product__price"><span class="product__initial-price"><?php echo wc_price($product_price); ?></span><span class="product__discounted-price"><?php if ($product_sale_price) { ?>
                        <?php echo wc_price($product_sale_price); ?>
                    <?php } ?></span>
                    <span class="products__reviews"><?php echo $product_reviews_html; ?></span>
                    </p>
                </div>
                <p class="product__tag"><?php echo implode(', ', $product_categories_names); ?></p>
            </a>
        <?php } ?>
    </div>
    <?php if ($products_url || $products_text_cta) { ?>
    <a href="<?php echo esc_url($products_url); ?>" class="products__button button button--blue"><?php echo esc_html($products_text_cta); ?></a>
    <?php } ?>
</div>