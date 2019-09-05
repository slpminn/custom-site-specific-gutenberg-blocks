<?php
            
            /*
                Register Dynamic Page Alert Custom Block
            */
            wp_register_script(
                'daf-dynamicpagealert-editor', //name of the script
                plugins_url('editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
            // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'daf-dynamicpagealert', //name of the script
                plugins_url('style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(DAF_BLOCKS_PATH.'/blocks/dynamicpagealert/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'daf-dynamicpagealert-editor', //name of the script
                plugins_url('editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(DAF_BLOCKS_PATH.'/blocks/dynamicpagealert/editor-style.css') // Everytime it is update clear style from cash
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
  