<?php 
$our_purpose_title = get_field('our_purpose_title');
$our_purpose_texts = get_field('our_purpose_texts');
?>
<section class="one_column_text">
     <div class="container">
          <div  class="content-block">
            <?php 
            if(!empty($our_purpose_title)){ echo '<h2>'.$our_purpose_title.'</h2>'; }
            if(!empty($our_purpose_texts)){ echo $our_purpose_texts; }
            ?>
               
          </div>
     </div>
</section><!--one_column_tex -->