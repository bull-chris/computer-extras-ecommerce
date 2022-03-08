<?php
/* File for editing layout of woocommerce pages */

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

function compextra_add_store_menu() {
    ?>
    <div class="store-categories">
        <h3>Store Categories</h3>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-store-categories',
					'menu_id'        => 'store-categories-menu',
				)
			);
			?>
	</div>
    <?php
}

add_action( 'woocommerce_before_shop_loop', 'compextra_add_store_menu', 30 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_price', 4 );
