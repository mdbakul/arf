<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */
do_action( 'woocommerce_shop_loop_header' );

?>

<div class="col-xl-8">

	<div class="shoppage__header">
		<nav class="shoppagenav">
			<h6>Showing 1–9 of 12 results</h6>
			<div class="nav nav-tab" id="nav-tab" role="tablist">
				<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
					<i class="fa-light fa-list-ul"></i>
				</button>
				<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
					<i class="fa-light fa-bars"></i>
				</button>
			</div>
		</nav>
	</div> 

	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			<div class="main_wrapper g-4">
				<?php
				if ( woocommerce_product_loop() ) {
					/**
					* Hook: woocommerce_before_shop_loop.
					*
					* @hooked woocommerce_output_all_notices - 10
					* @hooked woocommerce_result_count - 20
					* @hooked woocommerce_catalog_ordering - 30
					*/
					do_action( 'woocommerce_before_shop_loop' );

					woocommerce_product_loop_start();

					if ( wc_get_loop_prop( 'total' ) ) {
						while ( have_posts() ) {
							the_post();

							/**
							* Hook: woocommerce_shop_loop.
							*/
							do_action( 'woocommerce_shop_loop' );

							wc_get_template_part( 'content', 'product' );
						}
					}
						woocommerce_product_loop_end();

						/**
						* Hook: woocommerce_after_shop_loop.
						*
						* @hooked woocommerce_pagination - 10
						*/
						do_action( 'woocommerce_after_shop_loop' );
						} else {
						/**
						* Hook: woocommerce_no_products_found.
						*
						* @hooked wc_no_products_found - 10
						*/
						do_action( 'woocommerce_no_products_found' );
					}
				?>
			</div>
		</div>
		<div class="tab-pane" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			<div class="main_wrapper g-4">							
					<?php
						if ( woocommerce_product_loop() ) {
							/**
							* Hook: woocommerce_before_shop_loop.
							*
							* @hooked woocommerce_output_all_notices - 10
							* @hooked woocommerce_result_count - 20
							* @hooked woocommerce_catalog_ordering - 30
							*/
							do_action( 'woocommerce_before_shop_loop' );

							woocommerce_product_loop_start();

							if ( wc_get_loop_prop( 'total' ) ) {
								while ( have_posts() ) {
									the_post();

									/**
									* Hook: woocommerce_shop_loop.
									*/
									do_action( 'woocommerce_shop_loop' );

									wc_get_template_part( 'content', 'product' );
								}
							}
							woocommerce_product_loop_end();
							/**
							* Hook: woocommerce_after_shop_loop.
							*
							* @hooked woocommerce_pagination - 10
							*/
							do_action( 'woocommerce_after_shop_loop' );
							} else {
							/**
							* Hook: woocommerce_no_products_found.
							*
							* @hooked wc_no_products_found - 10
							*/
							do_action( 'woocommerce_no_products_found' );
					   }
					?>
			</div>
		</div>                    
	</div>

	<div class="pagi d-none">
		<div class="pagi-inner">
			<ul>
				<li><a href="#0"><i class="fa-solid fa-angles-left"></i></a></li>
				<li><a href="#">01</a></li>
				<li><a href="#" class="active">02</a></li>
				<li><a href="#">03</a></li>
				<li><a href="#">04</a></li>
				<li><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>
			</ul>
		</div>
	</div>
</div>  

<div class="col-xl-4">
	<div class="blogsingle__sidebar">
		<div class="blogsingle__search">
			<div class="sideallheading">
				<h6>Search Your Keywords</h6>
			</div>
			<div class="search-area">
				<input type="text" placeholder="search here">
				<div class="icon">
					<i class="fa-solid fa-magnifying-glass"></i>
				</div>
			</div>
		</div>
		<div class="blogsingle__popularpost">
			<div class="sideallheading">
				<h6>Most Popular Post</h6>
			</div>
			<div class="postitem">
				<ul>
					<li>
						<div class="thum imghover">
							<a href="blog-single.html">
								<img src="assets/img/blog-details/img1.jpg" alt="bakul">
							</a>
						</div>
						<div class="content">
							<h6><a href="blog-single.html">Consulting Reporting quonk Arei Could More.</a></h6>
							<span>Jan 25, 2024</span>
						</div>
					</li>
					<li>
						<div class="thum imghover">
							<a href="blog-single.html">
								<img src="assets/img/blog-details/img2.jpg" alt="bakul">
							</a>
						</div>
						<div class="content">
							<h6><a href="blog-single.html">Find the Right Path for your Group Course online</a></h6>
							<span>Jan 15, 2024</span>
						</div>
					</li>
					<li>
						<div class="thum imghover">
							<a href="blog-single.html">
								<img src="assets/img/blog-details/img3.jpg" alt="bakul">
							</a>
						</div>
						<div class="content">
							<h6><a href="blog-single.html">Consulting Reporting quonk Arei Could More.</a></h6>
							<span>Feb 12, 2024</span>
						</div>
					</li>
					<li>
						<div class="thum imghover">
							<a href="blog-single.html">
								<img src="assets/img/blog-details/img4.jpg" alt="bakul">
							</a>
						</div>
						<div class="content">
							<h6><a href="blog-single.html">Find the Right Path for your Group Course online</a></h6>
							<span>Jan 15, 2024</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="blogsingle__catagory">
			<div class="sideallheading">
				<h6>all Categories</h6>
			</div>
			<div class="content">
				<ul>
					<li>                                        
						<h6><a href="#">Allergies</a></h6>
						<span>02</span>
					</li>
					<li>                                        
						<h6><a href="#">Colds and Flu</a></h6>
						<span>03</span>
					</li>
					<li>                                        
						<h6><a href="#">Post-Surgical Pain</a></h6>
						<span>04</span>
					</li>
					<li>                                        
						<h6><a href="#">Kidney Stones</a></h6>
						<span>05</span>
					</li>
					<li>                                        
						<h6><a href="#">Chronic Lower-Back Pain</a></h6>
						<span>06</span>
					</li>
					<li>                                        
						<h6><a href="#">Peripheral Neuropathy</a></h6>
						<span>07</span>
					</li>
					<li>                                        
						<h6><a href="#">Cancer Pain</a></h6>
						<span>08</span>
					</li>
					<li>                                        
						<h6><a href="#">Postherpetic Neuralgia</a></h6>
						<span>10</span>
					</li>
				</ul>
			</div>
		</div> 
		<div class="blogsingle__alltag">
			<div class="sideallheading">
				<h6>Our Popular Tags</h6>
			</div>
			<div class="alltaginner">
				<a href="#">Advices</a>
				<a href="#">business</a>
				<a href="#">strategy</a>
				<a href="#">consulting</a>
				<a href="#">marketing</a>
				<a href="#">SEO</a>
				<a href="#">Advices</a>
				<a href="#">business</a>
				<a href="#">strategy</a>
			</div>
		</div>
	</div>
</div>

<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
