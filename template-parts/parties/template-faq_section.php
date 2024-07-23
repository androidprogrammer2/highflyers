<?php 
$parties_faqs_title = get_field('parties_faqs_title');
$parties_faqs = get_field('parties_faqs');
$map_location = get_field('map_location');
?>
<section class="faq-sec">
     <div class="container">
         <div class="title-block">
            <?php 
            if(!empty($parties_faqs_title)){ echo '<h2>'.$parties_faqs_title.'</h2>'; }
            ?>
         </div>
         <?php if(!empty($parties_faqs)){ 
            ?>
            <div class="accordion">
                <?php foreach($parties_faqs as $key => $faq_details){
                    $faq_title   = get_the_title($faq_details->ID);    
                    $faq_content = $faq_details->post_content;  
                    ?>
                    <div class="accordion-box <?php echo ($key == 0)? 'active':''; ?>">
                        <div class="accordion_question ">
                            <?php echo $faq_title; ?>
                        </div>  
                        <div class="accordion_answer" style="<?php echo ($key == 0)? 'display:block':''; ?>">
                            <?php echo $faq_content; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
         <?php } ?>
     </div>
</section><!--faq-sec -->

<section class="simple-map-sec">
     <div class="container">
          <div class="simple-map">
            <?php echo $map_location; ?>
          </div>
     </div>
</section><!--simple-map-sec -->