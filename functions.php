<?php 

function load_stylesheets(){
    wp_register_style('stylesheet', get_template_directory_uri().'/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri().'/app.css', '', 1, 'all');
    wp_enqueue_style('custom');

    wp_register_style('responsive_style', get_template_directory_uri().'/css/responsive.css',
    '', 1, 'all');
    wp_enqueue_style('responsive_style');

    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css',
    '', 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('ui_style', get_template_directory_uri().'/css/style.css',
    '', 1, 'all');
    wp_enqueue_style('ui_style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_vendors(){
    //Slider
    wp_register_style('animate',get_template_directory_uri().'/vendors/animate-css/animate.css',
    '', 1, 'all' );
    wp_enqueue_style('animate');

    wp_register_style('setting',get_template_directory_uri().'/vendors/revolution/css/settings.css',
    '', 1, 'all' );
    wp_enqueue_style('setting');

    wp_register_style('navigation',get_template_directory_uri().'/vendors/revolution/css/navigation.css',
    '', 1, 'all' );
    wp_enqueue_style('navigation');

    wp_register_style('layer',get_template_directory_uri().'/vendors/revolution/css/layers.css',
    '', 1, 'all' );
    wp_enqueue_style('layer');

    //Icons
    wp_register_style('font_awesome',get_template_directory_uri().'/css/font-awesome.min.css',
    '', 1, 'all' );
    wp_enqueue_style('font_awesome');

    wp_register_style('linear_icon_style',get_template_directory_uri().'/vendors/linearicons/style.css',
    '', 1, 'all' );
    wp_enqueue_style('linear_icon_style');

    wp_register_style('flat_icon_style',get_template_directory_uri().'/vendors/flat-icon/flaticon.css',
    '', 1, 'all' );
    wp_enqueue_style('flat_icon_style');

    //plugin css
    wp_register_style('owl-carousel',get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.css',
    '', 1, 'all' );
    wp_enqueue_style('owl-carousel');

    wp_register_style('magnifc-popup',get_template_directory_uri().'/vendors/magnifc-popup/magnific-popup.css',
    '', 1, 'all' );
    wp_enqueue_style('magnifc-popup');


}
add_action('wp_enqueue_scripts', 'load_vendors');


function load_javascript(){
    wp_register_script('custom', get_template_directory_uri().'/app.js', 'jquery',1, true);
    wp_enqueue_script('custom');

    //Jquery min necessary
    wp_register_script('jquery_min', get_template_directory_uri().'/js/jquery-3.6.0.min.js', '3.6.0', true);
    wp_enqueue_script('jquery_min');

    //Jquery migrate 
    wp_register_script('jquery_migrate', get_template_directory_uri().'/js/jquery-migrate-3.3.2.min.js', 'jquery', '3.3.2', true);
    wp_enqueue_script('jquery_migrate');

    //Complied plugins
    wp_register_script('popper', get_template_directory_uri().'/js/popper.min.js', 1, true);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap_min', get_template_directory_uri().'/js/bootstrap.min.js', 1, true);
    wp_enqueue_script('bootstrap_min');

    //Slider 
    wp_register_script('jquery_theme_punch_tool', get_template_directory_uri().'/vendors/revolution/js/jquery.themepunch.tools.min.js', array('jquery'),1, true);
    wp_enqueue_script('jquery_theme_punch_tool');

    wp_register_script('jquery_theme_punch_rev', get_template_directory_uri().'/vendors/revolution/js/jquery.themepunch.revolution.min.js', 'jquery',1, true);
    wp_enqueue_script('jquery_theme_punch_rev');

    wp_register_script('rev_extension_actions', get_template_directory_uri().'/vendors/revolution/js/extensions/revolution.extension.actions.min.js', 'jquery',1, true);
    wp_enqueue_script('rev_extension_actions');

    wp_register_script('rev_extension_slideanims', get_template_directory_uri().'/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js', 'jquery',1, true);
    wp_enqueue_script('rev_extension_slideanims');

    wp_register_script('rev_extension_layeranimation', get_template_directory_uri().'/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js','jquery', 1, true);
    wp_enqueue_script('rev_extension_layeranimation');

    wp_register_script('rev_extension_video', get_template_directory_uri().'/vendors/revolution/js/extensions/revolution.extension.video.min.js', 'jquery',1, true);
    wp_enqueue_script('rev_extension_video');

    wp_register_script('rev_extension_navigation', get_template_directory_uri().'/vendors/revolution/js/extensions/revolution.extension.navigation.min.js', 'jquery',1, true);
    wp_enqueue_script('rev_extension_navigation');

    //Plugin
    wp_register_script('owl_carousel', get_template_directory_uri().'/vendors/owl-carousel/owl.carousel.min.js', 'jquery', '2.2.1', true);
    wp_enqueue_script('owl_carousel');

    wp_register_script('mag_popup', get_template_directory_uri().'/vendors/magnifc-popup/jquery.magnific-popup.min.js', 1, true);
    wp_enqueue_script('mag_popup');

    wp_register_script('time_picker_moment', get_template_directory_uri().'/vendors/datetime-picker/js/moment.min.js', 1, true);
    wp_enqueue_script('time_picker_moment');

    wp_register_script('time_picker_bootstrap', get_template_directory_uri().'/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js', 1, true);
    wp_enqueue_script('time_picker_bootstrap');
    
    wp_register_script('nice_select', get_template_directory_uri().'/vendors/nice-select/js/jquery.nice-select.min.js', 1, true);
    wp_enqueue_script('nice_select');

    wp_register_script('jquery_ui', get_template_directory_uri().'/vendors/jquery-ui/jquery-ui.min.js', 1, true);
    wp_enqueue_script('jquery_ui');

    wp_register_script('lightbox', get_template_directory_uri().'/vendors/lightbox/simpleLightbox.min.js', 1, true);
    wp_enqueue_script('lightbox');

    wp_register_script('comingsoon', get_template_directory_uri().'/js/comingsoon.js', 'jquery', 1, true);
    wp_enqueue_script('comingsoon');

    //theme bakery
    wp_register_script('theme_bakery', get_template_directory_uri().'/js/theme.js', 1, true);
    wp_enqueue_script('theme_bakery');

}
add_action('wp_enqueue_scripts', 'load_javascript');




// function custom_dynamic_slider() {
//     register_post_type( 'dynamic_slider',
//       array(
//         'labels' => array(
//           'name' => __( 'Slider' ),
//           'singular_name' => __( 'Slide' )
//         ),
//         'public' => true,
//         'has_archive' => true,
//       )
//     );
//   }
// add_action( 'init', 'custom_dynamic_slider' );



// add menus
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// add image sizes
add_image_size('blog-small', 450, 282, true);


// Register menus and assign locations
register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
    )
);


//Register sidebar
register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>' 

    )
    );

 // Search Form
//Woocommerce Theme

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
};

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



?>