<?php

//function to enqueue the javascript to handle the extentsion of the compextra theme block editor 
function compextra_enqueue_theme_editor_assets() {
    wp_enqueue_script(
        'compextra-theme-editor-script',
        get_template_directory_uri() . '/assets/js/compextra-theme-editor.js',
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post'),
        filemtime( get_template_directory().'/assets/js/compextra-theme-editor.js')
    );
}
add_action( 'enqueue_block_editor_assets', 'compextra_enqueue_theme_editor_assets' );

//function to enqueue the stylesheet to handle the styling of the compextra theme blocks
function compextra_enqueue_theme_editor_stylesheet() {
    wp_enqueue_style( 'compextra-block-styles', get_template_directory_uri() . '/assets/css/compextra-theme-editor.css');
}
add_action( 'enqueue_block_assets', 'compextra_enqueue_theme_editor_stylesheet' );

?>