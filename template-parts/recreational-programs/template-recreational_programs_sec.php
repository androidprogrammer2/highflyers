<?php  
$program_section_name         = get_field('program_section_name');
$wanna_title_copy             = get_field('wanna_title_copy');
$why_choose_section_name      = get_field('why_choose_section_name');
$recreational_programs_title  = get_field('recreational_programs_title');
$recreational_programs_texts  = get_field('recreational_programs_texts');
$recreational_programs_cta    = get_field('recreational_programs_cta');
$filter_by_class              = get_field('filter_by_class');
$filter_by_age                = get_field('filter_by_age');

$program_section_name_join         = str_replace(' ', '-', $program_section_name);
$wanna_title_copy_join             = str_replace(' ', '-', $wanna_title_copy);
$why_choose_section_name_join      = str_replace(' ', '-', $why_choose_section_name);
?>
<section class="recreational-programs-sec">
     <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block col-xl-2">
                <div class="team_nav">
                     <ul>
                         <li class="active"> <a href="#<?php echo $program_section_name_join; ?>"><?php echo $program_section_name; ?></a></li>
                         <li> <a href="#<?php echo $wanna_title_copy_join; ?>"><?php echo $wanna_title_copy; ?></a></li>
                         <li> <a href="#<?php echo $why_choose_section_name_join; ?>"><?php echo $why_choose_section_name; ?>?</a></li>
                     </ul>
                </div>
            </div>
            <div class="col-lg-9 col-xl-10">
              <div class="recreational-programs-wrap">
                   <div class="recreational-programs" id="<?php echo $program_section_name_join; ?>">
                       <div class="title_block mb-5">
                        <?php 
                        if(!empty($recreational_programs_title)){ echo '<h2>'.$recreational_programs_title.'</h2>'; }
                        if(!empty($recreational_programs_texts)){ echo '<p>'.$recreational_programs_texts.'</p>'; }
                        $terms_ages = get_terms( array(
                            'taxonomy'   => 'ages',
                            'include'   => $filter_by_age,
                            'hide_empty' => true,
                        ) );
                        $terms_Classes = get_terms( array(
                            'taxonomy'   => 'Classes_type',
                            'include'   => $filter_by_class,
                            'hide_empty' => true,
                        ) );

                        $recreational_arg = array(
                            'post_type' => 'recreational_pro',
                            'posts_per_page' => 11,
                            'post_status'   => 'publish',
                            'tax_query'     => array(
                                array(
                                    'taxonomy' => 'program_type',
                                    'field'    => 'slug',
                                    'terms'    => array('recreational-programs'),
                                ),
                            ),
                        );
                        if(isset($_REQUEST['class'])){
                            $recreational_arg['tax_query'] = array(
                                array(
                                    'taxonomy' => 'Classes_type',
                                    'field'    => 'slug',
                                    'terms'    => array($_REQUEST['class']),
                                ),
                            ); 
                        }
                        
                        $recreational_posts = new WP_Query($recreational_arg);
                        ?>
                       </div>
                       <ul class="explore-tab list-unstyled m-0 p-0 mb-5 gap-4 flex-wrap" id="filter_by_classes">
                            <?php $get_class = isset($_REQUEST['class'])? $_REQUEST['class']:''; 
                                $active = 'active';
                                if(!empty($get_class)){
                                    $active = '';
                                }
                            ?>
                            <li><a href="javascript:void(0);" class="<?php echo $active; ?>" data-slug="">All Classes</a></li>
                            <?php foreach ($terms_Classes as $term_age) :
                                $get_class_two = isset($_REQUEST['class'])? $_REQUEST['class']:'';
                                ?>
                                <li><a class="<?php echo ($get_class_two == $term_age->slug)? 'active':''; ?>" href="javascript:void(0);"  data-slug="<?php echo esc_html($term_age->slug); ?>"><?php echo esc_html($term_age->name); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                       <ul class="explore-tab list-unstyled  m-0 p-0 mb-5 gap-4 flex-wrap"  id="filter_by_ages">
                            <li><a href="javascript:void(0);" class="active" data-slug="">All Ages</a></li>
                            <?php foreach ($terms_ages as $term_class) : ?>
                                <li><a href="javascript:void(0);" data-slug="<?php echo esc_html($term_class->slug); ?>" data-click="ages"><?php echo esc_html($term_class->name); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                      <div class="content-sec">
                        <?php if($recreational_posts->have_posts()){ ?>
                         <ul class="list-unstyled p-0" id="recreational_wrapper">
                                <?php  include('template-program_loop.php'); ?>
                                <li id="explore_by_age">
                                    <a href="javascript:void(0);" class="wrap-disciplin-box changes-tabs">
                                        <h6>Explore our <br> classes by age</h6>
                                        <span class="circle-arrow"></span>
                                    </a>
                                </li>
                                <li id="explore_by_classes">
                                    <a href="javascript:void(0);" class="wrap-disciplin-box changes-tabs">
                                        <h6>Explore our classes <br> by discipline</h6>
                                        <span class="circle-arrow"></span>
                                    </a>
                                </li>
                         </ul>
                         <?php } ?>
                         <div class="btn-main-div">
                            <?php 
                            if (!empty($recreational_programs_cta['url']) && $recreational_programs_cta['title']) {
                                echo '<a href="' . $recreational_programs_cta['url'] . '" class="theme-btn">' . $recreational_programs_cta['title'] . '</a>';
                            }
                            ?>
                         </div>
                      </div>
                   </div>
                   <?php 
                   $wanna_title     = get_field('wanna_title');
                   $wanna_sub_title = get_field('wanna_sub_title');
                   $wanna_texts     = get_field('wanna_texts');
                   $wanna_button    = get_field('wanna_button');
                   $wanna_posts     = get_field('wanna_posts');
                   ?>
                    <div class="competitive-programs" id="<?php echo $wanna_title_copy_join; ?>">
                        <div class="our-facility-img-text">
                            <div class="row gx-xl-2 row-gap-4">
                                <div class="col-md-5 pe-xl-5">
                                    <?php if(!empty($wanna_title)){ echo '<h2>'.$wanna_title.'</h2>'; } ?>                                    
                                </div>
                                <div class="col-md-7">
                                    <?php
                                     if(!empty($wanna_sub_title)){ echo '<h4>'.$wanna_sub_title.'</h4>'; } 
                                     if(!empty($wanna_texts)){ echo $wanna_texts; } 
                                    if (!empty($wanna_button['url']) && $wanna_button['title']) {
                                        echo '<a href="' . $wanna_button['url'] . '" class="theme-btn">' . $wanna_button['title'] . '</a>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php if(!empty($wanna_posts)){ ?>
                        <div class="feature-slider">
                            <?php foreach($wanna_posts as $competitive_detils){ 
                                $competitive_id    = $competitive_detils->ID;
                                $competitive_title = get_the_title($competitive_id);
                                $thumbnail_id      = get_post_thumbnail_id( $competitive_id );
                                $permalink         = get_the_permalink($competitive_id);
                                $term_obj_list     = get_the_terms( $competitive_id, 'ages' );
                                $terms_string      = join(', ', wp_list_pluck($term_obj_list, 'name'));
                                ?>
                            <a href="<?php echo get_the_permalink($competitive_id); ?>" class="slider-items">
                                <div class="tag-age">
                                    <?php echo $terms_string; ?>
                                </div>
                                <div class="wrap-img-feature">
                                    <?php if(!empty($thumbnail_id)){ echo wp_get_attachment_image($thumbnail_id , 'full' , '' , array('class' => '', 'alt' => '')); } ?>
                                </div>
                                <div class="wrap-title-items">
                                    <?php if(!empty($competitive_title)){ echo '<h6>'.$competitive_title.'</h6>'; } ?>
                                </div>
                            </a>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                    <?php 
                    $why_choose_title = get_field('why_choose_title');
                    $why_choose_texts = get_field('why_choose_texts');
                    $why_choose_left_button = get_field('why_choose_left_button');
                    $why_choose__right = get_field('why_choose__right');
                    ?>
                   <div class="why-choose one_column_text" id="<?php echo $why_choose_section_name_join; ?>">
               
                            <div class="content-block">
                                <?php 
                                    if(!empty($why_choose_title)){ echo '<h2>'.$why_choose_title.'</h2>'; }
                                    if(!empty($why_choose_texts)){ echo $why_choose_texts; }
                                ?>
                                   <div class="btn-div">
                                    <?php 
                                    if (!empty($why_choose_left_button['url']) && $why_choose_left_button['title']) {
                                        echo '<a href="' . $why_choose_left_button['url'] . '" class="theme-btn">' . $why_choose_left_button['title'] . '</a>';
                                    }
                                    if (!empty($why_choose__right['url']) && $why_choose__right['title']) {
                                        echo '<a href="' . $why_choose__right['url'] . '" class="theme-btn border-btn">' . $why_choose__right['title'] . '</a>';
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