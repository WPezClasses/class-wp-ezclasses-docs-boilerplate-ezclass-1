<?php
/** 
 * TODO
 *
 * TODO
 *
 * PHP version 5.3
 *
 * LICENSE: TODO
 *
 * @package WPezClasses
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.1
 * @license TODO
 */
 
/**
 * == Change Log == 
 *
 * -- 0.5.0 - Mon 17 Nov 2014
 *
 * ---- Pop the champagne!
 */
 
/**
 * == TODO == 
 *
 *
 */

// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

if ( ! class_exists('Class_WP_ezClasses_TODO-FOLDER_TODO-Product_#') ) {
  class Class_WP_ezClasses_TODO-FOLDER_TODO-Product_# extends Class_WP_ezClasses_Master_Singleton{
  
    protected $_arr_init;
	
    protected $_file;	
	protected $_url;
	protected $_path;
  
	public function __construct() {
	  parent::__construct();
	}
		
	/**
	 *
	 */
	public function ezc_init($arr_args = ''){
	
	  $this->setup();
	
	  $arr_init_defaults = $this->init_defaults();
	  
	  $this->_arr_init = WP_ezMethods::ez_array_merge(array($arr_init_defaults, $arr_args));
	
	}
	
	/**
	 * 
	 */
	protected setup(){
	  
	  $this->_file = __FILE__ ;
	  $this->_url = plugin_dir_url(__FILE__);
	  $this->_path = plugin_dir_path(__FILE__);
	}
	
	/**
	 *
	 */
	protected function init_defaults(){
	
	  $arr_defaults = array(
	  
	  	'active'			 					=> true,
		'active_true'							=> true,	// use the active true "filtering"
		'filters'								=> false, 	// currently NA
		'arr_arg_validation'					=> false, 	// currently NA
		);
	
	  return $arr_defaults;
	}
	  
  
  }
} 