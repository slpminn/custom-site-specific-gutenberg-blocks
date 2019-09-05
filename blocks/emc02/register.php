<?php
            
 /*
            Register Dynamic E-MC-02 Custom Block
             */
            wp_register_script(
                'daf-emc02-editor', //name of the script
                plugins_url('editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
             // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'daf-emc02', //name of the script
                plugins_url('style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(DAF_BLOCKS_PATH.'/blocks/emc01/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'daf-emc02-editor', //name of the script
                plugins_url('editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(DAF_BLOCKS_PATH.'/blocks/emc01/editor-style.css') // Everytime it is update clear style from cash
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
