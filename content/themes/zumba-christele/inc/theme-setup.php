<?php

function zumba_setup()
{
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'zumba_setup');