<?php

remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);
remove_action('woocommerce_shop_loop_header','woocommerce_product_taxonomy_archive_header',10);
remove_action('woocommerce_before_shop_loop','woocommerce_output_all_notices',10);
remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20);
remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering',30);


// content-product here

remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open',10);
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',10);
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail',10);
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating',5);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_product_link_close',5);
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);


if(!function_exists('tp_main_content')){
    function tp_main_content(){
            global $product;
            global $post;
            global $woocommerce;
        ?>
        <div class="shoppage__inner">
            <div class="shoppage__item">
                <div class="thum">
                    <a href="<?php the_permalink();?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <div class="shoppagelink go-up">
                        <a href="assets/img/shop/img12.jpg" data-rel="lightcase"><i class="fa-solid fa-eye"></i></a>
                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                        <a href="product-details.html"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                </div>
                <div class="content">
                    <div class="allstar">
                        <?php woocommerce_template_loop_rating() ?>
                    </div>
                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                    <?php woocommerce_template_loop_price() ?>                                                   
                </div>
            </div>
        </div>
    <?php
    }
}

add_action('woocommerce_before_shop_loop_item','tp_main_content',10);