<?php
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