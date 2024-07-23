<?php /*Template Name: Single Blog */?>
<?php echo get_header();?>

<div class="breadcrumb-sec">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Blog</a></li>
            <li class="breadcrumb-item active">10 Golden Rules of Gymnastics</li>
        </ul>
    </div>
</div>
<section class="innerbanner_sec">
    <div class="innerbanner_main">
        <div class="container">
            <div class="inner-menu">
                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-4',
                            'menu_id' => 'bannermenu',
                        )
                    );
                    ?>
                </nav>
            </div>
            <div class="innerbanner-content">
                <h5>Article</h5>
                <h1>10 Golden Rules of Gymnastics</h1>
                <!-- <a href="#" class="theme-btn">Book Online</a> -->
                <!-- <div class="google_review">
                    <img src="<?php // echo get_home_url();?>/wp-content/uploads/2024/06/google-review.png" alt="">
                </div> -->
                <!-- <div class="share-post">
                    <p>Share Post</p>
                    <ul>
                        <li><a href="#"><img src="<?php // echo get_template_directory_uri();?>/assets/images/facebook.svg" alt=""></a></li>
                        <li><a href="#"><img src="<?php // echo get_template_directory_uri();?>/assets/images/linkdin.svg" alt=""></a></li>
                        <li><a href="#"><img src="<?php // echo get_template_directory_uri();?>/assets/images/twitter.svg" alt=""></a></li>
                        <li><a href="#"><img src="<?php // echo get_template_directory_uri();?>/assets/images/link.svg" alt=""></a></li>
                    </ul>
                </div> -->
                <div class="social-share share-post">
                    <p><?php _e('share post' , 'harness_master_nsw'); ?></p>
                    <?php echo do_shortcode( '[Sassy_Social_Share]' ); ?>
                        <a href="javascript:void(0);" id="copy_url" class="copy_url">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/link.svg" alt="">
                        </a>
                        <p class="copied_text" style="display:none; color:green; margin-left:10px;font-size:15px;"><?php _e('URL copied!','harness_master_nsw'); ?></p>
                    </ul>
                </div>
            </div>
            <div class="right-block">
                 <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/06/about-us-banner-1.webp" alt=""> 
            </div>
        </div>
    </div>
</section><!--innerbanner_sec --->

<section class="single-blog">
     <div class="container">
         <div class="row justify-content-center">
              <div class="col-md-12 col-lg-10 col-xl-8">
                   <div class="text-block">
                       <p>Recognising the long-term severe physical and mental issues that can arise from how bodies are talked about and treated in sport, Gymnastics Australia has released Body Care, an authentic athlete-centred approach to re-writing the narrative about the way bodies are treated and talked about in gymnastics.”</p>
                        <div class="video-post">
                            <div class="video-wrapper" style="background-image:url('')">
                                <img src="<?php echo get_home_url();?>/wp-content/uploads/2024/06/video-post.png" alt="">
                                 <button type="button" class="play-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                </button>
                            </div>
                        </div>
                       <p>For more information on Body Care,<a href="#"><strong> click here.</strong></a></p>

                        <p>Hey there Team!</p>
                        <p>Here is a snippet of the Gymnastics Western Australia las post about FIG’s new unveiling of the <strong>10 Golden Rules of Gymnastics:</strong> </p>
                        <p>The <strong>International Gymnastics Federation </strong>  (FIG) has unveiled the <strong>10 Golden Rules of Gymnastics</strong>  an awareness campaign providing principles for participation with the goal of ensuring “a safe and respectful environment”.</p>
                        <p>The campaign aims to raise awareness of youth protection and the fight against abuse of any kind; to remind everyone that mental and physical health comes first in all cases and to build a respectful, positive environment in gymnastics.</p>
                        <p>Athletes, coaches and officials provided feedback on early drafts and the 10 Golden Rules have been refined by the Safeguarding Working Group which includes 15 current or former athletes.</p>
                        <h3>The 10 Golden Rules of Gymnastics:</h3>
                        <ul>
                            <li>I do gymnastics for fun</li>
                            <li>I pursue my own dreams, not someone else’s</li>
                            <li>I know that I will have good days and tough days</li>
                            <li>I listen to my body</li>
                            <li>I balance my passion for gymnastics with other big goals in my life</li>
                            <li>My health is more important than medals</li>
                            <li>I have the right to be respected as I am</li>
                            <li>I have the right to express myself freely, be heard and be treated fairly</li>
                            <li>I understand and respect the roles of the people around me</li>
                            <li>I act with fairness and integrity</li>
                        </ul>
                        <p><strong>FIG outlines that this campaign is the first of many steps.</strong></p>
                        <blockquote>“As new generations of athletes and coaches show a strong will for change, the FIG is committed to supporting this positive shift of mentalities and leading all initiatives that contribute to not tolerating anymore the old, authoritarian training methods – however successful they might have been in the past.”</blockquote>
                        <p><strong>A press release from the FIG states</strong></p>
                        <blockquote>“Although mentalities cannot be changed overnight with a magic wand, building a positive culture in sport is everyone’s business.”</blockquote>
                        <p>For further information, posters and a video of “The 10 Golden Rules of Gymnastics” <a href="#"><strong>click here.</strong></a></p>
                        <a href="#" class="theme-btn">Back to the blogs</a>
                   </div>
              </div>
         </div>
     </div>
</section>

<?php echo get_footer();?>

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
<script>


</script>