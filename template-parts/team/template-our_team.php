<?php 
$department_repeater = get_field('department_repeater');
?>
<section class="our-team-section">
    <div class="container">
         <div class="row">
            <?php if(!empty($department_repeater)){ ?>
             <div class="col-lg-3 d-none d-lg-block col-xl-2">
                <div class="team_nav">
                     <ul>
                        <?php foreach($department_repeater as $key => $department_details){
                            $deparment_name = $department_details['deparment_name'];
                            $merge_name     = str_replace(' ', '', $deparment_name);
                            ?>
                                <li class="<?php echo ($key == 0 )? 'active':''; ?>"> <a href="#<?php echo $merge_name; ?>"><?php echo $deparment_name ?></a></li>
                        <?php } ?>
                     </ul>
                </div>
             </div>
            <?php } ?>
            <?php if(!empty($department_repeater)){ ?>
             <div class="col-lg-9 col-xl-10 ps-xl-5">
                <div class="our-team-blog">
                    <?php foreach($department_repeater as $department_details){
                        $deparment_name     = $department_details['deparment_name'];
                        $merge_name         = str_replace(' ', '', $deparment_name);
                        $department_content = $department_details['department_content'];
                        $select_member      = $department_details['select_member'];
                        if(!empty($select_member)){
                        ?>
                    <div id="<?php echo $merge_name; ?>" class="our-team-wrap">
                        <div class="title_block mb-5">
                            <?php 
                            if(!empty($deparment_name)){ echo '<h2>'.$deparment_name.'</h2>'; }
                            if(!empty($department_content)){ echo '<p>'.$department_content.'</p>'; }
                            ?>
                        </div>
                        <div class="our-team">
                            <ul>
                                <?php foreach($select_member as $member_details){
                                    
                                    
                                    $member_id         = $member_details->ID;
                                    $member_name       = $member_details->post_title;
                                    $team_positions    = get_field('team_positions' , $member_id);
                                    $team_field_icons  = get_field('team_field_icons' , $member_id);
                                    $thumbnail         = get_the_post_thumbnail_url( $member_id );

                                   // Extra field
                                    $post_content           = $member_details->post_content;
                                    $post_contenT_remove_spc= trim($post_content);
                                    $team_classes           = get_field('team_classes' , $member_id);
                                    $experience             = get_field('experience' , $member_id);
                                    $qualification          = get_field('qualification' , $member_id);
                                    $team_descriptions      = get_field('team_descriptions' , $member_id);
                                    $team_positions         = get_field('team_positions' , $member_id);
                                    ?>
                                    
                                   <li>
                                        <div class="our-team-box">
                                            <span class="d-none post_content"><?php echo wpautop($post_content);  ?></span>
                                            <span class="d-none team_classes"><?php echo $team_classes;  ?></span>
                                            <span class="d-none experience"><?php echo $experience;  ?></span>
                                            <span class="d-none qualification"><?php echo $qualification;  ?></span>
                                            <span class="d-none team_descriptions"><?php echo wpautop($team_descriptions);  ?></span>
                                            <span class="d-none team_positions"><?php echo $team_positions;  ?></span>
                                             <div class="author_img">
                                             <img src="<?php echo $thumbnail; ?>" alt="">
                                             </div>
                                             <div class="author_content">
                                             <?php 
                                             if(!empty($member_name)){ echo '<h5 class="member_name">'.$member_name.'</h5>'; }
                                             if(!empty($team_positions)){ echo '<h6>'.$team_positions.'</h6>'; }
                                             ?>
                                             <span class="icon">
                                                       <img src="<?php echo $team_field_icons['url']; ?>" alt="">
                                                  </span>
                                             </div>
                                             <?php if(!empty($post_contenT_remove_spc)){ ?>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" id="team_modal"></button>
                                             <?php } ?>
                                        </div>
                                   </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <?php } } ?>
                </div>
             </div>
             <?php } ?>
         </div>
    </div>
</section><!--our-team-sec -->