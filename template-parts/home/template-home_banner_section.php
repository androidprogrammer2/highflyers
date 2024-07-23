<?php
$banner_title = get_field('banner_title');
$banner_sub_title = get_field('banner_sub_title');
$banner_texts = get_field('banner_texts');
$banner_image = get_field('banner_image');
$banner_card = get_field('banner_card');
$banner_feature_posts = get_field('banner_feature_posts');
$banner_background_text = get_field('banner_background_text');
?>
<div class="banner-main-sec">
    <?php 
    if(!empty($banner_background_text)){
        echo '<div class="big-text-main">';
        foreach($banner_background_text as $text){
            echo '<h2 class="big-text">'.$text['add_text'].'</h2>';
        }
        echo '</div>';
    }
    ?>
    <div class="shap-banner"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-lg-1 order-2">
                <div class="banner-info">
                        <?php if(!empty($banner_title)){echo '<h1>'.$banner_title.'</h1>';} ?>
                        <?php if(!empty($banner_sub_title)){echo '<h3>'.$banner_sub_title.'</h3>';} ?>
                        <?php if(!empty($banner_texts)){echo wpautop($banner_texts);} ?>
                </div>
            </div>
            <div class="col-lg-5 order-lg-2 order-1">
                <div class="wrap-banner-img">
                    <img src="<?php echo $banner_image['url']; ?>" alt="">
                </div>
            </div>
            <div class="col-lg-9 order-lg-3 order-3">
                <div class="wrap-banner-link d-flex gap-4 flex-wrap">
                    <?php 
                    if(!empty($banner_card)){
                        foreach($banner_card as $banner_cards){
                            $banner_card_title = $banner_cards['banner_card_title'];
                            $banner_card_links = $banner_cards['banner_card_links'];
                            ?>
                                <a href="<?php echo $banner_card_links['url'];?>" class="d-flex" id="<?php echo $banner_card_links['title'];?>">
                                    <?php if(!empty($banner_card_title)){echo '<h4>'.$banner_card_title.'</h4>';} ?>
                                    <span class="circle-arrow"></span>
                                </a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>