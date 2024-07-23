<?php
$flyers_section_name = get_field('flyers_section_name');
$how_much_section_name = get_field('how_much_section_name');
$glance_section_name = get_field('glance_section_name');
$book_now_section_name = get_field('book_now_section_name');

?>
<section class="programs-sec">
     <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block col-xl-2">
                <div class="team_nav">
                     <ul>
                         <li class="active"> <a href="#why-choose"><?php echo  $flyers_section_name;?></a></li>
                         <li> <a href="#program-cost"><?php echo $how_much_section_name; ?></a></li>
                         <li><a href="#program-details"><?php echo $glance_section_name; ?></a></li>
                         <li><a href="#book-online"><?php echo  $book_now_section_name;?></a></li>
                     </ul>
                </div>
            </div>
            <div class="col-lg-9 col-xl-10">
              <div class="recreational-programs-wrap button_shape">
                    <div class="why-choose one_column_text" id="why-choose">
                        <?php 
                        $flyers_title = get_field('flyers_title');
                        $flyers_wrapper = get_field('flyers_wrapper');
                        ?>
                        <div class="wcp-top">
                            <div class="row">
                                <div class="col-md-6 pe-xl-4 mb-4 mb-md-0">
                                    <div class="title_block">
                                        <?php if(!empty($flyers_title)){echo '<h2>'.$flyers_title.'</h2>';} ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="content-block">
                                        <?php 
                                        if(!empty($flyers_wrapper)){
                                            foreach($flyers_wrapper as $flyers_wrappers){
                                                $flyers_wrapper_title = $flyers_wrappers['flyers_wrapper_title'];
                                                $flyers_wrapper_texts = $flyers_wrappers['flyers_wrapper_texts'];
                                                ?>
                                                <?php if(!empty($flyers_wrapper_title)){echo '<h4>'.$flyers_wrapper_title.'</h4>';} ?>
                                                <?php if(!empty($flyers_wrapper_texts)){echo wpautop($flyers_wrapper_texts);} ?>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 
                        $flyers_image = get_field('flyers_image');
                        $recreational_title = get_field('recreational_title');
                        $dark_recreational_title = get_field('dark_recreational_title');
                        $recreational_texts = get_field('recreational_texts');
                        $dark_recreational_texts = get_field('dark_recreational_texts');
                        ?>
                        <div class="wcp-middle">
                            <div class="row">
                                <div class="col-md-6 pe-xl-4 mb-4 mb-md-0">
                                     <div class="img-wrap">
                                        <?php if(!empty($flyers_image)){echo wp_get_attachment_image($flyers_image['ID'] , 'full');} ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="content-block">
                                        <?php if(!empty($recreational_title)){echo '<h3>'.$recreational_title.'</h3>';} ?>
                                        <?php if(!empty($recreational_texts)){echo wpautop($recreational_texts);} ?>
                                        <div class="attention">
                                            <?php if(!empty($dark_recreational_title)){echo '<h3>'.$dark_recreational_title.'</h3>';} ?>
                                            <?php if(!empty($dark_recreational_texts)){echo wpautop($dark_recreational_texts);} ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 
                        $gymtastic_experience_title     = get_field('gymtastic_experience_title');
                        $gymtastic_experience_texts     = get_field('gymtastic_experience_texts');
                        $gymtastic_experience_button    = get_field('gymtastic_experience_button');
                        $gymtastic_experience_second_button    = get_field('gymtastic_experience_second_button');
                        ?>
                        <div class="wcp-middle gymtastic-experience">
                            <div class="row align-items-center">
                                <div class="col-md-7 mb-4 mb-md-0">
                                    <div class="title-block">
                                        <?php if(!empty($gymtastic_experience_title)){echo '<h2>'.$gymtastic_experience_title.'</h2>';} ?>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                     <div class="content-block">
                                         <?php if(!empty($gymtastic_experience_texts)){echo wpautop($gymtastic_experience_texts);} ?>
                                         <?php if(!empty($gymtastic_experience_button['url']) && !empty($gymtastic_experience_button['title']))
                                         {echo '<a href="'.$gymtastic_experience_button['url'].'" class="theme-btn">'.$gymtastic_experience_button['title'].'</a>';} ?>
                                         <?php if(!empty($gymtastic_experience_second_button['url']) && !empty($gymtastic_experience_second_button['title']))
                                         {echo '<a href="'.$gymtastic_experience_second_button['url'].'" class="theme-btn">'.$gymtastic_experience_second_button['title'].'</a>';} ?>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php 
                    $how_much_table = get_field('how_much_table');
                    $how_much_title = get_field('how_much_title');
                    $how_much_texts = get_field('how_much_texts');
                    ?>
                    <div class="program-cost-sec" id="program-cost">
                         <div class="row">
                             <div class="col-md-5">
                                  <div class="content-block">
                                      <?php if(!empty($how_much_title)){echo '<h2>'.$how_much_title.'</h2>';} ?>
                                      <?php if(!empty($how_much_texts)){echo wpautop($how_much_texts);} ?>
                                  </div>
                             </div>
                                <div class="col-md-7">
                                    <div class="program-cost">
                                        <table>
                                            <tbody>
                                                <?php 
                                                    if(!empty($how_much_table)){
                                                        foreach($how_much_table as $how_much_tables){
                                                            $table_title_group = $how_much_tables['table_title_group'];
                                                            $how_much_table_data = $how_much_tables['how_much_table_data'];
                                                            $how_table_title = $table_title_group['how_table_title'];
                                                            $how_table_subtitle = $table_title_group['how_table_subtitle'];
                                                            ?>
                                                                <tr>
                                                                    <th>
                                                                        <?php if(!empty($how_table_title)){echo '<h6>'.$how_table_title.'</h6>';} ?>
                                                                        <?php if(!empty($how_table_subtitle)){echo '<p>'.$how_table_subtitle.'</p>';} ?>

                                                                    </th>
                                                                    <td>
                                                                        <?php if(!empty($how_much_table_data)){echo $how_much_table_data;} ?>
                                                                    </td>
                                                                </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                         </div>
                    </div>


                    <?php 
                    $glance__title = get_field('glance__title');
                    $glance_table = get_field('glance_table');
                    ?>
                    <div class="program-details" id="program-details">
                        <?php if(!empty($glance__title)){echo '<h2>'.$glance__title.'</h2>';} ?>
                        <table>
                             <tbody>
                                  <?php 
                                    if(!empty($glance_table)){
                                        foreach($glance_table as $glance_tables){
                                          $glance_titles = $glance_tables['glance_titles'];
                                          $glance_texts = $glance_tables['glance_texts'];
                                          $glance_button = $glance_tables['glance_button'];
                                          $glance_select = $glance_tables['glance_select'];
                                          if($glance_select == 1){
                                            $tab_data = ' <td>'.$glance_texts.'</td>';
                                          }else{
                                            $tab_data = '<td><a href="'.$glance_button['url'].'" class="theme-btn">'.$glance_button['title'].'</a></td>';
                                          }
                                          ?>
                                            <tr>
                                                <?php if(!empty($glance_titles)){echo '<th>'.$glance_titles.'</th>';} ?>
                                                <?php if(!empty($tab_data)){echo $tab_data;} ?>
                                            </tr>
                                          <?php
                                        }
                                    }
                                  ?>
                             </tbody>
                        </table>
                    </div>

                    <?php 
                    $book_now_title = get_field('book_now_title');
                    $book_now_texts = get_field('book_now_texts');
                    $book_now_button = get_field('book_now_button');
                    $book_now_slider = get_field('book_now_slider');
                    ?>
                    <div class="book-online" id="book-online" >
                          <div class="row">
                              <div class="col-md-6 mb-4 mb-md-0">
                                  <div class="content-block">
                                      <?php if(!empty($book_now_title)){echo '<h2>'.$book_now_title.'</h2>';} ?>
                                      <?php if(!empty($book_now_texts)){echo wpautop($book_now_texts);} ?>
                                      <?php if(!empty($book_now_button)){echo ' <a href="'.$book_now_button['url'].'" class="theme-btn">'.$book_now_button['title'].'</a>';} ?>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                   <div class="book-online-slider">
                                        <div class="book-online-list">
                                            <?php 
                                                if(!empty($book_now_slider)){
                                                    foreach($book_now_slider as $book_now_sliders){
                                                        $book_now_slider_image = $book_now_sliders['book_now_slider_image'];
                                                        ?>
                                                            <div class="book-onlin-slide">
                                                                <?php if(!empty($book_now_slider_image)){echo wp_get_attachment_image($book_now_slider_image['ID'] , 'full');} ?>
                                                            </div>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                          
                                        </div>
                                   </div>
                              </div>
                          </div>
                    </div>


                </div>
            </div>
        </div>
     </div>
</section>

