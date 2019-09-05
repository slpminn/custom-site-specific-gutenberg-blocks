<?php
            
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