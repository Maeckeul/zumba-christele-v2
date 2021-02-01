<?php 

function zumbaChristele_scripts() 
{
    wp_enqueue_style(
        'zumbaChristèle-style', 
        get_theme_file_uri('/public/css/style.css'),
        [],
        '2.0.0'
    );

    wp_enqueue_style(
        'forkawesome',
        'https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css',
        [],
        '2.0.0'
    );

    wp_enqueue_script(
        'zumbaChritèle-app',
        get_theme_file_uri('/public/js/app.js'),
        [],
        '2.0.0',
        true
    );   
}

add_action('wp_enqueue_scripts', 'zumbaChristele_scripts');