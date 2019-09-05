<?php
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