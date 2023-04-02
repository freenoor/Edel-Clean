<?php
    function clean_resources(){
        wp_enqueue_style('custom-fa', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
        wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap/bootstrap.min.css', array(), '4.3.1', 'all');
        wp_enqueue_style('main-css', get_template_directory_uri().'/css/main.css', array(), '1.0.2', 'all');
        wp_enqueue_style('animate-css', get_template_directory_uri().'/css/animate.css', array(), '4.1.0', 'all');
        wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap/bootstrap.js', array(), '4.3.1', true);
    }
    add_action('wp_enqueue_scripts', 'clean_resources');


//Back To top
function themeslug_add_scroll_button() {
    echo '<a href="#" id="topbutton"></a>';
}
add_action( 'wp_footer', 'themeslug_add_scroll_button' );


//Theme setup
function ginafina_setup(){
    register_nav_menus(array(
        'primary-nav' => __('Primary Nav'),
        'top-menu' => __('Top Menu'),
        'footer-end-links' => __('Footer End Links')
    ));
    }
    add_action('after_setup_theme', 'ginafina_setup');

 


//Theme Support
add_theme_support("custom-logo");
add_theme_support("custom-header");
add_theme_support("post-thumbnails");
add_theme_support('category-thumbnails');

  
//Widgets
function ldWidgetInit(){
    register_sidebar(array(
        'name' => 'Footer Reserved',
        'id' => 'reserved'
    ));
    register_sidebar(array(
        'name' => 'Footer Contact',
        'id' => 'footer_contact'
    ));
    register_sidebar(array(
        'name' => 'Footer Socials',
        'id' => 'footer_socials'
    ));
    register_sidebar(array(
        'name' => 'Header Contact',
        'id' => 'header_contact'
    ));
    register_sidebar(array(
        'name' => 'Header Mail',
        'id' => 'header_mail'
    ));
    register_sidebar(array(
        'name' => 'Header Address',
        'id' => 'header_address'
    ));
}
add_action('widgets_init', 'ldWidgetInit');

    
/*Dienstleistungen custom post type*/
function ld_diens_post_type(){
    $labels = array(
        'name' => 'Dienstleistungen Posts',
        'singular_name' => 'Dienstleistungen Post',
        'add_new' => 'Add item',
        'all_items' => 'All items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Items',
        'view_item' => 'View Item',
        'search_item' => 'Search Dienstleistungens',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queruable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type'=> 'post',
        'menu_icon' => 'dashicons-menu-alt3',
        'supports' => array(
        'title',
        'editor',
        'thumbnail',
        ),
        'taxonomies' => array( 'category' ),
        'menu_position' => 5,
    );
    register_post_type('diensleistung',$args);
    }
    add_action('init','ld_diens_post_type');

/*Referenzen custom post type*/

function ld_arbeit_post_type(){
    $labels = array(
        'name' => 'Gallery Home',
        'singular_name' => 'Referenzen Post',
        'add_new' => 'Add item',
        'all_items' => 'All items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Items',
        'view_item' => 'View Item',
        'search_item' => 'Search Referenzen',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queruable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type'=> 'post',
        'menu_icon' => 'dashicons-screenoptions',
        'supports' => array(
        'title',
        'editor',
        'thumbnail',
        ),
        'taxonomies' => array( 'category' ),
        'menu_position' => 5,
    );
     // Now register the taxonomy
        
     register_taxonomy('ref_',array('portfolio'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'ref_' ),
    ));
    register_post_type('arbeit',$args);
    }
    add_action('init','ld_arbeit_post_type');

  
/*Slider custom post type*/
function ld_slider_post_type(){
    $labels = array(
        'name' => 'Slider Posts',
        'singular_name' => 'Slider Post',
        'add_new' => 'Add item',
        'all_items' => 'All items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Items',
        'view_item' => 'View Item',
        'search_item' => 'Search Slider',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queruable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type'=> 'post',
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array(
        'title',
        'editor',
        'thumbnail',
    ),
        'menu_position' => 5,
    );
    register_post_type('slider',$args);
    }
    add_action('init','ld_slider_post_type');

 
/*External Page Links*/
function ld_org_post_type(){
    $labels = array(
        'name' => 'External Pages',
        'singular_name' => 'Org Post',
        'add_new' => 'Add item',
        'all_items' => 'All items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Items',
        'view_item' => 'View Item',
        'search_item' => 'Search Slider',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queruable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type'=> 'post',
        'menu_icon' => 'dashicons-external',
        'supports' => array(
        'title',
        'editor',
        'thumbnail',
    ),
        'menu_position' => 5,
    );
    register_post_type('org',$args);
    }
    add_action('init','ld_org_post_type');


/*Impresum*/
function ld_impressum_post_type(){
    $labels = array(
        'name' => 'Impressum',
        'singular_name' => 'Impressum Post',
        'add_new' => 'Add item',
        'all_items' => 'All items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Items',
        'view_item' => 'View Item',
        'search_item' => 'Search Slider',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queruable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type'=> 'post',
        'menu_icon' => 'dashicons-format-aside',
        'supports' => array(
        'title',
        'editor',
        'thumbnail',
    ),
        'menu_position' => 5,
    );
    register_post_type('impressum',$args);
    }
    add_action('init','ld_impressum_post_type');

function custom_post_type(){
        //Unsere Portfolio post type
        $labels_frontpage = array(
        'name' => 'Referenzen',
    );
    register_post_type('portfolio', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail',
        'revisions',
        ),
        'menu_position' => 7,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-format-gallery',
    ));

}
add_action('init', 'custom_post_type');
    // portfolio taxonomy
    $labels = array(
        'name' => _x( 'Portfolio Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Unsere Portfolio', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Unsere Portfolio' ),
        'all_items' => __( 'All Unsere Portfolio' ),
        'parent_item' => __( 'Parent Unsere Portfolio' ),
        'parent_item_colon' => __( 'Parent Unsere Portfolio:' ),
        'edit_item' => __( 'Edit Unsere Portfolio' ), 
        'update_item' => __( 'Update Unsere Portfolio' ),
        'add_new_item' => __( 'Add New Unsere Portfolio' ),
        'new_item_name' => __( 'New Unsere Portfolio Name' ),
        'menu_name' => __( 'Portfolio Categories' ),
    );    
    // Now register the taxonomy
    register_taxonomy('unsere_portfolio',array('portfolio'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'unsere_portfolio' ),
    ));

function my_wpcf7_form_elements($html) {function ov3rfly_replace_include_blank($name, $text, &$html) {$matches = false;preg_match('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $html, $matches);if ($matches) {$select = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $matches[0]);$html = preg_replace('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $select, $html);}}ov3rfly_replace_include_blank('menu-834', 'Dienstleistungen', $html);ov3rfly_replace_include_blank('menu-918', 'Objekttyp', $html);return $html;}add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');


add_filter( 'body_class', 'my_neat_body_class');
function my_neat_body_class( $classes ) {
     if ( is_page(7) || is_category(5) || is_single('neat') )
          $classes[] = 'neat-stuff';
 
     return $classes; 
}






