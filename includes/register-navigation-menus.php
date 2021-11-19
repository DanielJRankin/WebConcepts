<?php 

//REGISTER NAVIGATION MENUS

function navigation_menu_name() {   
    register_nav_menu('short-name-menu',__( 'Navigation Menu Name' ));     //NAVIGATION MENU NAME
  }

add_action( 'init', 'navigation_menu_name' );

