<?php

	/**
	 * Functions and filters that are specific to the Hildon WordPress theme.
	 *
	 * These functions and filters might be extended from functions, classes and filters found within
	 * /functions/functions.php
	 *
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2015 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	1.0.0
	 * @link 		https://mangopear.co.uk/account/clients/mangopear/docs/themes/mangopear/
	 * @since   	1.0.0
	 */


	 /**
	 * Contents
	 *
	 * [1]	Include parent theme stylesheet and JS files
	 */
	

	/**
	 * [1]	Include parent theme stylesheet and JS files
	 */
	
	add_action('wp_enqueue_scripts', 'mangopear_parent_enqueue');

	function mangopear_parent_enqueue() {
		wp_enqueue_script('mangopear__parent--plugins', get_template_directory_uri() . '/resources/js/compiled/plugins.min.js', array('jquery')); 	// [a]
		wp_enqueue_script('mangopear__parent--scripts', get_template_directory_uri() . '/resources/js/compiled/global.min.js', array('jquery')); 	// [b]
		wp_enqueue_style( 'mangopear__parent--styles',  get_template_directory_uri() . '/resources/css/compiled/screen.css'); 						// [c]
	}