<?php 

dd_woocommerce_breadcrumb();

$display_menu                = get_field('display_menu');
$sub_page_banner_title       = get_field('sub_page_banner_title');
$sub_page_banner_small_title = get_field('sub_page_banner_small_title');
$sub_page_banner_button      = get_field('sub_page_banner_button');
$sub_page_banner_image       = get_field('sub_page_banner_image');
$google_review_image         = get_field('google_review_image');

?>
<section class="innerbanner_sec">
    <div class="innerbanner_main">
        <div class="container">
            <div class="inner-menu">
                <?php if($display_menu != 0){ ?>
                    <nav id="site-navigation" class="main-navigation">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-4',
                                'menu_id' => 'bannermenu',
                            )
                        );
                        ?>
                    </nav>
                <?php } ?>
            </div>
            
            <?php
                echo '<div class="innerbanner-content">';
                    if(!empty($sub_page_banner_title)){ echo '<h1>'.$sub_page_banner_title.'</h1>'; } 
                    if(!empty($sub_page_banner_small_title)){ echo '<p>'.$sub_page_banner_small_title.'</p>'; } 

                    if (!empty($sub_page_banner_button['url']) && $sub_page_banner_button['title']) {
                        echo '<a href="' . $sub_page_banner_button['url'] . '" class="theme-btn">' . $sub_page_banner_button['title'] . '</a>';
                    }
                    if(!empty($google_review_image)){
                        echo '<div class="google_review">';
                            echo '<img src="'.$google_review_image['url'].'" alt="">';
                        echo '</div>';
                    }
                echo '</div>';

                
                echo '<div class="right-block">';
                    if(!empty($sub_page_banner_image)){
                        echo '<img src="'.$sub_page_banner_image['url'].'" alt="">';
                    }
                echo '</div>';
                
            ?>
        </div>
    </div>
</section><!--innerbanner_sec --->