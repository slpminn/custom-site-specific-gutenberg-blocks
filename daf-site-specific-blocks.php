<?php
/**
 * Custom Block plugin for WordPress
 *
 * @package   daf-site-specific-blocks
 * @link      
 * @author    
 * @copyright 2009-2019 daf
 * @license   GPL v2 or later
 *
 * Plugin Name:  DAF Site Specific Blocks
 * Description:  Extends Gutenberg Blocks functionality.
 * Version:      1.1.1
 * Plugin URI:   https://davidarago.com/
 * Author:       David Arago
 * Author URI:   https://davidarago.com/
 * Text Domain:  daf-site-specific-blocks
 * Domain Path:  /languages/
 * Requires PHP: 5.3.6
 *
 */

defined( 'ABSPATH' ) || die();


if ( !defined('DAF_BLOCKS_PATH') )          define( 'DAF_BLOCKS_PATH', dirname( __FILE__ ) );
/*echo DAF_BLOCKS_PATH;
echo '<br />';
echo plugin_dir_path(__FILE__);
echo '<br />';
echo __FILE__;*/


//Check for Gutenberg installed

    if(! function_exists('daf_block')) { //IF01 - Checks if the function already exists.
         function daf_block() { 
            
            require_once DAF_BLOCKS_PATH . '/blocks/myfirstblock/register.php';
            require_once DAF_BLOCKS_PATH . '/blocks/pagealert/register.php';
            require_once DAF_BLOCKS_PATH . '/blocks/dynamicpagealert/register.php';      
            require_once DAF_BLOCKS_PATH . '/blocks/emc01/register.php'; 
            require_once DAF_BLOCKS_PATH . '/blocks/emc02/register.php'; 
            require_once DAF_BLOCKS_PATH . '/blocks/emc03/register.php'; 
            require_once DAF_BLOCKS_PATH . '/blocks/emc04/register.php'; 
            require_once DAF_BLOCKS_PATH . '/blocks/emc05/register.php'; 
            require_once DAF_BLOCKS_PATH . '/blocks/emc06/register.php'; 
           
        } //end of daf_block()

        require_once DAF_BLOCKS_PATH . '/blocks/dynamicpagealert/callback.php';      
        require_once DAF_BLOCKS_PATH . '/blocks/emc01/callback.php'; 
        require_once DAF_BLOCKS_PATH . '/blocks/emc02/callback.php'; 
        require_once DAF_BLOCKS_PATH . '/blocks/emc03/callback.php'; 
        require_once DAF_BLOCKS_PATH . '/blocks/emc04/callback.php'; 
        require_once DAF_BLOCKS_PATH . '/blocks/emc05/callback.php'; 
        require_once DAF_BLOCKS_PATH . '/blocks/emc06/callback.php';
   
        // Hook into WordPress
        add_action('init','daf_block');

    } //end IF01