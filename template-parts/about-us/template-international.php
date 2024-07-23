<?php 
$grassroots_title   = get_field('grassroots_title');
$grassroots_texts   = get_field('grassroots_texts');
$grassroots_button  = get_field('grassroots_button');
$grassroots_image   = get_field('grassroots_image');
?>
<section class="the-international-stage">
    <div class="container">
        <div class="column_row">
            <div class="left-column">
                <div class="content-block">
                    <?php 
                    if(!empty($grassroots_title)){ echo '<h2>'.$grassroots_title.'</h2>'; }
                    if(!empty($grassroots_texts)){ echo $grassroots_texts; }
                    if (!empty($grassroots_button['url']) && $grassroots_button['title']) {
                        echo '<a href="' . $grassroots_button['url'] . '" class="theme-btn">' . $grassroots_button['title'] . '</a>';
                    }
                     ?>
                </div>
            </div>
            <div class="right-column">
                 <div class="img-wraper">
                    <?php if(!empty($grassroots_image)){ echo wp_get_attachment_image($grassroots_image['id'] , 'full' , '' , array('class' => '', 'alt' => '')); } ?>
                 </div>
             </div>
        </div>
    </div>
</section><!--the-international-stage -->