<?php

function add_menu_item_class($classes, $item, $args) {      //ADD 'li' CLASS TO NAVIGATION LOOP
    if(isset($args->menu_item_class)) {
        $classes[] = $args->menu_item_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_menu_item_class', 1, 3);

function add_menu_item_link_class($atts, $item, $args) {    //ADD 'a' CLASS TO NAVIGATION LOOP    
    if(isset($args->menu_item_link_class)) {
        $atts['class'] = $args->menu_item_link_class;
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_menu_item_link_class', 1, 3);

?>