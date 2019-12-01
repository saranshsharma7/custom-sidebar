// custom side bar

function themename_custom_logo_setup() {
$defaults = array(
'height' => 200,
'width' => 400,
'flex-height' => true,
'flex-width' => true,
'header-text' => array( 'site-title', 'site-description' ),
);
add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



//to call the above function


<?php dynamic_sidebar( 'sidebar-1' ); ?>
