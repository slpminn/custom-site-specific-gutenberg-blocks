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
            // End of Register Dynamic E-MC-01 Custom Block

            /*
            Register Dynamic E-MC-02 Custom Block
             */
            wp_register_script(
                'daf-emc02-editor', //name of the script
                plugins_url('/blocks/emc02/editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
             // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'daf-emc02', //name of the script
                plugins_url('/blocks/emc02/style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc01/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'daf-emc02-editor', //name of the script
                plugins_url('/blocks/emc02/editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc01/editor-style.css') // Everytime it is update clear style from cash
            );
            // Register the block type
            register_block_type(
                'daf/emc02', //name of the block.(Plugin/Block)
                array (
                    'editor_script' => 'daf-emc02-editor',
                    'editor_style' => 'daf-emc02-editor',
                    'style' => 'daf-emc02',
                    'render_callback' => 'dafEMC02CB', // The render callback
                )
            );                        
            // End of Register Dynamic E-MC-02 Custom Block

            /*
            Register Dynamic E-MC-03 Custom Block
             */
            wp_register_script(
                'daf-emc03-editor', //name of the script
                plugins_url('/blocks/emc03/editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
             // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'daf-emc03', //name of the script
                plugins_url('/blocks/emc03/style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc03/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'daf-emc03-editor', //name of the script
                plugins_url('/blocks/emc03/editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc03/editor-style.css') // Everytime it is update clear style from cash
            );
            // Register the block type
            register_block_type(
                'daf/emc03', //name of the block.(Plugin/Block)
                array (
                    'editor_script' => 'daf-emc03-editor',
                    'editor_style' => 'daf-emc03-editor',
                    'style' => 'daf-emc03',
                    'render_callback' => 'dafEMC03CB', // The render callback
                )
            );  
            // End of Register Dynamic E-MC-03 Custom Block

            /*
            Register Dynamic E-MC-04 Custom Block
             */
            wp_register_script(
                'daf-emc04-editor', //name of the script
                plugins_url('/blocks/emc04/editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
             // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'daf-emc04', //name of the script
                plugins_url('/blocks/emc04/style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc04/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'daf-emc04-editor', //name of the script
                plugins_url('/blocks/emc04/editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc04/editor-style.css') // Everytime it is update clear style from cash
            );
            // Register the block type
            register_block_type(
                'daf/emc04', //name of the block.(Plugin/Block)
                array (
                    'editor_script' => 'daf-emc04-editor',
                    'editor_style' => 'daf-emc04-editor',
                    'style' => 'daf-emc04',
                    'render_callback' => 'dafEMC04CB', // The render callback
                )
            );  
            // End of Register Dynamic E-MC-04 Custom Block

            /*
            Register Dynamic E-MC-05 Custom Block
             */
            wp_register_script(
                'daf-emc05-editor', //name of the script
                plugins_url('/blocks/emc05/editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
             // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'daf-emc05', //name of the script
                plugins_url('/blocks/emc05/style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc05/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'daf-emc05-editor', //name of the script
                plugins_url('/blocks/emc05/editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc05/editor-style.css') // Everytime it is update clear style from cash
            );
            // Register the block type
            register_block_type(
                'daf/emc05', //name of the block.(Plugin/Block)
                array (
                    'editor_script' => 'daf-emc05-editor',
                    'editor_style' => 'daf-emc05-editor',
                    'style' => 'daf-emc05',
                    'render_callback' => 'dafEMC05CB', // The render callback
                )
            );  
            // End of Register Dynamic E-MC-05 Custom Block

 /*
            Register Dynamic E-MC-06 Custom Block
             */
            wp_register_script(
                'daf-emc06-editor', //name of the script
                plugins_url('/blocks/emc06/editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
             // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'daf-emc06', //name of the script
                plugins_url('/blocks/emc06/style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc06/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'daf-emc06-editor', //name of the script
                plugins_url('/blocks/emc06/editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(plugin_dir_path(__FILE__).'/blocks/emc06/editor-style.css') // Everytime it is update clear style from cash
            );
            // Register the block type
            register_block_type(
                'daf/emc06', //name of the block.(Plugin/Block)
                array (
                    'editor_script' => 'daf-emc06-editor',
                    'editor_style' => 'daf-emc06-editor',
                    'style' => 'daf-emc06',
                    'render_callback' => 'dafEMC06CB', // The render callback
                )
            );  
            // End of Register Dynamic E-MC-06 Custom Block

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
                     // Optimization Query Parameters//
                     //'nopaging' => true, //false: use pages, true: do not use paging
                     'udpate_post_term_cache' => false, //grabs terms, remove if terms required
                     'update_post_meta_cache' => false, //grabs post meta, remove if post meta required.
                     'no_found_rows' => true, //make it true when you don't need any pagination and don't need total number of posts.
                     'cache_results' => false, // Post information cache
                );

                //The Query
                $the_query = new WP_Query( $args );

                // The Loop
                if( $the_query->have_posts()) {
                   // $postCount = 1;
                    $html .= "<div class='wp-block-daf-emc01 col-md-${att['blockcolumnsondesktop']}'>".
                             '<div class="row">'.
                             '<div class="col-12 cat-title">'.get_cat_name($att['blockcategory']).'</div>';
                    while ($the_query -> have_posts() ) {
                        $the_query->the_post();
                        $html .= '<div class="col-12 col-lg-3 cat-post-item-thumbnail">'.
                                    '<a class="cat-post-item-link" href="'.get_post_permalink().'">'.
                                    '<img class="img-fluid" src="'.esc_url(get_the_post_thumbnail_url()).'">'.
                                    '</a>'.
                                    '</div>'. 
                                    '<div class="col-12 col-lg-9 cat-post-item-title">'.
                                    '<a class="cat-post-item-link" href="'.get_post_permalink().'">'.
                                    get_the_title().
                                    '</a>'.
                                    '</div>';
                                    
                       // if ($postCount == $att['blocknoofstories']) break;
                       // $postCount++;
                    }
                    $html .= '</div>'. //end row
                             '</div>'; //end block
                }
                // Restore original Post Data
                wp_reset_postData();

                return $html; 
            
            } 

            //  END CALLBACk for Dynamic E-MC-01 Custom Block
            
            /**
             * CALLBACK Function for Dynamic E-MC-02 Custom Block
             * Render callback for the dynamic block.
             * Instead of rendering from the block's save(), this callback will render the front-end
             * 
             * @param $att Attributes from the JS Block
             * @return string Rendered HTML
             */
            function dafEMC02CB($att) {

                $html = ""; 
 
                if ($att['blockfirststory'] > 0) $offset = $att['blockfirststory'] - 1;
                else $offset = 0;
                
                // Retrieve the Sticky Posts
                $args1 = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat' => $att['blockcategory'],
                    'post__in' => get_option('sticky_posts'),
                    'posts_per_page' => $att['blocknoofstories'],
                    // Optimization Query Parameters//
                    //'nopaging' => true, //false: use pages, true: do not use paging retrieve all posts found
                    'udpate_post_term_cache' => false, //grabs terms, remove if terms required
                    'update_post_meta_cache' => false, //grabs post meta, remove if post meta required.
                    'no_found_rows' => true, //make it true when you don't need any pagination and don't need total number of posts.
                    'cache_results' => false, // Post information cache
                );
                $the_query_sticky = new WP_Query( $args1 ); // Retrieve Sticky Posts
                //return var_dump($the_query_sticky);

                //Retrieve none Sticky Posts
                $calc_post_per_page = $att['blocknoofstories'] - count($the_query_sticky->posts);
              
                $args2 = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat' => $att['blockcategory'],
                    'post__not_in' => get_option('sticky_posts'),
                    'ignore_sticky_posts' => true,
                    'posts_per_page' => $calc_post_per_page,
                    'offset' => $offset,
                    // Optimization Query Parameters//
                    'nopaging' => false, //false: use pages, true: do not use paging retrieve all posts found
                    'udpate_post_term_cache' => false, //grabs terms, remove if terms required
                    'update_post_meta_cache' => false, //grabs post meta, remove if post meta required.
                    'no_found_rows' => true, //make it true when you don't need any pagination and don't need total number of posts.
                    'cache_results' => false, // Post information cache 

                );
                $the_query_other = new WP_Query( $args2 ); // Retrieve Non-Sticky Posts
                //return var_dump($the_query_other);

                // Merge both queries into one.
                $the_query_all = new WP_Query(); // Container for all the posts
                $the_query_all->posts = array_merge($the_query_sticky->posts, $the_query_other->posts);
                $the_query_all->post_count = count($the_query_all->posts); //Set the post count correctly so as to enable the looping
                //return count($the_query->posts);

                //return $the_query->post_count;
                // The Loop
                if( $the_query_all->have_posts()) {
                    $postCount = 1;
                    $html .= '<div class="wp-block-daf-emc02 '.
                             'col-md-'.$att['blockcolumnsondesktop'].'">'.
                             '<div class="row">';
                    while ($the_query_all -> have_posts() ) {
                        $the_query_all->the_post();
                        if ($postCount == 1) {
                            if (get_field("acf_post_featured_banner") == 1) {
                                $html .= '<div class="col-12 cat-post-featured-item-banner">Featured Location</div>';
                            }
                            $html .=  '<div class="col-12 cat-post-featured-item-thumbnail">'.
                                     '<a class="cat-post-featured-item-link" href="'.get_post_permalink().'">'.                                                
                                     '<img class="img-fluid" src="'.esc_url(get_the_post_thumbnail_url()).'">'.
                                     '</a>'.
                                     '</div>'.
                                     '<div class="col-12 cat-post-featured-item-title">'.
                                     '<a class="cat-post-featured-item-link" href="'.get_post_permalink().'">'.
                                     get_the_title().
                                     '</a>'.
                                     '</div>'.
                                     '<div class="col-12 cat-post-featured-item-excerpt">'.
                                     get_the_excerpt().
                                     '</div>';
                                //     '<div class="col-12 cat-post-featured-item-separator"><hr width="75%"/></div>';
                        } else {
                            $html .=  '<div class="col-12 col-md-8 cat-post-item-title">'.
                                      '<a class="cat-post-featured-item-link" href="'.get_post_permalink().'">'.
                                      get_the_title().
                                      '</a>'. 
                                      '</div>'.
                                      '<div class="col-12 col-md-4 cat-post-item-thumbnail">'.
                                      '<a class="cat-post-featured-item-link" href="'.get_post_permalink().'">'.
                                      '<img class="img-fluid" src="'.esc_url(get_the_post_thumbnail_url()).'">'.
                                      '</a>'. 
                                      '</div>';
                        }
                        //if ($postCount == $att['blocknoofstories']) break;
                        $postCount++;
                    } // end while
                    $html .= "</div>".  //  end row
                            "</div>"; // end main block
                } // end if have posts

                // Restore original Post Data
                wp_reset_postData();

                return $html; 
            
            } 

            //  END CALLBACk for Dynamic E-MC-02 Custom Block

           /**
             * CALLBACK Function for Dynamic E-MC-03 Custom Block
             * Render callback for the dynamic block.
             * Instead of rendering from the block's save(), this callback will render the front-end
             * 
             * @param $att Attributes from the JS Block
             * @return string Rendered HTML
             */
            function dafEMC03CB($att) {

                $html = ""; 

                // The Query Arguments
                $args = array(
                    'cat' => $att['blockcategory'],
                    'posts_per_page' => $att['blocknoofstories'],
                    // Optimization Query Parameters//
                    //'nopaging' => true, //false: use pages, true: do not use paging
                    'udpate_post_term_cache' => false, //grabs terms, remove if terms required
                    'update_post_meta_cache' => false, //grabs post meta, remove if post meta required.
                    'no_found_rows' => true, //make it true when you don't need any pagination and don't need total number of posts.
                    'cache_results' => false, // Post information cache
                );

                //The Query
                $the_query = new WP_Query( $args );

                // The Loop
                if( $the_query->have_posts()) {
                    //$postCount = 1;
                    $html .= '<div class="wp-block-daf-emc03 col-md-'.
                             $att['blockcolumnsondesktop'].
                             '">'.
                             '<div class="row">'.
                            '<div class="col-12 cat-title">'.
                             get_cat_name($att['blockcategory']).
                             '</div>';
                             
                    while ($the_query -> have_posts() ) {
                        $the_query->the_post();
                        $html .=  '<div class="col-12 cat-post-item-title">'.
                                    '<a class="cat-post-item-link" href="'.get_post_permalink().'">'.
                                    get_the_title().
                                    '</a>'.
                                    '</div>'; //end column
                        //if ($postCount == $att['blocknoofstories']) break;
                        //$postCount++;
                    }
                    $html .= "</div>".  //end row
                             "</div>"; //end main block
                } // end if have posts

                // Restore original Post Data
                wp_reset_postData();

                return $html; 
            
            } 
            //  END CALLBACk for Dynamic E-MC-03 Custom Block                
            
            /**
             * CALLBACK Function for Dynamic E-MC-04 Custom Block
             * Render callback for the dynamic block.
             * Instead of rendering from the block's save(), this callback will render the front-end
             * 
             * @param $att Attributes from the JS Block
             * @return string Rendered HTML
             */
            function dafEMC04CB($att) {

                $html = ""; 

                // The Query Arguments
                $args = array(
                    'cat' => $att['blockcategory'],
                    'posts_per_page' => $att['blocknoofstories'],
                    // Optimization Query Parameters//
                    //'nopaging' => true, //false: use pages, true: do not use paging
                    'udpate_post_term_cache' => false, //grabs terms, remove if terms required
                    'update_post_meta_cache' => false, //grabs post meta, remove if post meta required.
                    'no_found_rows' => true, //make it true when you don't need any pagination and don't need total number of posts.
                    'cache_results' => false, // Post information cache
                );

                //The Query
                $the_query = new WP_Query( $args );

                // The Loop
                if( $the_query->have_posts()) {
                   // $postCount = 1;
                    $html .= '<div class="wp-block-daf-emc04 col-md-'.
                             $att['blockcolumnsondesktop'].
                             '">'.
                            '<div class="cat-title">'.
                             get_cat_name($att['blockcategory']).
                             '</div>'.
                             '<div class="row">';
                    while ($the_query -> have_posts() ) {
                        $the_query->the_post();
                        $html .= '<div class="col-12 col-md-4 cat-post-item-thumbnail">'.
                                      '<a class="cat-post-featured-item-link" href="'.get_post_permalink().'">'.
                                      '<img class="img-fluid" src="'.esc_url(get_the_post_thumbnail_url()).'">'.
                                      '<div class="cat-post-item-title">'.get_the_title().'</div>'.
                                      '</a>'. 
                                      '</div>'; //end column
                       // if ($postCount == $att['blocknoofstories']) break;
                       // $postCount++;
                    }
                    $html .= "</div>".  //end row
                             "</div>"; //end main block
                } // end if have posts
  
                // Restore original Post Data
                wp_reset_postData();

                return $html; 
            
            } 

              //  END CALLBACk for Dynamic E-MC-04 Custom Block   

 /**
             * CALLBACK Function for Dynamic E-MC-05 Custom Block
             * Render callback for the dynamic block.
             * Instead of rendering from the block's save(), this callback will render the front-end
             * 
             * @param $att Attributes from the JS Block
             * @return string Rendered HTML
             */
            function dafEMC05CB($att) {

                $html = ""; 

                // The Query Arguments
                $args = array(
                    'cat' => $att['blockcategory'],
                    'posts_per_page' => $att['blocknoofstories'],
                    // Optimization Query Parameters//
                    //'nopaging' => true, //false: use pages, true: do not use paging
                    'udpate_post_term_cache' => false, //grabs terms, remove if terms required
                    'update_post_meta_cache' => false, //grabs post meta, remove if post meta required.
                    'no_found_rows' => true, //make it true when you don't need any pagination and don't need total number of posts.
                    'cache_results' => false, // Post information cache
                );

                //The Query
                $the_query = new WP_Query( $args );

                // The Loop
                if( $the_query->have_posts()) {
                    //$postCount = 1;
                    $html .= '<div class="wp-block-daf-emc05 col-md-'.
                             $att['blockcolumnsondesktop'].
                             '">'.
                            '<div class="cat-featured-banner">'.
                             $att['blockfeaturedbanner'].
                             '</div>'.
                             '<div class="row">';
                    while ($the_query -> have_posts() ) {
                        $the_query->the_post();
                        $html .= '<div class="col-12 col-md-4 cat-post-item-thumbnail">'.
                                      '<a class="cat-post-featured-item-link" href="'.get_post_permalink().'">'.
                                      '<img class="img-fluid" src="'.esc_url(get_the_post_thumbnail_url()).'">'.
                                      '<div class="cat-post-item-title">'.get_the_title().'</div>'.
                                      '</a>'. 
                                      '</div>'; //end column
                       // if ($postCount == $att['blocknoofstories']) break;
                       // $postCount++;
                    }
                    $html .= "</div>".  //end row
                             "</div>"; //end main block
                } // end if have posts
  
                // Restore original Post Data
                wp_reset_postData();

                return $html; 
            
            } 

              //  END CALLBACk for Dynamic E-MC-05 Custom Block   

 /**
             * CALLBACK Function for Dynamic E-MC-06 Custom Block
             * Render callback for the dynamic block.
             * Instead of rendering from the block's save(), this callback will render the front-end
             * 
             * @param $att Attributes from the JS Block
             * @return string Rendered HTML
             */
            function dafEMC06CB($att) {

                $html = ""; 

                $html .= '<div class="wp-block-daf-emc06 col-md-'.
                             $att['blockcolumnsondesktop'].
                             '">'.
                             '<div class="row">'.
                            '<div class="col-12 cat-map-title">'.
                             $att['blockmaptitle'].
                             '</div>'.
                             '<div class="col-12 cat-map-embed map-responsive">'.
                             $att['blockmaplink'].
                             '</div>'.                             
                             '</div>'.  //end row
                             '</div>'; //end main block

                return $html; 
            
            } 

              //  END CALLBACk for Dynamic E-MC-06 Custom Block 

        // Hook into WordPress
        add_action('init','daf_block');

    } //end IF01