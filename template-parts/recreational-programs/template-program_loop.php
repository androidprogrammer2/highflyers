<?php while($recreational_posts->have_posts()){ $recreational_posts->the_post();
        $recreational_id        = get_the_ID();
        $recreational_title     = get_the_title($recreational_id);
        $recreational_excerpt   = get_the_excerpt($recreational_id);
        $listing_page_text      = get_field('listing_page_text' , $recreational_id);
        $term_obj_list          = get_the_terms( $recreational_id, 'ages' );
        $terms_string           = join(', ', wp_list_pluck($term_obj_list, 'name'));
        $permalink              = get_the_permalink( $recreational_id );
        $thumbnail_url          = get_the_post_thumbnail_url( $recreational_id );
        ?>
        <li>
            <a href="<?php echo $permalink; ?>" class="wrap-disciplin-box">
                <div class="wrap-dic-img">
                    <?php 
                    if(!empty($thumbnail_url)){
                        echo '<img src="'.$thumbnail_url.'" alt="">';
                    }else{
                    ?>
                    <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/06/f-02.png" alt="">
                    <?php }
                    if(!empty($terms_string)){echo '<span class="age-btn-tag">
                        '.$terms_string.'
                    </span>';}
                    ?>
                </div>
                <div class="wrap-inner-box">
                    <?php 
                    if(!empty($recreational_title)){ echo '<h6>'.$recreational_title.'</h6>'; }
                    if(!empty($recreational_excerpt)){ echo '<p>'.$recreational_excerpt.'</p>'; }
                    ?>
                </div>
                <?php if(!empty($listing_page_text)){

                        echo '<span class="w-100 btn-primary d-block">
                        '.$listing_page_text.'
                    </span>';

                } ?>
            </a>
        </li>
        
     <?php } wp_reset_postdata();