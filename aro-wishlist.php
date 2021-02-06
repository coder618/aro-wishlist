<?php
/**
 * Plugin Name: Aro Wishlist
 * Description: Aro Wishlist for WooCommerce
 * Version:     0.1
 * Author:      coder618
 * Author URI:  https://coder618.github.io
 * Text Domain: aw
 * coder/developer: Coder618, https://coder618.github.io
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class AW_Main{

    /**
     * INIT the main functions
     * 
     */
    public function __construct() {
		$this->includes();
		// $this->register_option();
		$this->reg_hooks();
	}

    /**
     * Some Hook of this plugin will register/call within this method
     * 
     */
    public function reg_hooks(){

		// register_deactivation_hook( [$this , 'br_remove_option'] );
        // add_action( 'admin_enqueue_scripts'	, [ $this, 'enqueue_admin_assets' ] );               
        add_action( 'wp_enqueue_scripts'	, [ $this, 'enqueue_frontend_assets' ] );               
		// add_action( 'wp_enqueue_scripts'	, [ $this, 'local_script' ] );
		// $ajax_class = new  BR_IG_Ajax($this->plugin_options);


		// Add Plugin settings update hook
		// add_action( 'wp_ajax_br_ig_update_settings',[ $ajax_class , 'update_plugin_settings'] );

		// add_action( 'wp_ajax_br_ig_update_feed',[ $ajax_class , 'update_feed'] );
		// add_action( 'wp_ajax_nopriv_br_ig_update_feed',[ $ajax_class , 'update_feed'] );

		// add_action( 'wp_ajax_br_force_empty_nh_instagram',[ $ajax_class , 'br_force_empty_nh_instagram'] );
		// add_action( 'wp_ajax_nopriv_br_force_empty_nh_instagram',[ $ajax_class , 'br_force_empty_nh_instagram'] );
		
	}

    public function enqueue_frontend_assets() {
		wp_enqueue_style( 'aw_style', plugin_dir_url( __FILE__ ). 'dist/css/style.css', [], 1, 'all' );
		wp_enqueue_script( 'aw_script', plugin_dir_url( __FILE__ ). 'dist/js/theme.js', ['jquery'], 1, true );
	}



}

new AW_Main();