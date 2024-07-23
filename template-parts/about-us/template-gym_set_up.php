<?php 
$best_gym_title         = get_field('best_gym_title');
$best_gym_texts         = get_field('best_gym_texts');
$conent_expload 	= implode(' ', array_slice(explode(' ', $best_gym_texts), 80));
$trim_content  		= wp_trim_words($best_gym_texts , '80','<span class="dots">...</span>');
$best_gym_read_more     = get_field('best_gym_read_more');
$best_gym_dark_button   = get_field('best_gym_dark_button');
$best_gym_image         = get_field('best_gym_image');
?>
<section class="gym-set-up">
     <div class="container">
         <div class="column_row">
             <div class="left-column">
                <div class="content-block">
                    <?php
                     if(!empty($best_gym_title)){ echo '<h2>'.$best_gym_title.'</h2>'; }
                      echo '<div class="text-block">';
                     if(!empty($best_gym_texts)){ echo $best_gym_texts; } 
                     echo '</div>';
                     ?>
                    <div class="btn-div">
                        <?php 
                        if(str_word_count($best_gym_texts) > 40){
                         
                            if (!empty($best_gym_read_more['title'])) {
                                echo '<a href="javascript:void(0);" class="read-more">' . $best_gym_read_more['title'] . ' <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.7803 0.719668C10.0732 1.01256 10.0732 1.48744 9.7803 1.78033L5.53033 6.0303C5.23744 6.3232 4.76256 6.3232 4.46967 6.0303L0.219668 1.78033C-0.0732225 1.48744 -0.0732225 1.01256 0.219668 0.719668C0.512558 0.426777 0.987438 0.426777 1.28033 0.719668L5 4.43934L8.7197 0.719668C9.0126 0.426777 9.4874 0.426777 9.7803 0.719668Z" fill="#24292E"/>
                                </svg></a>';
                            }
                        }
                        if (!empty($best_gym_dark_button['url']) && $best_gym_dark_button['title']) {
                            echo '<a href="' . $best_gym_dark_button['url'] . '" class="theme-btn">' . $best_gym_dark_button['title'] . '</a>';
                        }
                        ?>
                    </div>
                </div>
             </div>
             <div class="right-column">
                 <div class="img-wraper">
                    <?php if(!empty($best_gym_image)){ echo wp_get_attachment_image($best_gym_image['id'] , 'full' , '' , array('class' => '', 'alt' => '')); } ?>
                 </div>
             </div>
         </div>
     </div>
</section><!--gym-set-up -->