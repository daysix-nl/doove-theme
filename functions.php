<?php



/**

 * Day Six theme functions and definitions

 * 

 * @package Day Six theme

 */


/*
|--------------------------------------------------------------------------
| Front-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/
function add_theme_scripts() {
     $version = file_exists(get_template_directory() . '/version.txt') ? file_get_contents(get_template_directory() . '/version.txt') : '1.0';
    wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), $version, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), $version, true);
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
/*
|--------------------------------------------------------------------------
| Back-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function load_custom_wp_admin_style(){
     $version = file_exists(get_template_directory() . '/version.txt') ? file_get_contents(get_template_directory() . '/version.txt') : '1.0';
    wp_enqueue_style( 'gutenberg',  'https://hostdashboard.nl/devdocs/css/gutenberg.css');
    wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), $version, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), $version, true);
 
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

/*
|--------------------------------------------------------------------------
| Menu
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function day_six_config(){
    register_nav_menus (
        array(
            'day_six_main_menu' => 'Main Menu'
        )
    );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'preview', 100, 100, array( 'center', 'center' ) );
}

add_action( 'after_setup_theme', 'day_six_config', 0 );




/*
|--------------------------------------------------------------------------
| ACF blocks
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/*
|--------------------------------------------------------------------------
| Categorie
|--------------------------------------------------------------------------
*/
add_filter('block_categories_all', function ($categories) {

    array_unshift($categories,   
      [
        'slug'  => 'pagina',
        'title' => 'Item templates',
        'icon'  => null
    ],        
    [
        'slug'  => 'bibliotheek',
        'title' => 'Pagina secties',
        'icon'  => null
    ],  
    [
        'slug'  => 'elementen',
        'title' => 'Losse elementen',
        'icon'  => null
    ],

  
);

return $categories;
}, 10, 1);


/*
|--------------------------------------------------------------------------
| All allowed blocks
|--------------------------------------------------------------------------
*/
add_filter('allowed_block_types_all', function($allowed_blocks, $editor_context) {
    $blocks = get_blocks();
    $acf_blocks = []; 
    foreach ($blocks as $block) { 
        $acf_blocks[] = 'acf/' . $block;
    }

    $core_blocks = [
        // 'core/paragraph',
        // 'core/heading',
    ];

    return array_merge($acf_blocks, $core_blocks);
}, 10, 2);


/*
|--------------------------------------------------------------------------
| Register blocks
|--------------------------------------------------------------------------
*/
add_action( 'init', 'register_acf_blocks', 5 );
function register_acf_blocks() {

    $blocks = get_blocks();
    foreach ($blocks as $block) {
            register_block_type( __DIR__ . '/blocks/'.$block );
    }
}

/*
|--------------------------------------------------------------------------
| Get all blocks name from the folder name
|--------------------------------------------------------------------------
*/
function get_blocks() {
	$theme   = wp_get_theme();
	$blocks  = get_option( 'cwp_blocks' );
	$version = get_option( 'cwp_blocks_version' );
	if ( empty( $blocks ) || version_compare( $theme->get( 'Version' ), $version ) || ( function_exists( 'wp_get_environment_type' )  ) ) {
		$blocks = scandir( get_template_directory() . '/blocks/' );
		$blocks = array_values( array_diff( $blocks, array( '..', '.', '.DS_Store', '_base-block' ) ) );

		update_option( 'cwp_blocks', $blocks );
		update_option( 'cwp_blocks_version', $theme->get( 'Version' ) );
	}
	return $blocks;
}



/*
|--------------------------------------------------------------------------
| Script for one block
|--------------------------------------------------------------------------
*/
function cwp_register_block_script() {
    $blocks = get_blocks();
    foreach ($blocks as $block) {
        wp_register_script( $block, get_template_directory_uri() . '/blocks/'.$block.'/script.js' );
    }

}
add_action( 'init', 'cwp_register_block_script' );
/*
|--------------------------------------------------------------------------
| ACF json files
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/**
 * Save the ACF fields as JSON in the specified folder.
 * 
 * @param string $path
 * @returns string
 */
add_filter('acf/settings/save_json', function ($path) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
});
/**
 * Load the ACF fields as JSON in the specified folder.
 *
 * @param array $paths
 * @returns array
 */
add_filter('acf/settings/load_json', function ($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});



/*
|--------------------------------------------------------------------------
| ACF icon picker
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// modify the path to the icons directory
add_filter( 'acf_icon_path_suffix', 'acf_icon_path_suffix' );

function acf_icon_path_suffix( $path_suffix ) {
    return 'img/icons-acf/';
}

// modify the path to the above prefix
add_filter( 'acf_icon_path', 'acf_icon_path' );

function acf_icon_path( $path_suffix ) {
    return plugin_dir_path( __FILE__ );
}

// modify the URL to the icons directory to display on the page
add_filter( 'acf_icon_url', 'acf_icon_url' );

function acf_icon_url( $path_suffix ) {
    return plugin_dir_url( __FILE__ );
}





/*
|--------------------------------------------------------------------------
| Add an dublicate knop
|--------------------------------------------------------------------------
|
| 
| 
|
*/


// /*
//  * Function for post duplication. Dups appear as drafts. User is redirected to the edit screen
//  */
// function rd_duplicate_post_as_draft(){
//   global $wpdb;
//   if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
//     wp_die('No post to duplicate has been supplied!');
//   }
//   /*
//    * Nonce verification
//    */
//   if ( !isset( $_GET['duplicate_nonce'] ) || !wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) )
//     return;
//   /*
//    * get the original post id
//    */
//   $post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
//   /*
//    * and all the original post data then
//    */
//   $post = get_post( $post_id );
//   /*
//    * if you don't want current user to be the new post author,
//    * then change next couple of lines to this: $new_post_author = $post->post_author;
//    */
//   $current_user = wp_get_current_user();
//   $new_post_author = $current_user->ID;
//   /*
//    * if post data exists, create the post duplicate
//    */
//   if (isset( $post ) && $post != null) {
//     /*
//      * new post data array
//      */
//     $args = array(
//       'comment_status' => $post->comment_status,
//       'ping_status'    => $post->ping_status,
//       'post_author'    => $new_post_author,
//       'post_content'   => $post->post_content,
//       'post_excerpt'   => $post->post_excerpt,
//       'post_name'      => $post->post_name,
//       'post_parent'    => $post->post_parent,
//       'post_password'  => $post->post_password,
//       'post_status'    => 'draft',
//       'post_title'     => $post->post_title,
//       'post_type'      => $post->post_type,
//       'to_ping'        => $post->to_ping,
//       'menu_order'     => $post->menu_order
//     );
//     /*
//      * insert the post by wp_insert_post() function
//      */
//     $new_post_id = wp_insert_post( $args );
//     /*
//      * get all current post terms ad set them to the new post draft
//      */
//     $taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
//     foreach ($taxonomies as $taxonomy) {
//       $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
//       wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
//     }
//     /*
//      * duplicate all post meta just in two SQL queries
//      */
//     $post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
//     if (count($post_meta_infos)!=0) {
//       $sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
//       foreach ($post_meta_infos as $meta_info) {
//         $meta_key = $meta_info->meta_key;
//         if( $meta_key == '_wp_old_slug' ) continue;
//         $meta_value = addslashes($meta_info->meta_value);
//         $sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
//       }
//       $sql_query.= implode(" UNION ALL ", $sql_query_sel);
//       $wpdb->query($sql_query);
//     }
//     /*
//      * finally, redirect to the edit post screen for the new draft
//      */
//     wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
//     exit;
//   } else {
//     wp_die('Post creation failed, could not find original post: ' . $post_id);
//   }
// }
// add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );
// /*
//  * Add the duplicate link to action list for post_row_actions
//  */
// function rd_duplicate_post_link( $actions, $post ) {
//   if (current_user_can('edit_posts')) {
//     $actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
//   }
//   return $actions;
// }
// add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );



function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function my_custom_js() {
    ?>
      <script>
        document.addEventListener( 'gform_confirmation_loaded', function( event ) {
          if ( event.detail.formId === '1' ) {
            document.getElementById( 'contact-modal' ).style.display = 'block';
          }
        }, false );
      </script>
    <?php
    }



/*
|--------------------------------------------------------------------------
| Options - MENU
|--------------------------------------------------------------------------
|
| 
| 
|
*/

if( function_exists('acf_add_options_page') ) {
    
  acf_add_options_page(array(
      'page_title'    => 'Navbar',
      'menu_title'    => 'Navbar',
      'menu_slug'     => 'navbar',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));    
}

if( function_exists('acf_add_options_page') ) {
    
  acf_add_options_page(array(
      'page_title'    => 'Footer',
      'menu_title'    => 'Footer',
      'menu_slug'     => 'footer',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));    
}

// if( function_exists('acf_add_options_page') ) {
    
//   acf_add_options_page(array(
//       'page_title'    => 'sidebar',
//       'menu_title'    => 'Sidebar',
//       'menu_slug'     => 'sidebar',
//       'capability'    => 'edit_posts',
//       'redirect'      => false
//   ));    
// }





    /*
|--------------------------------------------------------------------------
| EVENEMENTEN
|--------------------------------------------------------------------------
|
| 
| 
|
*/
function create_news_post_type() {
    $labels = array(
        'name' => _x('Nieuws', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Nieuws', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Nieuws', 'text_domain'),
        'name_admin_bar' => __('Nieuws', 'text_domain'),
        'archives' => __('Nieuws', 'text_domain'),
        'attributes' => __('Nieuws', 'text_domain'),
        'parent_item_colon' => __('Nieuws:', 'text_domain'),
        'all_items' => __('Alle Nieuws', 'text_domain'),
        'add_new_item' => __('Nieuwe toevoegen', 'text_domain'),
        'add_new' => __('Nieuwe toevoegen', 'text_domain'),
        'new_item' => __('Nieuwe Nieuws item', 'text_domain'),
        'edit_item' => __('Nieuws item aanpassen', 'text_domain'),
        'update_item' => __('Update Nieuws item', 'text_domain'),
        'view_item' => __('Bekijk Nieuws item', 'text_domain'),
        'view_items' => __('Bekijk Nieuws item', 'text_domain'),
        'search_items' => __('Zoek Nieuws items', 'text_domain'),
        'not_found' => __('Geen Nieuws items gevonden', 'text_domain'),
        'not_found_in_trash' => __('Geen Nieuws items gevonden in prullenbak', 'text_domain'),
        'featured_image' => __('Featured Image', 'text_domain'),
        'set_featured_image' => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image' => __('Use as featured image', 'text_domain'),
        'insert_into_item' => __('Insert into webinar', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this webinar', 'text_domain'),
        'items_list' => __('Webinars list', 'text_domain'),
        'items_list_navigation' => __('Webinars list navigation', 'text_domain'),
        'filter_items_list' => __('Filter webinars list', 'text_domain'),
    );
    $args = array(
        'label' => __('Webinar', 'text_domain'),
        'description' => __('Webinar Description', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
        // 'taxonomies' => array('category', 'post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
         'rewrite' => array('slug' => 'nieuws-item'),
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    register_post_type('news', $args);
}
add_action('init', 'create_news_post_type', 0);


/*
|--------------------------------------------------------------------------
| Custom wordpress post type
|--------------------------------------------------------------------------
|
| 
| 
|
*/
function create_product_post_type() {
    $labels = array(
        'name' => _x('Producten', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Product', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Producten', 'text_domain'),
        'name_admin_bar' => __('Product', 'text_domain'),
        'archives' => __('Archief', 'text_domain'),
        'attributes' => __('Item Attributes', 'text_domain'),
        'parent_item_colon' => __('Parent Product:', 'text_domain'),
        'all_items' => __('Alle Producten', 'text_domain'),
        'add_new_item' => __('Nieuwe toevoegen', 'text_domain'),
        'add_new' => __('Nieuwe toevoegen', 'text_domain'),
        'new_item' => __('Nieuwe Product', 'text_domain'),
        'edit_item' => __('Product aanpassen', 'text_domain'),
        'update_item' => __('Update Product', 'text_domain'),
        'view_item' => __('Bekijk Product', 'text_domain'),
        'view_items' => __('Bekijk Products', 'text_domain'),
        'search_items' => __('Zoek Product', 'text_domain'),
        'not_found' => __('Geen Product gevonden', 'text_domain'),
        'not_found_in_trash' => __('Geen Product gevonden in prullenbak', 'text_domain'),
        'featured_image' => __('Featured Image', 'text_domain'),
        'set_featured_image' => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image' => __('Use as featured image', 'text_domain'),
        'insert_into_item' => __('Insert into item', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
        'items_list' => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
        'filter_items_list' => __('Filter items list', 'text_domain'),
    );
    $args = array(
        'label' => __('Product', 'text_domain'),
        'description' => __('Product Description', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
        'taxonomies' => array('category', 'post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    register_post_type('product', $args);
}
add_action('init', 'create_product_post_type', 0);



/*
|--------------------------------------------------------------------------
| WEBINARS
|--------------------------------------------------------------------------
|
| 
| 
|
*/
function create_webinar_post_type() {
    $labels = array(
        'name' => _x('Webinars', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Webinar', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Webinars', 'text_domain'),
        'name_admin_bar' => __('Webinar', 'text_domain'),
        'archives' => __('Webinar Archives', 'text_domain'),
        'attributes' => __('Webinar Attributes', 'text_domain'),
        'parent_item_colon' => __('Parent Webinar:', 'text_domain'),
        'all_items' => __('Alle Webinars', 'text_domain'),
        'add_new_item' => __('Nieuwe toevoegen', 'text_domain'),
        'add_new' => __('Nieuwe toevoegen', 'text_domain'),
        'new_item' => __('Nieuwe Webinar', 'text_domain'),
        'edit_item' => __('Webinar aanpassen', 'text_domain'),
        'update_item' => __('Update Webinar', 'text_domain'),
        'view_item' => __('Bekijk Webinar', 'text_domain'),
        'view_items' => __('Bekijk Webinars', 'text_domain'),
        'search_items' => __('Zoek Webinar', 'text_domain'),
        'not_found' => __('Geen Webinars gevonden', 'text_domain'),
        'not_found_in_trash' => __('Geen Webinars gevonden in prullenbak', 'text_domain'),
        'featured_image' => __('Featured Image', 'text_domain'),
        'set_featured_image' => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image' => __('Use as featured image', 'text_domain'),
        'insert_into_item' => __('Insert into webinar', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this webinar', 'text_domain'),
        'items_list' => __('Webinars list', 'text_domain'),
        'items_list_navigation' => __('Webinars list navigation', 'text_domain'),
        'filter_items_list' => __('Filter webinars list', 'text_domain'),
    );
    $args = array(
        'label' => __('Webinar', 'text_domain'),
        'description' => __('Webinar Description', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
        // 'taxonomies' => array('category', 'post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    register_post_type('webinar', $args);
}
add_action('init', 'create_webinar_post_type', 0);


/*
|--------------------------------------------------------------------------
| EVENEMENTEN
|--------------------------------------------------------------------------
|
| 
| 
|
*/
function create_evenementen_post_type() {
    $labels = array(
        'name' => _x('Evenementen', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Evenement', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Evenementen', 'text_domain'),
        'name_admin_bar' => __('Evenementen', 'text_domain'),
        'archives' => __('Evenementen', 'text_domain'),
        'attributes' => __('Evenementen', 'text_domain'),
        'parent_item_colon' => __('Evenementen:', 'text_domain'),
        'all_items' => __('Alle Evenementen', 'text_domain'),
        'add_new_item' => __('Evenement toevoegen', 'text_domain'),
        'add_new' => __('Nieuwe toevoegen', 'text_domain'),
        'new_item' => __('Nieuwe Evenement', 'text_domain'),
        'edit_item' => __('Evenement aanpassen', 'text_domain'),
        'update_item' => __('Update Evenement', 'text_domain'),
        'view_item' => __('Bekijk Evenement', 'text_domain'),
        'view_items' => __('Bekijk Evenementen', 'text_domain'),
        'search_items' => __('Zoek Evemenent', 'text_domain'),
        'not_found' => __('Geen Evenementen gevonden', 'text_domain'),
        'not_found_in_trash' => __('Geen Evenementen gevonden in prullenbak', 'text_domain'),
        'featured_image' => __('Featured Image', 'text_domain'),
        'set_featured_image' => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image' => __('Use as featured image', 'text_domain'),
        'insert_into_item' => __('Insert into webinar', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this webinar', 'text_domain'),
        'items_list' => __('Webinars list', 'text_domain'),
        'items_list_navigation' => __('Webinars list navigation', 'text_domain'),
        'filter_items_list' => __('Filter webinars list', 'text_domain'),
    );
    $args = array(
        'label' => __('Webinar', 'text_domain'),
        'description' => __('Webinar Description', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
        // 'taxonomies' => array('category', 'post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    register_post_type('evenementen', $args);
}
add_action('init', 'create_evenementen_post_type', 0);

/*
|--------------------------------------------------------------------------
| Widgets
|--------------------------------------------------------------------------
|
| 
| 
|
*/

register_sidebar( array(
  'name' => __( 'Filter sidebar', 'rmccollin' ),
  'id' => 'filter-sidebar',
  'description' => __( 'A widget area located to the left filter sidebar.', 'rmccollin' ),
  'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
  'after_widget' => '</div></div>',
  'before_title' => '<p class="large fbody regular fcd">',
  'after_title' => '</p>',
) );
 
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
 
// Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
add_filter( 'use_widgets_block_editor', '__return_false' );





/*
|--------------------------------------------------------------------------
| ALWAYS ANABLE ALL TAG
|--------------------------------------------------------------------------
|
| 
| 
|
*/


// Voeg standaard tag toe aan nieuwe producten
function set_default_product_tag( $post_id ) {
    if ( 'product' === get_post_type( $post_id ) ) {
        // Controleer of de tag "Alle" al bestaat
        $tag = get_term_by( 'name', 'Alle', 'post_tag' );

        // Als de tag "Alle" niet bestaat, maak deze dan aan
        if ( ! $tag ) {
            wp_insert_term( 'Alle', 'post_tag' );
        }

        // Voeg de tag "Alle" toe aan het product als deze nog niet is toegevoegd
        wp_set_post_tags( $post_id, 'Alle', true );
    }
}
add_action( 'save_post', 'set_default_product_tag' );



/*
|--------------------------------------------------------------------------
| HIDE UNCATEGORIZED CATEGORY
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function hide_uncategorized_category($terms) {
    $uncategorized_id = get_option('default_category');
    $uncategorized_key = array_search($uncategorized_id, array_column($terms, 'term_id'));
    
    if ($uncategorized_key !== false) {
        unset($terms[$uncategorized_key]);
    }
    
    return $terms;
}
add_filter('get_terms', 'hide_uncategorized_category', 10, 2);




/*
|--------------------------------------------------------------------------
| REMOVE GUTENBERG CSS
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function remove_gutenberg_container_img_css() {
    // Voeg hier de naam van het CSS-bestand van Gutenberg toe waarin de class .block-editor__container img wordt gedefinieerd.
    $gutenberg_css_handle = 'wp-block-library';

    // Verwijder het Gutenberg CSS-bestand.
    wp_dequeue_style( $gutenberg_css_handle );
    wp_deregister_style( $gutenberg_css_handle );
}
add_action( 'wp_enqueue_scripts', 'remove_gutenberg_container_img_css', 100 );
add_action( 'admin_enqueue_scripts', 'remove_gutenberg_container_img_css', 100 );
add_action( 'enqueue_block_editor_assets', 'remove_gutenberg_container_img_css', 100 );



/*
|--------------------------------------------------------------------------
| CATEGORIEN
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function custom_filter_page_title() {
    global $wp;

    $path = trim($wp->request, '/');
    $parts = explode('/', $path);

    foreach ($parts as $part) {
        if (strpos($part, 'categorie-') === 0) {
            $category_slug = str_replace('categorie-', '', $part);

            $category = get_term_by('slug', $category_slug, 'product_cat');
            if ($category && !is_wp_error($category)) {
                return 'Gefilterde inhoud voor categorie: ' . $category->name;
            }
        }
    }

    return 'Gefilterde inhoud';
}




/*
|--------------------------------------------------------------------------
| CATEGORIEN
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// Plaats deze code in je theme's functions.php bestand of in een custom plugin

function custom_navbar_categories() {
    $args = array(
        'taxonomy' => 'product', // De naam van de taxonomie voor categorieën
        'hide_empty' => false, // Laat lege categorieën ook zien
    );

    $categories = get_terms($args);

    if (!empty($categories) && !is_wp_error($categories)) {
        echo '<ul class="navbar-categories">';

        foreach ($categories as $category) {
            echo '<li><a href="' . get_term_link($category) . '">' . $category->name . '</a></li>';
        }

        echo '</ul>';
    }
}





function rewrite_image_urls_js() {
    $current_domain = $_SERVER['HTTP_HOST'];
    if ( 'doove-care-groep.local' === $current_domain ) {
        echo "
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const local_domain = 'http://doove-care-groep.local/';
            const production_domain = 'https://doove.attentionseekers.studio/';
            document.querySelectorAll('img').forEach(function(img) {
                const src = img.getAttribute('src');
                if (src) {
                    img.setAttribute('src', src.replace(local_domain, production_domain));
                }
            });
        });
        </script>
        ";
    }
}


// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');


add_action('wp_head', 'rewrite_image_urls_js');

// Disable pingbacks
add_filter('xmlrpc_methods', 'disable_pingback');
add_filter('pre_option_default_ping_status', '__return_false');

function disable_pingback($methods) {
    unset($methods['pingback.ping']);
    return $methods;
}
