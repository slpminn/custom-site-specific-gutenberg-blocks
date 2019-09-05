<?php
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