<?php /*Template Name: Our Team */

get_header();

get_template_part( 'template-parts/template', 'common_banner' );
get_template_part( 'template-parts/team/template', 'our_team' );
get_template_part( 'template-parts/template', 'above_footer' ); 

?>

<div class="modal team-popup fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-0">
                    <div class="row g-0">
                      <div class="col-md-6">
                            <div class="team-popup-left-content">
                                <h4 class="pop_up_member_name">About <span> </span></h4>
                                <div class="member_content"></div>
                                
                            </div>
                      </div>
                        <div class="col-md-6">
                            <div class="team-popup-right-content ">
                                    <div class="team-popup-img">
                                        <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/06/kasey-popup-img.webp" alt="">
                                    </div>
                                    <div class="team-popup-content">
                                            <div class="top-content">
                                                <div class="author_content">
                                                    <h5 class="pop_up_member_name_right"></h5>
                                                    <h6 class="pop_up_member_designation"></h6>
                                                    <span class="icon pop_up_icon">
                                                        <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/06/gymnastic-rings.png" alt="">
                                                    </span>
                                                </div>
                                            </div>
                                        <div class="bottom-content">
                                                <ul>
                                                    <li class="pop_up_class_name">
                                                        <?php _e('# Classes', 'highflyers'); ?>
                                                        <span></span>
                                                    </li>
                                                    <li class="pop_up_experience">
                                                        <?php _e('Experience', 'highflyers'); ?>
                                                        <span></span>
                                                    </li>
                                                    <li class="pop_up_qulification">
                                                        <?php _e('qualification', 'highflyers'); ?>
                                                        <span></span>
                                                    </li>
                                            </ul>
                                            <div class="decp team_descriptions">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>`
</div>


<?php echo get_footer();?>