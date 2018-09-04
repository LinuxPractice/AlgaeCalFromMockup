<?php 
/* in the theme functions file I would add */
function theme_scripts() {    
    wp_dequeue_script('jquery'); 
    /* uncomment if worried about compatibility */
   // wp_enqueue_script('jquery-migrate', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.js');
    wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
}

add_action('wp_enqueue_scripts','theme_scripts');

?>
