<?php

if (!function_exists('zumba_setup')):

function zumba_setup()
{
    add_theme_support('title-tag');
}

endif;

add_action('after_setup-theme', 'zumba_setup');