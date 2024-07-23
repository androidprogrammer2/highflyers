<?php 
$inclusive__title   = get_field('inclusive__title');
$inclusive__texts   = get_field('inclusive__texts');
$inclusive__button  = get_field('inclusive__button');
?>
<section class="all-abilities bottom-shape">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xl-4">
                <div class="title_with_btn mb-4 mb-md-0">
                    <?php 
                    if(!empty($inclusive__title)){ echo '<h2 class="mb-4">'.$inclusive__title.'</h2>'; }
                    if (!empty($inclusive__button['url']) && $inclusive__button['title']) {
                        echo '<a href="' . $inclusive__button['url'] . '" class="theme-btn">' . $inclusive__button['title'] . '</a>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-7 col-xl-8">
                <div class="content-block">
                    <?php if(!empty($inclusive__texts)){ echo $inclusive__texts; } ?>
                </div>
            </div>
        </div>
    </div>
</section><!--all-abilities -->