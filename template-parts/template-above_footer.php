<?php 
$questions_title      = get_field('questions_title');
$questions_sub_title  = get_field('questions_sub_title');
$questions_button     = get_field('questions_button');
?>
<section class="get_in_touch">
     <div class="container">
        <div class="get_in_touch-blog">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="content-block">
                        <?php
                        if(!empty($questions_title)){ echo '<h2>'.$questions_title.'</h2>'; } 
                        if(!empty($questions_sub_title)){ echo '<p>'.$questions_sub_title.'</p>'; } 
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <?php if (!empty($questions_button['url']) && $questions_button['title']) {
                        echo '<a href="' . $questions_button['url'] . '" class="theme-btn">' . $questions_button['title'] . '</a>';
                    } ?>
                </div>
            </div>
        </div>
     </div>
</section> <!--get_in_touch -->
