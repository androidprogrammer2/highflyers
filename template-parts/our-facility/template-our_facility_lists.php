
<?php 
$our_goal__title = get_field('our_goal__title');
$our_goal_texts = get_field('our_goal_texts');
$our_goal_right_image = get_field('our_goal_right_image');

$our_goal__section_name = get_field('our_goal__section_name');
$bouncing_section_name = get_field('bouncing_section_name');
$equipment_section_name = get_field('equipment_section_name');
$the_viewing_deck_section_name = get_field('the_viewing_deck_section_name');
$gallery_slider_section_name = get_field('gallery_slider_section_name');
?>

<section class="our-facility">
    <div class="container">
         <div class="row">
             <div class="col-lg-3 col-xl-2 col-left d-lg-block d-none">
                <div class="team_nav">
                     <ul>
                        <?php if(!empty($our_goal__section_name)){echo ' <li class="active"> <a href="#our-goal" class="active">'.$our_goal__section_name.'</a></li>';} ?>
                        <?php if(!empty($the_viewing_deck_section_name)){echo ' <li> <a href="#the-viewing-deck">'.$the_viewing_deck_section_name.'</a></li>';} ?>
                        <?php if(!empty($bouncing_section_name)){echo ' <li> <a href="#bouncing-bean">'.$bouncing_section_name.'</a></li>';} ?>
                        <?php if(!empty($equipment_section_name)){echo ' <li> <a href="#our-equipment">'.$equipment_section_name.'</a></li>';} ?>
                        <?php if(!empty($gallery_slider_section_name)){echo '<li> <a href="#our-gallery">'.$gallery_slider_section_name.'</a></li>';} ?>
                     </ul>
                </div>
             </div>
             <div class="col-lg-9 col-xl-10 col-right">
                <div class="our-facility-wrap">
                    <div class="our-facility-img-text" id="our-goal">
                        <div class="row gx-xl-2 row-gap-4">
                            <div class="col-md-8 pe-xl-5">
                                <?php if(!empty($our_goal__title)){echo '<h2>'.__($our_goal__title ,'').'</h2>';} ?>
                                <?php if(!empty($our_goal_texts)){echo wpautop($our_goal_texts);} ?>
                            </div>
                            <div class="col-md-4 img-block">
                                <?php if(!empty($our_goal_right_image)){echo wp_get_attachment_image($our_goal_right_image['ID'] , 'full');} ?>
                            </div>
                        </div>
                    </div>
                    <?php 
                        $the_viewing_deck_title         = get_field('the_viewing_deck_title');
                        $the_viewing_deck_button        = get_field('the_viewing_deck_button');
                        $the_viewing_deck_sub_title     = get_field('the_viewing_deck_sub_title');
                        $the_viewing_deck_texts         = get_field('the_viewing_deck_texts');
                    ?>
                    <div class="our-facility-img-text" id="the-viewing-deck">
                        <div class="row gx-xl-2 row-gap-4">
                            <div class="col-md-5 pe-xl-5">
                                <?php if(!empty($the_viewing_deck_title)){echo '<h2>'.__($the_viewing_deck_title).'</h2>';} ?>
                                <?php if(!empty($the_viewing_deck_button)){echo ' <a href="'.$the_viewing_deck_button['url'].'" class="theme-btn popup-youtube">'.__($the_viewing_deck_button['title']).'</a>';} ?>
                                    </div>
                            <div class="col-md-7">
                                <?php if(!empty($the_viewing_deck_sub_title)){echo '<h3>'.__($the_viewing_deck_sub_title , '').'</h3>';} ?>
                                <?php if(!empty($the_viewing_deck_texts)){echo wpautop($the_viewing_deck_texts);} ?>
                            </div>
                        </div>
                    </div>
                    <?php 
                    $bouncing_bean_cafe_cover_image = get_field('bouncing_bean_cafe_cover_image');
                    $bouncing_title = get_field('bouncing_title');
                    $bouncing_right_title = get_field('bouncing_right_title');
                    $bouncing_texts = get_field('bouncing_texts');
                    $bouncing_right_texts = get_field('bouncing_right_texts');
                    $bouncing_bean_button = get_field('bouncing_bean_button');
                    $bouncing_bean_image = get_field('bouncing_bean_image');
                    $bouncing_right_note = get_field('bouncing_right_note');

                    ?>
                    <div class="single-img">
                        <?php if(!empty($bouncing_bean_cafe_cover_image)){echo wp_get_attachment_image($bouncing_bean_cafe_cover_image['ID'] , 'full');} ?>
                    </div>
                    <div class="bouncing-bean" id="bouncing-bean">
                        <div class="row row-gap-4">
                            <div class="col-lg-8 col-md-7">
                                
                                <?php if(!empty($bouncing_title)){echo '<h2>'.__($bouncing_title , '').'</h2>';} ?>
                                <?php if(!empty($bouncing_texts)){echo wpautop($bouncing_texts);} ?>
                                <?php if(!empty($bouncing_bean_button)){echo ' <a href="'.$bouncing_bean_button['url'].'" class="theme-btn" target="'.$bouncing_bean_button['target'].'">'.__($bouncing_bean_button['title']).'</a>';} ?>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <div class="opening-hrs">
                                    <?php if(!empty($bouncing_right_title)){echo '<h4>'.__($bouncing_right_title , '').'</h4>';} ?>
                                    <?php 
                                    if ($bouncing_right_texts) {
                                        $text_blocks = explode('<br>', $bouncing_right_texts);
                                        foreach ($text_blocks as $block) {
                                            $block = trim($block);
                                            if (empty($block)) {
                                                continue;
                                            }
                                            echo '<div class="opening-time">' . $block . '</div>';
                                        }
                                    }
                                    ?>
                                    <?php if(!empty($bouncing_right_note)){echo '<p class="note">'.__($bouncing_right_note , '').'</p>';} ?>
                                </div>
                                <div class="img-block">
                                    <?php if(!empty($bouncing_bean_image)){echo wp_get_attachment_image($bouncing_bean_image['ID'] , 'full');} ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    $equipment_bold_title = get_field('equipment_bold_title');
                    $equipment_bold_texts = get_field('equipment_bold_texts');
                    $equipment_title = get_field('equipment_title');
                    $equipment_list_texts = get_field('equipment_list_texts');
                    $equipment_button = get_field('equipment_button');
                    ?>
                    <div class="our-equipment" id="our-equipment">
                        <div class="row">
                            <div class="col-md-6">
                                 <div class="title-block">
                                     <?php if(!empty($equipment_bold_title)){echo '<h2>'.__($equipment_bold_title , '').'</h2>';} ?>
                                 </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="content-block">                                  
                                      <?php if(!empty($equipment_bold_texts)){echo wpautop($equipment_bold_texts);} ?>
                                 </div>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-12">
                                 <div class="content-block">
                                     <?php if(!empty($equipment_title)){echo '<h3>'.$equipment_title.'</h3>';} ?>
                                     <?php if(!empty($equipment_list_texts)){echo wpautop($equipment_list_texts);} ?>
                                     <?php if(!empty($equipment_button)){echo '<a href="'.$equipment_button['url'].'" class="theme-btn popup-youtube">'.$equipment_button['title'].'</a>';} ?>
                                 </div>
                             </div>
                        </div>
                    </div>

                    <?php 
                    $love_party_title = get_field('love_party_title');
                    $love_party_texts = get_field('love_party_texts');
                    $love_party_button = get_field('love_party_button');
                    $love_party_image = get_field('love_party_image');
                    ?>
                    <div class="our-facility-img-text mb-0" id="our-goal">
                        <div class="row gx-xl-2 row-gap-4 align-items-center">
                            <div class="col-md-8 pe-xl-5">

                                <?php if(!empty($love_party_title)){echo '<h2>'.__($love_party_title).'</h2>';} ?>
                                <?php if(!empty($love_party_texts)){echo wpautop($love_party_texts);} ?>
                                <?php if(!empty($love_party_button)){echo ' <a href="'.$love_party_button['url'].'" class="theme-btn">'.$love_party_button['title'].'</a>';} ?>

                            </div>
                            <div class="col-md-4 img-block">
                                <?php if(!empty($love_party_image)){echo wp_get_attachment_image($love_party_image['ID'] , 'full');} ?>
                            </div>
                           
                        </div>
                    </div>

                    <span id="our-gallery"></span>

                   
                </div>
             </div>
         </div>
    </div>
</section><!--our-team-sec -->



<?php
$gallery_slider = get_field('gallery_slider');
?>
<div class="gallery-slider our-gallery mt-0">
    <div class="popup-gallery">
        <?php 
        if(!empty($gallery_slider)){
            foreach($gallery_slider as $gallery_sliders){
                $images = $gallery_sliders['url'];
                $image_desc = $gallery_sliders['description'];
                $images_alt = $gallery_sliders['alt'];
                if($images){

                ?>
                    <a class="img-popup" href="<?php echo $images ;?>" title="<?php echo $image_desc; ?>">
                        <span class="popup-wrap">
                            <img class="pop-icon"
                                src="<?php echo get_template_directory_uri();?>/assets/images/magnifyingglassplus_big.svg" alt="">
                            <img src="<?php echo $images ;?>" alt="<?php echo $images_alt ;?>">
                        </span> 
                    </a>
                <?php
                }
            }
        }
        ?>

    </div>
</div>