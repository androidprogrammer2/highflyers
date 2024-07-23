<?php echo get_header();?>

<?php

dd_woocommerce_breadcrumb();
$post_id        = get_the_ID();
$categories     = get_the_category();
$image          = "";
$thumbnail_url  = get_the_post_thumbnail_url( $post_id );
$category_list  = join( ', ', wp_list_pluck( $categories, 'name' ) );
$dummy_image    = home_url().'/wp-content/uploads/2024/07/New-Project.png';

    if(!empty($thumbnail_url)){
        $image = $thumbnail_url;
    }else{
        $image = $dummy_image;
    }

?>
<section class="innerbanner_sec">
    <div class="innerbanner_main">
        <div class="container">
            <div class="inner-menu">
            </div>
            <div class="innerbanner-content">
                <?php
                if(!empty($category_list)){ echo '<h5>'.$category_list.'</h5>'; } 
                echo '<h1>'.get_the_title().'</h1>';
                ?>
                <div class="social-share share-post">
                    <p><?php _e('share post' , 'highflyers'); ?></p>
                    <?php echo do_shortcode( '[Sassy_Social_Share]' ); ?>
                        <a href="javascript:void(0);" id="copy_url" class="copy_url">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link.svg" alt="">
                        </a>
                        <p class="copied_text" style="display:none; color:green; margin-left:10px;font-size:15px;"><?php _e('URL copied!','highflyers'); ?></p>
                    </ul>
                </div>
            </div>
            <div class="right-block">
                 <img src="<?php echo $image; ?>" alt=""> 
            </div>
        </div>
    </div>
</section><!--innerbanner_sec --->

<section class="single-blog">
     <div class="container">
         <div class="row justify-content-center">
              <div class="col-md-12 col-lg-10 col-xl-8">
                   <div class="text-block">
                       <?php the_content(); ?>                    
                        <a href="<?php echo home_url('/blog/'); ?>" class="theme-btn"><?php _e('Back to the blogs' , 'highflyers'); ?></a>
                   </div>
              </div>
         </div>
     </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body p-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         <div class="modal-video">
              <iframe id="video" width="100%" height="315" src="https://www.youtube.com/embed/9VsEAEX6C9Q?si=V_Rnfc0nSRpMpzaR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
         </div>
      </div>
    </div>
  </div>
</div>