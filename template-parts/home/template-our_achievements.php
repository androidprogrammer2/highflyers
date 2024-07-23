<?php 
$achievements = get_field('achievements');

if(!empty($achievements)){
?>
<!-- our achievements -->
<div class="our-achievements-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled m-0 achievements-wrap">
                    <?php 
                    foreach($achievements as $achievements_details){
                        $achievements_number = $achievements_details['achievements_number'];
                        $achievements_texts = $achievements_details['achievements_texts'];
                    ?>
                    <li>
                        <div class="d-flex align-items-center">
                            <span class="count-number">
                               <?php echo $achievements_number; ?>
                            </span>
                            <span class="text-achiv"><?php echo $achievements_texts; ?></span>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php } ?>