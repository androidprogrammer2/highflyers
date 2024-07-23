<?php 
$why_choose_high__section_name = get_field('why_choose_high__section_name');
$competitive_programs_section_name = get_field('competitive_programs_section_name');
?>
<section class="competitive-programs-sec">
     <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block col-xl-2">
                <div class="team_nav">
                     <ul>
                         <li class="active"> <a href="#competitive-programs"><?php echo $competitive_programs_section_name;?></a></li>
                         <li> <a href="#why-choose"><?php echo $why_choose_high__section_name;?></a></li>
                     </ul>
                </div>
            </div>
            <?php
            $competitive_programs_all = get_field('competitive_programs_all');
            $competitive_programs_titles = get_field('competitive_programs_titles');
            $competitive_programs_texts = get_field('competitive_programs_texts');
            $competitive_programs_buttons = get_field('competitive_programs_buttons');
            ?>
            <div class="col-lg-9 col-xl-10">
              <div class="recreational-programs-wrap">
                    <div class="recreational-programs" id="competitive-programs">
                        <div class="title_block">
                            <?php if(!empty($competitive_programs_titles)){echo '<h2>'.__($competitive_programs_titles).'</h2>';} ?>
                            <?php if(!empty($competitive_programs_texts)){echo wpautop($competitive_programs_texts);} ?>
                        </div>
                       <div class="content-sec">
                           <ul class="list-unstyled p-0">
                               <?php 
                                if(!empty($competitive_programs_all)){
                                    foreach($competitive_programs_all as $competitive_programs_alls){
                                        $id = $competitive_programs_alls->ID ;
                                        $permalink = get_permalink( $competitive_programs_alls->ID );
                                        $title = get_the_title( $competitive_programs_alls->ID );
                                        $featured_image = get_the_post_thumbnail_url($competitive_programs_alls->ID);
                                        $short_texts = $competitive_programs_alls->post_excerpt;
                                        $listing_page_text = get_field( 'listing_page_text', $competitive_programs_alls->ID );
                                        $categories = wp_get_post_terms($id, 'ages');
                                        foreach ($categories as $category) {
                                            $cat_name = ($category->name);
                                        }
                                        ?>
                                            <li>
                                                <a href="<?php echo $permalink ;?>" class="wrap-disciplin-box">
                                                    <div class="wrap-dic-img">
                                                        <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/06/f-02.png" alt="">
                                                        <span class="age-btn-tag">
                                                            <?php echo $cat_name ;?>
                                                        </span>
                                                    </div>
                                                    <div class="wrap-inner-box">
                                                        <h6><?php echo $title;?></h6>
                                                        <p><?php echo $short_texts ;?></p>
                                                    </div>
                                                    <span class="w-100 btn-primary d-block">
                                                        <?php echo $listing_page_text ;?>
                                                    </span>
                                                </a>
                                            </li>
                                        <?php
                                    }
                                }
                               ?>
                             
                           </ul>
                           <div class="btn-main-div">
                             <?php if(!empty($competitive_programs_buttons)){echo '<a href="'.$competitive_programs_buttons['url'].'" class="theme-btn">'.$competitive_programs_buttons['title'].'</a>';} ?>
                           </div>
                       </div>
                    </div>
                    <?php
                    $why_choose_high = get_field('why_choose_high');
                    $why_choose_high_flyers_title = get_field('why_choose_high_flyers_title');
                    $why_choose_high_flyers_texts = get_field('why_choose_high_flyers_texts');
                    ?>
                    <div class="why-choose one_column_text" id="why-choose">
                        <div class="container">
                            <div class="content-block mb-5">
                                <?php if(!empty($why_choose_high_flyers_title)){echo '<h2>'.__($why_choose_high_flyers_title).'</h2>';} ?>
                                <?php if(!empty($why_choose_high_flyers_texts)){echo wpautop($why_choose_high_flyers_texts);} ?>
                            </div>
                            <div class="row">
                                <?php 
                                if(!empty($why_choose_high)){
                                    foreach($why_choose_high as $why_choose_highs){
                                        $why_choose_image = $why_choose_highs['why_choose_image'];
                                        $why_choose_title = $why_choose_highs['why_choose_title'];
                                        $why_choose_texts = $why_choose_highs['why_choose_texts'];
                                        $why_choose_buttons = $why_choose_highs['why_choose_buttons'];
                                        ?>
                                            <div class="col-sm-6">
                                                <div class="why-choose-box pe-xl-4">
                                                    <div class="why-choose-items">
                                                        <?php if(!empty($why_choose_image)){echo wp_get_attachment_image($why_choose_image['ID'] , 'full');} ?>
                                                    </div>
                                                    <div class="why-choose-content">
                                                        <?php if(!empty($why_choose_title)){echo '<h4>'.$why_choose_title.'</h4>';} ?>
                                                        <?php if(!empty($why_choose_texts)){echo wpautop($why_choose_texts);} ?>
                                                        <?php if(!empty($why_choose_buttons)){echo '<a href="'.$why_choose_buttons['url'].'" class="theme-btn">'.$why_choose_buttons['title'].'</a>';} ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                }
                                ?>
                                  
                            </div>
                        </div>
                    </div>
              </div>
            </div>
        </div>
     </div>
</section>