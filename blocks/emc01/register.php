<?php
            
/*
            Register Dynamic E-MC-01 Custom Block
             */
            wp_register_script(
                'daf-emc01-editor', //name of the script
                plugins_url('editor-script.js', __FILE__), // URL of script
                array(  // Dependencies required by Gutenberg
                    'wp-blocks',
                    'wp-element'
                )
            );
             // Register global block CSS - Loads on the Front End and the Editor
            wp_register_style(
                'daf-emc01', //name of the script
                plugins_url('style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(DAF_BLOCKS_PATH.'/blocks/emc01/style.css') // Everytime it is update clear style from cash
            );
            // Register editor only block CSS - Loads on the Editor only
            wp_register_style(
                'daf-emc01-editor', //name of the script
                plugins_url('editor-style.css', __FILE__), // URL of style
                array('wp-edit-blocks'), // Dependencies 
                filemtime(DAF_BLOCKS_PATH.'/blocks/emc01/editor-style.css') // Everytime it is update clear style from cash
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