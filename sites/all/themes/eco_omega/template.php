<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Eco Omega theme.
 */

//Lets hide the cart when its empty
function eco_omega_commerce_cart_empty_block() {
	return '<div class="cart-empty-block"></div>';
}

//Lets work with the Devel Module and see what arrays are printed?
//function eco_omega_preprocess_node(&$vars) {
//	kpr($vars);
//}