<?php 
$it_work_title = get_field('it_work_title');
$it_work_texts = get_field('it_work_texts');
?>
<section class="one_column_bg_sec">
      <div class="container">
           <div class="content-block">
           <?php 
            if(!empty($it_work_title)){ echo '<h2>'.$it_work_title.'</h2>'; }
            if(!empty($it_work_texts)){ echo $it_work_texts; }
            ?>
           </div>
      </div>
</section><!--one_column_bg_sec -->