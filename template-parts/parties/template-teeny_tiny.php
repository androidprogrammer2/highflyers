<?php 
$_copy = get_field('_copy');
$teeny_tiny_texts = get_field('teeny_tiny_t&c’s_texts');
?>
<section class="one_column_text">
     <div class="container">
          <div  class="content-block">
          <?php 
            if(!empty($_copy)){ echo '<h2>'.$_copy.'</h2>'; }
            if(!empty($teeny_tiny_texts)){ echo $teeny_tiny_texts; }
            ?>
          </div>
     </div>
</section><!--one_column_tex -->