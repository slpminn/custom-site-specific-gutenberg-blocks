<?php
/**
 * Custom Block plugin for WordPress
 *
 * @package   hbi-site-specific-blocks
 * @link      
 * @author    
 * @copyright 2009-2019 HBI
 * @license   GPL v2 or later
 *
 * Plugin Name:  HBI Site Specific Blocks
 * Description:  Extends Gutenberg Blocks functionality.
 * Version:      1.1.1
 * Plugin URI:   https://hbi.com/
 * Author:       David Arago
 * Author URI:   https://hbi.com/
 * Text Domain:  hbi-site-specific-blocks
 * Domain Path:  /languages/
 * Requires PHP: 5.3.6
 *
 */

defined( 'ABSPATH' ) || die();

//Check for Gutenberg installed


    if(! function_exists('hbi_block')) { //IF01 - Checks if the function already exists.
        console.log('hbi_block function not defined.  Defining function hbi_block');
        function hbi_block() { 
            // Register the block-building script
            wp_register_script(
                'hbi-myfirstblock-editor', //name of the script
                plugins_url('/blocks/myfirstblock/editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
            // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'hbi-myfirstblock', //name of the script
                plugins_url('/blocks/myfirstblock/style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/myfirstblock/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'hbi-myfirstblock-editor', //name of the script
                plugins_url('/blocks/myfirstblock/editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/myfirstblock/editor-style.css') // Everytime it is update clear style from cash
            );
            // Register the block type
           register_block_type(
                'hbi/myfirstblock', //name of the block.(Plugin/Block)
                array (
                    'editor_script' => 'hbi-myfirstblock-editor',
                    'editor_style' => 'hbi-myfirstblock-editor',
                    'style' => 'hbi-myfirstblock',
                )
            );                

            /*
                Register Page Alert Custom Block
            */
            wp_register_script(
                'hbi-pagealert-editor', //name of the script
                plugins_url('/blocks/pagealert/editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
            // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'hbi-pagealert', //name of the script
                plugins_url('/blocks/pagealert/style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/pagealert/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'hbi-pagealert-editor', //name of the script
                plugins_url('/blocks/pagealert/editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/pagealert/editor-style.css') // Everytime it is update clear style from cash
            );
            // Register the block type
            register_block_type(
                'hbi/pagealert', //name of the block.(Plugin/Block)
                array (
                    'editor_script' => 'hbi-pagealert-editor',
                    'editor_style' => 'hbi-pagealert-editor',
                    'style' => 'hbi-pagealert',
                )
            );           
            
            /*
                Register Dynamic Page Alert Custom Block
            */
            wp_register_script(
                'hbi-dynamicpagealert-editor', //name of the script
                plugins_url('/blocks/dynamicpagealert/editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
            // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'hbi-dynamicpagealert', //name of the script
                plugins_url('/blocks/dynamicpagealert/style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/dynamicpagealert/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'hbi-dynamicpagealert-editor', //name of the script
                plugins_url('/blocks/dynamicpagealert/editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/dynamicpagealert/editor-style.css') // Everytime it is update clear style from cash
            );
            // Register the block type
            register_block_type(
                'hbi/dynamicpagealert', //name of the block.(Plugin/Block)
                array (
                    'editor_script' => 'hbi-dynamicpagealert-editor',
                    'editor_style' => 'hbi-dynamicpagealert-editor',
                    'style' => 'hbi-dynamicpagealert',
                    'render_callback' => 'hbiDynamicPageAlertCB', // The render callback
                )
            );     
                     
            /*
            Register Dynamic E-MC-01 Custom Block
             */
            wp_register_script(
                'hbi-emc01-editor', //name of the script
                plugins_url('/blocks/emc01/editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
             // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'hbi-emc01', //name of the script
                plugins_url('/blocks/emc01/style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc01/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'hbi-emc01-editor', //name of the script
                plugins_url('/blocks/emc01/editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc01/editor-style.css') // Everytime it is update clear style from cash
            );
            // Register the block type
            register_block_type(
                'hbi/emc01', //name of the block.(Plugin/Block)
                array (
                    'editor_script' => 'hbi-emc01-editor',
                    'editor_style' => 'hbi-emc01-editor',
                    'style' => 'hbi-emc01',
                    'render_callback' => 'hbiEMC01CB', // The render callback
                )
            );            
            
            
        } //end of hbi_block()

    /**
     * CALLBACK Function for Dynamic Page Alert Custom Block
     * Render callback for the dynamic block.
     * Instead of rendering from the block's save(), this callback will render the front-end
     * 
     * @param $att Attributes from the JS Block
     * @return string Rendered HTML
     */
    function hbiDynamicPageAlertCB($att) {
        
        $html = "<div class='wp-block-hbi-dynamicpagealert' style='background: ${att['color']};'>".
                "   <h4><a href='${att['alertlink']}'>${att['alerttitle']}</a></h4>".
                "   <h5><a href='${att['alertlink']}'>${att['alertmessage']}</a></h5>".
                '</div>';

        return $html; 
    } 

   

            /**
             * CALLBACK Function for Dynamic E-MC-01 Custom Block
             * Render callback for the dynamic block.
             * Instead of rendering from the block's save(), this callback will render the front-end
             * 
             * @param $att Attributes from the JS Block
             * @return string Rendered HTML
             */
            function hbiEMC01CB($att) {

                $html = "<div class='wp-block-hbi-dynamicpagealert' style='background: ${att['color']};'>".
                        "   <h4><a href='${att['alertlink']}'>${att['alerttitle']}</a></h4>".
                        "   <h5><a href='${att['alertlink']}'>${att['alertmessage']}</a></h5>".
                        '</div>';
                return $html; 
            
            } 


        // Hook into WordPress
        add_action('init','hbi_block');

    } //end IF01


