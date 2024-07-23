<?php 
$our_troupe_background_image = get_field('our_troupe_background_image');
$our_troupe_background_text = get_field('our_troupe_background_text');
$our_troupe_background_text_mobile = get_field('our_troupe_background_text_mobile');
$our_troupe_title = get_field('our_troupe_title');
$our_troupe_texts = get_field('our_troupe_texts');
$our_troupe_grid = get_field('our_troupe_grid');
$our_troupe_dark_button = get_field('our_troupe_dark_button');
$our_troupe_grid_light_button = get_field('our_troupe_grid_light_button');
$our_troupe_team = get_field('our_troupe_team');
?>

<!-- our Team sec -->
<div class="our-team-sec">
    <div class="team-shap-img">
        <img class="shap-img-main" src="<?php echo home_url(); ?>/wp-content/uploads/2024/06/shap-23.png" alt="">
    </div>
    <!-- for desktop text -->
    <?php 
    if(!empty($our_troupe_background_text)){
        echo '<div class="big-text-team d-md-block d-none">'.$our_troupe_background_text.'</div>';
    }
    if(!empty($our_troupe_background_text_mobile)){
        echo '<div class="big-text-team d-md-none mobile-text">'.$our_troupe_background_text_mobile.'</div>';
    }
     ?>
    <div class="container">
        <div class="team-model-img">
            <img class="model-img" src="<?php echo $our_troupe_background_image['url']; ?>" alt="">
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="title-box">
                        <?php 
                        if(!empty($our_troupe_title)){ echo '<h2>'.$our_troupe_title.'</h2>'; }
                        if(!empty($our_troupe_texts)){ echo $our_troupe_texts; }
                        if(!empty($our_troupe_grid)){
                        ?>
                            <div class="row info-main-facility">
                                
                                    <?php $count = 1; foreach($our_troupe_grid as $grid_details ){ 
                                        $our_troupe_grid_icon   = $grid_details['our_troupe_grid_icon'];
                                        $our_troupe_grid_title  = $grid_details['our_troupe_grid_title'];
                                        if($count <= 2){
                                            $var_echo = '<div class="col-md-4">';
                                        }else{
                                            $var_echo = '<div class="col-md-8">';
                                        }
                                           if ($count%2 == 1){ echo $var_echo; }
                                        ?>
                                    <div class="d-flex info-wrap-team align-items-center  gap-3">
                                        <?php if(!empty($our_troupe_grid_icon)){ echo wp_get_attachment_image($our_troupe_grid_icon['id'] , 'full' , '' , array('class' => '', 'alt' => '')); }
                                        echo '<span class="title-info">'.$our_troupe_grid_title.'</span>';
                                        ?>
                                        
                                    </div>
                                    <?php if ($count%2 == 0){echo '</div>';} $count++; } if ($count%2 != 1) echo "</div>"; ?>
                            </div>
                    <?php } ?>
                    <div class="d-flex gap-2 flex-wrap">
                        <?php 
                        if (!empty($our_troupe_dark_button['url']) && $our_troupe_dark_button['title']) {
                            echo '<a href="' . $our_troupe_dark_button['url'] . '" class="theme-btn">' . $our_troupe_dark_button['title'] . '</a>';
                        }
                        if (!empty($our_troupe_grid_light_button['url']) && $our_troupe_grid_light_button['title']) {
                            echo '<a href="' . $our_troupe_grid_light_button['url'] . '" class="theme-btn border-btn">' . $our_troupe_grid_light_button['title'] . '</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php if(!empty($our_troupe_team)){ ?>
            <div class="col-lg-7">
                <div class="swiper-container our-teamslider">
                    <div class="swiper-wrapper">
                        <?php foreach($our_troupe_team as $team_member_details){
                            $member_id         = $team_member_details->ID;
                            $member_name       = $member_details->post_title;
                            $team_positions    = get_field('team_positions' , $member_id);
                            $team_field_icons  = get_field('team_field_icons' , $member_id);
                            $thumbnail         = get_the_post_thumbnail_url( $member_id );

                            // Extra field
                            $post_content           = $member_details->post_content;
                            $team_classes           = get_field('team_classes' , $member_id);
                            $experience             = get_field('experience' , $member_id);
                            $qualification          = get_field('qualification' , $member_id);
                            $team_descriptions      = get_field('team_descriptions' , $member_id);
                            $team_positions         = get_field('team_positions' , $member_id);
                            ?>
                        <div class="swiper-slide">
                            <div class="team-popup-right-content ">
                                <div class="team-popup-img">
                                    <img src="<?php echo $thumbnail; ?>" alt="">
                                </div>
                                <div class="team-popup-content">
                                    <div class="top-content">
                                        <div class="author_content">
                                            <?php 
                                            if(!empty($member_name)){ echo '<h5>'.$member_name.'</h5>'; }
                                            if(!empty($team_positions)){ echo '<h6>'.$team_positions.'</h6>'; }
                                            ?>
                                            <span class="icon">
                                                <?php if(!empty($team_field_icons['url'])){ ?>
                                                    <img src="<?php echo $team_field_icons['url']; ?>" alt="">
                                                <?php } ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="bottom-content">
                                        <ul>
                                            <?php if(!empty($team_classes)){ ?>
                                            <li>
                                                #&nbspClasses
                                                <span><?php echo $team_classes; ?></span>
                                            </li>
                                            <?php } ?>
                                            <?php if(!empty($experience)){ ?>
                                            <li>
                                                Experience
                                                <span><?php echo $experience; ?></span>
                                            </li>
                                            <?php } ?>
                                            <?php if(!empty($qualification)){ ?>
                                            <li>
                                                qualification
                                                <span><?php echo $qualification; ?></span>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                        <?php if(!empty($team_descriptions)){ ?>
                                        <div class="decp">
                                            <?php echo $team_descriptions; ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next">
                        <img src="<?php echo home_url();?>/wp-content/uploads/2024/06/right-slider.png" alt="">
                    </div>
                    <div class="swiper-button-prev">
                        <img src="<?php echo home_url();?>/wp-content/uploads/2024/06/left-slider.png" alt="">
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>