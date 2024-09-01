<?php

/**
 * arf_scripts description
 * @return [type] [description]
 */
function arf_scripts() {

    /**
     * all css files
    */ 

    wp_enqueue_style( 'arf-fonts', arf_fonts_url(), array(), '1.0.0' );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', ARF_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', ARF_THEME_CSS_DIR.'bootstrap.min.css', array() );
    }    
    wp_enqueue_style( 'fontawasome', ARF_THEME_CSS_DIR . 'fontawasome.css', [] );
    wp_enqueue_style( 'animate', ARF_THEME_CSS_DIR . 'animate.css', [] );
    wp_enqueue_style( 'swiper-bundle', ARF_THEME_CSS_DIR . 'swiper-bundle.min.css', [] );
    wp_enqueue_style( 'odometer', ARF_THEME_CSS_DIR . 'odometer.css', [] );
    wp_enqueue_style( 'lightcase', ARF_THEME_CSS_DIR . 'lightcase.css', [] );
    wp_enqueue_style( 'arf-core', ARF_THEME_CSS_DIR . 'arf-core.css', [], time() );
    wp_enqueue_style( 'arf-unit', ARF_THEME_CSS_DIR . 'arf-unit.css', [], time() );
    wp_enqueue_style( 'arf-custom', ARF_THEME_CSS_DIR . 'arf-custom.css', [] );
    wp_enqueue_style( 'arf-style', get_stylesheet_uri() );  

    // all js   
    wp_enqueue_script( 'bootstrap-bundle', ARF_THEME_JS_DIR . 'bootstrap.bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'swiper-bundle', ARF_THEME_JS_DIR . 'swiper-bundle.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'odometer', ARF_THEME_JS_DIR . 'odometer.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'isotope-pkgd', ARF_THEME_JS_DIR . 'isotope.pkgd.min.js', [ 'imagesloaded' ], false, true );
    wp_enqueue_script( 'lightcase', ARF_THEME_JS_DIR . 'lightcase.js', [ 'jquery' ], '', true );    
    wp_enqueue_script( 'viewport', ARF_THEME_JS_DIR . 'viewport.jquery.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'custom', ARF_THEME_JS_DIR . 'custom.js', [ 'jquery' ], false, true );
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'arf_scripts' ); 

/*
Register Fonts
 */
function arf_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'arf' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Jost:wght@400;500;600;700;800;900&family=Kumbh+Sans:wght@400;500;600;700;800&display=swap');
    }
    return $font_url;
}