
<?php



function tech_innovation_css()
{
  wp_register_style('tech-style', get_template_directory_uri() . '/style.css', array(), false, false);
  wp_enqueue_style('tech-style');
}
add_action('wp_enqueue_scripts', 'tech_innovation_css');

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// HABILITAR MENU
add_theme_support('menus');

// REGISTRAR MENU
function register_my_menu()
{
  register_nav_menu('menu-principal', __('Menu Principal 1'));
}

add_action('init', 'register_my_menu');

function carregar_font_awesome()
{
  wp_enqueue_script(
    'font-awesome',
    'https://kit.fontawesome.com/64d1b1df4a.js',
    array(),
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'carregar_font_awesome');


// // HABILITAR MENU
// add_theme_support('menus');

// // REGISTRAR MENU
// function register_my_menu()
// {
//   register_nav_menu('menu-principal', __('Menu Principal 1'));
// }

// add_action('init', 'register_my_menu');