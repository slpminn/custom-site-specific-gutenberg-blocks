<?php
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