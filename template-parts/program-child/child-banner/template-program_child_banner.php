<?php 

dd_woocommerce_breadcrumb();

$display_menu                = get_field('display_menu');
$sub_page_banner_title       = get_field('sub_page_banner_title');
$sub_page_banner_small_title = get_field('sub_page_banner_small_title' );
$sub_page_banner_image       = get_field('sub_page_banner_image' );

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
                    if (!empty($sub_page_banner_title)) {
                        echo '<h1>' . $sub_page_banner_title . '</h1>';
                    } else {
                        echo '<h1>' . get_the_title() . '</h1>';
                    }
                    
                    if (!empty($sub_page_banner_small_title)) {
                        echo '<p>' . $sub_page_banner_small_title . '</p>';
                    }

                    $categories = wp_get_post_terms(get_the_ID(), 'ages');
                    foreach ($categories as $category) {
                        $category_name = str_replace("Ages", "", $category->name);
                        echo '<span class="age-btn-tag">' . esc_html($category_name) . ' years</span>';
                    }
                echo '</div>';

                echo '<div class="right-block">';
                    if (!empty($sub_page_banner_image)) {
                        echo '<img src="' . $sub_page_banner_image['url'] . '" alt="">';
                    } else {
                        if (has_post_thumbnail()) {
                            $thumbnail_url = get_the_post_thumbnail_url();
                            echo '<img src="' . $thumbnail_url . '" alt="">';
                        }
                    }
                echo '</div>';
            ?>

        </div>
    </div>
</section><!--innerbanner_sec --->