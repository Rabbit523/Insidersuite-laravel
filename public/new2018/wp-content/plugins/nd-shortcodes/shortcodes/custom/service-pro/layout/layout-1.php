<?php

$nd_options_content_width = $nd_options_image_width +20;
  
$str .= '

    <div class="nd_options_section nd_options_position_relative '.$nd_options_class.'">

        '.$nd_options_image_src_ouput.'

        <div style="padding-left:'.$nd_options_content_width.'px;" class="nd_options_section nd_options_box_sizing_border_box">
            
            '.$nd_options_title_output.' 
            '.$nd_options_description_output.' 
            '.$nd_options_link_output.'

        </div>

    </div>

  ';


;
