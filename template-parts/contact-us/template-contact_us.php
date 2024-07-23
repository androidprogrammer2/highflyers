<?php 
$get_in_title = get_field('get_in_title');
$stay_title = get_field('stay_title');
?>
<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-8">
                 <div class="contact-us-form">
                    <?php echo do_shortcode('[gravityform id="1" title="true" ajax="true"]'); ?>    
                 </div>
            </div>
            <div class="col-md-5 col-lg-4 footer mt-4 mt-md-0">
                 <div class="contact-info">
                       <div class="info-wrap-main">
                        <?php if(!empty($get_in_title)){ echo '<h4 class="footer-info-title">'.$get_in_title.'</h4>'; } ?>
                           
                           <a class="d-block" href="mailto:<?php echo do_shortcode( '[tap-to-email]' ); ?>">
                               <img src="<?php echo home_url( '/wp-content/themes/highflyers/assets/images/mail.svg' ); ?>" alt="" />
                               <span><?php echo do_shortcode( '[tap-to-email]' ); ?></span>
                           </a>
                           <a class="d-block" href="tel:<?php echo do_shortcode( '[tap-to-telephone]' ); ?>">
                               <img src="<?php echo home_url('/wp-content/themes/highflyers/assets/images/Phone.svg') ?>" alt="" />
                               <span><?php echo do_shortcode( '[tap-to-telephone]' ); ?></span>
                           </a>
                           <?php $address = get_field('address' , 'option'); ?>
                           <a target="_blank" class="d-block" href="<?php echo $address['url']; ?>">
                               <img src="<?php echo home_url('/wp-content/themes/highflyers/assets/images/location.png') ?>" alt="" />
                               <span><?php echo $address['title']; ?></span>
                           </a>
                       </div>
                       <?php 
                       if(!empty($stay_title)){ echo '<h4 class="footer-info-title">'.$stay_title.'</h4>'; }
                       ?>
                        <?php echo  do_shortcode( '[social-icons-header]' ); ?>
                 </div>
            </div>
        </div>
    </div>
</section>