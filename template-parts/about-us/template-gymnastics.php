<?php 
$wonderful_Title = get_field('wonderful_Title');
$wonderful_texts = get_field('wonderful_texts');
$wonderful_image = get_field('wonderful_image');
?>
<section class="gymnastics gym-set-up">
     <div class="container">
         <div class="column_row">
             <div class="left-column">
                <div class="content-block">
                    <?php 
                        if(!empty($wonderful_Title)){ echo '<h2>'.$wonderful_Title.'</h2>'; } 
                        if(!empty($wonderful_texts)){ echo $wonderful_texts; } 
                    ?>
                </div>
             </div>
             <div class="right-column">
                 <div class="img-wraper">
                    <?php 
                    if(!empty($wonderful_image)){
                        echo wp_get_attachment_image($wonderful_image['id'] , 'full');
                    }
                    ?>
                 </div>
             </div>
         </div>
     </div>
</section><!--gymnastics -->