<?php 
$the_nitty_gritty_title = get_field('the_nitty_gritty_title');
$the_nitty_gritty_texts = get_field('the_nitty_gritty_texts');
$the_nitty_gritty_image = get_field('the_nitty_gritty_image');
$the_nitty_gritty_button= get_field('the_nitty_gritty_button');
?>
<section class="gym-set-up">
     <div class="container">
         <div class="column_row">
             <div class="left-column">
                <div class="content-block">
                    <?php 
                    if(!empty($the_nitty_gritty_title)){ echo '<h2>'.$the_nitty_gritty_title.'</h2>'; }
                    if(!empty($the_nitty_gritty_texts)){ echo $the_nitty_gritty_texts; }
                    if (!empty($the_nitty_gritty_button['url']) && $the_nitty_gritty_button['title']) {
                        echo '<div class="btn-div"><a href="' . $the_nitty_gritty_button['url'] . '" class="theme-btn">' . $the_nitty_gritty_button['title'] . '</a></div>';
                    }
                    ?>
                </div>
             </div>
             <div class="right-column">
                 <div class="img-wraper">
                    <?php if(!empty($the_nitty_gritty_image)){ echo wp_get_attachment_image($the_nitty_gritty_image['id'] , 'full' , '' , array('class' => '', 'alt' => '')); } ?>
                 </div>
             </div>
         </div>
     </div>
</section><!--gym-set-up -->