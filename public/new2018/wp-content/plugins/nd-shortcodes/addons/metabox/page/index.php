<?php


//START create metabox function
add_action( 'add_meta_boxes', 'nd_options_metabox_pages' );
function nd_options_metabox_pages() {
    add_meta_box( 'nd-options-meta-box-page-id', __('ND Options Page','nd-shortcodes'), 'nd_options_metabox_page', 'page', 'normal', 'high' );
}
//END create metabox function


//START adding all metabox
function nd_options_metabox_page()
{


    //include required js
    wp_enqueue_script('iris');

    //values
    global $post;
    $nd_options_values = get_post_custom( $post->ID );

    $nd_options_meta_box_page_color = get_post_meta( get_the_ID(), 'nd_options_meta_box_page_color', true );
    $nd_options_meta_box_page_title = get_post_meta( get_the_ID(), 'nd_options_meta_box_page_title', true ); 
    $nd_options_meta_box_page_margin = get_post_meta( get_the_ID(), 'nd_options_meta_box_page_margin', true ); 

    ?>




    <!--******************************COLOR******************************-->
    <p><strong><?php _e('Color','nd-shortcodes'); ?></strong></p>
    <p><input id="nd_options_colorpicker" type="text" name="nd_options_meta_box_page_color" id="nd_options_meta_box_page_color" value="<?php echo $nd_options_meta_box_page_color; ?>" /></p>
    <p class="description"><?php _e('This color will be used as the background of the button "read more" in the archive page.','nd-shortcodes'); ?></p>

    <script type="text/javascript">
      //<![CDATA[
      
      jQuery(document).ready(function($){
          $('#nd_options_colorpicker').iris();
      });

      //]]>
    </script>



   	<!--******************************TITLE******************************-->
    <p><strong><?php _e('Title','nd-shortcodes'); ?></strong></p>
   	<p><input id="nd_options_meta_box_page_title" type="checkbox" <?php if( $nd_options_meta_box_page_title == 1 ) { echo 'checked="checked"'; }  ?> name="nd_options_meta_box_page_title" value="0"/></p>
   	<p class="description"><?php _e('Check if you want to hide the title page.','nd-shortcodes'); ?></p>



   	<!--******************************MARGIN TOP/BOTTOM******************************-->
    <p><strong><?php _e('Margin Top / Bottom','nd-shortcodes'); ?></strong></p>
   	<p><input id="nd_options_meta_box_page_margin" type="checkbox" <?php if( $nd_options_meta_box_page_margin == 1 ) { echo 'checked="checked"'; }  ?> name="nd_options_meta_box_page_margin" value="0"/></p>
   	<p class="description"><?php _e('Check if you want to remove the automatic page margin on top and bottom of the page.','nd-shortcodes'); ?></p>

    <?php    
}
//END adding all metabox



//START create save metabox
add_action( 'save_post', 'nd_options_meta_box_page_save' );
function nd_options_meta_box_page_save( $post_id )
{

	//save color
    if( isset( $_POST['nd_options_meta_box_page_color'] ) )
        update_post_meta( $post_id, 'nd_options_meta_box_page_color', wp_kses( $_POST['nd_options_meta_box_page_color'], $allowed ) );

    
    //save title
    if( isset( $_POST['nd_options_meta_box_page_title'] ) ){ update_post_meta( $post_id, 'nd_options_meta_box_page_title', 1 );
    }else{ update_post_meta( $post_id, 'nd_options_meta_box_page_title', 0 ); }


    //save margin
    if( isset( $_POST['nd_options_meta_box_page_margin'] ) ){ update_post_meta( $post_id, 'nd_options_meta_box_page_margin', 1 );
    }else{ update_post_meta( $post_id, 'nd_options_meta_box_page_margin', 0 ); }
         
}
//END create save metabox







/*******************************HEADER IMG******************************/

add_action( 'add_meta_boxes', 'nd_options_metabox_pages_header_img' );
function nd_options_metabox_pages_header_img() {
    add_meta_box( 'nd-options-meta-box-page-header-img-id', __('ND Options Header Image','nd-shortcodes'), 'nd_options_metabox_page_header_img', 'page', 'normal', 'high' );
}

function nd_options_metabox_page_header_img()
{


    // $post is already set, and contains an object: the WordPress post
    global $post;
    $nd_options_values = get_post_custom( $post->ID );
     
    $nd_options_meta_box_page_header_img = get_post_meta( get_the_ID(), 'nd_options_meta_box_page_header_img', true );
    $nd_options_meta_box_page_header_img_title = get_post_meta( get_the_ID(), 'nd_options_meta_box_page_header_img_title', true );
    $nd_options_meta_box_page_header_img_position = get_post_meta( get_the_ID(), 'nd_options_meta_box_page_header_img_position', true );

    ?>

    <!--******************************IMAGE******************************-->
    <p><strong><?php _e('Header Image','nd-shortcodes'); ?></strong></p>
    <p><input class="regular-text" type="text" name="nd_options_meta_box_page_header_img" id="nd_options_meta_box_page_header_img" value="<?php echo $nd_options_meta_box_page_header_img; ?>" /></p>
    <p>
      <input class="button nd_options_meta_box_page_header_img_button" type="button" name="nd_options_meta_box_page_header_img_button" id="nd_options_meta_box_page_header_img_button" value="<?php _e('Upload','nd-shortcodes'); ?>" />
    </p>


    <!--******************************POSITION******************************-->
    <p><strong><?php _e('Image Position','nd-shortcodes'); ?></strong></p>
    <p>
      <select name="nd_options_meta_box_page_header_img_position" id="nd_options_meta_box_page_header_img_position">
        
        <option <?php if( $nd_options_meta_box_page_header_img_position == 'nd_options_background_position_center_top' ) { echo 'selected="selected"'; } ?> value="nd_options_background_position_center_top">Position Top</option>
        <option <?php if( $nd_options_meta_box_page_header_img_position == 'nd_options_background_position_center_bottom' ) { echo 'selected="selected"'; } ?> value="nd_options_background_position_center_bottom">Position Bottom</option>
        <option <?php if( $nd_options_meta_box_page_header_img_position == 'nd_options_background_position_center' ) { echo 'selected="selected"'; } ?> value="nd_options_background_position_center">Position Center</option>
         
      </select>
    </p>


    <!--******************************TITLE******************************-->
    <p><strong><?php _e('Title','nd-shortcodes'); ?></strong></p>
    <p><input id="nd_options_meta_box_page_header_img_title" type="text" name="nd_options_meta_box_page_header_img_title" id="nd_options_meta_box_page_header_img_title" value="<?php echo $nd_options_meta_box_page_header_img_title; ?>" /></p>
    <p class="description"><?php _e('Insert the title/slogan over the image','nd-shortcodes'); ?></p>




    <script type="text/javascript">
      //<![CDATA[
      
    jQuery(document).ready(function() {

      jQuery( function ( $ ) {

        var file_frame = [],
        $button = $( '.nd_options_meta_box_page_header_img_button' );


        $('#nd_options_meta_box_page_header_img_button').click( function () {


          var $this = $( this ),
            id = $this.attr( 'id' );

          // If the media frame already exists, reopen it.
          if ( file_frame[ id ] ) {
            file_frame[ id ].open();

            return;
          }

          // Create the media frame.
          file_frame[ id ] = wp.media.frames.file_frame = wp.media( {
            title    : $this.data( 'uploader_title' ),
            button   : {
              text : $this.data( 'uploader_button_text' )
            },
            multiple : false  // Set to true to allow multiple files to be selected
          } );

          // When an image is selected, run a callback.
          file_frame[ id ].on( 'select', function() {

            // We set multiple to false so only get one image from the uploader
            var attachment = file_frame[ id ].state().get( 'selection' ).first().toJSON();

            $('#nd_options_meta_box_page_header_img').val(attachment.url);

          } );

          // Finally, open the modal
          file_frame[ id ].open();


        } );

      });

    });

      //]]>
    </script>


    <?php    
}

add_action( 'save_post', 'nd_options_meta_box_page_header_img_save' );
function nd_options_meta_box_page_header_img_save( $post_id )
{

    // Make sure your data is set before trying to save it
    if( isset( $_POST['nd_options_meta_box_page_header_img'] ) )
        update_post_meta( $post_id, 'nd_options_meta_box_page_header_img', wp_kses( $_POST['nd_options_meta_box_page_header_img'], $allowed ) );

    if( isset( $_POST['nd_options_meta_box_page_header_img_title'] ) )
        update_post_meta( $post_id, 'nd_options_meta_box_page_header_img_title', wp_kses( $_POST['nd_options_meta_box_page_header_img_title'], $allowed ) );

    if( isset( $_POST['nd_options_meta_box_page_header_img_position'] ) )
        update_post_meta( $post_id, 'nd_options_meta_box_page_header_img_position', wp_kses( $_POST['nd_options_meta_box_page_header_img_position'], $allowed ) );
         
}
