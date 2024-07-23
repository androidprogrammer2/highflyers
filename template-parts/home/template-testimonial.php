<?php 
$scorecard_title        = get_field('scorecard_title');
$scorecard_texts        = get_field('scorecard_texts');
$scorecard_buttons      = get_field('scorecard_buttons');
$scorecard_buttons_text = get_field('scorecard_buttons_text');
?>
<!-- Testimonial -->
<div class="testimonial-sec">
    <div class="container ">
        <div class="row">
            <div class="col-md-7">
                <div class="title-box">
                    <?php 
                    if(!empty($scorecard_title)){ echo '<h2>'.$scorecard_title.'</h2>'; }
                    if(!empty($scorecard_texts)){ echo $scorecard_texts; }
                    ?>
                </div>
            </div>
            <?php if(!empty($scorecard_buttons['title']) && !empty($scorecard_buttons['url'])){ ?>
            <div class="col-md-5 justify-content-end ">
                <div class="all-class-arrow d-flex gap-3 d-md-flex d-none">
                    <div class="wrap-all-class">
                        <div class="text-arrow-main"><?php echo $scorecard_buttons['title']; ?></div>
                        <div class="text-dec"><?php echo $scorecard_buttons_text; ?></div>
                    </div>
                    <a href="<?php echo $scorecard_buttons['url']; ?>"  class="circle-arrow"></a>
                </div>
            </div>
            <?php } ?>
            <div class="col-lg-12">
                <div class="slider-testimonial">
                    <div class="elfsight-app-5979efb8-ead2-40db-8b56-dc95e9ebb0b6" data-elfsight-app-lazy></div>
                </div>
            </div>
            <?php if(!empty($scorecard_buttons['title']) && !empty($scorecard_buttons['url'])){ ?>
            <div class="col-lg-12">
                <div href="" class="all-class-arrow d-flex gap-3 d-md-none">
                    <div class="wrap-all-class">
                        <div class="text-arrow-main"><?php echo $scorecard_buttons['title']; ?></div>
                        <div class="text-dec"><?php echo $scorecard_buttons_text; ?></div>
                    </div>
                    <a href="<?php echo $scorecard_buttons['url']; ?>" class="circle-arrow"></a>
               </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>