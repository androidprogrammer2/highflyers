
<?php 
$sub_page_texts         = get_field('sub_page_texts');


if(!empty($sub_page_texts)){

foreach($sub_page_texts as $content_details){

    $select_bg              = $content_details['select_bg'];
    $sub_page_title         = $content_details['sub_page_title'];
    $sub_page_small_title   = $content_details['sub_page_small_title'];
    $page_texts             = $content_details['page_texts'];
    $texts_buttons          = $content_details['texts_buttons'];

?>
<section class="one_column_text <?php if($select_bg == 2){echo 'highlight';} ?>">
     <div class="container">
          <div class="content-block">
            <?php 
            if(!empty($sub_page_title)){ echo '<h2>'.$sub_page_title.'</h2>'; } 
            if(!empty($sub_page_small_title)){ echo '<h3>'.$sub_page_small_title.'</h3>'; } 
            if(!empty($page_texts)){ echo $page_texts; } 
            if (!empty($texts_buttons['url']) && $texts_buttons['title']) {
                echo '<a href="' . $texts_buttons['url'] . '" class="theme-btn">' . $texts_buttons['title'] . '</a>';
            }
            ?>
          </div>
     </div>
</section> <!--one_column_text -->

<?php } } ?>