<?php 

	/**
	 * Template part for displaying header layout one
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package biddut
	*/

    //used in biddut porject 
        // info
        $header_topbar_switch = get_theme_mod( 'header_topbar_switch', false );

        // Phone Number
        $header_top_phone = get_theme_mod( 'header_phone', __( '+8801310-069824', 'biddut' ) );

        // Email id 
        $header_top_email = get_theme_mod( 'header_email', __( 'biddut@support.com', 'biddut' ) );

        // Header Address Text
        $header_top_address_text = get_theme_mod( 'header_address', __( '734 H, Bryan Burlington, NC 27215', 'biddut' ) );

        // Header Address Link
        $header_top_address_link = get_theme_mod( 'header_address_link', __( '#', 'biddut' ) ); 

        // header right
        $biddut_header_right = get_theme_mod( 'header_right_switch', false );
        $biddut_menu_col = $biddut_header_right ? 'col-xl-8 d-none d-xl-block' : 'col-xl-10 d-none d-xl-block';
        $biddut_menu_end = $biddut_header_right ? '' : 'd-flex justify-content-end';  


   // Header charity Text
   $header_top_charity_text = get_theme_mod( 'header_top_charity_text', __( 'Connect with our charity', 'biddut' ) );

     

   // Button Text
   $header_top_button_switch = get_theme_mod( 'header_top_button_switch', false);
   $header_top_button_text = get_theme_mod( 'header_button_text', __( 'Donate Now', 'biddut' ) );

   // Button Text
   $header_top_button_link = get_theme_mod( 'header_button_link', __( '#', 'biddut' ) );

   $header_language_switch = get_theme_mod( 'header_language_switch', __( 'false', 'biddut' ) );
   $phone_number_url = preg_replace("/[^0-9]/", "", $header_top_phone); 

   

//    col-xl-7 d-none d-xl-block

   // header search btn 
   $header_search_switch = get_theme_mod( 'header_search_switch', true );

   // header auth btn 
   $header_auth_switch = get_theme_mod( 'header_auth_switch', true );
   $header_auth_link = get_theme_mod( 'header_auth_link',"#" );

?> 

 <!-- start header section here -->
 <div class="header header--headerpage3">

    <div class="header__top header__top--toppage2 header__top--toppage3">
        <div class="container-xl container-fluid">
            <div class="header__topcontent header__topcontent--topcontentpage2">
                <div class="left">
                    <ul>
                    <?php if(!empty($header_top_phone)): ?> 
                        <li>
                            <div class="icon">                                                       
                                <i class="fa-solid fa-square-phone"></i>                              
                            </div>
                            <div class="text">
                                <p><?php echo esc_html($header_top_phone); ?></p>                            
                            </div>
                        </li>
                        <?php endif; ?> 

                        <?php if(!empty($header_top_email)): ?> 
                        <li>
                            <div class="icon">                                                       
                                <i class="fa-sharp fa-regular fa-envelope-open"></i>                              
                            </div>
                            <div class="text">
                                <p><?php echo esc_html($header_top_email);?></p>                            
                            </div>
                        </li>
                        <?php endif; ?> 

                        <?php if(!empty($header_top_address_text)): ?> 
                            <li>
                                <div class="icon">                                                       
                                    <i class="fa-sharp fa-solid fa-location-dot"></i>                             
                                </div>
                                <div class="text">                                    
                                    <a href="<?php echo esc_html($header_top_address_link); ?>"><?php echo esc_html($header_top_address_text); ?>  </a>                         
                                </div>
                            </li>
                        <?php endif; ?> 
                    </ul>
                </div>
                <div class="right">
                    <ul>                       
                        <?php echo arf_header_social_profiles() ?>
                    </ul>                        
                </div>
            </div>
        </div>
    </div>

    <div class="header__bottom header__bottom--bottompage3 bg-white">
        <div class="container-xl container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-xl-3">
                    <div class="left">
                        <div class="header__logo">
                            <?php arf_header_logo() ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-9">
                    <div class="right">                            
                        <div class="header__nav d-none d-xl-block"> 
                            <div class="mobilelogo d-xl-none d-block">
                                <a href="index-3.html"><img src="assets/img/logo/whiteloog.png" alt="logo"></a>
                            </div>
                            <div class="mainactive">                           
                                <nav class="tp-main-menu-content">                                    
                                    <?php arf_header_menu() ?>
                                </nav>
                            </div>                                
                        </div> 
                        <div class="header__cart">                            
                            <div class="carticon">
                            <a href="#"><i class="fa-light fa-basket-shopping"></i></a>
                            </div>
                            <div class="cart-details">
                                <div class="close d-sm-none d-block">
                                    <i class="fa-sharp fa-solid fa-square-xmark"></i>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <img src="assets/img/cart/img1.jpg" alt="img">
                                    </div>
                                    <div class="right">
                                        <div class="text">
                                            <h6><a href="#">Product title here</a></h6>
                                            <p>$20.00</p>
                                            <span>In Stock</span>
                                        </div>
                                        <div class="cros">
                                            <i class="fa-sharp fa-solid fa-square-xmark"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <img src="assets/img/cart/img2.png" alt="img">
                                    </div>
                                    <div class="right">
                                        <div class="text">
                                            <h6><a href="#">Product title here</a></h6>
                                            <p>$20.00</p>
                                            <span>In Stock</span>
                                        </div>
                                        <div class="cros">
                                            <i class="fa-sharp fa-solid fa-square-xmark"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="total">
                                    <div class="subtotal">
                                        <p>Subtotal :<span> $40.00</span></p>
                                    </div>
                                    <div class="checkout">
                                        <a href="#">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header__searchicon d-xl-block d-none">
                            <button class="search-open-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                        </div>
                        <div class="header__mobilebar tp-header-bar d-xl-none">
                            <button class="tp-menu-bar"><i class="fa-sharp fa-regular fa-bars-staggered"></i></button>
                            </div> 
                    </div>
                </div>                    
            </div>
        </div>
    </div>
    
</div>  
 <!--  header section here -->

<?php get_template_part( 'template-parts/header/header-side-info' ); ?>