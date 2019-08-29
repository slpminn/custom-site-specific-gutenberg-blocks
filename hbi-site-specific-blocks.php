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

//Check for Gutenberg installed


    if(! function_exists('daf_block')) { //IF01 - Checks if the function already exists.
        console.log('daf_block function not defined.  Defining function daf_block');
        function daf_block() { 
            // Register the block-building script
            wp_register_script(
                'daf-myfirstblock-editor', //name of the script
                plugins_url('/blocks/myfirstblock/editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
            // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'daf-myfirstblock', //name of the script
                plugins_url('/blocks/myfirstblock/style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/myfirstblock/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'daf-myfirstblock-editor', //name of the script
                plugins_url('/blocks/myfirstblock/editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/myfirstblock/editor-style.css') // Everytime it is update clear style from cash
            );
            // Register the block type
           register_block_type(
                'daf/myfirstblock', //name of the block.(Plugin/Block)
                array (
                    'editor_script' => 'daf-myfirstblock-editor',
                    'editor_style' => 'daf-myfirstblock-editor',
                    'style' => 'daf-myfirstblock',
                )
            );                

            /*
                Register Page Alert Custom Block
            */
            wp_register_script(
                'daf-pagealert-editor', //name of the script
                plugins_url('/blocks/pagealert/editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
            // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'daf-pagealert', //name of the script
                plugins_url('/blocks/pagealert/style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/pagealert/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'daf-pagealert-editor', //name of the script
                plugins_url('/blocks/pagealert/editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/pagealert/editor-style.css') // Everytime it is update clear style from cash
            );
            // Register the block type
            register_block_type(
                'daf/pagealert', //name of the block.(Plugin/Block)
                array (
                    'editor_script' => 'daf-pagealert-editor',
                    'editor_style' => 'daf-pagealert-editor',
                    'style' => 'daf-pagealert',
                )
            );           
            
            /*
                Register Dynamic Page Alert Custom Block
            */
            wp_register_script(
                'daf-dynamicpagealert-editor', //name of the script
                plugins_url('/blocks/dynamicpagealert/editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
            // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'daf-dynamicpagealert', //name of the script
                plugins_url('/blocks/dynamicpagealert/style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/dynamicpagealert/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'daf-dynamicpagealert-editor', //name of the script
                plugins_url('/blocks/dynamicpagealert/editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/dynamicpagealert/editor-style.css') // Everytime it is update clear style from cash
            );
            // Register the block type
            register_block_type(
                'daf/dynamicpagealert', //name of the block.(Plugin/Block)
                array (
                    'editor_script' => 'daf-dynamicpagealert-editor',
                    'editor_style' => 'daf-dynamicpagealert-editor',
                    'style' => 'daf-dynamicpagealert',
                    'render_callback' => 'dafDynamicPageAlertCB', // The render callback
                )
            );     

            /*
            Register Dynamic E-MC-01 Custom Block
             */
            wp_register_script(
                'daf-emc01-editor', //name of the script
                plugins_url('/blocks/emc01/editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
             // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'daf-emc01', //name of the script
                plugins_url('/blocks/emc01/style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc01/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'daf-emc01-editor', //name of the script
                plugins_url('/blocks/emc01/editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc01/editor-style.css') // Everytime it is update clear style from cash
            );
            // Register the block type
            register_block_type(
                'daf/emc01', //name of the block.(Plugin/Block)
                array (
                    'editor_script' => 'daf-emc01-editor',
                    'editor_style' => 'daf-emc01-editor',
                    'style' => 'daf-emc01',
                    'render_callback' => 'dafEMC01CB', // The render callback
                )
            );            
            
            
        } //end of daf_block()

    /**
     * CALLBACK Function for Dynamic Page Alert Custom Block
     * Render callback for the dynamic block.
     * Instead of rendering from the block's save(), this callback will render the front-end
     * 
     * @param $att Attributes from the JS Block
     * @return string Rendered HTML
     */
    function dafDynamicPageAlertCB($att) {
        
        $html = "<div class='wp-block-daf-dynamicpagealert' style='background: ${att['color']};'>".
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
            function dafEMC01CB($att) {

                $html = ""; 

                // The Query Arguments
                $args = array(
                    'cat' => $att['blockcategory'],
                    'posts_per_page' => $att['blocknoofstories'],
                    'nopaging', true
                );

                //The Query
                $the_query = new WP_Query( $args );

                // The Loop
                if( $the_query->have_posts()) {
                    $html .= "<div class='wp-block-daf-emc01 col-md-${att['blockcolumnsondesktop']}'>";
                    $html .= '<h2 class="cat-title">'.get_cat_name($att['blockcategory']).'</h2>';
                    $html .= '<ul>';
                    while ($the_query -> have_posts() ) {
                        $the_query->the_post();
                        $html .= '<li class="cat-post">'.
                                    '<a class="cat-post-item-link" href="'.get_post_permalink().'">'.
                                    '<div class="row">'.
                                    '<div class="col-12 col-lg-3 cat-post-item-thumbnail"><img class="img-fluid" src="'.esc_url(get_the_post_thumbnail_url()).'"></div>'.
                                    '<div class="col-12 col-lg-9 cat-post-item-title">'.get_the_title().'</div>'.
                                    '</div>'.
                                    '</a>'.
                                    '</li>';
                    }
                    $html .= '</ul>';
                    $html .= "</div>";
                }
                // Restore original Post Data
                wp_reset_postData();

                return $html; 
            
            } 


        // Hook into WordPress
        add_action('init','daf_block');

    } //end IF01


