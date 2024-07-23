
<?php 
$party_left_main_image = get_field('party_left_main_image');
$party_tab_types = get_field('party_tab_types');
$party_right_side_title = get_field('party_right_side_title');
$party_right_side_texts = get_field('party_right_side_texts');
$party_right_side_button = get_field('party_right_side_button');
$party_right_side_button_dark = get_field('party_right_side_button_dark');
?>
<div class="party-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-4 order-lg-1 order-1">
                <div class="wrap-party-img">
                    <?php if(!empty($party_left_main_image)){echo wp_get_attachment_image($party_left_main_image['ID'], 'full');} ?>
                </div>
            </div>
            <div class="col-md-12 col-lg-3 order-lg-2 order-3">
                <div class="wrap-part-services">
                    <?php 
                    if(!empty($party_tab_types)){
                        foreach($party_tab_types as $party_tab_type){
                            $Prty_Tab_Icon = $party_tab_type['Prty_Tab_Icon'];
                            $party_tab_title = $party_tab_type['party_tab_title'];
                            ?>
                            <div class="d-flex party-services align-items-center">
                                <?php if(!empty($Prty_Tab_Icon)){echo wp_get_attachment_image($Prty_Tab_Icon['ID'] , 'full');} ?>
                                <?php if(!empty($party_tab_title)){echo '<h6>'.$party_tab_title.'</h6>';} ?>
                            </div>  
                            <?php
                        }
                    }
                    ?>
                   
                </div>

            </div>
            <div class="col-md-6 col-lg-5 col-xxl-4 order-lg-3 order-2">
                <div class="title-box">
                    <?php if(!empty($party_right_side_title)){echo '<h2>'.$party_right_side_title.'</h2>';} ?> 
                    <?php if(!empty($party_right_side_texts)){echo  wpautop($party_right_side_texts);} ?>
                    <div class="d-flex gap-2 flex-wrap">
                        <?php if(!empty($party_right_side_button)){echo '<a class="theme-btn" href="'.$party_right_side_button['url'].'">'.$party_right_side_button['title'].'</a>';} ?>
                        <?php if(!empty($party_right_side_button_dark)){echo '<a class="theme-btn border-btn" href="'.$party_right_side_button_dark['url'].'">'.$party_right_side_button_dark['title'].'</a>';} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-img-party">
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/06/Isolation_Mode.png" alt="">
    </div>
</div>