<?php 
/**
 * Galleries Block
 * 
 */
    // empty return string
    $return = [];
    $guide = [];
    $return['section'] = '';
    $return['tabs'] = '';
    
    // if we have galleries
    if( !empty($cB['galleries']) ){

        $return['galleries'] = '';

        // set the galleries guide string
        $guide['galleries'] = '<li class="site__fade site__fade-up"><div><div class="image" style="background-image: url(%s)"></div></div></li>';
        // set the galleries return string
        $return['galleries'] .= '<div class="galleries">';

        // open the tabs list
        if( $cB['tab_type'] != 'none' ){
            $return['tabs'] .= '<div class="tabs site__fade site__fade-up"><ul>';
        }

        // loop thru the galleries
        foreach( $cB['galleries'] as $i => $gallery ){

            // create a tab for each gallery
            if( $cB['tab_type'] !== 'none' ){
                $return['tabs'] .= '<li class="'.( ($i === 0 ) ? 'tab_active' : '' ).'"><a href="javascript:;" style="color:'.$cB['foreground_color'].';">'.$gallery['title'].'</a></li>';
            }

            // open the galleries grid
            if ( $cB['tab_type'] == 'none' ){
                $return['galleries'] .= '<div class="site__grid '.( ($i===0) ? 'current_gallery' : 'hidden_gallery' ).'"><h2 class="site__fade site__fade-up">'.$gallery['title'].'</h2><ul>';
            }else{
                $return['galleries'] .= '<div class="site__grid '.( ($i===0) ? 'current_gallery' : 'hidden_gallery' ).'"><ul>';
            }

            // loop thru the gallery images to create line items
            foreach( $gallery['images'] as $image ){
                $return['galleries'] .= sprintf(
                    $guide['galleries']
                    ,$image['url']
                );
            }
            $return['galleries'] .= '</ul></div>';
        }
        // close the tabs list
        if( $cB['tab_type'] !== 'none' ){
            $return['tabs'] .= '</ul></div>';
        }

        $return['galleries'] .= '</div>';
    }
    $imagegallery = get_theme_mod( 'setting_gallery_buttom_divider', '' ); 
    $imagegallery2 = get_theme_mod( 'setting_gallery_buttom_divider_top', '' );
    // empty guide string 
    $guide['section'] = '
        <section %s class="site__block block__galleries" style="%s %s %s %s %s %s %s %s">
        <img class="spacerdiviermenutop" src='.'"'. esc_url( $imagegallery2 ).'"'.'>
            <div class="container %s %s" style="%s %s">
                %s
                %s
                <div class="tabsandgrids_container '.$cB['tab_type'].'">
                    %s
                    %s
                </div>
                %s
            </div>
            <img class="spacerdiviermenubottom" src='.'"'. esc_url( $imagegallery ).'"'.'>
        </section>
    ';

    $return['section'] .= sprintf(
        $guide['section']
        //  options for every block
        ,( !empty($cB['anchor_enabled']) ? 'id="'.strtolower($cB['anchor_link_text']).'"' : '' ) // add an ID tag for the long scroll
        ,( !empty($cB['background_settings']['background_image']) ? 'background-image:url('."'".strtolower($cB['background_settings']['background_image'])."'".');' : '' )//this is the background image
        ,( !empty($cB['background_settings']['background_position']) ? 'background-position:'.strtolower($cB['background_settings']['background_position']).';' : '' )//this is for background  position
        ,( !empty($cB['background_settings']['background_size']) ? 'background-size:'.strtolower($cB['background_settings']['background_size']).';' : '' )//this is for background size
        ,( !empty($cB['background_settings']['background_repeat']) ? 'background-repeat:'.strtolower($cB['background_settings']['background_repeat']).';' : '' )//this is for background repeat
        ,( !empty($cB['background_setting']['background_attachment']) ? 'background-attachment:'.strtolower($cB['background_setting']['background_attachment']).';' : '' )//this is for background attachment
        ,( !empty($cB['background_setting']['background_origin']) ? 'background-origin:'.strtolower($cB['background_setting']['background_origin']).';' : '' )//this is for background origin
        ,( !empty($cB['background_setting']['background_clip']) ? 'background-clip:'.strtolower($cB['background_setting']['background_clip']).';' : '' )//this is for background clip
        ,( !empty($cB['background_setting']['background_color']) ? 'background-color:'.strtolower($cB['background_setting']['background_color']).';' : '' )//this is for background color
        ,( !empty( $cB['width'] ) ? $cB['width'] : '' )                                                         // container width
        ,( !empty( $cB['background_color'] ) ? 'hasbg' :'' )                                                    // container has bg color class
        ,( !empty( $cB['background_color'] ) ? 'background-color:'.$cB['background_color'].';' : '' )           // container bg color style
        ,( !empty( $cB['foreground_color'] ) ? 'color:'.$cB['foreground_color'].';' : '' )           // container bg color style
        // post object grid options
        ,( !empty($cB['heading']) ? '<h2 class=" block__heading site__fade site__fade-up">'.$cB['heading'].'</h2>' : '' )
        ,( !empty($cB['text']) ? '<div class="block__details site__fade site__fade-up">'.$cB['text'].'</div>' : '' )
        // gallery options
        ,( !empty($return['tabs']) ? $return['tabs'] : '' )
        ,( !empty($return['galleries']) ? $return['galleries'] : '' )
        // view all
        ,( !empty($cB['view_all_button']['link']) ? '<a class="site__button" href="'.$cB['view_all_button']['link']['url'].'">'.$cB['view_all_button']['link']['title'].'</a>' : '' )
    );


    // echo return string
    echo $return['section'];

    // clear the $cB, $return, $index and $guide vars for the next block
    unset($cB, $return, $guide);
 ?>