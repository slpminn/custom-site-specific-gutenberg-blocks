<?php
            
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