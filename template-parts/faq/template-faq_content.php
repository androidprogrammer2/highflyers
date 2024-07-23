<?php  
$faqs = get_field('faqs');

if(!empty($faqs)){
?>

    <section class="faq-sec">
            <div class="container">
                    <div class="row">    
                        <?php $count = 1; foreach($faqs as $faq_details){
                            $faq_title   = get_the_title($faq_details->ID);    
                            $faq_content = $faq_details->post_content;  

                            if(!empty($faq_title) && !empty($faq_content)){
                                if($count % 6 == 1){ echo '<div class="col-md-6 pe-xl-4"><div class="accordion">'; }
                        ?>
                            <div class="accordion-box <?php echo ($count == 1)?'active':''; ?>">
                                <div class="accordion_question">
                                    <?php echo $faq_title; ?>
                                </div>  
                                <div class="accordion_answer" style="<?php echo ($count == 1)?'display:block;':''; ?>">
                                <?php echo $faq_content; ?>
                                </div>
                            </div>
                        <?php if($count % 6 == 0){ echo '</div></div>'; } } $count++; } if($count % 6 != 1){ echo '</div></div>'; }?>
                    </div>
            </div>
    </section>
<?php }else{ 

    echo '<section class="faq-sec">
    <div class="container"><p>No FAQ found.</p></div></section>';
} ?>