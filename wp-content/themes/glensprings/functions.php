<?php 

// Add theme support for navigation menus
function theme_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => esc_html__('Primary Menu', 'your-theme-textdomain'),
            'secondary-menu' => esc_html__('Secondary Menu', 'your-theme-textdomain'),
            // Add more menus as needed
        )
    );

    add_theme_support('post-thumbnails');

}

// Hook the function to the after_setup_theme action
add_action('after_setup_theme', 'theme_register_menus');

function custom_theme_setup() {
    add_theme_support(
        'post-formats',
        array(
            'link',
            'aside',
            'gallery',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        )
    );

    // Add other theme support options if needed
    // Example: add_theme_support('post-thumbnails');
    // add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'custom_theme_setup');


?>