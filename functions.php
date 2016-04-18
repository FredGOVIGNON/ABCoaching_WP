<?php

function register_my_menus() {
	register_nav_menus(
		array(
			'menu-gauche1' => __( 'Menu de navigation - gauche1' ),
			'menu-gauche2' => __( 'Menu de navigation - gauche2' ),
			'menu-droite' => __( 'Menu de navigation - droite' ),
			'menu-prestations' => __( 'Menu de navigation - prestations' )
		)
	);
}

add_action( 'init', 'register_my_menus' );


